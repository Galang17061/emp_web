<?php

Class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->idprivillege == ''){
            redirect(base_url());
        }
    }

    public function index(){
        $data['page'] = 'dashboard';
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
}