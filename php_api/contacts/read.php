<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:GET');
header('Access-Control-Allow-Headers:Content-type,Access-Control-Allow-Headers,Authorization,x-Request-with');

include('function.php');

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod == "GET") {
    if (isset($_GET['id'])) {  //READ BY ID
        $contact = getContact($_GET);
        echo $contact;
    } else {
        $contact_details = getContact_details(); //READ ALL
        echo $contact_details;
    }
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . ' Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
