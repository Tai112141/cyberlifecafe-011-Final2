<?php defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model {

		function __construct(){
            parent::__construct();
        }
        
		function getAllMenus($sid){
			$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
			//$result = $this->db->get('shop');
			$result = $this->db->get_where('menu', array('shop_province' => $sid));
			return $result;
		}

 		// function _queryUsers(){
		// 	$query = $this->db->query("select * from users where id='3'");
 		// 	return $query;
         // }	
         
		function menu_insert($data){
			$this->db->insert('menu',$data);
        }
		
		public function menu_delete($sid) { 
			if ($this->db->delete("menu", "sid = ".$sid)) { 
			   return true; 
			} 
		 } 
	  
		 public function menu_update($data,$sid) { 
			$this->db->set($data); 
			$this->db->where("sid", $sid); 
			$this->db->update("menu", $data); 
		 } 

		function getShow(){
			$result['data'] = $this->db->get('menu');
			//$result = $this->db->get('shop');
			return $result;
		}
		function delete($id){
			$this->db->where('menu_id', $id);
			$this->db->delete('menu');  
		}	
		function selectOne($sid){
			$this->db->where('menu_id', $sid);
			$data['result']=$this->db->GET('menu'); 
			return $data ;
			
		}	

		function menu_updates($data,$cid){
			$this->db->where('menu_id',$cid);
			$this->db->update('menu',$data);
		}
}
