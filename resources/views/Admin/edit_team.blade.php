@extends('admin.layouts.app')

@section('title', 'Edit Team')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Team</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.team.update', $team->id_team) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama Input -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $team->nama) }}" required>
                            <div class="text-danger">
                                @error('nama')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <!-- Foto Input -->
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <div class="text-danger">
                                @error('foto')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <!-- Display existing photo (if available) -->
                        @if($team->foto)
                            <div class="mb-3">
                                <label class="form-label">Foto Lama</label>
                                <div>
                                    <img src="{{ asset('storage/' . $team->foto) }}" alt="Foto Lama" width="100">
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
