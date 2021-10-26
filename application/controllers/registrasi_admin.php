<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi_admin extends CI_Controller 
{
    public function index()
    {
        //form valid data masjid
        $this->form_validation->set_rules('nama_masjid','Nama Masjid','required|trim');
        $this->form_validation->set_rules('deskripsi_masjid','Deskripsi Masjid','required|trim');
        $this->form_validation->set_rules('alamat','Alamat','required|trim');
        $this->form_validation->set_rules('no_telp','Nomor Telepon','required|trim');
        $this->form_validation->set_rules('longitude','Longitude','required|trim');
        $this->form_validation->set_rules('latitude','Latitude','required|trim');
        //$this->form_validation->set_rules('foto','Foto','required');

        //form valid data admin masjid
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'Email has already registered!']);
        $this->form_validation->set_rules('no_telp','Nomor Telepon','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]', [
            'matches' =>  'Password dont match!',
            'min_length' => 'Password too short!'
        ]);

        if ($this->form_validation->run() == false)  
        {
            $this->load->view('auth/register_admin');
        } 
        else         
        {
            //input data masjid
                $nama_masjid = $this->input->post('nama_masjid');
                $deskripsi_masjid = $this->input->post('deskripsi_masjid');
                $alamat = $this->input->post('alamat');
                $no_telp = $this->input->post('no_telp');
                $longitude = $this->input->post('longitude');
                $latitude = $this->input->post('latitude');
                //input gambar
                /*
                $upload1 = $_FILES['foto']['name'];
                if ($upload1) {
                    $nmfile = date('YmdHis');
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['upload_path'] = './assets/';
                    $config['file_name']   = $nmfile; //nama yang terupload nantinya
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) 
                    {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/layanan/layanan_testimoni', $error);
                    } 
                    else 
                    {
                        $name = $this->upload->data();
                        $foto = base_url('assets/').$nmfile.$name['file_ext'];
                    }
                }
                */
                $config['upload_path'] = './assets/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload', $config);
                    if ($this->upload->do_upload('foto')) 
                    {
                        $foto = $this->upload->data('file_name');
                    } 
                    else 
                    {
                        echo $this->upload->display_errors();
                    }
                //input data token
                $data2 = [
                    'nama_masjid' => $nama_masjid,
                    'deskripsi_masjid' => $deskripsi_masjid,
                    'alamat' => $alamat,
                     'no_telp' => $no_telp,
                     'longitude' => $longitude,
                     'latitude' => $latitude,
                     'foto' => $foto,
                   ];
                   $this->db->insert('data_masjid', $data2);
                   $id_masjid = $this->db->insert_id();

            //input data admin masjid
            $email=$this->input->post('email');
            $data = [
            'nama_admin' => $this->input->post('nama_lengkap'),
            'email' => $email,
            'username' => $this->input->post('username'),
            'no_telp' => $this->input->post('no_telp'),
            'password' => $this->input->post('password1'),
            'is_active' => 0,
            'id_masjid' => $id_masjid
            ];
        
            $token=base64_encode(random_bytes(32));
            $user_token=[
                'email' => $email,
                'token' => $token,
                'date_created' => time(),
            ];

            $this->db->insert('admin_masjid', $data);
            $this->db->insert('admin_masjid_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Please Activate your account</div>');
            redirect('login_admin');
        }
    }

    private function _sendEmail($token, $type)
    {
         $config=[
             'protocol' => 'smtp',
             'smtp_host' => 'ssl://smtp.googlemail.com',
             'smtp_user' => 'twogether.growup@gmail.com',
             'smtp_pass' => 'oghehdeh:)',
             'smtp_port' => 465,
             'mailtype' => 'html',
             'charset' => 'utf-8',
             'newline' => "\r\n",
         ];

         $this->load->library('email', $config);
         $this->email->from('twogether.growup@gmail.com', 'Geoqurban');
         $this->email->to($this->input->post('email'));

         if($type=='verify')
         {
             $this->email->subject('Account Verification');
             $this->email->message('Click this link to verify you account :
               <a href="'.base_url().'registrasi_admin/verify?email=' . $this->input->post('email') . 
               '&token='.$token.'">Activate</a>');
         }

         if($this->email->send())
         {
             return true;
         }
         else
         {
             echo $this->email->print_debugger();
             die;
         }
    }
         
    public function verify()
    {
             $email= $this->input->get('email');
             $token= $this->input->get('token');

             $user= $this->db->get_where('admin_masjid',['email'=>$email])->row_array();

             if($user)
             {
                $user_token= $this->db->get_where('admin_masjid_token', ['token'=>$token])
                ->row_array();

                if($user_token)
                {
                    if(time() - $user_token['date_created'] < (60*60*24))
                    {
                        $this->db->set('is_active', 1);
                        $this->db->where('email', $email);
                        $this->db->update('admin_masjid');

                        $this->db->delete('admin_masjid_token', ['email' => $email]);

                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Your account is activated</div>');
                        redirect('login_admin');
                    }
                    else
                    {
                        $this->db->delete('admin_masjid', ['email' => $email]);
                        $this->db->delete('admin_masjid_token', ['email' => $email]);

                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Account activation failed! token expired.</div>');
                redirect('login_admin');
                    }
                }
                else 
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Account activation failed! wrong token.</div>');
                redirect('login_admin');
                }
             }             
             else
             {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Account activation failed! wrong email.</div>');
                redirect('login_admin');
             }
    }
}