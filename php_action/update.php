<?php
include_once "../base/inicializa.php";

if(isset($_POST['nome'])){
    $data = str_replace('/','-',$_POST['data']);
    echo $data;
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $nascimento = date('Y-m-d',strtotime($data));
    $tel = $_POST['tel'];
    $log = $_POST['log'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    
    $database->query("UPDATE membros SET nome = '$nome', cpf = '$cpf', nascimento = '$nascimento', email = '$email', telefone = '$tel', logradouro = '$log', cidade = '$cidade', estado = '$estado' WHERE id ='$id'");

}


?>