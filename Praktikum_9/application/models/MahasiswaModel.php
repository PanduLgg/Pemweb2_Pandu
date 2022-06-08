<?php 

    class MahasiswaModel extends CI_Model {

        private $table = "mahasiswa";

        public function tampil_data() {
            return $this->db->get('mahasiswa');
        }

        public function input_data($data,$table){
            $this->db->insert('mahasiswa', $data);
        }   

        public function detail_data($nim = NULL) {
            $query = $this->db->get_where('mahasiswa', array('nim' => $nim))->row();
            return $query;
        }


        public function delete_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function edit_data($where,$table) {
            return $this->db->get_where($table,$where);
        }

        public function update_data($where,$data,$table) {
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        
        public function findById($id) {
            $this->db->where("nim",$id);
            $query = $this->db->get($this->table);

            return $query->row();
        }


    }

?>