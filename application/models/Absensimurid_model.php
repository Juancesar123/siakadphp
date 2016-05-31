<?php
class Absensimurid_model extends CI_Model{
  public function lihatabsensimurid(){
    $sql = "select * from absensi_murid";
    return $this->db->query($sql)->result();
  }
  public function insertabsensimurid($val){
    $this->db->insert("absensi_murid",$val);
  }
  public function ubahabsensimurid($val,$id){
    $this->db->where("id_absensi_murid",$id);
    $this->db->update("absensi_murid",$val);
  }
  public function hapusabsensimurid($id){
    $this->db->where("id_absensi_murid",$id);
    $this->db->delete("absensi_murid");
  }
}
