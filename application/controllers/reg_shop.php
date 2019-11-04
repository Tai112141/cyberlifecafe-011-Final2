<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_menu extends CI_Controller {

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
		$this->load->view('formenu');
	}

	public function menu_insert(){
		$data = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			
		);

		$this->shop->menu_insert($data);
		$this->load->view('formenu');
	}
	public function showall()
	{
		$this->load->view('formenu');
	}
}
