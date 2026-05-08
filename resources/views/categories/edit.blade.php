@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <form action="{{ route('categories.update', $category->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Menu Category</label>

                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $category->name) }}">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Description</label>

                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description', $category->description) }}</textarea>

                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Status</label>

                        <select name="status" class="form-control @error('status') is-invalid @enderror">

                            <option value="">-- Choose Status --</option>

                            <option value="Available"
                                {{ old('status', $category->status) == 'Available' ? 'selected' : '' }}>
                                Available
                            </option>

                            <option value="Unavailable"
                                {{ old('status', $category->status) == 'Unavailable' ? 'selected' : '' }}>
                                Unavailable
                            </option>

                        </select>

                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-danger">
                        Update
                    </button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                        Back
                    </a>

                </form>

            </div>
        </div>

    </div>
@endsection
