<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	}

    public function index()
    {
        $this->load->view('header');
        $this->load->view('topmenu');
        $this->load->view('sidemenu');
        $this->load->view('content');
        $this->load->view('footer');
    }
}