<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);

        return view('posts.index', compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request, Product $product)
    {

        Product::create($request->all());

        // $request->validate([

        //     'id',

        //     'nama' => 'required',

        //     'harga' => 'required',

        //     'category' => 'required',

        //     'subjek' => 'required',

        //     'alas' => 'required',

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        // ]);

        // // $input = $request->all();

        // if ($image = $request->file('image')) {

        //     $destinationPath = 'image/';

        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

        //     $image->move($destinationPath, $profileImage);

        //     $input['image'] = "$profileImage";
        // }

        // // Product::create($input);
        // Product::create($request->all());
        // dd($request);
        return redirect('/post/create');
    }

    public function show(Product $product)

    {   
        // dd($product);

        return view('posts.show', compact('product'));
    }

    public function edit(Product $product)

    {

        return view('posts.edit', compact('product'));
    }

    public function destroy(Product $product)

    {

        $product->delete();



        return redirect();
    }
}
