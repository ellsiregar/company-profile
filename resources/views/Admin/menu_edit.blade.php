@extends('Admin.layouts.app')

@section('title', 'Edit menu')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Menu</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.menu.update', $menu->id_menu) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_menu" class="form-label">Nama Menu</label>
                            <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ old('nama_menu', $munu->nama_menu) }}">
                            <div class="text-danger">
                                @error('nama_menu')
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
                        <img src="{{ asset('storage/' . $menu->foto) }}" alt="" height="100">
                    </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
