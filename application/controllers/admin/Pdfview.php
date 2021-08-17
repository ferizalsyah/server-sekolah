<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdfview extends CI_Controller
{
    public function index()
    {
        $this->load->model('model_nilai');
        $data['nilai'] = $this->Model_nilai->getData();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-siswa.pdf";
        $this->pdf->load_view('laporan/laporan_nilai', $data);
    }
}
