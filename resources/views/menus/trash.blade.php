@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <a href="{{ route('menus.index') }}" class="btn btn-secondary mb-3">
            Back
        </a>

        <div class="card shadow border-0">
            <div class="card-body">

                <table class="table table-bordered">

                    <thead class="table-danger">
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Menu Name</th>
                            <th>Rating</th>
                            <th>Deleted At</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($menus as $menu)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $menu->category->name }}</td>

                                <td>{{ $menu->name }}</td>

                                <td>{{ $menu->rating }}</td>

                                <td>{{ $menu->deleted_at }}</td>

                                <td>
                                    <form action="{{ route('menus.restore', $menu->id) }}" method="POST">

                                        @csrf
                                        @method('PUT')

                                        <button type="submit" class="btn btn-success btn-sm">
                                            Restore
                                        </button>

                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    Tidak ada data di trash
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

                {{ $menus->links() }}

            </div>
        </div>

    </div>
@endsection
