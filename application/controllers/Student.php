<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Student extends BaseController
{
 
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('Student_model', 'student_model');
    }

    public function index()
    { 
        $this->global['pageTitle'] = 'WorldTrack GPS : Dashboard';
        
        $this->loadViews("back_end/dashboard", $this->global, NULL , NULL);
    }
    
    function student_list()
    {
            $data['studentrecords'] = $this->student_model->student_list();
			
            $this->global['pageTitle'] = 'Student List';
            
            $this->loadViews("back_end/student/student_list", $this->global, $data, NULL);
    }

    function add_student()
    {
            $data = '';
			
            $this->global['pageTitle'] = 'WorldTrack GPS : Add New Customer';

            $this->loadViews("back_end/student/add_student", $this->global, $data, NULL);
    }
    

    function view_student()
    {            
        $id =  $this->uri->segment(3);

        $data['studentinfo'] = $this->student_model->student_details($id);
        
        $this->global['pageTitle'] = 'WorldTrack GPS : View Customer';
        
        $this->loadViews("back_end/student/view_student", $this->global, $data, NULL);
    }
    
    public function deleteCustomer()
    {
        $id = $this->input->post('id');
            
        $result = $this->student_model->deleteStudent($id);
        if ($result > 0) {
                echo(json_encode(array('status'=>TRUE))); }
        else {
                echo(json_encode(array('status'=>FALSE))); 
        }

    }

    function customerfingerdata()
    {
        if($this->isLoggedIn()){
            redirect('/login');
        }else{
            $id =  $this->uri->segment(3);

            $data['studentinfo'] = $this->student_model->student_details($id);
            
            $this->global['pageTitle'] = 'WorldTrack GPS : View Customer';
            
            $this->load->view("back_end/student/fingerprint_view", $data);
        }
    }

    function api_logout()
    {   
        $this->logout();
        echo(json_encode(array('status'=>FALSE))); 
    }
    
}

?>