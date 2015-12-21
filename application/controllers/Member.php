<?php

class Member extends CI_Controller {

    public function index() {
        //$this->load->model('Member_model');
//        $data = array(
//            'username' => 'go123',
//            'email' => 'cz2051@163.com',
//            'password' => md5('gr5stdv'),
//            'nickname' => 'go123',
//            'sex' => 1,
//            'avatar' => '/uploads/avatar/1.jpg',
//            'phone' => '15618077819',
//            'status' => 1,
//            'lastlogin' => time(),
//            'updatetime' => time(),
//            'dateline' => time()
//        );
//        $result = $this->db->insert('member', $data);
//        var_dump($result);exit;
        $query = $this->db->get('member', 2);
        $this->Member_model->a();
        foreach ($query->result() as $row) {
            var_dump($row);
        }
    }

}
