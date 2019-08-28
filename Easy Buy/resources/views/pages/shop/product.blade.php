@extends('layouts.page')
@section('content')
@include('inc.message')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </div><!-- End .container -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product-single-container product-single-default">
                    <div class="row">

                        <div class="col-lg-7 col-md-6 product-single-gallery">

                            <div class="product-slider-container product-item">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}" data-zoom-image="{{asset('images/products/zoom/product-'.$product->id.'-big.jpg')}}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}" data-zoom-image="{{asset('images/products/zoom/product-'.$product->id.'-big.jpg')}}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}" data-zoom-image="{{asset('images/products/zoom/product-'.$product->id.'-big.jpg')}}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}" data-zoom-image="{{asset('images/products/zoom/product-'.$product->id.'-big.jpg')}}"/>
                                    </div>
                                </div>

                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{asset('images/products/zoom/product-'.$product->id.'.jpg')}}"/>
                                </div>
                            </div>
                        </div><!-- End .col-lg-7 -->

                        <div class="col-lg-5 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">{{$product->name}}</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:{{$product->rating()}}%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->

                                    <a href="#product-reviews-content" class="rating-link">( {{$product->reviewCount()}} Reviews )</a>
                                </div><!-- End .product-container -->
                                  
                                <div class="price-box">
                                    <span class="old-price">{{$product->presentPrice()}}</span>
                                    <span class="product-price">{{$product->discountedPrice()}}</span>
                                </div><!-- End .price-box -->

                                <div class="product-desc">
                                    <p>{{$product->product_details}}</p>
                                </div><!-- End .product-desc -->
                                
                                <!-- product color -->
                                <div class="product-filters-container">
                                    <div class="product-single-filter">
                                        @if ($product->colors()->count()>0)
                                            <label>Colors:</label>
                                            <ul class="config-swatch-list">
                                            @foreach ($product->color() as $color)
                                                <li class="active">
                                                <a href="#" style="background-color:{{$color}}"></a>
                                                </li>
                                            @endforeach
                                            </ul>
                                        @endif
                                        
                                    </div><!-- End .product-single-filter -->
                                </div><!-- End .product-filters-container -->

                                <div class="product-action product-all-icons">
                                    <form action="/cart/{{$product->id}}/add" method="POST">
                                        @csrf
                                        <div class="product-single-qty">
                                            <input class="horizontal-quantity form-control" type="number" name="quantity">
                                        </div><!-- End .product-single-qty -->

                                        <button type="submit" class="paction add-cart" title="Add to Cart" value="">
                                            <span>Add to Cart</span>
                                        </button>
                                    </form>
                                    <a href="/wishlist/{{$product->id}}/store" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->

                                <div class="product-single-share">
                                    <label>Share:</label>
                                    <!-- www.addthis.com share plugin-->
                                    <div class="addthis_inline_share_toolbox">hello</div>
                                </div><!-- End .product single-share -->
                            </div><!-- End .product-single-details -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>{{$product->product_description}}</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <div class="product-tags-content">
                                <form action="#">
                                    <h4>Add Your Tags:</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" required>
                                        <input type="submit" class="btn btn-primary" value="Add Tags">
                                    </div><!-- End .form-group -->
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div><!-- End .product-tags-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <div class="collateral-box">
                                    @if($comments->count()>0)
                                        @foreach ($comments as $comment)
                                            <ul>
                                                <li>{{$comment}}</li>
                                            </ul>
                                        @endforeach
                                    @else
                                    <ul>
                                        <li>Be the first to review this product</li>
                                    </ul>
                                    @endif
                                </div><!-- End .collateral-box -->

                                <div class="add-product-review">
                                    <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                    <p>How do you rate this product? *</p>

                                    <form action="/shop/{{$product->id}}/review" method="POST">
                                        {{csrf_field()}}
                                        <table class="ratings-table">
                                            <thead>
                                                <tr>
                                                    <th>1 star</th>
                                                    <th>2 stars</th>
                                                    <th>3 stars</th>
                                                    <th>4 stars</th>
                                                    <th>5 stars</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>    
                                                    <td>
                                                        <input type="radio" name="ratings" id="1" value="1" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings" id="2" value="2" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings" id="3" value="3" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings" id="4" value="4" class="radio">
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="ratings" id="5" value="5" class="radio">
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                        
                                        
                                        <div class="form-group mb-2">
                                            <label>Review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" name="review" class="form-control form-control-sm"></textarea>
                                        </div><!-- End .form-group -->

                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                    </form>
                                </div><!-- End .add-product-review -->
                            </div><!-- End .product-reviews-content -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->
            </div><!-- End .col-lg-9 -->
            @include('inc.product.sidebar')<!-- product sidebar -->
        </div><!-- End .row -->
    </div><!-- End .container -->


@include('inc.product.mightAlsoLike')
@endsection