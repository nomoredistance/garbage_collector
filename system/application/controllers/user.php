<?php

class User extends Controller {

	function User()
	{
		parent::Controller();	
	}
	
	function index()
	{
  }

  function pwd_check($str)
  {
    $email = $this->input->post('my-email');
    $pwd = $this->input->post('my-password');

    if($this->user_model->check_login($email, $pwd) === FALSE)
    {
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('pwd_check', 'Wrong username / password');
      return FALSE;
    }
  }

  function ngo_login()
  {
    $logged_in_redir = 'photos';
    $this->session->set_userdata('foo', "bar");

    // redirect when logged in already
    if($this->user_model->is_logged_in())
    {
      redirect($logged_in_redir);
    }

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('my-email', 'Email', 'required');
    $this->form_validation->set_rules('my-password', 'Password', 'required|callback_pwd_check');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('htmlhead');
      $this->load->view('nav-bar');
      $this->load->view('ngo-login');
      $this->load->view('footer');
    }
    else
    {
      // okay!
      redirect($logged_in_redir);
    }
  }
}

/* End of file user.php */
/* Location: ./system/application/controllers/user.php */
