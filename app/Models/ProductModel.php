<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
        protected $table = 'tb_product';
        protected $primaryKey = 'kd_product';
        protected $returnType = 'object';
        protected $useSoftDeletes = 'true';
        protected $allowedFields = ['nama', 'price'];
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $validationRules = [
            'nama' => 'required|min_length[3]',
            'price' => 'required|numeric',
        ];
        protected $validationMessages = [
            'nama' => [
                'required' => 'Bagian Nama Harus Diisi',
                'min_length' => 'Minimal 3 Karakter'
            ],
            'price' => [
                'required' => 'Bagian Price Harus Diisi',
                'numeric' => 'Hanya bisa diisi dengan angka'
            ]
        ];
        protected $skipValidation = false;
    
    public function getData()
    {
        return 'Ini adalah Method getData di dalam ProductModel';
    }
}