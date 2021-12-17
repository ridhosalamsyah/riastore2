<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create()
    {
        $data = Category::latest()->get();
        $data2 = Type::latest()->get();

        return view('product.create',['category' => $data],['type' => $data2]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string',
            'title' => 'required|string',
            // 'image' => 'required|max:2048',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category_id'=> 'required',
            'type_id'=> 'required'
        ]);

        Product::create([
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'product' => $request->product,
            'title' => $request->title,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $request->image,

        ]);

        return redirect('/home')->with('status', 'product Baru Berhasil Dibuat!!');
    }
    public function edit($id)
    {
        $data = Product::find($id);
        $data2 = Category::latest()->get();
        $data3 = Type::latest()->get();

        return view('product.edit', ['product' => $data, 'category' => $data2, 'type' => $data3] );
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'product' => 'required|string',
            // 'title' => 'required|string',
            // 'category_id'=> 'required',

            'product' => 'required|string',
            'title' => 'required|string',
            // 'image' => 'required|max:2048',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category_id'=> 'required',
            'type_id'=> 'required'


        ]);

        // $product = product::find($id);
        // $product->user_id = 1;
        // $product->product = $request->product;
        // $product->save();

        Product::where('id', $id)->update([
            // 'product' => $request->product,
            // 'category_id' => $request->category_id,
            // 'title' => $request->title

            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'product' => $request->product,
            'title' => $request->title,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $request->image,

        ]);

        return redirect('/home')->with('status', 'product Berhasil Diubah!!');

    }
    public function delete($id)
    {
        // cara 1
        // $product = product::find($id);
        // $product->delete();

        // cara 2
        Product::destroy($id);

        return redirect('/home')->with('status', 'product Berhasil Dihapus!!');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', [
            'product' => $product
        ]);
    }

    public function blog()
    {
        return view('product.blog', ['product' => product::latest()->paginate(4)]);
    }

}
