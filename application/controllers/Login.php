<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends CI_Controller {
    //put your code here
    
    public function __construct()
    {
       parent::__construct();
       //$this->load->model('sport/user_model','user');
       //$this->load->model('sport/calendar_model','cal');
       //$this->load->model('sport/map_model','map');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('login_view');
        $this->load->view('footer');
    }
}