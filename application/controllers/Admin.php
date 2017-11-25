<?php
// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	
	public function index(){
		if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
		
		$data['title'] = 'Welcome to Buk UG student Forum Admin Control Panel';
		$data['main_content'] = "Admin/dashboard";
		
		
		
		$data['discussions'] = $this->Admin_model->ds_index_admin();
		
		$data['replys'] = $this->Admin_model->get_reply();
		$data['sum_users'] = $this->Admin_model->sum_users();
		
		$data['num_dis']  = $this->Admin_model->record_discussion();
		$data['num_users'] = $this->Admin_model->record_users();
		$data['num_replys']  = $this->Admin_model->record_reply();
		
		//run the pagination section here 
		//autoload the pagination library here
		// number of discussion per page is 5
		//To Get the number of pages per discussion, we 
		// divide the total number of discussion by discussions per page
		// using config array to set all the default setting for pagination
		//use boostrap pagination to style it
		// this is an outline of activities to be carryout once the 
		//local serve is up and running with any hitches
		
		
		$this->load->view('admin/layout/main', $data);
	}
	
	
	public function ad_create_user(){
		
			if(isset($_POST['register'])){
				// valated User data for registration
				$this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[3]');
				$this->form_validation->set_rules('email', 'Email', 'rquired|valid_email|trim');
				$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|trim');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[50]');
				$this->form_validation->set_rules('Password2', 'Confirm Password', 'required|matches[password]|trim');
				$this->form_validation->set_rules('about', 'About Me', 'trim|required');
				
				if($this->form_validation->run()== false){
					//collect all user input and send them to model fgor futher processing
					$data = array(
					    'full_name'  => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'user_name' => $this->input->post('username'),
						'user_pass'  => $this->input->post('password'),
						'about_me'   => $this->input->post('aboutme')
							 
							 );
							 /*var_dump($data);
							 die();
							 wrong logic statement but it work anyway, 
							 coming back on a late day
							 */
							 
						$register = $this->Admin_model->register($data);
						
						if($register){
							
							redirect('Admin');
							}
					
					
					}else{
						$data['title'] = 'Unable to validate user registration input';
						$data['main_content'] = 'Admin/ad_create_user';
						
						$this->load->view('admin/layout/main', $data);
												
						}
				
				
				
				}else{
					$data['title']	= 'Admin User registrstion';
					$data['main_content']	= "Admin/ad_create_user";
					
					
					$this->load->view('admin/layout/main', $data);
					
					
					
					
					}
		
		}
		
		
		
		
	 	public function login(){
		
		//checking if a user click on the login button
		if(isset($_POST['login'])){
			
			$this->form_validation->set_rules('reg_no', 'Registration Number', 'required|min_length[2]|trim');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			/*echo "Everything is working fine";
			die();*/
						
			if($this->form_validation->run() == true){
				
				$reg_no = $this->input->post('reg_no');
				$password = $this->input->post('password');
				
				/*echo $username;
				echo $password;
				die()*/
				
				
				$user_id = $this->Admin_model->login($reg_no, $password);
				
				if($user_id){
					$data = array(
						'user_id' => $user_id,
						'logged_in' => true,
						'username' => $username
							);
							
					// setting the globsl session data		
					$this->session->set_userdata($data);
					
					//welcome message for every logged in user
					$this->session->set_flashdata('Logged_in', 'You  are Logged in');
					
					/*echo "Everything is working fine at this point";
					die();*/
					
					//redirect user base on apporiate privillages
					$user_id = $this->session->userdata('user_id');	
					if($user_id ==  1){
						
					redirect('admin');
					}else{
						
					redirect('discussion');
						}
					
					}else{

						$data['title']= "Wrong Login Detail";

						// a success message of login
						$this->session->set_flashdata('Failed', 'Wrong Username And Password');

						//set the login detail
						$this->session->set_flashdata('login detail', 'Enter Your Login Details');
										


						$this->load->view('Admin/login');

					}
					
				
				
				}else{
					// a success message of login
						$this->session->set_flashdata('Failed', 'Wrong Username And Password');

						//set the login detail
						$this->session->set_flashdata('login detail', 'Enter Your Login Details');
									

				$data['title'] = "Login Page here";
			
			$this->load->view('Admin/login');


				}
			
			
			
			}else{

				// a success message of login
						$this->session->set_flashdata('Failed', 'Wrong Username And Password');

						//set the login detail
						$this->session->set_flashdata('login detail', 'Enter Your Login Details');
									
				
			$data['title'] = "Login Page here";
			
			$this->load->view('Admin/login');

			
				
				}
		
		
		}
		
		
	public function logout(){
			// unsetting all user data
			$this->session->unset_userdata('$user_id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('logged_in');
			
			//set a success message for logout
			$this->session->flashdata('Success', 'Youe are Logout');
			redirect('discussion');
			
			
			}
			
			
			
	public function ds_edit(){
		
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
			}
		$id = $this->uri->segment('3');
		
		
			
			if(isset($_POST['ds_edit'])){
				
				
				// valated User data for registration
				$this->form_validation->set_rules('title', 'Though Title', 'required|trim|min_length[3]');
				$this->form_validation->set_rules('catergory', 'Catergory', 'rquired|trim');
				$this->form_validation->set_rules('body', 'Though Body', 'required|min_length[3]|trim');

				if($this->form_validation->run()== true){
					//collect all user input and send them to model fgor futher processing
					 
				 $data = array(
				 		'ds_title'  => $this->input->post('title'),
						'ds_category'  => $this->input->post('category'),
						'ds_body'     => $this->input->post('body')
						
				 	);
					
					
					
					$id = $this->uri->segment(3);
							 /*var_dump($data);
							 die();
							 wrong logic statement but it work anyway, 
							 coming back on a late day
							 */
							 
						$update = $this->Admin_model->ds_update($id, $data);
						
						Redirect('admin');
					
					
					}else{
						$data['title'] = 'Unable to validate ';
						$data['main_content'] = 'Admin/ds_edit';
						
				//pulling the job details before editing 
				$data['ds_edit'] = $this->Admin_model->ds_edit($id);
						
						$this->load->view('admin/layout/main', $data);
												
						}
				
			
			
			
			
			
			}else{
				$id = $this->uri->segment('3');
				$data['title'] = 'this is the edit discussion post';
				$data['main_content'] = 'admin/ds_edit';
				
				//pulling the job details before editing 
				$data['ds_edit'] = $this->Admin_model->ds_edit($id);
				
				$this->load->view('admin/layout/main', $data);
				
				}
		
		
		
		
		}	
		
		
	public function ds_delete(){
		  
		  if(!$this->session->userdata('logged_in')){
			  		redirect('admin/login');
					
				}	
			$id = $this->uri->segment('3');
			
			$data['title'] = 'This is the delete function for ds delete';
			
			$this->Admin_model->ds_delete($id);
			
			redirect('Admin');
		}	
		
		
		/*public function reply(){
			$data['title'] = "This is the latest reply on the forum";
			
		 
			
			
			}	*/	
				
			
		public function all_users(){
				$data['title'] = "This pull all users from the db";
				$data['main_content'] = "Admin/all_users";
				
				$data['all_users'] = $this->Admin_model->total_users();

		
		$data['num_dis']  = $this->Admin_model->record_discussion();
		$data['num_users'] = $this->Admin_model->record_users();
		$data['num_replys']  = $this->Admin_model->record_reply();
		
				
				$this->load->view('admin/layout/main', $data);
				
			
			}		


		public function User_delete(){
		  
		  if(!$this->session->userdata('logged_in')){
			  		redirect('admin/login');
					
				}	
			$id = $this->uri->segment('3');
			
			$data['title'] = 'This is the delete function for ds delete';
			
			$this->Admin_model->user_delete($id);
			
			redirect('Admin');
		}




		public function edit_profile(){
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
				}
		$id = $this->uri->segment(3);
		
		
		if(isset($_POST['edit'])){
			
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'Required|trim');
		$this->form_validation->set_rules('username', 'Username', 'Required|trim');
		$this->form_validation->set_rules('aboutme', 'About Me', 'Required|trim|min_length[5]');
		
			//running the validation
			if($this->form_validation->run() == false){

				redirect('admin/all_users');
				
				
				}else{
					
					$data = array(
					'full_name' => $this->input->post('full_name'),
					'email'		=> $this->input->post('email'),
					'user_name' => $this->input->post('username'),
					'about_me'  => $this->input->post('aboutme')
 					
							);
							/*print_r($data);
							die();*/
						$user_update = $this->User_model->user_update($id, $data);
						
						if($user_update){
							redirect('admin');
							}	
				
					
					}
			

			}else{
				
		$data['Title'] = "This is the edit form";
		$data['main_content'] = 'edit_profile';
		
		
		//loading the profile page
		$data['edit_profile'] = $this->User_model->profile($id);
		
		$this->load->view('layout/main', $data);
				
				}
		
		
		
		}	
		 


		 	public function reply_delete($id){
		  
		  if(!$this->session->userdata('logged_in')){
			  		redirect('admin/login');
					
				}	
			$id = $this->uri->segment('3');
			
			$data['title'] = 'This is the delete function for ds delete';
			
			$this->Admin_model->reply_delete($id);
			
			redirect('Admin');
		}


		public function ds_all(){

			$data['ds_all'] = $this->Admin_model->ds_all();

		$data['num_dis']  = $this->Admin_model->record_discussion();
		$data['num_users'] = $this->Admin_model->record_users();
		$data['num_replys']  = $this->Admin_model->record_reply();
		

			$data['main_content'] = 'admin/ds_all';

			$this->load->view('admin/layout/main', $data);
		}


		public function all_reply(){

			$data['num_dis']  = $this->Admin_model->record_discussion();
			$data['num_users'] = $this->Admin_model->record_users();
			$data['num_replys']  = $this->Admin_model->record_reply();
		

			$data['all_reply'] = $this->Admin_model->reply_all();

			$data['main_content'] = 'admin/all_replies';

			$this->load->view('admin/layout/main', $data);

		}



		public function mod_reply(){

			$data['num_dis']  = $this->Admin_model->record_discussion();
			$data['num_users'] = $this->Admin_model->record_users();
			$data['num_replys']  = $this->Admin_model->record_reply();
		

			$data['all_reply'] = $this->Admin_model->reply_all();

			$data['main_content'] = 'admin/mod_reply';

			$this->load->view('admin/layout/main', $data);

		}




		public function reply_edit(){
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
				}
		$id = $this->uri->segment(3);
		
		
		if(isset($_POST['edit'])){
			
			

		$this->form_validation->set_rules('reply', 'Reply', 'required|trim');
		
			//running the validation
			if($this->form_validation->run() == false){
			
			/*$id = $this->uri->segment('3');
			echo $id;
			die();*/
				
					redirect('admin/mod_reply');

				}else{
					
					$id = $this->uri->segment('3');

					$data = array(	
					'ds_id' 	=> $this->input->post('ds_id'),
					'user_id'		=> $this->input->post('user_id'),
					're_body' => $this->input->post('reply'),
					
 					
							);
							/*print_r($data);
							die();*/
						$user_update = $this->Admin_model->reply_update($id, $data);
						
						if($user_update){
							redirect('admin/mod_reply');

							}	
				
					
					}
			

			}else{
				
		$data['Title'] = "This is the edit form";
		$data['main_content'] = 'admin/reply_edit';
		

		$data['num_dis']  = $this->Admin_model->record_discussion();
		$data['num_users'] = $this->Admin_model->record_users();
		$data['num_replys']  = $this->Admin_model->record_reply();
		
		
		//loading the profile page
		$data['reply_edit'] = $this->Admin_model->reply($id);
		
		$this->load->view('admin/layout/main', $data);
				
				}
		
		
		
		}	
		 


		 	
	
}
 
 ?>