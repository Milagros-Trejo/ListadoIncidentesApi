<?php

require '../connection/dbconfig.php'

// Hace get de todos los incidentes activos
function getListaIncidentes(){
    global $connection;

    $query = "SELECT * FROM incidente WHERE horaDeCierre IS NULL;";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        if(mysqli_num_rows($query_run) > 0){
            
            $response = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            // devuelve el json del objeto statusData. 
            // El campo 'data' es otro objeto que tiene la lista de incidentes
            $statusData = [
                'status' => 200,
                'message' => 'Incidentes encontrados',
                'data' => $response
            ];
            header('HTTP/1.0 200 OK');

            return json_encode($statusData);
        }
        else
        {
            $statusData = [
                'status' => 404,
                'message' => 'Incidente Not Found'
            ];
            header('HTTP/1.0 404 Not Found');
            return json_encode($statusData);
        }
    } 
    else 
    {
        $statusData = [
            'status' => 500,
            'message' => 'Internal Server Error'
        ];
        header('HTTP/1.0 500 Internal Server Error');
        return json_encode($statusData);
    }
}

// Hace get de los incidentes activos de una comunidad
function getIncidentesByComunidadId($params){
    global $connection;

    if($params['id'] == null){
        $statusData = [
            'status' => 400,
            'message' => 'Bad Request: Ingrese Id de la comunidad' 
        ];
        header('HTTP/1.0 400 Bad Request');
        return json_encode($statusData);
    }

    $comunidadId = mysqli_real_escape_string($connection, $params['id']);

    $query = "SELECT * FROM incidente WHERE horaDeCierre IS NULL AND comunidad_id='$comunidadId';";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $response = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

        // devuelve el json del objeto statusData. 
        // El campo 'data' es otro objeto que tiene la lista de incidentes
        $statusData = [
            'status' => 200,
            'message' => 'Incidentes encontrados',
            'data' => $response
        ];
        header('HTTP/1.0 200 OK');

        return json_encode($statusData);
    } 
    else 
    {
        $statusData = [
            'status' => 500,
            'message' => 'Internal Server Error'
        ];
        header('HTTP/1.0 500 Internal Server Error');
        return json_encode($statusData);
    }

}

?>