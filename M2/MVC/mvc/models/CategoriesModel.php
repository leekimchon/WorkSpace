<?php
class CategoriesModel extends DB{
    function getAll(){
        $sql = "SELECT * FROM categories
        ORDER BY name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>