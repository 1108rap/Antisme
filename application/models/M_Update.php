<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Update extends CI_Model
{

    /* Status Account */
        public function ChangetoActive($post) {

            //Pada Table Account
            $data['Status'] = 'Active';

            $this->db->where('Username',$post['username']);
            $this->db->update('account',$data);

        }

        public function ChangetoPending($post) {

            //Pada Table Account
            $data['Status'] = 'Pending';

            $this->db->where('Username',$post['username']);
            $this->db->update('account',$data);

        }
    /* End of Status Account */

    /* Status Employee */
        public function ChangetoAvail($post) {

            //Pada Tabel Employee
            $data['Status']='Available';

            $this->db->where('Employee_ID',$post['identityemp']);
            $this->db->update('employee',$data);

        }

        public function ChangetoBusy($post) {

            //Pada Tabel Employee
            $data['Status']='Busy';

            $this->db->where('Employee_ID',$post['identityemp']);
            $this->db->update('employee',$data);


        }
    /* End of Status Employee */

    /* Status Contract */
    public function ChangeContStatus($post) {

        //Pada Tabel Contract
        $data['Status'] = $post['stat'];

        $this->db->where('Contract_ID',$post['identity']);
        $this->db->update('contract',$data);

    }
    /* End of Status Contract */

    /* Update Profile */
        //Masih bermasalah jika yang dirubah usernamenya
    public function UpdtProfile($post) {

        $username = $this->fungsi->user_login()->Username;

        if($post['level'] == 'Client') {

            /* Update Pada Tabel Account */
            $params['Username']=$post['username'];
            $params['Password']=$post['password'];

            $this->db->where('Username',$username);
            $this->db->update('account',$params);

            /* Update Pada Tabel Client*/
            $data['Name']=$post['name'];
            $data['Address']=$post['address'];
            $data['Telephone']=$post['telephone'];
            $data['Email']=$post['email'];
            $data['Photo']=$post['photo'];
            $data['Description']=$post['description'];

            $this->db->where('Client_ID',$post['identity']);
            $this->db->update('client',$data);
    
        } else if($post['level'] == 'Employee') {

            /* Update Pada Tabel Account */
            $params['Username']=$post['username'];
            $params['Password']=$post['password'];

            $this->db->where('Username',$username);
            $this->db->update('account',$params);
            
            /* Update Pada Tabel Employee*/
            $data['Name']=$post['name'];
            $data['Address']=$post['address'];
            $data['Phone']=$post['phone'];
            $data['Email']=$post['email'];
            $data['Salary']=$post['salary'];
            $data['Skills']=$post['skills'];
            $data['Status']='Available';
            $data['Photo']=$post['photo'];
            $data['Description']=$post['description'];

            $this->db->where('Employee_ID',$post['identity']);
            $this->db->update('employee',$data);

        } else if($post['level'] == 'Admin') {

            /* Update Pada Tabel Account */
            $params['Username']=$post['username'];
            $params['Password']=$post['password'];
    
            $this->db->where('Username',$username);
            $this->db->update('account',$params);
            
            /* Update Pada Tabel Admin*/
            $data['Name']=$post['name'];
            $data['Address']=$post['address'];
            $data['Phone']=$post['phone'];
            $data['Email']=$post['email'];
            $data['Photo']=$post['photo'];
            
            $this->db->where('Admin_ID',$post['identity']);
            $this->db->update('admin',$data);
            
        }

    }
    /* End of Update Profile */

    /* Payment */
        public function PaidCont($post) {

            $data['Proof_of_Transaction'] = $post['photo'];

            $this->db->where('contract_ID',$post['identity']);
            $this->db->update('contract',$data);

        }
    /* End of Payment */
    
}