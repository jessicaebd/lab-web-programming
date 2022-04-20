<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircrafts = Aircraft::all();
        return view('aircrafts.index', compact('aircrafts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aircrafts.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:4',
                'type' => 'required',
                'price' => 'required|between:1,100000000',
                'registration' => 'required',
            ]
        );

        $image_path = $request->file('image')->store('public/' . $request->type);
        $arr = explode("/", $image_path, 3);

        $aircraft = new Aircraft();
        $aircraft->id = Str::uuid();
        $aircraft->name = $request->name;
        $aircraft->type = $request->type;
        $aircraft->price = $request->price;
        $aircraft->registration = $request->registration;
        $aircraft->image_path = $arr[2];

        $aircraft->save();
        return redirect()->route('home');
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
    public function edit($reg)
    {
        $aircraft = Aircraft::where('registration', $reg)->first();
        return view('aircrafts.edit', compact('aircraft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reg)
    {
        $request->validate(
            [
                'name' => 'required|min:4',
                'price' => 'required|between:1,100000000',
                'registration' => 'required',
            ]
        );

        // $image_path = $request->file('image')->store('public/' . $request->type);
        // $arr = explode("/", $image_path, 3);

        $aircraft = Aircraft::where('registration', $reg)->first();
        // $aircraft = new Aircraft();
        $aircraft->name = $request->name;
        $aircraft->price = $request->price;
        $aircraft->registration = $request->registration;

        $aircraft->save();
        return redirect()->route('home');
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
