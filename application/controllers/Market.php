<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Market extends CI_Controller {

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

	public function index() {

        $data['Market'] = $this->M_Get->Market();
		$this->template->load('template','Client/V_Market',$data);

	}

}
