<?php
// app/Http/Controllers/PengajuanSuratController.php
namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        $daftarPengajuan = PengajuanSurat::where('user_id', Auth::id())->latest()->get();
        return view('pengajuan-surat.index', compact('daftarPengajuan'));

        $pengajuan = PengajuanSurat::latest()->paginate(10);
        return view('pengajuan.index', compact('pengajuan'));
    }

    public function buat()
    {
        $jenisSurat = [
            'Surat Keterangan Domisili',
            'Surat Keterangan Tidak Mampu',
            'Surat Keterangan Usaha',
            'Surat Pengantar Nikah',
            'Surat Keterangan Kelahiran',
            'Surat Keterangan Kematian',
        ];
        
        return view('pengajuan-surat.buat', compact('jenisSurat'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'jenis_surat' => 'required|string|max:255',
            'keperluan' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'user_id' => Auth::id(),
            'jenis_surat' => $request->jenis_surat,
            'keperluan' => $request->keperluan,
            'status' => 'menunggu',
        ];

        if ($request->hasFile('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('lampiran', 'public');
        }

        PengajuanSurat::create($data);

        return redirect()->route('pengajuan-surat.index')->with('sukses', 'Pengajuan surat berhasil dibuat!');
    }

    public function hapus($id)
    {
    $pengajuanSurat = PengajuanSurat::findOrFail($id);
    $pengajuanSurat->delete();

    return redirect()->route('pengajuan-surat.index')->with('sukses', 'Pengajuan surat berhasil dibatalkan');
    }

    public function lihat($id)
    {
        $pengajuanSurat = PengajuanSurat::findOrFail($id);
        return view('pengajuan-surat.lihat', compact('pengajuanSurat'));
    }



}