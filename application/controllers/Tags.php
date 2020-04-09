<?php

Class Tags extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->idprivillege == ''){
            redirect(base_url());
        }
    }

    public function manager_index(){
        $data['page'] = 'tags';
        $data['extra_script'] = '<script src="'.base_url().'asset/js/controllers/manager/tags.js"></script>';
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('tags/index');
        $this->load->view('template/footer',$data);
    }
}