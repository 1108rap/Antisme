<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {

		parent::__construct(); //Agar terbaca oleh function lainnya

		/* Load Model */
		$this->load->model('M_Insert');
		$this->load->model('M_Get');
		$this->load->model('M_Update');
		$this->load->model('M_Delete');
		/* End of Load Model */
		
		/* Initialize */
		/* End of Initialize */
	}
	
	public function index() {
		
		/* Check Login */
			check_not_login();
		/* End of Check Login */

		/* Get Data */
		$data['DataClient'] = $this->M_Get->AccountClient();
		$data['DataEmployee'] = $this->M_Get->AccountEmployee();
		$data['DataAdmin'] = $this->M_Get->AccountAdmin();
		/* End of Get Data */
		
		$this->template->load('template','Admin/V_Account',$data);

	}
	
	public function Registration() {
		
		/* Initialize */
			$post = $this->input->post(null,TRUE);
		/* End of Initialize */
		
		/* Config Upload File */
			$config['upload_path'] 		= './assets/photo/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']     	= 2048;
			$config['file_name']     	= 'Photo-'.date('dmy').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);
		/* End of Config Upload File */
		
		/* Form Validation */
			
		/* End of Form Validation */

		/* Main Registration Process */
			if(@$_FILES['photo']['name'] != null) {
				
				if($this->upload->do_upload('photo')) {
					$post['photo'] = $this->upload->data('file_name');
					$this->M_Insert->CreateAccount($post);
				} else {
					//Tambahkan kalo gagal upload file gimana
				}
			} else {
				$post['photo'] = null;
				$this->M_Insert->CreateAccount($post);
			}
		/* End ofMain Registration Process */

		/* Notification */
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Created Account Success, login now and try feature')
				window.history.back();</script>";
			} else {
				echo "<script>alert('Created Account Failure, try again and login back')
				window.history.back();</script>";
						
			}
		/* End of Notification */
		
	}

	public function Update() {

		/* Check Login */
			check_not_login();
		/* End of Check Login */
		
		/* Initialize */
			$post = $this->input->post(null,TRUE);
		/* End of Initialize */

		/* Form Validation */
			
		/* End of Form Validation */

		/* Config Upload File */
			$config['upload_path'] 		= './assets/photo/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']     	= 2048;
			$config['file_name']     	= 'Photo-'.date('dmy').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);
		/* End ofConfig Upload File */

		/* Main Edit Process */
			if(@$_FILES['photo']['name'] != null) {
		
				if($this->upload->do_upload('photo')) {
					/* Replace Photo At Folder */
						$data = $this->M_Get->get($post)->row();
						if( $data->Photo != null) {
							$target_file = './assets/photo/'.$data->Photo;
							unlink($target_file);
						}
					/* End of Replace Photo At Folder */

					/* Edit Process */
						$post['photo'] = $this->upload->data('file_name');
						$this->M_Update->UpdtProfile($post);
					/* End of Edit Process */

				} else {
					
					//Tambahkan kalo gagal upload file gimana
					
				}

			} else {
				/* Edit Process */
					$post['photo'] = null;
					$this->M_Update->UpdtProfile($post);
				/* End of Edit Process */
			}
		/* End of Main Edit Process */

		/* Notification */
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Created Account Success, login now and try feature')
				window.location='".site_url('Profile')."';</script>";
			} else {
				echo "<script>alert('Created Account Failure, try again and login back')
				window.location='".site_url('Profile')."';</script>";			
			}
		/* End of Notification */

	}

	public function AccountDelt() {

		/* Initialize */
			$post = $this->input->post(null,TRUE);
		/* End of Initialize */

		/* Delete Photo File At Folder */
			$data = $this->M_Get->get($post)->row();
			if( $data->Photo != null) {
				$target_file = './assets/photo/'.$data->Photo;
				unlink($target_file);
			}
		/* End of Delete Photo File At Folder */

		/* Main Delete Process */
			$this->M_Delete->DelAcc($post);
		/* End of Main Delete Process */

		/* Send E-mail */
			/*
			$this->load->library('email');

			$this->email->from('antismeco@gmail.com','Antisme Outsourcing Company');
			$this->email->to('$post['email']');
			$this->email->bcc('1108rap@gmail.com');

			$this->email->subject('Deleted Account');
			$this->email->message('Your account Has been deleted');

			$this->email->send();
			*/
		/* End of Send E-mail */

		echo "<script>window.history.back();</script>";

	}

}
