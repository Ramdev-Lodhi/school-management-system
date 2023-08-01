<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('landing/landing_page');

	}
	
	public function signin()
	{
		// print_r($_POST);
		// die();
		// $email= $_POST['email'];
		// $password=$_POST['password'];
		// $this->load->model('formM');
		// $this->formM->signin_data();
		
		

		
			$email = $_POST['email'];
			$password = $_POST['password'];
			// print_r($_POST);die();
			$this->load->model('formM');
			$r = $this->formM->signin_data($email, $password);
		
			if ($r) {
				//echo 
				$this->load->library('session');
			    $session=array(
					'id'=>$r[0]['id'],
					'username'=>$r[0]['username'],
					'email'=>$r[0]['email'],
					'password'=>$r[0]['password']
				);
				$this->session->set_userdata('user',$session);
				// print_r($row); die();
			return redirect(base_url('Student/home'));
			} else {
				$this->load->library('session');
				$this->session->set_flashdata('pass', 'Invalied username or password, Try Again.......');
				redirect(base_url("Welcome"));
				//  echo "failed login";
			}
		

}
	
	public function login_form()
	{
		$this->load->view('ramdev');
	}
	public function logout()
	{
		$this->db->close();
		$this->session->sess_destroy();
		redirect(base_url('Welcome'));
	}
	public function signup()
	{
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$this->load->model('formM');
		$e = $this->formM->signup_insert($username, $email, $password);
		if ($e) {
			//echo "match";
			$this->load->library('session');
			$this->session->set_userdata('id', $e);
			$this->session->set_flashdata('username', 'Data is store successfully,Please Login');
			redirect(base_url('Welcome'));
		}
	}
	public function fedit()
	{
	  $this->load->view('forgot/forgotemail');
	}
	public function forgot()
	{
		$email=$_POST['email'];
		$this->load->model('formM');
		$data['forgot']=$this->formM->get_forgot($email);
		$this->load->view('forgot/forgot',$data);
		}
		public function set_password($id)
		{
			// print_r($id);
			// die();
			$pass=$_POST['password'];
			// $cpass=$_POST['cpassword'];
			
			
				$this->load->model('formM');
				$this->formM->new_password($id,$pass);
				redirect(base_url('Welcome'));
			
		}
}