<?php 
class Craiglistmodel extends CI_Model
{
    public function insertuser($userinfo)
    {
        $query = "INSERT INTO users (username, email, age, password) values (?,?,?,?)";
        $values = [$userinfo['username'], $userinfo['email'], $userinfo['age'], $userinfo['password']];
        $this->db->query($query, $values);



    }
    public function loginchecker($arg)
    {
      $query = "SELECT * FROM users WHERE username = ? And password = ?";
      $values=[$arg['username'],$arg['password']];
      $userinfo = $this->db->query($query,$values)->row_array();
      return  $userinfo;
    }

    
    public function addPost($post)
    {
        $query = "INSERT INTO articales (title, articale, users_id) values (?,?,?)";
        $values = [$post['title'], $post['articale'],$post['id']];
        $this->db->query($query, $values);
    }
   
    public function showtitle()
    {
        $query = "SELECT * FROM  articales";
        return $this->db->query($query)->result_array();
    }
    
  
    
}