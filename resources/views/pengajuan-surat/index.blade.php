@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/index.pengajuan.css') }}">

<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2><i class="fas fa-envelope"></i> Daftar Pengajuan Surat</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('pengajuan-surat.buat') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Ajukan Surat Baru
            </a>
        </div>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Jenis Surat</th>
                            <th>Keperluan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($daftarPengajuan as $pengajuan)
                        <tr>
                            <td>{{ $pengajuan->jenis_surat }}</td>
                            <td>{{ Str::limit($pengajuan->keperluan, 50) }}</td>
                            <td>{{ $pengajuan->created_at->translatedFormat('d/m/Y') }}</td>
                            <td>
                                <span class="badge 
                                    @if($pengajuan->status == 'menunggu') bg-warning
                                    @elseif($pengajuan->status == 'diproses') bg-info
                                    @elseif($pengajuan->status == 'disetujui') bg-success
                                    @else bg-danger @endif">
                                    {{ ucfirst($pengajuan->status) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('pengajuan-surat.lihat', $pengajuan->id) }}" class="btn btn-sm btn-info" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                <i class="fas fa-inbox fa-2x mb-3"></i><br>
                                Belum ada pengajuan surat
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection