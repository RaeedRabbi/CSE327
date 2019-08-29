<div class="header-bottom sticky-header">
    <div class="container">
        <nav class="main-nav">
            <ul class="menu sf-arrows">
                <li class="active"><a href="/">Home</a></li>
                <li>
                    <a href="category.html" class="sf-with-ul">Categories</a>
                    <div class="megamenu megamenu-fixed-width">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="menu-title">
                                                <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                            </div>
                                            <ul>
                                                <li><a href="category-banner-full-width.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                                <li><a href="category.html">Boxed Image Banner</a></li>
                                                <li><a href="category.html">Left Sidebar</a></li>
                                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                                <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                                <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="menu-title">
                                                <a href="#">Variations 2</a>
                                            </div>
                                            <ul>
                                                <li><a href="#">Product List Item Types</a></li>
                                                <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                                <li><a href="category-3col.html">3 Columns Products</a></li>
                                                <li><a href="category.html">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                                <li><a href="category-8col.html">8 Columns Products</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-8 -->
                                <div class="col-lg-4">
                                    <div class="banner">
                                        <a href="#">
                                            <img src={{asset('images/menu-banner-2.jpg')}} alt="Menu banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-lg-4 -->
                            </div>
                        </div><!-- End .megamenu -->
                    </li>
                    <li class="megamenu-container">
                        <a href="/shop">Shop</a>
                    </li>
                    <li><a href="#" class="sf-with-ul">Features</a>
                        <ul>
                            <li><a href="#">Header Types</a></li>
                            <li><a href="#">Footer Types</a></li>
                        </ul>
                    </li>
                    <li class="float-right"><a href="/blog">Blog</a></li>
                    <li class="float-right"><a href="/contact">Contact</a></li>
                    <li class="float-right"><a href="/about">About Us</a></li>
                    @auth
                    @if (Auth::user()->id_user_role == 1)
                    <li>
                        <a href="/admin/productmanager" class="sf-with-ul">Admin Panel</a>
                        <ul>
                            <li><a href="/admin/productmanager"> Products List </a></li>
                            <li><a href="/admin/productmanager/create"> Add Product </a></li>
                        </ul>
                    </li>
                    @endif
                    @endauth
                </ul>
            </nav>
        </div><!-- End .header-bottom -->
    </div><!-- End .header-bottom -->