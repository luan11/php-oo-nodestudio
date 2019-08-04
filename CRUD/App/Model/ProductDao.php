<?php
namespace App\Model;

class ProductDao {
    public function create(Product $product){
        $query = 'INSERT INTO products (name, description) VALUES (?, ?)';
        $stmt = Connection::getConn()->prepare($query);
        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());
        $stmt->execute();
    }

    public function read(){
        $query = 'SELECT * FROM products';
        $stmt = Connection::getConn()->prepare($query);
        $stmt->execute();
        
        return ($stmt->rowCount() > 0) ? $stmt->fetchAll(\PDO::FETCH_ASSOC) : array();
    }

    public function update(Product $product){
        $query = 'UPDATE products SET name = ?, description = ? WHERE id = ?';
        $stmt = Connection::getConn()->prepare($query);
        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());
        $stmt->bindValue(3, $product->getId());
        $stmt->execute();
    }

    public function delete($id){
        $query = 'DELETE FROM products WHERE id = ?';
        $stmt = Connection::getConn()->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}