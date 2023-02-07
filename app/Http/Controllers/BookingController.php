<?php

namespace App\Http\Controllers;
use App\Models\Playtime;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::latest()->paginate(10);
        return view('posts.bookings', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create', [
            'playtimes' => Playtime::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        // $product_id=Input::get('product_id');
        $product_id = $request['product_id'];
        // $request['user_id'] = auth()->user()->id;
        $input = $request->all();
        
        dd($input);
        // Booking::create($input);
        return redirect('booking/create', compact('products'))->with('messagebok','Booking Terikirim !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        // $booking = Booking::find($id);

        $playtimes = Playtime::all();

        return view('bookings.show', compact('booking', 'playtimes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateOrder(array $params)
    {
        $order = $this->findOrderById($params['id']);

        $collection = collect($params)->except('_token');




        $order->update();



        return $order;
    }
    
    public function changeStatus(Request $request)

    {

        $user = User::find($request->user_id);

        $user->status = $request->status;

        $user->save();

  

        return response()->json(['success'=>'Status change successfully.']);

    }
}
