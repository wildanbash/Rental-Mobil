<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Rental_model extends CI_Model
{
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_transaksi($id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('transaksi.id_user', $id);
        $this->db->join('mobil', 'mobil.id_mobil = transaksi.id_mobil');
        $this->db->join('user', 'user.id_user = transaksi.id_user');
        $hasil = $this->db->get();

        return $hasil->result();
    }

    public function show_transaksi($field, $table, $order){
        $this->db->order_by($field, $order);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_transaksi_id($id){
        $this->db->select('transaksi.id_transaksi, user.nama , mobil.merk, transaksi.tanggal_sewa, transaksi.tanggal_kembali, transaksi.total_sewa, transaksi.status, transaksi.status_pembayaran, transaksi.bukti_pembayaran');
        $this->db->from('transaksi');
        $this->db->join('mobil', 'mobil.id_mobil = transaksi.id_mobil');
        $this->db->join('user', 'user.id_user = transaksi.id_user');
        $this->db->where('id_transaksi', $id);
        $query = $this->db->get();
        return $query;
        
    }
}