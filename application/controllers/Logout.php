<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('template');
        $this->view_path = "About/";
        $this->script_path = $this->view_path . "script/";
        $this->style_path = $this->view_path . "style/";
    }

    public function index()
    {
    //     print_R(base_url());
    //     exit();

        $logged_in =  $this->session->userdata('candidateLogged');
		if($logged_in){
            $this->session->sess_destroy();
			redirect(base_url().'login');
		}
        else{
            redirect(base_url());       
         }
        $data = array();
        $data['title'] = "About";
        $data['script'] = $this->load->view($this->script_path . "script", '', true);
        $data['style'] = $this->load->view($this->style_path . "style", '', true);
        $data['content'] = $this->load->view($this->view_path . "about_main", $data, true);
        $this->template->default_template($data);
    }
}