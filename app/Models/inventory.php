<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    protected $fillable = ['kode_barang', 'nama_barang', 'kategori_barang', 'harga', 'qty'];
    protected $table = 'inventorie';
    public $timestamps = false;
}
