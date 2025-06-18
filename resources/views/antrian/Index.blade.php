<!-- resources/views/antrian/index.blade.php -->
<link rel="stylesheet" href="{{ asset('css/index.antrian.css') }}">
<div class="container">
    <h2>Daftar Antrian Saya</h2>
    <a href="{{ route('antrian.buat') }}" class="btn btn-primary mb-3">Buat Antrian Baru</a>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No. Antrian</th>
                    <th>Keperluan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($daftarAntrian as $antrian)
                <tr>
                    <td>{{ $antrian->nomor_antrian }}</td>
                    <td>{{ $antrian->keperluan }}</td>
                    <td>{{ $antrian->tanggal }}</td>
                    <td>
                        <span class="badge 
                            @if($antrian->status == 'menunggu') bg-warning
                            @elseif($antrian->status == 'diproses') bg-info
                            @else bg-success @endif">
                            {{ ucfirst($antrian->status) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('antrian.lihat', $antrian->id) }}" class="btn btn-sm btn-info">Detail</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada antrian</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
