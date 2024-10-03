<?php

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {

        $this->ci->load->model('M_Get');
        $data['username'] = $this->ci->session->userdata('username');
        $data['level'] = $this->ci->session->userdata('level');
        $user_data = $this->ci->M_Get->get($data)->row();
        return $user_data;
    }
}
