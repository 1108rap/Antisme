<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public $benchmark;
	public $hooks;
	public $config;
	public $log;
	public $utf8;
	public $uri;
	public $router;
	public $output;
	public $security;
	public $input;
	public $lang;
	public $db;
	public $template;
	public $session;
	public $fungsi;

	public function index()
	{

		check_already_login();
		$this->load->view('V_Auth');
	}

	public function loginprocess()
	{

		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('M_Get');
			$query = $this->M_Get->datalogin($post);
			if ($query->num_rows() > 0) {

				$row = $query->row();
				$params['username'] = $row->Username;
				$params['level'] = $row->Level;
				$this->session->set_userdata($params);
				echo "<script>
				window.location='" . site_url('Dashboard') . "';</script>";
			} else {
				echo "<script> alert('login failure, Try login again...');
				window.location='" . site_url('Auth') . "';</script>";
			}
		}
	}

	public function logout()
	{

		$params = array('username', 'level');
		$this->session->unset_userdata($params);
		redirect('Auth');
	}
}
