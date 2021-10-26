<?php

use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Barang extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'petugas' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'barang';
		$this->load->model('M_barang', 'm_barang');
	}

	public function index(){
		$this->data['title'] = 'Data Barang Masuk';
		$this->data['all_barang'] = $this->m_barang->lihat();
		$this->data['no'] = 1;

		$this->load->view('barang/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Barang';

		$this->load->view('barang/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'stok' => $this->input->post('stok'),
			'satuan' => $this->input->post('satuan'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
		];

		$this->db->where('kode_barang',$this->input->post('kode_barang'));
		$q = $this->db->get('barang');

		if($q->num_rows() == 0){
			if($this->m_barang->tambah($data)){
				$this->session->set_flashdata('success', 'ditambahkan!');
				redirect('barang');
			} else {
				$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Ditambahkan!');
				redirect('barang');
			}
		}else{
			$this->session->set_flashdata('error', 'Terdaftar!');
			redirect('barang');
		}
		
	}

	public function ubah($kode_barang){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Edit Barang';
		$this->data['barang'] = $this->m_barang->lihat_id($kode_barang);

		$this->load->view('barang/ubah', $this->data);
	}

	public function proses_ubah($kode_barang){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'stok' => $this->input->post('stok'),
			'satuan' => $this->input->post('satuan'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
		];

		if($this->m_barang->ubah($data, $kode_barang)){
			$this->session->set_flashdata('success', 'diubah!');
			redirect('barang');
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Diubah!');
			redirect('barang');
		}
	}

	public function hapus($kode_barang){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('dashboard');
		}
		
		if($this->m_barang->hapus($kode_barang)){
			$this->session->set_flashdata('success', 'dihapus!');
			redirect('barang');
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Dihapus!');
			redirect('barang');
		}
	}

	public function export_excel(){
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Barang');
        $sheet->setCellValue('C1', 'SN');
        $sheet->setCellValue('D1', 'Jenis');
        $sheet->setCellValue('E1', 'Tanggal Masuk');
        $sheet->setCellValue('F1', 'Stok');
  //       $sheet->setCellValue('F1', 'Jumlah Keluar');
		// $sheet->setCellValue('G1', 'Tanggal Kirim');
        $bMasuk = $this->m_barang->lihat();

        $no = 1;
        $x = 2;
        foreach($bMasuk as $row){
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row->nama_barang);
            $sheet->setCellValue('C'.$x, $row->kode_barang);
            $sheet->setCellValue('D'.$x, $row->satuan);
            $sheet->setCellValue('E'.$x, $row->tgl_masuk);
            $sheet->setCellValue('F'.$x, $row->stok);
            // $sheet->setCellValue('F'.$x, $row->jumlah);
            // $sheet->setCellValue('G'.$x, $row->tgl_keluar);
            $x++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Daftar Barang Masuk';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
	}

	public function export(){
		$dompdf = new Dompdf();
		$this->data['all_barang'] = $this->m_barang->lihat();
		$this->data['title'] = 'Laporan Data Barang';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('barang/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Barang Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}