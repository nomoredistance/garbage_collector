<?php

class Util extends Controller {

	function Util()
	{
		parent::Controller();	
	}
	
	function index()
	{
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
