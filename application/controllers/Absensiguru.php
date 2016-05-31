<?php
class Absensiguru extends CI_Controller{
  public function __construct(){
    parent ::__construct();
    $this->load->model("absensiguru_model");
  }
  public function index(){
    $this->load->view("absensiguru");
  }
  public function lihatabsensiguru(){
    $q = $this->absensiguru_model->lihatabsensiguru();
    echo json_encode($q);
  }
  public function insertabsensiguru(){
      $data = (array)json_decode(file_get_contents('php://input'));
      $val = array(
        "id_guru"=>$data["nama"],
        "keterangan"=>$data["keterangan"]
      );
      $this->absensiguru_model->insertabsensiguru($val);
  }
  public function ubahabsensiguru(){
    $data = (array)json_decode(file_get_contents('php://input'));
    $val = array(
      "id_guru"=>$data["nama"],
      "keterangan"=>$data["keterangan"]
    );
    $id=$data["id"];
    $this->absensiguru_model->ubahabsensiguru($val,$id);
  }
  public function hapusabsensiguru(){
    $data = (array)json_decode(file_get_contents('php://input'));
    for($i=0;$i<count($data["id"]);$i++){
      $id = $data["id"]->hapusabsensiguru[$i];
    $this->absensiguru_model->hapusabsensiguru($id);
  }
  }
}
