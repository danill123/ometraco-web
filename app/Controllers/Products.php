<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public function index(): string
    {
        //
        // echo "hello world";
        return view("products/detail");
    }
}
