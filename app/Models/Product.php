<?php
namespace App\Models;
use PDO;
class Product extends BaseModel {

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id=?");
        return $stmt->execute([$id]);
    }

    public function insert($data) {
        $sql = "INSERT INTO products(name, price, image, description)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $sql = "UPDATE products 
                SET name=?, price=?, image=?, description=?
                WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([...$data, $id]);
    }
}