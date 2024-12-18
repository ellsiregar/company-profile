@extends('Admin.layouts.app')

@section('title', ' company')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Company</h5>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0" id="tiket_diskon">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Fasilitas</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($companys as $company)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $company->nama_perusahaan }}</td>
                                <td>{{ $company->judul }}</td>
                                <td>{{ $company->deskripsi }}</td>
                                <td>{{ $company->fasilitas }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#company').DataTable();
    });
</script>

@endsection
