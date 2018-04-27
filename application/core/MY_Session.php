<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Session extends CI_Session {

	public function __construct() {
		parent::__construct();
	}

	function sess_destroy() {

		//write your update here 
		$this->CI->db->query("UPDATE users SET is_login=0 WHERE user_name='verafirmansyah@gmail.com' ");

		//call the parent 
		parent::sess_destroy();
	}

}