<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;

class Laporan extends BaseController
{
    public function __construct() 
    {
        $this->PengaduanModel = new \App\Models\PengaduanModel();
        $this->TanggapanModel = new \App\Models\TanggapanModel();
        $this->MasyarakatModel = new \App\Models\MasyarakatModel();
        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
       return view("admin/generatepdf");
    }

    public function Laporan()
    {
        $laporan = $this->request->getPost();

        if($laporan['format'] == 'Harian')
        {
            $endDate = null;
            $pengaduan = $this->PengaduanModel->where('DATE(tanggal_filter)',$laporan['tanggal'])->findAll();
        }
        elseif($laporan['format'] == 'Mingguan')
        {
            $endDate = date('Y-m-d', strtotime($laporan['tanggal'] . ' -6 days'));
            $pengaduan = $this->PengaduanModel->where('DATE(tanggal_filter) <=',$laporan['tanggal'])->where('DATE(tanggal_filter) >=',$endDate)->findAll();
        }
        elseif($laporan['format'] == 'Bulanan')
        {
            $endDate = date('Y-m-d', strtotime($laporan['tanggal'] . ' -29 days'));
            $pengaduan = $this->PengaduanModel->where('DATE(tanggal_filter) <=',$laporan['tanggal'])->where('DATE(tanggal_filter) >=',$endDate)->findAll();
        }
        elseif($laporan['format'] == 'Tahunan')
        {
            $endDate = date('Y-m-d', strtotime($laporan['tanggal'] . ' -364 days'));
            $pengaduan = $this->PengaduanModel->where('DATE(tanggal_filter) <=',$laporan['tanggal'])->where('DATE(tanggal_filter) >=',$endDate)->findAll();
        }

        $data = array(
            'pengaduan' => $pengaduan,
            'format' => $laporan['format'],
            'tanggal_berakhir' => $laporan['tanggal'],
            'tanggal_mulai' => $endDate,
        );

        date_default_timezone_set('Asia/Jakarta');
        $filename = date('l j F Y'). '_Laporin Aja_Report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('admin/pdf_view',$data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
