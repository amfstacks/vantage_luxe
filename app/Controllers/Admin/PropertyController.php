<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PropertyModel;
use CodeIgniter\HTTP\ResponseInterface;

class PropertyController extends BaseController
{
    protected $propertyModel;

    public function __construct()
    {
        $this->propertyModel = new PropertyModel();
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