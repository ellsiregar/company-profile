@extends('Admin.layouts.app')

@section('title', 'menu')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lisfera Cofffe</h5>
                <a href="{{route('admin.menu.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0" id="menu">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Foto</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($menus as $menu)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$menu->nama_menu}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $menu->foto) }}" alt="" height="30">
                                </td>
                                <td class="text-center">
                                    <a href="{{route('admin.menu.edit', $menu->id_menu)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{route('admin.menu.delete', $menu->id_menu)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
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
        $('#menu').DataTable();
    });
</script>

@endsection
