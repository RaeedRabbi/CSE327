    <!-- featured products -->
    <div class="featured-section">
        <div class="container">
            <h2 class="carousel-title">You Might Also Like</h2>
            <div class="featured-products owl-carousel owl-theme owl-dots-top">
                @foreach ($mightAlsoLike as $fProduct)
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="/shop/{{$fProduct->id}}" class="product-image">
                                <img src={{asset('images/products/product-'.$fProduct->id.'.jpg')}} alt="product">
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
                            <a href="/shop/{{$fProduct->id}}">{{$fProduct->name}}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">{{$fProduct->present_price}}</span>
                            </div><!-- End .price-box -->

                            <div class="product-action">
                                <a href="/wishlist/{{$fProduct->id}}/store" class="paction add-wishlist" title="Add to Wishlist">
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
                @endforeach    
            </div><!-- End .featured-proucts -->
        </div><!-- End .container -->
    </div><!-- End .featured-section -->
    
</main><!-- End .main -->