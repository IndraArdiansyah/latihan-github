<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('chat_model');
  if(!$this->session->userdata('user_id'))
  {
   redirect('google_login/login');
  }
 }

 function index()
 {
  $this->load->view('chat_view');
 }
}
?>