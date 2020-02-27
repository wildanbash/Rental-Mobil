<?php 

class Data_Type extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('type_model');
    }

    public function index(){
        $data['type'] = $this->type_model->get_data('type')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_type', $data);
        $this->load->view('template_admin/footer');
    }
    
    public function tambah_data_type(){
        $data['type'] = $this->type_model->get_data('type')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_data_type', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_type_simpan(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_data_type();
        }else{
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type
            );

            $this->type_model->insert_data($data,'type');
            $this->session->set_flashdata('pesan','
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/data_type');
        }
    }

    public function edit_type($id){
        $where = array('id_type'=> $id);
        $data['type'] = $this->db->query("SELECT * FROM type tp WHERE tp.id_type='$id'")->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_data_type', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit_type_simpan(){
        $this->_rules();
        $id = $this->input->post('id_type');
        if($this->form_validation->run() == FALSE){
            $this->edit_type($id);
        }else{
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type,
            );

            $where = array(
                'id_type' => $id
            );

            $this->type_model->edit_data('type', $data, $where);
            $this->session->set_flashdata('pesan','
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Type Berhasil Diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/data_type');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
        $this->form_validation->set_rules('nama_type', 'Nama Type', 'required');
    }

    public function detail_mobil($id){
        $data['detail'] = $this->mobil_model->ambil_id_mobil($id);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admxin/detail_mobil', $data);
        $this->load->view('template_admin/footer');
    }

    public function delete_type($id){
        $where = array('id_type' => $id);
        $this->type_model->delete_data($where, 'type');
            $this->session->set_flashdata('pesan','
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Type Berhasil Dihapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/data_type');
    }
}

?>