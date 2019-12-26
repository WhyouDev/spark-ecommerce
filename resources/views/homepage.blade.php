@extends('index')
@section('judul_halaman','HomePage')
    

@section('content')
    
<div class="hero container">
    <div class="hero-copy">
        <h1>Ecommerce</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, ullam!</p>
        <div class="hero-buttons">
            <a href="#" class="button button-black">GitHub</a>
            {{-- <a href="#" class="button button-black"></a> --}}
        </div>
    </div> <!-- end hero-copy -->

    <div class="hero-image">
        <img src="img/lenovo-yoga.png" alt="hero image">
    </div>
</div> <!-- end hero -->

<div class="featured-section">
    <div class="container">
        <h1 class="text-center">Ecommerce Shop</h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

        <div class="text-center button-container">
            <a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a>
        </div>


        <div class="products text-center">
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="#" class="button">View more products</a>
        </div>

    </div> <!-- end container -->

</div> <!-- end featured-section -->

<div class="blog-section">
    <div class="container">
        <h1 class="text-center">From Our Blog</h1>

        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

        <div class="blog-posts">
            <div class="blog-post" id="blog1">
                <a href="#"><img src="img/make money.jpg" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="img/forblog2.jpg" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="img/forblog3.jpg" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
            </div>
        </div> <!-- end blog-posts -->
    </div> <!-- end container -->
</div> <!-- end blog-section -->

@endsection