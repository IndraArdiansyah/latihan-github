<?php
class Chat_model extends CI_Model
{
 function search_user_data($user_id, $query)
 {
  $where = "user_id != '".$user_id."' AND (first_name LIKE '%".$query."%' OR last_name LIKE '%".$query."%')";

  $this->db->where($where);

  return $this->db->get('chat_user');
 }

 function Check_request_status($sender_id, $receiver_id)
 {
  $this->db->where('(sender_id = "'.$sender_id.'" OR sender_id = "'.$receiver_id.'")');
  $this->db->where('(receiver_id = "'.$receiver_id.'" OR receiver_id = "'.$sender_id.'")');
  $this->db->order_by('chat_request_id', 'DESC');
  $this->db->limit(1);
  $query = $this->db->get('chat_request');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
    return $row->chat_request_status;
   }
  }
 }

 function Insert_chat_request($data)
 {
  $this->db->insert('chat_request', $data);
 }

 function Fetch_notification_data($receiver_id)
 {
  $this->db->where('receiver_id', $receiver_id);
  $this->db->where('chat_request_status', 'Pending');
  return $this->db->get('chat_request');
 }

 function Get_user_data($user_id)
 {
  $this->db->where('user_id', $user_id);
  $data = $this->db->get('chat_user');
  $output = array();
  foreach($data->result() as $row)
  {
   $output['first_name'] = $row->first_name;
   $output['last_name'] = $row->last_name;
   $output['email_address'] = $row->email_address;
   $output['profile_picture'] = $row->profile_picture;
  }
  return $output;
 }
}
?>