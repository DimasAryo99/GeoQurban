<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi_admin extends CI_Controller 
{
    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'Email has already registered!']);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]', [
            'matches' =>  'Password dont match!',
            'min_length' => 'Password too shot!'
        ]);

        if ($this->form_validation->run() == false)  
        {
            $this->load->view('auth/register');
        } 
        else {
         $data = ['nama_admin' => $this->input->post('nama_lengkap'),
                  //'telp' => $this->input->post('no_telp'),
                  'email' => $this->input->post('email'),
                  //'username' => $this->input->post('username'),
                  'password' => $this->input->post('password1'),
                  'is_active' => 0
                ];
            $this->db->insert('admin_masjid', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your account has been created</div>');
            redirect('login');
        }
    }
//method terbaru
    /*
    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi_admin extends CI_Controller 
{
    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'Email has already registered!']);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]', [
            'matches' =>  'Password dont match!',
            'min_length' => 'Password too shot!'
        ]);

        if ($this->form_validation->run() == false)  
        {
            $this->load->view('auth/register_admin');
        } 
        else {
        $email=$this->input->post('email');
        $data = ['nama_admin' => $this->input->post('nama_lengkap'),
                  'email' => $email,
                  //'username' => $this->input->post('username'),
                  'password' => $this->input->post('password1'),
                  'is_active' => 0
                ];
            
            //siapkan token
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
            redirect('login');
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
               '&token='.$token . '">Activate</a>');
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
                        redirect('login');
                    }
                    else
                    {
                        $this->db->delete('admin_masjid', ['email' => $email]);
                        $this->db->delete('admin_masjid_token', ['email' => $email]);

                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Account activation failed! token expired.</div>');
                redirect('login');
                    }
                }
                else 
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Account activation failed! wrong token.</div>');
                redirect('login');
                }
             }             
             else
             {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Account activation failed! worng email.</div>');
                redirect('login');

             }
         }
    }
    */

}