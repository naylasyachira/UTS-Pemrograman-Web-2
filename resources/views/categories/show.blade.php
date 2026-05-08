@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-3">
            Back
        </a>

        <div class="card shadow border-0">
            <div class="card-body">

                <h4 class="mb-3">Category Information</h4>

                <table class="table">

                    <tr>
                        <th width="200">Menu Category</th>
                        <td>{{ $category->name }}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{ $category->description }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ $category->status }}</td>
                    </tr>

                </table>

                <h4 class="mt-5 mb-3">Menu List</h4>

                <table class="table table-bordered">

                    <thead class="table-danger">
                        <tr>
                            <th>No</th>
                            <th>Menu Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($category->menus as $menu)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $menu->name }}</td>

                                <td>Rp {{ number_format($menu->price) }}</td>

                                <td>{{ $menu->stock }}</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    Data menu belum tersedia
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>

    </div>
@endsection
