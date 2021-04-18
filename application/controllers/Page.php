<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index()
	{
        $this->load->view('_partials/header');
        $this->load->view('home');
        $this->load->view('_partials/footer');
    }

	public function profil()
	{
        $this->load->view('_partials/header');
        $this->load->view('profil');
        $this->load->view('_partials/footer');
    }

    public function about()
	{
        $this->load->view('_partials/header');
        $this->load->view('about');
        $this->load->view('_partials/footer');
    }
    
}