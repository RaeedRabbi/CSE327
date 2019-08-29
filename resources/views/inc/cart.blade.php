<div class="dropdown cart-dropdown">
    <a href="/cart" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        @if (Session::has('cart'))
        <span class="cart-count">{{Session::get('cart')->numOfItems()}}</span> 
        @endif
        
    </a>    
    <div class="dropdown-menu" >
        <div class="dropdownmenu-wrapper">
            <div class="dropdown-cart-header">
                <span></span>
                <a href="/cart">View Cart</a>
            </div><!-- End .dropdown-cart-header -->
            <div class="dropdown-cart-products">
                @if (Session::has('cart'))
                    @foreach (Session::get('cart')->getitems() as $item)
                    <div class="product">
                            <div class="product-details">
                                <h4 class="product-title">
                                    <a href="product.html">{{$item->getItem()['name']}}</a>
                                </h4>
        
                                <span class="cart-product-info">
                                    <span class="cart-product-qty">{{$item->getQty()}}</span>
                                    x ${{$item->getPrice()}}
                                </span>
                            </div><!-- End .product-details -->
        
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src={{asset('images/products/product-'.$item->getItem()['id'].'.jpg')}} alt="product">
                                </a>
                               
                                <form action="/cart/{{$item->getItem()['id']}}/delete" method="post" class="btn-remove">
                                    @method('DELETE')
                                    @csrf
                                    <button class="close" type="submit" class="icon-cancel">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </form>
                            </figure>
                        </div><!-- End .product -->
                    @endforeach
                    @endif
                
                
            </div><!-- End .cart-product -->

            <div class="dropdown-cart-total">
                <span>Total</span>
                <span class="cart-total-price">{{Session::has('cart') ? Session::get('cart')->totalPrice() : '0'}}</span>
            </div><!-- End .dropdown-cart-total -->

            <div class="dropdown-cart-action">
                <a href="checkout-shipping.html" class="btn btn-block">Checkout</a>
            </div><!-- End .dropdown-cart-total -->
            </div><!-- End .dropdownmenu-wrapper -->
        </div><!-- End .dropdown-menu -->
        
    </div><!-- End .dropdown -->
 