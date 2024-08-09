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
        $data = [];
        $db = \Config\Database::connect();
        // $db->query("SET SESSION sql_mode = (SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");

        $categories   = $db->query('SELECT id, name, image FROM `categories` WHERE show_menu = "yes"');

        $data["categories"] = $categories->getResult();

        $banners   = $db->query('SELECT title, description, image, show_text FROM `banners` WHERE is_show = "yes"');

        $data["banners"] = $banners->getResult();

        $carousels = $db->query("  SELECT * FROM carousels WHERE show_front = 'yes'")->getResult();

        foreach ($carousels as $key => &$item) {
            $item->products = $db->table('products')->select('id, name, price, image, location') ->whereIn('id', explode(",", $item->item))->get()->getResultArray();
        }

        
        $data["carousel_list"] = $carousels;
        $data["products"] = $this->productModel->findAll();

        $db->close();

        return view('home', $data);
    }

    public function category(): string
    {
        $db = \Config\Database::connect();

        $products = $db->query('SELECT products.id, products.name, products.price, products.image, products.location
                                FROM `product_categories` INNER JOIN products ON products.id = `product_categories`.product_id
                                WHERE product_categories.category_id = ?', [$this->request->getGet("id")]);

        $data['datum'] = $products->getResult();
        $data["category_name"] = "";
        $data["category_id"] = "";

        $category = $db->query('SELECT * FROM categories 
                                WHERE id = ?', [$this->request->getGet("id")]);

        foreach ($category->getResult() as $key => $value) {
            $data["category_name"] = $value->name;
            $data["category_id"] = $value->id;
        }

        $db->close();

        return view('category', $data);
    }

    public function search(): string
    {
        $db = \Config\Database::connect();

        $products = $db->query('SELECT products.id, products.name, products.price, products.image, products.location
                                FROM products
                                WHERE name LIKE ?', ['%'.$this->request->getGet("q").'%']);

        $data['datum'] = $products->getResult();
        $data['keywords'] = $this->request->getGet("q");

        $db->close();
        return view('search', $data);
    }

    public function product() {
        $data = $this->productModel->find($this->request->getGet("id"));

        $db = \Config\Database::connect();

        $category = $db->query('SELECT categories.`name`, product_categories.category_id
                                FROM `product_categories` INNER JOIN categories ON categories.id = `product_categories`.category_id 
                                WHERE product_categories.product_id = ?', [$this->request->getGet("id")]);

        $data["category_name"] = "";
        $data["category_id"] = "";
        foreach ($category->getResult() as $key => $value) {
            $data["category_name"] = $value->name;
            $data["category_id"] = $value->category_id;
        }

        $products = $db->query('SELECT products.id, products.name, products.price, products.image, products.location
                                FROM `product_categories` INNER JOIN products ON products.id = `product_categories`.product_id
                                WHERE product_categories.category_id = ? AND product_categories.product_id != ?', [$data["category_id"], $this->request->getGet("id")]);

        $data['related_products'] = $products->getResult();

        $db->close();

        return view('product', $data);
    }

    public function contact() {
        return view('contact');
    }
}
