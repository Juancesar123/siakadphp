<?php
Class Modul extends CI_Controller{
  public function __construct(){
  parent :: __construct();
  $this->load->model("modul_model");
  }
  public function index(){
  $this->load->view("modul");
  }
  public function lihatmodul(){
    $q=$this->modul_model->lihatmodul();
    echo json_encode($q);
  }
  public function ubahmodul(){

  }
  public function hapusmodul(){

  }
}
