<div class="sidebar-overlay"></div>
<div class="sidebar-toggle"><i class="icon-sliders"></i></div>
<aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
    <div class="sidebar-wrapper">
        <div class="widget widget-brand">
            <a href="#">
                <img src={{asset('images/product-brand.png')}} alt="brand name">
            </a>
        </div><!-- End .widget -->

        <div class="widget widget-info">
            <ul>
                <li>
                    <i class="icon-shipping"></i>
                    <h4>FREE<br>SHIPPING</h4>
                </li>
                <li>
                    <i class="icon-us-dollar"></i>
                    <h4>100% MONEY<br>BACK GUARANTEE</h4>
                </li>
                <li>
                    <i class="icon-online-support"></i>
                    <h4>ONLINE<br>SUPPORT 24/7</h4>
                </li>
            </ul>
        </div><!-- End .widget -->

        <div class="widget widget-banner">
            <div class="banner banner-image">
                <a href="#">
                    <img src={{asset('images/banners/banner-sidebar.jpg')}} alt="Banner Desc">
                </a>
            </div><!-- End .banner -->
        </div><!-- End .widget -->

        <div class="widget widget-featured">
            <h3 class="widget-title">Featured Products</h3>
            
            <div class="widget-body">
                <div class="owl-carousel widget-featured-products">
                        @foreach ($featuredProducts as $product)
                    <div class="featured-col">
                        <div class="product product-sm">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{asset('images/products/small/product-'.$product->id.'.jpg')}}" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">{{$product->name}}</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">{{$product->presentPrice()}}</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                    </div><!-- End .featured-col -->
                    @endforeach
                </div><!-- End .widget-featured-slider -->
            </div><!-- End .widget-body -->
        </div><!-- End .widget -->
    </div>
</aside><!-- End .col-md-3 -->