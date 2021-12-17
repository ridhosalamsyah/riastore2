<?php
namespace App\Http\Controllers\api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->get();
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
    public function update(Request $request, Product $data)
    {
        $data = Product::find($data->id);
        $data->category_id = $request->category_id;
        $data->type_id = $request->type_id;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->product = $request->product;

        $data->update();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ],200);

    }
}
