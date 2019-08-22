<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Product;
use App\Item;
use App\cartSession;
use Session;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$products=User::find(Auth::user()->id)->cartProducts()->paginate(5);
        //$totalPrices=$products->pivot->total_price::with($products);
        return view('pages.cart')->with([
            'products' => $products,
 
            ]);*/
        $cart= new cartSession;
        if(Session::has('cart'))
        {
            $cart=(Session::get('cart'));
            $items=$cart->getitems();
            $products=$items;
            $numOfItems=$cart->numOfItems();
            return view('pages.cart')->with([
                'products' => $products,
                'numOfItems' => $numOfItems
                ]);
        }
        else
        {
            $cart=null;
            dd($cart);
        }
        
        
        //$request->session()->flush();
        //dd($products);
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        /*$now = Carbon::now()->toDateTimeString();
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
        
        return redirect()->back()->with('success', 'Added to Cart');*/
        $product = Product::find($id)->toArray();
        $price=$product['present_price'];
        if($request->input('quantity'))
        {
            $quantity=$request->input('quantity');
        }
        else{
            $quantity=1;
        }
        $item=new Item($quantity, $price, $product);
        
        $cart=new cartSession;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        $cart->add($item);
        //dd($cart->totalPrice());
        
        $request->session()->put('cart',$cart);
        
        return redirect()->back()->with('success', 'Added to Cart');

    }


}
