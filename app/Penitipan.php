<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    protected $table = "tb_penitipan";
    protected $primaryKey = 'id';
    protected $fillable = ['no_ktp', 'nama','no_telp', 'alamat', 'jenis_hewan', 'keterangan_hewan'];

}
