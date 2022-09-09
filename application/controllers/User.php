<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class User extends BaseController
{
 
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('User_model', 'user_model');
    }
    
    function user_list()
    {   
        if($this->role != 'Admin'){
            redirect('/student');
        }else{
            $data['user_list'] = $this->user_model->user_list();
			
            $this->global['pageTitle'] = 'User List';
            
            $this->loadViews("back_end/user/user_list", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewCust()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data = "";
			
            $this->global['pageTitle'] = 'WorldTrack GPS : Add New Customer';

            $this->loadViews("back_end/customers/addCustomer", $this->global, $data, NULL);
        }
    }

    function change_password()
    {
            $data = "";
            $this->loadViews("back_end/user/passchange", $this->global, $data, NULL);
    }
    
   
    public function deleteuser()
    {
        $id = $this->input->post('id');
            
        $result = $this->user_model->deleteuser($id);
        if ($result > 0) {
                echo(json_encode(array('status'=>TRUE))); }
        else {
                echo(json_encode(array('status'=>FALSE))); 
        }
    }

    public function insert_data()
    {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $mobile = $this->input->post('mobile');
        $password = $this->input->post('password');
        $data  = array("name"=>$name,"email"=>$username,"mobile"=>$mobile,"password"=>$password,"status"=>1,"role"=>"User");

        $result = $this->user_model->insert_user($data);
        if ($result > 0) {
                echo(json_encode(array('status'=>TRUE))); }
        else {
                echo(json_encode(array('status'=>FALSE))); 
        }

    }

    public function change_user_password()
    {
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $user_id = $this->input->post('user_id');
        //$retype_password = $this->input->post('retype_password');

        $resultdata = $this->user_model->get_id_user($user_id);

        if(empty($resultdata)){
            echo(json_encode(array('status'=>FALSE)));
        }else{
            if ($resultdata->password == $old_password) {
                $data = array("password" => $new_password);
                $result = $this->user_model->editUser($user_id,$data);

                if(!empty($result)){
                    echo(json_encode(array('status'=>TRUE)));
                }else{
                    echo(json_encode(array('status'=>false)));
                }
            } else {
                echo(json_encode(array('status'=>FALSE)));
            }
        }
    }
    
}

?>