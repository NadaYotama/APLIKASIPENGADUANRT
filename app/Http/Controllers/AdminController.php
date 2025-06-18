<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;
use App\Models\Antrian;
use App\Models\PengajuanSurat;

// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;


class AdminController extends Controller
{
    public function __invoke()
    {

    }

    public function index($id) {

        $item = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.admin.pengaduan.detail',[
        'item' => $item
        ]);

         $antrians = Antrian::all();

        // Mengirim data antrian ke view
        return view('pages.admin.dashboard', compact('antrians'));
    }

    public function masyarakat() {

        $data = DB::table('users')->where('roles','=', 'USER')->get();

        return view('pages.admin.masyarakat', [
            'data' => $data
        ]);
    }

    public function laporan() {

        $pengaduan = Pengaduan::all();

        return view('pages.admin.laporan',[
            'pengaduan' => $pengaduan
        ]);
    }

    public function cetak() {

        $pengaduan = Pengaduan::all();

        $pdf = PDF::loadview('pages.admin.pengaduan',[
            'pengaduan' => $pengaduan
        ]);
        return $pdf->download('laporan.pdf');
    }

    public function pdf($id) {

        $pengaduan = Pengaduan::find($id);

        $pdf = PDF::loadview('pages.admin.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }


public function antrian($id)
{
    $antrian = Antrian::find($id); // Find antrian by ID
    return view('admin.antrian', compact('antrian')); // Correct view path
}
}
