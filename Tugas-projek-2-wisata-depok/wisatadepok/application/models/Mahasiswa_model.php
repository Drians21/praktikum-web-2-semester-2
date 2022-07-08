<?php
class Mahasiswa_model extends CI_Model{
   private $table = "mahasiswa";

   public function getAll(){
    $query = $this->db->get($this->table);
    return $query->result();
   }

   public function findById($nim){
    $this->db->where('nim', $nim);
    $query = $this->db->get($this->table);
    return $query->row();
   }
//    public function save($data){
    
//    }

}