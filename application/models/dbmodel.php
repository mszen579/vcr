<?php 
class dbmodel extends CI_Model
{
    public function insert_user($par)// here we will enter each parameter into the db
    {
        $query = "INSERT INTO companies (name, email, password, address, type, contact, about, logo, admins_id) values (?,?,?,?,?,?,?,?,?)";
        $values = [$par['name'], $par['email'], $par['password'], $par['address'], $par['type'], $par['contact'], $par['about'], $par['logo'], 2]; //we need to the md5 is for hashing the password

        $this->db->query($query, $values);


    }
///////////////////////////////////////////////login for companies//////////////////////////////////////////////////////
    public function loginMethod($email, $password) // here we will enter each parameter into the db
    {
        $myquery = "SELECT * FROM companies WHERE email=? AND password = ? ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

//////////////////////////////////////////////////login for admins///////////////////////////////////////////////////
    public function loginMethodadmin($email, $password) // here we will enter each parameter into the db
    {
        $myquery = "SELECT * FROM admins WHERE email=? AND password = ? ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function checker($email) // here we will check if the email has been registered before or not.
    {
        $myquery = "SELECT * FROM companies WHERE email=? ";
        $values = array("$email");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function insert_admin($par)// here we will enter each parameter into the db
    {
        $query = "INSERT INTO admins (name, email, password, level) values (?,?,?,?)";
        $values = [$par['name'], $par['email'], $par['password'], $par['level']]; //we need to the md5 is for hashing the password

        $this->db->query($query, $values);


    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Husam : query for the homepage to show the recent posts starting by the highlited on the top/////
public function getposts()
{
    $query = "SELECT * FROM `posts` ORDER BY highlighted DESC";
    $listings= $this->db->query($query)->result_array();
    return $listings;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Husam : query to get all post of specific company and return the values to company page after specific company logs in 
public function getpostsofone()
{
    $query = "SELECT * FROM `posts` where companies_id=?";
    $listings=$this->db->query($query,$this->session->userdata('id'))->result_array();
    return $listings;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////Husam: this query runs on edit profile page to show the current profile information of the company
public function currentinfo()
{
    $query = "SELECT * FROM `companies` where id=?";
    $listings=$this->db->query($query,$this->session->userdata('id'))->result_array();
    return $listings;
}
//////////////////////////////////////////////////////////////////////////////////
//Husam : this query is to edit profile of the a company 
public function editprofile($par)
{
    $id = $this->session->userdata('id');
    $query="UPDATE companies SET email=? , address=? , contact=? ,about= ? WHERE id=?";
    $values=[$par['email'], $par['address'], $par['contact'], $par['about'] , $id ];
    $this->db->query($query, $values);

}
////////////////////////////////////////////////////////////////////////////////
///Husam: Adding post for one company 
public function insertpost($addingpost)
{
    $id = $this->session->userdata('id');
    $admin= 1;
    $query= "INSERT INTO posts (title,image,description,language,startdate
    ,enddate,status,link,vacanciesnum,filledposition,companies_id,admins_id) values(?,?,?,?,?,?,?,?,?,?,?,?)";
    $values = [$addingpost['title'],$addingpost['image'],$addingpost['description'],$addingpost['language'],$addingpost['startdate'],$addingpost['enddate'],'Pending',$addingpost['link'],$addingpost['vacanciesnum'],$addingpost['filledposition'],$id,1];
    $this->db->query($query,$values);
}
}



