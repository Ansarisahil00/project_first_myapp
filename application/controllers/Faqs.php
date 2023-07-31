<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faqs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('template');
        $this->view_path = "Faqs/";
        $this->script_path = $this->view_path . "script/";
        $this->style_path = $this->view_path . "style/";
    }

    public function index()
    {
        $data = array();
        $data['title'] = "FAQS";
        $data['script'] = $this->load->view($this->script_path . "script", '', true);
        $data['style'] = $this->load->view($this->style_path . "style", '', true);
        $data['content'] = $this->load->view($this->view_path . "faqs", $data, true);
        $this->template->default_template($data);
    }




}