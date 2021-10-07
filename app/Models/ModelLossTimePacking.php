<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLossTimePacking extends Model
{
    protected $table = "loss_time_packing";
    protected $primaryKey = "idx";
    protected $allowedFields = ['tgl_produksi','pekerja','unit_kerja','man_power','kode_item','item','waktu_kerja','tunggu_box',
    'tunggu_peralatan_box','tunggu_wip','tunggu_sticker'];

     function cari($fromdate, $todate)
     {
         
         $builder = $this->table("loss_time_packing");
         
             $builder->where('tgl_produksi >=', $fromdate);
             $builder->where('tgl_produksi <=', $todate);
         
         return $builder->findAll();
     }
}           