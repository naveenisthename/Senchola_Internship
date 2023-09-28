<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session'); // Load the session library
    }

    public function index()
    {
        //it's a default funtion , if we don't mention the funtion in the url , this funtion will run based on what we load
        $this->load->view("registration_form");
    }
    public function student()
    {
        $msg["msg"] = " Kindly fill this ";
        $this->load->view("registration_form", $msg);
    }

    public function saveData()
    {

        // $name = $this->input->post("name");
        // $email = $this->input->post("email");
        // $phone = $this->input->post("phone");

        extract($_POST); //the extract funtion will post all the data in a single funtion don't need to always assingning to single variables

        $data = [
            'student_name' => $name,
            'student_email' => $email,
            'student_phone' => $phone
        ];

        $this->load->model("RegistrationModel");

        $result = $this->RegistrationModel->insertData($data);

        if ($result) {
            $res['status'] = "Successfully inserted"; //can do so many values
            $this->load->view("registration_form", $res);
            //redirect(base_url("/register/student"));
        } else {
            $res['status'] = "Error while inserting data";
            $this->load->view("registration_form", $res);
        }
    }

    public function fetchData()
    {
        $this->load->model("RegistrationModel");
        $result["table"] = $this->RegistrationModel->getRecord();
        $this->load->view("displayRecords", $result);
    }

    public function editData($student_id)
    {
        $this->load->model("RegistrationModel");
        $result['data'] = $this->RegistrationModel->editDatainModel($student_id);
        $this->load->view('displayRecords', $result);
    }

    public function update()
    {
        extract($_POST);
        $student_id = $student_id;
        $data = [
            "student_name" => $student_name,
            "student_email" => $student_email,
            "student_phone" => $student_phone

        ];
        $this->load->model("RegistrationModel");
        $result = $this->RegistrationModel->updateDatainModel($data, $student_id);
        if ($result) {
            $this->fetchData();
        }
    }

    public function deleteData($student_id)
    {
        $this->load->model("RegistrationModel");
        $result = $this->RegistrationModel->deleteDatainModel($student_id);
        if ($result) {
            // Data successfully deleted
            redirect(base_url("register/fetchData"));
        } else {
            // Handle the case where deletion fails
            echo "Failed to delete data";
        }
    }
}
