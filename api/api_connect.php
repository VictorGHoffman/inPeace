<?php 
$estados = json_decode(file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados"),true);
$cidades = json_decode(file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados/ES/municipios"),true);

?>