@extends('admin.layouts.app')

@section('title', 'Tambah Servis')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h6 class="mb-4">Tambah Servis</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.servis.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
                            <div class="text-danger">
                                @error('fasilitas')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                            <div class="text-danger">
                                @error('deskripsi')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <div class="text-danger">
                                @error('foto')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
