<?php

use database as GlobalDatabase;

function console_log($valor){
    if(is_array($valor)){
        echo "<script>console.log('".implode(',',$valor)."')</script>";
    }
    else{
        echo "<script>console.log('".$valor."')</script>";
    }
    
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
    function ChangeDB($n_db){
        return $this->connect = $n_db;
    }
}
$database = new database();

?>

