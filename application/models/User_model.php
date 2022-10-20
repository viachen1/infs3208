<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
    


    public function login($username, $password)
    {
        
        $query = ("
        SELECT password
        FROM users
        WHERE username = '$username';
        ");
        $dbpassword = $this->db->query($query)->result();
        foreach ($dbpassword as $row) {
            $dbpassword = $row->password;
        };
        
        if (password_verify($password, $dbpassword)) {
            return true;
        } else {
            return false;
        }
    }
    // Log in
    // public function login($username, $password){
    //     // Validate
    //     $this->db->where('username', $username);
        
    //     $this->db->where('password', $password);
        
    //     $result = $this->db->get('users');

    //     if($result->num_rows() == 1){
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    //check unique
    public function checkunique($username){
        $query = "
        SELECT username
        FROM users
        WHERE username LIKE '$username'
        ";
        
        $check = $this->db->query($query);
        if($check->num_rows() != 0){
           return true;
        } else {
            return false;
        }
    }

    public function checkEmial($email){
        $query = "
        SELECT Email
        FROM users
        WHERE Email LIKE '$email'
        ";
        
        $check = $this->db->query($query);
        if($check->num_rows() != 0){
           return true;
        } else {
            return false;
        }
    }

    public function register($username, $password, $email, $phoneNumber, $question){



        $data = array(
			'username' => $username,
			'password' => $password,
            'email' => $email,
			'phoneNumber' => $phoneNumber,
            'question' => $question,
		);
		return $this->db->insert('users', $data);
        
	}


    public function updatePwd($username, $newPwd)
	{
		$data = array(
			'password' => $newPwd,
		);
		$this->db->where('username', $username);
		return $this->db->update('users', $data);
	}

    public function updatePersonalInfo($username, $newPwd, $newEmail, $newPhoneNumber)
	{
		$data = array(
			'password' => $newPwd,
            'email' => $newEmail,
			'phoneNumber' => $newPhoneNumber,
		);
		$this->db->where('username', $username);
		return $this->db->update('users', $data);
	}


    

    public function getUserInfo($username) {
        $username = $this->session->userdata('username');
        $query = "
        SELECT username, Email, PhoneNumber
        FROM users
        WHERE username = '$username';
        ";
        $query = $this->db->query($query);
        return $query->result();
    }


    public function getAnswer($username) {
        $query = "
        SELECT question
        FROM users
        WHERE username LIKE '$username'
        ";
        $query = $this->db->query($query);

        return $query->result();
    }
}
?>
