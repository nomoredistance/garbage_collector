<?php

class Util extends Controller {

	function Util()
	{
		parent::Controller();	
	}
	
	function index()
	{
  }


  function where_is($lat=FALSE, $long=FALSE)
  {
    $data = array();
    $data['response'] = '';

    $data['response'] = $this->location_model->where_is($lat, $long);

    $this->load->view('blank', $data);
  }
}

/* End of file util.php */
/* Location: ./system/application/controllers/util.php */
