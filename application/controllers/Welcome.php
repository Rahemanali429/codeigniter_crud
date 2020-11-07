<?php

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->model('user_model');
		$data = $this->user_model->posts();
		$this->load->view('welcome_message', ['con' => $data]);
	}
	public function add_view()
	{
		$this->load->view('addpost_view');
	}
	public function add_action()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$this->load->model('user_model');
		$run = $this->user_model->add($title, $description);
		if ($run) {
			$this->session->set_flashdata('msg', 'Post Successfully Uploaded!!!');
			return redirect('welcome');
		}
	}
	public function delete_data()
	{
		$pid = $this->input->post('id');
		$this->load->model('user_model');
		$a = $this->user_model->deldata($pid);
		if ($a) {
			$this->session->set_flashdata('msg', 'Deleted Successfully!!');
			return redirect('/');
		}
	}
	public function edit_data()
	{
		$pid = $this->input->post('id');
		$this->load->model('user_model');
		$data = $this->user_model->edit_posts($pid);
		$this->load->view('edit_view', ['con' => $data]);
	}
	public function edit_action()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$pid = $this->input->post('id');
		$this->load->model('user_model');
		$run = $this->user_model->edit($title, $description, $pid);
		if ($run) {
			$this->session->set_flashdata('msg', 'Edit Post Successfully!!!');
			return redirect('/');
		}
	}
}
