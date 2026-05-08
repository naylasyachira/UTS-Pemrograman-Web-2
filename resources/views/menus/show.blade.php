@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <a href="{{ route('menus.index') }}" class="btn btn-secondary mb-3">
            Back
        </a>

        <div class="card shadow border-0">
            <div class="card-body">

                <h4 class="mb-3">Menu Information</h4>

                <table class="table">

                    <tr>
                        <th width="200">Category</th>
                        <td>{{ $menu->category->name }}</td>
                    </tr>

                    <tr>
                        <th>Menu Name</th>
                        <td>{{ $menu->name }}</td>
                    </tr>

                    <tr>
                        <th>Price</th>
                        <td>Rp {{ number_format($menu->price) }}</td>
                    </tr>

                    <tr>
                        <th>Stock</th>
                        <td>{{ $menu->stock }}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{ $menu->description }}</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>
@endsection
