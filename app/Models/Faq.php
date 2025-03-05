<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    protected $table = 'tb_faq';
    protected $fillable = [
        'judul_FAQ',
        'isi_FAQ'
    ];
}
