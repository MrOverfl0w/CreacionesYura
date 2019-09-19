<?php
$sql = "SELECT fav1 FROM favoritos";
    include("dbConnection.php");
    try {
        $stmt = getConnection()->query($sql);
        $code = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        $productos = json_encode($code);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
include("html/favoritos.html");
include("html/header.html");

?>