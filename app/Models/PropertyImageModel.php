<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyImageModel extends Model
{
    protected $table            = 'property_images';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;

    protected $allowedFields = [
        'property_id', 'filename', 'original_name', 'file_type',
        'url', 'is_main', 'sort_order'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}