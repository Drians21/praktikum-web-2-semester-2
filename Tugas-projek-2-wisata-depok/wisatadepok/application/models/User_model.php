<?php
class User_model extends CI_Model{
   private $table = "users";
//    private $table2 = "vw_empat_table";


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
    $query = $this->db->get($this->table);
    return $query->row();
   }
   public function save($data){
    $sql = "insert into users(id,username,password,email,created_at,last_login,status,role)
    values (?,?,md5(?),?,?,?,?,?)";
    $this->db->query($sql, $data);
   }
   // public function findSave($id){
   //  $this->db->where('id', $id);
   //  $query = $this->db->get($this->table);
   //  return $query->row();
   
   // }


   public function update($data){
      $sql = "update users set id=?,username=?,password=?,email=?,created_at=?,last_login=?,status=?,role=? where id=?";
      $this->db->query($sql, $data);
     }
     
   public function delete($id){
      $sql = "delete from users where id=?";
      $this->db->query($sql, array($id));
     }
   
   // public function login($username,$password){
   //    $sql = "select * from users where username=? and password = md5(?)";
   //    $data = [$username,$password];
   //    $query= $this->db->query($sql, $data);
   //    return $query->row();
   // }
   
   public function register($username,$password,$email){
      $sql = "insert into users(id,username,password,email,created_at,status,role)
      values (default,?,md5(?),?,now(),'Belum Aktif','Public')";
      $data = [$username,$password,$email];
      $query= $this->db->query($sql, $data);
   }
   
   public function auto_increment(){
      $sql = "ALTER TABLE users AUTO_INCREMENT = 1";
      $this->db->query($sql);
      
   }
   
   public function cek($username,$email){
      $sql = "select * from users where username=? or email=?";
      $data = [$username,$email];
      $query= $this->db->query($sql, $data);
      return $query->row();
   }
   
   public function cek_status1($username,$password){
      $sql = "select * from users where username=? and password = md5(?) and status='Belum Aktif'";
      $data =[$username,$password];
      $query= $this->db->query($sql,$data);
      return $query->row();
   }
   public function cek_status2($username,$password){
      $sql = "select * from users where username=? and password = md5(?) and status='Aktif'";
      $data =[$username,$password];
      $query= $this->db->query($sql,$data);
      return $query->row();
   }
   public function last_login($username){
      $sql = "update users set last_login=now() where username=?";
      $this->db->query($sql,$username);
    
   }

}