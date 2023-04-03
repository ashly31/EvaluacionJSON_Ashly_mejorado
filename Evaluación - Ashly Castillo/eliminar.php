<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $idC = $_POST["idC"];
        $my_query = "delete from coordinador where idC =".$idC;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'regsitro eliminado con exito';
        } else { 
            echo 'error';
        }
    } else {
        echo 'unknown error';
    }

?>