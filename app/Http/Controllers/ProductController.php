<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Product;
use App\Category;
use App\Color;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'product_name' => 'required',
            'sku' => 'required',
            'product_details' => 'required',
            'product_category' => 'required',
            'available_quantity' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            
        ]);
        $now = Carbon::now()->toDateTimeString();
        $product=new Product;
        $product->name = $request->input('product_name');
        $product->sku = $request->input('sku');
        $category = $request->input('product_category');
        $category = Category::where('name','=',$category)->first();
        $product->category_id = $category->id;
        $product->quantity = $request->input('available_quantity');
        $product->product_details = $request->input('product_details');
        $product->product_description = $request->input('product_description');
        $product->present_price = $request->input('price');
        $product->discounted_price = $request->input('discounted_price');
        if($request->input('color1')){
            $color1=new Color;
            $color1->color = $request->input('color1');
            $color1->product()->associate($color1);
        }
        if($request->input('color2')){
            $color2=new Color;
            $color2->color = $request->input('color2');
            $color2->product()->associate($color2);
        }
        if($request->input('color2')){
            $color3=new Color;
            $color3->color = $request->input('color3');
            $color3->product()->associate($color3);
        }
        if($request->input('color4')){
            $color4=new Color;
            $color4->color = $request->input('color4');
            $color4->product()->associate($color4);
        }
        $product->created_at = $now;

        if( $product->save())
        {
            return redirect('admin/productmanager')->with('success', 'Product Uploaded');
        }
        return redirect('admin/productmanager')->with('error', 'Error in uplaoding!!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Product::find($id)->delete()){

            return redirect()->back()->with('success', 'Product is been deleted');
        }
        return redirect()->back()->with('error', 'error occured while deleting');
    }
}
