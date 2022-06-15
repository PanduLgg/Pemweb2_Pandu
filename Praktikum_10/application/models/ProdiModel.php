<?php 

    class ProdiModel extends CI_Model {

        private $table = "prodi";

        public function tampil_data() {
            return $this->db->get('prodi');
            
        }

        public function input_data($data,$table){
            $this->db->insert('prodi', $data);
        }

        public function detail_data($kode = NULL) {
            $query = $this->db->get_where('prodi', array('kode' => $kode))->row();
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

        
        public function findById($id){
            // SELECT * FROM mahasiswa WHERE nim=$id;
            $this->db->where('kode',$id);
            $query = $this->db->get($this->table);
            return $query->row();
        }


    }

?>