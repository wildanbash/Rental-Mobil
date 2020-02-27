<?php 

class Dashboard extends CI_Controller{

    public function index(){
        $this->load->model('user_model');
        $data['mobil'] = $this->user_model->get_data('mobil')->result();
        $this->load->view('template_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('template_customer/footer');

    }

    public function detail_mobil($id){
        $this->load->model('user_model');
        $data['detail'] = $this->user_model->ambil_id_mobil($id);
        $this->load->view('template_customer/header');
        $this->load->view('customer/detail_mobil', $data);
        $this->load->view('template_customer/footer');
    }
}

?>