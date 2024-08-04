<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        //
    }

    public function products() {
        // echo "list products";
        // exit;
        return view("admin/products_list");
    }

    public function add_product() {
        // $request = service('request');
        // var_dump($request->getGet());
        // exit;
        return view('admin/product_add_edit');
    }

    public function insert_update_product() {
        if($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name'  => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email|max_length[100]',
                'message' => 'required|min_length[5]'
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                // Validation failed, display errors
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }

            var_dump($this->request->getPost());
            exit;
        }
    }
}
