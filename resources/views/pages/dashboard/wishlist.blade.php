@extends('layouts.dashboard')
@section('dashboardContent')
@if($products->count()>0)
@foreach ($products as $product)

<div class="product product-list">
        <form action="/wishlist/{{$product->id}}/delete" method="post">
            @method('DELETE')
            @csrf
            <button class="close float-right" type="submit">
                <span aria-hidden="true">&times;</span>
            </button>
        </form>
      
    <figure class="product-image-container">
        <a href="/shop/{{$product->id}}" class="product-image">
            <img src={{asset('images/products/product-'.$product->id.'.jpg')}} alt="product">
        </a>
        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
        <span class="product-label label-sale">-20%</span>
        <span class="product-label label-hot">New</span>
        
    </figure>
    <div class="product-details">
        <h2 class="product-title">
            <a href="/shop/{{$product->id}}">{{$product->name}}</a>
        </h2>
        <div class="ratings-container">
            <div class="product-ratings">
                <span class="ratings" style="width:{{$product->rating()}}%"></span><!-- End .ratings -->
            </div><!-- End .product-ratings -->
        </div><!-- End .product-container -->
        <div class="product-desc">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. <a href="https://www.portotheme.com/html/porto_ecommerce/demo-9/prorduct.html">Learn More</a></p>
        </div><!-- End .product-desc -->
        <div class="price-box">
            <span class="old-price">{{$product->presentPrice()}}</span>
            <span class="product-price">{{$product->discountedPrice()}}</span>
        </div><!-- End .price-box -->

        <div class="product-action">
            <a href="product.html" class="paction add-cart" title="Add to Cart">
                <span>Add to Cart</span>
            </a>

            <a href="#" class="paction add-compare" title="Add to Compare">
                <span>Add to Compare</span>
            </a>
        </div><!-- End .product-action -->
    </div><!-- End .product-details -->
</div><!-- End .product -->
@endforeach
{{$products->links()}}
@else
<h5 class="h5">Your wishlist is empty</h5>
@endif


@endsection