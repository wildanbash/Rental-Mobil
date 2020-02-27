<?php
class Auth extends CI_Controller
{
    public function login()
    {
        // check_already_login();
        $this->load->view('login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_model');
            $query = $this->user_model->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id_user' => $row->id_user,
                    'nama' => $row->nama,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                if ($row->level == 1) {
                    echo "<script>
                        alert('Selamat, Login Berhasil');
                        window.location='" . site_url('admin/dashboard') . "';
                    </script>";
                } else {
                    echo "<script>
                        alert('Selamat, Login Berhasil');
                        window.location='" . site_url('customer/dashboard') . "';
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Login Gagal, email/password salah');
                    window.location='" . site_url('auth/login') . "';
                </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('id_user', 'level');
        $this->session->unset_userdata($params);
        redirect('customer/dashboard');
    }

    public function ganti_password()
    {
        $this->load->view('template_admin/header');
        $this->load->view('ganti_password');
        $this->load->view('template_admin/footer');
    }
}