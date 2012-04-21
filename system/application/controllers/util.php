<?php

class Util extends Controller {

	function Util()
	{
		parent::Controller();	
	}
	
	function index()
	{
  }

  function img($id=FALSE)
  {
    if(!$id) return;

    $this->load->model('photo_model');
    $photo = $this->photo_model->get_photos(array(
      'id' => $id
    ));

    // var_dump($photo);exit();

    if($photo)
    {
      header('Content-Length: '.strlen($photo[0]->gambar));
      header("Content-type: image/jpeg");
      echo $photo[0]->gambar;
    }
  }

  function where_is($lat=FALSE, $long=FALSE, $get_city=FALSE)
  {
    $data = array();
    $data['response'] = '';

    $res = $this->location_model->where_is($lat, $long, $get_city);

    $data['response'] = $res;

    $this->load->view('blank', $data);
  }
}

/* End of file util.php */
/* Location: ./system/application/controllers/util.php */
