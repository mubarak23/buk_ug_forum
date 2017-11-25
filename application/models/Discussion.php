<?php

 Class Discussion_model extends CI_model{
	 
	 
	   public function create($data){
		   
		   $insert = $this->db->insert('discussion', $data);
		   
		   if($insert){
			   return true;
			   }else{
				   return false;
				   
				   }
		   
		   }
	 
	 
	 
	 
	 
	 
	 }

?>