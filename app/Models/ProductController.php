<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $products = (new Product())->all();
        require 'views/product_list.php';
    }

    public function delete() {
        $id = $_GET['id'] ?? 0;
        (new Product())->delete($id);
        header("Location: index.php?page=product-list");
    }

    public function detail() {
        $id = $_GET['id'] ?? 0;
        $product = (new Product())->find($id);
        require 'views/product_detail.php';
    }

    public function create() {
        require 'views/product_add.php';
    }

    public function store() {
        if (empty($_POST['name']) || empty($_POST['price'])) {
            die("Không được để trống");
        }

        $data = [
            $_POST['name'],
            $_POST['price'],
            $_POST['image'],
            $_POST['description']
        ];

        (new Product())->insert($data);
        header("Location: index.php?page=product-list");
    }

    public function edit() {
        $id = $_GET['id'];
        $product = (new Product())->find($id);
        require 'views/product_edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $data = [
            $_POST['name'],
            $_POST['price'],
            $_POST['image'],
            $_POST['description']
        ];
        (new Product())->update($id, $data);
        header("Location: index.php?page=product-list");
    }
}