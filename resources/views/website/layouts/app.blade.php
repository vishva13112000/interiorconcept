<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bigstore - Online Mega Store</title>
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon2323.ico?1626774181">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon2323.ico?1626774181">
    <link href="http://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/css/theme.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/css/font-awesome.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/stfeature/views/css/front.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/psblog/views/css/psblog.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/psblog/views/css/lightbox.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/js/jquery/ui/themes/base/minified/jquery-ui.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/js/jquery/plugins/fancybox/jquery.fancybox.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/cz_verticalmenu/views/css/cz_verticalmenu.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/cz_imageslider/views/css/flexslider.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/cz_categoryslider/views/css/cz_categoryslider.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/czproductsearch/views/css/czsearch.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/modules/czproductsearch/views/css/jquery.autocomplete_productsearch.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('asset/website/css/custom.css')}}" type="text/css" media="all">
</head>

<body id="index" class="lang-en country-de currency-eur layout-full-width page-index tax-display-enabled">

<main id="page">
    <header id="header">
        <div class="header-top">
            <div class="header_logo">
                <a href="index-2.html">
                    <img class="logo img-responsive" src="img/demo-store-logo-1626774181.jpg" alt="Bigstore - Online Mega Store">
                </a>
            </div>
            <div class="user-info js-dropdown dropdown">
                <span class="user-info-title expand-more _gray-darker" data-toggle="dropdown">
                    <span class="account_text"><a>My Account</a></span>
                </span>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="index6714.html?controller=my-account" title="Log in to your customer account" rel="nofollow" >
                            <span>Sign in</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="indexc94a.html?controller=authentication&amp;create_account=1"><span>Register</span></a>
                    </li>
                </ul>
            </div>
            <div class="head-compare">
                <a class="ap-btn-compare dropdown-item" href="index0171.html?fc=module&amp;module=stfeature&amp;controller=productscompare&amp;id_lang=1" title="Compare" rel="nofollow">
                    <i class="material-icons">&#xE863;</i>
                    <span>Compare</span>
                </a>
            </div>
            <div class="head-wishlist">
                <a class="ap-btn-wishlist dropdown-item" href="index5c68.html?fc=module&amp;module=stfeature&amp;controller=mywishlist&amp;id_lang=1" title="Wishlist" rel="nofollow">
                    <i class="material-icons">&#xE87E;</i>
                    <span>Wishlist</span>
                </a>
            </div>
            <div id="currency-selector">
                <div class="currency-selector dropdown js-dropdown">
	                <span class="expand-more _gray-darker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="currency-dropdown">
	                    <span class="currency">EUR</span>
		                <span class="expand-more dropdown-arrow"></span>
	                </span>
                    <ul class="dropdown-menu" aria-labelledby="currency-dropdown">
                        <li class="current" >
                            <a title="Euro" rel="nofollow" href="indexeb63.html?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=1" class="dropdown-item">EUR</a>
                        </li>
                        <li>
                            <a title="US Dollar" rel="nofollow" href="indexc55c.html?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=2" class="dropdown-item">USD</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="//demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=search">
                <span class="search_button"></span>
                <div class="search_toggle">
                    <form method="get" action="http://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=search">
                        <input type="hidden" name="controller" value="search">
                        <input type="text" name="s" value="" placeholder="Search here...">
                        <button type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
            <div id="cz_search_block_top" class="block exclusive cz_search_block_top">

                <form method="get" action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=productsearch" id="czsearchtopbox">
                    <input type="hidden" name="fc" value="module" />
                    <input type="hidden" name="module" value="czproductsearch" />
                    <input type="hidden" name="controller" value="productsearch" />

                    <div class="block_content clearfix">

                        <div class="product_search">
                            <div class="categoryList-wrapper">
                                <input id="czsearchtop-cate-id" name="cate" value="" type="hidden">
                                <a id="categoryDropList" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>All Categories</span>
                                    <i class="material-icons pull-xs-right">keyboard_arrow_down</i>
                                </a>
                                <div class="categoryLists dropdown-menu" aria-labelledby="categoryDropList">
                                    <a href="#" data-cate-id="" data-cate-name="All Categories" class="cateSingleItem active" >All Categories</a>
                                    <a href="#" data-cate-id="2" data-cate-name="Home" class="cateSingleItem" >Home</a>
                                    <a href="#" data-cate-id="3" data-cate-name="Fashion" class="cateSingleItem" >Fashion</a>
                                    <a href="#" data-cate-id="6" data-cate-name="Electronics" class="cateSingleItem" >Electronics</a>
                                    <a href="#" data-cate-id="9" data-cate-name="Cosmetics" class="cateSingleItem" >Cosmetics</a>
                                    <a href="#" data-cate-id="10" data-cate-name="Accessories" class="cateSingleItem" >Accessories</a>
                                    <a href="#" data-cate-id="11" data-cate-name="Jewellery" class="cateSingleItem" >Jewellery</a>
                                    <a href="#" data-cate-id="12" data-cate-name="Furniture" class="cateSingleItem" >Furniture</a>
                                    <a href="#" data-cate-id="13" data-cate-name="Featured" class="cateSingleItem" >Featured</a>
                                    <a href="#" data-cate-id="4" data-cate-name="Electronic Accessories" class="cateSingleItem" >Electronic Accessories</a>
                                    <a href="#" data-cate-id="30" data-cate-name="Anklet" class="cateSingleItem" >Anklet</a>
                                    <a href="#" data-cate-id="5" data-cate-name="Men &amp; Women&#039;s Fashion" class="cateSingleItem" >Men &amp; Women&#039;s Fashion</a>
                                    <a href="#" data-cate-id="31" data-cate-name="Barrette" class="cateSingleItem" >Barrette</a>
                                    <a href="#" data-cate-id="15" data-cate-name="Special For Kids Accessories" class="cateSingleItem" >Special For Kids Accessories</a>
                                    <a href="#" data-cate-id="32" data-cate-name="Belly chain" class="cateSingleItem" >Belly chain</a>
                                    <a href="#" data-cate-id="33" data-cate-name="Bracelet" class="cateSingleItem" >Bracelet</a>
                                    <a href="#" data-cate-id="16" data-cate-name="Phone &amp; Tablet" class="cateSingleItem" >Phone &amp; Tablet</a>
                                    <a href="#" data-cate-id="20" data-cate-name="Ethnic &amp; Casual Wear" class="cateSingleItem" >Ethnic &amp; Casual Wear</a>
                                    <a href="#" data-cate-id="24" data-cate-name="School Stationery" class="cateSingleItem" >School Stationery</a>
                                    <a href="#" data-cate-id="17" data-cate-name="Speaker &amp; Earphone" class="cateSingleItem" >Speaker &amp; Earphone</a>
                                    <a href="#" data-cate-id="21" data-cate-name="Jeans &amp; Shirts &amp; Tops" class="cateSingleItem" >Jeans &amp; Shirts &amp; Tops</a>
                                    <a href="#" data-cate-id="25" data-cate-name="KIds Clothes" class="cateSingleItem" >KIds Clothes</a>
                                    <a href="#" data-cate-id="18" data-cate-name="Laptop &amp; Computer" class="cateSingleItem" >Laptop &amp; Computer</a>
                                    <a href="#" data-cate-id="22" data-cate-name="Shoes &amp; Flip Flops" class="cateSingleItem" >Shoes &amp; Flip Flops</a>
                                    <a href="#" data-cate-id="26" data-cate-name="Baby Toys" class="cateSingleItem" >Baby Toys</a>
                                    <a href="#" data-cate-id="19" data-cate-name="Television &amp; Game" class="cateSingleItem" >Television &amp; Game</a>
                                    <a href="#" data-cate-id="23" data-cate-name="Other Accessories" class="cateSingleItem" >Other Accessories</a>
                                    <a href="#" data-cate-id="27" data-cate-name="School Bag" class="cateSingleItem" >School Bag</a>
                                </div>
                            </div>
                            <input class="search_query form-control grey" type="text" id="cz_search_query_top" name="search_query" value="" placeholder="Search here..." />
                        </div>

                        <button type="submit" id="cz_search_top_button" class="btn btn-default button button-small"><span>Search</span></button>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                var blocksearch_type = 'top';
            </script>
        </div>

        <div class="header-top-inner">
            <div class="text-xs-left mobile hidden-lg-up mobile-menu">
                <div class="menu-icon">
                    <div class="cat-title">Menu</div>
                </div>
                <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
                    <div class="mobile-menu-inner">
                        <div class="menu-icon">
                            <div class="cat-title">Menu</div>
                        </div>
                        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                        <div class="js-top-menu mobile" id="_mobile_main_menu"></div>
                    </div>
                </div>
            </div>

            <div class="menu horizontal-menu col-lg-12 js-top-menu position-static hidden-md-down" id="_desktop_main_menu">
                <ul class="top-menu  container" id="top-menu" data-depth="0">
                    <li class="link" id="lnk-home">
                        <a class="dropdown-item" href="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01" data-depth="0">Home</a>
                    </li>
                    <li class="cms-page" id="cms-page-4">
                        <a class="dropdown-item" href="indexac29.html?id_cms=4&amp;controller=cms&amp;id_lang=1" data-depth="0">About us</a>
                    </li>
                    <li class="cms-page" id="cms-page-1">
                        <a class="dropdown-item" href="indexab5b.html?id_cms=1&amp;controller=cms&amp;id_lang=1" data-depth="0">Delivery</a>
                    </li>
                    <li class="link" id="lnk-contact-us">
                        <a class="dropdown-item" href="index0684.html?controller=contact" data-depth="0">Contact Us</a>
                    </li>
                    <li class="link" id="lnk-blog">
                        <a class="dropdown-item" href="index44d7.html?fc=module&amp;module=psblog&amp;controller=list" data-depth="0">Blog</a>
                    </li>
                    <li class="category" id="category-13">
                        <a class="dropdown-item" href="indexd9ce.html?id_category=13&amp;controller=category&amp;id_lang=1" data-depth="0">Featured</a>
                    </li>
                </ul>
            </div>
            <div id="desktop_cart">
                <div class="blockcart cart-preview inactive" data-refresh-url="//demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?fc=module&amp;module=ps_shoppingcart&amp;controller=ajax&amp;id_lang=1">
                    <div class="header blockcart-header dropdown js-dropdown">
                        <a class="shopping-cart" rel="nofollow" href="indexb379.html?controller=cart&amp;action=show" >
                            <span class="hidden-sm-down cart-headding">My Cart</span>
                            <span class="mobile_count">0</span>
                            <span class="cart-products-count hidden-sm-down">(0 - <span class="value">€0.00</span>)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <aside id="notifications">
        <div class="container">
        </div>
    </aside>

    @yield('content')

    <footer id="footer">
        <div class="footer-before">
            <div class="container">
                <div id="block_newsletter" class="block_newsletter">
                    <div class="row">
                        <div class="newsletter-detail">
                            <h4 class="title"><span class="news1">Newsletter Signup</span></h4>
                            <span class="desc">Contrary to popular belief of loremIpsm Latin amet ltin from.</span>
                        </div>
                        <div class="block_content">
                            <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php#block_newsletter" method="post">
                                <div class="newsletter-form">
                                    <input
                                            class="btn btn-primary pull-xs-right hidden-xs-down"
                                            name="submitNewsletter"
                                            type="submit"
                                            value="Subscribe"
                                    >
                                    <input
                                            class="btn btn-primary pull-xs-right hidden-sm-up"
                                            name="submitNewsletter"
                                            type="submit"
                                            value="OK"
                                    >
                                    <div class="input-wrapper">
                                        <input
                                                name="email"
                                                type="text"
                                                value=""
                                                placeholder="Your email address"
                                        >
                                    </div>
                                    <input type="hidden" name="action" value="0">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="newsletter-message">
                                    <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="czservicecmsblock">
                    <div class="service_container">
                        <h4 class="title">Best Services</h4>
                        <div class="desc">We provide best and fast premium &amp; free service</div>
                        <div class="service-area">
                            <div class="service-fourth service1">
                                <div class="service-icon icon1"></div>
                                <div class="service-content">
                                    <div class="service-heading">Worldwide Shipping</div>
                                </div>
                            </div>
                            <div class="service-fourth service2">
                                <div class="service-icon icon2"></div>
                                <div class="service-content">
                                    <div class="service-heading">Money Back Guarentee</div>
                                </div>
                            </div>
                            <div class="service-fourth service3">
                                <div class="service-icon icon3"></div>
                                <div class="service-content">
                                    <div class="service-heading">Easy 30 Day Returns</div>
                                </div>
                            </div>
                            <div class="service-fourth service4">
                                <div class="service-icon icon4"></div>
                                <div class="service-content">
                                    <div class="service-heading">Member Discount</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="container">
                <div class="row footer">
                    <div class="block-contact col-md-4 links wrapper">
                        <h3 class="text-uppercase block-contact-title hidden-md-down"><a href="index11f6.html?controller=stores">Store Information</a></h3>
                        <div class="title clearfix hidden-md-up" data-target="#block-contact_list" data-toggle="collapse">
                            <span class="h3">Store Information</span>
                            <span class="pull-xs-right">
                           <span class="navbar-toggler collapse-icons">
                           <i class="fa-icon add"></i>
                           <i class="fa-icon remove"></i>
                           </span>
                           </span>
                        </div>
                        <ul id="block-contact_list" class="collapse">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Bigstore - Online Mega Store<br />507-Union Trade ipsum Doler Centre<br />France</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>000-000-0000</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>sales@yourcompany.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 links block">
                        <h3 class="h3 hidden-md-down">Products</h3>
                        <div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_36047" data-toggle="collapse">
                            <span class="">Products</span>
                            <span class="pull-xs-right">
                           <span class="navbar-toggler collapse-icons">
                           <i class="fa-icon add"></i>
                           <i class="fa-icon remove"></i>
                           </span>
                           </span>
                        </div>
                        <ul id="footer_sub_menu_36047" class="collapse block_content">
                            <li>
                                <a
                                        id="link-product-page-prices-drop-1"
                                        class="cms-page-link"
                                        href="indexc485.html?controller=prices-drop"
                                        title="Our special products">
                                    Prices drop
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-product-page-new-products-1"
                                        class="cms-page-link"
                                        href="index6237.html?controller=new-products"
                                        title="Our new products">
                                    New products
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-product-page-best-sales-1"
                                        class="cms-page-link"
                                        href="index7e4b.html?controller=best-sales"
                                        title="Our best sales">
                                    Best sales
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-static-page-contact-1"
                                        class="cms-page-link"
                                        href="index0684.html?controller=contact"
                                        title="Use our form to contact us">
                                    Contact us
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-static-page-sitemap-1"
                                        class="cms-page-link"
                                        href="indexcc05.html?controller=sitemap"
                                        title="Lost ? Find what your are looking for">
                                    Sitemap
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-static-page-stores-1"
                                        class="cms-page-link"
                                        href="index11f6.html?controller=stores"
                                        title="">
                                    Stores
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 links block">
                        <h3 class="h3 hidden-md-down">Our company</h3>
                        <div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_53805" data-toggle="collapse">
                            <span class="">Our company</span>
                            <span class="pull-xs-right">
                           <span class="navbar-toggler collapse-icons">
                           <i class="fa-icon add"></i>
                           <i class="fa-icon remove"></i>
                           </span>
                           </span>
                        </div>
                        <ul id="footer_sub_menu_53805" class="collapse block_content">
                            <li>
                                <a
                                        id="link-cms-page-1-2"
                                        class="cms-page-link"
                                        href="indexab5b.html?id_cms=1&amp;controller=cms&amp;id_lang=1"
                                        title="Our terms and conditions of delivery">
                                    Delivery
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-cms-page-2-2"
                                        class="cms-page-link"
                                        href="index0913.html?id_cms=2&amp;controller=cms&amp;id_lang=1"
                                        title="Legal notice">
                                    Legal Notice
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-cms-page-3-2"
                                        class="cms-page-link"
                                        href="index7b3f.html?id_cms=3&amp;controller=cms&amp;id_lang=1"
                                        title="Our terms and conditions of use">
                                    Terms and conditions of use
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-cms-page-4-2"
                                        class="cms-page-link"
                                        href="indexac29.html?id_cms=4&amp;controller=cms&amp;id_lang=1"
                                        title="Learn more about us">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-cms-page-5-2"
                                        class="cms-page-link"
                                        href="indexac7f.html?id_cms=5&amp;controller=cms&amp;id_lang=1"
                                        title="Our secure payment method">
                                    Secure payment
                                </a>
                            </li>
                            <li>
                                <a
                                        id="link-static-page-my-account-2"
                                        class="cms-page-link"
                                        href="index6714.html?controller=my-account"
                                        title="">
                                    My account
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="block_myaccount_infos" class="col-md-2 links wrapper">
                        <h3 class="myaccount-title hidden-sm-down">
                            <a class="text-uppercase" href="index6714.html?controller=my-account" rel="nofollow">
                                Your account
                            </a>
                        </h3>
                        <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
                            <span class="h3">Your account</span>
                            <span class="pull-xs-right">
                           <span class="navbar-toggler collapse-icons">
                           <i class="fa-icon add"></i>
                           <i class="fa-icon remove"></i>
                           </span>
                           </span>
                        </div>
                        <ul class="account-list collapse" id="footer_account_list">
                            <li>
                                <a href="indexce45.html?controller=identity" title="Personal info" rel="nofollow">
                                    Personal info
                                </a>
                            </li>
                            <li>
                                <a href="index5d88.html?controller=history" title="Orders" rel="nofollow">
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a href="indexcca2.html?controller=order-slip" title="Credit slips" rel="nofollow">
                                    Credit slips
                                </a>
                            </li>
                            <li>
                                <a href="index3908.html?controller=addresses" title="Addresses" rel="nofollow">
                                    Addresses
                                </a>
                            </li>
                            <li>
                                <a href="indexf003.html?controller=discount" title="Vouchers" rel="nofollow">
                                    Vouchers
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="czfootercmsblock" class="footer-cms-block col-md-4 links block">
                        <div id="footerlogo">
                            <h3 class="app-title">Apps Store</h3>
                            <div class="footer app-icon">
                                <div class="footercms-inner"><a href="#" class="footercms"> <img src="img/cms/app-icon-1.png" alt="app-icon-1" class="footercms-image1" /></a> <a href="#" class="footercms"> <img src="img/cms/app-icon-2.png" alt="app-icon-2" class="footercms-image2" /></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-social">
                        <ul>
                            <li class="facebook"><a href="#" target="_blank"><span>Facebook</span></a></li>
                            <li class="twitter"><a href="#" target="_blank"><span>Twitter</span></a></li>
                            <li class="youtube"><a href="#" target="_blank"><span>YouTube</span></a></li>
                            <li class="googleplus"><a href="#" target="_blank"><span>Google +</span></a></li>
                            <li class="instagram"><a href="#" target="_blank"><span>Instagram</span></a></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var cz_coupon_url = "modules/czcouponpop/index.html";
                        var cookies_time = 864000;
                    </script>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-after">
            <div class="container">
                <!-- Block payment logo module -->
                <div id="payement_logo_block_left" class="payement_logo_block">
                    <a href="indexab5b.html?id_cms=1&amp;controller=cms&amp;id_lang=1">
                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/modules/cz_blockpaymentlogo/views/img/carte_bleue.png" alt="carte_bleue" width="37" height="23" />
                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/modules/cz_blockpaymentlogo/views/img/visa.png" alt="visa" width="37" height="23" />
                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/modules/cz_blockpaymentlogo/views/img/master_card.png" alt="master_card" width="37" height="23" />
                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/modules/cz_blockpaymentlogo/views/img/american_express.png" alt="american_express" width="37" height="23" />
                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/modules/cz_blockpaymentlogo/views/img/paypal.png" alt="paypal" width="37" height="23" />
                    </a>
                </div>
                <!-- /Block payment logo module -->
                <div class="copyright">
                    <a class="_blank" href="http://www.prestashop.com/" target="_blank">
                        © 2022 - Ecommerce software by PrestaShop™
                    </a>
                </div>
                <div class="footer-logo"></div>
            </div>
        </div>
        <a class="top_button" href="#" style="">&nbsp;</a>

    </footer>
