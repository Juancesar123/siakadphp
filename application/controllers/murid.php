<?php
class Murid extends CI_Controller{
 function __construct(){
   parent :: __construct();
   $this->load->model("murid_model");
 }
  public function index(){
    $this->load->view("murid.html");
  }
  public function insertmurid(){
    $data = (array)json_decode(file_get_contents('php://input'));
    $val=array(
      "nama"=>$data["nama"],
      "email"=>$data["email"],
      "alamat"=>$data["alamat"],
      "provinsi"=>$data["provinsi"],
      "kota"=>$data["kota"]
    );
    $this->murid_model->insertmurid($val);
  }
  public function lihatmurid(){
    $q = $this->murid_model->lihatmurid();
    echo json_encode($q);
  }
  public function editmurid(){
    $data = (array)json_decode(file_get_contents('php://input'));
    $val=array(
      "nama"=>$data["nama"],
      "email"=>$data["email"],
      "alamat"=>$data["alamat"],
      "provinsi"=>$data["provinsi"],
      "kota"=>$data["kota"]
    );
    $id = $data["id"];
    $this->murid_model->editmurid($id,$val);
  }
  public function hapusmurid(){
    $data = (array)json_decode(file_get_contents('php://input'));
    print_r($data["id"]->hapusmurid[0]);
    for($i=0;$i<count($data["id"]);$i++){
      $id = $data["id"]->hapusmurid[$i];
      $this->murid_model->hapusmurid($id);
    }
  }
}
 ?>
