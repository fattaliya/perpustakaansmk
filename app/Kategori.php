<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable =[
    'id',
    'nama',
    'denda',
    'satuan_denda',
    'nominal',
    'kehilangan',
    'jumlah',

];
}
