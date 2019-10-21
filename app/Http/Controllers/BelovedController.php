<?php

namespace alzca\Http\Controllers;

use alzca\Beloved;
use Illuminate\Http\Request;

class BelovedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beloveds = Beloved::all();
        if ($beloveds->count() > 0) {
            return view('beloved.index', compact('beloveds'));
        }
        return view('beloved.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beloved.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beloved = new Beloved();

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $beloved->avatar = $name;
            $file->move(public_path().'/img/', $name);
        }
        $beloved->name = $request->input('name');
        $beloved->lastname = $request->input('lastname');
        $beloved->address = $request->input('address');
        $beloved->contact_name = $request->input('contact_name');
        $beloved->contact_phone = $request->input('contact_phone');
        $beloved->phase = $request->input('phase');
        $beloved->description = $request->input('description');
        $beloved->save();

        return redirect()->route('beloved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \alzca\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function show(Beloved $beloved)
    {
        return view('beloved.show', compact('beloved'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \alzca\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function edit(Beloved $beloved)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \alzca\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beloved $beloved)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \alzca\Beloved  $beloved
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beloved $beloved)
    {
        //
    }
}
