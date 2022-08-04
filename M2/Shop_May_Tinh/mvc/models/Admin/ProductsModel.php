<?php
class ProductsModel extends DB{
    function count_products(){
        $sql = "SELECT COUNT(id) FROM products WHERE display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $result = $result["COUNT(id)"];
        return $result;
    }
    function show_products($start, $limit){
        $sql = "SELECT products.*, categories.name as name_categories FROM products 
        JOIN categories ON products.category_id = categories.id
        WHERE products.display = 1 ORDER BY products.name ASC LIMIT $start, $limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function show_trash(){
        $sql = "SELECT products.*, categories.name as name_categories FROM products 
        JOIN categories ON products.category_id = categories.id
        WHERE products.display = 0 ORDER BY products.name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function check_add_Products($name_add){
        $sql = "SELECT id FROM products WHERE name = '$name_add' AND display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function add_products($data_add){
        extract($data_add);
        $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `gia_goc`, `gia_ban`, `bao_hanh_xuat_xu`, `anh`, `ngay_tao`, `ngay_sua`, `display`) 
        VALUES (NULL, '$add_id_category', '$name_add', '$add_gia_goc', '$add_gia_ban', '$add_bao_hanh_xuat_xu', '$add_link_anh', current_timestamp(), current_timestamp(), '1')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function show_products_old($id_products){
        $sql = "SELECT products.*, categories.name as name_categories FROM products 
        JOIN categories ON products.category_id = categories.id
        WHERE products.display = 1 AND products.id = $id_products
        ORDER BY products.name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
    function update_products($data_update_products){
        extract($data_update_products);
        $sql = "UPDATE products 
            SET name = '$name_update', 
            gia_goc = $update_gia_goc, 
            gia_ban = $update_gia_ban, 
            bao_hanh_xuat_xu = '$update_bao_hanh_xuat_xu', 
            anh = '$update_link_anh',
            ngay_sua = current_timestamp(),
            category_id = $update_id_category
            WHERE id = $id_products;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function delete_products($id_products){
        $sql = "UPDATE products SET display = 0 WHERE id = $id_products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function un_delete_products($id_products){
        $sql = "UPDATE products SET display = 1 WHERE id = $id_products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function search($key_search){
        $sql = "SELECT products.*, categories.name as name_categories FROM products 
        JOIN categories ON products.category_id = categories.id
        WHERE products.display = 1 AND products.name LIKE '%$key_search%' ORDER BY products.name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>