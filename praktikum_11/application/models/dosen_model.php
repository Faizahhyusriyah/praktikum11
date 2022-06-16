<?php
    class Dosen_model extends CI_Model {
        
        private $table = "dosen";
        
        public function getAll(){
           $query = $this->db->get($this->table);
           return $query->result();
        }

        public function findById($id){
            $this->db->where("nidn", $id);
            $query = $this->db->get($this->table);
            return $query->row();
        }

        public function save($data){
            $sql = "INSERT INTO dosen 
            (nidn,nama,gender,tmp_lahir,tgl_lahir,prodi_kode,pendidikan_akhir)
              VALUES (?,?,?,?,?,?,?)";
           $this->db->query($sql,$data);
        }

        public function update($data){
            // UPDATE
            $sql = "UPDATE dosen SET nidn=?,nama=?,gender=?,tmp_lahir=?,
            tgl_lahir=?,prodi_kode=?,pendidikan_akhir=? WHERE nidn=?";
             $this->db->query($sql,$data);
        }

        public function delete($id){
            // DELETE FROM mahasiswa WHERE nim=$id;
            $sql = "delete from dosen where nidn=?";
            $this->db->query($sql,array($id));
         }

    }