<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {

    function __construct(){
        parent::__construct();
        //$this->load->helper('html');

    }
 
    public function index(){
        //$this->load->view('belajar_view');
        $this->load->view('belajar_helper');
    }
 
    // public function halo(){
    //     echo "ini method halo pada controller belajar";
    // }
 
}