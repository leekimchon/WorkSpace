<?php
class UsersModel extends DB{
    function count_users(){
        $sql = "SELECT COUNT(id) FROM users WHERE display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $result = $result["COUNT(id)"];
        return $result;
    }
    function show_users($start, $limit, $key_search = ''){
        $sql = "SELECT users.*, roles.name as role_name FROM users 
        JOIN roles
        ON users.role_id  = roles.id 
        WHERE users.display = 1 ORDER BY users.full_name ASC LIMIT $start, $limit";

        if(!empty($key_search)){
            $sql = "SELECT users.*, roles.name as role_name FROM users 
            JOIN roles
            ON users.role_id  = roles.id 
            WHERE users.full_name LIKE '%$key_search%' AND users.display = 1 ORDER BY users.full_name ASC LIMIT $start, $limit";
        }

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function show_users_trash(){
        $sql = "SELECT users.*, roles.name as role_name FROM users 
        JOIN roles
        ON users.role_id  = roles.id 
        WHERE users.display = 0 ORDER BY users.full_name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }

    function un_delete_user($id_user){
        $sql = "UPDATE users SET display = 1 WHERE id = $id_user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function delete_user($id_user){
        $sql = "UPDATE users SET display = 0 WHERE id = $id_user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function show_user_old($id_user){
        $sql = "SELECT users.*, roles.name as role_name FROM users 
        JOIN roles
        ON users.role_id  = roles.id 
        WHERE users.id = $id_user ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function show_full_roles(){
        $sql = "SELECT * FROM roles WHERE display = 1 ORDER BY name ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
    function check_email_user_update($email){
        $sql = "SELECT * FROM users WHERE email = '$email' AND display = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function update_user($data_update_user){
        extract($data_update_user);
        $sql = "UPDATE users 
            SET full_name = '$update_full_name_user', 
            email = '$update_email_user', 
            phone_number = '$update_phone_number_user', 
            address = '$update_address_user', 
            role_id = $update_role_id_user 
            WHERE id = $id_user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>