<?php
class Tasks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Task_model');
    }

    public function index()
    {
        $data['tasks'] = $this->Task_model->get_tasks();
        $this->load->view('index', $data);
    }

    public function create()
    {
        $this->load->view('create');
    }

    public function store()
    {
        $data = $this->input->post();
        $this->Task_model->create_task($data);
        redirect('tasks');
    }

    public function edit($id)
    {
        $data['task'] = $this->Task_model->get_task($id);
        $this->load->view('edit', $data);
    }

    public function update($id)
    {
        $data = $this->input->post();
        $this->Task_model->update_task($id, $data);
        redirect('tasks');
    }

    public function delete($id)
    {
        $this->Task_model->delete_task($id);
        redirect('tasks');
    }
}
