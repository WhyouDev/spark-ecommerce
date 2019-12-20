@extends('index')
@section('judul_nama','Detail Shop')
    
@section('content')
            <div class="breadcrumbs">
                <div class="breadcrumbs-container container">
                    <div>
                        <a href="/">Home</a>
                        <i class="fa fa-chevron-right breadcrumb-separator"></i>
                        <span><a href="/pages/shop"> Shop</a></span>
                        <i class="fa fa-chevron-right breadcrumb-separator"></i>
                        <span>Desktop 1</span>
                    </div>
                    <div>
                        <form action="/search" method="GET" class="search-form">
                            <i class="fa fa-search search-icon"></i>
                            <input type="text" name="query" id="query" value="" class="search-box" placeholder="Search for product" required>
                        </form>
                    </div>
                </div>
            </div>
    
            <div class="container"></div>
            <div class="product-section container">
                <div>
                    <div class="product-section-image">
                        <img src="/img/desktop-1.jpg" alt="product" class="active" id="currentImage">
                    </div>
                    
                    
                    {{-- <div class="product-section-images">
                        <div class="product-section-thumbnail selected">
                            <img src="/img/desktop-1.jpg" alt="product">
                        </div>
                        <div class="product-section-thumbnail">
                            <img src="/img/desktop-1.jpg" alt="product">
                        <div class="product-section-thumbnail">
                            <img src="/img/desktop-1.jpg" alt="product">
                        </div>
                        <div class="product-section-thumbnail">
                            <img src="/img/desktop-1.jpg" alt="product">
                        </div>
                    </div> --}}
                    
                </div>
                <div class="product-section-information">
                    <h1 class="product-section-title">Desktop 1</h1>
                    <div class="product-section-subtitle">25 inch, 3 TB SSD, 32GB RAM</div>
                    <div>
                        <div class="badge badge-success">In Stock</div>
                    </div>
                    <div class="product-section-price">$2949.66</div>
                    <p>Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!
                </p>
                    <p>&nbsp;</p>
                    {{-- <form action="" method="POST"> --}}
                        <input type="hidden" name="_token" value="DNUEG2fMwGbBiFpBwTnrhlZstVtzRtiPdjzuN2fc">
                        <button type="submit" class="button button-plain">Add to Cart</button>
                    </form>
                </div>
            </div>
            <!-- end product-section -->

            <div class="might-like-section">
                <div class="container">
                    <h2>You might also like...</h2>
                    <div class="might-like-grid">
                        <a href="/img/macbook-pro.png" class="might-like-product">
                            <img src="/img/camera-9.jpg" alt="product">
                            <div class="might-like-product-name">Camera 1</div>
                            <div class="might-like-product-price">$1424.72</div>
                        </a>
                        <a href="#" class="might-like-product">
                            <img src="/img/desktop-1.jpg" alt="product">
                            <div class="might-like-product-name">Desktop</div>
                            <div class="might-like-product-price">$2077.13</div>
                        </a>
                        <a href="#" class="might-like-product">
                            <img src="/img/macbook-pro.png" alt="product">
                            <div class="might-like-product-name">Laptop Hero</div>
                            <div class="might-like-product-price">$1878.96</div>
                        </a>
                        <a href="#" class="might-like-product">
                            <img src="/img/camera-9.jpg" alt="product">
                            <div class="might-like-product-name">Camera 2</div>
                            <div class="might-like-product-price">$2251.28</div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="might-like-section">
                <div class="container">
                    <h2>You might also like...</h2>
                    <div class="products text-center">
                        <div class="product">
                            <a href="#">
                                <img src="/img/desktop-1.jpg" alt="product">
                            </a>
                            <a href="#">
                                <div class="product-name">Laptop 1</div>
                            </a>
                            <div class="product-price">$2245.13</div>
                        </div>
                        <div class="product">
                            <a href="#">
                                <img src="/img/macbook-pro.png" alt="product">
                            </a>
                            <a href="#">
                                <div class="product-name">Laptop 12</div>
                            </a>
                            <div class="product-price">$2059.86</div>
                        </div>
                        <div class="product">
                            <a href="#">
                                <img src="/img/camera-9.jpg" alt="product">
                            </a>
                            <a href="#">
                                <div class="product-name">Laptop 12</div>
                            </a>
                            <div class="product-price">$2059.86</div>
                        </div>
                </div>
            </div> --}}
@endsection