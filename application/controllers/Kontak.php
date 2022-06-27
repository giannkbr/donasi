<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


  public function __construct()
  {
    parent::__construct();

  }


  public function index()
  {
    $data = [
      "title" => "Kontak kami"
    ];

    $this->load->view('kontak', $data, FALSE);

  }

}

/* End of file Kontak.php */
