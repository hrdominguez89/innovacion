<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct()
	{
        parent::__construct();
    }
    

	public function index()
	{   
        if(!$this->session->flashdata()){
            redirect(base_url(),'refresh');
        }
        $data['sections_view'] = "home_view";
        $this->load->view('layout_front_view',$data);
    }
}