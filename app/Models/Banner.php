<?php

namespace App\Models;

use CodeIgniter\Model;

class Banner extends Model
{
    protected $table            = 'banners';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "image", "title", "description", "is_show"
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'title' => 'required|min_length[3]|max_length[255]',
        'image' => 'required|min_length[3]|max_length[255]'
    ];

    protected $validationMessages = [
        'title' => [
            'required' => 'title is required',
            'min_length' => 'title must be at least 3 characters long',
            'max_length' => 'title cannot exceed 255 characters',
        ],
        'image' => [
            'required' => 'image is required',
            'min_length' => 'image must be at least 3 characters long',
            'max_length' => 'image cannot exceed 255 characters',
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
