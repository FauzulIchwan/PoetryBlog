<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	 public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
        if($this->session->userdata('active') != "active"){//Belum Login
            redirect('Home');
        }
         // RT
        $this->load->library('form_validation');
        // end RT
    }

	public function index()
	{
		$this->db->join('user','user.user_id = post.user_id','left');
        $this->db->join('tag','tag.post_id = post.post_id','left');
        $data['title'] = 'Poetry';
        $data['post'] = $this->Modelusers->getallpuisi('post');
        $this->load->view('content/templates/header.php',$data);
        $this->load->view('content/templates/navbar.php');
        $this->load->view('content/index.php',$data);
        $this->load->view('content/templates/footer.php');
	}
    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = 'Profile';
        $this->load->view('content/templates/header.php',$data);
        $this->load->view('content/templates/navbar.php');
        $this->load->view('content/profile.php',$data);
        $this->load->view('content/templates/footer.php');
    }
    public function newpost()
    {
        $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
        $data['title'] = 'Poetry';
        $this->load->view('content/templates/header.php',$data);
        $this->load->view('content/templates/navbar.php');
        $this->load->view('content/newpost.php',$data);
        $this->load->view('content/templates/footer.php');
    }
    public function addpost()
    {
        $this->form_validation->set_rules('tema', 'Tema', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        if($this->form_validation->run() == false)
        {
            $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
            $data['title'] = 'Poetry';
            $this->load->view('content/templates/header.php',$data);
            $this->load->view('content/templates/navbar.php');
            $this->load->view('content/newpost.php',$data);
            $this->load->view('content/templates/footer.php');
        }
        else
        {
            $input = $this->input->post(NULL, TRUE);
             $data=[
                'user_id' => htmlspecialchars($input['user_id']),
                'date_create' => htmlspecialchars(date("Y-m-d")),
                'caption' => htmlspecialchars($input['judul']),
                'post_content' => $input['isipuisi']
            ];
               
            $this->db->insert('post',$data);
            // inisialisai untuk mengambil post_id dari tabel post
            $where=[
                'caption' => htmlspecialchars($input['judul'])
            ];
            // mengambil data user yang baru saja di input
            $query = $this->db->get_where('post',$where);

            if($query->num_rows() > 0){
                foreach($query->result() as $dataUser){
                    $datatag = [
                        'post_id' => $dataUser->post_id,
                        'tagname' => htmlspecialchars($input['tema'])
                    ];
                }
            $this->db->insert('tag',$datatag);
            redirect('Auth');
            }
           
        }
    }
}
