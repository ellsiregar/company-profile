@extends('admin.layouts.app')

@section('title', 'Reviews')

@section('content')

    <div class="row g-4">
        <div class="col-12">
            <h4 class="mb-4">Reviews</h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="reviews">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-0">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $reviews)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $reviews->nama }}</td>
                                        <td>{{ $reviews->email }}</td>
                                        <td>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $reviews->rating)
                                                    <i class="bi bi-star-fill" style="color: yellow"></i>
                                                    <!-- Bintang penuh -->
                                                @else
                                                    <i class="bi bi-star"></i> <!-- Bintang kosong -->
                                                @endif
                                            @endfor
                                        </td>
                                        <td>{{ $reviews->pesan }}</td>

                                        <td>
                                            <a href="{{ route('admin.reviews.delete', $reviews->id_review) }}"
                                                onclick="return confirm('Yakin ingin hapus data?')"
                                                class="btn btn-danger btn-sm">Hapus</a>
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
            $('#reviews').DataTable();
        });
    </script>

@endsection
