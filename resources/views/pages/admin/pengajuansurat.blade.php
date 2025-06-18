<!-- resources/views/pages/admin/pengajuan_surat.blade.php -->
@extends('layouts.admin')

@section('title', 'Pengajuan Surat')

@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Pengajuan Surat
    </h2>

    <!-- Pengajuan Surat Card -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card for Pengajuan Surat -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Pengajuan Surat Terbaru
          </p>
          <ul class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            foreach ($PengajuanSurats as $pengajuanSurat)
            <li>{{ $item->jenis_surat }} - {{ Str::limit($item->keperluan, 50) }} ({{ ucfirst($item->status) }})</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
