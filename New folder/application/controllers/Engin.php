<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Engin extends CI_Controller
{

    public function __construct()// this is for adding css file to the porject
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function gohome()
    {
        
        $this->load->model('dbmodel');
        $listings = $this->dbmodel->getposts();
        $this->load->view('home',array('listings'=>$listings));
        

    }

<<<<<<< HEAD:application/controllers/Engin.php
    public function gobacktoyourprofile()
    {
        $this->load->model('dbmodel');
        $listings = $this->dbmodel->getpostsofone();
        $this->load->view('companypage',array('listings'=>$listings));
=======
    public function gobacktoyourprofile(){
<<<<<<< HEAD
             
        $this->load->view('companypage');
>>>>>>> 43d0488009a89a337852c3b4f20fbba911770c1a:New folder/application/controllers/Engin.php
}

public function showallvacanccies()//to show all vacanccies in the company profile
    {
        $this->load->model('dbmodel');
        $listings = $this->dbmodel->getpostsofone();
        $this->load->view('companypage',array('listings'=>$listings));
    }

<<<<<<< HEAD:application/controllers/Engin.php
=======
=======
              
                $this->load->view('companypage');
        }


    public function showallvacanccies()//to show all vacanccies in the company profile
	{
		$this->load->model('dbmodel');
		$listings = $this->dbmodel->getpostsofone();
		$this->load->view('companypage',array('listings'=>$listings));
	}
>>>>>>> ace4adcf92948da1ee4abb4cc8b9e9c7ead0e083
>>>>>>> 43d0488009a89a337852c3b4f20fbba911770c1a:New folder/application/controllers/Engin.php


     public function gotologreg() //this is for login for companies
    {
        if(isset($_SESSION['id'])){ //this is to prevent the user from logged in (if he is already logged in)
            $errorlogin['errorlogin'] = "Sorry, but You are already logged in";
            $this->load->view('home', $errorlogin);
        }
        else{
        $this->load->view('partners');
        }
        
    }




     public function gotologregadmin() //this is for login for admins
    {
        if(isset($_SESSION['id'])){ //this is to prevent the user from logged in (if he is already logged in)
            $errorlogin['errorlogin'] = "Sorry, but You are already logged in";
            $this->load->view('cpadmin', $errorlogin);
        }
        else{
        $this->load->view('cpadmin');
        }
        
    }


//////////////////////////////////////////////This is for REGISTER & Validation/////////////////////////////////
    public function register()
    {

        //the below 5 lines are for validation of the registrations "it is one of MVC libraries loaded into the autoload.php"
		$this->form_validation->set_rules('name', 'Name',  'trim|required|min_length[3]|alpha');// alpha is to force alphabet
		$this->form_validation->set_rules('email', 'Email address',  'required|valid_email');// valid_email: only email type is allowed
		$this->form_validation->set_rules('password', 'password',  'trim|required|min_length[6]');
		$this->form_validation->set_rules('passwordConfirm', 'The confirmed Password', 'required|matches[password]'); //matches[password]: to force the matching of the passwords
       

        if ($this->form_validation->run() == FALSE) { #if these errors exist, then; 
            $error['error'] = validation_errors(); 
            $this->load->view('partners', $error); //show them in the registration form

        } else {
            $companyinfo = $this->input->post(null, true); //null: means send every inputs from the form to the db
			//input will be sent as an array which contain all above elements

            $this->load->model('dbmodel'); //load process from models called 'dbmodel.php'


            $result = $this->dbmodel->checker($companyinfo['email']);


            //this is to show if you have entered the same email to the data base before.
            if ($result) {
                $error['error'] = "The email you have just entered is already exist, please enter a different email address";
                $this->load->view('partners', $error);
            } else {
                $this->dbmodel->insert_user($companyinfo); //call the (function) from model and run it with our inputs.
                $noerror['noerror'] = "You are succesfully registered to our db. Now you can login.";
                $this->load->view('partners', $noerror); #send this errors to loginandregisterpage.
            }



        }
    }


//////////////////////////////////////////////This is for LOGIN////////////////////////////////////////////

public function login()//this function for login engin
{
    $loginfo = $this->input->post(null, true);//take whole information from form

    $email_login = $loginfo['email-login'];
    $password_login = $loginfo['password-login'];
    //assign variable to check this if its matching with database or not
    $this->load->model('dbmodel');
    
    $result = $this->dbmodel->loginMethod($email_login, $password_login);
    if ($result) { #if this query true/runs/gives answer, then we logged in, take information as an array
        $this->session->set_userdata('id', $result['id']);
        $this->session->set_userdata('name', $result['name']);
        $this->session->set_userdata('email', $result['email']);
        $this->load->model('dbmodel');
        $listings = $this->dbmodel->getpostsofone(); //this is for posting data to the company profile
        $this->load->view('companypage', array('listings'=>$listings) ); 
    } else {
        $error['logerror'] = "Wrong password or email";
        $this->load->view('partners', $error); #send this error to homepage, i will print them with key(logerror)
    }
}


//////////////////////////////////////////////This is for LOGIN for ADMINS////////////////////////////////////////////

public function loginadmin()//this function for login engin
{
    $loginfoadmin = $this->input->post(null, true);//take whole information from form

    $email_login = $loginfoadmin['email-login'];
    $password_login = $loginfoadmin['password-login'];
    //assign variable to check this if its matching with database or not
   
    $this->load->model('dbmodel');
    
    $result = $this->dbmodel->loginMethodadmin($email_login, $password_login);
    if ($result) { #if this query true/runs/gives answer, then we logged in, take information as an array
        $this->session->set_userdata('admin_id', $result['id']);
        $this->session->set_userdata('admin_name', $result['name']);
        $this->session->set_userdata('admin_email', $result['email']);
        $this->session->set_userdata('admin_level', $result['level']);

        $this->load->model('dbmodel');
        $listings=$this->dbmodel->getpendingposts();
        $this->load->view('homeadmin',array('listings'=>$listings)); 
    } else {
        $error['logerror'] = "Wrong password or email";
        $this->load->view('cpadmin', $error); #send this error to homepage, i will print them with key(logerror)
    }
}



////////////////this for login out of the company and return to login page//////////////////////////////////
    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('home'); 
    }


