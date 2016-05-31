<?php
class Murid_model extends CI_Model{
  public function lihatmurid(){
    $sql="select * from murid";
    return $this->db->query($sql)->result();
  }
  public function insertmurid($val){
    $this->db->insert("murid",$val);

  }
  public function editmurid($id,$val){
    $this->db->where("id_murid",$id);
    $this->db->update("murid",$val);
  }
  public function hapusmurid($id){
    $this->db->where("id_murid",$id);
    $this->db->delete("murid");
  }
}
 ?>
