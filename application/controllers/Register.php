<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('template');
        $this->view_path = "register/";
        $this->script_path = $this->view_path . "script/";
        $this->style_path = $this->view_path . "style/";
    }

    public function index()
    {
        $logged_in =  $this->session->userdata('candidateLogged');
		if($logged_in){
			redirect(base_url().'login');
		}
        $data = array();
        $data['title'] = "User Register";
        $data['script'] = $this->load->view($this->script_path . "script", '', true);
        $data['style'] = $this->load->view($this->style_path . "style", '', true);
        $data['content'] = $this->load->view($this->view_path . "main_view", $data, true);
        $this->template->default_template($data);
    }


    function user_register(){
        // print_R($this->db->last_query());
        // exit();
        $data = $this->input->post();
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];
        $phone = $data['phone'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $temp_address = $data['temp_address'];
        $perma_address = $data['perma_address'];
        $insertData = $this->db->insert('user', array('username'=>$username, 'password'=>$password, 'email'=>$email, 'phone'=>$phone, 'first_name'=>$first_name, 'last_name'=>$last_name, 'temp_address'=>$temp_address,'perma_address'=>$perma_address));
        if($insertData){
            $sendmail = send_email('register_template', array('to_name'=>$first_name, 'mailTo'=>$email, 'mailSubject'=>'Welcome to Tale SEO Agency'));

            $response = array('status'=>'success', 'message'=>'Inserted Successfully');
            // $userdata = array(
            //     'candidateId' => $userData->id,
            //     'candidateName' => $userData->username,
            //     'candidateLogged' => 1
            // );
            // $this->session->set_userdata($userdata);
        }else{
            $this->session->set_flashdata('flash_error',validation_errors());
            $response = array('status'=>'fail', 'message'=>'Could NOt Insert');
        }
        redirect(base_url().'home/register');
        echo json_encode($response);
        return;
        
    }




}


