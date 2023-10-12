<?php

require '../inc/dbcon.php';

function error422($message)
{
    $data = [
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP/1.0 422 Unprocessable entity");
    echo json_encode($data);
}
function storeContact($contactInput)
{
    global $conn;

    $first_name = mysqli_real_escape_string($conn, $contactInput['first_name']);
    $last_name = mysqli_real_escape_string($conn, $contactInput['last_name']);
    $email = mysqli_real_escape_string($conn, $contactInput['email']);
    $phone_number = mysqli_real_escape_string($conn, $contactInput['phone_number']);
    $address = mysqli_real_escape_string($conn, $contactInput['address']);

    if (empty(trim($first_name))) {
        return error422('Enter your first_name');
    } elseif (empty(trim($last_name))) {
        return error422('Enter your last_name');
    } elseif (empty(trim($email))) {
        return error422('Enter your email');
    } elseif (empty(trim($phone_number))) {
        return error422('Enter your phone_number');
    } elseif (empty(trim($address))) {
        return error422('Enter your address');
    } else {
        $query = "INSERT INTO contacts (first_name,last_name,email,phone_number,address) VALUES ('$first_name','$last_name','$email','$phone_number','$address')";
        $result = mysqli_query($conn, $query);
        if ($result) {

            $data = [
                'status' => 201,
                'message' => 'Contact Created succesfully',
            ];
            header("HTTP/1.0 201 CREATED");
            return json_encode($data);
        } else {
            $data = [
                'status' => 500,
                'message' => 'Internal servor error',
            ];
            header("HTTP/1.0 500 Internal servor error");
            return json_encode($data);
        }
    }
}
function getContact_details()
{
    global $conn;

    $query = "SELECT * FROM contacts";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {

            $res = mysqli_fetch_all($query_run);

            $data = [
                'status' => 200,
                'message' => 'Contact Details Fetched Successfully',
                'data' => $res,
            ];
            header("HTTP/1.0 200 Success and  Contact Details Fetched Successfully");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No Contact Details Found',
            ];
            header("HTTP/1.0 404 No Contact Details Found");
            return json_encode($data);
        }
    } else
        $data = [
            'status' => 500,
            'message' => 'Internal servor error',
        ];
    header("HTTP/1.0 500 Internal servor error");
    return json_encode($data);
}
