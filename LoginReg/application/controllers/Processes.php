<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Processes extends CI_Controller
{
    public function index()// this one runs defaultly. no need to write in route processes/index- just = processes
    {
        if (isset($_SESSION['id'])) {
            $this->load->model('usersmodel');
            $posts = $this->usersmodel->takePost();
            $this->load->view('result', ['posts' => $posts]);
        } else {
            $this->load->view('homepageW'); //load me homepageW.php from view folder
        }

    }
    public function gohomepage()
    {
        $posts = $this->usersmodel->takePost();
        $this->load->view('result', ['posts' => $posts]);
    }
    public function login()//
    {
        $loginfo = $this->input->post(null, true);//take whole information from form

        $email_login = $loginfo['email-login'];
        $password_login = $loginfo['password-login'];
		//assign variable to check this if its matching with database or not
        $this->load->model('usersmodel');
        $result = $this->usersmodel->loginMethod($email_login, $password_login);
        if ($result) { #if this query true/runs/gives answer, then we logged in, take information as an array
            session_start();
   
               $_SESSION['id']=$results['id'];
                redirect('http://localhost/');
            $this->load->model('usersmodel');
            $posts = $this->usersmodel->takePost();
            $this->load->view('result', ['posts' => $posts]);
        } else {
            $error['logerror'] = "Wrong password or email";
            $this->load->view('homepageW', $error); #send this error to homepage, i will print them with key(logerror)
        }
    }


    public function register()
    {
        $this->load->library('form_validation'); #for use validation

        $this->form_validation->set_rules('firstname', 'First Name', 'required'); 
		
		#first one is input name, second name is for this= when your print this error how you want to call,  last one is conditions

        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[8]'

        );
        $this->form_validation->set_rules('passwordConfirm', 'Password Confirm', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) { #if this errors exist, then 
            $error['error'] = validation_errors(); //store them 
            $this->load->view('homepageW', $error); // and send this errors to homepage, i will print them with key(errors) if they exist

        } else {
            $userinfo = $this->input->post(null, true);
			//takes everyinputs from form like this
			# var dump($userinfo) === array(4) { ["firstname"]=> string(3) "111" ["lastname"]=> string(3) "222" ["email"]=> string(8) "3333@333" ["password"]=> string(11) "zazazaza444" }

            $this->load->model('usersmodel'); //load model from models by name--important!!


            $result = $this->usersmodel->checker($userinfo['email']);

            if ($result) {
                $error['error'] = "This email adress already exist";
                $this->load->view('homepageW', $error);
            } else {

                $this->usersmodel->insert_user($userinfo); //call the method(function) from model and run this method with our information.
                $error['error'] = "You are succesfully registered, please login.";
                $this->load->view('homepageW', $error); #send this errors to homepage, i will print them with key(errors)
            }



        }
    }

    public function postMessage()
    {
        $postform = $this->input->post(null, true);
        $this->load->model('usersmodel');
        $this->usersmodel->addPost($postform['message'], $_SESSION['id']);
        $posts = $this->usersmodel->takePost();
        $this->load->view('result', ['posts' => $posts]);
    }

    public function showOne($id)
    {
        $this->load->model('usersmodel');
        $onemessage = $this->usersmodel->takeOne($id);
        $this->load->view('showpage', ['onemessage' => $onemessage]);
    }
    public function delete($id)
    {
        $this->usersmodel->deletemessage($id);
        redirect('processes/gohomepage');
    }



    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->load->view('homepageW');
    }

}