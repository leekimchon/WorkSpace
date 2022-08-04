<?php
class CategoriesModel extends DB{
    function count_categories(){
        $sql = "SELECT COUNT(id) FROM categories WHERE display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $result = $result["COUNT(id)"];
        return $result;
    }
    function show_categories($start, $limit){
        $sql = "SELECT * FROM categories 
        WHERE display = 1 ORDER BY name ASC LIMIT $start, $limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
    function show_full_categories(){
        $sql = "SELECT * FROM categories 
        WHERE display = 1 ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function show_categories_trash(){
        $sql = "SELECT * FROM categories WHERE display = 0 ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function check_add_category($name_category){
        $sql = "SELECT id FROM categories WHERE name = '$name_category' AND display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function add_categoty($name_category){
        $sql = "INSERT INTO categories VALUES ('', '$name_category', 1)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function show_name_category_update($id_category){
        $sql = "SELECT name FROM categories WHERE id = $id_category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function update_category($id_category, $update_name_category){
        $sql = "UPDATE categories SET name = '$update_name_category' WHERE id = $id_category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function delete_category($id_category){
        $sql = "UPDATE categories SET display = 0 WHERE id = $id_category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function un_delete_category($id_category){
        $sql = "UPDATE categories SET display = 1 WHERE id = $id_category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function search_categories($key_search){
        $sql = "SELECT * FROM categories WHERE display = 1 AND name LIKE '%$key_search%' ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>