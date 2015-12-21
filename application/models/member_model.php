<?php
class Member_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function a(){
        echo 'member_model_a';
    }
}