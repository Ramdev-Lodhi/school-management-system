<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Student extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }
     
		$email=$row['email'];
        $this->load->model('formM');
		$data['ram'] = $this->formM->profile_display($email);
		$this->load->view('header',$data);
    }

public function create()
	{
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }
		else{
		// $this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');}
	}
	public function home()
	{
		$this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		// $this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');}
	}

public function add_details()
	{$this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		// $this->load->view('header');
		$this->load->view('add_details');
		$this->load->view('footer');}
	}

	public function insert_details()
	{
		// echo"this is my form";
		// die();
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$aadhar= $_POST['aadhar'];
		$pan = $_POST['pan_no'];
		$mobile1 = $_POST['mobile1'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$category = $_POST['category'];
		$blood_group = $_POST['blood_group'];
		$religion = $_POST['religion'];
		$minority = $_POST['minority'];
		$handicap = $_POST['handicap'];
		$laddress = $_POST['laddress'];
		$paddress = $_POST['paddress'];
		$city = $_POST['city'];
		$district = $_POST['district'];
		$pincode = $_POST['pincode'];
		$state = $_POST['state'];
		$father_name= $_POST['father_name'];
		$mother_name=$_POST['mother_name'];
// print_r($_POST); die();
		$this->load->model('formM');
		$this->formM->insert_form($title, $fname, $mname, $lname, $aadhar, $pan, $mobile1, $gender, $dob, $email, $category, $blood_group, $religion, $minority, $handicap, $laddress, $paddress, $city, $district, $pincode, $state,$father_name,$mother_name);
		return redirect(base_url('Student/add_details'));
	}


	public function fatch_form()
	{
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		$this->load->model('formM');
		$data['rs'] = $this->formM->display();

		$this->load->view('table', $data);}
	}
	// ****************excel file********************
	public function download()
	{
		$fileName = 'details.xlsx';
		$this->load->model('formM');
		$employeeData = $this->formM->display();
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'S NO.');
		$sheet->setCellValue('B1', 'Name');
		$sheet->setCellValue('C1', 'Aadhar Number');
		$sheet->setCellValue('D1', 'Pan Number');
		$sheet->setCellValue('E1', 'Mobile No.');
		$sheet->setCellValue('F1', 'Gender');
		$sheet->setCellValue('G1', 'Date Of Brith');
		$sheet->setCellValue('H1', 'Email');
		$sheet->setCellValue('I1', 'Category');
		$sheet->setCellValue('J1', 'Blood Group');
		$sheet->setCellValue('K1', 'Religion');
		$sheet->setCellValue('L1', 'Minority');
		$sheet->setCellValue('M1', 'Handicap');
		$sheet->setCellValue('N1', 'Local Address');
		$sheet->setCellValue('O1', 'Permanant Address');
		$sheet->setCellValue('P1', 'City');
		$sheet->setCellValue('Q1', 'District');
		$sheet->setCellValue('R1', 'Pincode');
		$sheet->setCellValue('S1', 'State');
		$sheet->setCellValue('T1', 'Father Name');
		$sheet->setCellValue('U1', 'Mother Name');
		$rows = 2;
		foreach ($employeeData as $val) {
			$sheet->setCellValue('A' . $rows, $val->id);
			$sheet->setCellValue('B' . $rows, $val->title,$val->fname,$val->mname,$val->lname);
			$sheet->setCellValue('C' . $rows, $val->aadhar);
			$sheet->setCellValue('D' . $rows, $val->pan_no);
			$sheet->setCellValue('E' . $rows, $val->mobile1);
			$sheet->setCellValue('F' . $rows, $val->gender);
			$sheet->setCellValue('G' . $rows, $val->dob);
			$sheet->setCellValue('H' . $rows, $val->email);
			$sheet->setCellValue('I' . $rows, $val->category);
			$sheet->setCellValue('J' . $rows, $val->blood_group);
			$sheet->setCellValue('K' . $rows, $val->religion);
			$sheet->setCellValue('L' . $rows, $val->minority);
			$sheet->setCellValue('M' . $rows, $val->handicap);
			$sheet->setCellValue('N' . $rows, $val->laddress);
			$sheet->setCellValue('O' . $rows, $val->paddress);
			$sheet->setCellValue('P' . $rows, $val->city);
			$sheet->setCellValue('Q' . $rows, $val->district);
			$sheet->setCellValue('R' . $rows, $val->pincode);
			$sheet->setCellValue('S' . $rows, $val->state);
			$sheet->setCellValue('T' . $rows, $val->father_name);
			$sheet->setCellValue('U' . $rows, $val->mother_name);
			$rows++;
		}
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: appliction/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$fileName.'"');
		$writer->save('php://output');
	}





	public function deletedata($id)
	{
		$this->load->model('formM');
		$this->formM->delete_entry($id);
		//return redirect("Welcome/fatch_form/");
		header('Location:http://localhost/ci/index.php/Student/fatch_form/');
	}
	public function edit($id)
	{$this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		$this->load->model('formM');
		$data['data'] = $this->formM->getAllRecords($id);
		// print_r($data['data']); die();
		// $this->load->view('header');
		$this->load->view('update_details', $data);
		$this->load->view('footer');}
	}

	public function updatedata($id)
	{
		// echo"ramdev";
		// die();
		
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$aadhar= $_POST['aadhar'];
		$pan = $_POST['pan_no'];
		$mobile1 = $_POST['mobile1'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$category = $_POST['category'];
		$blood_group = $_POST['blood_group'];
		$religion = $_POST['religion'];
		$minority = $_POST['minority'];
		$handicap = $_POST['handicap'];
		$laddress = $_POST['laddress'];
		$paddress = $_POST['paddress'];
		$city = $_POST['city'];
		$district = $_POST['district'];
		$pincode = $_POST['pincode'];
		$state = $_POST['state'];
		$father_name= $_POST['father_name'];
		$mother_name=$_POST['mother_name'];
		$this->load->model('formM');
		$this->formM->update_data($id,$title, $fname, $mname, $lname, $aadhar, $pan, $mobile1, $gender, $dob, $email, $category, $blood_group, $religion, $minority, $handicap, $laddress, $paddress, $city, $district, $pincode, $state,$father_name,$mother_name);
		header('Location:http://localhost/ci/index.php/Student/fatch_form/');
	}
	//  public function fedit()
	// {
	//   $this->load->model('formM');
	//  $rs['data']=$this->formM->fRecords($id);
	//   $this->load->view('forgot',$rs);
	// }
	// public function forgot($id)
	// {
	// 	$fname=$_POST['fname'];
	// 	$username=$_POST['username'];
	// 	$password=$_POST['password'];
	// 	$this->load->model('formM');
	// 	$this->formM->forgot_data($id,$fname,$username,$password);
	// 	}

	public function form()
	{
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		// $this->load->view('header');
		$this->load->view('Form');
		$this->load->view('footer');}
	}
	public function contact_us()
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$this->load->model('formM');
		$this->formM->insert_contact($name,$email,$subject,$message);
		return redirect(base_url('Welcome'));
	}
	public function contact_fatch()
	{
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		// $this->load->view('header');
		$this->load->model('formM');
		$data['ram'] = $this->formM->contact_datafatch();
		$this->load->view('contact_us',$data);
		$this->load->view('footer');}
	}
	
	public function profile()
	{
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row)){
            redirect(base_url('Welcome'));
        }else{
		
		$this->load->library('session');
		$row=$this->session->userdata('user');
		$email=$row['email'];
		// print_r($email); die();
		$this->load->model('formM');
		$data['ram'] = $this->formM->profile_display($email);
		// $this->load->view('header');
		$this->load->view('profile',$data);
		$this->load->view('footer');
	

}
    }
}