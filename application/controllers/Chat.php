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

 function search_user()
 {
  sleep(2);
  if($this->input->post('search_query'))
  {
   $data = $this->chat_model->search_user_data($this->session->userdata('user_id'), $this->input->post('search_query'));
   $output = array();
   if($data->num_rows() > 0)
   {
    foreach($data->result() as $row)
    {
     $request_status = $this->chat_model->Check_request_status($this->session->userdata('user_id'), $row->user_id);
     $is_request_send = 'yes';
     if($request_status == '')
     {
      $is_request_send = 'no';
     } 
     else
     {
      if($request_status == 'pending')
      {
       $is_request_send = 'yes';
      }
     }
     if($request_status != 'Accept')
     {
      $output[] = array(
       'user_id'  => $row->user_id,
       'first_name' => $row->first_name,
       'last_name'  => $row->last_name,
       'profile_picture'=> $row->profile_picture,
       'is_request_send'=> $is_request_send
      );
     } 
    }
   }
   echo json_encode($output);
  }
 }

 function send_request()
 {
  sleep(2);
  if($this->input->post('send_userid'))
  {
   $data = array(
    'sender_id'  => $this->input->post('send_userid'),
    'receiver_id' => $this->input->post('receiver_userid')
   );
   $this->chat_model->Insert_chat_request($data);
  }
 }
}

?>