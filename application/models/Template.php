<?php
class Template extends CI_Model
{
    private static $db;
    function __construct()
    {
        parent::__construct();
        self::$db = &get_instance()->db;
    }

    public function default_template($param)
    {
        $data = $this->view_manager->common_files();
        $finalArray = array_merge($data, $param);
        $this->load->view('template/default_view', $finalArray);
    }
}