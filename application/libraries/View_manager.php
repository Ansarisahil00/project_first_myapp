<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_manager
{
	var $CI;
	function __construct()
	{
		$this->CI =& get_instance();
	}

	function common_files()
	{
		$data = array(
			'common_css' => $this->CI->load->view('common_files/common_css', NULL, TRUE),
			'common_js' => $this->CI->load->view('common_files/common_js', NULL, TRUE),
			'header_main' => $this->CI->load->view('common_files/header_main', NULL, TRUE),
			'header_menu' => $this->CI->load->view('common_files/header_menu', NULL, TRUE),
			'footer' => $this->CI->load->view('common_files/footer', NULL, TRUE),
		);
		return $data; 
	}

}