<?php

class Photos extends Controller {

	function Photos()
	{
		parent::Controller();	
	}
	
	function index()
	{
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
}

/* End of file photos.php */
/* Location: ./system/application/controllers/photos.php */
