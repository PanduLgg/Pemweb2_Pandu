<?php

class MahasiswaModel extends CI_Model
{
    public $id;
    public $nim;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat()
    {
        $predikat = $this->ipk >= 3.75 ? "Cumlaude" : "Baik";
        return $predikat;
    }
}