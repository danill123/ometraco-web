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
        $db->query("SET SESSION sql_mode = (SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");

        $categories   = $db->query('SELECT id, name, image FROM `categories` WHERE hide_from_menu = "no"');

        $data["categories"] = $categories->getResult();

        $product_category   = $db->query("  SELECT c.*, GROUP_CONCAT(cj.product_id) AS product_ids
                                            FROM categories c
                                            INNER JOIN product_categories cj ON cj.category_id = c.id;")->getResult();

        foreach ($product_category as $key => &$item) {
            $item->products = $db->table('products')->select('id, name, price, image, location') ->whereIn('id', explode(",", $item->product_ids))->get()->getResultArray();
        }

        
        $data["carousel_list"] = $product_category;
        // var_dump("<pre>");
        // var_dump($data);
        // exit;
        $db->close();

        return view('home', $data);
    }
}
