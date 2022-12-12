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
        $this->db->update('Product_unit', $data, ['id' => $id]);
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteProduct($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product_unit');
        // echo $this->db->last_query();
        // die;
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
    public function getProduct()
    {
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
    public function getProductById($id)
    {
        $q = "
            SELECT * FROM `product_unit` WHERE id='$id'
        ";
        $res = $this->db->query($q)->result_array();
        if ($res) {
            return $res[0];
        } else {
            return [];
        }
    }
    public function getAllowedProduct()
    {
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
    public function getProductByProductType($productType)
    {
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
    public function searchProduct($query, $filter)
    {
        if ($filter != "") {
            $f = "AND LOWER(jenis_produk) = LOWER('$filter')";
        } else {
            $f = "";
        }
        if ($query != "") {
            $s = "AND LOWER(nama_produk) LIKE LOWER('%$query%')
                OR LOWER(jenis_produk) LIKE LOWER('%$query%')
                OR LOWER(deskripsi) LIKE LOWER('%$query%')";
        } else {
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

    public function showbyharga($range)
    {
        if ($range != "") {
            $h = $this->rangeHarga($range);
        } else {
            $h = "";
        }

        $q = "
            SELECT * 
            FROM `product_unit`
            WHERE
                status_persetujuan='disetujui'
                $h
        ";
        $res = $this->db->query($q)->result_array();



        if ($res) {
            return $res;
        } else {
            return [];
        }
    }
    public function rangeHarga($value)
    {
        $p = "";
        switch ($value) {
            case 0:
                $p = "";
                break;
            case 1:
                $p = " AND harga_produk BETWEEN 0 AND 50000";
                break;
            case 2:
                $p = " AND harga_produk BETWEEN 51000 AND 100000";
                break;
            case 3:
                $p = " AND harga_produk BETWEEN 101000 AND 150000";
                break;
            case 4:
                $p = " AND harga_produk BETWEEN 151000 AND 200000";
                break;
            default:
                $p = "";
                break;
        }
        return $p;
    }
}
// id
// Nama Produk
// Harga Produk
// Jenis Produk
// deskripsi
// Input Gambar
// status_persetujuan