</main>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/core.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/theme.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/myprestacomments/js/jquery.rating.pack.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/myprestacomments/js/jquery.textareaCounter.plugin.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/myprestacomments/js/myprestacomments.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/czcouponpop/views/js/czcouponpop.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/jquery/ui/jquery-ui.min.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/jquery/plugins/fancybox/jquery.fancybox.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/ps_searchbar/ps_searchbar.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/cz_imageslider/views/js/jquery.flexslider-min.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/czproductsearch/views/js/jquery.autocomplete_productsearch.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/modules/czproductsearch/views/js/czsearch.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/owl.carousel.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/totalstorage.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/lightbox.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/lazysizes.min.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/jquery.hoverdir.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/modernizr.js')}}" ></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('asset/website/js/custom.js')}}" ></script>--}}





<script type="text/javascript" src="{{ URL::asset('asset/website/js/core.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/theme.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/myprestacomments/js/jquery.rating.pack.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/myprestacomments/js/jquery.textareaCounter.plugin.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/myprestacomments/js/myprestacomments.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/stfeature/views/js/stfeature_compare.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/stfeature/views/js/stfeature_wishlist.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/psproductcountdown/views/js/underscore.min.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/psproductcountdown/views/js/jquery.countdown.min.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/psproductcountdown/views/js/psproductcountdown.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/czcouponpop/views/js/czcouponpop.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/jquery/ui/jquery-ui.min.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/jquery/plugins/fancybox/jquery.fancybox.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/ps_searchbar/ps_searchbar.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/ps_shoppingcart/ps_shoppingcart.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/cz_imageslider/views/js/jquery.flexslider-min.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/czproductsearch/views/js/jquery.autocomplete_productsearch.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/modules/czproductsearch/views/js/czsearch.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/owl.carousel.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/totalstorage.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/lightbox.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/lazysizes.min.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/jquery.hoverdir.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/modernizr.js')}}" ></script>
<script type="text/javascript" src="{{ URL::asset('asset/website/js/custom.js')}}" ></script>

</body>
</html>