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

    public function updateHero($id, $data = [])
    {
        $this->db->where('id', $id);
        $this->db->update('hero_unit', $data);
        // echo $this->db->last_query();
        // die;
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteHero($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('hero_unit');
        // echo $this->db->last_query();
        // die;
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function getHero(){
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
    public function getHeroById($id){
        $q = "
            SELECT * FROM `hero_unit` WHERE id='$id'
        ";
        // $this->db->query($q);
        $res = $this->db->query($q)->result_array();
        if ($res) {
            return $res[0];
        } else {
            return [];
        }
    }
    public function getAllowedHero(){
        $q = "
            SELECT * FROM `hero_unit` WHERE status_persetujuan = 'disetujui'
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
