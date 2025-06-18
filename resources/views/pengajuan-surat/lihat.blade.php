@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/lihat.pengajuan.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0"><i class="fas fa-file-alt"></i> Detail Pengajuan Surat</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="text-primary">Jenis Surat</h5>
                            <p class="fs-5">{{ $pengajuanSurat->jenis_surat }}</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <h5>Status</h5>
                            <span class="badge 
                                @if($pengajuanSurat->status == 'menunggu') bg-warning
                                @elseif($pengajuanSurat->status == 'diproses') bg-info
                                @elseif($pengajuanSurat->status == 'disetujui') bg-success
                                @else bg-danger @endif fs-6">
                                {{ ucfirst($pengajuanSurat->status) }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <h5 class="text-primary">Keperluan</h5>
                        <p class="fs-5">{{ $pengajuanSurat->keperluan }}</p>
                    </div>
                    
                    @if($pengajuanSurat->lampiran)
                    <div class="mb-3">
                        <h5 class="text-primary">Lampiran</h5>
                        <a href="{{ asset('storage/' . $pengajuanSurat->lampiran) }}" 
                           target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-download"></i> Unduh Lampiran
                        </a>
                    </div>
                    @endif
                    
                    @if($pengajuanSurat->catatan_admin)
                    <div class="mb-3">
                        <h5 class="text-primary">Catatan Admin</h5>
                        <div class="alert alert-info">
                            {{ $pengajuanSurat->catatan_admin }}
                        </div>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <h5 class="text-primary">Tanggal Pengajuan</h5>
                        <p>{{ $pengajuanSurat->created_at->translatedFormat('l, d F Y H:i') }}</p>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="{{ url('/') }}" class="btn btn-secondary me-md-2">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        @if($pengajuanSurat->status == 'menunggu')
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#batalModal">
                                <i class="fas fa-times"></i> Batalkan Pengajuan
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Batalkan Pengajuan -->
<div class="modal fade" id="batalModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Konfirmasi Pembatalan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin membatalkan pengajuan surat ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <!-- Di dalam Blade -->
                <form action="{{ route('pengajuan-surat.hapus', $pengajuanSurat->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-times"></i> Batalkan Pengajuan
                    </button>
                </form>
                

            </div>
        </div>
    </div>
</div>
@endsection