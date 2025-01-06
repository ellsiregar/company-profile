@extends('admin.layouts.app')

@section('title', 'Contacts')

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
                        @if ($contacts->isEmpty())
                            <a href="{{ route('admin.contact.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                        @endif
                        <table class="table text-nowrap align-middle mb-0" id="contactsTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Lokasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
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
                                                class="btn btn-danger btn-sm">Delete</a>
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
                $('#contactsTable').DataTable();
            });
        </script>

    @endsection
