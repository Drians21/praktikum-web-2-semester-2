<?php
class Jenis_wisata_model Extends CI_Model{
    private $table = 'jenis_wisata';


    public function getAll(){
        $sql = $this->db->get($this->table);
        return $sql->result();
        
    }
    
    public function findById($id){
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table);
        return $sql->row();
       
    }

    public function save($data){
        //INSERT INTO kecamatan (id,nama) 
        //VALUES (4,Cimanggis)

        $sql = "INSERT INTO jenis_wisata (id,nama)
          VALUES (?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "update jenis_wisata set id=?,nama=? where id=?";
        $this->db->query($sql, $data);
    }
       
       public function delete($id){
        $sql = "delete from jenis_wisata where id=?";
        $this->db->query($sql, array($id));
    }
  




}