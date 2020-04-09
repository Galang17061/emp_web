<?php

Class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
	}
	
	public function index(){
		$this->load->view('index');
	}

	public function login_proses(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$is_valid = false;

		$data_loger = json_decode($this->getDataUser($email,$password));
		// var_dump($this->getDataUser($email,$password));
		

		if($data_loger->value != 0){
			
			$info = json_decode($this->getDataUserId($data_loger->result[0]->iduser));

			// Give Session
            $data['iduser'] = $info->result[0]->iduser;
            $data['nameuser'] = $info->result[0]->nameuser;
            $data['namaprivillege'] = $data_loger->result[0]->namaprivillege;
            $data['idprivillege'] = $info->result[0]->idprivillege;
			$data['idshift'] = $info->result[0]->idshift;
			$data['emailuser'] = $info->result[0]->emailuser;
			$this->session->set_userdata($data);

			if($data['idprivillege'] == 2){
				$is_valid = true;
				$data['role'] = 'master';
			}
			else if($data['idprivillege'] == 3){
				$is_valid = true;
				$data['role'] = 'supervisor';
			}
			else if ($data['idprivillege'] == 4){
				$is_valid = true;
				$data['role'] = 'employee';
			}
			else{
				$is_valid = false;
			}

			echo json_encode(array('is_valid' => $is_valid));
		}
		else{
			$is_valid = false;
			echo json_encode(array('is_valid' => $is_valid));
		}

	}

	public function sign_out(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

    public function getDataUser($user_email,$user_password){
		$email = $user_email;
		$password = $user_password;

		$data = array(
			"emailuser" => $email,
			"passworduser" => $password,
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/getUser.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		return $resultJsonStr;
	}
	
	public function getDataUserId($iduser){
		$data = array(
			"iduser" =>$iduser,
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/getUserId.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		return $resultJsonStr;
	}
}