<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_menu extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('menu_model','menu');
	}
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

	public function insert_menu(){
		$data = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			'price' => $this->input->post('price'),
			
		);

		$this->menu->menu_insert($data);
		$this->load->view('formenu');
	}
	public function showall()
	{
		$data = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			'price' => $this->input->post('price'),
			
		);

		$data = $this->menu->getShow();
		$this->load->view('view_all',$data);
	}

	public function view()
	{
		$result = $this->menu->getShow();
		$this->load->view('view_all',$result);
	}

	public function edit_form(){
        
		$sid = $this->uri->segment('3'); 
		
		$data = $this->menu->selectOne($sid);
		
		$this->load->view('form_edit',$data);
	   
   }
   
  
   
   public function delete_menu(){
	   
		$sid = $this->uri->segment('3'); 
		
		$this->menu->delete($sid); 
		
		redirect('manage_menu');
   }
   public function update(){
	$menu = array(
		'menu_id' => $this->input->post('menu_id'),
		'menu_name' => $this->input->post('menu_name'),
		'mcategory_id' => $this->input->post('mcategory_id'),
		'mshop_id' => $this->input->post('mshop_id'),
		'price' => $this->input->post('price')
	);

	$this->menu->menu_updates($menu,$this->input->post('menu_id'));
	$result = $this->menu->getShow();
	$this->load->view('view_all',$result);
}
}
