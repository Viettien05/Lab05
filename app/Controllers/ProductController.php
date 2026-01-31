<?php
namespace App\Controllers;
use App\Models\Product;
require_once 'app/Models/Product.php';

class ProductController {

    public function index() {
        $productModel = new Product();
        $products = $productModel->all();
        require 'views/product_list.php';
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $productModel = new Product();
            $productModel->delete($_GET['id']);
        }
        header("Location: index.php?page=product-list");
    }

    public function detail() {
        if (!isset($_GET['id'])) {
            die("Thiếu ID");
        }
        $productModel = new Product();
        $product = $productModel->find($_GET['id']);
        require 'views/product_detail.php';
    }
    public function edit() {
    $id = $_GET['id'] ?? 0;

    if ($id == 0) {
        die("ID không hợp lệ");
    }

    $product = (new Product())->find($id);

    if (!$product) {
        die("Không tìm thấy sản phẩm");
    }

    require 'views/product_edit.php';
}

public function update() {
    $id = $_POST['id'] ?? 0;

    if ($id == 0) {
        die("ID không hợp lệ");
    }

    $data = [
        $_POST['name'],
        $_POST['price'],
        $_POST['image'],
        $_POST['description']
    ];

    (new Product())->update($id, $data);
    header("Location: index.php?page=product-list");
    exit;
}

}