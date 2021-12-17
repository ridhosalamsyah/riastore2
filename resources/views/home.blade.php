@extends('layouts.main')
@section('title', 'Dashboard')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Daftar Product<a href="{{ url('/create') }}" class="btn btn-primary btn-sm d-flex" style="float: right">New +</a>
                </div>
                <div class="card-body row">
                    @if (count($product) === 0 )
                        <span>Product tidak ditemukan</span>
                    @else
                        <table class="table table-striped">
                            <tr>
                                <th>Nama Product</th>
                                <th>Gambar</th>
                                <th>Detail</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Tipe</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($product as $item)
                                <tr>
                                        <td><a href="{{ url('/show/'.$item->id) }}" class="text-decoration-none">{{ $item->title }}</a></td>
                                        <td>{{ $item->image }}</td>
                                        <td>{{ $item->product }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->stock }}</td>
                                        <td>{{ $item->type->type }}</td>
                                        <td><a href="/category/find/{{ $item->category_id }}" class="text-decoration-none">{{ $item->category->category }}</a></td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/edit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            {{-- <a href="{{ url('/delete/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a> --}}
                                            <form action="{{ url('/delete/'.$item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        <td>

                                    </tr>
                                @endforeach
                            </table>
                            @endif
                            <div class="">
                                {{ $product->links() }}
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
