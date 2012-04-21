<?php

class User extends Controller {

	function User()
	{
		parent::Controller();	
	}
	
	function index()
	{
  }

  function ngo_login()
  {
		$this->load->view('htmlhead');
		$this->load->view('nav-bar');
		$this->load->view('ngo-login');
    $this->load->view('footer');
  }
}

/* End of file user.php */
/* Location: ./system/application/controllers/user.php */