////////////////this for login out of the company and return to login page//////////////////////////////////
public function logoutadmin()
{
    $this->session->sess_destroy();
    $this->load->view('cpadmin'); 
}



//////////////////////////////////////////////This is for ADMIN REGISTER & Validation/////////////////////////////////
    public function registeradmin()
    {

        //the below 5 lines are for validation of the registrations "it is one of MVC libraries loaded into the autoload.php"
		$this->form_validation->set_rules('name', 'Name',  'trim|required|min_length[3]|alpha');// alpha is to force alphabet
		$this->form_validation->set_rules('email', 'Email address',  'required|valid_email');// valid_email: only email type is allowed
		$this->form_validation->set_rules('password', 'password',  'trim|required|min_length[6]');
		$this->form_validation->set_rules('passwordConfirm', 'The confirmed Password', 'required|matches[password]'); //matches[password]: to force the matching of the passwords
       

        if ($this->form_validation->run() == FALSE) { #if these errors exist, then; 
            $error['error'] = validation_errors(); 
            $this->load->view('homeadmin', $error); //show them in the registration form

        } else {
            $adminreginfo = $this->input->post(null, true); //null: means send every inputs from the form to the db
			//input will be sent as an array which contain all above elements

            $this->load->model('dbmodel'); //load process from models called 'dbmodel.php'


            $result = $this->dbmodel->checker($adminreginfo['email']);


            //this is to show if you have entered the same email to the data base before.
            if ($result) {
                $error['error'] = "The email you have just entered is already exist, please enter a different email address";
                $this->load->view('homeadmin', $error);
            } else {
                $this->dbmodel->insert_admin($adminreginfo); //call the (function) from model and run it with our inputs.
                $noerror['noerror'] = "You are succesfully registered to our db. Now you can login.";
                $this->load->view('homeadmin', $noerror); #send this errors to loginandregisterpage.
            }



        }
    }
