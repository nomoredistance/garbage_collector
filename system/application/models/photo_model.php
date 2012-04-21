<?php

class Photo_model extends Model {

	function Photo_model()
	{
		parent::Model();	
  }

  function get_photos($opt = array())
  {
    $this->db->select('id');
    $this->db->select('nama');
    $this->db->select('gambar');
    $this->db->select('keterangan');
    $this->db->select('tanggal');
    $this->db->select('lokasi');
    $this->db->select('status');
    $this->db->select('vote');
    $this->db->select('lat');
    $this->db->select('long');

    if(isset($opt['id']))
    {
      $this->db->where('id', $opt['id']);
      $this->db->limit(1);
    }
    $this->db->from('garbage');
    $rs = $this->db->get();

    if($rs->num_rows() === 0)
    {
      return FALSE;
    }
    else
    {
      return $rs->result();
    }
  }
}

/* End of file photo_model.php */
/* Location: ./system/application/models/photo_model.php */
