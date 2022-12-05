<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::where('user_id', auth()->user()->id)->get();

        return view('tournament.index', compact('tournaments'))


            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournament.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'id',

            'first_team' => 'required',

            'second_team' => 'required',

            'first_team_score' => 'required',

            'second_team_score' => 'required',

            'image_first' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

            'image_second' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $request['user_id'] = auth()->user()->id;

        $input = $request->all();
        

        if ($image = $request->file('image')) {

            $destinationPath = 'img/tournament/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
        }

        // Tournament::create($input);
        dd($input);

        return redirect('tournament/create')->with('message','Data Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
