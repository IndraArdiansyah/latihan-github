<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // cek_login();
  }
  public function index()
  {
    $data['judul'] = 'YooTalk';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['chat'] = $this->ModelUser->getUser()->result_array();
    $this->load->view('pusat/room', $data);
  }
}