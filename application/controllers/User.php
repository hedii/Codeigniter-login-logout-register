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
		
		$this->load->view('header');
		$this->load->view('user/register');
		$this->load->view('footer');
		
	}
		
	public function login() {
		
		$this->load->view('header');
		$this->load->view('user/login');
		$this->load->view('footer');
		
	}
	
}
