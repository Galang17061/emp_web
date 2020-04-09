<?php

Class Master extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->idprivillege == ''){
            redirect(base_url());
		}
		$this->load->library('excel');
	}

    public function index(){
		$data['page'] = 'master';
		$data['extra_script'] = '<script src="'.base_url().'asset/js/import.js"></script>';
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/index',$data);
        $this->load->view('template/footer',$data);
    }

	// <------------------------------ Master User ------------------------------>
    public function master_user_view(){
		$data['master_user'] =  $this->getDataUserFromAPI();
		$data['page'] = 'master';
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_user/index');
        $this->load->view('template/footer');
	}
	
    public function master_user_add_view(){
		$data['page'] = 'master';
		$data['master_shift'] = $this->getShift();
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_user/add',$data);
        $this->load->view('template/footer');
	}

	public function master_user_add_data(){
		$emailuser = $this->input->post('email');
		$nameuser = $this->input->post('username');
		$idposition = 1;
		$idprivillege = $this->input->post('privillege');
		$id_shift = $this->input->post('shift');
		$this->postUser($emailuser,$nameuser,$idposition,$idprivillege,$id_shift);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/master_user_view');
	}
	
    public function master_user_edit_view($id){
		$data['page'] = 'master';
		$data['master_user_by_id'] = $this->getUserId($id);
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_user/edit');
        $this->load->view('template/footer');
	}
	
	public function master_user_edit_data(){
		echo $emailuser = $this->input->post('email');
		echo $nameuser = $this->input->post('nameuser');
		echo $idprivillege = $this->input->post('privillege');
		echo $id_shift = $this->input->post('shift');
		echo $iduser = $this->input->post('iduser');
		$this->updateUsersId($emailuser,$nameuser,$iduser,$idprivillege,$id_shift);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/master_user_view');
	}

	public function master_user_delete_data($id){
		$this->deleteUser($id);
	}

	public function getDataUserFromAPI(){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/getUsersAll.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function postUser($emailuser,$nameuser,$idposition,$idprivillege,$id_shift){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"emailuser" => $emailuser,
			"nameuser" => $nameuser,
			"idposition" => $idposition,
			"idprivillege" => $idprivillege,
			"id_shift" => $id_shift,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/postUser.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function deleteUser($iduser){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"iduser" => $iduser
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/deleteUser.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function updateUsersId($emailuser,$nameuser,$iduser,$idprivillege,$id_shift){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"emailuser" => $emailuser,
			"nameuser" => $nameuser,
			"iduser" => $iduser,
			"idprivillege" => $idprivillege,
			"id_shift" => $id_shift,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/updateUsersId.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function getUserId($iduser){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"iduser" => $iduser
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/getUserId.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function getUser($emailuser){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"emailuser" => $emailuser,
			"passworduser"=>12345
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/user/getUser.php";

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

	// <------------------------------ End Master User ------------------------------>

	// <------------------------------ Master Tag ------------------------------>


    public function master_tag_view(){
		$data['master_tag'] =  $this->getMasterPos();
		$data['extra_style'] = '<link href = "'.base_url().'asset/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">';
		$data['extra_script'] = '<script src="'.base_url().'asset/assets/libs/toastr/build/toastr.min.js"></script>';
		$data['page'] = 'master';
        $this->load->view('template/header',$data);
        $this->load->view('template/side',$data);
        $this->load->view('master/master_tag/index',$data);
        $this->load->view('template/footer',$data);
	}
	
	public function master_tag_add_view(){
		$data['page'] = 'master';
		$data['master_shift'] = $this->getShift();
		$data['extra_script'] = base_url('asset/js/controllers/master/master_tag.js');
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_tag/add',$data);
		$this->load->view('template/footer');
	}

	public function master_tag_add_data(){
		$namapos = $this->input->post('namapos');
		$barcodepos = $this->input->post('barcodepos');
		$id_shift = $this->input->post('shift');
		$this->postMasterPos($namapos,$barcodepos,$id_shift);
		// Load QR Library
		$this->load->library('QRCode/Ciqrcode');
		$config['errorlog'] = './asset/QR_Code';
		$config['chacedir'] = './asset/QR_Code';
		$config['size'] = 1024;
		$config['black'] = array(244,255,255);
		$config['white'] = array(70,130,180);
		$config['imagedir'] = './asset/QR_Code/images'; // Images will be put in
		$this->ciqrcode->initialize($config);

		$image_name = $barcodepos.'.jpg'; // File image name
		$params['data'] = $barcodepos; // Data that will be generate using qrcode
		$params['level'] = 'H'; //High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; // save to folder specified earlier
		$this->ciqrcode->generate($params);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/master_tag_view');
	}

	public function master_tag_delete_data($id,$barcodemasterpos){
		$this->deleteMasterPos($id);
		if(file_exists('asset/QR_Code/images'.$barcodemasterpos.'.jpg')){
			unlink('asset/QR_Code/images'.$barcodemasterpos.'.jpg');
		}
	}

	public function master_tag_edit_view($id){
		$data['page'] = 'master';
		$data['idmasterpos'] = $id;
		$data['master_pos_by_id'] = $this->getMasterPosById($id);
		$data['master_shift'] = $this->getShift();
		$this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_tag/edit',$data);
        $this->load->view('template/footer');
	}

	public function master_tag_edit_data(){
		$namamasterpos = $this->input->post('namamasterpos');
		$barcodemasterpos = $this->input->post('barcodemasterpos');
		$master_shift = $this->input->post('master_shift');
		$idmasterpos = $this->input->post('idmasterpos');
		$this->editMasterPos($namamasterpos,$barcodemasterpos,$master_shift,$idmasterpos);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/master_tag_view');
	}

	public function getMasterPosBarcode(){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"barcodemasterpos" => $this->input->post('random_number'),
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/getMasterPosBarcode.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		echo json_encode(array('valid'=>true,'number'=>$this->input->post('random_number'),'result'=>$resultJsonStr));
		// echo $resultJsonStr;
	}

	public function getMasterPosById($id){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"idmasterpos" => $id,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/getMasterPosById.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}
	
	public function editMasterPos($namamasterpos,$barcodemasterpos,$master_shift,$idmasterpos){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"namamasterpos"=>$namamasterpos,
			"barcodemasterpos"=>$barcodemasterpos,
			"id_shift"=>$master_shift,
			"idmasterpos"=>$idmasterpos
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/editMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}
	
	public function postMasterPos($namapos,$barcodepos,$shift){
		$data = array(
			"namamasterpos" => $namapos,
			"barcodemasterpos" => $barcodepos,
			"id_shift"=>$shift,
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/postMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}
	
	public function deleteMasterPos($id){
		$data = array(
			"idmasterpos"=>$id,
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/deleteMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}
	
	public function getMasterPos(){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/getMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	// ------------------------------ End Master Tag ------------------------------

	// ------------------------------ Submaster Tag
	
    public function submaster_tag_view($id){
		$data['page'] = 'master';
		$data['idmaster'] = $id;
		$data['submaster_tag_by_id'] = $this->getSubMasterPosByMaster($id);
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_tag/submaster_tag/index');
        $this->load->view('template/footer');
	}

    public function submaster_tag_add_view($id){
		$data['page'] = 'master';
		$data['idmasterpos'] = $id;
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_tag/submaster_tag/add');
        $this->load->view('template/footer');
	}

    public function submaster_tag_add_data(){
		$idmasterpos = $this->input->post('idmasterpos');
		$namesubmasterpos = $this->input->post('namasubmaster');
		$this->postSubMasterPos($idmasterpos,$namesubmasterpos);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/submaster_tag_view/'.$idmasterpos);
	}

	public function submaster_tag_edit_view($idmaster,$id){
		$data['page'] = 'master';
		$data['idmaster'] = $idmaster;
		$data['submaster_pos_by_id'] = $this->getSubMasterPosById($id);
		$this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_tag/submaster_tag/edit',$data);
        $this->load->view('template/footer');
	}

	public function submaster_tag_edit_data(){
		$idsubmasterpos =$this->input->post('idsubmasterpos') ;
		$namesubmasterpos = $this->input->post('namesubmasterpos');
		$idmaster = $this->input->post('idmaster');
		$this->editSubMasterPos($idsubmasterpos,$namesubmasterpos);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/submaster_tag_view/'.$idmaster);
	}

	public function submaster_tag_delete_data($id){
		$this->deleteSubMasterPos($id);
	}

	public function getSubMasterPosByMaster($idmasterpos){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"idmasterpos"=>$idmasterpos
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/getSubMasterPosByMaster.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function getSubMasterPosById($idsubmasterpos){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"idsubmasterpos" =>$idsubmasterpos,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/getSubMasterPosById.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function editSubMasterPos($idsubmasterpos,$namesubmasterpos){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"idsubmasterpos" =>$idsubmasterpos,
			"namesubmasterpos" =>$namesubmasterpos,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/editSubMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function postSubMasterPos($idmasterpos,$namesubmasterpos){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"idmasterpos" =>$idmasterpos,
			"namesubmasterpos"=>$namesubmasterpos
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/postSubMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function deleteSubMasterPos($idsubmasterpos){
		$data = array(
			"idsubmasterpos" =>$idsubmasterpos,
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/pos/deleteSubMasterPos.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	// ------------------------------ End Submaster Tag ------------------------------

	public function master_shift_import_view(){
		$data['page'] = 'master';
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_shift/import',$data);
        $this->load->view('template/footer');
	}

	public function master_shift_import_data(){
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$namashift = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$keteranganshift = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$this->postShift($namashift,$keteranganshift);
				}
			}
			echo 'Data Imported successfully';
		}
	}

	public function master_shift_fetch(){
		$data = json_decode($this->getShift());
		$output = '
		<table class="table table-striped table-bordered">
			<tr>
				<th>Id Shift</th>
				<th>Nama Shift</th>
				<th>Keterangan Shift</th>
			</tr>
		';
		foreach($data->result as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->idshift.'</td>
				<td>'.$row->namashift.'</td>
				<td>'.$row->keteranganshift.'</td>
			</tr>
			';
		}
		$output .= '</table>';
		echo $output;
	}

    public function master_shift_view(){
		$data['page'] = 'master';
		$data['master_shift'] =  $this->getShift();
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_shift/index',$data);
        $this->load->view('template/footer');
	}

	public function master_shift_add_view(){
		$data['page'] = 'master';
		$this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_shift/add');
        $this->load->view('template/footer');
	}

	public function master_shift_add_data(){
		$nama_shift = $this->input->post('nama_shift');
		$keterangan_shift = $this->input->post('keterangan_shift');
		$this->postShift($nama_shift,$keterangan_shift);
		echo "<script type='text/javascript'>alert('Berhasil Menambahkan');</script>";
		redirect('master/master_shift_view');
	}
	
	public function master_shift_edit_view($id){
		$data['shift_by_id'] = $this->getShiftById($id);
		$data['page'] = 'master';
		$this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/master_shift/edit',$data);
        $this->load->view('template/footer');
	}

	public function master_shift_edit_data(){
		$id_shift = $this->input->post('idshift');
		$keterangan_shift = $this->input->post('keteranganshift');
		$nama_shift = $this->input->post('namashift');
		$this->updateShiftId($id_shift,$nama_shift,$keterangan_shift);
		echo "<script type='text/javascript'>alert('Berhasil Dirubah');</script>";
		redirect('master/master_shift_view');
	}

	public function master_shift_delete_data($id){
		$this->deleteShift($id);
	}

    public function updateShiftId($id_shift,$nama_shift,$keterangan_shift){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"id_shift"=>$id_shift,
			"nama_shift"=>$nama_shift,
			"keterangan_shift"=>$keterangan_shift,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/shift/updateShiftId.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

    public function getShiftById($id_shift){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"id_shift"=>$id_shift
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/shift/getShiftById.php";

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

	public function getShift(){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/shift/getShift.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		if($this->input->is_ajax_request()){
			echo $resultJsonStr;
		}
		else{
			return $resultJsonStr;
		}
	}

	public function fetchShiftData(){
		$masterShift = jsone_decode($this->getShift());
		$output = '';
		foreach($masterShift->result as $index){
			$output .= '<tr>
				<td>'.$index->namashift.'</td>
				<td>'.$index->keteranganshift.'</td>
			</tr>';
		}
		echo $output;
	}

	// BACKUP
    // public function getShift(){
	// 	$data = array(
	// 		"api" => "99d6204dcaa641571565583662f0016d",
	// 	);

	// 	// Set CURL to API Server
	// 	$url_send ="https://api-01.greenholespace.co.id/emp_api/shift/getShift.php";

	// 	$ch = curl_init($url_send);
	// 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	// 	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	// 	$resultJsonStr = curl_exec($ch);
	// 	curl_close($ch);
		
	// 	// Return JSON	
	// 	return $resultJsonStr;
	// }

    public function deleteShift($idshift){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"idshift"=>$idshift
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/shift/deleteShift.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function postShift($nama_shift,$keterangan_shift){
		$data = array(
			"api" => "99d6204dcaa641571565583662f0016d",
			"nama_shift"=>$nama_shift,
			"keterangan_shift"=>$keterangan_shift,
		);

		// Set CURL to API Server
		$url_send ="https://api-01.greenholespace.co.id/emp_api/shift/postShift.php";

		$ch = curl_init($url_send);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
		$resultJsonStr = curl_exec($ch);
		curl_close($ch);
		
		// Return JSON	
		return $resultJsonStr;
	}

	public function master_import_view(){
		$data['page'] = 'master';
        $this->load->view('template/header');
        $this->load->view('template/side',$data);
        $this->load->view('master/import',$data);
        $this->load->view('template/footer');
	}

	public function importMaster(){
		
	}

	// public function importMaster(){
	// 	// Get MaxIdMasterPos
	// 	$data_masterpos = json_decode($this->getMasterPos());
	// 	for($i = 0; $i < count($data_masterpos->result);$i++){
	// 		$id_masterpos[$i] = $data_masterpos->result[$i]->idmasterpos;
	// 	};
	// 	$max_id_masterpos = max($id_masterpos);

	// 	if(isset($_FILES["file"]["name"]))
	// 	{
	// 		$path = $_FILES["file"]["tmp_name"];
	// 		$object = PHPExcel_IOFactory::load($path);

	// 		$object->setActiveSheetIndex(1);

	// 		$index_1 = 2;
	// 		$index_2 = 1;
	// 		// Getting value of all data
	// 		while($object->getActiveSheet()->getCell('F'.$index_1)->getValue()!=""){
	// 			// Check if the relation is on to many
	// 			if($object->getActiveSheet()->getCell('A'.$index_1)->getValue() == '' && $index_1 != $object->getActiveSheet()->getHighestRow()){
	// 				$masterpos = $object->getActiveSheet()->getCell('A'.($index_1-$index_2))->getValue();
	// 				$barcode = $object->getActiveSheet()->getCell('B'.($index_1-$index_2))->getCalculatedValue();
	// 				$id_shift = $object->getActiveSheet()->getCell('C'.($index_1-$index_2))->getValue();
	// 				$namasubmasterpos = $object->getActiveSheet()->getCell('F'.$index_1)->getValue();
	// 				array_push($data[$masterpos],$barcode,$id_shift,$namasubmasterpos);
	// 				$index_1++;
	// 				$index_2++;
	// 			}
	// 			// When relation is one to one
	// 			else{
	// 				$masterpos = $object->getActiveSheet()->getCell('A'.$index_1)->getValue();
	// 				$barcode = $object->getActiveSheet()->getCell('B'.$index_1)->getCalculatedValue();
	// 				$id_shift = $object->getActiveSheet()->getCell('C'.$index_1)->getValue();
	// 				$namasubmasterpos = $object->getActiveSheet()->getCell('F'.$index_1)->getValue();
	// 				$data[$masterpos] = array($barcode,$id_shift,$namasubmasterpos);
	// 				$index_1++;
	// 			};
	// 		};

	// 		// Getting array key name (namamasterpos)
	// 		$namamasterpos = array_keys($data);
	// 		// Getting aray value name
	// 		$submasterpos = array_values($data);

	// 		for($i = 0; $i<count($data);$i++){
	// 			$this->postMasterPos($namamasterpos[$i],$submasterpos[$i][0],$submasterpos[$i][1]);
	// 		}
	// 		for($i = 0; $i<count($data);$i++){
	// 			if(sizeof(array_values($submasterpos[$i]) )>3){
	// 				for($j = 1; ($j*3-1)<sizeof(array_values($submasterpos[$i]));$j++){
	// 					$this->postSubMasterPos($max_id_masterpos,$submasterpos[$i][($j*3-1)]);
	// 				}
	// 			}
	// 			else{
	// 				$this->postSubMasterPos(($max_id_masterpos+1),$submasterpos[$i][2]);
	// 				$max_id_masterpos++;
	// 			}
	// 		}
	// 		echo 'Data Imported successfully';
	// 	}
	// }
}
