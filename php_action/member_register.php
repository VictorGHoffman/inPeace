<?php 
session_start();
include_once "../base/inicializa.php";

if(isset($_POST['btn_member'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $logradouro = $_POST['logradouro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $igreja = $_POST['igreja'];


    $q = $database->query("SELECT cpf FROM membros WHERE cpf = '$cpf'");
    if($database->num_rows($q)){
        $error = "Membro já cadastrado!";
        $_SESSION['error'] = $error;
        redirect('../pages/cad_membro.php');
    }else{
        $database->query("INSERT INTO membros (nome, cpf, nascimento, email, telefone, logradouro, estado, cidade, pertence_igreja) VALUES ('$nome', '$cpf', '$nascimento', '$email', '$telefone', '$logradouro', '$estado', '$cidade', '$igreja')");
        echo mysqli_error($connect);
        redirect('../index.php');
    }
}


?>