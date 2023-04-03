<?php
header('Content-Type: application/json');

// Conexión a la base de datos
require_once 'conexion.php';


// Consulta para obtener las personas mayores a 60 años
$my_query = "SELECT * FROM coordinador WHERE fechaNac <= DATE_SUB(CURDATE(), INTERVAL 60 YEAR)";
$result = $mysql -> query ($my_query);

// Crear un array con los resultados
$coordinador = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $coordinador[] = $row;
    }
}

// Devolver los resultados en formato JSON
echo json_encode($coordinador);

?>
