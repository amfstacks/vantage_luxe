<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table            = 'properties';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;

    protected $allowedFields = [
        'user_id', 'title', 'slug', 'listing_type', 'property_type',
        'status', 'is_featured',
        'address', 'area', 'city', 'state', 'latitude', 'longitude',
        'price', 'currency', 'caution_deposit', 'rate_period',
        'bedrooms', 'bathrooms', 'toilets', 'area_sqft',
        'description', 'short_description',
        'amenities', 'other_features',
        'image_count', 'has_video',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation (you can move to controller if preferred)
    protected $validationRules = [
        'title'        => 'required|min_length[8]|max_length[255]',
        'listing_type' => 'required|in_list[sale,rent,shortlet]',
        'price'        => 'required|decimal',
        'status'       => 'required|in_list[draft,pending,published,rejected,sold,rented]',
    ];

    // Callbacks (optional – example: auto-create slug)
    protected $beforeInsert = ['generateSlug'];
    protected $beforeUpdate = ['generateSlug'];

    protected function generateSlug(array $data)
    {
        if (! isset($data['data']['title'])) {
            return $data;
        }

        $title = $data['data']['title'];
        $slug  = url_title($title, '-', true);

        // Make unique
        $base  = $slug;
        $count = 1;
        while ($this->where('slug', $slug)->countAllResults() > 0) {
            $slug = $base . '-' . $count++;
        }

        $data['data']['slug'] = $slug;
        return $data;
    }
}