<?php

class RegistrationModel extends CI_Model
{
    public function insertData($data)
    {

        $this->load->database();

        //INSERT into stureg (name,email,phone) values ("Naveenkumar K",'naveenkumarmuthukrishna@gmail.com',7373828299);

        return $this->db->insert('studentreg', $data); //if you write this line you don't need to write a whole insert query

        // echo ($result) ? "Data inserted" : "Data not inserted";

    }

    public function getRecord()
    {
        //echo "You have accessed getRecord from the fetch RegistrationModel";

        $this->load->database();
        return $result = $this->db->get("studentreg")->result(); //result_array() ->will get an data in array form

    }

    public function editDatainModel($student_id)
    {
        $this->load->database();
        $this->db->where('student_id', $student_id);
        return $this->db->get('studentreg')->result();
    }

    public function updateDatainModel($data, $student_id)
    {
        $this->load->database();
        $this->db->where('student_id', $student_id);
        return $this->db->update('studentreg', $data);
    }

    public function deleteDatainModel($student_id)
    {
        $this->load->database();
        $this->db->where('student_id', $student_id);
        return $this->db->delete('studentreg');
    }
}
