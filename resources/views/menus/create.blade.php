@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <form action="{{ route('menus.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label>Category</label>

                        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">

                            <option value="">-- Choose Category --</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>

                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>

                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Menu Name</label>

                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Price</label>

                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                            value="{{ old('price') }}">

                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Stock</label>

                        <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"
                            value="{{ old('stock') }}">

                        @error('stock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Description</label>

                        <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-danger">
                        Save
                    </button>
                    <a href="{{ route('menus.index') }}" class="btn btn-secondary">
                        Back
                    </a>

                </form>

            </div>
        </div>

    </div>
@endsection
