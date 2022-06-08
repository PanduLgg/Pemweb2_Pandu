<?php 

    class DosenModel extends CI_Model {

        private $table = "dosen";

        public function tampil_data() {
            return $this->db->get('dosen');
        }

        public function input_data($data,$table){
            $this->db->insert('dosen', $data);
        }   

        public function detail_data($nidn = NULL) {
            $query = $this->db->get_where('dosen', array('nidn' => $nidn))->row();
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
            $this->db->where("nidn",$id);
            $query = $this->db->get($this->table);

            return $query->row();
        }


    }

?>