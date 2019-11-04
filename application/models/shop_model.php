<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {

		function __construct(){
            parent::__construct();
        }
        
		function getAllShops($sid){
			$this->db->select('shop_id, shop_name_th, shop_name_en');
			//$result = $this->db->get('shop');
			$result = $this->db->get_where('shop', array('shop_province' => $sid));
			return $result;
		}

 		// function _queryUsers(){
		// 	$query = $this->db->query("select * from users where id='3'");
 		// 	return $query;
         // }	
         
		function shop_insert($data){
			$this->db->insert('shop',$data);
        }
        
		// function _delete_user_id($id){
		// 	$this->db->where('id', $id);
		// 	$this->db->delete('users');  
		// }	
}
