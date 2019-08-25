@extends('layouts.page')
@section('content')
@include('inc.message')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row row-sm">
            @foreach ($products as $product )
                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="/shop/{{$product->id}}" class="product-image">
                                <img src={{asset('images/products/product-'.$product->id.'.jpg')}} alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                            <span class="product-label label-hot">Hot</span>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:90%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="/shop/{{$product->id}}">{{$product->name}}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">{{$product->price}}</span>
                            </div><!-- End .price-box -->
                            <form action="/cart/{{$product->id}}/add"  method="POST">
                                @csrf
                                <div class="product-action">
                                <a href="/wishlist/{{$product->id}}/store" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>  
                                <button type="submit" class="paction add-cart" title="Add to Cart" value="">
                                    <span>Add to Cart</span>
                                </button>
                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                                </div><!-- End .product-action -->
                            </form>
                        </div><!-- End .product-details -->
                    </div><!-- End .product -->
                </div><!-- End .col-xl-3 -->
            @endforeach
        </div><!-- End .row -->

        <nav class="toolbox toolbox-pagination">
            <div class="pagination">
                {{$products->links()}}
            </div>
        </nav>
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->
@endsection