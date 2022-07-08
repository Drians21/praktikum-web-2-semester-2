<?php
class Tempat_wisata_model Extends CI_Model{
    private $table = 'tempat_wisata';


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

        $sql = "INSERT INTO tempat_wisata (id,nama,alamat,latlong,jenis_id,skor_rating,harga_tiket,foto1,foto2,foto3,kecamatan_id,website,fasilitas)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "update tempat_wisata set id=?,nama=?,alamat=?,latlong=?,jenis_id=?,skor_rating=?,harga_tiket=?,foto1=?,foto2=?,foto3=?,kecamatan_id=?,website=?,fasilitas=? where id=?";
        $this->db->query($sql, $data);
       }
       
    public function delete($id){
        $sql = "delete from tempat_wisata where id=?";
        $this->db->query($sql, array($id));
    }
    
    public function update_foto($array){
        $sql = "update tempat_wisata set foto1=? where id=?";
        $this->db->query($sql, $array);
    }
    // public function ubah_foto($id){
    //     $sql = "update tempat_wisata set foto1='lama.jpg' where id=?";
    //     $this->db->query($sql, $id);
    // }
  



}
