<?php

namespace App\Controllers;

class LossTimePacking extends BaseController
{
    function __construct()
	{
		$this->model = new \App\Models\ModelLossTimePacking();
	}

    public function hapus($idx)
	{
		$this->model->delete($idx);
		return redirect()->to('LossTimePacking');
	}
	public function edit($idx)
	{
		return json_encode($this->model->find($idx));
	}

    public function simpan()
	{
		$validasi  = \Config\Services::validation();
		$aturan = [
			'tglProd' => [
				'label' => 'tglProd',
				'rules' => 'required|min_length[5]',
				'errors' => [
					'required' => '{field} harus diisi',
                    'min_length' => 'Minimum karakter untuk field {field} adalah 5 karakter'
				]
			],
		];

		$validasi->setRules($aturan);
		if ($validasi->withRequest($this->request)->run()) {
			$idx = $this->request->getPost('idx');
			$tglProd = $this->request->getPost('tglProd');
			$pekerja = $this->request->getPost('pekerja');
			$unitKerja = $this->request->getPost('unitKerja');
			$manPower = $this->request->getPost('manPower');

            $kodeItem = $this->request->getPost('kodeItem');
			$descrItem = $this->request->getPost('descrItem');
			$tungguBox = $this->request->getPost('tungguBox');
			$tungguPeralatanBox = $this->request->getPost('tungguPeralatanBox');
            $tungguWIP = $this->request->getPost('tungguWIP');
			$tungguSticker = $this->request->getPost('tungguSticker');
            
            //echo $convertTglProd;

            $date = date_create($tglProd);
            $convertTglProd =  date_format($date, 'Y-m-d H:i:s');
            $waktuKerja = $tungguBox + $tungguPeralatanBox + $tungguWIP + $tungguSticker;
			$data = [
				'idx' => $idx,
				'tgl_produksi' => $convertTglProd,
				'pekerja' => $pekerja,
				'unit_kerja' => $unitKerja,
				'man_power' => $manPower,
                'kode_item' => $kodeItem,
				'item' => $descrItem,
				'waktu_kerja' => $waktuKerja,
				'tunggu_box' => $tungguBox,
				'tunggu_peralatan_box' => $tungguPeralatanBox,
                'tunggu_wip' => $tungguWIP,
				'tunggu_sticker' => $tungguSticker,
			];
           
            
			$this->model->save($data);

			$hasil['sukses'] = true;
			$hasil['msg'] = "Berhasil memasukkan data";
		} else {
			$hasil['sukses'] = false;
			$hasil['msg'] = $validasi->listErrors();
		}


		return json_encode($hasil);
	}
    public function index()
    {
        $radio1 = $this->request->getGet('radio1');
        $today = $this->request->getGet('today');
        $radio2 = $this->request->getGet('radio2');
        $rangedate = $this->request->getGet('rangedate');
        //die($radio1 + ' ' + $today + ' ' + $radio2 + ' ' + $rangedate);
		if ($radio1) {

           $data['datas'] = $this->model->cari(date("Y-m-d 00:00:00"), date("Y-m-d 23:55:00"));
      
		} elseif ($radio2){
            $arr_rangedate = explode(" - ", $rangedate);
            $date=date_create($arr_rangedate[0] );
            $datefrom = date_format($date,"Y-m-d");

            $date=date_create($arr_rangedate[1] );
            $dateto = date_format($date,"Y-m-d");

            $data['datas'] = $this->model->cari($datefrom  ." 00:00:00", $dateto  ." 23:55:00");
        } else {
            $data['datas'] = $this->model->orderBy('idx', 'desc')->findAll();
			
		}
       
		return view('LossTimePacking_view', $data);
    }
}