//////////////////////////////////////////////////////
///Husam this to run editprofile -showing the current profile info
public function edit()
{
    $this->load->model('dbmodel');
    $listings = $this->dbmodel->currentinfo();
    $this->load->view('editprofile', array('listings'=>$listings));

}
/////////////////////Husam : continue to edit 
/////////////////////////
public function editnewinfo()
{
    $newinfo = $this->input->post(null, true);
    $this->load->model('dbmodel');
    $this->dbmodel->editprofile($newinfo);
    $listings = $this->dbmodel->currentinfo();
    $this->load->view('editprofile',array('listings'=>$listings));
}

/////////////////////Husam : Add post feature to the company 
public function addpost()
{
    $this->load->view('addpost');
}
///////////////////////////////////////////////////////////////////////////////////////////////////

public function insertingpost()
{
<<<<<<< HEAD:application/controllers/Engin.php
=======
<<<<<<< HEAD
>>>>>>> 43d0488009a89a337852c3b4f20fbba911770c1a:New folder/application/controllers/Engin.php
 //////////////////////////////////////////////
        $this->form_validation->set_rules('title', 'Title',  'trim|required|min_length[3]|alpha');
        $this->form_validation->set_rules('description', 'The description',  'required');
       $this->form_validation->set_rules('tag', 'Tag',  'trim|required');
       $this->form_validation->set_rules('startdate', 'Start date',  'required');
       $this->form_validation->set_rules('enddate', 'End date',  'required');
       $this->form_validation->set_rules('link', 'Link',  'trim|required|valid_url');
       $this->form_validation->set_rules('tag', 'Tag',  'trim|required');
       $this->form_validation->set_rules('vacanciesnum', 'Vacancies number',  'trim|required');
       $this->form_validation->set_rules('filledposition', 'Filled positions',  'trim|required');//we need to add condition to be less than vacanciesnum
       $this->form_validation->set_rules('language', 'Language',  'trim|required');
        
     

       if ($this->form_validation->run() == FALSE) { #if these errors exist, then;
           $error['error'] = validation_errors();
           $this->load->view('addpost', $error); //show them in the registration form

       } else {
           $this->load->model('dbmodel');
           $addingpost = $this->input->post(null, true);


           $result = $this->dbmodel->checker($addingpost['title']);


           //this is to show if you have entered the same email to the data base before.
           if ($result) {
               $error['error'] = "The post you have just entered is already exist, please enter a different post";
               $this->load->view('addpost', $error);
           } else {
               $this->dbmodel->insertpost($addingpost); //call the (function) from model and run it with our inputs.
               $noerror['noerror'] = "You are succesfully add your vaccancie. Now you can go to your home page to see your listing status";
               $this->load->view('addpost', $noerror); #send this errors to loginandregisterpage.
           }



       }
   
   
   
}
//////////////////////////////////////////////////
///Husam view all companies in the cp admin
public function viewcompanies()
{
<<<<<<< HEAD:application/controllers/Engin.php
    $this->load->model('dbmodel');
    $listings = $this->dbmodel->getcompanies();
    $this->load->view('cpviewcompanies',array('listings'=>$listings));
}
////////////////////////////////////////////////////////////////////////////
//Husam: view all posts on CP of the admin
public function viewposts()
{
    $this->load->model('dbmodel');
    $listings= $this->dbmodel->getallposts();
    $this->load->view('cpviewallposts',array('listings'=>$listings));
}
///////////////////////////////////////////////////////////////////////////
// Husam: approving pending posts by admin
public function approvepost($id)
{
    $this->load->model('dbmodel');
    $this->dbmodel->aproveapost($id);
     $msg = "The post is approved";
     $this->load->view('homeadmin',array('message' => $msg));
  
}
////////////////////////////////////////////////////////////////////
// reject pending posts by admin in the CP 
public function rejectpost($id)
{
    $this->load->model('dbmodel');
    $this->dbmodel->delpost($id);
    $msg="The post is removed ";
    $this->load->view('homeadmin',array('message' => $msg));
}

