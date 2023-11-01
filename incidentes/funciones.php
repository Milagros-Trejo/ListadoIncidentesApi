<?php

require '../connection/dbconfig.php'

// Hace get de toda la tabla de incidentes
function getListaIncidentes(){
    global $connection;

    $query = "SELECT * FROM incidente;";
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
            header('HTTP/1.0 404 Incidente Not Found');
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

?>