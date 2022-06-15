<?php

class MahasiswaModel extends CI_Model
{
    public function tampil() {

        return $this->db->get('mahasiswa');
    }
}