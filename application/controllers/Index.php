<?php

class Index extends CI_Controller {

    public function site() {
        $routeStr = $this->uri->rsegment_array();
        $data['title'] = ucfirst($routeStr['1']); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('index/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view() {
        echo 'view';
    }

    public function category() {
        echo 'list';
    }

}
