@extends('layouts.main')
@section('title', 'Blog')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (isset($product))

        @endif
        <h1>All product</h1>
        <div class="col-md-12 mt-3 d-flex">
            @foreach ($product as $item)


            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><a href="/show/{{ $item->id }}" class="text-decoration-none">{{ $item->title }}</a></h5>
                  <h6 class="card-subtitle mb-2 text-muted">By: {{ $item->user->name }}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Category: <a href="/category/find/{{ $item->category_id }}" class="text-decoration-none">{{ $item->category->category }}</a></h6>
                  <p class="card-text">{{ Str::words($item->product, 20, '...') }}</p>
                  <button class="btn btn-primary"><a href="/show/{{ $item->id }}" class="card-link text-decoration-none text-white">Read More</a></button>
                </div>
              </div>
            @endforeach
        </div>
    </div>
    <div>
        {{ $product->links() }}
    </div>
</div>
@endsection
