<?php 
session_start();
include_once "../base/inicializa.php";

if(isset($_POST['btn_church'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $site = $_POST['site'];
    $foto = $_POST['foto'];

    if($database->query("INSERT INTO igrejas (nome, endereco, website, foto) VALUES ('$nome', '$endereco', '$site', '$foto')")){
        redirect("../index.php");
    }else{
        echo mysqli_error($connect);
        $_SESSION['error'] = "Erro no cadastro";
        redirect("../pages/cad_igreja.php");

    }
}


?>