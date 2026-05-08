@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <form action="{{ route('menus.index') }}" method="GET" class="mb-3">

                    <div class="row">

                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Search menu..."
                                value="{{ request('search') }}">
                        </div>

                        <div class="col-md-4">
                            <select name="category" class="form-control">

                                <option value="">-- Filter Category --</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('category') == $category->id ? 'selected' : '' }}>

                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>
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
                            <th>Category</th>
                            <th>Menu Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($menus as $menu)
                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $menu->category->name }}</td>

                                <td>{{ $menu->name }}</td>

                                <td>Rp {{ number_format($menu->price) }}</td>

                                <td>{{ $menu->stock }}</td>

                                <td>{{ $menu->description }}</td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

                {{ $menus->links('pagination::bootstrap-5') }}

            </div>
        </div>

    </div>
@endsection