////////////////////////////////////////////////////////////////
/////Deleting company by id from cp admin 
public function deletecompany($id)
{
    $this->load->model('dbmodel');
    $this->dbmodel->delcomp($id);
    $msg="The Company selected was removed!";
    redirect('cpshowcompanies');
}

public function cpshowcompanies()
{
    $this->load->model('dbmodel');
    $listings = $this->dbmodel->getcompanies();
    $this->load->view('cpviewcompanies',array('listings'=>$listings));
}

///////////////////////////////////////////////////////
////Husam : Editing pending posts on cp admin
public function editpost()
{
	redirect('gotocpeditpostspage');
}
////////////////////////////////////////////////////////////////
///////Editing posts on pending at the control panel
public function editing($id)
	{
		$editform = $this->input->post(null, true);
		$result = $this->dbmodel->edit($editform);
		$this->load->view('homeadmin');
    }
    
   public function gotocpeditpostspage($id)
   {
    $result = $this->dbmodel->getOnepost($id);
    $this->load->view('cpeditpostspage',['post' => $result]);
   } 
}
=======
    $this->load->model('dbmodel');
    $listings = $this->dbmodel->getcompanies();
    $this->load->view('cpviewcompanies',array('listings'=>$listings));
}
////////////////////////////////////////////////////////////////////////////
//Husam: view all posts on CP of the admin
public function viewposts()
{
    $this->load->model('dbmodel');
    $listings= $this->dbmodel->getallposts();
    $this->load->view('cpviewallposts',array('listings'=>$listings));
}
///////////////////////////////////////////////////////////////////////////
// Husam: approving pending posts by admin
public function approvepost($id)
{
    $this->load->model('dbmodel');
    $this->dbmodel->aproveapost($id);
    $msg = "The post is approved";
    $this->load->view('homeadmin',array('message' => $msg));
   
}
////////////////////////////////////////////////////////////////////

}
=======
  //////////////////////////////////////////////
		$this->form_validation->set_rules('title', 'Title',  'trim|required|min_length[3]|alpha');
		$this->form_validation->set_rules('description', 'The description',  'required');
        $this->form_validation->set_rules('tag', 'Tag',  'trim|required');
        $this->form_validation->set_rules('startdate', 'Start date',  'required');
        $this->form_validation->set_rules('enddate', 'End date',  'required');
        $this->form_validation->set_rules('link', 'Link',  'trim|required|valid_url');
        $this->form_validation->set_rules('tag', 'Tag',  'trim|required');
        $this->form_validation->set_rules('vacanciesnum', 'Vacancies number',  'trim|required');
        $this->form_validation->set_rules('filledposition', 'Filled positions',  'trim|required');//we need to add condition to be less than vacanciesnum
        $this->form_validation->set_rules('language', 'Language',  'trim|required');
		
       

        if ($this->form_validation->run() == FALSE) { #if these errors exist, then; 
            $error['error'] = validation_errors(); 
            $this->load->view('addpost', $error); //show them in the registration form

        } else {
            $this->load->model('dbmodel');
            $addingpost = $this->input->post(null, true);


            $result = $this->dbmodel->checker($addingpost['title']);


            //this is to show if you have entered the same email to the data base before.
            if ($result) {
                $error['error'] = "The post you have just entered is already exist, please enter a different post";
                $this->load->view('addpost', $error);
            } else {
                $this->dbmodel->insertpost($addingpost); //call the (function) from model and run it with our inputs.
                $noerror['noerror'] = "You are succesfully add your vaccancie. Now you can go to your home page to see your listing status";
                $this->load->view('addpost', $noerror); #send this errors to loginandregisterpage.
            }



        }
    
    
    
}
}

>>>>>>> ace4adcf92948da1ee4abb4cc8b9e9c7ead0e083
>>>>>>> 43d0488009a89a337852c3b4f20fbba911770c1a:New folder/application/controllers/Engin.php
