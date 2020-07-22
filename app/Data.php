<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table ='data';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'manfaat',
        'noPK',
        'no-ktp',
        'sdate',
        'edate',
        'tglLahir',
        'periodeLength',
        'rate',
        'jenisKelamin',
        'pekerjaan',
        'usia'
    ];
}
