<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function user_list(){
        $this->db->select('*');
        $this->db->from('logins');
        $this->db->where('role','User');
        $this->db->where('status',1);
        $this->db->limit(4);

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function deleteuser($id)
    {
		$this->db->where('idlogins', $id);
		$this->db->delete('logins');
        return $this->db->affected_rows();
    }

    function insert_user($data)
    {
        $this->db->insert('logins', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    function get_id_user($data)
    {
        $this->db->select('*');
        $this->db->from('logins');
        $this->db->where('idlogins',$data);
        $query = $this->db->get();

        $result = $query->row();
        return $result;
    }

    function editUser($user_id, $data)
    {
        $this->db->where('idlogins', $user_id);
        $this->db->update('logins', $data);

        return TRUE;
    }

}

  