<?php
class Absensimurid extends CI_Controller{
  public function __construct(){
    parent :: __construct();
    $this->load->model("absensimurid_model");
  }
  public function index(){
    $this->load->view("absensimurid");
  }
  public function lihatabsensimurid(){
    $q = $this->absensimurid_model->lihatabsensimurid();
    echo json_encode($q);
  }
  public function ubahabsensimurid(){
    $data = (array)json_decode(file_get_contents('php://input'));
    $val=array(
      "id_murid"=>$data["nama"],
      "keterangan"=>$data["keterangan"]
    );
    $id = $data["id"];
    $this->absensimurid_model->ubahabsensimurid($val,$id);

  }
  public function hapusabsensimurid(){
    $data = (array)json_decode(file_get_contents('php://input'));
    for($i=0;$i<count($data["id"]);$i++){
      $id = $data["id"]->hapusabsensimurid[$i];
      $this->absensimurid_model->hapusabsensimurid($id);

    }

  }
  public function insertabsensimurid(){
      $data = (array)json_decode(file_get_contents('php://input'));
      $val=array(
        "id_murid"=>$data["nama"],
        "keterangan"=>$data["keterangan"]
      );
      $this->absensimurid_model->insertabsensimurid($val);

  }
}
 ?>
