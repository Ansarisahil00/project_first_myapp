<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class libs
{
	var $CI;
	function __construct()
	{
		$this->CI =& get_instance();
		if (!class_exists("phpmailer")) {
			require_once('PHPMailer/PHPMailerAutoload.php');
		}
	}
	
	function sendmail($from, $fromtxt, $to, $cc, $sub, $txt,$attachment,$file_name)
	{	
	    $where = array('settingId' => 1 );

		$mail = new PHPMailer;
		$mail->IsSMTP(); // set mailer to use SMTP
		//$mail->SMTPDebug = 3;
		$mail->SMTPAuth = true; // turn on SMTP authentication 
		$mail->SMTPSecure = "STARTSSL";  
		$mail->Host = "smtp.gmail.com"; // specify main and backup server 
		$mail->Port = 587; 
		$mail->Username = "ansarisahil00@gmail.com"; // SMTP username 
		$mail->Password = "fmxamgiclphgjxwb"; // SMTP password 
		$mail->From = $from; 
		$mail->FromName = $fromtxt; 
		$address = explode(",", $to); 
		foreach ($address as $t) {
			$mail->AddAddress($t); // Email on which you want to send mail
		}
		if ($cc != "") {
			$addresscc = explode(",", $cc); 
			foreach ($addresscc as $tcc) {
				$mail->AddCC($tcc);
			}
		}
		if($attachment!=""){
			$mail->addAttachment($attachment, $file_name);			
		}
		$mail->IsHTML(true);
		$mail->CharSet = "utf-8";
		$mail->MsgHTML($txt); 
		$mail->Subject = $sub; 
		$mail->Body = $txt;
		return $mail->Send();	
	}
	
	function randomCodenum($num) {
		$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < $num; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	
}