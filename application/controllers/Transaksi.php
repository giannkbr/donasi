<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('MdlTransaksi');
        $this->load->model('MdlDonatur');
    }

    public function index($kt) {

        $where = array('kode_transaksi' => $kt);
        $dataT['tmpTransaksi'] = $this->MdlTransaksi->detailTransaksi('data_transaksi', $where)->result();
        $data['title'] = 'Form Pembayaran';
        $this->load->view('transaksiPembayaran', $dataT);
    }

    public function uploadbukti(){

      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'gif|jpg|png';
      // $config['max_size']  = '100';
      // $config['max_width']  = '1024';
      // $config['max_height']  = '768';
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('bukti_transfer')){
        $error = array('error' => $this->upload->display_errors());
        var_dump($error);
      }
      else{
        $id = array('id_transaksi' => $this->input->post('id_transaksi'));
        $bukti = $this->upload->data();
        $data = [
          'bukti_transfer' => $bukti['file_name']
        ];

        $this->db->update('data_transaksi', $data, $id);
        // $this->session->set_flashdata('message_success', '');
        $this->session->set_flashdata('message_success', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Bukti transfer anda berhasil dikirim! Tunggu konfirmasi dari kami!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
        redirect('home');
      }

    }
}

?>