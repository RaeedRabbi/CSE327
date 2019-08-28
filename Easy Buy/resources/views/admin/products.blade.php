@extends('layouts.page')
@section('content')

<main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-1">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        @include('inc.message')
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table-container">
                        @if($products->count()>0)
                        <table class="table table-cart">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="product-col">Product</th>
                                    
                                    <th scope="col">SKU</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Sub-Category</th>
                                    
                                    <th scope="col">Details</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discounted Price</th>
                                    <th scope="qty-col">Qty</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($products as $product)
                                <tr>
                                    <td scope="row">{{ $product->id }}</td>
                                    <td scope="col">
                                        <figure class="product-image-container">
                                            <a href="/shop/{{$product->id}}" class="product-image">
                                                <img src="{{asset('images/products/product-'.$product->id.'.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <h2 class="product-title">
                                            <a href="/shop/{{$product->id}}">{{$product->name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $product->sku }}</td>
                                    <td>{{ $product->categories()->value('name')}}</td>
                                    <td>{{ $product->sub_category_id }}</td>
                                    <td>{{$product->product_details}}</td>
                                    <td>{{$product->product_description	}}</td>
                                    <td>{{$product->present_price}}</td>
                                    <td>{{$product->discounted_price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->updated_at	}}</td>
                                    
                                    <td>

                                        
                                        
                                            
                                            <a href="#" title="Edit product" class="btn-edit center"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                            
                                    </td>
                                    <td>       
                                            <form action="/admin/productmanager/{{$product->id}}" method="post" class="center">
                                                @method('DELETE')
                                                @csrf
                                                <button class="close" type="submit">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </form>
                                            
                                        </div><!-- End .float-right -->
                                    </td>
                            
                                    
                                    
                                </tr>

                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td colspan="4" class="clearfix">
                                        <div class="float-left">
                                            <a href="/shop" class="btn btn-outline-secondary">Continue Shopping</a>
                                        </div><!-- End .float-left -->

                                        <div class="float-right">
                                            <form action="/cart" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-outline-secondary btn-clear-cart" type="submit">
                                                    <span>Clear Shopping Cart</span>
                                                </button>
                                            </form>
                                        </div><!-- End .float-right -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        @else
                            <table>
                            <h4>Your Cart is Empty</h4>

                            <tfoot>
                                <tr>
                                    <td colspan="4" class="clearfix">
                                        <div class="float-left">
                                            <a href="/shop" class="btn btn-outline-secondary">Continue Shopping</a>
                                        </div><!-- End .float-left -->
                                    </td>
                                </tr>
                            </tfoot>

                            </table>
                        @endif
                    </div><!-- End .cart-table-container -->
                    
                    <div class="cart-discount">
                        <h4>Apply Discount Code</h4>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                                </div>
                            </div><!-- End .input-group -->
                        </form>
                    </div><!-- End .cart-discount -->
                </div><!-- End .col-lg-8 -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->
@endsection