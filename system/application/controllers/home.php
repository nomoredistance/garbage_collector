<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('htmlhead');
		$this->load->view('nav-bar');
		$this->load->view('home');
		$this->load->view('footer');
	}
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */
