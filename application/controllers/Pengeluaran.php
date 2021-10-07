<?php

use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pengeluaran extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->data['aktif'] = 'pengeluaran';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_customer', 'm_customer');
		$this->load->model('M_pengeluaran', 'm_pengeluaran');
		$this->load->model('M_detail_keluar', 'm_detail_keluar');
	}

	public function index(){
		$this->data['title'] = 'Data Barang Keluar';
		$this->data['all_pengeluaran'] = $this->m_pengeluaran->lihat();
		$this->data['no'] = 1;

		$this->load->view('pengeluaran/lihat', $this->data);
	}

	public function tambah(){
		$this->data['title'] = 'Tambah Barang Keluar';
		$this->data['all_barang'] = $this->m_barang->lihat_stok();
		$this->data['all_customer'] = $this->m_customer->lihat_cst();

		$this->load->view('pengeluaran/tambah', $this->data);
	}

	public function proses_tambah(){
		// $jumlah_barang_keluar = count($this->input->post('kode_barang_hidden'));

		$data_keluar = [
			'no_keluar' => $this->input->post('no_keluar'),
			'tgl_keluar' => $this->input->post('tgl_keluar'),
			'jam_keluar' => $this->input->post('jam_keluar'),
			'jumlah_keluar' => $this->input->post('jumlah'),
			'nama_customer' => $this->input->post('nama_customer'),
			'nama_petugas' => $this->input->post('nama_petugas'),
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
		];

		$data_detail_keluar = [
			'no_keluar' => $this->input->post('no_keluar'),
			'nama_barang' => $this->input->post('nama_barang_hidden'),
			'jumlah' => $this->input->post('jumlah_hidden'),
			'satuan' => $this->input->post('satuan_hidden'),
			'kode_barang' => $this->input->post('kode_barang_hidden')
		];

		// for($i = 0; $i < $jumlah_barang_keluar; $i++){
		// 	array_push($data_detail_keluar, ['no_keluar' => $this->input->post('no_keluar')]);
		// 	$data_detail_keluar[$i]['nama_barang'] = $this->input->post('nama_barang_hidden')[$i];
		// 	$data_detail_keluar[$i]['jumlah'] = $this->input->post('jumlah_hidden')[$i];
		// 	$data_detail_keluar[$i]['satuan'] = $this->input->post('satuan_hidden')[$i];
		// 	$data_detail_keluar[$i]['kode_barang'] = $this->input->post('kode_barang_hidden')[$i];
		// }

		if($this->m_pengeluaran->tambah($data_keluar)){
			// && $this->m_detail_keluar->tambah($data_detail_keluar)
			// for ($i=0; $i < $jumlah_barang_keluar ; $i++) { 
			// 	$this->m_barang->min_stok($data_detail_keluar[$i]['jumlah'], $data_detail_keluar[$i]['kode_barang']) or die('gagal min stok');
			// }
			$this->m_barang->min_stok($data_keluar['jumlah_keluar'], $data_keluar['kode_barang']) or die('gagal min stok');
			$this->session->set_flashdata('success', 'Ditambahkan!');
			redirect('pengeluaran');
		}
	}

	public function detail($no_keluar){
		$this->data['title'] = 'Detail Pengeluaran';
		$this->data['pengeluaran'] = $this->m_pengeluaran->lihat_no_keluar($no_keluar);
		$this->data['all_detail_keluar'] = $this->m_detail_keluar->lihat_no_keluar($no_keluar);
		$this->data['no'] = 1;

		$this->load->view('pengeluaran/detail', $this->data);
	}

	public function hapus($no_keluar){
		if($this->m_pengeluaran->hapus($no_keluar) && $this->m_detail_keluar->hapus($no_keluar)){
			$this->session->set_flashdata('success', 'Dihapus!');
			redirect('pengeluaran');
		} else {
			$this->session->set_flashdata('error', 'Invoice Pengeluaran <strong>Gagal</strong> Dihapus!');
			redirect('pengeluaran');
		}
	}

	public function get_all_barang_kode(){
		$data = $this->m_barang->lihat_nama_barang_kode($_POST['kode_barang']);
		echo json_encode($data);
	}

	public function get_all_barang(){
		$data = $this->m_barang->lihat_nama_barang($_POST['nama_barang']);
		echo json_encode($data);
	}

	public function keranjang_barang(){
		$this->load->view('pengeluaran/keranjang');
	}

	public function export_excel(){
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'WH Asal');
        $sheet->setCellValue('C1', 'WH Tujuan');
        $sheet->setCellValue('D1', 'Nama Barang');
        $sheet->setCellValue('E1', 'SN');
        $sheet->setCellValue('F1', 'Jumlah Keluar');
		$sheet->setCellValue('G1', 'Tanggal Keluar');
        $bKeluar = $this->m_pengeluaran->lihat();

        $no = 1;
        $x = 2;
        foreach($bKeluar as $row){
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row->nama_petugas);
            $sheet->setCellValue('C'.$x, $row->nama_customer);
            $sheet->setCellValue('D'.$x, $row->nama_barang);
            $sheet->setCellValue('E'.$x, $row->kode_barang);
            $sheet->setCellValue('F'.$x, $row->jumlah_keluar);
            $sheet->setCellValue('G'.$x, $row->tgl_keluar);
            $x++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Daftar Barang Keluar';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
	}

	public function export(){
		$dompdf = new Dompdf();
		// $this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['all_pengeluaran'] = $this->m_pengeluaran->lihat();
		$this->data['title'] = 'Laporan Data Pengeluaran';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('pengeluaran/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Pengeluaran Tanggal ' . date('d F Y'), array("Attachment" => false));
	}

	public function export_detail($no_keluar){
		$dompdf = new Dompdf();
		// $this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['pengeluaran'] = $this->m_pengeluaran->lihat_no_keluar($no_keluar);
		$this->data['all_detail_keluar'] = $this->m_detail_keluar->lihat_no_keluar($no_keluar);
		$this->data['title'] = 'Laporan Detail Pengeluaran';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('pengeluaran/detail_report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Detail Pengeluaran Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}