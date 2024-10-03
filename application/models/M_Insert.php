<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Insert extends CI_Model
{

    public function CreateAccount($post) {

        if($post['level']=='Client') {

            /*Insert Pada Tabel Account*/
            $params['Username']=$post['username'];
            $params['Password']=$post['password'];
            $params['Level']=$post['level'];
            $params['Status']='Pending';

            $this->db->insert('account',$params);

            /*Insert Pada Tabel Client*/
            $data['Username']=$post['username'];
            $data['Name']=$post['name'];
            $data['Address']=$post['address'];
            $data['Telephone']=$post['telephone'];
            $data['Email']=$post['email'];
            $data['Photo']=$post['photo'];
            $data['Description']=$post['description'];

            $this->db->insert('client',$data);

        } else if($post['level']=='Employee') {

            /*Insert Pada Tabel Account*/
            $params['Username']=$post['username'];
            $params['Password']=$post['password'];
            $params['Level']=$post['level'];
            $params['Status']='Pending';

            $this->db->insert('account',$params);

            /*Insert Pada Tabel Employee*/
            $data['Username']=$post['username'];
            $data['Name']=$post['name'];
            $data['Address']=$post['address'];
            $data['Phone']=$post['telephone'];
            $data['Email']=$post['email'];
            $data['Salary']=$post['salary'];
            $data['Skills']=$post['skills'];
            $data['Status']='Available';
            $data['Photo']=$post['photo'];
            $data['Description']=$post['description'];

            $this->db->insert('employee',$data);

        } else if($post['level']=='Admin') {

            /*Insert Pada Tabel Account*/
            $params['Username']=$post['username'];
            $params['Password']=$post['password'];
            $params['Level']=$post['level'];
            $params['Status']='Active';

            $this->db->insert('account',$params);

            /*Insert Pada Tabel Admin*/
            $data['Username']=$post['username'];
            $data['Name']=$post['name'];
            $data['Address']=$post['address'];
            $data['Phone']=$post['telephone'];
            $data['Email']=$post['email'];
            $data['Photo']=$post['photo'];

            $this->db->insert('admin',$data);

        }

    }

    //tambahin upload bukti transfer
    public function CreateContract($post) {

        $data['Client_ID'] = $this->fungsi->user_login()->Client_ID;
        $data['Employee_ID'] = $post['identityemp'];
        $data['From'] = $post['datestart'];
        $data['To'] = $post['datefinish'];
        $data['Contract_DESC'] = $post['AboutContract'];
        $data['Status'] = 'Waiting for Payment';

        $this->db->insert('contract',$data);
    }

    public function InsertFinance($post) {

        $data['Contract_ID'] = $post['identity'];
        $data['Bills']= $post['bills'];
        $data['Administrative_Cost'] = $post['admcost'];
        $data['Employee_Cost'] = $post['empcost'];
        
        $this->db->insert('finance',$data);
    }
}