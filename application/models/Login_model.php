<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    function loginMe($email, $password)
    {
        $this->db->select('*');
        $this->db->from('logins');
        $this->db->where('email', $email);
        $query = $this->db->get();
        
        $user = $query->row();
        
        if(!empty($user)){
            if($password == $user->password){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

}

?>