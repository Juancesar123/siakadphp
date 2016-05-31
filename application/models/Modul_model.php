<?php
class Modul_model extends CI_Model{
  public function lihatmodul(){
    $sql="select * from modul";
    return $this->db->query($sql)->result();
  }
  public function ubahmodul(){

  }
  public function hapusmodul(){

  }
  public function insertmodul(){

  }
}
