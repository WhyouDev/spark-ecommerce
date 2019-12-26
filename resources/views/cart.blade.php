@extends('index')
@section('judul_halaman', 'Cart')
    
@section('content')


<div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>

            <span><a href="/pages/shop"> Shop</a></span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span><a href="/pages/detailshop">Desktop Ultra</a> </span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span><a href="#">Shopping Cart</a></span>
        </div>
        <div>
            
            <form action="https://laravelecommerceexample.ca/search" method="GET" class="search-form">
                <i class="fa fa-search search-icon"></i>
                <input type="text" name="query" id="query" value="" class="search-box" placeholder="Search for product" required>
            </form>
        </div>
    </div>
</div>
<!-- end breadcrumbs -->
<div class="cart-section container">
    <div>
        <h2>1 item(s) in Shopping Cart</h2>
        <div class="cart-table">
            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#">
                        <img src="/img/desktop-1.jpg" alt="item" class="cart-table-img">
                    </a>
                    <div class="cart-item-details">
                        <div class="cart-table-item">
                            <a href="#">Desktop Ultra</a>
                        </div>
                        <div class="cart-table-description">24 inch, 1 TB SSD, 32GB RAM</div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form method="POST">
                            <input type="hidden">
                            <input type="hidden">
                            <button type="submit" class="cart-options" href="#">Remove</button>
                        </form>
                        <form method="POST">
                            <input type="hidden" name="_token">
                            {{-- <button type="submit" class="cart-options">Save for Later</button> --}}
                        </form>
                    </div>
                    <div>
                        <select class="quantity" data-productQuantity="10">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div>$2000</div>
                </div>
            </div>
            <!-- end cart-table-row -->
        </div>
        <!-- end cart-table -->
        
        <div class="cart-totals">
            <div class="cart-totals-left">Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
        </div>
            <div class="cart-totals-right">
                <div>
                    Subtotal <br>
                    Tax (10%)<br>
                    <span class="cart-totals-total">Total</span>
                </div>
                <div class="cart-totals-subtotal">
                    $2000<br>
                    $200 <br>
                    <span class="cart-totals-total">$2200</span>
                </div>
            </div>
        </div>
        <!-- end cart-totals -->
        <div class="cart-buttons">
            <a href ="#" class="button">Continue Shopping</a>
            <a href ="#" class="button-primary">Proceed to Checkout</a>
        </div>
        <h3>You have no items Saved for Later.</h3>
    </div>
</div>
<!-- end cart-section -->
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
    {{-- @component('component.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    @endcomponent
    <div class="cart-section container">
        <div></div>
    </div> --}}
@endsection

