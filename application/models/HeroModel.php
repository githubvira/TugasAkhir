<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HeroModel extends CI_Model
{

    public function insertHero($label, $deskripsi, $gambar, $status)
    {
        $q = "
        INSERT INTO `hero_unit` (`id`, `label`, `deskripsi`, `file_foto`, `status_persetujuan`) 
        VALUES (NULL, '$label', '$deskripsi', '$gambar', '$status')
        ";

        if ($this->db->simple_query($q)) {
            return true;
        } else {
            return false;
        }
    }

    public function getHero()
    {
        $q = "
            SELECT * FROM `hero_unit` WHERE 1
        ";
        // $this->db->query($q);
        $res = $this->db->query($q)->result_array();
        if ($res) {
            return $res;
        } else {
            return [];
        }
    }
}
