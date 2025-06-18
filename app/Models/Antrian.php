<?php

// app/Models/Antrian.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrian';
    
    protected $fillable = [
        'user_id', 'keperluan', 'tanggal', 'nomor_antrian', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
