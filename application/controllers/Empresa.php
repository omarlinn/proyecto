<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $this->load->view('DespuesE/nav');
    $this->load->view('role/empresa');
    $this->load->view('DespuesE/footer');  }

    function publicar(){

      $this->load->view('registro/empresa/nav');
      $this->load->view('registro//empresa/oferta');
      $this->load->view('registro/empresa/footer');
    }



  function service(){
     $this->load->view('DespuesE/nav');
     $this->load->view('site/service');
       $this->load->view('DespuesE/footer');  }

  function contact(){
     $this->load->view('DespuesE/nav');
      $this->load->view('site/contact');
      $this->load->view('DespuesE/footer');  }

  function Privacy(){
     $this->load->view('DespuesE/nav');
     $this->load->view('site/privacy');
     $this->load->view('DespuesE/footer');  }

  function Principal(){
       $this->load->view('DespuesE/nav');
       $this->load->view('role/empresa');
      $this->load->view('DespuesE/footer');  }

  function search(){
     $this->load->view('DespuesE/nav');
      $this->load->view('site/search');
      $this->load->view('DespuesE/footer');  }

  function About(){
    $this->load->view('DespuesE/nav');
     $this->load->view('site/about');
    $this->load->view('DespuesE/footer');  }


}
