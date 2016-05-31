<?php
class Absensiguru_model extends CI_Model{
  public function lihatabsensiguru(){
    $sql ="select * from absensi_guru";
    return $this->db->query($sql)->result();
  }
  public function insertabsensiguru($val){
    $this->db->insert("absensi_guru",$val);
  }
  public function ubahabsensiguru($val,$id){
    $this->db->where("id_absensi_guru",$id);
    $this->db->update("absensi_guru",$val);
  }
  public function hapusabsensiguru($id){
    $this->db->where("id_absensi_guru",$id);
    $this->db->delete("absensi_guru");
  }
}
