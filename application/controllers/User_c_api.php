<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class User_c_api extends REST_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('user_m');

  }

  function user_list_get(){

    // $check_auth_client = $this->user_m->check_auth_client();

    // if($check_auth_client == true){
      
      $response = $this->user_m->select_all_user();
    
      json_output(200, $response);
      // echo json_encode($response);
      // json_output(200, array('users' => $response));

    // } else {

      // json_output(400,array('status' => 400,'message' => 'Bad request.'));
    
    // }
  }

  function user_detail_get($user_id){

    // $check_auth_client = $this->user_m->check_auth_client();

    // if($check_auth_client == true){
      // $user_id = (int) $this->get('user_id',TRUE);

    $method = $_SERVER['REQUEST_METHOD'];
    if($method != 'GET' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
      json_output(400,array('status' => 400,'message' => 'Bad request.'));
    } else {
      $user_id = (int) $user_id;
      $response = $this->user_m->select_user_where($user_id);
    
      json_output(200, array('detail' => $response));
    }

    // } else {

      // json_output(400,array('status' => 400,'message' => 'Bad request.'));
    
    // }
  }

  // function daftar_post(){

  //   if ($this->post('user_fullname') == '' || $this->post('user_email') == '' || $this->post('user_pass') == '') {

  //     $msg = array('status' => false,'message' =>  'Parameter tidak boleh kosong');
  //     $this->set_response($msg, REST_Controller::HTTP_BAD_REQUEST);

  //   } elseif (!filter_var($this->post('user_email'), FILTER_VALIDATE_EMAIL)) {

  //     $msg = array('status' => false,'message' =>  'Email tidak valid');
  //     $this->set_response($msg, REST_Controller::HTTP_BAD_REQUEST);

  //   } elseif (!preg_match("/^.*(?=.{".$this->config->item("min_password").",})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $this->post('user_pass'))) {

  //     $msg = array('status' => false,'message' =>  'Password tidak valid, minimal : '.$this->config->item("min_password").' karakter, 1 huruf kecil, 1 huruf kapital dan 1 angka.');
  //     $this->set_response($msg, REST_Controller::HTTP_BAD_REQUEST);

  //   } else {

  //     $data = [
  //       'user_fullname'   =>  strtoupper($this->post('user_fullname')),
  //       'user_email'      =>  $this->post('user_email'),
  //       'user_password'   =>  password_hash($this->post('user_rpass'), PASSWORD_DEFAULT),
  //       'activation_code' =>  md5(uniqid(mt_rand(), true).microtime(true)),
  //     ];

  //     // untuk insert ke tabel users
  //     $response = $this->auth_m->insert_users($data);

  //     if ($response === true) {

  //       $params['status'] = true;
  //       $params['message'] = 'Berhasil disimpan';
  //       $params['activation_code'] = $data['activation_code'];
  //       $msg = $params;
  //       $this->set_response($msg, REST_Controller::HTTP_CREATED);

  //     } else {
  //       $msg = array('status' => false,'message' =>  'Email telah terdaftar');
  //       $this->set_response($msg, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
  //     }
      
  //   }
  // }

  // function daftar_cek_email_post(){

  //   $user_email = $this->post('user_email');

  //   // cek email sudah terdaftar belum
  //   $response = $this->auth_m->select_users_email_where($user_email);
    
  //   echo $response;
 
  // }

  // function login_post(){


  //   if ($this->post('user_email') == '' || $this->post('user_pass') == '') {

  //     $msg = array('status' => false,'message' =>  'Parameter tidak boleh kosong');
  //     $this->set_response($msg, REST_Controller::HTTP_OK);

  //   } elseif (!filter_var($this->post('user_email'), FILTER_VALIDATE_EMAIL)) {

  //     $msg = array('status' => false,'message' =>  'Email tidak valid');
  //     $this->set_response($msg, REST_Controller::HTTP_OK);

  //   } elseif (!preg_match("/^.*(?=.{".$this->config->item("min_password").",})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $this->post('user_pass'))) {

  //     $msg = array('status' => false,'message' =>  'Password tidak valid, minimal : '.$this->config->item("min_password").' karakter, 1 huruf kecil, 1 huruf kapital dan 1 angka.');
  //     $this->set_response($msg, REST_Controller::HTTP_OK);

  //   } else {

  //     $data = [
  //       'user_email'      =>  $this->post('user_email'),
  //       'user_password'   =>  $this->post('user_pass'),
  //     ];

  //     // cek email sudah terdaftar belum
  //     $query = $this->auth_m->select_count_users_where($data['user_email']);

  //     // jika email sudah terdaftar
  //     if ($query > 0) {

  //       // cek user sudah aktif belum
  //       $is_aktif = $this->auth_m->select_all_user_where($data['user_email']);

  //       if ($is_aktif->is_activated == 'yes') { 

  //         // ambil passwordnya dari db
  //         $users = $this->auth_m->select_all_user_where($data['user_email']);

  //         if (password_verify($data['user_password'], $users->user_password)) { 

  //           $date = new DateTime();

  //           // ambil group
  //           // $group = array();
  //           // $groups = $this->auth_m->select_all_group_where($users->user_id);
  //           // foreach ($groups as $val) {
  //           //   # code...
  //           //     $group[] = $val['group_id'];
  //           // }

  //           // untuk generate token
  //           $payload['user_id']         = $users->user_id;
  //           $payload['role_id']         = $users->role_id;
  //           $payload['group_id']        = $users->group_id;
  //           $payload['user_email']      = $users->user_email;
  //           $payload['user_fullname']   = $users->user_fullname;
  //           $payload['remember']        = $this->post('remember') ? $this->post('remember') : 'no';
  //           $payload['iat']             = $date->getTimestamp(); //waktu di buat
  //           $payload['exp']             = $date->getTimestamp() + ($this->config->item("exp_password")); 

  //           // untuk ditampilkan di api
  //           $data2['token'] = AUTHORIZATION::generateToken($payload);

  //           $this->auth_m->update_users($data['user_email'], $data2);

  //           $data2['user_id']           = $payload['user_id'];
  //           $data2['role_id']           = $payload['role_id'];
  //           $data2['group_id']          = $payload['group_id'];
  //           $data2['user_email']        = $payload['user_email'];
  //           $data2['user_fullname']     = $payload['user_fullname'];
  //           $data2['remember']          = $payload['remember'];
  //           $data2['exp']               = $payload['exp'];

  //           $msg = array('status' => true,'message' =>  'Berhasil login', 'data' => $data2);

  //           // header('Authorization: '.$data2['token']);

  //         } else {      // password tidak sama

  //           $msg = array('status' => false,'message' =>  'Password salah');

  //         }

  //       } else {    // user belum diaktifasi

  //           $msg = array('status' => false,'message' =>  'User belum diaktifasi');

  //       }

  //       $this->set_response($msg, REST_Controller::HTTP_OK);

  //     } else {    // email belum terdaftar

  //       $msg = array('status' => false,'message' =>  'Email belum terdaftar');
  //       // $this->set_response($msg, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
  //       $this->set_response($msg, REST_Controller::HTTP_OK);

  //     }

  //   }
    
  // } // login_post

  // function forgot_post(){


  //   if ($this->post('user_email_modal') == '') {

  //     $msg = array('status' => false,'message' =>  'Parameter tidak boleh kosong');
  //     $this->set_response($msg, REST_Controller::HTTP_OK);

  //   } elseif (!filter_var($this->post('user_email_modal'), FILTER_VALIDATE_EMAIL)) {

  //     $msg = array('status' => false,'message' =>  'Email tidak valid');
  //     $this->set_response($msg, REST_Controller::HTTP_OK);

  //   } else {

  //     // $new_password = md5(uniqid(mt_rand(), true).microtime(true));
  //     // $new_password = uniqid(mt_rand(), true).microtime(true);
  //     $new_password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);
  //     $data['user_password'] = password_hash($new_password, PASSWORD_DEFAULT);
  //     $data['forgot_password_code'] = $new_password;
  //     $data['user_email'] = $this->post('user_email_modal');
      
  //     $query = $this->auth_m->select_count_users_where($data['user_email']);

  //     // jika email sudah terdaftar
  //     if ($query > 0) {

  //       $query2 = $this->auth_m->update_users($data['user_email'], $data);

  //       if ($query2) 
  //       {
          
  //         // send to email password baru nya

  //         $msg = array('status' => true, 'message' =>  'User password berhasil diganti', 'new_password' => $new_password);

  //         $this->set_response($msg, REST_Controller::HTTP_OK);

  //       } else {

  //         $msg = array('status' => false, 'message' =>  'User password gagal diganti');

  //         $this->set_response($msg, REST_Controller::HTTP_OK);

  //       }

  //     } else {    // email belum terdaftar

  //       $msg = array('status' => false, 'message' =>  'Email belum terdaftar');

  //       // $this->set_response($msg, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
  //       $this->set_response($msg, REST_Controller::HTTP_OK);

  //     }

  //   }
    
  // } // forgot

}
