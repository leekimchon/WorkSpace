<?php
class KhachHang extends DB{
    function getALL(){
        $sql = "SELECT * FROM khach_hang";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $resrutl = $stmt->fetchAll();
        return $resrutl;
    }

    function add($name, $email, $address){
        $sql = "INSERT INTO khach_hang VALUES('','$name', '$email', '$address')";
        $this->conn->exec($sql);
    }

    function delete($id){
        $sql = "DELETE FROM khach_hang WHERE ID = $id";
        $this->conn->exec($sql);
    }

    function update($id, $name, $email, $address){
        $sql = "UPDATE khach_hang SET NAME = '$name', EMAIL = '$email', ADDRESS = '$address' WHERE ID = $id";
        $this->conn->exec($sql);
    }
}
?>