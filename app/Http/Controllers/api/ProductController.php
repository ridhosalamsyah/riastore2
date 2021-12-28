<?php
namespace App\Http\Controllers\api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::inRandomOrder()->limit(10)->get();

        return response()->json([
            'status' => 'sukses',
            'data' => $data
        ],200); // 200 HTTP_OK
    }

    public function store(Request $request)
    {
        $data = new Product;
        $data->category_id = $request->category_id;
        $data->type_id = $request->type_id;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->product = $request->product;

        $data->save();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ],200);
    }
    public function update(Request $request, Product $product)
    {
        $product = Product::find($product->id);
        $product->category_id = $request->category_id;
        $product->type_id = $request->type_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->product = $request->product;

        $product->update();

        return response()->json([
            'status' => 'success',
            'data' => $product
        ],200);

    }
    // public function update(Request $request, Santri $santri)
    // {
    //     $santri = Santri::find($santri->id);
    //     $santri->nama = $request->nama;
    //     $santri->jurusan = $request->jurusan;
    //     $santri->alamat = $request->alamat;

    //     $santri->update();

    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $santri
    //     ],200);

    // }
    public function show(Product $data)
    {
        $data = Product::find($data->id);

        return response()->json([
            'status' => 'success',
            'data' => $data
        ],200);

    }

    public function type($id)
    {
        $data = Product::where('type_id', $id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ],200);

    }
    public function category($id)
    {
        $data = Product::where('category_id', $id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ],200);

    }

    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'product berhasil di hapus!'
        ],200);

    }

}
