@foreach ($antrians as $antrian)
    <tr>
        <td>{{ $antrian->nomor_antrian }}</td>
        <td>{{ $antrian->keperluan }}</td>
        <td>{{ $antrian->tanggal }}</td>
        <td>
            <span class="badge {{ $antrian->status == 'menunggu' ? 'bg-warning' : ($antrian->status == 'diproses' ? 'bg-info' : 'bg-success') }}">
                {{ ucfirst($antrian->status) }}
            </span>
        </td>
        <td>
            <a href="{{ route('antrian.lihat', $antrian->id) }}" class="btn btn-sm btn-info">Detail</a>
        </td>
    </tr>
@endforeach
