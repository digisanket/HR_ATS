<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 

class BaseController extends CI_Controller {
	protected $role = '';
	protected $name = '';
	protected $status = '';
	protected $idlogins = '';
	protected $email = '';
	
	
	public function response($data = NULL) {
		$this->output->set_status_header ( 200 )->set_content_type ( 'application/json', 'utf-8' )->set_output ( json_encode ( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) )->_display ();
		exit ();
	}
	
	function isLoggedIn() {
		$isLoggedIn = $this->session->userdata ( 'isLoggedIn' );
		
		if (! isset ( $isLoggedIn ) || $isLoggedIn != TRUE) {
			redirect ( 'login' );
		} else {
			$this->role = $this->session->userdata ( 'role' );
			$this->idlogins = $this->session->userdata ( 'idlogins' );
			$this->name = $this->session->userdata ( 'name' );
			$this->email = $this->session->userdata ( 'email' );
			$this->status = $this->session->userdata ( 'status' );
			
			$this->global ['name'] = $this->name;
			$this->global ['role'] = $this->role;
			$this->global ['idlogins'] = $this->idlogins;
			$this->global ['email'] = $this->email;
			$this->global ['status'] = $this->status;
		}
	}
	
	function isAdmin() {
		if ($this->role == 'Admin') {
			return true;
		} else {
			return false;
		}
	}
	
	function isTicketter() {
		if ($this->role != ROLE_ADMIN || $this->role != ROLE_MANAGER) {
			return true;
		} else {
			return false;
		}
	}
	

	function loadThis() {
		$this->global ['pageTitle'] = 'Worldtrack GPS : Access Denied';
		
		$this->load->view ( 'back_end/includes/header', $this->global );
		$this->load->view ( 'back_end/access' );
		$this->load->view ( 'back_end/includes/footer' );
	}
	

	function logout() {
		$this->session->sess_destroy();
		redirect ( 'login' );
	}



    function loadViews($viewName = "", $headerInfo = NULL, $pageInfo = NULL, $footerInfo = NULL){
        $this->load->view('elements/header', $headerInfo);
        $this->load->view($viewName, $pageInfo);
        $this->load->view('elements/footer', $footerInfo);
    }
}