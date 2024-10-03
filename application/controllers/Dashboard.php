<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
	public $template;
	public $input;
	public $lang;
	public $db;
	public $session;
	public $fungsi;
	public $M_Insert;
	public $M_Get;
	public $M_Update;
	public $M_Delete;

	public function __construct()
	{

		parent::__construct(); //Agar terbaca oleh function lainnya

		/* Check Login */
		check_not_login();
		/* End of Check Login */

		/* Load Model */
		$this->load->model('M_Insert');
		$this->load->model('M_Get');
		$this->load->model('M_Update');
		$this->load->model('M_Delete');
		/* End of Load Model */
	}

	public function index()
	{

		if ($this->fungsi->user_login()->Level == 'Admin') {

			/* Value Notification */
			$data['employeeavail'] = $this->M_Get->TotalAvailable();
			$data['employeebusy'] = $this->M_Get->TotalBusy();
			$data['totalclient'] = $this->M_Get->TotalClient();
			/* End of Value Notification */

			/* Data Request */
			$data['ReqEmp'] = $this->M_Get->RequestAccount('Employee');
			$data['ReqCln'] = $this->M_Get->RequestAccount('Client');
			$data['ReqCon'] = $this->M_Get->RequestContract();
			/* End of Data Request */
			$this->template->load('template', 'Admin/V_Dashboard', $data);
		} else if ($this->fungsi->user_login()->Level == 'Client') {

			/* Initialize */
			$post['username'] = $this->fungsi->user_login()->Username;
			/* End of Initialize */
			/* Main Data */
			$data['ContractWP'] = $this->M_Get->ContractWP($post);
			$data['ContractPr'] = $this->M_Get->ContractPr($post);
			/* End of Main Data */
			/* Value Notification */
			$data['CountWP'] = $this->M_Get->CountWP($post);
			$data['CountAP'] = $this->M_Get->CountAP($post);
			$data['CountPr'] = $this->M_Get->CountPr($post);
			$data['CountFn'] = $this->M_Get->CountFn($post);
			$data['CountEx'] = $this->M_Get->CountEx($post);
			/* End of Value Notification */
			$this->template->load('template', 'Client/V_Dashboard', $data);
		} else if ($this->fungsi->user_login()->Level == 'Employee') {

			/* Initialize */
			$post['username'] = $this->fungsi->user_login()->Username;
			/* End of Initialize */

			/* Data */
			$data['ContractData'] = $this->M_Get->ContractEmployee($post)->row();
			$data['TotalIncome'] = $this->M_Get->TotalIncome($post);
			/* End of Data */

			$this->template->load('template', 'Employee/V_Dashboard', $data);
		}
	}

	/* Request Account */
	public function Approved()
	{

		$post = $this->input->post(null, TRUE);
		$this->M_Update->ChangetoActive($post);
		if ($this->db->affected_rows() > 0) {

			echo "<script>alert('Account Active Now ...');
			window.location='" . site_url('Dashboard') . "';</script>";
		} else {

			echo "<script>alert('failed Account Actived ...');
			window.location='" . site_url('Dashboard') . "';</script>";
		}
	}
	/* End of Request Account */

	/* Contract Status */
	public function ChangeContStat()
	{

		$post = $this->input->post(null, TRUE);
		$this->M_Update->ChangeContStatus($post);
		if ($this->db->affected_rows() > 0) {

			echo "<script>alert('Contract Start Now ...');
			window.location='" . site_url('Dashboard') . "';</script>";
		} else {

			echo "<script>alert('Contract fail Start ...');
			window.location='" . site_url('Dashboard') . "';</script>";
		}
	}
	/* End of Contract Status */
}
