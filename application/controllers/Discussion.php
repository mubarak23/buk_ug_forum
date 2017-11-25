<?php

// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017

defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

	
	
	public function index(){
		$data['title'] = 'Welcome to LetTalk Forum';
		$data['main_content'] = "home";
		$data['count'] = $this->Discussion_model->record_count();
		$data['results'] = $this->Discussion_model->ds_index();
		
		$this->load->view('layout/main', $data);
	}
	
	
	
	public function ds_details(){
		$id = $this->uri->segment('3');
		
		$data['title'] = 'Discussion destails';
		$data['main_content'] = 'details';
		
		
		
		$data['details'] = $this->Discussion_model->details($id);
		
		$data['replys'] = $this->Discussion_model->get_reply($id);
		
		
	    //var_dump($data);
		//die();
		
		
		
		$this->load->view('layout/main', $data);
		
		
		
		
		
		}
	
	
	public function create(){
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
			}
		
		 
		 
		 if(isset($_POST['ds_create'])){
			 
			 $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]');
			 $this->form_validation->set_rules('category', 'Category', 'required');
			 $this->form_validation->set_rules('body', 'Body', 'trim|required|min_length[5]');
			 
			 
			 
			 if($this->form_validation->run() == true){
		 
				 
				 $data = array(
				 		'user_id' => $this->session->userdata('user_id'),
				 		'ds_title'  => $this->input->post('title'),
						'ds_category'  => $this->input->post('category'),
						'ds_body'     => $this->input->post('body')
						
						
				 	);
					//echo var_dump($data);
					//die();
					
					
					
					$create = $this->Discussion_model->create($data);
					
					if($create){
						redirect('discussion');
						}
						
				 
				 }else{
					/* echo "Not Here 02";
					 die();*/
					 
				 $data['title'] = 'create  a Discussion';
				 $data['main_content'] = 'create';
				 
				 $this->load->view('layout/main', $data);
					 
					 
					 }
			 
			 
			 }else{
				 
				 $data['title'] = 'create  a Discussion';
				 $data['main_content'] = 'create';
				 
				 $this->load->view('layout/main', $data);
				 
				 }
		
		
		}
	
	public function reply(){
		
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
			}
		
		if(isset($_POST['reply'])){
	  
	  //setting validation rules
	  $this->form_validation->set_rules('comment', 'Reply', 'Trim|min_length[3]|Required');
		
		//getting the ds id
		$ds_id = $this->input->post('ds_id');
	
		if($this->form_validation->run() == true){
			
			$data = array(
					 'ds_id'   => $this->input->post('ds_id'),
					 're_body' => $this->input->post('comment'),
					 'user_id' => $this->input->post('user_id'),
					 're_active' => 1
				
						);
						
				$reply = $this->Discussion_model->ds_reply($data);
				
				if($reply){
					
					redirect('discussion');
					
					}		
			}else{
				redirect('discussion');
				
				}
	
	
			}
		
		}
	
	public function ds_category(){
		
		
		$category = $this->uri->segment(3);
		
		
		
		$data['title'] = 'This is the Category page';
		$data['main_content'] = 'category';
		
		//loading the category post fron the db
		$data['category'] = $this->Discussion_model->ds_category($category);
		
		//loading the web page
		$this->load->view('layout/main', $data);
		
		 
		
		}


		public function search(){

			if(isset($_POST['search'])){

				$search = $this->input->post('search');
				$category = $this->input->post('category');

			/*	echo $category;
				echo $search;
				die();*/
				$this->form_validation->set_rules('category', 'category', 'required|trim');
				$this->form_validation->set_rules('search', 'Search', 'required|trim');

				if($this->form_validation->run() == true){

						$category = $this->input->post('category');
						$search = $this->input->post('search');
						/*echo $search;
						die();*/

						$data['search_result'] = $this->Discussion_model->search($search, $category);

						
						$data['main_content'] = 'search_result';

						$this->load->view('layout/main', $data);
				}else{
					

				$data['title'] = 'search any base on post title';

				$data['main_content'] = 'search';

				$this->load->view('layout/main', $data);

 

				}

			}else{

				$data['title'] = 'search any base on post title';

				$data['main_content'] = 'search';

				$this->load->view('layout/main', $data);

 

			}
		}
	





	
}
