<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelusers extends CI_Model {
	public function login($email, $password){
        
        $where = array(
            'email' => $email,
            'password' => $password
        );
        $query = $this->db->get_where('user', $where);

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
        }else{//Kalau Tidak AdA dATANYA (Pass dan User Invalid)
            $alertDanger = '
                <div class="alert alert-danger alert-dismissible fade show" style="background-color:#c9a632;color:white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>  
                    <strong>Gagal Login!</strong> Silahkan Cek Username dan Password Anda.
                </div>
            ';
            $this->session->set_flashdata('info', $alertDanger);
            redirect('Home/login');
        }

    }
    public function getallpuisi($post)
    {
        return $this->db->get($post)->result_array();
    }
}
