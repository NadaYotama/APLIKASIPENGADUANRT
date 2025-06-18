<?php
// app/Models/PengajuanSurat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_surat';
    
    protected $fillable = [
        'user_id', 'jenis_surat', 'keperluan', 'lampiran', 'status', 'catatan_admin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}