<?php
// app/Http/Controllers/AntrianController.php
namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AntrianController extends Controller
{
    public function index()
    {
        $daftarAntrian = Antrian::where('user_id', Auth::id())->latest()->get();
        return view('antrian.index', compact('daftarAntrian'));

        $antrian = Antrian::all(); // Mengambil data antrian
        return view('admin.antrian', compact('daftarAntrian'));
}
    

    public function buat()
    {
        return view('antrian.buat');
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'keperluan' => 'required|string|max:255',
            'tanggal' => 'required|date|after_or_equal:today',
        ]);

        // Generate nomor antrian
        $tanggal = Carbon::parse($request->tanggal)->format('Ymd');
        $antrianTerakhir = Antrian::whereDate('tanggal', $request->tanggal)->count();
        $nomorAntrian = 'A-' . $tanggal . '-' . str_pad($antrianTerakhir + 1, 3, '0', STR_PAD_LEFT);

        Antrian::create([
            'user_id' => Auth::id(),
            'keperluan' => $request->keperluan,
            'tanggal' => $request->tanggal,
            'nomor_antrian' => $nomorAntrian,
        ]);

        return redirect()->route('antrian.index')->with('sukses', 'Antrian berhasil dibuat!');
    }

    public function lihat(Antrian $antrian)
    {
        return view('antrian.lihat', compact('antrian'));
    }

public function hapus($id)
{
    $antrian = Antrian::findOrFail($id);
    $antrian->delete();

    return redirect()->route('antrian.index')->with('sukses', 'Antrean berhasil dibatalkan');
}


}