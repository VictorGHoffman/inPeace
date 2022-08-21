<?php 

function console_log($valor){
    if(is_array($valor)){
        echo "<script>console.log('".implode(',',$valor)."')</script>";
    }
    else{
        echo "<script>console.log('".$valor."')</script>";
    }
    
}
function data($valor){
    $valor = strtotime($valor);
    return date("d/m/Y",$valor);
}
function redirect($valor){
    header("Location:".$valor);
}
class database{

    function query($q){
        global $connect;
        return mysqli_query($connect,$q);
    }

    function fetch_object($q){
        return mysqli_fetch_object($q);
    }

    function fetch_array($q){
        return mysqli_fetch_array($q);
    }

    function num_rows($q){
        return mysqli_num_rows($q);
    }
}
$database = new database();

function comunica_api($url){
    return json_decode(file_get_contents($url),true);
}


?>

