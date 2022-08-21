<?php
include_once "../base/inicializa.php";

if(isset($_POST['id'])){
    $data = str_replace('/','-',$_POST['data']);
    echo $data;
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $nascimento = date('Y-m-d',strtotime($data));
    $tel = $_POST['tel'];
    $log = $_POST['log'];
    $database->query("UPDATE membros SET nome = '$nome', cpf = '$cpf', nascimento = '$nascimento', email = '$email', telefone = '$tel', logradouro = '$log' WHERE id ='$id'");

}


?>