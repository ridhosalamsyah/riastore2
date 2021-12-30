<?php

namespace App\Http\Controllers\api;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {


        $data = Cart::where('user_id', Auth::id())->get();

        if (!$data->isEmpty())
        {
            $cart = Cart::where('user_id', Auth::id())->get();
            $totalQty = $cart->sum('quantity');
            $endPrice = $cart->sum('totalprice');

            return response()->json([
                'status' => 'sukses',
                'data' => $cart,
                'Jumlah Barang' => $totalQty,
                'Total Harga' => $endPrice,

            ],200); // 200 HTTP_OK
        }

        else {
            return response()->json([
                'status' => 'Gagal memuat Keranjang, Keranjang Kosong!!',
            ],400);
        }
    }

    public function addToCart(Request $request)
    {
        // $table->unsignedBigInteger('user_id')->nullable();
        // $table->unsignedBigInteger('product_id')->nullable();
        // $table->string('name')->nullable();
        // $table->integer('quantity')->nullable();
        // $table->integer('baseprice')->nullable();
        // $table->integer('totalprice')->nullable();

        $product = Product::find($request->product_id);

        $data = new Cart;
        if ($request->quantity <= $product->stock) {
            $data->user_id = Auth::id();
            $data->product_id = $product->id;
            $data->name = $product->title;
            $data->quantity = $request->quantity;
            $data->baseprice = $product->price;
            $data->totalprice = $request->quantity * $product->price;

            $data->save();

            return response()->json([
                'status' => 'success, barang berhasil ditambah ke keranjang',
                'data' => $data
            ],200);
        }
        else {
            return response()->json([
                'status' => 'Gagal menambahkan barang, permintaan melebihi stock',
            ],400);
        }

    }

    public function checkout()
    {


    }

    public function destroy(Cart $cart)
    {
        $cart = Cart::find($cart->id);
        $cart->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'cart berhasil di hapus!'
        ],200);

    }




}
