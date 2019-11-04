<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	function __construct(){
		parent::__construct();
		//$this->load->database();
		$this->load->model('Shop_model','Shop');
	}

	public function index()
	{
		$this->load->view('view_reg_shop');
	}


	public function reg_shop(){

		$data = array(
			'shop_name_th' => $this->input->post("sh_name_th"),
			'shop_name_en' => $this->input->post("sh_name_en"),
			'shop_addr' => $this->input->post("sh_addr"),
			'shop_province'=> $this->input->post("sh_province"),
			'shop_size'=> $this->input->post("sh_size"),
			'shop_chairs'=> $this->input->post("sh_chairs"),
			'shop_tables'=> $this->input->post("sh_tables")
		);

		$this->Shop->shop_insert($data);
		$this->load->view('view_reg_shop');

		// $shop_name_th = $this->input->post("sh_name_th");
		// echo $shop_name_th;
		// echo br();
		// $shop_name_en = $this->input->post("sh_name_en");
		// echo $shop_name_en;
		// echo br();
		// $shop_addr = $this->input->post("sh_addr");
		// echo $shop_addr;
		// echo br();
		// $sh_province = $this->input->post("sh_province");
		// echo $sh_province;
		// echo br();
		// $sh_size = $this->input->post("sh_size");
		// echo $sh_size;
		// echo br();
		// $sh_chairs = $this->input->post("sh_chairs");
		// echo $sh_chairs;
		// echo br();
		// $sh_tables = $this->input->post("sh_tables");
		// echo $sh_tables;
		// echo br();
	}

	public function manage_shop()
	{
		$this->load->view('view_shop_mng');
	}

	public function display_shop()
	{
		$sh_province = $this->input->post("sh_province");
		echo $sh_province;
		$datashop['shopselect'] = $this->Shop->getAllShops($sh_province);

		$total = $datashop['shopselect']->num_rows();
		echo br();
		echo "total : ".$total;
		echo br();
		// foreach($shop_select->result_array() as $row){
		// 	echo $row['shop_id'];
		// 	echo br();
		// 	echo $row['shop_name_th'];
		// 	echo br();
		// 	echo $row['shop_name_en'];
		// 	echo br();
		// 	echo "Hello";
		// }
		$this->load->view('view_shop_mng',$datashop);
		
	}
}
