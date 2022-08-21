<?php 
session_start();
include_once "../base/inicializa.php";

if(isset($_POST['btn_church'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $site = $_POST['site'];

    if($database->query("INSERT INTO igrejas (nome, endereco, website) VALUES ('$nome', '$endereco', '$site')")){
        redirect("../index.php");
    }else{
        echo mysqli_error($connect);
        $_SESSION['error'] = "Erro no cadastro";
        redirect("../pages/cad_igreja.php");

    }
}


?>