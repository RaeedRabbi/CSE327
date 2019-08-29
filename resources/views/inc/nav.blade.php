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
                                            <ul>
                                                @foreach ($categories as $category)
                                                <li><a href="category-banner-full-width.html">{{$category->name}}<span class="tip tip-hot">Hot!</span></a></li>
                                                @endforeach
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
                            <li><a href="{{route('productmanager.index')}}"> Products List </a></li>
                            <li><a href="{{route('productmanager.create')}}"> Add Product </a></li>
                        </ul>
                    </li>
                    @endif
                    @endauth
                </ul>
            </nav>
        </div><!-- End .header-bottom -->
    </div><!-- End .header-bottom -->