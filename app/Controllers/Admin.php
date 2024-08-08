<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Products;
use App\Models\Category;
use App\Models\Carousel;
use App\Models\Banner;

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

    public function banner() {
        $banner = new Banner();
        $data["list"] = $banner->findAll();
        return view("admin/banner_list", $data);
    }

    public function banner_add_edit_view() {
        $detail = array();
        $banner = new Banner();
        if(!empty($this->request->getGet("id"))) {
            $detail = $banner->find($this->request->getGet("id"));
        }

        $data["detail"] = $detail;
        return view("admin/banner_add_edit", $data);
    }

    public function banner_add_edit_post() {
        $validation = \Config\Services::validation();

        $rules = [
            'title'  => 'required|min_length[3]'
        ];

        $image = $this->request->getFile('image');
        if(empty($this->request->getPost('id'))) {
            $rules['image'] = [  
                'label' => 'Image File',
                'rules' => 'uploaded[image]'  
                    . '|is_image[image]'  
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]' 
            ];
        } else {
            if($image->getSize() > 0) {
                $rules['image'] = [  
                    'label' => 'Image File',
                    'rules' => 'uploaded[image]'  
                        . '|is_image[image]'
                        . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp,image/avif]' 
                ];
            }
        }

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
        ];

        $banner = new Banner();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'is_show' => $this->request->getPost('is_show')
        ];

        if($image->getSize() > 0) {
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/image', $filename);
        }

        if(!empty(trim($image->getName()))) {
            $data["image"] = $image->getName(); // base_url("image/" . $image->getName());
        }

        if(empty($this->request->getPost('id'))) {
            $banner->insert($data);
        } else {
            $banner->update($this->request->getPost('id'), $data);
        }

        session()->setFlashdata('success', 'Data berhasil di simpan');
        return redirect()->to(base_url('admin/banner'));
    }

    public function delete_banner() {
        $banner = new Banner();
        helper('filesystem');

        $detail = $banner->find($this->request->getGet("id"));
        if(!empty(trim($detail["image"]))) {
            unlink(
                set_realpath(ROOTPATH . 'public/image/' . $detail["image"])
            );
        }

        $banner->delete($this->request->getGet("id"));
        session()->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to(base_url('admin/banner'));
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
        $rules = [
            'name'  => 'required|min_length[3]'
        ];

        $validation->setRules($rules);

        $image = $this->request->getFile('image');

        if($image->getSize() > 0) {
            $rules['image'] = [  
                'label' => 'Image File',
                'rules' => 'uploaded[image]'  
                    . '|is_image[image]'
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp,image/avif]' 
            ];
        }

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        if($image->getSize() > 0) {
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/image', $filename);
        }
        
        $data = [
            'name' => $this->request->getPost('name'),
        ];

        if(!empty(trim($image->getName()))) {
            $data["image"] = $image->getName(); // base_url("image/" . $image->getName());
        }

        // 'image' => $this->request->getPost('image'),
        if(empty($this->request->getPost('id'))) {
            $this->categoryModel->insert($data);
        } else {
            $this->categoryModel->update($this->request->getPost('id'), $data);
        }

        session()->setFlashdata('success', 'Data berhasil di simpan');
        return redirect()->to(base_url('admin/categories'));
    }

    public function delete_category() {
        helper('filesystem');

        $detail = $this->categoryModel->find($this->request->getGet("id"));
        if(!empty(trim($detail["image"]))) {
            unlink(
                set_realpath(ROOTPATH . 'public/image/' . $detail["image"])
            );
        }

        $this->categoryModel->delete($this->request->getGet("id"));
        session()->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to(base_url('admin/banner'));
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

        $image = $this->request->getFile('image');
        
        $validation = \Config\Services::validation();

        $rules = [
            'name'  => 'required|min_length[3]',
            'price' => 'required|min_length[3]'
        ];

        if($image->getSize() > 0) {
            $rules['image'] = [  
                'label' => 'Image File',
                'rules' => 'uploaded[image]'  
                    . '|is_image[image]'  
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp,image/avif]' 
            ];
        }

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        if($image->getSize() > 0) {
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/image', $filename);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => (int) preg_replace('/,/', '', $this->request->getPost('price')),
            'location' => $this->request->getPost('location')
        ];
        
        if(!empty(trim($image->getName()))) {
            $data["image"] = $image->getName(); // base_url("image/" . $image->getName());
        }

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

    public function delete_product() {
        helper('filesystem');

        $detail = $this->productModel->find($this->request->getGet("id"));
        if(!empty(trim($detail["image"]))) {
            unlink(
                set_realpath(ROOTPATH . 'public/image/' . $detail["image"])
            );
        }

        $this->productModel->delete($this->request->getGet("id"));
        session()->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to(base_url('admin/banner'));
    }

    public function home_content() {
        $carousel = new Carousel();
        $data["datum"] = $carousel->findAll();
        return view("admin/home_list", $data);
    }

    public function view_add_edit_home_content() {

        $detail = array();
        if(!empty($this->request->getGet("id"))) {
            $carousel = new Carousel();
            $detail = $carousel->find($this->request->getGet("id"));
        }

        $data["detail"] = $detail;
        $data["products"] = $this->productModel->findAll();
        return view("admin/home_add_edit", $data);   
    }

    public function add_edit_home_content_post() {

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'  => 'required|min_length[3]',
            'show_front'  => 'required|min_length[2]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'item' => implode(",", $this->request->getPost('items')),
            'show_front' => $this->request->getPost('show_front')
        ];

        $carousel = new Carousel();
        if(empty($this->request->getPost('id'))) {
            $carousel->insert($data, false);
        } else {
            $carousel->update($this->request->getPost('id'), $data);
        }   

        session()->setFlashdata('success', 'Data berhasil di simpan');
        return redirect()->to(base_url('admin'));
    }

    public function delete_home() {
        helper('filesystem');

        $carousel = new Carousel();
        $carousel->delete($this->request->getGet("id"));
        session()->setFlashdata('success', 'Data berhasil di hapus');
        return redirect()->to(base_url('admin/banner'));
    }
}
