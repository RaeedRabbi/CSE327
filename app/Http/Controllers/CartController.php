<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Product;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=User::find(Auth::user()->id)->cartProducts()->paginate(5);
        //$totalPrices=$products->pivot->total_price::with($products);
        return view('pages.cart')->with([
            'products' => $products,
 
            ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $now = Carbon::now()->toDateTimeString();
        $user_id=Auth::user()->id;
        //$id = request()->id;
        $product = Product::find($id);
        $price=$product->present_price;
        if($request->input('quantity'))
        {
            $quantity=$request->input('quantity');
        }
        else{
            $quantity=1;
        }
        $totalPrice = $price*$quantity;

        $products=User::find($user_id)->cartProducts()->pluck('product_id');
        //checking if already is in the list
        foreach($products as $product)
        {
            if($product == $id)
            {
                return redirect()->back()->with('error', 'Already exist in Cart');
            }  
        }
      
        $user= new User();
        $user->cartProducts()->attach($id,[
            'user_id' => $user_id,
            'quatity' => $quantity,
            'price' => $price,
            'total_price' => $totalPrice,
            'created_at' => $now
        ]);
        
        return redirect()->back()->with('success', 'Added to Cart');
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
        $now = Carbon::now()->toDateTimeString();
        $price = DB::table('carts')->find($id)->price;
        $quantity = $request->input('quantity');
        $subtotal = $quantity*$price;
        DB::table('carts')
            ->where('id', $id)
            ->update([
            'quatity' => $quantity,
            'total_price' => $subtotal,
            'updated_at' => $now
        ]);
        return redirect()->back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id=Auth::user()->id;
        $product=User::find($user_id)->cartProducts()->detach($id);
        return redirect()->back()->with('success', 'Removed from cart');
    }

    public function clearCart(){
        $user_id=Auth::user()->id;
        $products=User::find($user_id)->cartProducts()->detach();
        return redirect()->back()->with('success', 'All Removed from cart');
    }
}
