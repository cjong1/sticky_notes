<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Note');
	}

	public function index()
	{
		$this->load->view('index');
	}

	// public function index_json()
	// {
	// 	$data['notes'] = $this->Note->get_all();
	// 	echo json_encode($data);
	// }

	public function index_html()
	{
		$data['notes'] = $this->Note->get_all();
		$this->load->view('/partials/notes', $data);
	}

	public function create()
	{
		$new_note = $this->input->post();
		$this->Note->create($new_note);
		$data['notes'] = $this->Note->get_all();
		$this->load->view('/partials/notes', $data);
	}

	public function destroy()
	{
		$delete = $this->input->post('id');
		$this->Note->destroy($delete);
		$data['notes'] = $this->Note->get_all();
		$this->load->view('/partials/notes', $data);
	}

	public function update()
	{
		$update = $this->input->post();
		$this->Note->update($update);
		$data['notes'] = $this->Note->get_all();
		$this->load->view('/partials/notes', $data);
	}
}

//end of main controller
