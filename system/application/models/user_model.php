<?php

class User_model extends Model {

	function User_model()
	{
		parent::Model();	
  }

  function is_logged_in()
  {
    if($this->session->userdata('uid'))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  function check_login($email, $pwd)
  {
    $this->db->select('id');
    $this->db->select('nama');
    $this->db->select('email');
    $this->db->select('lokasi');
    $this->db->where('email', $email);
    $this->db->where('password', $pwd); // TODO: +security
    $this->db->limit(1);

    $rs = $this->db->get('user');

    if($rs->num_rows() === 1)
    {
      $row = $rs->row();

      $this->session->set_userdata('uid', $row->id);
      $this->session->set_userdata('name', $row->nama);
      $this->session->set_userdata('email', $row->email);
      $this->session->set_userdata('city', $row->lokasi);

      return TRUE;
    }
  }

  function get_uid()
  {
    return $this->session->userdata('uid');
  }

  function get_city()
  {
    return $this->session->userdata('city');
  }

  function clean_session()
  {
    $this->session->set_userdata('uid', FALSE);
    $this->session->set_userdata('name', FALSE);
    $this->session->set_userdata('email', FALSE);
    $this->session->set_userdata('city', FALSE);

    return TRUE;
  }

}

/* End of file user_model.php */
/* Location: ./system/application/models/user_model.php */
