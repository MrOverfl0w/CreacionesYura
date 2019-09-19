<?php
include("html/products.html");
include("html/header.html");
if ($_GET["p"] != ""){
    $sql = "INSERT INTO favoritos (idUsuario, fav1) VALUES (:id, :p)";
    include("dbConnection.php");
    try {
        $db = getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("id", 1);
        $stmt->bindParam("p", $_GET["p"]);
        $stmt->execute();
        $db = null;
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}
?>