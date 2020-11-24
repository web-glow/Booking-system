<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->model('welcome_model');



		$this->load->helper('form');

		$username = $this->input->post('username');
		$password = $this->input->post('pw');
		if($username != NULL && $password != NULL) {
			$this->welcome_model->simple_insert($username, $password);

		}

		$data["results"] = $this->welcome_model->first_query();
		$this->load->view('welcome_message', $data);
	}
}
