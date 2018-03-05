<?php 
class Usersmodel extends CI_Model
{
    public function insert_user($arg)
    {
        $query = "INSERT INTO users (first_name, last_name, email, password) values (?,?,?,?)";
        $values = [$arg['firstname'], $arg['lastname'], $arg['email'], $arg['password']];

        $this->db->query($query, $values);


    }

    public function loginMethod($email, $password)
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

    public function checker($email)
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

    public function addPost($post, $userid)
    {
        $query = "INSERT INTO messages (message, user_id) values (?,?)";
        $values = [$post, $userid];
        $this->db->query($query, $values);
    }

    public function takePost()
    {
        $query = "SELECT users.first_name, messages.message, messages.id
                    FROM users
                    JOIN messages
                    ON users.id = messages.user_id
                    ORDER BY messages.id DESC ";
        return $this->db->query($query)->result_array();
    }

    public function takeOne($id)
    {
        $query = "SELECT users.first_name, users.last_name, messages.message, messages.id
                    FROM users
                    JOIN messages
                    ON users.id = messages.user_id
                    WHERE messages.id = $id ";


        return $this->db->query($query)->row_array();
    }

    public function deletemessage($id)
    {
        $query = "DELETE FROM messages WHERE id= '$id'";
        $this->db->query($query);
    }

}

?>