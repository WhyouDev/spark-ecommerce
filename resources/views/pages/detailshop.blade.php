@extends('index')
@section('judul_nama','Detail Shop')
    
@section('content')
    
            <div class="container"></div>
            <div class="product-section container">
                <div>
                    <div class="product-section-image">
                        <img src="" alt="product" class="active" id="currentImage">
                    </div>
                    <div class="product-section-images">
                        <div class="product-section-thumbnail selected">
                            <img src="" alt="product">
                        </div>
                        <div class="product-section-thumbnail">
                            <img src="" alt="product">
                        </div>
                        <div class="product-section-thumbnail">
                            <img src="" alt="product">
                        </div>
                        <div class="product-section-thumbnail">
                            <img src="" alt="product">
                        </div>
                    </div>
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
            </div>
@endsection