<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->helper(array('url'));
		
	}
	
	
	public function index() {
		
		$this->load->view('header');
		$this->load->view('user/login');
		$this->load->view('footer');
		
	}
	
	public function register() {
		
		// create the $data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password_confirm', 'Password Confirm', 'trim|required');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send errors to the view
			$this->load->view('header');
			$this->load->view('user/register', $data);
			$this->load->view('footer');
			
		}
		
	}
		
	public function login() {
		
		$this->load->view('header');
		$this->load->view('user/login');
		$this->load->view('footer');
		
	}
	
}
