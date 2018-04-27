<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_c extends CI_Controller {

	private $module_name = "Validasi";

	public function __construct(){

		parent::__construct();
		
		$this->load->model('auth_m');
		// $this->token_auth_redirect();

	}

	public function index()
	{
		$this->token_auth_redirect();
		// $this->token_is_validate();

		$data['title'] = $this->config->item('ditmet_title'). " - ".$this->module_name;

		$this->load->view('auth_v_login', $data);
	}

	public function register()
	{
		
		$data['title'] = $this->config->item('ditmet_title'). " - ".$this->module_name;

		$this->load->view('auth_v_register', $data);
	}

	public function register_action(){

	  $data = [
	    'user_fullname'   =>  strtoupper($this->input->post('user_fullname')),
	    'user_email'      =>  $this->input->post('user_email'),
	    'user_password'   =>  password_hash($this->input->post('user_rpass'), PASSWORD_DEFAULT),
	    'activation_code' =>  md5(uniqid(mt_rand(), true).microtime(true)),
	  ];

	  // untuk insert ke tabel users
	  $response = $this->auth_m->insert_users($data);

	  if ($response === true) {

	    $params['status'] = true;
	    $params['message'] = 'Berhasil disimpan';
	    $params['activation_code'] = $data['activation_code'];
	    $msg = $params;

	  } else {
	    $msg = array('status' => false,'message' =>  'Email telah terdaftar');
	  }
	  
		echo json_encode($msg);
	}

	public function daftar_cek_email(){

		$user_email = $this->input->post('user_email');

		// cek email sudah terdaftar belum
		$response = $this->auth_m->select_users_email_where($user_email);

		echo $response;

	}

	public function login(){

	  $data = [
	    'user_email'      =>  $this->input->post('user_email'),
	    'user_password'   =>  $this->input->post('user_pass'),
	  ];

	  // cek email sudah terdaftar belum
	  $query = $this->auth_m->select_count_users_where($data['user_email']);
		
	  // jika email sudah terdaftar
	  if ($query > 0) {

	    // cek user sudah aktif belum
	    $is_aktif = $this->auth_m->select_all_user_where($data['user_email']);

	    if ($is_aktif->is_activated == 'yes') { 

	      // ambil passwordnya dari db
	      $users = $this->auth_m->select_all_user_where($data['user_email']);

	      if (password_verify($data['user_password'], $users->user_password)) { 

	        $date = new DateTime();

	        // ambil group
	        // $group = array();
	        // $groups = $this->auth_m->select_all_group_where($users->user_id);
	        // foreach ($groups as $val) {
	        //   # code...
	        //     $group[] = $val['group_id'];
	        // }

	        // untuk generate token
	        $payload['user_id']         = $users->user_id;
	        $payload['role_id']         = $users->role_id;
	        $payload['group_id']        = $users->group_id;
	        $payload['user_email']      = $users->user_email;
	        $payload['user_fullname']   = $users->user_fullname;
	        $payload['remember']        = $this->input->post('remember') ? $this->input->post('remember') : 'no';
	        $payload['iat']             = $date->getTimestamp(); //waktu di buat
	        $payload['exp']             = $date->getTimestamp() + ($this->config->item("exp_password")); 

	        // untuk ditampilkan di api
	        $data2['token'] = AUTHORIZATION::generateToken($payload);

	        $this->auth_m->update_users($data['user_email'], $data2);

	        $data2['user_id']           = $payload['user_id'];
	        $data2['role_id']           = $payload['role_id'];
	        $data2['group_id']          = $payload['group_id'];
	        $data2['user_email']        = $payload['user_email'];
	        $data2['user_fullname']     = $payload['user_fullname'];
	        $data2['remember']          = $payload['remember'];
	        $data2['exp']               = $payload['exp'];

	        $msg = array('status' => true,'message' =>  'Berhasil login', 'data' => $data2);

	        // header('Authorization: '.$data2['token']);

	      } else {      // password tidak sama

	        $msg = array('status' => false,'message' =>  'Password salah');

	      }

	    } else {    // user belum diaktifasi

	        $msg = array('status' => false,'message' =>  'User belum diaktifasi');

	    }


	  } else {    // email belum terdaftar

	    $msg = array('status' => false,'message' =>  'Email belum terdaftar');

	  }

		echo json_encode($msg);

	} // login_post

	public function forgot(){


	  // $new_password = md5(uniqid(mt_rand(), true).microtime(true));
	  // $new_password = uniqid(mt_rand(), true).microtime(true);
	  $new_password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);
	  $data['user_password'] = password_hash($new_password, PASSWORD_DEFAULT);
	  $data['forgot_password_code'] = $new_password;
	  $data['user_email'] = $this->input->post('user_email_modal');
	  
	  $query = $this->auth_m->select_count_users_where($data['user_email']);

	  // jika email sudah terdaftar
	  if ($query > 0) {

	    $query2 = $this->auth_m->update_users($data['user_email'], $data);

	    if ($query2) 
	    {
	      
	      // send to email password baru nya

	      $msg = array('status' => true, 'message' =>  'User password berhasil diganti', 'new_password' => $new_password);


	    } else {

	      $msg = array('status' => false, 'message' =>  'User password gagal diganti');


	    }

	  } else {    // email belum terdaftar

	    $msg = array('status' => false, 'message' =>  'Email belum terdaftar');


	  }

		echo json_encode($msg);

	} // forgot


    // khusus redirect ke halaman dashboard kalo masih ada tokennya dan tidak di kick
    private function token_auth_redirect() {

        if (get_cookie("token") !== NULL) {

            // echo "0";

            $decodedToken = AUTHORIZATION::validateToken(get_cookie("token"));

            if (!empty($decodedToken)) {
                
                // echo "8";

                // echo $decodedToken->user_email;
                $query = $this->auth_m->select_all_user_where($decodedToken->user_email);
                // cek tokennya ada atau tidak di database
                // untuk kill user tinggal hapus token dari field user
                // echo $query->user_email; 
                if ($query->token != '') {

                    // echo "1";
                    redirect(base_url().'home');

                }

            }

        }

    }

}