@extends('admin.layouts.app')

@section('title', 'Edit Contact')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Edit Contact</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.contact.update', $contact->id_contact) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- No Telepon Input -->
                            <div class="mb-3">
                                <label for="no_tlpn" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="no_tlpn" name="no_tlpn"
                                    value="{{ old('no_tlpn', $contact->no_tlpn) }}" required>
                                <div class="text-danger">
                                    @error('no_tlpn')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $contact->email) }}" required>
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <!-- Lokasi Input -->
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi (Serlok/Share Location)</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi"
                                    value="{{ old('lokasi', $contact->lokasi) }}"
                                    placeholder="Masukkan alamat atau URL lokasi" required>
                                <div class="text-danger">
                                    @error('lokasi')
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
