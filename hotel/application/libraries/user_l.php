<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_l{

	public function __construct() {
		
	}
	public function login($user)
	{
		// var_dump($user);
		$data = array(
			'uid' => $user[0]->customer_email,
			'username' => $user[0]->customer_email,
			//'fullname' => $user[0]->customer_firstname." ".$user[0]->customer_lastname
			//'email' => $user[0]->employee_email,
			//'department_name' => $user[0]->department_name
		);

		$CI = &get_instance();
		$CI->session->set_userdata($data);
		// $_SESSION["uid"] = $user[0]->employee_id

		// if($_SESSION["uid"]) giris yapmistir

		// $this->session->userdata("uid")  
	}
	public function logout()
	{
		$CI = &get_instance();
		$CI->session->sess_destroy();
	}
}
