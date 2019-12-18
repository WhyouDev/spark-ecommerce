<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="jQM7YmkJuHxrA9qizTaCZ6klCF2e0SIFof13fpKx">

        <title>Spark Ecommerce</title>

        <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/responsive.css">

            <link rel="stylesheet" href="/css/algolia.css">
    </head>


            <body class="">
                <header>
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo"><a href="/">Ecommerce</a></div>
                        <ul>
                        <li>
                            <a href="/shop">Shop</a>
                        </li>
                        <li>
                            <a href="/About">About</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            <div class="top-nav-right">
                    <ul>
                        <li><a href="/register">Sign Up</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/cart">Cart</a></li>    
                    </ul>
                </div>
            </div> <!-- end top-nav -->
        </header>

    
    <div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
            <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
        </div>
        <div>
            <div class="aa-input-container" id="aa-input-container">
    {{-- <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search with algolia..." name="search"
        autocomplete="off" /> --}}
    {{-- <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.,736.,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
    </svg> --}}
</div>

<form action="/search" method="GET" class="search-form">
    <i class="fa fa-search search-icon"></i>
    <input type="text" name="query" id="query" value="" class="search-box" placeholder="Search for product" required>
</form>
        </div>
    </div>
</div> <!-- end breadcrumbs -->

    <div class="container">
        
            </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li class=""><a href="#">Laptops</a></li>
                <li class=""><a href="#">Desktops</a></li>
                <li class=""><a href="#">Mobile Phones</a></li>
                <li class=""><a href="#">Tablets</a></li>
                <li class=""><a href="#">TVs</a></li>
                <li class=""><a href="#">Digital Cameras</a></li>
                <li class=""><a href="#">Appliances</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">Featured</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="">Low to High</a> |
                    <a href="">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                                    <div class="product">
                        <a href=""><img src="#" alt="product"></a>
                        <a href=""><div class="product-name">Laptop 1</div></a>
                        <div class="product-price">$1563.72</div>
                    </div>
                                    <div class="product">
                        <a href=""><img src="#" alt="product"></a>
                        <a href=""><div class="product-name">Laptop 12</div></a>
                        <div class="product-price">$1969.12</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/laptop-22"><img src="#" alt="product"></a>
                        <a href="/shop/laptop-22"><div class="product-name">Laptop 22</div></a>
                        <div class="product-price">$1516.95</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/desktop-1"><img src="/storage/products/dummy/desktop-1.jpg" alt="product"></a>
                        <a href="/shop/desktop-1"><div class="product-name">Desktop 1</div></a>
                        <div class="product-price">$4173.37</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/phone-"><img src="/storage/products/dummy/phone-.jpg" alt="product"></a>
                        <a href="/shop/phone-"><div class="product-name">Phone </div></a>
                        <div class="product-price">$834.54</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/phone-4"><img src="/storage/products/dummy/phone-4.jpg" alt="product"></a>
                        <a href="/shop/phone-4"><div class="product-name">Phone 4</div></a>
                        <div class="product-price">$989.09</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/phone-8"><img src="/storage/products/dummy/phone-8.jpg" alt="product"></a>
                        <a href="/shop/phone-8"><div class="product-name">Phone 8</div></a>
                        <div class="product-price">$857.04</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/tablet-3"><img src="/storage/products/dummy/tablet-3.jpg" alt="product"></a>
                        <a href="/shop/tablet-3"><div class="product-name">Tablet 3</div></a>
                        <div class="product-price">$1193.79</div>
                    </div>
                                    <div class="product">
                        <a href="/shop/tablet-5"><img src="" alt="product"></a>
                        <a href="/shop/tablet-5"><div class="product-name">Tablet 5</div></a>
                        <div class="product-price">$1263.18</div>
                    </div>
                            </div> <!-- end products -->

                    <div class="spacer"></div>
                    <nav>
                <ul class="pagination">
                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="/shop?page="></a></li>
                    <li class="page-item">
                    <a class="page-link" href="" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <footer>
    <div class="footer-content container">
        
                <ul>
                    <li>Follow Me:</li>
                    <li><a href=""> <i class="fa Follow Me:"></i></a></li>
                    <li><a href=""lass="fa fa-globe"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    <li><a href=""<i class="fa fa-github"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                </ul>

    </div> <!-- end footer-content -->
</footer>

        <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->

    {{-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script> --}}
    {{-- <script src="/js/algolia.js"></script> --}}

</body>
</html>
