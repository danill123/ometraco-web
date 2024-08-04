<?php

namespace App\Controllers;

use App\Models\Products;

class Home extends BaseController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new Products();
    }

    public function index(): string
    {
        // var_dump($this->productModel->findAll());
        // $db = \Config\Database::connect();
        // var_dump($db);
        // $query   = $db->query('SELECT * FROM databarang_masuk');
        // $results = $query->getResult();
        // var_dump("<pre>");
        // var_dump($results);
        // exit;
        return view('home');
    }
}
