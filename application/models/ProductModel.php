<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
{

    public function insertProduct($data)
    {
        $this->db->insert('product_unit', $data);
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProduct($id, $data = [])
    {
        $this->db->where('id', $id);
        $this->db->update('Product_unit', $data);
        // echo $this->db->last_query();
        // die;
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function getProduct(){
        $q = "
            SELECT * FROM `product_unit` WHERE 1
        ";
        $res = $this->db->query($q)->result_array();
        if ($res) {
            return $res;
        } else {
            return [];
        }
    }
    public function getAllowedProduct(){
        $q = "
            SELECT * FROM `product_unit` WHERE status_persetujuan='disetujui'
        ";
        $res = $this->db->query($q)->result_array();
        if ($res) {
            return $res;
        } else {
            return [];
        }
    }
    public function getProductByProductType($productType){
        $q = "
            SELECT * FROM `product_unit` WHERE LOWER(jenis_produk)=LOWER('$productType')
        ";
        $res = $this->db->query($q)->result_array();
        if ($res) {
            return $res;
        } else {
            return [];
        }
    }
    public function searchProduct($query, $filter){
        if ($filter != "") {
            $f = "AND LOWER(jenis_produk) = LOWER('$filter')";
        }else{
            $f = "";
        }
        if ($query != "") {
            $s = "AND LOWER(nama_produk) LIKE LOWER('%$query%')
                OR LOWER(jenis_produk) LIKE LOWER('%$query%')
                OR LOWER(deskripsi) LIKE LOWER('%$query%')";
        }else{
            $s = "";
        }
        
        $q = "
            SELECT * 
            FROM `product_unit`
            WHERE
                status_persetujuan='disetujui' 
                $f
                $s
        ";
        $res = $this->db->query($q)->result_array();
        
        
        
        if ($res) {
            return $res;
        } else {
            return [];
        }
    }
}
// id
// Nama Produk
// Harga Produk
// Jenis Produk
// deskripsi
// Input Gambar
// status_persetujuan