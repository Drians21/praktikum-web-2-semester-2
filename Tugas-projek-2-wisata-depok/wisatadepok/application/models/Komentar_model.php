<?php
class Komentar_model extends CI_Model{
   private $table = "komentar";
   private $table2 = "vw_empat_table";


   public function getAll(){
    $query = $this->db->get($this->table);
    return $query->result();
   }

   // public function findById($id){
   //  $this->db->where('id', $id);
   //  $query = $this->db->get($this->table);
   //  return $query->row();
   // }
   public function findById($id){
    $this->db->where('id', $id);
    $query = $this->db->get($this->table2);
    return $query->row();
   }

   public function findById2($id){
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row();
   }

   public function save($data){
    $sql = "insert into komentar(id,tanggal,isi,users_id,wisata_id,nilai_rating_id)
    values (?,?,?,?,?,?)";
    $this->db->query($sql, $data);
   }
   
   public function findSave($id){
      $this->db->where('id', $id);
      $query = $this->db->get($this->table);
      return $query->row();
      
   }
   
   public function update($data){
      $sql = "update komentar set id=?,tanggal=?,isi=?,users_id=?,wisata_id=?,nilai_rating_id=? where id=?";
      $this->db->query($sql, $data);
   }
   
   public function delete($id){
      $sql = "delete from komentar where id=?";
      $this->db->query($sql, array($id));
   }
   
   public function save2($data){
    $sql = "insert into komentar(tanggal,isi,users_id,wisata_id,nilai_rating_id)
    values (?,?,2,?,?)";
    $this->db->query($sql, $data);
   }
}