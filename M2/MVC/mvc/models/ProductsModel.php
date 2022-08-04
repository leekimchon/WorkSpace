<?php
class ProductsModel extends DB{
    function getAll(){
        $sql = "SELECT products.*, categories.name as categories_name FROM products 
        JOIN categories ON
        products.id_category = categories.id
        ORDER BY products.name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function search($key_search){
        $sql = "SELECT products.*, categories.name as categories_name FROM products 
        JOIN categories ON
        products.id_category = categories.id
        WHERE products.name LIKE '%$key_search%'
        ORDER BY products.name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
    function add($data_add){
        extract($data_add);
        $sql = "INSERT INTO `products` (`id`, `name`, `id_category`, `price`, `amount`, `creat_at`, `describe`)
        VALUES (NULL, 'name_product', $category_id, $price, $amount, current_timestamp(), '$describe')";
        // echo $sql; die;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function update($data_update){
        extract($data_update);
        // echo "<pre>";
        // print_r($data_update);die;
        $sql = "UPDATE `products` 
        SET `name`='$name_product',
        `id_category`='$category_id',
        `price`='$price',
        `amount`='$amount',
        `creat_at`=current_timestamp(),
        `describe`='$describe' WHERE id = $id";
        // echo $sql; die;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function delete($id){
        $sql = "DELETE FROM products WHERE id = $id";
        $this->conn->exec($sql);
    }
}