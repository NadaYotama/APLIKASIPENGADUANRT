
<link rel="stylesheet" href="{{ asset('css/buat.pengajuan.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-file-alt"></i> Pengajuan Surat Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengajuan-surat.simpan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="jenis_surat" class="form-label">Jenis Surat</label>
                            <select class="form-select @error('jenis_surat') is-invalid @enderror" 
                                    id="jenis_surat" name="jenis_surat" required>
                                <option value="">Pilih Jenis Surat</option>
                                @foreach($jenisSurat as $jenis)
                                    <option value="{{ $jenis }}" {{ old('jenis_surat') == $jenis ? 'selected' : '' }}>
                                        {{ $jenis }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jenis_surat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="keperluan" class="form-label">Keperluan</label>
                            <textarea class="form-control @error('keperluan') is-invalid @enderror" 
                                      id="keperluan" name="keperluan" rows="3" required>{{ old('keperluan') }}</textarea>
                            @error('keperluan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Jelaskan tujuan pengajuan surat ini</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="lampiran" class="form-label">Lampiran (Opsional)</label>
                            <input type="file" class="form-control @error('lampiran') is-invalid @enderror" 
                                   id="lampiran" name="lampiran">
                            @error('lampiran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Format: PDF, JPG, PNG (Maks. 2MB)</small>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/') }}" class="btn btn-secondary me-md-2">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Ajukan Surat
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
