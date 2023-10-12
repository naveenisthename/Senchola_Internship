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
function storeContact($contactInput) //CREATE
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

function getContact_details() //READ ALL
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

function getContact($contactParams) //READ BY ID
{
    global $conn;

    if ($contactParams['id'] == null) {
        return error422('Enter your contact id');
    }

    $ContactId = mysqli_real_escape_string($conn, $contactParams['id']);
    $query = "SELECT * FROM contacts where id='$ContactId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $res = mysqli_fetch_assoc($result);

            $data = [
                'status' => 200,
                'message' => 'Contact Detail Fetched Successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 Success ");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No Contact found',
            ];
            header("HTTP/1.0 404 No Contact found");
            return json_encode($data);
        }
    } else {
        $data = [
            'status' => 500,
            'message' => 'Internal servor error',
        ];
        header("HTTP/1.0 500 Internal servor error");
        return json_encode($data);
    }
}


function updateContact($contactInput, $contactParams) //UPDATE BY ID
{
    global $conn;

    if (!isset($contactParams['id'])) {
        return error422("Contact ID not found in URL");
    } elseif ($contactParams['id'] == null) {
        return error422("Enter the Contact ID");
    }

    $contactId = mysqli_real_escape_string($conn, $contactParams['id']);

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

        $query = "UPDATE contacts SET first_name='$first_name',last_name='$last_name',email='$email',phone_number='$phone_number',address='$address' WHERE id='$contactId' LIMIT 1";

        $result = mysqli_query($conn, $query);

        if ($result) {

            $data = [
                'status' => 200,
                'message' => 'Contact Updated succesfully',
            ];
            header("HTTP/1.0 200 SUCCESS");
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



function deleteContact($contactParams)  //DELETE BY ID
{
    global $conn;

    if (!isset($contactParams['id'])) {
        return error422('contact id not found in the URL');
    } elseif ($contactParams['id'] == null) {
        return error422('Enter the contact id');
    }

    $contactId = mysqli_real_escape_string($conn, $contactParams['id']);

    $query = "DELETE from contacts where id='$contactId' limit 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $data = [
            'status' => 200,
            'message' => 'Contact Deleted Successfully',
        ];
        header("HTTP/1.0 200 OK ");
        return json_encode($data);
    } else {
        $data = [
            'status' => 404,
            'message' => 'Contact not found',
        ];
        header("HTTP/1.0 404 Not Found");
        return json_encode($data);
    }
}
