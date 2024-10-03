<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contract extends CI_Controller
{

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

		if ($this->fungsi->user_login()->Level == 'Client') {

			/* Initialize */
			$post['username'] = $this->fungsi->user_login()->Username;
			/* End of Initialize */

			/* Data */
			$data['ContractWP'] = $this->M_Get->ContractWP($post);
			$data['ContractAP'] = $this->M_Get->ContractAP($post);
			$data['ContractPr'] = $this->M_Get->ContractPr($post);
			$data['ContractFn'] = $this->M_Get->ContractFn($post);
			$data['ContractEx'] = $this->M_Get->ContractEx($post);
			/* End of Data */

			$this->template->load('template', 'Client/V_Contract', $data);
		} else if ($this->fungsi->user_login()->Level == 'Employee') {

			$this->template->load('template', 'Employee/V_History');
		} else if ($this->fungsi->user_login()->Level == 'Admin') {

			/* Data */
			$data['datcont'] = $this->M_Get->AllContract();
			$data['histcont'] = $this->M_Get->AllContractHistory();
			/* End of Data */

			/* Value Notification */
			$data['CounContNeedPayment'] = $this->M_Get->CounContNeedPayment();
			$data['CounContNeedApproval'] = $this->M_Get->CounContNeedApproval();
			$data['CounContOnProgress'] = $this->M_Get->CounContOnProgress();
			/* End of Value Notification */

			$this->template->load('template', 'Admin/V_Contract', $data);
		}
	}

	//belom delete finance
	public function ContractDelt() {

		$post = $this->input->post(null, TRUE);

		/*Delete Photo on folder */
		$data = $this->M_Get->GetContract($post)->row();
		if( $data->Proof_of_Transaction != null) {
			$target_file = './assets/proof/'.$data->Proof_of_Transaction;
			unlink($target_file);
		}
		/*End of Delete Photo on folder */

		$this->M_Delete->DelCont($post);
		$this->M_Update->ChangetoAvail($post);
		echo "<script>window.history.back();</script>";
	}

	public function CreateContract() {

		$post = $this->input->post(null, TRUE);

		$this->M_Insert->CreateContract($post);
		$this->M_Update->ChangetoBusy($post);

		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Contract Success, hire another employee...')
			window.location='" . site_url('Dashboard') . "';</script>";
		} else {
			echo "<script>alert('Created Contract Failure, try again... ')
			window.location='" . site_url('Purchase') . "';</script>";
		}
	}

	public function PaidContract() {

		$post = $this->input->post(null, TRUE);

		/* Config Upload File */
		$config['upload_path'] 		= './assets/proof/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']     	= 2048;
		$config['file_name']     	= 'Proof-' . date('dmy') . '-' . $post['identity'] . '-' . substr(md5(rand()), 0, 10);
		$this->load->library('upload', $config);
		/* End ofConfig Upload File */


		if (@$_FILES['photo']['name'] != null) {

			if ($this->upload->do_upload('photo')) {
				$post['photo'] = $this->upload->data('file_name');
				$this->M_Update->ChangeContStatus($post);
				$this->M_Insert->InsertFinance($post);
				$this->M_Update->PaidCont($post);
			} else {
				//Tambahkan kalo gagal upload file gimana
			}
			echo "<script>alert('Uploaded Proof of Transaction Success...');
			window.location='" . site_url('Dashboard') . "';</script>";
		} else {
			echo "<script>alert('Proof of Transaction is Empty.... Upload your Proof of Transaction...');
			window.location='" . site_url('Dashboard') . "';</script>";
		}
	}
}
