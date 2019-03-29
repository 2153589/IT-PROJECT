<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * IT Project Moe's Ordering and Sales System
	 *
	 * Group Members: Bananal, Dariano, Guzman, Lopez, Madayag, Torio
	 *
	 * @author Uy, Soriano
	 *
	 */


	public function __Construct(){
		parent::__Construct();
		$this->load->model('Model_account','account');
	}


	public function login(){
		if($_POST){
			$user = $this->account->Auth($this->input->post('email'),$this->input->post('password'));
			if($user){
				$allow_admin = $this->account->AllowPages($user->id,'0');
				$allow_frontend = $this->account->AllowPages($user->id,'1');
				$allow_waitstaffmoss = $this->account->AllowPages($user->id,'2'); // - gren
				$data = array(
					'USER'=>$user,
					'ID_USER'=>$user->id,
					'EMAIL'=>$user->email,
					'IS_LOGIN'=>true,
					'ALLOW_ADMIN'=>$allow_admin,
					'ALLOW_FRONTEND'=>$allow_frontend,
					'ALLOW_WAITSTAFFMOSS'=>$allow_waitstaffmoss, //gren
					'CONTROLLER'=>$this->account->Controller($user->id),
					'ROLES'=>$this->account->Roles($user->id)
				);

				if($user->actived=='1'){  //gren tried editing some lines here
			  	$this->session->set_userdata($data);
			  	$this->model_crud->Submit('app_users',array(
			  		'login_at'=>date("Y-m-d H:i:s"),
			  		'logout_at'=>null
			  	),$this->session->userdata('ID_USER'));
			  	if($allow_frontoffice==true){
						redirect('welcome');
			  	}elseif($allow_backoffice==true){
			  		redirect('backoffice/dashboard');
			  	}elseif($allow_waitstaffmoss==true){
			  		redirect('waitstaffmoss/hiwaitstaff');
			  	}
				} //gren first try

	else{
  		redirect('auth/activation/'.$user->id);
  	}
  }else{
  $this->session->set_flashdata('login_failed', 'Login failed. Please check your email or password.');
  redirect('account/login');
  }
  }
  $this->load->view('public/account/login');
  }

	public function logout(){
		if($this->session->userdata('ID_USER')){
			$this->model_crud->Submit('app_users',array('logout_at'=>date("Y-m-d H:i:s")),$this->session->userdata('ID_USER'));
		}
		$this->session->sess_destroy();
		$data = array(
			'USER'=>null,
			'ID_USER'=>null,
			'EMAIL'=>null,
			'IS_LOGIN'=>false,
			'ALLOW_ADMIN'=>null,
			'ALLOW_FRONTEND'=>null,
			'ALLOW_WAITSTAFFMOSS'=>null,
			'CONTROLLER'=>null,
			'ROLES'=>null
		);
		$this->session->set_userdata($data);
		redirect('account/login');
	}



	public function forgot()
	{
		if($_POST){
			$user = $this->account->Auth($this->input->post('email'));
			if($user){
				$this->account->SendRequest($this->input->post('email'));
				$this->session->set_flashdata('success', 'okay');
			}else{
				$this->session->set_flashdata('login_failed', 'Sorry, you have entered an invalid email.');
			}
		}
		$this->load->view('public/account/forgot');
	}



}
