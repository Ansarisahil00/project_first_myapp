<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('template');
		$this->view_path = "login/";
		$this->script_path = $this->view_path . "script/";
		$this->style_path = $this->view_path . "style/";
	}

	public function index()
	{
		// print_R($this->session->userdata());
		// echo "<hr>";
		// print_R($this->session->userdata('candidateLogged'));
		// exit();
        $logged_in =  $this->session->userdata('candidateLogged');
		if($logged_in){
			redirect(base_url().'home');
		}
		$data = array();
		$data['title'] = "User Login";
		$data['script'] = $this->load->view($this->script_path . "script", '', true);
		$data['style'] = $this->load->view($this->style_path . "style", '', true);
		$data['content'] = $this->load->view($this->view_path . "main_view", $data, true);
		$this->template->default_template($data);
	}

	function auth(){
		$this->load->database();
		$data = $this->input->post();
		if(!empty($data['username'])){
			$checkData = $this->db->get_where('user', array('username' => $data['username']));
			if($checkData->num_rows()>0){
				$userData = $checkData->row();
				if($userData->password == $data['password']){
					$userdata = array(
						'candidateId' => $userData->id,
						'candidateName' => $userData->username,
						'candidateLogged' => 1
					);
					$this->session->set_userdata($userdata);
					$value = array('status'=>'success', 'message'=>'Successfully Logged In');
				}else{
					$value = array('status'=>'fail', 'message'=>'Invalid Credentials');
				}
			}else{
				$value = array('status'=>'fail', 'message'=>'Invalid Credentials');
			}
		}else{
			$value = array('status'=>'fail', 'message'=>'Invalid Credentials');
		}
		echo json_encode($value);
		return;
	}



}