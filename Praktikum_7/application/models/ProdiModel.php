<?php 

    class ProdiModel extends CI_Model {

        private $table = "prodi";

        public function getAll() {
            $query = $this->db->get($this->table);

            return $query->result();
        }
        
        public function findById($id) {
            $this->db->where("kode",$id);
            $query = $this->db->get($this->table);

            return $query->row();
        }

        public function save($data) {

        }

        public function update($data) {
            
        }

        public function delete($id) {
            
        }
    }

?>