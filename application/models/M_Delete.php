<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Delete extends CI_Model
{

    public function DelAcc($post) {

        if($post['level']=='Client') {

            //Pada Tabel Client
            $this->db->where('Client_ID',$post['identity']);
            $this->db->delete('client');

            //Pada Tabel Account
            $this->db->where('Username',$post['username']);
            $this->db->delete('account');

        }else if($post['level']=='Employee') {

            //Pada Tabel Employee
            $this->db->where('Employee_ID',$post['identity']);
            $this->db->delete('employee');

            //Pada Tabel Account
            $this->db->where('Username',$post['username']);
            $this->db->delete('account');

    
        }else if($post['level']=='Admin') {

            //Pada Tabel Admin
            $this->db->where('Admin_ID',$post['identity']);
            $this->db->delete('admin');

            //Pada Tabel Account
            $this->db->where('Username',$post['username']);
            $this->db->delete('account');

        }

    }

    public function DelCont($post) {

        $this->db->where('Contract_ID',$post['identity']);
        $this->db->delete('contract');

    }

    public function DelFin($post) {

        $this->db->where('Contract_ID',$post['identity']);
        $this->db->delete('finance');
    }
}