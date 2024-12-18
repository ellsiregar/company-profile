@extends('Admin.layouts.app')

@section('title', 'Edit Portfolio')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Portfolio</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.portfolio.update', $portfolio->id_portfolio) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_portfolio" class="form-label">Nama Portfolio</label>
                            <input type="text" class="form-control" id="nama_portfolio" name="nama_portfolio" value="{{ old('nama_portfolio', $portfolio->nama_portfolio) }}">
                            <div class="text-danger">
                                @error('nama_portfolio')
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
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $portfolio->foto) }}" alt="" height="100">
                    </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
