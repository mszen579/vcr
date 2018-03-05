<?php 
class Craiglistmodel extends CI_Model
{
    public function insertuser($userinfo)
    {
        $query = "INSERT INTO users (first_name, last_name, email, password) values (?,?,?,?)";
        $values = [$userinfo['firstname'], $userinfo['lastname'], $userinfo['email'], $userinfo['password']];
        $this->db->query($query, $values);



    }
    public function loginchecker($arg)
    {
      $query = "SELECT * FROM users WHERE email=? And password = ?";
      $values=[$arg['email'],$arg['password']];
      $userinfo = $this->db->query($query,$values)->row_array();
      return  $userinfo;
    }
    public function inserlisting($arg)
    {
        $query = "INSERT INTO listings (title, description, price, contact,location,users_id
        ) values (?,?,?,?,?,?)";
        $values = [$arg['title'], $arg['description'], $arg['price'], $arg['contact'],$arg['location'],$arg['id']];
        $this->db->query($query, $values);
        



    }
    public function takelist()
    {
        $query = "SELECT users.first_name,listings.id,listings.created_at,listings.title,listings.description,listings.price,listings.location,listings.contact FROM listings JOIN users ON users.id = listings.users_id";
        $listing = $this->db->query($query)->result_array();
        return $listing;

    }
    public function deletproduct($id)
    {
        $query="DELETE FROM listings WHERE id=? ";
        $values=$id;
        $this->db->query($query, $values);

    }
    public function showone($id)
    {
        $query="SELECT * FROM listings WHERE id=?";
		$values=$id;
		$listing=$this->db->query($query,$values)->result_array();
		return $listing;


    }
   
    
}