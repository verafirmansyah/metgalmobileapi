<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('json_output');
  }

  public function select_users_email_where($email){

    $this->db->select('*');
    $this->db->where('user_email', $email);
    $this->db->from('vf_users');
    // $this->db->count_all_results();

    if ($this->db->count_all_results() > 0){
    
      // return array('status' => true,'message' => 'Email sudah terdaftar.');
      // return true;
      echo 'false';

    } else {

      echo 'true';

    }


  }

  // ------------ Daftar 
  public function insert_users($data){ 
   
    if ($this->db->insert('vf_users', $data)){
      return true;
    }

  }

  public function select_all_user_where($email){
    $this->db->select('*');
    $this->db->where('user_email', $email);
    $this->db->from('vf_users');
    $query = $this->db->get();
    return $query->row();
  }

  public function select_user_auth_redirect($email){
    $this->db->select('*');
    $this->db->where('user_email', $email);
    $this->db->where('token!=', '');
    $this->db->from('vf_users');
    // $query = $this->db->get();
    return $this->db->count_all_results();
  }


  public function select_count_users_where($email){
    $this->db->select('*');
    $this->db->where('user_email', $email);
    $this->db->from('vf_users');
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function update_users($email,$data){
    $this->db->set($data);
    $this->db->where('user_email',$email);
    if ($this->db->update('vf_users')) {
      return true;
    }
  }

  public function delete_users($user_email) {
    $this->db->where('user_email', $user_email);
    if ($this->db->delete('vf_users'))
    {
      return true;
    }
  }

  public function select_all_group_where($user_id){
    $this->db->select('*');
    $this->db->where('user_id', $user_id);
    $this->db->from('vf_users_groups');
    $query = $this->db->get();
    return $query->result_array();
  }

}
