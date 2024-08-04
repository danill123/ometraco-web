<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Products;
use App\Models\Category;

class Admin extends BaseController
{
    protected $productModel;
    protected $categoryModel;
    public function __construct()
    {
        $this->productModel = new Products();
        $this->categoryModel = new Category();
    }

    public function index()
    {
        //
    }

    public function categories() {
        $data["list"] = $this->categoryModel->findAll();
        return view("admin/category_list", $data);
    }

    public function add_edit_categories() {
        $detail = array();
        if(!empty($this->request->getGet("id"))) {
            $detail = $this->categoryModel->find($this->request->getGet("id"));
        }

        $data["detail"] = $detail;
        return view("admin/category_add_edit", $data);
    }

    public function insert_update_categories() {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'  => 'required|min_length[3]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
        ];

        // 'image' => $this->request->getPost('image'),
        if(empty($this->request->getPost('id'))) {
            $this->categoryModel->insert($data);
        } else {
            $this->categoryModel->update($this->request->getPost('id'), $data);
        }

        session()->setFlashdata('success', 'Data berhasil di simpan');
        return redirect()->to(base_url('admin/categories'));
    }

    public function products() {
        $data["list"] = $this->productModel->findAll();
        return view("admin/products_list", $data);
    }

    public function add_edit_product() {
        $detail = array();
        if(!empty($this->request->getGet("id"))) {
            $detail = $this->productModel->find($this->request->getGet("id"));
        }

        $categories = [];
        foreach ($this->productModel->getCategories($this->request->getGet("id")) as $key => $item) {
            $categories[] = $item["category_id"];
        }

        $data["detail"] = $detail;
        $data["categories"] = $this->categoryModel->findAll(); // where('active', 1)->findAll(); $userModel->getInsertID();
        $data["category_select"] = $categories;
        return view('admin/product_add_edit', $data);
    }

    public function insert_update_product() {

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'  => 'required|min_length[3]',
            'price' => 'required|min_length[3]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => (int) preg_replace('/,/', '', $this->request->getPost('price')),
            'location' => $this->request->getPost('location')
        ];
        
        // 'image' => $this->request->getPost('image'),
        if(empty($this->request->getPost('id'))) {
            if($this->productModel->insert($data, false)) {
                $product_id = $this->productModel->getInsertID();
                $this->productModel->insertCategories($product_id, $this->request->getPost('categories'));
            }
        } else {
            if($this->productModel->update($this->request->getPost('id'), $data)) {
                $product_id = $this->request->getPost('id');
                $this->productModel->insertCategories($product_id, $this->request->getPost('categories'));
            }
        }        

        session()->setFlashdata('success', 'Data berhasil di simpan');
        return redirect()->to(base_url('admin/products'));
    }
}
