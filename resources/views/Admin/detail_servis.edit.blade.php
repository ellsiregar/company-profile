@extends('admin.layouts.app')

@section('title', 'Edit Detail Servis')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Edit Detail Servis</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.detail-servis.update', $detailservis->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- No Telepon Input -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                    value="{{ old('deskripsi', $detailservis->deskripsi) }}" required>
                                <div class="text-danger">
                                    @error('deskripsi')
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
