<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
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
        $cart= new cartSession;
        if(Session::has('cart'))
        {
            $cart=(Session::get('cart'));
            $items=$cart->getitems();
            $totalPrice=$cart->totalPrice();
            $products=$items;
            $numOfItems=$cart->numOfItems();
            
            return view('pages.cart')->with([
                'products' => $products,
                'numOfItems' => $numOfItems,
                
                ]);
        }
        else
        {
            $products=null;
            $numOfItems = 0;
            return view('pages.cart')->with([
                'products' => $products,
                'numOfItems' => $numOfItems
                ]);
        }
        

        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      
        $product = Product::find($id)->toArray();
        $id=Product::find($id,['id']);
        $stock=$product['quantity'];
       

        if($request->input('quantity'))
        {
            $quantity=$request->input('quantity');
        }
        else{
            $quantity=1;
        }
        $price=$product['present_price'];
        $newitem=new Item($id, $quantity, $price, $product);
        
        $cart=new cartSession;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        
        $items=$cart->getitems();
        if($stock >= $quantity){
            for($i = 0; $i < $cart->numOfItems(); $i++)
            {   
                if (array_key_exists($i, $items)) {
                    if($items[$i]->getId()==$newitem->getId()){
                        return redirect()->back()->with('error', 'exists');
                    }
                }else{
                    continue;
                }
            }
              
        }else{
            return redirect()->back()->with('error', 'out of stock');
        }
        
        $cart->add($newitem,$id);   
        $request->session()->put('cart',$cart);
        
        return redirect()->back()->with('success', 'Added to Cart');

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
    
        $product=Product::find($id)->toArray();
        $id=Product::find($id,['id']);
        $stock=$product['quantity'];
        $quantity = $request->input('quantity');
        if($stock < $quantity)
        {
            return redirect()->back()->with('error', 'out of stock');
        }
        //dd($quantity);
        $cart=new cartSession;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        $cart->update($id, $quantity);
        
        $request->session()->put('cart',$cart);
        //dd($cart);
        return redirect()->back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $cart=new cartSession;
        $oldCart=Session::has('cart') ? Session::get('cart') : $cart;
        $cart=$oldCart;
        $product=Product::find($id)->toArray();
        $price=$product['present_price'];
        $items=$cart->getitems();
        
       
        for($i = 0; $i < $cart->numOfItems(); $i++)
        {
            
           
            if (array_key_exists($i, $items)) {
                if($items[$i]->getItem()==$product){
                    
                    array_splice($items, $i, 1);
                    $cart->numOfItems--;
                    break;
                }
            }else{
                dd("hellow");
                continue;
            }
            
        }

        if($cart->numOfItems==0){
            Session::forget('cart');
            return redirect()->back()->with('success', 'Cart is cleared');
        }

        $cart->setitems($items);
        $request->session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Product is been removed');
        
    }

   
    public function clearCart(Request $request){
        Session::forget('cart');
        return redirect()->back()->with('success', 'Cart cleared');
    }
}
