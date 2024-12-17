@extends('admin.layouts.app')

@section('title', 'Team')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h4 class="mb-4">Team</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('admin.team.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                        <table class="table" id="photo">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-0">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team )
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $team->nama}}</td>
                                    <td>
                                        <img src="{{ asset('storage/'. $team->foto_team) }}" alt="" height="30">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.team.edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('admin.team.delete') }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#team').DataTable();
    });
</script>

@endsection
