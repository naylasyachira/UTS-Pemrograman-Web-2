@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('categories.create') }}" class="btn btn-danger mb-3">
            + Add Category
        </a>
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="{{ route('categories.index') }}" method="GET" class="mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Search category..."
                                value="{{ request('search') }}">
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-danger">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                <table class="table table-hover align-middle">
                    <thead class="table-danger">
                        <tr>
                            <th>No</th>
                            <th>Menu Category</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->status }}</td>
                                <td>
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                                        Detail
                                    </a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $categories->links('pagination::bootstrap-5') }}

            </div>
        </div>

    </div>
@endsection
