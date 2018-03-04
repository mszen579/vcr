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
}



