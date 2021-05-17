<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dresses = Dress::all();
        // $data = [
        //     'dresses'=> $dresses
        // ];
        return view('dresses.index', compact('dresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_dress = new Dress();

        $request->validate([
            'name'=>'required|unique:dresses|max:255',
            'color'=>'required|max:20',
            'size'=>'required|max:4',
            'description'=>'required',
            'price'=>'required|numeric|max:5000',
            'season'=>'required',
            'img_path'=>'required'
        ]);

        $new_dress->fill($data);

        /* $new_dress->name = $data['name'];
        $new_dress->color = $data['color'];
        $new_dress->size = $data['size'];
        $new_dress->price = $data['price'];
        $new_dress->description = $data['description'];
        $new_dress->img_path = $data['img_path']; */

        $new_dress->save();
        return redirect()->route('dresses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {
        if($dress) {
            return view('dresses.show', compact('dress'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        return view('dresses.edit', compact('dress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {
        $data = $request->all();
        $dress->update($data);
        return redirect()->route('dresses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        $dress->delete();
        return redirect()->route('dresses.index');
    }
}
