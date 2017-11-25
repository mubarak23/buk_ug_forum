<?php
// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017


 Class Admin_model extends CI_model{
	 
	 //fetching data for the admin dashboard
	 public function ds_index(){
		 	
			$this->db->select('*');
			$this->db->from('discussions');
			
			$query = $this->db->get();
			return $query->result();
			
			
		 
		 }
	
		 public function ds_index_admin(){
		 	$this->db->select('*', 'users');
			$this->db->from('discussions');
			$this->db->join('users', 'discussions.user_id = users.user_id');
			$this->db->limit('3');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }
		 
	public function get_reply(){
		$this->db->select('*', 'users');
		$this->db->from('replys');
		$this->db->join('users', 'replys.user_id = users.user_id');
		$this->db->limit('3');
		
		$query = $this->db->get();
		return $query->result();
		
		
		} 	 	 
	 
	 public function login($reg_no, $password){
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('reg_no', $reg_no);
				$this->db->where('user_pass', $password);
				$this->db->limit('1');
				
				$query = $this->db->get();
				
				if($query->num_rows() == 1){
					return $query->row()->user_id;
					}else{
						return false;
						}
				
				}
				
				
	  public function ds_edit($id){
			 $this->db->select('*');
			 $this->db->where('ds_id', $id);
			 $this->db->from('discussions');
			
			 $query = $this->db->get();
			 return $query->row();
			
			
			// if row is return user $name->table field name
			
			// if array is return user $name[table field name] as the view output
			 
			 
			 }			
			 
			 
			  
	 public function ds_update($id, $data){
		 $this->db->where('ds_id', $id);
		 $this->db->update('discussions', $data);
		 
		 }
		
		
			public function ds_delete($id){
		$this->db->where('ds_id', $id);
		$this->db->delete('discussions');
		
		}
		
			 
	public function record_users(){
		return $this->db->count_all('users');
		}	
			 
	public function record_discussion(){
		return $this->db->count_all('discussions');
		}
			
	public function record_reply(){
		return $this->db->count_all('replys');
		}	
		
	public function total_users(){
			$this->db->select("*");
			$this->db->from("users");

			$query = $this->db->get();
			
			return $query->result_array();

		
		}	

		public function user_delete($id){
			$this->db->where('user_id', $id);
			$this->db->delete('users');
		}

		public function reply_delete($id){
			$this->db->where('re_id', $id);
			$this->db->delete('replys');
		}


		public function sum_users(){
			$this->db->select("*");
			$this->db->from("users");
			$this->db->limit('3');

			$query = $this->db->get();
			
			return $query->result_array();
		}












		 public function ds_all(){
		 	$this->db->select('*', 'users');
			$this->db->from('discussions');
			$this->db->join('users', 'discussions.user_id = users.user_id');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }
		 
	public function reply_all(){
		$this->db->select('*', 'users');
		$this->db->from('replys');
		$this->db->join('users', 'replys.user_id = users.user_id');
		
		$query = $this->db->get();
		
		return $query->result_array();
		
		
		} 	 

		public function reply($id){
			$this->db->select('*');
			$this->db->from('replys');

			$query = $this->db->get();

			return $query->row();
		}	 


		public function reply_update($id, $data){
					$this->db->where('re_id', $id);
					$this->db->update('replys', $data);

					return true;
					}		
					
	 


	 
	 }