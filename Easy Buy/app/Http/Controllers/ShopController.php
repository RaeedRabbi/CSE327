<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Review;
use Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //returns 18 products per page
    public function index()
    {
        $products=Product::inRandomOrder()->paginate(18);
        return view('pages.shop.index')->with('products',$products);
    }

    
    //showing a single product
    public function show($id)
    {
        $product=Product::find($id);
        $mightAlsoLike=Product::where('id', '!=', $id)->mightAlsoLike()->get();
        $featuredProducts=Product::whereNotIn('id', $mightAlsoLike)->featuredProduct()->get();
        $comments=$product->reviews()->pluck('comment');
        return view('pages.shop.product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
            'featuredProducts' => $featuredProducts,
            'comments' => $comments
        ]);
    }

    //review storing
    public function storeReview(Request $request, $id)
    {
        //validation
        $this->validate($request, [
            'ratings' => 'required',
            'review' => 'required'
        ]);
        
        //checking if a review exists
        $checkers=Product::find($id)->reviews()->pluck('user_id');
        foreach($checkers as $checker)
        {
            if($checker==Auth::user()->id)
            {
                return redirect()->back()->with('error', 'Already exist a review of yours');
            }
        }
        
        //inserting review
        $review= new Review;
        $review->product_id=$id;
        $review->user_id=Auth::user()->id;
        $review->comment= $request->input('review');
        if($request->input('ratings') =='1')
        {
            $review->rating = 1;
        }
        else if($request->input('ratings') =='2')
        {
            $review->rating = 2;
        }
        else if($request->input('ratings') =='3')
        {
            $review->rating = 3;
        }
        else if($request->input('ratings') =='4')
        {
            $review->rating = 4;
        }
        else if($request->input('ratings') =='5')
        {
            $review->rating = 5;
        }
        $review->save();

        return redirect()->back()->with('success', 'Review is posted');
        
    }



} 
