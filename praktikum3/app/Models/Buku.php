<?php

// namespace untuk model
namespace App\Models;

// import class Model dari Eloquent ORM (object-relational mapping) laravel
use Illuminate\Database\Eloquent\Model;

// membuat class Buku yang mewarisi class Model
class Buku extends Model
{
    // menentukan nama tabel yang digunakan
    protected $table = 'buku';
    // menentukan atribut yang dapat diisi secara massal
    protected $fillable = ['judul', 'pengarang', 'penerbit'];
}
