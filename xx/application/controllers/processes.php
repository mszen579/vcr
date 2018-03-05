<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class processes extends CI_Controller {


	public function index()
	{
		$this->load->model('Craiglistmodel');
		$list=$this->Craiglistmodel->takelist();
		$this->load->view('homepage', array('list'=> $list));
		
	}
	public function bringmejoin()
	{
		$this->load->view('joinpagr');

	}
	public function bringmeaddpage()
	{

		$this->load->view('addpage');

	}
	public function insertuser()
	{
		$reginfo = $this->input->post(null,true);
		$this->load->library('form_validation'); 
        $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha'); 
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[8]'

        );
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
			$this->session->set_userdata('first_name' ,$query['first_name']);
			$list=$this->Craiglistmodel->takelist();
			$this->load->view('homepage', array('list'=> $list));
		
           

		}
		else{
			$errorlog = "please check your information";
			$this->load->view('joinpagr',array('logerror'=>$errorlog ));
		}

	}
	public function addlisting()
	{
		$listinfo = $this->input->post(null,true);
		$this->load->library('form_validation'); 
        $this->form_validation->set_rules('title', 'title', 'required'); 
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('contact', 'contact', 'required');
		$this->form_validation->set_rules('location', 'location', 'required');
		if ($this->form_validation->run() == false) { #if this errors exist, then 
            $valdationerror = validation_errors(); //store them 
			$this->load->view('addpage', array('errors'=> $valdationerror));
		}
			else{
				$this->load->model('Craiglistmodel');
				$this->Craiglistmodel->inserlisting($listinfo);
			

			} 

	}
	public function showone($id)
	{	
		$this->load->model('Craiglistmodel');
		$query=$this->Craiglistmodel->showone($id);
		$this->load->view('showpage',array('details'=>$query ));
		

	}
	public function delet($id)
	{
		$this->load->model('Craiglistmodel');
		$this->Craiglistmodel->deletproduct($id);
		redirect('http://localhost/');
	}
	
	
	public function logout()
	{
		session_destroy();
		redirect('http://localhost/join');
	}
}

