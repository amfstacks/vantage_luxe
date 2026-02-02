<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PropertyModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Database\BaseConnection;

class PropertyController extends BaseController
{
    protected $propertyModel;
    protected $db;

    public function __construct()
    {
        $this->propertyModel = new PropertyModel();
        $this->db = db_connect();
    }

    // List all properties
    public function index()
    {
        $data = [
            'title'      => 'Properties - ' .  config('App')->appName,
            'properties' => $this->propertyModel->findAll(),
        ];

        return view('admin/properties/index', $data);
    }

    // Show create form
    public function create()
    {
        $data = [
            'title' => 'Add Property - ' . config('App')->appName,
            'edit'  => false,
        ];

        return view('admin/properties/create', $data);
    }

    // Save new property
    public function store__()
    {
        $rules = [
            'title'        => 'required|min_length[5]|max_length[255]',
            'listing_type' => 'required|in_list[sale,rent,shortlet]',
            'price'        => 'required|decimal',
            'location'     => 'permit_empty|max_length[255]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost();

        // Handle multiple images (basic example)
        $images = $this->request->getFiles('images');
        if ($images && count($images) > 0) {
            // You should move/upload them here and save paths
            // For now we skip detailed upload logic
        }

        $this->propertyModel->insert($data);

        return redirect()->to('/admin/properties')
                         ->with('message', 'Property created successfully.');
    }
public function store___()
{
    // Validation rules
    $rules = [
        'title'        => 'required|min_length[5]|max_length[255]',
        'listing_type' => 'required|in_list[sale,rent,shortlet]',
        'price'        => 'required|decimal',
        'location'     => 'permit_empty|max_length[255]',
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()
                         ->withInput()
                         ->with('errors', $this->validator->getErrors());
    }

    $data = $this->request->getPost();

    // 1. Save property → get ID
    $propertyId = $this->propertyModel->insert($data);

    if (! $propertyId) {
        return redirect()->back()
                         ->withInput()
                         ->with('error', 'Failed to create property.');
    }

    // 2. Prepare upload folders
    $baseDir = FCPATH . 'uploads/properties/' . $propertyId . '/';
    $thumbDir = $baseDir . 'thumb/';
    $mediumDir = $baseDir . 'medium/';

    if (! is_dir($baseDir))    mkdir($baseDir,    0755, true);
    if (! is_dir($thumbDir))   mkdir($thumbDir,   0755, true);
    if (! is_dir($mediumDir))  mkdir($mediumDir,  0755, true);

    // 3. Handle images – correct loop
    $uploadedImages = $this->request->getFiles('images');  // returns array or null
    $imagePaths = [];

    if ($uploadedImages && is_array($uploadedImages)) {
        foreach ($uploadedImages as $file) {
            // $file is UploadedFile object
            if ($file->isValid() && str_starts_with($file->getMimeType(), 'image/')) {
                $newName = $file->getRandomName();

                // Move original
                $file->move($baseDir, $newName);

                // Create thumbnail (200x200)
                $this->createThumbnail($baseDir . $newName, $thumbDir . $newName, 200, 200);

                // Create medium (800x600)
                $this->createThumbnail($baseDir . $newName, $mediumDir . $newName, 800, 600);

                // Store the medium path (most useful for display)
                $imagePaths[] = 'uploads/properties/' . $propertyId . '/medium/' . $newName;
            }
        }
    }

    // 4. Save image paths as JSON
    if (! empty($imagePaths)) {
        $this->propertyModel->update($propertyId, [
            'images' => json_encode($imagePaths)
        ]);
    }

    // 5. Handle amenities (predefined + custom)
    $selectedIds = $this->request->getPost('amenities') ?? [];
    $amenityNames = [];

    if (! empty($selectedIds)) {
        // Save to pivot table
        $pivotData = [];
        foreach ($selectedIds as $amenityId) {
            $pivotData[] = [
                'property_id' => $propertyId,
                'amenity_id'  => (int)$amenityId
            ];
        }
        $this->db->table('property_amenities')->insertBatch($pivotData);

        // Get names for SEO/text field
        $names = $this->db->table('amenities')
                          ->select('name')
                          ->whereIn('id', $selectedIds)
                          ->get()
                          ->getResultArray();

        $amenityNames = array_column($names, 'name');
    }

    // Custom amenities
    $customJson = $this->request->getPost('custom_amenities');
    $custom = $customJson ? json_decode($customJson, true) : [];
    if (! empty($custom)) {
        $this->propertyModel->update($propertyId, [
            'custom_amenities' => json_encode($custom)
        ]);
        $amenityNames = array_merge($amenityNames, $custom);
    }

    // Merge all into properties.amenities for SEO/search
    if (! empty($amenityNames)) {
        $this->propertyModel->update($propertyId, [
            'amenities' => json_encode($amenityNames)
        ]);
    }

    return redirect()->to('/admin/properties')
                     ->with('success', 'Property created successfully with ' . count($imagePaths) . ' images.');
}
public function store()
{
    $rules = [
        'title'        => 'required|min_length[5]|max_length[255]',
        'listing_type' => 'required|in_list[sale,rent,shortlet]',
        'price'        => 'required|decimal',
        'location'     => 'permit_empty|max_length[255]',
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = $this->request->getPost();

    // Save property → get ID
    $propertyId = $this->propertyModel->insert($data);

    if (! $propertyId) {
        return redirect()->back()->withInput()->with('error', 'Failed to create property.');
    }

    // Prepare folders
    $baseDir   = FCPATH . 'uploads/properties/' . $propertyId . '/';
    $thumbDir  = $baseDir . 'thumb/';
    $mediumDir = $baseDir . 'medium/';

    if (!is_dir($baseDir))    mkdir($baseDir,    0755, true);
    if (!is_dir($thumbDir))   mkdir($thumbDir,   0755, true);
    if (!is_dir($mediumDir))  mkdir($mediumDir,  0755, true);

    // Handle images – SAFE version
    $uploadedFiles = $this->request->getFiles('images');
    $imagePaths = [];

    // Normalize to flat array (handles both cases)
    $files = [];
    if ($uploadedFiles) {
        if (isset($uploadedFiles[0]) && is_array($uploadedFiles[0])) {
            // Nested array (common in some browsers/PHP)
            $files = array_merge(...$uploadedFiles);
        } else {
            // Flat array (normal case)
            $files = $uploadedFiles;
        }
    }

    foreach ($files as $file) {
        // Now $file should be UploadedFile object
        if ($file instanceof \CodeIgniter\HTTP\Files\UploadedFile) {
            if ($file->isValid() && str_starts_with($file->getMimeType(), 'image/')) {
                $newName = $file->getRandomName();

                // Move original
                $file->move($baseDir, $newName);

                // Create thumbnails
                $this->createThumbnail($baseDir . $newName, $thumbDir . $newName, 200, 200);
                $this->createThumbnail($baseDir . $newName, $mediumDir . $newName, 800, 600);

                $imagePaths[] = 'uploads/properties/' . $propertyId . '/medium/' . $newName;
            }
        }
    }

    // Save paths
    if (!empty($imagePaths)) {
        $this->propertyModel->update($propertyId, [
            'images' => json_encode($imagePaths)
        ]);
    }

    // ── Amenities handling (unchanged from your version) ──
    $selectedIds = $this->request->getPost('amenities') ?? [];
    $amenityNames = [];

    if (!empty($selectedIds)) {
        $pivotData = [];
        foreach ($selectedIds as $amenityId) {
            $pivotData[] = [
                'property_id' => $propertyId,
                'amenity_id'  => (int)$amenityId
            ];
        }
        $this->db->table('property_amenities')->insertBatch($pivotData);

        $names = $this->db->table('amenities')
                          ->select('name')
                          ->whereIn('id', $selectedIds)
                          ->get()
                          ->getResultArray();

        $amenityNames = array_column($names, 'name');
    }

    $customJson = $this->request->getPost('custom_amenities');
    $custom = $customJson ? json_decode($customJson, true) : [];
    if (!empty($custom)) {
        $this->propertyModel->update($propertyId, [
            'custom_amenities' => json_encode($custom)
        ]);
        $amenityNames = array_merge($amenityNames, $custom);
    }

    if (!empty($amenityNames)) {
        $this->propertyModel->update($propertyId, [
            'amenities' => json_encode($amenityNames)
        ]);
    }

    return redirect()->to('/admin/properties')
                     ->with('success', 'Property created with ' . count($imagePaths) . ' images.');
}
private function createThumbnail(string $sourcePath, string $destPath, int $width, int $height): bool
{
    if (! file_exists($sourcePath)) {
        return false;
    }

    $imageInfo = getimagesize($sourcePath);
    if (! $imageInfo) {
        return false;
    }

    $mime = $imageInfo['mime'];

    switch ($mime) {
        case 'image/jpeg':
            $source = imagecreatefromjpeg($sourcePath);
            break;
        case 'image/png':
            $source = imagecreatefrompng($sourcePath);
            break;
        case 'image/gif':
            $source = imagecreatefromgif($sourcePath);
            break;
        default:
            return false;
    }

    if (! $source) {
        return false;
    }

    $thumb = imagecreatetruecolor($width, $height);

    // Preserve transparency for PNG
    if ($mime === 'image/png') {
        imagealphablending($thumb, false);
        imagesavealpha($thumb, true);
        $transparent = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
        imagefilledrectangle($thumb, 0, 0, $width, $height, $transparent);
    }

    imagecopyresampled($thumb, $source, 0, 0, 0, 0, $width, $height, imagesx($source), imagesy($source));

    switch ($mime) {
        case 'image/jpeg':
            imagejpeg($thumb, $destPath, 85);
            break;
        case 'image/png':
            imagepng($thumb, $destPath, 8);
            break;
        case 'image/gif':
            imagegif($thumb, $destPath);
            break;
        default:
            imagedestroy($source);
            imagedestroy($thumb);
            return false;
    }

    imagedestroy($source);
    imagedestroy($thumb);

    return true;
}
private function createThumbnail_($sourcePath, $destPath, $width, $height)
{
    if (! file_exists($sourcePath)) {
        return false;
    }

    $imageInfo = getimagesize($sourcePath);
    $mime = $imageInfo['mime'];

    switch ($mime) {
        case 'image/jpeg':
            $source = imagecreatefromjpeg($sourcePath);
            break;
        case 'image/png':
            $source = imagecreatefrompng($sourcePath);
            break;
        case 'image/gif':
            $source = imagecreatefromgif($sourcePath);
            break;
        default:
            return false;
    }

    $thumb = imagecreatetruecolor($width, $height);
    imagecopyresampled($thumb, $source, 0, 0, 0, 0, $width, $height, imagesx($source), imagesy($source));

    switch ($mime) {
        case 'image/jpeg':
            imagejpeg($thumb, $destPath, 85);
            break;
        case 'image/png':
            imagepng($thumb, $destPath, 8);
            break;
        case 'image/gif':
            imagegif($thumb, $destPath);
            break;
    }

    imagedestroy($source);
    imagedestroy($thumb);

    return true;
}

    // Show edit form
    public function edit($id)
    {
        $property = $this->propertyModel->find($id);

        if (! $property) {
            return redirect()->to('/admin/properties')->with('error', 'Property not found');
        }

        $data = [
            'title'    => 'Edit Property - ' . config('App')->appName,
            'property' => $property,
            'edit'     => true,
        ];

        return view('admin/properties/create', $data); // reuse create view
    }

    // Update property
    public function update($id)
    {
        $rules = [
            'title'        => 'required|min_length[5]|max_length[255]',
            'listing_type' => 'required|in_list[sale,rent,shortlet]',
            'price'        => 'required|decimal',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost();

        $this->propertyModel->update($id, $data);

        return redirect()->to('/admin/properties')
                         ->with('message', 'Property updated successfully.');
    }

    // Delete property
    public function delete($id)
    {
        $this->propertyModel->delete($id);

        return redirect()->to('/admin/properties')
                         ->with('message', 'Property deleted.');
    }
}