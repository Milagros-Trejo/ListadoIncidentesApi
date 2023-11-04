<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('funciones.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

    if(isset($_GET['id'])){
        $incidentesEnComunidad = getIncidentesByComunidadId($_GET);
        echo $incidentesEnComunidad;
    }
    else
    {
        $listaIncidentes = getListaIncidentes();
        // imprime toda la lista en pantalla
        echo $listaIncidentes;
    }
}
else
{
    $statusData = [
        'status' => 405,
        'message' => 'Method Not Allowed'
    ];
    header('HTTP/1.0 405 Method Not Allowed');
    echo json_encode($statusData);
}



?>