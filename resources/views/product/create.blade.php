@extends('layouts.main')
@section('title', 'Create product')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">

            
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/home') }}" class="btn btn-danger btn-sm">Kembali</a>
                </div>
                <div class="card-body row">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"" id="title" placeholder="Title">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="product" class="form-label">Details</label>
                            <textarea class="form-control @error('product') is-invalid @enderror" id="product" rows="3" name="product"></textarea>
                            @error('product')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="price">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" id="stock" placeholder="stock">
                            @error('stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select mb-3" name="category_id" id="category_id">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->category }}</option>
                            @endforeach
                        </select>
                        <label for="type_id" class="form-label">Tipe</label>
                        <select class="form-select mb-3" name="type_id" id="type_id">
                            @foreach ($type as $item)
                                <option value="{{ $item->id }}">{{ $item->type }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
