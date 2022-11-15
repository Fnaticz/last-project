<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::paginate(10);

        return view('posts.index', [
            'products' => Product::where('id', auth()->user()->id)->get()
        ])

            ->with('i', (request()->input('page', 1) - 1) * 10);

        // return Product::where('id', auth()->user()->id)->get();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Product::create($request->all());

        $request->validate([

            'id',

            'nama' => 'required',

            'harga' => 'required',

            'category' => 'required',

            'subjek' => 'required',

            'alas' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

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
        return redirect('/post/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($product);

        return view('posts.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'id',

            'nama' => 'required',

            'harga' => 'required',

            'category' => 'required',

            'subjek' => 'required',

            'alas' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

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

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product->delete();



        return redirect('/post');
    }
}
