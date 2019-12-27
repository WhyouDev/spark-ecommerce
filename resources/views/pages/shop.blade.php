@extends('index')
@section('judul_halaman','Shop')
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
        <div>
            <form action="" method="GET" class="search-form">
                <i class="fa fa-search search-icon"></i>
                <input type="text" name="query" id="query" value="" class="search-box" placeholder="Search for product" required>
            </form>
        </div>
    </div>
</div>
<!-- end breadcrumbs -->
<div class="container"></div>
<div class="products-section container">
    <div class="sidebar">
        <h3>By Category</h3>
        <ul>
<<<<<<< HEAD
            {{-- For catagory list --}}

            {{-- <li class="">
                <a href="">Laptops</a>
=======
            @foreach($categorieslist as $category)
            <li class="">
                <a href="">{{ $category->categories_name }}</a>
>>>>>>> 169b6d84bc19478d79fc24154d6e905d3124fee4
            </li>
            @endforeach
            <!-- <li class="">
                <a href="">Desktops</a>
            </li>
            <li class="">
                <a href="">Mobile Phones</a>
            </li>
            <li class="">
                <a href="">Tablets</a>
            </li>
            <li class="">
                <a href=""></a>
            </li>
            <li class="">
                <a href="">Digital Cameras</a>
            </li>
            <li class="">
                <a href="">Appliances</a>
<<<<<<< HEAD
            </li> --}}
=======
            </li> -->
>>>>>>> 169b6d84bc19478d79fc24154d6e905d3124fee4
        </ul>
    </div>
    <!-- end sidebar -->
    <div>
        
        <div class="products-header">
            <h1 class="stylish-heading">Featured</h1>
            {{-- start price --}}
            <div>
            <strong>Price: </strong>
                <a href=""> Low to High </a>
                <a href=""><strong>|</strong></a>
                <a href=""> High to Low </a>
            </div>
            {{-- end price --}}
        </div>
        <div class="products text-center">
            <div class="product">
                <a href="/pages/detailshop">
                    <img src="/img/desktop-1.jpg" alt="product">
                </a>
                <a href="#">
                    <div class="product-name">Desktop Ultra</div>
                </a>
                <div class="product-price">$2245.13</div>
            </div>
            {{-- <div class="product">
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
            <div class="product">
                <a href="#">
                    <img src="/img/phone-9.jpg" alt="product">
                </a>
                <a href="#">
                    <div class="product-name">Laptop 12</div>
                </a>
                <div class="product-price">$2059.86</div>
            </div>
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
            <div class="product">
                <a href="#">
                    <img src="/img/phone-9.jpg" alt="product">
                </a>
                <a href="#">
                    <div class="product-name">Laptop 12</div>
                </a>
                <div class="product-price">$2059.86</div>
            </div>
            <div class="product">
                <a href="#">
                    <img src="/img/phone-9.jpg" alt="product">
                </a>
                <a href="#">
                    <div class="product-name">Laptop 12</div>
                </a>
                <div class="product-price">$2059.86</div>
            </div> --}}
            
        </div>
        <!-- end products -->
        <div class="spacer"></div>
    </div>
</div>
@endsection

{{-- <nav>
            <ul class="pagination">
                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/shop?page=2">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/shop?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
            </ul>
        </nav> --}}