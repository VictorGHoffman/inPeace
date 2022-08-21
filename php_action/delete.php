<?php 
include_once "../base/inicializa.php";
if(isset($_POST['delete'])){
    $id = $_POST['id_perfil'];
    $q = $database->query("DELETE FROM membros WHERE id = '$id'");
    redirect("../index.php");
}
redirect("../index.php");
?>