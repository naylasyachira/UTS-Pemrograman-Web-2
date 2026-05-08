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

            </div>
        </div>

    </div>
@endsection
