<?php

class Location_model extends Model {

	function Location_model()
	{
		parent::Model();	
	}

  function where_is($lat=FALSE, $long=FALSE, $get_city=FALSE)
  {
    if($lat === FALSE || $long === FALSE)
    { return FALSE; }

    $appID = '12345';
    $endPoint = 'http://where.yahooapis.com/geocode?q=' . $lat . ',' . $long . '&gflags=R&appid=' . $appID;

    $xml = file_get_contents($endPoint);

    if($get_city && $xml)
    {
      $decoded = new SimpleXMLElement($xml);
      if($decoded) 
      {
        $xml = $decoded->Result->state . '';
      }
    }

    return $xml;
  }
}

/* End of file location_model.php */
/* Location: ./system/application/models/location_model.php */
