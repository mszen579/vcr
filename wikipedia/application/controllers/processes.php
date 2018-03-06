<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class processes extends CI_Controller {


	public function index()
	{
		$this->load->model('Craiglistmodel');
		$query=$this->Craiglistmodel->showtitle();
		$this->load->view('homepage',array('details'=>$query ));
		
	}
	public function bringmejoin()
	{
		$this->load->view('joinpagr');

	}
	public function bringmeaddpost()
	{

		$this->load->view('writearticale');

	}
	public function insertuser()
	{
		$reginfo = $this->input->post(null,true);
		$this->load->library('form_validation'); 
        $this->form_validation->set_rules('username', 'User Name', 'required|alpha'); 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[5]'

		);
		$this->form_validation->set_rules('age', 'Your_Age', 'required|numeric|greater_than[13]');
        $this->form_validation->set_rules('confirmpassword', 'Password Confirm', 'required|matches[password]');
		if ($this->form_validation->run() == false) { #if this errors exist, then 
            $valdationerror = validation_errors(); //store them 
			$this->load->view('joinpagr', array('errors'=> $valdationerror));
		}
			else{
				$this->load->model('Craiglistmodel');
				$this->Craiglistmodel->insertuser($reginfo);
				$message="You are successfully registerated please log in";
				$this->load->view('joinpagr', array('errors'=> $message));

			} 
			


	}
	public function login()
	{
		$loginfo = $this->input->post(null,true);
		$this->load->model('craiglistmodel');
		$query = $this->craiglistmodel->loginchecker($loginfo);
		if($query){
			$this->load->model('Craiglistmodel');
			$this->session->set_userdata('id' ,$query['id']);
			$this->session->set_userdata('username' ,$query['username']);
			$this->load->view('homepage');
			
		
           

		}
		else{
			$errorlog = "please check your information";
			$this->load->view('joinpagr',array('logerror'=>$errorlog ));
		}

	}
	public function logout()
	{
		session_destroy();
		redirect('http://localhost/join');
	}
	public function postMessage()
    {
		
		$postform = $this->input->post(null, true);
		$this->load->model('Craiglistmodel');
		$query=$this->Craiglistmodel->addPost($postform);
		$this->load->view('writearticale');
		
	
       
	}
	public function showarticale()
	{	
		$this->load->model('Craiglistmodel');
		$query=$this->Craiglistmodel->showtitle();
		$this->load->view('homepage',array('details'=>$query ));
		

	}

	

	
	

	
	
	
}

