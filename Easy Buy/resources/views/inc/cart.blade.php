<div class="dropdown cart-dropdown">
    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        <span class="cart-count">{{Session::has('cartSession') ? Session::get('cartSession')->cartProducts() : 'nai'}}</span>
    </a>    
    @auth
    <div class="dropdown-menu" >
        <div class="dropdownmenu-wrapper">
            <div class="dropdown-cart-header">
                <span></span>
                <a href="cart.html">View Cart</a>
            </div><!-- End .dropdown-cart-header -->
            <div class="dropdown-cart-products">
                <div class="product">
                    <div class="product-details">
                        <h4 class="product-title">
                            <a href="product.html">Woman Ring</a>
                        </h4>

                        <span class="cart-product-info">
                            <span class="cart-product-qty">1</span>
                            x $99.00
                        </span>
                    </div><!-- End .product-details -->

                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src={{asset('images/products/cart/product-1.jpg')}} alt="product">
                        </a>
                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                    </figure>
                </div><!-- End .product -->
            </div><!-- End .cart-product -->

            <div class="dropdown-cart-total">
                <span>Total</span>
                <span class="cart-total-price">$134.00</span>
            </div><!-- End .dropdown-cart-total -->

            <div class="dropdown-cart-action">
                <a href="checkout-shipping.html" class="btn btn-block">Checkout</a>
            </div><!-- End .dropdown-cart-total -->
            </div><!-- End .dropdownmenu-wrapper -->
        </div><!-- End .dropdown-menu -->
        @endauth
        
    </div><!-- End .dropdown -->