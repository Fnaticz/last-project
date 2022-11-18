<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {

        // return Product::where('user_id', auth()->user()->id)->get();
        $products = Product::where('user_id', auth()->user()->id)->get();

        return view('posts.index', compact('products'))


            ->with('i', (request()->input('page', 1) - 1) * 10);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::all();

        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request, Product $product)
    {

        // Product::create($request->all());

        $request->validate([

            'id',

            'nama' => 'required',

            'harga' => 'required',

            'category_id' => 'required',

            'subjek' => 'required',

            'alas' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        $request['user_id'] = auth()->user()->id;

        $input = $request->all();
        

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
        }

        Product::create($input);
        // Product::create($request->all());
        // dd($request);
        return redirect('/post/create')->with('message','Data Uploaded Successfully');
    }

    public function show(Product $product)

    {   
        // dd($product);

        return view('posts.show', compact('product', 'playtimes'));
    }

    public function edit(Product $product)

    {
        // return view('posts.edit', [
        //     // 'product' => $product,
        //     'categories' => Category::all()
        // ]);

        $categories = Category::all();

        return view('posts.edit', compact('product', 'categories'));

        // return view('posts.edit', compact('product'));
    }

    public function update(Request $request, Product $product)

    {
        
        $request->validate([

            'id',

            'nama' => 'required',

            'harga' => 'required',

            'category_id',

            'subjek' => 'required',

            'alas' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $request['user_id'] = auth()->user()->id;

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);

            }

        $product->update($input);
            // dd($input);

        return redirect('/post')->with('message','Data Updated Successfully');

    }

    public function destroy(Product $product)

    {

        $product->delete();



        return redirect('/post')->with('message1','Data Deleted Successfully');
    }
}
