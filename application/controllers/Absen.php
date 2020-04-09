<?php

Class Absen extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->idprivillege == ''){
            redirect(base_url());
        }
        $this->load->helper('date');
    }

    public function manager_index(){
        $data['page'] = 'absen';
        $data['extra_style'] = array(
            '<link href="'.base_url().'asset/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">',
            '<link href="'.base_url().'asset/assets/daterangepicker/daterangepicker.css" rel="stylesheet">'
        );
        $data['extra_script'] = array(
            '<script src="'.base_url().'asset/assets/daterangepicker/moment.min.js"></script>',
            '<script src="'.base_url().'asset/assets/daterangepicker/daterangepicker.js"></script>',
            '<script src="'.base_url().'asset/js/controllers/manager/daterangepicker/daterangepicker.init.js"></script>',
            '<script src="'.base_url().'asset/js/controllers/manager/absen.js"></script>',
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/side',$data);
        $this->load->view('absen/index');
        $this->load->view('template/footer',$data);
    }

    public function getUserByAbsensi(){
        $data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"date_created" => mdate('%d-%m-%Y')
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/absensi/getUsersByAbsensi.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
        // Return JSON
        if($this->input->is_ajax_request()){
            echo $resultJsonStr;
        }
        else{
            return $resultJsonStr;
        }
    }

    public function getUserByAbsensiFinish(){
        $data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"date_created" => $this->input->post('date_create')
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/absensi/getUsersByAbsensiFinish.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
        // Return JSON
        if($this->input->is_ajax_request()){
            echo $resultJsonStr;
        }
        else{
            return $resultJsonStr;
        }
    }
}