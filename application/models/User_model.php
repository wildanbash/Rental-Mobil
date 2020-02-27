<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $post['email']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null){
        $this->db->from('user');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function get_data($table){
        $query = $this->db->get($table);
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

    public function ambil_id_mobil($id){
        $this->db->select('mobil.id_mobil, mobil.id_type, mobil.id_type, mobil.merk, mobil.no_plat, mobil.warna, mobil.tahun, mobil.harga, mobil.status, mobil.gambar, type.id_type, type.kode_type, type.nama_type');
        $this->db->from('mobil');
        $this->db->join('type', 'mobil.id_type = type.id_type');
        $hasil = $this->db->where('id_mobil', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
        // $this->db->select('*');
        // $this->db->from('mobil');
        // $this->db->where('id_mobil', $id);
        // $hasil = $this->db->get();
        // if($hasil->num_rows() > 0){
        //     return $hasil->result();
        // }else{
        //     return false;
        // }
    }
}