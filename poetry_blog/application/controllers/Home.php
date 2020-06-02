<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Poetry Blog';
		$this->load->view('home/templates/header.php', $data);
		$this->load->view('home/templates/navbar.php');
		$this->load->view('home/index.php');
		$this->load->view('home/templates/footer.php');
	}
	public function about()
	{
		$data['title'] = 'Poetry Blog';
		$this->load->view('home/templates/header.php', $data);
		$this->load->view('home/templates/navbar.php');
		$this->load->view('home/about.php');
		$this->load->view('home/templates/footer.php');
	}
	public function login()
	{
		$data['title'] = 'Poetry Blog';
		$this->load->view('home/templates/header.php', $data);
		$this->load->view('home/templates/navbar.php');
		$this->load->view('home/login.php');
		$this->load->view('home/templates/footer.php');
	}
	public function ceklogin()
	{
		$input = $this->input->post(NULL, TRUE);
		$pass_encrypt = md5($input['password']);
		$this->Modelusers->login($input['email'], $pass_encrypt);
	}
	public function registration()
	{
		$data['title'] = 'Poetry Blog';
		$this->load->view('home/templates/header.php', $data);
		$this->load->view('home/templates/navbar.php');
		$this->load->view('home/registration.php');
		$this->load->view('home/templates/footer.php');
	}
	public function cekregistration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]',['is_unique' => 'This username is already in use']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',['is_unique' => 'Email has been registered']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[9]|matches[password2]',[
			'matches'=>"password don't match",
			'min_length'=>'password too short'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Poetry Blog';
			$this->load->view('home/templates/header.php', $data);
			$this->load->view('home/templates/navbar.php');
			$this->load->view('home/registration.php');
			$this->load->view('home/templates/footer.php');
		} 
		else
		{
			$input = $this->input->post(NULL, TRUE);
			$tahun = $input['year'];
			$bulan = $input['month'];
			$hari = $input['day'];
			$pass_encrypt = md5($input['password1']);
			$data =[
				'email' => htmlspecialchars($input['email']),
				'username' => htmlspecialchars($input['username']),
				'password' => htmlspecialchars($pass_encrypt),
				'name' => htmlspecialchars($input['name']),
				'birth_date' =>htmlspecialchars("$tahun-$bulan-$hari"),
				'date_create' => htmlspecialchars(date("Y-m-d"))
			];
			$this->db->insert('user',$data);
			$query = $this->db->get_where('user', $data);

	        if($query->num_rows() > 0){//Kalau Ada Datanya
	            foreach($query->result() as $dataUser){
	                $sess = array(//Variabel Untuk Membuat Session
	                    'active' => 'active',
	                    'user_id' => $dataUser->user_id,
	                    'email' => $dataUser->email,
	                    'username' => $dataUser->username,
	                    'name' => $dataUser->name,
	                    'birth_date' => $dataUser->birth_date,
	                    'date_create' => $dataUser->date_create
	                );
	            }
            $this->session->set_userdata($sess);
            redirect('Auth');
			}
		
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
