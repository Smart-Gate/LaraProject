<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catagory.index')->with('catagories',Catagory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this ->validate($request,[
            'name' =>'required'
        ]);
        //  dd($request->all());
        $catagory = new Catagory;
        $catagory->name=$request->name;
        $catagory->save();
        return redirect()->back();


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagory =  Catagory::find($id);
        return view('catagory.edit')->with('catagory',$catagory);

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
        $catagory =  Catagory::find($id);
        $catagory->name = $request->name;
        $catagory->save();
        return redirect()->route('catagories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory =  Catagory::find($id);
        $catagory->delete();
        return redirect()->route('catagories');
    }
}
