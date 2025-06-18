<!-- resources/views/pages/admin/antrian.blade.php -->
@extends('layouts.admin')

@section('title')
    Antrian Online
@endsection

@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Antrian Online
    </h2>

    <!-- Antrian List Table -->
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Daftar Antrian Online</h3>
      </div>
      <div class="border-t border-gray-200">
        <dl>
          <dt class="sr-only">Antrian</dt>
          <dd class="px-4 py-5 sm:px-6">
            <table class="min-w-full table-auto">
              <thead>
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Antrian</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keperluan</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white">
                @foreach($antrians as $antrian)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $antrian->nomor_antrian }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $antrian->keperluan }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $antrian->tanggal->format('Y-m-d') }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-{{ $antrian->status == 'menunggu' ? 'yellow' : ($antrian->status == 'diproses' ? 'blue' : 'green') }}-100 text-{{ $antrian->status == 'menunggu' ? 'yellow' : ($antrian->status == 'diproses' ? 'blue' : 'green') }}-800 rounded-full">
                      {{ ucfirst($antrian->status) }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="{{ route('antrian.lihat', $antrian->id) }}" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</main>
@endsection
