<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Financial extends CI_Controller
{

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

    public function index()
    {

        if ($this->fungsi->user_login()->Level == 'Admin') {

            /* Data */
                $data['Report'] = $this->M_Get->FinancialReport();
                $data['TotalRevenue'] = $this->M_Get->SummaryRevenue();
                $data['SalaryEmp'] = $this->M_Get->SummaryCostEmployee();
                $data['AdmCost'] = $this->M_Get->SummaryAdministrative();
            /* End of Data */

            $this->template->load('template', 'Admin/V_Financial',$data);

        } else if ($this->fungsi->user_login()->Level == 'Client') {
 
            /* Data */
                $username = $this->fungsi->user_login()->Username;
                $data['Report'] = $this->M_Get->FinancialReportClient($username);
                $data['PendingBill'] = $this->M_Get->SummaryBill($username);
                $data['BePaid'] = $this->M_Get->SummaryOutcome($username);
            /* End of Data */

            $this->template->load('template', 'Client/V_Financial',$data);

        } else if ($this->fungsi->user_login()->Level == 'Employee') {

            /* Data */
            $username = $this->fungsi->user_login()->Username;
            $data['Report'] = $this->M_Get->FinancialReportEmployee($username);
            /* End of Data */

            $this->template->load('template', 'Employee/V_Financial', $data);
            
        }
    }
}
