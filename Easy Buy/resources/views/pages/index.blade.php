@extends('layouts.page')
@section('content')
        <main class="main">
            <div class="home-slider-container">
                <div class="home-slider owl-carousel">
                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src={{asset('images/slider/slide-1.jpg')}}></div><!-- End .slide-bg -->
                        <div class="home-slide-content container">
                            <div class="row">
                                <div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
                                    <h4>Premium</h4>
                                    <h1>Headphones</h1>
                                    <h3>Only <strong>199 USD</strong></h3>
                                    <a href="category.html" class="btn btn-primary">Shop Now</a>
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->

                    <div class="home-slide">
                        <div class="slide-bg owl-lazy"  data-src={{asset('images/slider/slide-2.jpg')}}></div><!-- End .slide-bg -->
                        <div class="home-slide-content container">
                            <h4>Amazing</h4>
                            <h1>Micro Drones</h1>
                            <h3>Only <strong>399 USD</strong></h3>
                            <a href="category.html" class="btn btn-primary">Shop Now</a>
                        </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->
            </div><!-- End .home-slider-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Free shipping on all orders over $99.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>100% money back guarantee</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->

            <div class="home-product-tabs">
                <div class="container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="featured-products-tab" data-toggle="tab" href="#featured-products" role="tab" aria-controls="featured-products" aria-selected="true">Featured Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">Latest Products</a>
                        </li>
                    </ul>
                </div><!-- End .container -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                        <div class="container">
                            <div class="tab-products-carousel owl-carousel owl-theme">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-10.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Wireless Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-8.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-sale">-20%</span>
                                        <span class="product-label label-hot">New</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">G632 Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$60.00</span>
                                            <span class="product-price">$48.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-5.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Skullcanddy</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$850.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-4.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Phillips</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$299.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-3.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Optical Mouse</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$79.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                                
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-14.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Drone Standard</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$199.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .products-carousel -->
                        </div><!-- End .container -->
                    </div><!-- End .tab-pane -->
                    <div class="tab-pane fade" id="latest-products" role="tabpanel" aria-labelledby="latest-products-tab">
                        <div class="container">
                            <div class="tab-products-carousel owl-carousel owl-theme">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-5.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Skullcanddy</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$850.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-4.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Phillips</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$299.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-11.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Noise CT</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$79.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-10.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Wireless Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-9.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-sale">-20%</span>
                                        <span class="product-label label-hot">New</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Bluetooth Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$60.00</span>
                                            <span class="product-price">$48.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-7.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-sale">-20%</span>
                                        <span class="product-label label-hot">New</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Mobile Phone</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$60.00</span>
                                            <span class="product-price">$48.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-13.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-sale">-20%</span>
                                        <span class="product-label label-hot">New</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Mobile Devices</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$60.00</span>
                                            <span class="product-price">$48.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src={{asset('images/products/product-14.jpg')}} alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                        <span class="product-label label-sale">-20%</span>
                                        <span class="product-label label-hot">New</span>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">Drone Standard</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$60.00</span>
                                            <span class="product-price">$48.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>
                                            
                                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .products-carousel -->
                        </div><!-- End .container -->
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .home-product-tabs -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="icon-star"></i>

                            <div class="feature-box-content">
                                <h3>Dedicated Service</h3>
                                <p>Consult our specialists for help with an order, customization, or design advice</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Get in touch</a>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                    
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="icon-reply"></i>

                            <div class="feature-box-content">
                                <h3>Free returns</h3>
                                <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Return Policy</a>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="icon-paper-plane"></i>

                            <div class="feature-box-content">
                                <h3>international shipping</h3>
                                <p>Currently over 50 countries qualify for express international shipping.</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Learn More</a>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-1"></div><!-- margin -->

            <div class="promo-section" style="background-image: url({{asset('images/promo-bg.jpg')}})">
                <div class="container">
                    <h3>the perfect gift</h3>
                    <h4>Check off your list with our best gifts</h4>
                    <a href="#" class="btn btn-primary">Shop Now</a>
                </div><!-- End .container -->
            </div><!-- End .promo-section -->

            <div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/1.png')}} alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/2.png')}} alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/3.png')}} alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/4.png')}} alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/5.png')}} alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/4.png')}} alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src={{asset('images/logos/1.png')}} alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->

            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="product-column">
                            <h3 class="h4 title">Featured</h3>

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-1.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Ring</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$45.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-2.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Headphone</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$60.00</span>
                                        <span class="product-price">$45.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-3.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Shoes</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$50.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .product-column -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-6 col-lg-3">
                        <div class="product-column">
                            <h3 class="h4 title">New</h3>

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-1.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Ring</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$13.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-3.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Headphone</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$42.00</span>
                                        <span class="product-price">$27.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-2.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Shoes</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$35.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .product-column -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-6 col-lg-3">
                        <div class="product-column">
                            <h3 class="h4 title">Hot</h3>

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-4.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Ring</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$13.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-5.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Headphone</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$42.00</span>
                                        <span class="product-price">$27.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-6.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Shoes</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$35.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .product-column -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-6 col-lg-3">
                        <div class="product-column">
                            <h3 class="h4 title">Sale</h3>

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-7.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Ring</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$13.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-8.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Headphone</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$42.00</span>
                                        <span class="product-price">$27.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->

                            <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src={{asset('images/products/small/product-9.jpg')}} alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Shoes</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$35.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .product-column -->
                    </div><!-- End .col-lg-3 -->
                </div><!-- End .container -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

       @endsection