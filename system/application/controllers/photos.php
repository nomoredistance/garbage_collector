<?php

class Photos extends Controller {

	function Photos()
	{
		parent::Controller();	
	}
	
	function index()
  {
    $city = $this->input->post('my-city');
    $this->session->set_userdata('city', $city);

		$this->load->view('htmlhead');
		$this->load->view('nav-bar');
		$this->load->view('photos');
		$this->load->view('footer');
  }

  function view($pid=FALSE)
  {
		$this->load->view('htmlhead');
		$this->load->view('nav-bar');
		$this->load->view('photos-detail');
    $this->load->view('footer');
  }

  function upload($edit=FALSE)
  {
    $record = array(
      'nama'          => $this->input->post('nama'),
      'gambar'        => $this->input->post('gambar'),
      'keterangan'    => $this->input->post('keterangan'),
      'tanggal'       => date('Y-m-d'),
      'lokasi'        => '',
      'status'        => '0', // un-resolved
      'vote'          => '0', // vote 0
      'lat'           => $_POST['lat'], // latitude
      'long'          => $_POST['lon'] // longitude
    );

    $id = $this->input->post('id');
    if($id)
    {
      $record['id'] = $id;
    }

    $binFile = $_FILES['gambar']['tmp_name'];
    /*
    if (isset($binFile) && $binFile != "none") {
      $record['gambar'] = (fread(fopen($binFile, "r"), filesize($binFile)));
    }*/
    if (isset($binFile))
    {
      $hndl = fopen($binFile,"r");
      $isize = sizeof($binFile);

      $imgdata = "";
      while(!feof($hndl)){
        $imgdata .= fread($hndl,$isize);
      };

      $record['gambar'] = $imgdata;
    }

    $get_city = TRUE;
    $location = $this->location_model->where_is($record['lat'], $record['long'], $get_city);
    $record['lokasi'] = ($location) ? $location.'' : '';

    $ins = $this->db->insert('garbage', $record);

    echo 'Success!';
  }
}

/* End of file photos.php */
/* Location: ./system/application/controllers/photos.php */
