<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
  public function simpanData($data = null)
  {
    $this->db->insert('user',$data);
  }
  public function updateData($data = null, $where = null)
	{
		$this->db->update('user', $data, $where);
  }
  public function cekData($where = null)
  {
    return $this->db->get_where('user',$where);
  }
  public function getUserWhere($where = null)
  {
    return $this->db->get_where('user',$where);
  }
  public function getUser()
  {
    return $this->db->get('user');
  }

  public function cekUserAccess($where = null)
  {
    $this->db->select('*');
    $this->db->from('access_menu');
    $this->db->where($where);
    return $this->db->get();
  }
  public function getUserLimit()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->limit(10, 0);
    return $this->db->get();
  }

  public function ownerDetails(){
		if(isset($_SESSION['uniqueid'])){
			$this->db->select('*');
			// $this->db->where('unique_id',$_SESSION['uniqueid']);
			$res = $this->db->get('user')->result_array();
			return $res;
		}
	}
  // public function ownerDetails($where = null){
	// 	// if(isset($_SESSION['uniqueid']))
	// 	$this->db->select('*');
  //   $this->db->from('user');
	// 	// $this->db->where('unique_id',$_SESSION['uniqueid']);
	// 	$res = $this->db->get('user')->result_array();
	// 	return $res;
	// }
}