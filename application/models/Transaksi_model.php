<?php 

class transaksi_model extends CI_Model{
    public function get_data($table){
        $query = $this->db->get($table);
        return $query;
    }

    public function get_data_transaksi(){
        $this->db->select('transaksi.id_transaksi, user.nama, mobil.merk, transaksi.tanggal_sewa, transaksi.tanggal_kembali, transaksi.total_sewa, transaksi.status, transaksi.status_pembayaran, transaksi.bukti_pembayaran');
        $this->db->from('transaksi');
        $this->db->join('mobil', 'mobil.id_mobil = transaksi.id_mobil');
        $this->db->join('user', 'user.id_user = transaksi.id_user');
        $query = $this->db->get();
        return $query;
    }

    public function get_data_mobil($table){
        $this->db->where('status', 1);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_data_type(){
        $this->db->select('transaksi.id_transaksi, transaksi.id_type, transaksi.total_sewa, transaksi.id_type, transaksi.merk, transaksi.no_plat, transaksi.warna, transaksi.tahun, transaksi.status, transaksi.gambar, type.id_type, type.kode_type, type.nama_type, transaksi.status_pembayaran, transaksi.bukti_pembayaran');
        $this->db->from('transaksi');
        $this->db->join('type', 'transaksi.id_type = type.id_type');
        $query = $this->db->get();
        return $query;
    }

    public function insert_data($data, $table){
        $this->db->insert($table,$data);
    }

    public function edit_data($table, $data, $where){
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_transaksi($id){
        $this->db->select('transaksi.id_transaksi, transaksi.id_type, transaksi.id_type, transaksi.merk, transaksi.no_plat, transaksi.warna, transaksi.tahun, transaksi.status, transaksi.gambar, type.id_type, type.kode_type, type.nama_type');
        $this->db->from('transaksi');
        $this->db->join('type', 'transaksi.id_type = type.id_type');
        $hasil = $this->db->where('id_transaksi', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function insert_status_mobil_sedia($where, $table){
        $this->db->query("update mobil set status = 1 where id_mobil=$where");
    }

    public function insert_status_mobil_kosong($where, $table){
        $this->db->query("update mobil set status = 0 where id_mobil=$where");
    }



}

?>