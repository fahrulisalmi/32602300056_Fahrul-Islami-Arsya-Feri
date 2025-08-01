<?php

namespace App\Models;

use CodeIgniter\Model;

class OnlineCourseModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap',
        'email',
        'nama_kursus',
        'jumlah_pembayaran',
        'metode_pembayaran',
        'tanggal_pembayaran'
    ];
}