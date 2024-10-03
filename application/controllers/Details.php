<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

	public function __construct() {

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

	public function account() {

		$post = $this->input->post(null,TRUE);

		$data['Details'] = $this->M_Get->DetailsAccount($post)->row();
		$data['level'] = $this->input->post('level');
		$this->template->load('template','V_DetailAccount',$data);
    }
    
    public function contract()
	{
		$post = $this->input->post(null,TRUE);

		$data['Details'] = $this->M_Get->DetailsContract($post)->row();
		$this->template->load('template','V_DetailContract',$data);
	}

}
