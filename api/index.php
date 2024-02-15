<?php

//set the content type to json
header('Content-Type: application/json');

//check if the request method is get
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //create a response array
    $response = array(
        'message' => 'Hello World!'
    );

    echo json_encode($response);
}else{
    // if the request method is not get, return an error response
    http_response_code(405);
    echo json_encode(array("error" => "Method Not Allowed"));
}


?>