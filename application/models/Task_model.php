<?php
class Task_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function get_tasks()
    {
        return $this->db->get('tasks')->result_array();
    }

    public function create_task($data)
    {
        $this->db->insert('tasks', $data);
    }

    public function get_task($id)
    {
        return $this->db->get_where('tasks', array('id' => $id))->row_array();
    }

    public function update_task($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tasks', $data);
    }

    public function delete_task($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tasks');
    }
}
