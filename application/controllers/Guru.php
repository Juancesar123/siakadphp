<?php
class Guru extends CI_Controller{
  public function __construct(){
    parent ::__construct();
    $this->load->model("guru_model");
  }
  public function index(){
    $this->load->view("guru.html");
  }
  public function lihatguru(){

  }
  public function insertguru(){

  }
  public function ubahguru(){

  }
  public function hapusguru(){

  }
}
