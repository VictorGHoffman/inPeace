<?php 
include_once "../base/inicializa.php";

if(isset($_POST['estado'])){
    $estado = $_POST['estado'];
    $cidades = comunica_api("https://servicodados.ibge.gov.br/api/v1/localidades/estados/$estado/municipios");
    foreach($cidades as $cidade){
        echo "<option value='".$cidade['nome']."'>".$cidade['nome']."</option>";
    }
}

?>