<?php
class Pesan extends CI_Controller{
  public function index(){
    if($this->session->userdata('email')){
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['data'] = $this->ModelUser->ownerDetails();
      $this->load->view('pusat/pesan' ,$data);
    }
  }

  public function store(){
    $data = array(
      'nama' => $this->input->post('nama'),
      'image' => $this->input->post('image')
    );

    $this->db->insert('room', $data);
  }
}



?>