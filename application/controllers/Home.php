<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('home');
	}

	public function contact() {
		$data = $this->input->post();

		if(!isset($data['name']) || trim($data['name']) === "") {
			echo lang('site_required_name');
			return;
		}

		if(!isset($data['email']) || trim($data['email']) === "") {
			echo lang('site_required_email');
			return;
		}

		if(!isset($data['subject']) || trim($data['subject']) === "") {
			echo lang('site_required_subject');
			return;
		}

		if(!isset($data['message']) || trim($data['message']) === "") {
			echo lang('site_required_message');
			return;
		}

		$name = $data['name'];
		$email = $data['email'];
		$subject = $data['subject'];
		$message = $data['message'];

		$email_data = array(
			"sender" => array("email" => "contacto@donalfredo.com"),
			"htmlContent" => $message,
			"textContent" => $message,
			"subject" => $subject,
			"replyTo" => array("email" => $email),
			"to" => array(array("email" => "felipe.chacon@gmail.com", "name" => "Felipe Chacón"))
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($email_data),
		));

		$headers = array(
			'Accept: application/json',
			'Content-Type: application/json',
			'api-key: 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'
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if($err) {
		  echo "cURL Error #:" . $err;
		}
		else {
		  echo "OK";
		}
	}
}