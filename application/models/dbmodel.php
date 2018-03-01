<?php 
class dbmodel extends CI_Model
{
    public function insert_user($par)// here we will enter each parameter into the db
    {
        $query = "INSERT INTO users (firstname, lastname, email, password) values (?,?,?,?)";
        $values = [$par['firstname'], $par['lastname'], $par['email'], $par['password']]; //we need to the md5 is for hashing the password

        $this->db->query($query, $values);


    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function loginMethod($email, $password) // here we will enter each parameter into the db
    {
        $myquery = "SELECT * FROM users WHERE email=? AND password = ? ";
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
        $myquery = "SELECT * FROM users WHERE email=? ";
        $values = array("$email");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}