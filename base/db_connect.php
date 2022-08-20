<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "inpeace";

$connect = mysqli_connect($servername,$username,$password,$db_name,3308);



if(mysqli_connect_error()){
    echo "falha na conexao".mysqli_connect_error();
}
?>