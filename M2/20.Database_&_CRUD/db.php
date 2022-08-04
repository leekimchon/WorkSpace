<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=bt1", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
}
?>