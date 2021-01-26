<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function password_reset_email($new_password = '' , $email = '')
	{
		$query = $this->db->get_where('users' , array('email' => $email));
		if($query->num_rows() > 0)
		{

			$email_msg	=	"<h1><center> Universidad Técnica del Norte Te saluda. (>.<) ! </center></h1> \n\n\n\n";
			$email_msg	.=	"<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br><br>Tu nueva contraseña es: <h2> ".$new_password." <h2><br />";

			$email_sub	=	"Solicitud de reseteo de clave .. exitoso!! :DDDD";
			$email_to	=	$email;
			//$this->do_email($email_msg , $email_sub , $email_to);
			$this->send_smtp_mail($email_msg , $email_sub , $email_to);
			return true;
		}
		else
		{
			return false;
		}
	}

	public function send_email_verification_mail($to = "", $verification_code = "") {
		$redirect_url = site_url('login/verify_email_address/'.$verification_code);
		$subject 		= "Verificar la direccion de correo";
		$email_msg	=	"<b>Hello,</b>";
		$email_msg	.=	"<p>Haga clic en el enlace a continuación para verificar su dirección de correo electrónico.</p>";
		$email_msg	.=	"<a href = ".$redirect_url." target = '_blank'>Verifique su dirección de correo electrónico</a>";
		$this->send_smtp_mail($email_msg, $subject, $to);
	}

	public function send_mail_on_course_status_changing($course_id = "", $mail_subject = "", $mail_body = "") {
		$instructor_id		 = 0;
		$course_details    = $this->crud_model->get_course_by_id($course_id)->row_array();
		if ($course_details['user_id'] != "") {
			$instructor_id = $course_details['user_id'];
		}else {
			$instructor_id = $this->session->userdata('user_id');
		}
		$instuctor_details = $this->user_model->get_all_user($instructor_id)->row_array();
		$email_from = get_settings('system_email');

		$this->send_smtp_mail($mail_body, $mail_subject, $instuctor_details['email'], $email_from);
	}

	public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
		//Load email library
		$this->load->library('email');

		if($from == NULL)
			$from		=	$this->db->get_where('settings' , array('key' => 'system_email'))->row()->value;

		//SMTP & mail configuration
		$config = array(
			'protocol'  => get_settings('protocol'),
			'smtp_host' => get_settings('smtp_host'),
			'smtp_port' => get_settings('smtp_port'),
			'smtp_user' => get_settings('smtp_user'),
			'smtp_pass' => get_settings('smtp_pass'),
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$htmlContent = $msg;

		$this->email->to($to);
		$this->email->from($from, get_settings('system_name'));
		$this->email->subject($sub);
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
	}
}
