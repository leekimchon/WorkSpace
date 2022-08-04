<?php
class RolesModel extends DB{
    function count_roles(){
        $sql = "SELECT COUNT(id) FROM roles WHERE display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $result = $result["COUNT(id)"];
        return $result;
    }
    function show_roles($start, $limit){
        $sql = "SELECT * FROM roles WHERE display = 1 ORDER BY name ASC LIMIT $start, $limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function search_role($key_search){
        $sql = "SELECT * FROM roles WHERE display = 1 AND name LIKE '%$key_search%' ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function show_roles_trash(){
        $sql = "SELECT * FROM roles WHERE display = 0 ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function check_add_role($name_role){
        $sql = "SELECT id FROM roles WHERE name = '$name_role' AND display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function add_role($name_role){
        $sql = "INSERT INTO roles VALUES ('', '$name_role', 1)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function show_name_role_update($id_role){
        $sql = "SELECT name FROM roles WHERE id = $id_role";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function update_role($id_role, $update_name_role){
        $sql = "UPDATE roles SET name = '$update_name_role' WHERE id = $id_role";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function delete_role($id_role){
        $sql = "UPDATE roles SET display = 0 WHERE id = $id_role";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function un_delete_role($id_role){
        $sql = "UPDATE roles SET display = 1 WHERE id = $id_role";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>