<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    function send_email($templateName, $mailData)
    {
        $ci = &get_instance();
        $content  = $ci->load->view('email_templates/' . $templateName, $mailData, TRUE);
        $from = 'ansarisahil00@gmail.com';
        $fromText = 'Sahil Anasari';
        $user_cc = '';
        if (isset($mailData['attachment'])) {
            $attachment = $mailData['attachment'];
        } else {
            $attachment = '';
        }
        if (isset($mailData['attachmentName'])) {
            $attachmentName = $mailData['attachmentName'];
        } else {
            $attachmentName = '';
        }
    
        $mailsend = $ci->libs->sendmail($from, $fromText, $mailData['mailTo'], $user_cc, $mailData['mailSubject'], $content, $attachment, $attachmentName);
        return $mailsend;
    }


