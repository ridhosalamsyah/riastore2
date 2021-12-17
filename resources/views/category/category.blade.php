@extends('layouts.main')
@section('title', 'Dashboard Categcory')


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
                    Daftar Category<a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm d-flex" style="float: right">New +</a>
                </div>
                <div class="card-body row">
                    @if (count($category) === 0 )
                        <span>Category tidak ditemukan</span>
                    @else
                        <table class="table table-striped">
                            <tr>
                                <th>Nama Category</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($category as $item)
                                <tr>
                                        <td><a href="{{ url("/category/find/$item->id") }}">{{ $item->category }}</a></td>
                                        <td class="d-flex ">
                                            <a href="{{ url('/category/edit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            {{-- <a href="{{ url('/delete/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a> --}}
                                            <form action="{{ url('/category/delete/'.$item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm ">Hapus</button>
                                            </form>
                                        <td>

                                    </tr>
                                    @endforeach
                                </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
