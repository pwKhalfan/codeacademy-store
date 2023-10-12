<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\OrderItem;
use Auth;

class OrderController extends Controller
{
    public $folder = 'orders';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['records'] = Order::get();
        
        return response()->json([
            'data' => $data['records']
        ]);
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

        $carts = Cart::where('user_id',1)->get();
        if($carts->count() == 0)
        {
            return "No products in your cart";
        }


        $record = new Order;
        $record->total_amount = 0;
        $record->status = 'unpaid';
        $record->user_id = 1;
        $record->save();

        foreach($carts as $cart)
        {
            $product = Product::findOrFail($cart->product_id);

            $orderItem = new OrderItem;
            $orderItem->unit_price = $product->price;
            $record->product_id = $cart->product_id;
            $record->quantity = $cart->quantity;
            $record->save();
        }
        // $data['records'] = Product::get();
        // return view($this->folder . '.index',$data);
        
        return response()->json([
            'data' => $record
        ]);
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
        $data['record'] = Order::findOrFail($id);
        
        return response()->json([
            'data' => $data['record']
        ]);
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
        $data['record'] = Order::findOrFail($id);
       
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
        $record = Order::findOrFail($id);
        $record->status = $request->status;
        $record->save();


        // $data['records'] = Product::get();
        // return view($this->folder . '.index',$data);
        return response()->json([
            'data' => $record
        ]);
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
        $data['record'] = Order::findOrFail($id)->delete();
       
               
        return response()->json([
            'data' => 'deleted successfully'
        ]);
        return view($this->folder . '.index',$data);
    }
}
