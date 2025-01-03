@extends('Admin.layouts.app')

@section('title', 'Tambah Portfolio')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Portfolio</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="id_kategori" class="form-label">Nama Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-select">
                                <option value="">pilih</option>
                                @foreach($kategoris as $kategori)
                                <option value="{{ $kategori->id_kategori }}">{{$kategori->nama_kategori}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('id_kategori')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama_portfolio" class="form-label">Nama Portfolio</label>
                            <input type="text" class="form-control" id="nama_portfolio" name="nama_portfolio">
                            <div class="text-danger">
                                @error('nama_portfolio')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
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
