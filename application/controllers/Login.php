<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    
    public function index()
    {
        $this->isLoggedIn();
    }
    
  
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('back_end/login');
        }
        else
        {
            redirect('/Student');
        }
    }

    public function loginMe()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            
            $result = $this->login_model->loginMe($email, $password);
            if(!empty($result))
            {	
                $sessionArray = array('idlogins'=>$result->idlogins,                    
                                        'email'=>$result->email,
                                        'name'=>$result->name,
                                        'mobile'=>$result->mobile,
                                        'status'=> $result->status,
                                        'role' => $result->role,
                                        'isLoggedIn' =>TRUE
                                );

                $this->session->set_userdata($sessionArray);

                //unset($sessionArray['idlogins'], $sessionArray['email'], $sessionArray['role']);

                //$loginInfo = array("idlogins"=>$result->idlogins, "sessionData" => json_encode($sessionArray), "machineIp"=>$_SERVER['REMOTE_ADDR'], "userAgent"=>getBrowserAgent(), "agentString"=>$this->agent->agent_string(), "platform"=>$this->agent->platform());

                //$this->login_model->lastLogin($loginInfo);
                
                redirect('student/');
            }
            else
            {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                
                $this->index();
            }
        }
    } 

}

?>