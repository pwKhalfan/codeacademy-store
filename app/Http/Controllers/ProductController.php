<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class ProductController extends Controller
{
    public $folder = 'products';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['records'] = Product::get();
        return view($this->folder . '.index',$data);
        // return view("$this->folder index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view($this->folder . '.create');
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

        $record = new Product;
        $record->name = $request->name;
        $record->name_ar = $request->name_ar;
        $record->price = $request->price;
        $record->user_id = Auth::user()->id;
        $record->status = 'inactive';
        $record->save();


        // $data['records'] = Product::get();
        // return view($this->folder . '.index',$data);
        
        return $this->show($record->id);
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
        $data['record'] = Product::findOrFail($id);
        return view($this->folder . '.show',$data);
       
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
        $data['record'] = Product::findOrFail($id);
       
        return view($this->folder . '.edit',$data);
       
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
        $record = Product::findOrFail($id);
        
        $record->name = $request->name;
        $record->name_ar = $request->name_ar;
        $record->price = $request->price;
        $record->user_id = Auth::user()->id;
        $record->status = 'inactive';
        $record->save();


        // $data['records'] = Product::get();
        // return view($this->folder . '.index',$data);
        
        return $this->show($id);
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
        $data['record'] = Product::findOrFail($id)->delete();
        return view($this->folder . '.index',$data);
    }
}
