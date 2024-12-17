@extends('admin.layouts.app')

@section('title', 'contacts')

@section('content')
    <div class="col-lg-12">
        <div class="bg-light rounded h-100 p-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h4 class="mb-4">Contact</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('admin.contact.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                        <table class="table text-nowrap align-middle mb-0" id="events">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Lokasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($contacts as $contact)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact->no_tlpn }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->lokasi }}</td>
                                        <td>
                                            <a href="{{ route('admin.contact.edit', $contact->id_contact) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('admin.contact.delete', $contact->id_contact) }}"
                                                onclick="return confirm('Yakin Ingin Menghapus Data Tersebut')"
                                                class="btn btn-danger btn-sm">delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#events').DataTable();
            });
        </script>

    @endsection
