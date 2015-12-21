<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Site() {
        //$this->session->set_tempdata('uid', '112', 10);
        $this->load->helper(array('url'));
        if ($this->session->has_userdata('uid')) {
            echo 'ok';
        } else {
            redirect('/admin/index/login');
        }
    }

    public function Login() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login');
        } else {
            $query = $this->db->get_where('mxphp_member', array('username' => $_POST['username'], 'status' => 1));
            var_dump($query);
            exit;
            foreach ($query->result() as $row) {
                echo $row->title;
            }
            $this->session->set_tempdata('uid', '112', 3600);
            redirect('/admin/index/site');
            $this->load->view('formsuccess');
        }
    }

}
