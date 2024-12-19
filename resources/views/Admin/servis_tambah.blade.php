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
                    <form action="{{ route('admin.servis.store') }}" method="POST">
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
