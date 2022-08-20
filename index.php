<?php 
include_once "./base/inicializa.php";
$request = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados/ES/municipios");
$request = json_decode($request,true);

echo $request[0]['microrregiao'];
var_dump($request);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Igrejas</title>
</head>
<body>
    
</body>
</html>