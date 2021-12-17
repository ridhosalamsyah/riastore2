<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Category::latest()->get();
        return view('category.category', ['category' => $data]);
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string'
        ]);

        Category::create([
            'category' => $request->category
        ]);

        return redirect('/category')->with('status', 'Category Baru Berhasil Dibuat!!');
    }
    public function edit($id)
    {
        $data = Category::find($id);

        return view('category.edit', ['category' => $data]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string'
        ]);

        Category::where('id', $id)->update([
            'category' => $request->category
        ]);

        return redirect('/category')->with('status', 'Category Berhasil Diubah!!');

    }
    public function delete($id)
    {
        Category::destroy($id);

        return redirect('/category')->with('status', 'Category Berhasil Dihapus!!');
    }
    public function find($id)
    {
        $data = Product::where('category_id', $id)->latest()->paginate(4);
        $category = Product::firstWhere('category_id', $id);
        if(isset($category->category->category)){

            $title = $category->category->category;
            return view('category.find', [
                'title' => $title,
                'product' => $data
            ]);
        }else{
            return view('category.find', [
                'title' => 'product not found',
                'product' => $data
            ]);
        }


    }

}
