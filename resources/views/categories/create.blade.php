@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2 class="mb-4 text-danger fw-bold">{{ $title }}</h2>

        <div class="card shadow border-0">
            <div class="card-body">

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>Menu Category</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description') }}</textarea>

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
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-danger">
                        Save
                    </button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                        Back
                    </a>

                </form>

            </div>
        </div>

    </div>
@endsection
