@extends('layouts.main')
@section('title', "$product->title")

@section('content')
    <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">

            <h1 class="mb-3">{{ $product->title }}</h1>

            {{-- <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> --}}

            {{-- <p>By : {{ $product->user->name }}</p> --}}
            <p>Category : <a href="/category/find/{{ $product->category_id }}" class="text-decoration-none">{{ $product->category->category }}</a></p>
            <div>
                <img src="{{ asset("uploads/products/".$product->image) }}" alt="" width="" height="">
            </div>
            <p>
                tipe : {{ $product->type->type }}
            </p>
            <p>
                harga {{ $product->price }}
            </p>
            <p>
                stock : {{ $product->stock }}
            </p>



            {{-- <img src="https://picsum.photos/seed/{{ $post->category->name }}/1200/400" alt="{{ $post->category->name }}" class="img-fluid"> --}}

                {{-- <product class="my-3 fs-5   ">
                    <p>{{  $product->product  }}</p>
                </product> --}}
                <div>

                    <a href="/home"class=" text-decoration-none">Back</a>
                </div>
        </div>
    </div>
</div>
@endsection



