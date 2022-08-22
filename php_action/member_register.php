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
    if(isset($_POST['estado'])){
        $id_estado = $_POST['estado'];
        $estado = comunica_api("https://servicodados.ibge.gov.br/api/v1/localidades/estados/$id_estado");
        $estado = $estado['nome'];
    }
    if(isset($_POST['cidade'])){
        $cidade = $_POST['cidade'];
    }else{
        $cidade = "";
    }
    $igreja = $_POST['igreja'];

    $q = $database->query("SELECT cpf FROM membros WHERE cpf = '$cpf'");
    if($database->num_rows($q)){
        $error = "CPF já cadastrado!";
        $_SESSION['error'] = $error;
        redirect('../pages/cad_membro.php');
    }elseif(!$igreja){
        $error = "Selecione uma igreja";
        $_SESSION['error'] = $error;
        redirect('../pages/cad_membro.php');
    }else{
        $database->query("INSERT INTO membros (nome, cpf, nascimento, email, telefone, logradouro, estado, cidade, pertence_igreja) VALUES ('$nome', '$cpf', '$nascimento', '$email', '$telefone', '$logradouro', '$estado', '$cidade', '$igreja')");
        mysqli_error($connect);
        redirect('../index.php');
    }
}
?>