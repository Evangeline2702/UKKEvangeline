<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_pj;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use vendor\autoload;


class Home extends BaseController
{
    public function index()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $data['okta'] = $evan->tampil('barang');
        echo view('header');
        echo view('menu');
        echo view('barang',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function l_brg()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $data['okta'] = $evan->tampil('barang');
        echo view('header');
        echo view('menu');
        $data['key']='view_b';
        echo view ('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function l_masuk()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        echo view('header');
        echo view('menu');
        $data['key']='view_bm';
        echo view ('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function l_jual()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        echo view('header');
        echo view('menu');
        $data['key']='view_pj';
        echo view ('filter',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function t_brg()
    {
        $level=session()->get('level');
        if($level==1 || $level == 4){
        $evan = new M_pj();
        $data['okta'] = $evan->tampil('barang');
        echo view('header');
        echo view('menu');
        echo view('barang',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/log_out');
    }
    }
    public function t_masuk()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $data['okta'] = $evan->tampil('barang_masuk');
        echo view('header');
        echo view('menu');
        echo view('barang_masuk',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function t_jual()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $data['okta'] = $evan->tampil('transaksi');
        echo view('header');
        echo view('menu');
        echo view('transaksi',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function dashboard()
    {
        if (session()->get('id_u')>0) {
            
        echo view('header');
        echo view('menu');
        echo view('footer');
    
    }else{
        return redirect()->to('home/login');
    }
}
    public function hapus_b($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $where=array('id_brg'=>$okta);
        $evan->hapus('barang',$where);
        return redirect()->to('home/barang');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function hapus_bm($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $where=array('id_msk'=>$okta);
        $evan->hapus('barang_masuk',$where);
        return redirect()->to('home/barang_masuk');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function hapus_p($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $where=array('id_penjualan'=>$okta);
        $evan->hapus('barang_keluar',$where);
        return redirect()->to('home/barang_keluar');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function tambah_b()
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $data['okta'] = $evan->tampil('barang');
        echo view('header');
        echo view('menu');
        echo view('tambah_b',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function tambah_bm()
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $data['okta'] = $evan->tampil('barang');
        echo view('header');
        echo view('menu');
        echo view('tambah_bm',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function tambah_p()
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $data['okta'] = $evan->tampil('barang');
        echo view('header');
        echo view('menu');
        echo view('tambah_p',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function aksi_tambah_b()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $nama=$this->request->getPost('nama_brg');
        $kode=$this->request->getPost('kode_brg');
        $harga=$this->request->getPost('harga');
        $stok=$this->request->getPost('stok');
        $tanggal=$this->request->getPost('Tanggal');
        $data=array(
                    'nama_brg'=>$nama,
                    'kode_brg'=>$kode,
                    'harga'=>$harga,
                    'stok'=>$stok,
                    'Tanggal'=>$tanggal,
                );
        $evan->simpan('barang',$data);
        return redirect()->to('home');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function aksi_tambah_p()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $nama=$this->request->getPost('id_brg');
        $jumlah=$this->request->getPost('jumlah');
        $harga=$this->request->getPost('harga');
        // $bill=$this->request->getPost('id_bill');
        $tanggal=$this->request->getPost('Tanggal');
        $data=array(
                    'id_brg'=>$nama,
                    'jumlah'=>$jumlah,
                    'harga'=>$harga,
                    // 'id_bill'=>$bill,
                    'Tanggal'=>date('Y-m-d'),
                );
        $evan->simpan('transaksi',$data);
        return redirect()->to('home');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function edit_b($jolin)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $x=array('id_brg'=>$jolin);
        $data['okta'] = $evan->getWhere('barang',$x);
        echo view('header');
        echo view('menu');
        echo view('edit_barang',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function aksi_editb()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $id=$this->request->getPost('id');
        $nama=$this->request->getPost('nama_brg');
        $kode=$this->request->getPost('kode_brg');
        $harga=$this->request->getPost('harga');
        $stok=$this->request->getPost('stok');
        $tanggal=$this->request->getPost('Tanggal');
        $where=array('id_brg'=>$id);
        $data=array(
                    'nama_brg'=>$nama,
                    'kode_brg'=>$kode,
                    'harga'=>$harga,
                    'stok'=>$stok,
                    'Tanggal'=>$tanggal,
                );
        $evan->edit('barang',$data,$where);
        return redirect()->to('home');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function aksi_tambah_bm()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $id=$this->request->getPost('id_brg');
        $jumlah=$this->request->getPost('jumlah');
        $harga=$this->request->getPost('harga');
        $supp=$this->request->getPost('nama_supp');
        $data=array(
                    'id_brg'=>$id,
                    'jumlah'=>$jumlah,
                    'harga'=>$harga,
                    'nama_supp'=>$supp,
                );
        $evan->simpan('barang_masuk',$data);
        return redirect()->to('home');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function edit_u($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $x=array('id_user'=>$okta);
        $data['okta'] = $evan->getWhere('user',$x);
        echo view('header');
        echo view('menu');
        echo view('edit_user',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function hapus_u($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $where=array('id_user'=>$okta);
        $evan->hapus('user',$where);
        return redirect()->to('home/user');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function tambah_u()
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $data['okta'] = $evan->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('user',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function user()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $data['okta'] = $evan->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('user',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function aksi_editu()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $id=$this->request->getPost('id');
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $level=$this->request->getPost('level');
        $where=array('id_user'=>$id);
        $data=array(
                    'username'=>$username,
                    'password'=>$password,
                    'level'=>$level,
                );
        $evan->edit('user',$data,$where);
        return redirect()->to('home');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function edit_k($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $x=array('id_user'=>$okta);
        $data['okta'] = $evan->getWhere('karyawan',$x);
        $data['rar'] = $evan->getWhere('user',$x);

        echo view('header');
        echo view('menu');
        echo view('edit_karyawan',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function hapus_k($okta)
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $where=array('id_user'=>$la);
        $evan->hapus('karyawan',$where);
        $evan->hapus('user',$where);
        return redirect()->to('home/karyawan');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function tambah_k()
    {
        if (session()->get('id_u')>0) {
        $evan = new  M_pj();
        $data['okta'] = $evan->tampil('karyawan');
        echo view('header');
        echo view('menu');
        echo view('karyawan',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function karyawan()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $on=('karyawan.id_user=user.id_user');
        $data['okta'] = $evan->fusion('karyawan','user',$on);
        echo view('header');
        echo view('menu');
        echo view('karyawan',$data);
        echo view('footer');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function aksi_editk()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        echo $id=$this->request->getPost('id');
        echo $nama=$this->request->getPost('nama');
        echo $NIK=$this->request->getPost('NIK');
        echo $JK=$this->request->getPost('JK');
        $username=$this->request->getPost('username');
        $where=array('id_user'=>$id);
        $data=array(
                    'nama'=>$nama,
                    'NIK'=>$NIK,
                    'JK'=>$JK,
                );
        $evan->edit('karyawan',$data,$where);
        $data=array(
                    'username'=>$username,
                );
        $evan->edit('user',$data,$where);
        return redirect()->to('home');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function reset_p($id)
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $where=array('id_user'=>$id);
        $data=array(
                    'password'=>md5('12345')
                );
        $evan->edit('user',$data,$where);
        return redirect()->to('home/user');
        }else{
        return redirect()->to('home/login');
    }
    }
    public function cari_b()
    {
        if (session()->get('id_u')>0) { 
        $evan = new M_pj();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$evan->filter3('barang', $awal, $akhir);
        echo view('c_b',$data);
        }else{
        return redirect()->to('home/login');
    }
    }
    public function cari_bm()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$evan->filter2('barang_masuk', $awal, $akhir);
        echo view('c_bm',$data);
        }else{
        return redirect()->to('home/login');
    }
    }
    public function cari_p()
    {
        if (session()->get('id_u')>0) {
        $evan = new M_pj();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$evan->filter2('transaksi', $awal, $akhir);
        echo view('c_p',$data);
        }else{
        return redirect()->to('home/login');
    }
    }
    public function login()
    {
        echo view('v_login');
    }
    public function aksi_login()
    {
        $u=$this->request->getPost('u');
        $p=$this->request->getPost('p');
        $where=array(
            'username'=>$u,
            'password'=>md5($p)
        );
        $evan= new M_pj();
        $kwaseng=$evan->getWhere('user',$where);
        

        if ($kwaseng>0) {
            session()->set('id_u',$kwaseng->id_user);
            session()->set('username',$kwaseng->username);
            session()->set('level',$kwaseng->level);
            return redirect()->to('/home/dashboard');
        }else{
            return redirect()->to('/home/login');
        }
    }
    public function log_out()
    {
        session()->destroy();
        return redirect()->to('/home/login');
    }
    public function cetak_barang()
    {
        $evan = new M_pj();
        echo $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$evan->filter2('barang', $awal, $akhir);
        echo view('cetak_barang', $data);
    }
    public function pdf_b()
    {
        echo $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $evan = new M_pj();
        $data['okta']=$evan->filter3('barang', $awal, $akhir);
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml(view('c_b',$data));
        $dompdf->setPaper('A4','landscape');
        // $dompdf->NewPage();
        $dompdf->render();
        //$dompdf->stream();
        $dompdf->stream('my.pdf',array('Attachment'=>0));
    }
    public function pdf_bm()
    {
        $evan = new M_pj();
        echo $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$evan->filter2('barang_masuk', $awal, $akhir);
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml(view('c_bm',$data));
        $dompdf->setPaper('A4','landscape');
        // $dompdf->NewPage();
        $dompdf->render();
        //$dompdf->stream();
        $dompdf->stream('my.pdf',array('Attachment'=>0));
    }
    public function pdf_p()
    {
        $evan = new M_pj();
        echo $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['okta']=$evan->filter2('transaksi', $awal, $akhir);
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->loadHtml(view('c_p',$data));
        $dompdf->setPaper('A4','landscape');
        // $dompdf->NewPage();
        $dompdf->render();
        //$dompdf->stream();
        $dompdf->stream('my.pdf',array('Attachment'=>0));
    }
    public function excel_barang(){
        // $spreadsheet = new Spreadsheet;
        // $sheet = $spreadsheet->getActiveSheet();
        // $where=array('code' => , );
        $evan= new M_pj;
        $dataLaporan= $evan->tampil('barang');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', "LAPORAN BARANG");
        $sheet->mergeCells('A1:E1'); 
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->setCellValue('A3', "No");
        $sheet->setCellValue('B3', "Nama Barang");
        $sheet->setCellValue('C3', "Kode Barang"); 
        $sheet->setCellValue('D3', "Harga");
        $sheet->setCellValue('E3', "Stok");
        $sheet->setCellValue('F3', "Tanggal");
        $no = 1;
        $numRow = 5;
        foreach ($dataLaporan as $row) :
        $sheet->setCellValue('A' . $numRow, $no);
        $sheet->setCellValue('B' . $numRow, $row->nama_brg);
        $sheet->setCellValue('C' . $numRow, $row->kode_brg);
        $sheet->setCellValue('D' . $numRow, $row->harga);
        $sheet->setCellValue('E' . $numRow, $row->stok);
        $sheet->setCellValue('F' . $numRow, $row->Tanggal);

        $no++;
        $numRow++;
        endforeach;

        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        $sheet->getPageSetup()->setOrientation (\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Laporan Barang");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename = "LAPORANBRG.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx ($spreadsheet);
        $writer->save('php://output');

    }
}