<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
//	public function index()
//	{
//		$data = array(
//			'title' => 'Welcome',
//			'view_name' => 'sample.php'
//		);
//
//		$this->load->view('template', $data);
//	}

	function __construct()
	{
		parent::__construct();
		$this->load->model("Store_model");
	}
	public function index() {
		if($_POST) {
			$key = $this->input->post('key');
			$sort = $this->input->post('sort');

			$result = $this->Store_model->getProductByName($key, $sort);
//			echo $result == null;
			$data = array(
				'results' => $result,
				'title' => "\"$key\" matches - Radiant",
				'view_name' => 'search_results.php',
				'key' =>$key
			);
			$this->load->view('template', $data);
		} else {
			$this->load->view('homepage.php');
		}
	}
}
