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

		echo "OK";
	}
}
