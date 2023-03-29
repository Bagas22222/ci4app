<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $product = new ProductModel();
        echo $product -> getData();
    }

    public function insertData()
    {
        $product = new ProductModel();
        $insert = $product -> insert ([
            'name' => 'Redmi Note 9 Pro',
            'price' => '3499000'
        ]);
        if($insert) {
            echo "Data berhasil diinsert";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }
    }
}