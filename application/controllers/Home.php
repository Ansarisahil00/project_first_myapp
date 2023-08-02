<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('template');
        $this->view_path = "Home/";
        $this->script_path = $this->view_path . "script/";
        $this->style_path = $this->view_path . "style/";
    }

    public function index()
    {
        $data = array();
        $data['title'] = "Home";
        $data['script'] = $this->load->view($this->script_path . "script", '', true);
        $data['style'] = $this->load->view($this->style_path . "style", '', true);
        $data['content'] = $this->load->view($this->view_path . "main", $data, true);
        $this->template->default_template($data);
    }

    function user_contact(){
        $data = $this->input->post();
        $name = $data['name'];
        $surname = $data['surname'];
        $email = $data['email'];
        $subject = $data['subject'];
        $message = $data['message'];

        
        $insertData = $this->db->insert('contactus', array('name'=>$name, 'surname'=>$surname, 'email'=>$email, 'subject'=>$subject, 'message'=>$message, ));
    
        if($insertData){
    // function send_email($templateName, $mailData)

            $sendmail = send_email('subscription_template', array('to_name'=>$name, 'mailTo'=>$email, 'mailSubject'=>'Thank You For Subscribing'));

           
            $response = array('status'=>'success', 'message'=>'We Will contact you soon thanks for the feed back');
            
        }else{
            $response = array('status'=>'fail', 'message'=>'Could NOt Insert');
        }
        echo json_encode($response);
        return;
        
    }





}