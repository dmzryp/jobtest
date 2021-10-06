<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLossTimePacking extends Model
{
    protected $table = "loss_time_packing";
    protected $primaryKey = "idx";
    protected $allowedFields = ['tgl_produksi','pekerja','unit_kerja','man_power','kode_item','item','waktu_kerja','tunggu_box',
    'tunggu_peralatan_box','tunggu_wip','tunggu_sticker'];

    // function cari($katakunci)
    // {
    //     //budi gmail
    //     $builder = $this->table("pegawai");
    //     $arr_katakunci = explode(" ", $katakunci);
    //     for ($x = 0; $x < count($arr_katakunci); $x++) {
    //         $builder->orLike('nama', $arr_katakunci[$x]);
    //         $builder->orLike('email', $arr_katakunci[$x]);
    //         $builder->orLike('alamat', $arr_katakunci[$x]);
    //     }
    //     return $builder;
    // }
}           