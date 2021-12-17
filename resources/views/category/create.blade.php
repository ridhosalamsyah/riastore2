@extends('layouts.main')
@section('title', 'Create Category')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/category') }}" class="btn btn-danger btn-sm">Kembali</a>
                </div>
                <div class="card-body row">
                    <form action="{{ url('/category/store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"" id="category" placeholder="category">
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
