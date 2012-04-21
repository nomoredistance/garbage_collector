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

    if($lat === FALSE || $long === FALSE)
    {}

    $appID = '12345';
    $endPoint = 'http://where.yahooapis.com/geocode?q=' . $lat . ',' . $long . '&gflags=R&appid=' . $appID;

    $xml = file_get_contents($endPoint);
    $data['response'] = $xml;

    $this->load->view('blank', $data);
  }
}

/* End of file util.php */
/* Location: ./system/application/controllers/util.php */
