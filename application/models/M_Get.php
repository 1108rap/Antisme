<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Get extends CI_Model
{

    /* for All Levels */

    /* Login Data */
    public function datalogin($post)
    {

        $this->db->from('account');
        $this->db->where('Username', $post['username']);
        $this->db->where('Password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function get($data)
    {

        if ($data['level'] == 'Client') {

            $this->db->select('
                                account.Password,
                                account.Level,
                                account.Status as AccStat,
                                client.*
                            ');
            $this->db->from('account');
            $this->db->join('client', 'client.Username = account.Username', 'left');
            if ($data['username'] != null) {
                $this->db->where('account.Username', $data['username']);
            }
        } else if ($data['level'] == 'Employee') {

            $this->db->select('
                                account.Password,
                                account.Level,
                                account.Status as AccStat,
                                employee.*
                            ');
            $this->db->from('account');
            $this->db->join('employee', 'employee.Username = account.Username', 'left');
            if ($data['username'] != null) {
                $this->db->where('account.Username', $data['username']);
            }
        } else if ($data['level'] == 'Admin') {

            $this->db->select('
                                account.Password,
                                account.Level,
                                account.Status as AccStat,
                                admin.*
                            ');
            $this->db->from('account');
            $this->db->join('admin', 'admin.Username = account.Username', 'left');
            if ($data['username'] != null) {
                $this->db->where('account.Username', $data['username']);
            }
        }

        $query = $this->db->get();
        return $query;
    }
    /* End of Login Data */

    /* Contract Data */

    /*  --Contract library--
                    WP = Waiting for Payment
                    AP = Already Paid
                    Pr = Progress
                    Fn = Finish
                    Ex = Expierd       
                --Contract library--
            */

    /* Count Contract */
    public function CountWP($post)
    {

        $this->db->select('count(*) as ContractWP');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->where('contract.Status', 'Waiting for Payment');
        $this->db->where('client.Username', $post['username']);

        $query = $this->db->get();
        return $query->row();
    }

    public function CountAP($post)
    {

        $this->db->select('count(*) as ContractAP');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->where('contract.Status', 'Already Paid');
        $this->db->where('client.Username', $post['username']);

        $query = $this->db->get();
        return $query->row();
    }

    public function CountPr($post)
    {

        $this->db->select('count(*) as ContractPr');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->where('contract.Status', 'Progress');
        $this->db->where('client.Username', $post['username']);

        $query = $this->db->get();
        return $query->row();
    }

    public function CountFn($post)
    {

        $this->db->select('count(*) as ContractFn');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->where('contract.Status', 'Finish');
        $this->db->where('client.Username', $post['username']);

        $query = $this->db->get();
        return $query->row();
    }

    public function CountEx($post)
    {

        $this->db->select('count(*) as ContractEx');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->where('contract.Status', 'Expierd');
        $this->db->where('client.Username', $post['username']);

        $query = $this->db->get();
        return $query->row();
    }
    /* End of Count Contract */

    /* Data */
    public function GetContract($post)
    {

        $this->db->select('*');
        $this->db->from('contract');
        $this->db->Where('contract.Contract_ID', $post['identity']);

        $query = $this->db->get();
        return $query;
    }

    public function ContractWP($post)
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,
                                    
                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->Where('contract.Status', 'Waiting for Payment');
        $this->db->Where('client.Username', $post['username']);
        $this->db->Where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }

    public function ContractAP($post)
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,

                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                    
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->Where('contract.Status', 'Already Paid');
        $this->db->Where('client.Username', $post['username']);
        $this->db->Where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }

    public function ContractPr($post)
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,

                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                    
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->Where('contract.Status', 'Progress');
        $this->db->Where('client.Username', $post['username']);
        $this->db->Where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }

    public function ContractFn($post)
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,

                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                    
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->Where('contract.Status', 'Finish');
        $this->db->Where('client.Username', $post['username']);
        $this->db->Where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }

    public function ContractEx($post)
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,

                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                    
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->Where('contract.Status', 'Expierd');
        $this->db->Where('client.Username', $post['username']);
        $this->db->Where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }
    /* End of Data */

    /* All Data Contract */
    public function AllContract()
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,
                                    
                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = Employee.Username', 'left');
        $this->db->where('contract.Status !=', 'Finish');
        $this->db->where('contract.Status !=', 'Expierd');

        $query = $this->db->get();
        return $query;
    }

    public function AllContractHistory()
    {

        $this->db->select('
                                    contract.*,

                                    client.Username AS CompanyUsername,
                                    client.Name AS CompanyName,
                                    client.Address AS CompanyAddress,
                                    client.Telephone,
                                    client.Email AS CompanyEmail,
                                    client.Photo AS CompanyPhoto,
                                    client.Description AS CompanyDescription,

                                    employee.Username AS EmployeeUsername,
                                    employee.Name AS EmployeeName,
                                    employee.Address AS EmployeeAddress,
                                    employee.Phone,
                                    employee.Email AS EmployeeEmail,
                                    employee.Salary,
                                    employee.Skills,
                                    employee.Status AS EmployeeStatus,
                                    employee.Photo AS EmployeePhoto,
                                    employee.Description AS EmployeeDescription,
                                    
                                    account.Level,
                                    account.Status AS AccStat,

                                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                                    + MID(0123444401233334012222340111123400012345001234550, 
                                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = Employee.Username', 'left');
        $this->db->where('contract.Status', 'Finish');
        $this->db->or_where('contract.Status', 'Expierd');

        $query = $this->db->get();
        return $query;
    }
    /* End of All Data Contract */

    /* End of Contract Data */

    /* Details */
    public function DetailsAccount($post)
    {

        if ($post['level'] == 'Employee') {

            $this->db->select('
                            employee.*,
                            account.Level,
                            account.Status as AccountStat,
                                ');
            $this->db->from('employee');
            $this->db->join('account', 'account.Username = employee.Username', 'left');
            $this->db->where('employee.Employee_ID', $post['identity']);

            $query = $this->db->get();
            return $query;
        } else if ($post['level'] == 'Client') {

            $this->db->select('
                            client.*,
                            account.Level,
                            account.Status,
                                ');
            $this->db->from('client');
            $this->db->join('account', 'account.Username = client.Username', 'left');
            $this->db->where('client.Client_ID', $post['identity']);

            $query = $this->db->get();
            return $query;
        } else if ($post['level'] == 'Admin') {

            $this->db->select('
                            admin.*,
                            account.Level,
                            account.Status,
                                ');
            $this->db->from('admin');
            $this->db->join('account', 'account.Username = admin.Username', 'left');
            $this->db->where('admin.Admin_ID', $post['identity']);

            $query = $this->db->get();
            return $query;
        }
    }

    public function DetailsContract($post)
    {

        $this->db->select('
                            contract.*,

                            client.Username AS CompanyUsername,
                            client.Name AS CompanyName,
                            client.Address AS CompanyAddress,
                            client.Telephone,
                            client.Email AS CompanyEmail,
                            client.Photo AS CompanyPhoto,
                            client.Description AS CompanyDescription,

                            employee.Username AS EmployeeUsername,
                            employee.Name AS EmployeeName,
                            employee.Address AS EmployeeAddress,
                            employee.Phone,
                            employee.Email AS EmployeeEmail,
                            employee.Salary,
                            employee.Skills,
                            employee.Status AS EmployeeStatus,
                            employee.Photo AS EmployeePhoto,
                            employee.Description AS EmployeeDescription,
                            
                            account.Level,
                            account.Status AS AccStat,

                            5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                            + MID(0123444401233334012222340111123400012345001234550, 
                            7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                        ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = Employee.Username', 'left');
        $this->db->where('contract.Contract_ID', $post['identity']);

        $query = $this->db->get();
        return $query;
    }
    /* End of Details */

    /* End of for All Levels */

    /* for Client */

    /* Market Data */
    public function Market()
    {

        $this->db->select('employee.*,account.Level');
        $this->db->from('employee');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->where('account.Status', 'Active');
        $this->db->where('employee.Status', 'Available');

        $query = $this->db->get();
        return $query;
    }
    /* End of Market Data */

    /* Financial */
    public function SummaryBill($username)
    {
        # code...
    }
    public function SummaryOutcome($username)
    {
        # code...
    }
    public function FinancialReportClient($username)
    {

        $this->db->select('
                    contract.*,

                    client.Username AS CompanyUsername,
                    client.Name AS CompanyName,
                    client.Address AS CompanyAddress,
                    client.Telephone,
                    client.Email AS CompanyEmail,
                    client.Photo AS CompanyPhoto,
                    client.Description AS CompanyDescription,

                    employee.Username AS EmployeeUsername,
                    employee.Name AS EmployeeName,
                    employee.Address AS EmployeeAddress,
                    employee.Phone,
                    employee.Email AS EmployeeEmail,
                    employee.Salary,
                    employee.Skills,
                    employee.Status AS EmployeeStatus,
                    employee.Photo AS EmployeePhoto,
                    employee.Description AS EmployeeDescription,
                    
                    account.Level,
                    account.Status AS AccStat,

                    finance.Bills,
                    finance.Administrative_Cost,
                    finance.Employee_Cost,

                    5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                    + MID(0123444401233334012222340111123400012345001234550, 
                    7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->join('finance', 'finance.Contract_ID = contract.Contract_ID', 'left');
        $this->db->where('client.Username', $username);

        $query = $this->db->get();
        return $query;
    }
    /* End of Financial */
    /* End of for Client */

    /* for Employee */

    /* Contract Employee */
    public function ContractEmployee($post)
    {

        $this->db->select('
                            contract.*,

                            client.Username AS CompanyUsername,
                            client.Name AS CompanyName,
                            client.Address AS CompanyAddress,
                            client.Telephone,
                            client.Email AS CompanyEmail,
                            client.Photo AS CompanyPhoto,
                            client.Description AS CompanyDescription,

                            employee.Username AS EmployeeUsername,
                            employee.Name AS EmployeeName,
                            employee.Address AS EmployeeAddress,
                            employee.Phone,
                            employee.Email AS EmployeeEmail,
                            employee.Salary,
                            employee.Skills,
                            employee.Status AS EmployeeStatus,
                            employee.Photo AS EmployeePhoto,
                            employee.Description AS EmployeeDescription,
                            
                            account.Level,
                            account.Status AS AccStat,

                            5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                            + MID(0123444401233334012222340111123400012345001234550, 
                            7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                        ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->where('employee.Username', $post['username']);
        $this->db->where('contract.Status', 'Progress');

        $query = $this->db->get();
        return $query;
    }
    /* End of Contract Employee */

    /* Total Income */
    public function TotalIncome($post)
    {

        $this->db->select('SUM(finance.Employee_Cost) As TotalIncome');
        $this->db->from('contract');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'right');
        $this->db->join('finance', 'finance.Contract_ID = contract.Contract_ID', 'left');
        $this->db->where('employee.Username', $post['username']);
        $this->db->where('contract.Status', 'Progress');
        $this->db->or_where('contract.Status', 'Finish');
        $this->db->or_where('contract.Status', 'Expierd');

        $query = $this->db->get();
        return $query->row();
    }
    /* End of Total Income */

    /* Total Income */
    public function FinancialReportEmployee($post)
    {

        $this->db->select('SUM(finance.Employee_Cost) As TotalIncome');
        $this->db->from('contract');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'right');
        $this->db->join('finance', 'finance.Contract_ID = contract.Contract_ID', 'left');
        $this->db->where('employee.Username', $post);
        $this->db->where('contract.Status', 'Already Paid');
        $this->db->or_where('contract.Status', 'Progress');
        $this->db->or_where('contract.Status', 'Finish');
        $this->db->or_where('contract.Status', 'Expierd');

        $query = $this->db->get();
        return $query->row();
    }
    /* End of Total Income */

    /* End of for Employee */

    /* for Admin */

    /* Financial */
    public function SummaryRevenue()
    {

        $this->db->select('Sum(Bills) As Revenue');
        $this->db->from('finance');

        $query = $this->db->get();
        return $query->row();
    }

    public function SummaryCostEmployee()
    {

        $this->db->select('
                    Sum(Employee_Cost) As CostEmployee
                ');
        $this->db->from('finance');

        $query = $this->db->get();
        return $query->row();
    }

    public function SummaryAdministrative()
    {

        $this->db->select('Sum(Administrative_Cost) As Administrative');
        $this->db->from('finance');

        $query = $this->db->get();
        return $query->row();
    }

    public function FinancialReport()
    {

        $this->db->select('*');
        $this->db->from('finance');

        $query = $this->db->get();
        return $query;
    }
    /* End of Financial */

    /* Value Notification */
    public function CounContNeedPayment()
    {

        $this->db->select('Count(*) as CountPayment');
        $this->db->from('contract');
        $this->db->where('Status', 'Waiting for Payment');

        $query = $this->db->get();
        return $query->row();
    }

    public function CounContNeedApproval()
    {

        $this->db->select('Count(*) as CountApproval');
        $this->db->from('contract');
        $this->db->where('Status', 'Already Paid');

        $query = $this->db->get();
        return $query->row();
    }

    public function CounContOnProgress()
    {

        $this->db->select('Count(*) as CountProgress');
        $this->db->from('contract');
        $this->db->where('Status', 'Progress');

        $query = $this->db->get();
        return $query->row();
    }

    public function CountNeedPay($post)
    {

        $this->db->select('count(*) as CountNeedpayment');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->where('contract.Status', 'Waiting for Payment');
        $this->db->where('client.Username', $post['username']);

        $query = $this->db->get();
        return $query->row();
    }
    /* End of Value Notification */

    /* Request */
    public function RequestAccount($level)
    {

        if ($level == 'Client') {

            $this->db->select('
                                account.*,
                                client.Client_ID,
                                client.Name,
                                client.Address,
                                client.Telephone,
                                client.Email,
                                client.Photo,
                                client.Description,
                            ');
            $this->db->from('account');
            $this->db->join('client', 'client.Username = account.Username', 'right');
            $this->db->where('account.Status', 'Pending');
        } else if ($level == 'Employee') {

            $this->db->select('
                                account.*,
                                employee.Employee_ID,
                                employee.Name,
                                employee.Address,
                                employee.Phone,
                                employee.Email,
                                employee.Salary,
                                employee.Skills,
                                employee.Photo,
                                employee.Description,
                            ');
            $this->db->from('account');
            $this->db->join('employee', 'employee.Username = account.Username', 'right');
            $this->db->where('account.Status', 'Pending');
        }

        $query = $this->db->get();
        return $query;
    }

    public function RequestContract()
    {

        $this->db->select('
                            contract.*,

                            client.Username AS CompanyUsername,
                            client.Name AS CompanyName,
                            client.Address AS CompanyAddress,
                            client.Telephone,
                            client.Email AS CompanyEmail,
                            client.Photo AS CompanyPhoto,
                            client.Description AS CompanyDescription,

                            employee.Username AS EmployeeUsername,
                            employee.Name AS EmployeeName,
                            employee.Address AS EmployeeAddress,
                            employee.Phone,
                            employee.Email AS EmployeeEmail,
                            employee.Salary,
                            employee.Skills,
                            employee.Status AS EmployeeStatus,
                            employee.Photo AS EmployeePhoto,
                            employee.Description AS EmployeeDescription,

                            account.Level,
                            account.Status AS AccStat,

                            5 * (DATEDIFF(contract.To, contract.From) DIV 7) 
                            + MID(0123444401233334012222340111123400012345001234550, 
                            7 * WEEKDAY(contract.From) + WEEKDAY(contract.To) + 1, 1) AS Worksdays
                        ');
        $this->db->from('contract');
        $this->db->join('client', 'client.Client_ID = contract.Client_ID', 'left');
        $this->db->join('employee', 'employee.Employee_ID = contract.Employee_ID', 'left');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->where('contract.Status', 'Waiting for payment');
        $this->db->or_where('contract.Status', 'Already Paid');

        $query = $this->db->get();
        return $query;
    }
    /* End of Request */

    /* Count */
    public function TotalAvailable()
    {

        $this->db->select('COUNT(*) AS EmployeeAvailable');
        $this->db->from('employee');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->where('account.Status', 'Active');
        $this->db->where('employee.Status', 'Available');

        $query = $this->db->get();
        return $query->row();
    }

    public function TotalBusy()
    {

        $this->db->select('COUNT(*) AS EmployeeBusy');
        $this->db->from('employee');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->where('account.Status', 'Active');
        $this->db->where('employee.Status', 'Busy');

        $query = $this->db->get();
        return $query->row();
    }

    public function TotalClient()
    {

        $this->db->select('COUNT(*) AS TotalClient');
        $this->db->from('Client');
        $this->db->join('account', 'account.Username = client.Username', 'left');
        $this->db->where('account.Status', 'Active');

        $query = $this->db->get();
        return $query->row();
    }
    /* End of Count */

    /* Data Account */
    public function AccountClient()
    {

        $this->db->select('client.*,account.Status,account.Level');
        $this->db->from('client');
        $this->db->join('account', 'account.Username = client.Username', 'left');
        $this->db->where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }

    public function AccountEmployee()
    {

        $this->db->select('employee.*,account.Status As AccountStat,account.Level');
        $this->db->from('employee');
        $this->db->join('account', 'account.Username = employee.Username', 'left');
        $this->db->where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }

    public function AccountAdmin()
    {

        $this->db->select('admin.*,account.Status,account.Level');
        $this->db->from('admin');
        $this->db->join('account', 'account.Username = admin.Username', 'left');
        $this->db->where('account.Status', 'Active');

        $query = $this->db->get();
        return $query;
    }
    /* End of Data Account */

    /* End of for Admin */
}
