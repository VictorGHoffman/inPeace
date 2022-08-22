<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$db_name = "crud_igreja";

$connect = mysqli_connect($servername,$username,$password);

if($connect){
    $db = $database->query("CREATE DATABASE $db_name");
    if($db){
        $database->query("USE $db_name");
        $member_table = $database->query("CREATE TABLE `membros` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `cpf` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `telefone` VARCHAR(255) NOT NULL , `logradouro` VARCHAR(255) NOT NULL , `nascimento` DATE NOT NULL , `cidade` VARCHAR(255) NOT NULL , `estado` VARCHAR(255) NOT NULL , `pertence_igreja` INT(11) NOT NULL , PRIMARY KEY (`id`))");
        if(!$member_table){
            echo mysqli_error($connect);
        }else{
            $church_table = $database->query("CREATE TABLE `igrejas` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `endereco` VARCHAR(255) NOT NULL , `website` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`))");
            if(!$church_table){
                echo mysqli_error($connect);
            }
        }
    }else{
        mysqli_select_db($connect,$db_name);
    }
}

if(mysqli_connect_error()){
    echo "falha na conexao".mysqli_connect_error();
}
?>