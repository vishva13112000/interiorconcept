@extends('website.layouts.app')
@section('content')
    <section id="wrapper">
        <nav data-depth="1" class="breadcrumb">
            <div class="container">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="index.html">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                </ol>
            </div>
        </nav>
        <div class="home-container">
            <div id="columns_inner">
                <div id="content-wrapper">
                    <section id="main">
                        <section id="content" class="page-home">
                            <div class="display-top-inner">
                                <div class="flexslider" data-interval="8000" data-pause="true">
                                    <div class="loadingdiv spinner"></div>
                                    @if($banners->count()>0)
                                        <ul class="slides">
                                            @foreach($banners as $ban)
                                                <li class="slide">
                                                    <a href="#" title="sample-1">
                                                        <img src="{{url('/uploads/banner/'.$ban->image)}}" alt="sample-1" title="Sample 1" />
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <div  class="czcategoryimagelist">
                                    <div class="container">
                                        <div class="categoryimagelist-wrapper">
                                            <div class="customNavigation">
                                                <a class="btn prev cat_prev">&nbsp;</a>
                                                <a class="btn next cat_next">&nbsp;</a>
                                            </div>
                                            <div class="categoryimagelist-inner">
                                                <ul id="czcategoryimagelist-carousel" class="cz-carousel product_list product_slider_grid">
                                                    <li class="slider">
                                                        <div class="categoryblock0 categoryblock item">
                                                            <div class="block_content">
                                                                <div class="categorylist">
                                                                    <div class="cate-heading">
                                                                        <a href="index0990.html?id_category=4&amp;controller=category&amp;id_lang=1">Electronic Accessories</a>
                                                                    </div>
                                                                    <ul class="subcategory">
                                                                        <li>
                                                                            <a href="index63be.html?id_category=16&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/16-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index63be.html?id_category=16&amp;controller=category&amp;id_lang=1">Phone &amp; Tablet</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="indexcd48.html?id_category=17&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/17-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="indexcd48.html?id_category=17&amp;controller=category&amp;id_lang=1">Speaker &amp; Earphone</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index6c57.html?id_category=18&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/18-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index6c57.html?id_category=18&amp;controller=category&amp;id_lang=1">Laptop &amp; Computer</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index9c57.html?id_category=19&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/19-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index9c57.html?id_category=19&amp;controller=category&amp;id_lang=1">Television &amp; Game</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="view-more" href="index0990.html?id_category=4&amp;controller=category&amp;id_lang=1">
                                                                                View More</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li  class="slider" >
                                                        <div class="categoryblock1 categoryblock item">
                                                            <div class="block_content">
                                                                <div class="categorylist">
                                                                    <div class="cate-heading">
                                                                        <a href="index3520.html?id_category=5&amp;controller=category&amp;id_lang=1">Men &amp; Women&#039;s Fashion</a>
                                                                    </div>
                                                                    <ul class="subcategory">
                                                                        <li>
                                                                            <a href="index9378.html?id_category=20&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/20-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index9378.html?id_category=20&amp;controller=category&amp;id_lang=1">Ethnic &amp; Casual Wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="indexd081.html?id_category=21&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/21-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="indexd081.html?id_category=21&amp;controller=category&amp;id_lang=1">Jeans &amp; Shirts &amp; Tops</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index96da.html?id_category=22&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/22-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index96da.html?id_category=22&amp;controller=category&amp;id_lang=1">Shoes &amp; Flip Flops</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index8447.html?id_category=23&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/23-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index8447.html?id_category=23&amp;controller=category&amp;id_lang=1">Other Accessories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="view-more" href="index3520.html?id_category=5&amp;controller=category&amp;id_lang=1">
                                                                                View More</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li  class="slider" >
                                                        <div class="categoryblock2 categoryblock item">
                                                            <div class="block_content">
                                                                <div class="categorylist">
                                                                    <div class="cate-heading">
                                                                        <a href="indexb34f.html?id_category=15&amp;controller=category&amp;id_lang=1">Special For Kids Accessories</a>
                                                                    </div>
                                                                    <ul class="subcategory">
                                                                        <li>
                                                                            <a href="indexbe45.html?id_category=24&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/24-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="indexbe45.html?id_category=24&amp;controller=category&amp;id_lang=1">School Stationery</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index82f7.html?id_category=25&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/25-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index82f7.html?id_category=25&amp;controller=category&amp;id_lang=1">KIds Clothes</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index87e4.html?id_category=26&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/26-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index87e4.html?id_category=26&amp;controller=category&amp;id_lang=1">Baby Toys</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="index87ce.html?id_category=27&amp;controller=category&amp;id_lang=1">
                                                                                <img src="modules/cz_categoryimagelist/views/img/27-cz_categoryimagelist.jpg" height="138" width="178" alt="" class="img-responsive"/>
                                                                            </a>
                                                                            <a class="subcategory-title" href="index87ce.html?id_category=27&amp;controller=category&amp;id_lang=1">School Bag</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="view-more" href="indexb34f.html?id_category=15&amp;controller=category&amp;id_lang=1">
                                                                                View More</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div id="czcategorytabs" class="tabs products_block clearfix">
                                    <div class="categorytab block">
                                        <h2 class="h1 products-section-title text-uppercase">Trending Products</h2>
                                        <div class="czcategory-tab">
                                            <ul id="czcategory-tabs" class="nav nav-tabs clearfix">
                                                <li class="nav-item">
                                                    <a href="#tab_3" data-toggle="tab" class="nav-link active">
                                                        <span class="category-title">Fashion</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_6" data-toggle="tab" class="nav-link ">
                                                        <span class="category-title">Electronics</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_9" data-toggle="tab" class="nav-link ">
                                                        <span class="category-title">Cosmetics</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_10" data-toggle="tab" class="nav-link ">
                                                        <span class="category-title">Accessories</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_11" data-toggle="tab" class="nav-link ">
                                                        <span class="category-title">Jewellery</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div id="tab_3" class="tab-pane active">
                                                <div class="czcategory-double-slide products row">
                                                    <ul id="czcategory3-carousel" class="cz-carousel product_list product_slider_grid" data-catid="3">
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/2/4/24-home_default.jpg"
                                                                                            alt = "Consectetur Hampden"
                                                                                            data-full-size-image-url = "https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/2/4/24-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/3/43-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/3/43-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="40" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="1" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexd5c6.html?id_product=1&amp;id_product_attribute=41&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index0c11.html?id_product=1&amp;id_product_attribute=42&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-20%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Looney Tunes</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Consectetur Hampden</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€104.86</span>
                                                                                <span class="discount-percentage discount-product">-20%</span>
                                                                                <span itemprop="price" class="price">€83.89</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="20" data-id-product-attribute="88" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7c73.html?id_product=20&amp;id_product_attribute=88&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/2/8/28-home_default.jpg"
                                                                                            alt = "Exercitat virginia convallis"
                                                                                            data-full-size-image-url = "img/p/2/8/28-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/2/42-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/2/42-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="20" data-id-product-attribute="88" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="20" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="20" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index1d3f.html?id_product=20&amp;id_product_attribute=87&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index169f.html?id_product=20&amp;id_product_attribute=86&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <a href="indexd33f.html?id_product=20&amp;id_product_attribute=85&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/16-color-yellow"
                                                                                       class="color"
                                                                                       title="Yellow"
                                                                                       style="background-color: #F1C40F"           ><span class="sr-only">Yellow</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7c73.html?id_product=20&amp;id_product_attribute=88&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow">Exercitat virginia convallis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€87.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/3/6/36-home_default.jpg"
                                                                                            alt = "Accusantium doloremque"
                                                                                            data-full-size-image-url = "img/p/3/6/36-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="21" data-id-product-attribute="109" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="21" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="21" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index1728.html?id_product=21&amp;id_product_attribute=103&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="indexf129.html?id_product=21&amp;id_product_attribute=106&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Accusantium doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€110.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="22" data-id-product-attribute="121" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/4/4/44-home_default.jpg"
                                                                                            alt = "Voluptas assumenda"
                                                                                            data-full-size-image-url = "img/p/4/4/44-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="22" data-id-product-attribute="121" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="22" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="22" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexfffa.html?id_product=22&amp;id_product_attribute=123&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index7759.html?id_product=22&amp;id_product_attribute=122&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Voluptas assumenda</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€78.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="23" data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/0/50-home_default.jpg"
                                                                                            alt = "Nostrud exercitation iaculis"
                                                                                            data-full-size-image-url = "img/p/5/0/50-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="23" data-id-product-attribute="140" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="23" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index8b19.html?id_product=23&amp;id_product_attribute=136&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index11a7.html?id_product=23&amp;id_product_attribute=138&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€5.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€98.00</span>
                                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                                                <span itemprop="price" class="price">€93.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="151" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/6/56-home_default.jpg"
                                                                                            alt = "Commodi consequatur"
                                                                                            data-full-size-image-url = "img/p/5/6/56-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="24" data-id-product-attribute="151" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="24" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="24" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexd09e.html?id_product=24&amp;id_product_attribute=152&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index70cd.html?id_product=24&amp;id_product_attribute=153&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1">Pro Tech Gear</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Commodi consequatur</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€85.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="25" data-id-product-attribute="175" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/2/62-home_default.jpg"
                                                                                            alt = "Praesentium voluptatum"
                                                                                            data-full-size-image-url = "img/p/6/2/62-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="25" data-id-product-attribute="175" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="25" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="25" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa15f.html?id_product=25&amp;id_product_attribute=170&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexaa63.html?id_product=25&amp;id_product_attribute=171&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index86ce.html?id_product=25&amp;id_product_attribute=169&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€4.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Praesentium voluptatum</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€79.00</span>
                                                                                <span class="discount-amount discount-product">-€4.00</span>
                                                                                <span itemprop="price" class="price">€75.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="26" data-id-product-attribute="187" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/8/68-home_default.jpg"
                                                                                            alt = "Voluptates repudiandae"
                                                                                            data-full-size-image-url = "img/p/6/8/68-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="26" data-id-product-attribute="187" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="26" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="26" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexe63b.html?id_product=26&amp;id_product_attribute=189&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexc613.html?id_product=26&amp;id_product_attribute=188&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Voluptates repudiandae</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€105.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="27" data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/7/5/75-home_default.jpg"
                                                                                            alt = "Laborum eveniet sapien"
                                                                                            data-full-size-image-url = "img/p/7/5/75-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="27" data-id-product-attribute="205" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="27" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3afd.html?id_product=27&amp;id_product_attribute=204&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index31a1.html?id_product=27&amp;id_product_attribute=203&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexef74.html?id_product=27&amp;id_product_attribute=202&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-6%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€99.00</span>
                                                                                <span class="discount-percentage discount-product">-6%</span>
                                                                                <span itemprop="price" class="price">€93.06</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="28" data-id-product-attribute="220" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/1/81-home_default.jpg"
                                                                                            alt = "Necessitatibus vulputate"
                                                                                            data-full-size-image-url = "img/p/8/1/81-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="28" data-id-product-attribute="220" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="28" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="28" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7071.html?id_product=28&amp;id_product_attribute=222&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index10fd.html?id_product=28&amp;id_product_attribute=221&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index6366.html?id_product=28&amp;id_product_attribute=223&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange">Necessitatibus vulputate</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€83.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="29" data-id-product-attribute="234" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/7/87-home_default.jpg"
                                                                                            alt = "Occaecat voluptas varius"
                                                                                            data-full-size-image-url = "img/p/8/7/87-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="29" data-id-product-attribute="234" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="29" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="29" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index3cb6.html?id_product=29&amp;id_product_attribute=235&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="index26f0.html?id_product=29&amp;id_product_attribute=236&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-9%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occaecat voluptas varius</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€95.00</span>
                                                                                <span class="discount-percentage discount-product">-9%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="30" data-id-product-attribute="252" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/3/93-home_default.jpg"
                                                                                            alt = "Reprehenderit aliquam"
                                                                                            data-full-size-image-url = "img/p/9/3/93-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="30" data-id-product-attribute="252" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="30" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="30" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexa183.html?id_product=30&amp;id_product_attribute=253&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexc1b3.html?id_product=30&amp;id_product_attribute=254&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Reprehenderit aliquam</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€115.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="customNavigation">
                                                    <a class="btn prev czcategory_prev">&nbsp;</a>
                                                    <a class="btn next czcategory_next">&nbsp;</a>
                                                </div>
                                            </div>
                                            <div id="tab_6" class="tab-pane ">
                                                <div class="czcategory-double-slide products row">
                                                    <ul id="czcategory6-carousel" class="cz-carousel product_list product_slider_grid" data-catid="6">
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/3/6/36-home_default.jpg"
                                                                                            alt = "Accusantium doloremque"
                                                                                            data-full-size-image-url = "img/p/3/6/36-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="21" data-id-product-attribute="109" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="21" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="21" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index1728.html?id_product=21&amp;id_product_attribute=103&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="indexf129.html?id_product=21&amp;id_product_attribute=106&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Accusantium doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€110.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="22" data-id-product-attribute="121" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/4/4/44-home_default.jpg"
                                                                                            alt = "Voluptas assumenda"
                                                                                            data-full-size-image-url = "img/p/4/4/44-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="22" data-id-product-attribute="121" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="22" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="22" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexfffa.html?id_product=22&amp;id_product_attribute=123&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index7759.html?id_product=22&amp;id_product_attribute=122&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Voluptas assumenda</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€78.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="23" data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/0/50-home_default.jpg"
                                                                                            alt = "Nostrud exercitation iaculis"
                                                                                            data-full-size-image-url = "img/p/5/0/50-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="23" data-id-product-attribute="140" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="23" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index8b19.html?id_product=23&amp;id_product_attribute=136&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index11a7.html?id_product=23&amp;id_product_attribute=138&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€5.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€98.00</span>
                                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                                                <span itemprop="price" class="price">€93.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="151" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/6/56-home_default.jpg"
                                                                                            alt = "Commodi consequatur"
                                                                                            data-full-size-image-url = "img/p/5/6/56-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="24" data-id-product-attribute="151" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="24" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="24" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexd09e.html?id_product=24&amp;id_product_attribute=152&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index70cd.html?id_product=24&amp;id_product_attribute=153&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1">Pro Tech Gear</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Commodi consequatur</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€85.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="25" data-id-product-attribute="175" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/2/62-home_default.jpg"
                                                                                            alt = "Praesentium voluptatum"
                                                                                            data-full-size-image-url = "img/p/6/2/62-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="25" data-id-product-attribute="175" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="25" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="25" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa15f.html?id_product=25&amp;id_product_attribute=170&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexaa63.html?id_product=25&amp;id_product_attribute=171&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index86ce.html?id_product=25&amp;id_product_attribute=169&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€4.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Praesentium voluptatum</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€79.00</span>
                                                                                <span class="discount-amount discount-product">-€4.00</span>
                                                                                <span itemprop="price" class="price">€75.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="26" data-id-product-attribute="187" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/8/68-home_default.jpg"
                                                                                            alt = "Voluptates repudiandae"
                                                                                            data-full-size-image-url = "img/p/6/8/68-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="26" data-id-product-attribute="187" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="26" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="26" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexe63b.html?id_product=26&amp;id_product_attribute=189&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexc613.html?id_product=26&amp;id_product_attribute=188&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Voluptates repudiandae</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€105.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="27" data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/7/5/75-home_default.jpg"
                                                                                            alt = "Laborum eveniet sapien"
                                                                                            data-full-size-image-url = "img/p/7/5/75-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="27" data-id-product-attribute="205" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="27" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3afd.html?id_product=27&amp;id_product_attribute=204&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index31a1.html?id_product=27&amp;id_product_attribute=203&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexef74.html?id_product=27&amp;id_product_attribute=202&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-6%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€99.00</span>
                                                                                <span class="discount-percentage discount-product">-6%</span>
                                                                                <span itemprop="price" class="price">€93.06</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="28" data-id-product-attribute="220" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/1/81-home_default.jpg"
                                                                                            alt = "Necessitatibus vulputate"
                                                                                            data-full-size-image-url = "img/p/8/1/81-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="28" data-id-product-attribute="220" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="28" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="28" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7071.html?id_product=28&amp;id_product_attribute=222&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index10fd.html?id_product=28&amp;id_product_attribute=221&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index6366.html?id_product=28&amp;id_product_attribute=223&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange">Necessitatibus vulputate</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€83.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="29" data-id-product-attribute="234" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/7/87-home_default.jpg"
                                                                                            alt = "Occaecat voluptas varius"
                                                                                            data-full-size-image-url = "img/p/8/7/87-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="29" data-id-product-attribute="234" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="29" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="29" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index3cb6.html?id_product=29&amp;id_product_attribute=235&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="index26f0.html?id_product=29&amp;id_product_attribute=236&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-9%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occaecat voluptas varius</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€95.00</span>
                                                                                <span class="discount-percentage discount-product">-9%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="30" data-id-product-attribute="252" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/3/93-home_default.jpg"
                                                                                            alt = "Reprehenderit aliquam"
                                                                                            data-full-size-image-url = "img/p/9/3/93-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="30" data-id-product-attribute="252" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="30" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="30" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexa183.html?id_product=30&amp;id_product_attribute=253&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexc1b3.html?id_product=30&amp;id_product_attribute=254&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Reprehenderit aliquam</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€115.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="31" data-id-product-attribute="270" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/9/99-home_default.jpg"
                                                                                            alt = "Laudant doloremque"
                                                                                            data-full-size-image-url = "img/p/9/9/99-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/0/100-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/0/100-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="31" data-id-product-attribute="270" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="31" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="31" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index8333.html?id_product=31&amp;id_product_attribute=271&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index3d1e.html?id_product=31&amp;id_product_attribute=272&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-5%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Laudant doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€91.00</span>
                                                                                <span class="discount-percentage discount-product">-5%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="32" data-id-product-attribute="287" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/1/0/5/105-home_default.jpg"
                                                                                            alt = "Occasion praesentium"
                                                                                            data-full-size-image-url = "img/p/1/0/5/105-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/6/106-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/6/106-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="32" data-id-product-attribute="287" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="32" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="32" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexec64.html?id_product=32&amp;id_product_attribute=289&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index464a.html?id_product=32&amp;id_product_attribute=288&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occasion praesentium</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€99.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="customNavigation">
                                                    <a class="btn prev czcategory_prev">&nbsp;</a>
                                                    <a class="btn next czcategory_next">&nbsp;</a>
                                                </div>
                                            </div>
                                            <div id="tab_9" class="tab-pane ">
                                                <div class="czcategory-double-slide products row">
                                                    <ul id="czcategory9-carousel" class="cz-carousel product_list product_slider_grid" data-catid="9">
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="23" data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/0/50-home_default.jpg"
                                                                                            alt = "Nostrud exercitation iaculis"
                                                                                            data-full-size-image-url = "img/p/5/0/50-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="23" data-id-product-attribute="140" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="23" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index8b19.html?id_product=23&amp;id_product_attribute=136&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index11a7.html?id_product=23&amp;id_product_attribute=138&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€5.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€98.00</span>
                                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                                                <span itemprop="price" class="price">€93.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="151" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/6/56-home_default.jpg"
                                                                                            alt = "Commodi consequatur"
                                                                                            data-full-size-image-url = "img/p/5/6/56-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="24" data-id-product-attribute="151" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="24" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="24" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexd09e.html?id_product=24&amp;id_product_attribute=152&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index70cd.html?id_product=24&amp;id_product_attribute=153&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1">Pro Tech Gear</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Commodi consequatur</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€85.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="25" data-id-product-attribute="175" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/2/62-home_default.jpg"
                                                                                            alt = "Praesentium voluptatum"
                                                                                            data-full-size-image-url = "img/p/6/2/62-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="25" data-id-product-attribute="175" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="25" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="25" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa15f.html?id_product=25&amp;id_product_attribute=170&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexaa63.html?id_product=25&amp;id_product_attribute=171&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index86ce.html?id_product=25&amp;id_product_attribute=169&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€4.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Praesentium voluptatum</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€79.00</span>
                                                                                <span class="discount-amount discount-product">-€4.00</span>
                                                                                <span itemprop="price" class="price">€75.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="26" data-id-product-attribute="187" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/8/68-home_default.jpg"
                                                                                            alt = "Voluptates repudiandae"
                                                                                            data-full-size-image-url = "img/p/6/8/68-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="26" data-id-product-attribute="187" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="26" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="26" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexe63b.html?id_product=26&amp;id_product_attribute=189&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexc613.html?id_product=26&amp;id_product_attribute=188&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Voluptates repudiandae</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€105.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="27" data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/7/5/75-home_default.jpg"
                                                                                            alt = "Laborum eveniet sapien"
                                                                                            data-full-size-image-url = "img/p/7/5/75-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="27" data-id-product-attribute="205" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="27" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3afd.html?id_product=27&amp;id_product_attribute=204&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index31a1.html?id_product=27&amp;id_product_attribute=203&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexef74.html?id_product=27&amp;id_product_attribute=202&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-6%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€99.00</span>
                                                                                <span class="discount-percentage discount-product">-6%</span>
                                                                                <span itemprop="price" class="price">€93.06</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="28" data-id-product-attribute="220" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/1/81-home_default.jpg"
                                                                                            alt = "Necessitatibus vulputate"
                                                                                            data-full-size-image-url = "img/p/8/1/81-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="28" data-id-product-attribute="220" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="28" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="28" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7071.html?id_product=28&amp;id_product_attribute=222&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index10fd.html?id_product=28&amp;id_product_attribute=221&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index6366.html?id_product=28&amp;id_product_attribute=223&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange">Necessitatibus vulputate</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€83.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="29" data-id-product-attribute="234" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/7/87-home_default.jpg"
                                                                                            alt = "Occaecat voluptas varius"
                                                                                            data-full-size-image-url = "img/p/8/7/87-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="29" data-id-product-attribute="234" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="29" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="29" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index3cb6.html?id_product=29&amp;id_product_attribute=235&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="index26f0.html?id_product=29&amp;id_product_attribute=236&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-9%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occaecat voluptas varius</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€95.00</span>
                                                                                <span class="discount-percentage discount-product">-9%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="30" data-id-product-attribute="252" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/3/93-home_default.jpg"
                                                                                            alt = "Reprehenderit aliquam"
                                                                                            data-full-size-image-url = "img/p/9/3/93-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="30" data-id-product-attribute="252" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="30" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="30" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexa183.html?id_product=30&amp;id_product_attribute=253&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexc1b3.html?id_product=30&amp;id_product_attribute=254&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Reprehenderit aliquam</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€115.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="31" data-id-product-attribute="270" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/9/99-home_default.jpg"
                                                                                            alt = "Laudant doloremque"
                                                                                            data-full-size-image-url = "img/p/9/9/99-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/0/100-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/0/100-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="31" data-id-product-attribute="270" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="31" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="31" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index8333.html?id_product=31&amp;id_product_attribute=271&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index3d1e.html?id_product=31&amp;id_product_attribute=272&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-5%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Laudant doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€91.00</span>
                                                                                <span class="discount-percentage discount-product">-5%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="32" data-id-product-attribute="287" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/1/0/5/105-home_default.jpg"
                                                                                            alt = "Occasion praesentium"
                                                                                            data-full-size-image-url = "img/p/1/0/5/105-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/6/106-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/6/106-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="32" data-id-product-attribute="287" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="32" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="32" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexec64.html?id_product=32&amp;id_product_attribute=289&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index464a.html?id_product=32&amp;id_product_attribute=288&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occasion praesentium</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€99.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="33" data-id-product-attribute="305" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index898b.html?id_product=33&amp;id_product_attribute=305&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/1/1/1/111-home_default.jpg"
                                                                                            alt = "Accusantium Voluptatem"
                                                                                            data-full-size-image-url = "img/p/1/1/1/111-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/1/2/112-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/1/2/112-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="33" data-id-product-attribute="305" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="33" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="33" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index21a3.html?id_product=33&amp;id_product_attribute=300&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index2688.html?id_product=33&amp;id_product_attribute=301&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="index180b.html?id_product=33&amp;id_product_attribute=299&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Looney Tunes</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index898b.html?id_product=33&amp;id_product_attribute=305&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Accusantium Voluptatem</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€94.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="34" data-id-product-attribute="308" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index730b.html?id_product=34&amp;id_product_attribute=308&amp;rewrite=consectetur-adipiscing-elit&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/1/1/7/117-home_default.jpg"
                                                                                            alt = "Consectetur adipiscing elit"
                                                                                            data-full-size-image-url = "img/p/1/1/7/117-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/1/8/118-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/1/8/118-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="34" data-id-product-attribute="308" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="34" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="34" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index8dcb.html?id_product=34&amp;id_product_attribute=309&amp;rewrite=consectetur-adipiscing-elit&amp;controller=product&amp;id_lang=1#/2-size-m/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexdbb7.html?id_product=34&amp;id_product_attribute=312&amp;rewrite=consectetur-adipiscing-elit&amp;controller=product&amp;id_lang=1#/1-size-s/6-color-taupe"
                                                                                       class="color"
                                                                                       title="Taupe"
                                                                                       style="background-color: #CFC4A6"           ><span class="sr-only">Taupe</span></a>
                                                                                    <a href="indexb3a1.html?id_product=34&amp;id_product_attribute=316&amp;rewrite=consectetur-adipiscing-elit&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige"
                                                                                       class="color"
                                                                                       title="Beige"
                                                                                       style="background-color: #f5f5dc"           ><span class="sr-only">Beige</span></a>
                                                                                    <a href="index3789.html?id_product=34&amp;id_product_attribute=320&amp;rewrite=consectetur-adipiscing-elit&amp;controller=product&amp;id_lang=1#/1-size-s/9-color-off_white"
                                                                                       class="color"
                                                                                       title="Off White"
                                                                                       style="background-color: #faebd7"           ><span class="sr-only">Off White</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index730b.html?id_product=34&amp;id_product_attribute=308&amp;rewrite=consectetur-adipiscing-elit&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Consectetur adipiscing elit</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€103.79</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="customNavigation">
                                                    <a class="btn prev czcategory_prev">&nbsp;</a>
                                                    <a class="btn next czcategory_next">&nbsp;</a>
                                                </div>
                                            </div>
                                            <div id="tab_10" class="tab-pane ">
                                                <div class="czcategory-double-slide products row">
                                                    <ul id="czcategory10-carousel" class="cz-carousel product_list product_slider_grid" data-catid="10">
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/2/4/24-home_default.jpg"
                                                                                            alt = "Consectetur Hampden"
                                                                                            data-full-size-image-url = "img/p/2/4/24-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/3/43-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/3/43-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="40" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="1" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexd5c6.html?id_product=1&amp;id_product_attribute=41&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index0c11.html?id_product=1&amp;id_product_attribute=42&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-20%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Looney Tunes</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Consectetur Hampden</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€104.86</span>
                                                                                <span class="discount-percentage discount-product">-20%</span>
                                                                                <span itemprop="price" class="price">€83.89</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="20" data-id-product-attribute="88" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7c73.html?id_product=20&amp;id_product_attribute=88&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/2/8/28-home_default.jpg"
                                                                                            alt = "Exercitat virginia convallis"
                                                                                            data-full-size-image-url = "img/p/2/8/28-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/2/42-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/2/42-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="20" data-id-product-attribute="88" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="20" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="20" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index1d3f.html?id_product=20&amp;id_product_attribute=87&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index169f.html?id_product=20&amp;id_product_attribute=86&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <a href="indexd33f.html?id_product=20&amp;id_product_attribute=85&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/16-color-yellow"
                                                                                       class="color"
                                                                                       title="Yellow"
                                                                                       style="background-color: #F1C40F"           ><span class="sr-only">Yellow</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7c73.html?id_product=20&amp;id_product_attribute=88&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow">Exercitat virginia convallis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€87.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/3/6/36-home_default.jpg"
                                                                                            alt = "Accusantium doloremque"
                                                                                            data-full-size-image-url = "img/p/3/6/36-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="21" data-id-product-attribute="109" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="21" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="21" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index1728.html?id_product=21&amp;id_product_attribute=103&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="indexf129.html?id_product=21&amp;id_product_attribute=106&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Accusantium doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€110.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="22" data-id-product-attribute="121" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/4/4/44-home_default.jpg"
                                                                                            alt = "Voluptas assumenda"
                                                                                            data-full-size-image-url = "img/p/4/4/44-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="22" data-id-product-attribute="121" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="22" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="22" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexfffa.html?id_product=22&amp;id_product_attribute=123&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index7759.html?id_product=22&amp;id_product_attribute=122&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Voluptas assumenda</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€78.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="23" data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/0/50-home_default.jpg"
                                                                                            alt = "Nostrud exercitation iaculis"
                                                                                            data-full-size-image-url = "img/p/5/0/50-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="23" data-id-product-attribute="140" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="23" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index8b19.html?id_product=23&amp;id_product_attribute=136&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index11a7.html?id_product=23&amp;id_product_attribute=138&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€5.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€98.00</span>
                                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                                                <span itemprop="price" class="price">€93.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="151" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/6/56-home_default.jpg"
                                                                                            alt = "Commodi consequatur"
                                                                                            data-full-size-image-url = "img/p/5/6/56-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="24" data-id-product-attribute="151" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="24" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="24" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexd09e.html?id_product=24&amp;id_product_attribute=152&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index70cd.html?id_product=24&amp;id_product_attribute=153&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1">Pro Tech Gear</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Commodi consequatur</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€85.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="25" data-id-product-attribute="175" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/2/62-home_default.jpg"
                                                                                            alt = "Praesentium voluptatum"
                                                                                            data-full-size-image-url = "img/p/6/2/62-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="25" data-id-product-attribute="175" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="25" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="25" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa15f.html?id_product=25&amp;id_product_attribute=170&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexaa63.html?id_product=25&amp;id_product_attribute=171&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index86ce.html?id_product=25&amp;id_product_attribute=169&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€4.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Praesentium voluptatum</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€79.00</span>
                                                                                <span class="discount-amount discount-product">-€4.00</span>
                                                                                <span itemprop="price" class="price">€75.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="26" data-id-product-attribute="187" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/8/68-home_default.jpg"
                                                                                            alt = "Voluptates repudiandae"
                                                                                            data-full-size-image-url = "img/p/6/8/68-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="26" data-id-product-attribute="187" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="26" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="26" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexe63b.html?id_product=26&amp;id_product_attribute=189&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexc613.html?id_product=26&amp;id_product_attribute=188&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Voluptates repudiandae</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€105.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="27" data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/7/5/75-home_default.jpg"
                                                                                            alt = "Laborum eveniet sapien"
                                                                                            data-full-size-image-url = "img/p/7/5/75-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="27" data-id-product-attribute="205" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="27" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3afd.html?id_product=27&amp;id_product_attribute=204&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index31a1.html?id_product=27&amp;id_product_attribute=203&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexef74.html?id_product=27&amp;id_product_attribute=202&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-6%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€99.00</span>
                                                                                <span class="discount-percentage discount-product">-6%</span>
                                                                                <span itemprop="price" class="price">€93.06</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="28" data-id-product-attribute="220" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/1/81-home_default.jpg"
                                                                                            alt = "Necessitatibus vulputate"
                                                                                            data-full-size-image-url = "img/p/8/1/81-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="28" data-id-product-attribute="220" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="28" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="28" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7071.html?id_product=28&amp;id_product_attribute=222&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index10fd.html?id_product=28&amp;id_product_attribute=221&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index6366.html?id_product=28&amp;id_product_attribute=223&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange">Necessitatibus vulputate</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€83.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="29" data-id-product-attribute="234" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/7/87-home_default.jpg"
                                                                                            alt = "Occaecat voluptas varius"
                                                                                            data-full-size-image-url = "img/p/8/7/87-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="29" data-id-product-attribute="234" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="29" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="29" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index3cb6.html?id_product=29&amp;id_product_attribute=235&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="index26f0.html?id_product=29&amp;id_product_attribute=236&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-9%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occaecat voluptas varius</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€95.00</span>
                                                                                <span class="discount-percentage discount-product">-9%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="30" data-id-product-attribute="252" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/3/93-home_default.jpg"
                                                                                            alt = "Reprehenderit aliquam"
                                                                                            data-full-size-image-url = "img/p/9/3/93-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="30" data-id-product-attribute="252" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="30" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="30" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexa183.html?id_product=30&amp;id_product_attribute=253&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexc1b3.html?id_product=30&amp;id_product_attribute=254&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Reprehenderit aliquam</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€115.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="customNavigation">
                                                    <a class="btn prev czcategory_prev">&nbsp;</a>
                                                    <a class="btn next czcategory_next">&nbsp;</a>
                                                </div>
                                            </div>
                                            <div id="tab_11" class="tab-pane ">
                                                <div class="czcategory-double-slide products row">
                                                    <ul id="czcategory11-carousel" class="cz-carousel product_list product_slider_grid" data-catid="11">
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/3/6/36-home_default.jpg"
                                                                                            alt = "Accusantium doloremque"
                                                                                            data-full-size-image-url = "img/p/3/6/36-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="21" data-id-product-attribute="109" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="21" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="21" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index1728.html?id_product=21&amp;id_product_attribute=103&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="indexf129.html?id_product=21&amp;id_product_attribute=106&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Accusantium doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€110.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="22" data-id-product-attribute="121" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/4/4/44-home_default.jpg"
                                                                                            alt = "Voluptas assumenda"
                                                                                            data-full-size-image-url = "img/p/4/4/44-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="22" data-id-product-attribute="121" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="22" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="22" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexfffa.html?id_product=22&amp;id_product_attribute=123&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index7759.html?id_product=22&amp;id_product_attribute=122&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Voluptas assumenda</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€78.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="23" data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/0/50-home_default.jpg"
                                                                                            alt = "Nostrud exercitation iaculis"
                                                                                            data-full-size-image-url = "img/p/5/0/50-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="23" data-id-product-attribute="140" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="23" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index8b19.html?id_product=23&amp;id_product_attribute=136&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index11a7.html?id_product=23&amp;id_product_attribute=138&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€5.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€98.00</span>
                                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                                                <span itemprop="price" class="price">€93.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="151" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/5/6/56-home_default.jpg"
                                                                                            alt = "Commodi consequatur"
                                                                                            data-full-size-image-url = "img/p/5/6/56-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="24" data-id-product-attribute="151" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="24" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="24" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexd09e.html?id_product=24&amp;id_product_attribute=152&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index70cd.html?id_product=24&amp;id_product_attribute=153&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1">Pro Tech Gear</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Commodi consequatur</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€85.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="25" data-id-product-attribute="175" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/2/62-home_default.jpg"
                                                                                            alt = "Praesentium voluptatum"
                                                                                            data-full-size-image-url = "img/p/6/2/62-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="25" data-id-product-attribute="175" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="25" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="25" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexa15f.html?id_product=25&amp;id_product_attribute=170&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexaa63.html?id_product=25&amp;id_product_attribute=171&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index86ce.html?id_product=25&amp;id_product_attribute=169&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-€4.00</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Praesentium voluptatum</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€79.00</span>
                                                                                <span class="discount-amount discount-product">-€4.00</span>
                                                                                <span itemprop="price" class="price">€75.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="26" data-id-product-attribute="187" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/6/8/68-home_default.jpg"
                                                                                            alt = "Voluptates repudiandae"
                                                                                            data-full-size-image-url = "img/p/6/8/68-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="26" data-id-product-attribute="187" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="26" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="26" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexe63b.html?id_product=26&amp;id_product_attribute=189&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="indexc613.html?id_product=26&amp;id_product_attribute=188&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Voluptates repudiandae</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€105.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="27" data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/7/5/75-home_default.jpg"
                                                                                            alt = "Laborum eveniet sapien"
                                                                                            data-full-size-image-url = "img/p/7/5/75-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="27" data-id-product-attribute="205" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="27" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3afd.html?id_product=27&amp;id_product_attribute=204&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index31a1.html?id_product=27&amp;id_product_attribute=203&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="indexef74.html?id_product=27&amp;id_product_attribute=202&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-6%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€99.00</span>
                                                                                <span class="discount-percentage discount-product">-6%</span>
                                                                                <span itemprop="price" class="price">€93.06</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="28" data-id-product-attribute="220" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/1/81-home_default.jpg"
                                                                                            alt = "Necessitatibus vulputate"
                                                                                            data-full-size-image-url = "img/p/8/1/81-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="28" data-id-product-attribute="220" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="28" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="28" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7071.html?id_product=28&amp;id_product_attribute=222&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <a href="index10fd.html?id_product=28&amp;id_product_attribute=221&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <a href="index6366.html?id_product=28&amp;id_product_attribute=223&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange">Necessitatibus vulputate</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€83.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="29" data-id-product-attribute="234" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/8/7/87-home_default.jpg"
                                                                                            alt = "Occaecat voluptas varius"
                                                                                            data-full-size-image-url = "img/p/8/7/87-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/8/88-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="29" data-id-product-attribute="234" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="29" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="29" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="index3cb6.html?id_product=29&amp;id_product_attribute=235&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="index26f0.html?id_product=29&amp;id_product_attribute=236&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-9%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index7a9f.html?id_product=29&amp;id_product_attribute=234&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occaecat voluptas varius</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€95.00</span>
                                                                                <span class="discount-percentage discount-product">-9%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="30" data-id-product-attribute="252" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/3/93-home_default.jpg"
                                                                                            alt = "Reprehenderit aliquam"
                                                                                            data-full-size-image-url = "img/p/9/3/93-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/9/4/94-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="30" data-id-product-attribute="252" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="30" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="30" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexa183.html?id_product=30&amp;id_product_attribute=253&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                                       class="color"
                                                                                       title="Black"
                                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                                    <a href="indexc1b3.html?id_product=30&amp;id_product_attribute=254&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                                       class="color"
                                                                                       title="Green"
                                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexf7eb.html?id_product=30&amp;id_product_attribute=252&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Reprehenderit aliquam</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€115.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="double-slideitem">
                                                            <ul>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="31" data-id-product-attribute="270" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/9/9/99-home_default.jpg"
                                                                                            alt = "Laudant doloremque"
                                                                                            data-full-size-image-url = "img/p/9/9/99-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/0/100-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/0/100-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="31" data-id-product-attribute="270" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="31" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="31" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index8333.html?id_product=31&amp;id_product_attribute=271&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                                       class="color"
                                                                                       title="Red"
                                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                                    <a href="index3d1e.html?id_product=31&amp;id_product_attribute=272&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                                       class="color"
                                                                                       title="Blue"
                                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="on-sale">On sale!</li>
                                                                                <li class="discount">-5%</li>
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Laudant doloremque</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="regular-price">€91.00</span>
                                                                                <span class="discount-percentage discount-product">-5%</span>
                                                                                <span itemprop="price" class="price">€86.45</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item">
                                                                    <div class="product-miniature js-product-miniature" data-id-product="32" data-id-product-attribute="287" itemscope itemtype="http://schema.org/Product">
                                                                        <div class="thumbnail-container">
                                                                            <div class="image">
                                                                                <a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                                    <img
                                                                                            class="lazyload" data-src = "img/p/1/0/5/105-home_default.jpg"
                                                                                            alt = "Occasion praesentium"
                                                                                            data-full-size-image-url = "img/p/1/0/5/105-large_default.jpg"
                                                                                    >
                                                                                    <div class="image_content">
                                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/6/106-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/1/0/6/106-large_default.jpg" alt="" />
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="outer-functional">
                                                                                <div class="functional-buttons">
                                                                                    <div class="wishlist">
                                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="32" data-id-product-attribute="287" title="Add to Wishlist">
                                                                        <span class="st-wishlist-bt-content">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        Add to Wishlist
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="compare">
                                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="32" title="Add to Compare">
                                                                        <span class="st-compare-bt-content">
                                                                        <i class="fa fa-area-chart"></i>
                                                                        Add to Compare
                                                                        </span>
                                                                                        </a>
                                                                                    </div>
                                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                                    </a>
                                                                                    <div class="product-actions">
                                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                                            <input type="hidden" name="id_product" value="32" class="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                                Add to cart
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                                       class="color"
                                                                                       title="Grey"
                                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                                    <a href="indexec64.html?id_product=32&amp;id_product_attribute=289&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                                       class="color"
                                                                                       title="White"
                                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                                    <a href="index464a.html?id_product=32&amp;id_product_attribute=288&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange"
                                                                                       class="color"
                                                                                       title="Orange"
                                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                                    <span class="js-count count"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_note">
                                                                                <div class="star_content clearfix">
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                    <div class="star star_on"></div>
                                                                                </div>
                                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                                            </div>
                                                                            <ul class="product-flags">
                                                                                <li class="new">New</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="brand-title" itemprop="name">
                                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                                            </div>
                                                                            <span class="h3 product-title" itemprop="name"><a href="index3a23.html?id_product=32&amp;id_product_attribute=287&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Occasion praesentium</a></span>
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">€99.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="customNavigation">
                                                    <a class="btn prev czcategory_prev">&nbsp;</a>
                                                    <a class="btn next czcategory_next">&nbsp;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="czbannercmsblock" class="block czbanners">
                                    <div class="czbanner_container">
                                        <div class="cmsbanners">
                                            <div class="one-half cmsbanner-part1">
                                                <div class="cmsbanner-inner">
                                                    <div class="cmsbanner cmsbanner1">
                                                        <a href="#" class="banner-anchor"><img src="img/cms/cms-banner-1.jpg" alt="cms-banner1" class="banner-image1" /></a>
                                                        <div class="cmsbanner-text">
                                                            <div class="main-title">20% Discount</div>
                                                            <div class="sub-title">Study Table Lamp</div>
                                                            <div class="code-detail">Get Code : #789HJG</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="one-half cmsbanner-part2">
                                                <div class="cmsbanner-inner">
                                                    <div class="cmsbanner cmsbanner2">
                                                        <a href="#" class="banner-anchor"><img src="img/cms/cms-banner-2.jpg" alt="cms-banner2" class="banner-image2" /></a>
                                                        <div class="cmsbanner-text">
                                                            <div class="main-title">Up To 20% Save</div>
                                                            <div class="sub-title">Smart Sports Watch</div>
                                                            <div class="code-detail">Get Code : #789HJG</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="special-products">
                                    <h1 class="h1 products-section-title text-uppercase">
                                        Today's Best Deals
                                    </h1>
                                    <div class="special-products-wrapper-inner">
                                        <div class="special-products-wrapper">
                                            <div class="products">
                                                <!-- Define Number of product for SLIDER -->
                                                <ul id="special-carousel" class="cz-carousel product_list">
                                                    <li class="item">
                                                        <div class="product-miniature js-product-miniature" data-id-product="27"
                                                             data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container col-xs-12 col-md-6">
                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src ="img/p/7/5/75-special_default.jpg"
                                                                            alt = ""
                                                                    >
                                                                </a>
                                                                <span class="discount-percentage discount-product">-6%</span>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content clearfix">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span class="total-rating">1 Review(s)&nbsp</span>
                                                                </div>
                                                                <div class="brand-title" itemprop="name">
                                                                    <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                </div>
                                                                <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                                <div class="product-price-and-shipping">
                                                                    <span class="regular-price">€99.00</span>
                                                                    <span itemprop="price" class="price">€93.06</span>
                                                                </div>
                                                                <div class="product-actions">
                                                                    <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                        <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                        <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-counter">
                                                                <div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="1708210800000">
                                                                    <span class="deals-title">Ends in</span>
                                                                    <div class="pspc-main days-diff-679 weeks-diff-97 ">
                                                                    </div>
                                                                    <input type="hidden" class="pspc-checker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="product-miniature js-product-miniature" data-id-product="40"
                                                             data-id-product-attribute="374" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container col-xs-12 col-md-6">
                                                                <a href="indexca4d.html?id_product=40&amp;id_product_attribute=374&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src ="img/p/1/6/8/168-special_default.jpg"
                                                                            alt = ""
                                                                    >
                                                                </a>
                                                                <span class="discount-percentage discount-product">-6%</span>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content clearfix">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span class="total-rating">1 Review(s)&nbsp</span>
                                                                </div>
                                                                <div class="brand-title" itemprop="name">
                                                                    <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                </div>
                                                                <span class="h3 product-title" itemprop="name"><a href="indexca4d.html?id_product=40&amp;id_product_attribute=374&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Metus vehicula porttitor</a></span>
                                                                <div class="product-price-and-shipping">
                                                                    <span class="regular-price">€99.00</span>
                                                                    <span itemprop="price" class="price">€93.06</span>
                                                                </div>
                                                                <div class="product-actions">
                                                                    <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                        <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                        <input type="hidden" name="id_product" value="40" class="product_page_product_id">
                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-counter">
                                                                <div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="1708210800000">
                                                                    <span class="deals-title">Ends in</span>
                                                                    <div class="pspc-main days-diff-679 weeks-diff-97 ">
                                                                    </div>
                                                                    <input type="hidden" class="pspc-checker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="product-miniature js-product-miniature" data-id-product="23"
                                                             data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container col-xs-12 col-md-6">
                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src ="img/p/5/0/50-special_default.jpg"
                                                                            alt = ""
                                                                    >
                                                                </a>
                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content clearfix">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span class="total-rating">0 Review(s)&nbsp</span>
                                                                </div>
                                                                <div class="brand-title" itemprop="name">
                                                                    <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                                </div>
                                                                <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                                <div class="product-price-and-shipping">
                                                                    <span class="regular-price">€98.00</span>
                                                                    <span itemprop="price" class="price">€93.00</span>
                                                                </div>
                                                                <div class="product-actions">
                                                                    <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                        <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                        <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-counter">
                                                                <div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="1689717600000">
                                                                    <span class="deals-title">Ends in</span>
                                                                    <div class="pspc-main days-diff-465 weeks-diff-66 ">
                                                                    </div>
                                                                    <input type="hidden" class="pspc-checker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="product-miniature js-product-miniature" data-id-product="31"
                                                             data-id-product-attribute="270" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container col-xs-12 col-md-6">
                                                                <a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src ="img/p/9/9/99-special_default.jpg"
                                                                            alt = ""
                                                                    >
                                                                </a>
                                                                <span class="discount-percentage discount-product">-5%</span>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content clearfix">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span class="total-rating">0 Review(s)&nbsp</span>
                                                                </div>
                                                                <div class="brand-title" itemprop="name">
                                                                    <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                                </div>
                                                                <span class="h3 product-title" itemprop="name"><a href="indexb4b9.html?id_product=31&amp;id_product_attribute=270&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Laudant doloremque</a></span>
                                                                <div class="product-price-and-shipping">
                                                                    <span class="regular-price">€91.00</span>
                                                                    <span itemprop="price" class="price">€86.45</span>
                                                                </div>
                                                                <div class="product-actions">
                                                                    <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                        <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                        <input type="hidden" name="id_product" value="31" class="product_page_product_id">
                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-counter">
                                                                <div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="1702767600000">
                                                                    <span class="deals-title">Ends in</span>
                                                                    <div class="pspc-main days-diff-616 weeks-diff-88 ">
                                                                    </div>
                                                                    <input type="hidden" class="pspc-checker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="product-miniature js-product-miniature" data-id-product="1"
                                                             data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container col-xs-12 col-md-6">
                                                                <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src ="img/p/2/4/24-special_default.jpg"
                                                                            alt = ""
                                                                    >
                                                                </a>
                                                                <span class="discount-percentage discount-product">-20%</span>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content clearfix">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span class="total-rating">1 Review(s)&nbsp</span>
                                                                </div>
                                                                <div class="brand-title" itemprop="name">
                                                                    <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Looney Tunes</a>
                                                                </div>
                                                                <span class="h3 product-title" itemprop="name"><a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Consectetur Hampden</a></span>
                                                                <div class="product-price-and-shipping">
                                                                    <span class="regular-price">€104.86</span>
                                                                    <span itemprop="price" class="price">€83.89</span>
                                                                </div>
                                                                <div class="product-actions">
                                                                    <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                        <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                        <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-counter">
                                                                <div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="1702940400000">
                                                                    <span class="deals-title">Ends in</span>
                                                                    <div class="pspc-main days-diff-618 weeks-diff-88 ">
                                                                    </div>
                                                                    <input type="hidden" class="pspc-checker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="product-miniature js-product-miniature" data-id-product="35"
                                                             data-id-product-attribute="332" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container col-xs-12 col-md-6">
                                                                <a href="indexb211.html?id_product=35&amp;id_product_attribute=332&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src ="img/p/1/2/4/124-special_default.jpg"
                                                                            alt = ""
                                                                    >
                                                                </a>
                                                                <span class="discount-percentage discount-product">-20%</span>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content clearfix">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span class="total-rating">0 Review(s)&nbsp</span>
                                                                </div>
                                                                <div class="brand-title" itemprop="name">
                                                                    <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Looney Tunes</a>
                                                                </div>
                                                                <span class="h3 product-title" itemprop="name"><a href="indexb211.html?id_product=35&amp;id_product_attribute=332&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Blandit ligula fermentum</a></span>
                                                                <div class="product-price-and-shipping">
                                                                    <span class="regular-price">€104.86</span>
                                                                    <span itemprop="price" class="price">€83.89</span>
                                                                </div>
                                                                <div class="product-actions">
                                                                    <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                        <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                        <input type="hidden" name="id_product" value="35" class="product_page_product_id">
                                                                        <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="product-counter">
                                                                <div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="1702940400000">
                                                                    <span class="deals-title">Ends in</span>
                                                                    <div class="pspc-main days-diff-618 weeks-diff-88 ">
                                                                    </div>
                                                                    <input type="hidden" class="pspc-checker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="customNavigation">
                                                    <a class="btn prev special_prev">&nbsp;</a>
                                                    <a class="btn next special_next">&nbsp;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="featured-products clearfix">
                                    <h2 class="h1 products-section-title text-uppercase">
                                        <span>Featured products</span>
                                    </h2>
                                    <div class="featured-products-wrapper">
                                        <div class="products">
                                            <!-- Define Number of product for SLIDER -->
                                            <ul id="feature-carousel" class="cz-carousel product_list">
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/2/4/24-home_default.jpg"
                                                                            alt = "Consectetur Hampden"
                                                                            data-full-size-image-url = "img/p/2/4/24-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/3/43-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/3/43-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="40" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="1" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="1" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                       class="color"
                                                                       title="White"
                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                    <a href="indexd5c6.html?id_product=1&amp;id_product_attribute=41&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                       class="color"
                                                                       title="Red"
                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                    <a href="index0c11.html?id_product=1&amp;id_product_attribute=42&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                       class="color"
                                                                       title="Black"
                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="on-sale">On sale!</li>
                                                                <li class="discount">-20%</li>
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1">Looney Tunes</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index5f9a.html?id_product=1&amp;id_product_attribute=40&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Consectetur Hampden</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span class="regular-price">€104.86</span>
                                                                <span class="discount-percentage discount-product">-20%</span>
                                                                <span itemprop="price" class="price">€83.89</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="20" data-id-product-attribute="88" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index7c73.html?id_product=20&amp;id_product_attribute=88&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/2/8/28-home_default.jpg"
                                                                            alt = "Exercitat virginia convallis"
                                                                            data-full-size-image-url = "img/p/2/8/28-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/2/42-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/2/42-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="20" data-id-product-attribute="88" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="20" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="20" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index1d3f.html?id_product=20&amp;id_product_attribute=87&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                       class="color"
                                                                       title="Grey"
                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                    <a href="index169f.html?id_product=20&amp;id_product_attribute=86&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/15-color-green"
                                                                       class="color"
                                                                       title="Green"
                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                    <a href="indexd33f.html?id_product=20&amp;id_product_attribute=85&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/16-color-yellow"
                                                                       class="color"
                                                                       title="Yellow"
                                                                       style="background-color: #F1C40F"           ><span class="sr-only">Yellow</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index7c73.html?id_product=20&amp;id_product_attribute=88&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/16-color-yellow">Exercitat virginia convallis</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">€87.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/3/6/36-home_default.jpg"
                                                                            alt = "Accusantium doloremque"
                                                                            data-full-size-image-url = "img/p/3/6/36-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/3/7/37-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="21" data-id-product-attribute="109" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="21" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="21" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                       class="color"
                                                                       title="Red"
                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                    <a href="index1728.html?id_product=21&amp;id_product_attribute=103&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                       class="color"
                                                                       title="Orange"
                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                    <a href="indexf129.html?id_product=21&amp;id_product_attribute=106&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                       class="color"
                                                                       title="Green"
                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index5b0c.html?id_product=21&amp;id_product_attribute=109&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Accusantium doloremque</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">€110.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="22" data-id-product-attribute="121" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/4/4/44-home_default.jpg"
                                                                            alt = "Voluptas assumenda"
                                                                            data-full-size-image-url = "img/p/4/4/44-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/4/5/45-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="22" data-id-product-attribute="121" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="22" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="22" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red"
                                                                       class="color"
                                                                       title="Red"
                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                    <a href="indexfffa.html?id_product=22&amp;id_product_attribute=123&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                       class="color"
                                                                       title="Blue"
                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                    <a href="index7759.html?id_product=22&amp;id_product_attribute=122&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                       class="color"
                                                                       title="Green"
                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1">Gadget Zone</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index817c.html?id_product=22&amp;id_product_attribute=121&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/10-color-red">Voluptas assumenda</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">€78.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="23" data-id-product-attribute="140" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/5/0/50-home_default.jpg"
                                                                            alt = "Nostrud exercitation iaculis"
                                                                            data-full-size-image-url = "img/p/5/0/50-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/1/51-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="23" data-id-product-attribute="140" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="23" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="23" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled"
                                                                       class="color"
                                                                       title="Red"
                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                    <a href="index8b19.html?id_product=23&amp;id_product_attribute=136&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/13-color-orange/22-paper_type-ruled"
                                                                       class="color"
                                                                       title="Orange"
                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                    <a href="index11a7.html?id_product=23&amp;id_product_attribute=138&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/15-color-green/22-paper_type-ruled"
                                                                       class="color"
                                                                       title="Green"
                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="on-sale">On sale!</li>
                                                                <li class="discount">-€5.00</li>
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="indexa697.html?id_product=23&amp;id_product_attribute=140&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/10-color-red/22-paper_type-ruled">Nostrud exercitation iaculis</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span class="regular-price">€98.00</span>
                                                                <span class="discount-amount discount-product">-€5.00</span>
                                                                <span itemprop="price" class="price">€93.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="151" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/5/6/56-home_default.jpg"
                                                                            alt = "Commodi consequatur"
                                                                            data-full-size-image-url = "img/p/5/6/56-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/5/7/57-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="24" data-id-product-attribute="151" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="24" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="24" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey"
                                                                       class="color"
                                                                       title="Grey"
                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                    <a href="indexd09e.html?id_product=24&amp;id_product_attribute=152&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                       class="color"
                                                                       title="White"
                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                    <a href="index70cd.html?id_product=24&amp;id_product_attribute=153&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/15-color-green"
                                                                       class="color"
                                                                       title="Green"
                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1">Pro Tech Gear</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index79e9.html?id_product=24&amp;id_product_attribute=151&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/5-color-grey">Commodi consequatur</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">€85.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="25" data-id-product-attribute="175" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/6/2/62-home_default.jpg"
                                                                            alt = "Praesentium voluptatum"
                                                                            data-full-size-image-url = "img/p/6/2/62-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/6/3/63-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="25" data-id-product-attribute="175" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="25" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="25" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="indexa15f.html?id_product=25&amp;id_product_attribute=170&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/5-color-grey"
                                                                       class="color"
                                                                       title="Grey"
                                                                       style="background-color: #AAB2BD"           ><span class="sr-only">Grey</span></a>
                                                                    <a href="indexaa63.html?id_product=25&amp;id_product_attribute=171&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                       class="color"
                                                                       title="White"
                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                    <a href="index86ce.html?id_product=25&amp;id_product_attribute=169&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/13-color-orange"
                                                                       class="color"
                                                                       title="Orange"
                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="on-sale">On sale!</li>
                                                                <li class="discount">-€4.00</li>
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index8b26.html?id_product=25&amp;id_product_attribute=175&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Praesentium voluptatum</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span class="regular-price">€79.00</span>
                                                                <span class="discount-amount discount-product">-€4.00</span>
                                                                <span itemprop="price" class="price">€75.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="26" data-id-product-attribute="187" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/6/8/68-home_default.jpg"
                                                                            alt = "Voluptates repudiandae"
                                                                            data-full-size-image-url = "img/p/6/8/68-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/0/70-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="26" data-id-product-attribute="187" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="26" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="26" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="indexe63b.html?id_product=26&amp;id_product_attribute=189&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white"
                                                                       class="color"
                                                                       title="White"
                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                    <a href="indexc613.html?id_product=26&amp;id_product_attribute=188&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
                                                                       class="color"
                                                                       title="Black"
                                                                       style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                                    <a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue"
                                                                       class="color"
                                                                       title="Blue"
                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1">Weeds Capital</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="indexcd6d.html?id_product=26&amp;id_product_attribute=187&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">Voluptates repudiandae</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">€105.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="27" data-id-product-attribute="205" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/7/5/75-home_default.jpg"
                                                                            alt = "Laborum eveniet sapien"
                                                                            data-full-size-image-url = "img/p/7/5/75-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/7/6/76-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="27" data-id-product-attribute="205" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="27" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="27" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index3afd.html?id_product=27&amp;id_product_attribute=204&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/8-color-white"
                                                                       class="color"
                                                                       title="White"
                                                                       style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                                    <a href="index31a1.html?id_product=27&amp;id_product_attribute=203&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/10-color-red"
                                                                       class="color"
                                                                       title="Red"
                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                    <a href="indexef74.html?id_product=27&amp;id_product_attribute=202&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/3-size-l/14-color-blue"
                                                                       class="color"
                                                                       title="Blue"
                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                    <div class="star star_on"></div>
                                                                </div>
                                                                <span class="total-rating">1 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="on-sale">On sale!</li>
                                                                <li class="discount">-6%</li>
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1">Massive Dynamic</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="indexc3ad.html?id_product=27&amp;id_product_attribute=205&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue">Laborum eveniet sapien</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span class="regular-price">€99.00</span>
                                                                <span class="discount-percentage discount-product">-6%</span>
                                                                <span itemprop="price" class="price">€93.06</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-miniature js-product-miniature" data-id-product="28" data-id-product-attribute="220" itemscope itemtype="http://schema.org/Product">
                                                        <div class="thumbnail-container">
                                                            <div class="image">
                                                                <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange" class="thumbnail product-thumbnail">
                                                                    <img
                                                                            class="lazyload" data-src = "img/p/8/1/81-home_default.jpg"
                                                                            alt = "Necessitatibus vulputate"
                                                                            data-full-size-image-url = "img/p/8/1/81-large_default.jpg"
                                                                    >
                                                                    <div class="image_content">
                                                                        <img class="fliper_image img-responsive lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-home_default.jpg" data-full-size-image-url="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/p/8/2/82-large_default.jpg" alt="" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="outer-functional">
                                                                <div class="functional-buttons">
                                                                    <div class="wishlist">
                                                                        <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="28" data-id-product-attribute="220" title="Add to Wishlist">
                                                            <span class="st-wishlist-bt-content">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                            Add to Wishlist
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="compare">
                                                                        <a class="st-compare-button btn-product btn" href="#" data-id-product="28" title="Add to Compare">
                                                            <span class="st-compare-bt-content">
                                                            <i class="fa fa-area-chart"></i>
                                                            Add to Compare
                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <a href="#" class="quick-view" data-link-action="quickview">
                                                                        <i class="material-icons search">&#xE417;</i> Quick view
                                                                    </a>
                                                                    <div class="product-actions">
                                                                        <form action="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
                                                                            <input type="hidden" name="token" value="8bd9f42887793a736c2d38fd8a0dceff">
                                                                            <input type="hidden" name="id_product" value="28" class="product_page_product_id">
                                                                            <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                                                            <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
                                                                                Add to cart
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="highlighted-informations">
                                                                <div class="variant-links">
                                                                    <a href="index7071.html?id_product=28&amp;id_product_attribute=222&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/10-color-red"
                                                                       class="color"
                                                                       title="Red"
                                                                       style="background-color: #E84C3D"           ><span class="sr-only">Red</span></a>
                                                                    <a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange"
                                                                       class="color"
                                                                       title="Orange"
                                                                       style="background-color: #F39C11"           ><span class="sr-only">Orange</span></a>
                                                                    <a href="index10fd.html?id_product=28&amp;id_product_attribute=221&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/14-color-blue"
                                                                       class="color"
                                                                       title="Blue"
                                                                       style="background-color: #5D9CEC"           ><span class="sr-only">Blue</span></a>
                                                                    <a href="index6366.html?id_product=28&amp;id_product_attribute=223&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/15-color-green"
                                                                       class="color"
                                                                       title="Green"
                                                                       style="background-color: #A0D468"           ><span class="sr-only">Green</span></a>
                                                                    <span class="js-count count"></span>
                                                                </div>
                                                            </div>
                                                            <div class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span class="total-rating">0 Review(s)&nbsp</span>
                                                            </div>
                                                            <ul class="product-flags">
                                                                <li class="new">New</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="brand-title" itemprop="name">
                                                                <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1">The Simpsons</a>
                                                            </div>
                                                            <span class="h3 product-title" itemprop="name"><a href="index59e5.html?id_product=28&amp;id_product_attribute=220&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/13-color-orange">Necessitatibus vulputate</a></span>
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">€83.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="customNavigation">
                                                <a class="btn prev feature_prev">&nbsp;</a>
                                                <a class="btn next feature_next">&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div id="czoffercmsblock" class="block czoffer-cms">
                                    <div class="offercms-inner">
                                        <a href="#" class="banner-anchor"> <img src="img/cms/offer-banner.jpg" alt="offer-banner" class="offer-banner-image" /></a>
                                        <div class="offercmsdetail">
                                            <div class="offercms-text">
                                                <div class="offer-title">Offer Coupon Zone</div>
                                                <div class="offer-subtitle">Special discount for month ends offer with this coupon</div>
                                                <div class="shopnow"><a class="shop-now" href="#">Shop Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="cztestimonialcmsblock" class="block testimonial-block">
                                    <h2 class="h1 products-section-title text-uppercase">Our Testimonials</h2>
                                    <div class="testimonial_container">
                                        <div class="testimonial_wrapper">
                                            <div class="testimonial-area">
                                                <div class="customNavigation"><a class="btn prev cztestimonial_prev"> </a> <a class="btn next cztestimonial_next"> </a></div>
                                                <ul id="testimonial-carousel" class="cz-carousel product_list">
                                                    <li class="item">
                                                        <div class="testimonial-item">
                                                            <div class="item cms_face">
                                                                <div class="quote_img"></div>
                                                                <div class="testimonial-image"><img src="img/cms/user1.jpg" alt="testimonial-user1" title="testimonial-user1" width="66" height="66" /></div>
                                                            </div>
                                                            <div class="product_inner_cms">
                                                                <div class="des">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text.</div>
                                                            </div>
                                                            <div class="title">
                                                                <div class="name"><a href="#">Mark Jofferson</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="testimonial-item">
                                                            <div class="item cms_face">
                                                                <div class="quote_img"></div>
                                                                <div class="testimonial-image"><img src="img/cms/user2.jpg" alt="testimonial-user2" title="testimonial-user2" width="66" height="66" /></div>
                                                            </div>
                                                            <div class="product_inner_cms">
                                                                <div class="des">It is a long established fact that a reader will be distracted by the readable passages content.</div>
                                                            </div>
                                                            <div class="title">
                                                                <div class="name"><a href="#">jecob goeckno</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="testimonial-item">
                                                            <div class="item cms_face">
                                                                <div class="quote_img"></div>
                                                                <div class="testimonial-image"><img src="img/cms/user3.jpg" alt="testimonial-user3" title="testimonial-user3" width="66" height="66" /></div>
                                                            </div>
                                                            <div class="product_inner_cms">
                                                                <div class="des">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</div>
                                                            </div>
                                                            <div class="title">
                                                                <div class="name"><a href="#">luies charls</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="testimonial-item">
                                                            <div class="item cms_face">
                                                                <div class="quote_img"></div>
                                                                <div class="testimonial-image"><img src="img/cms/user4.jpg" alt="testimonial-user4" title="testimonial-user4" width="66" height="66" /></div>
                                                            </div>
                                                            <div class="product_inner_cms">
                                                                <div class="des">You need to be sure there isn't anything embarrassing hidden in the middle of text making.</div>
                                                            </div>
                                                            <div class="title">
                                                                <div class="name"><a href="#">luies charls</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block Last post-->
                                <div class="lastest_block block homeblog-latest">
                                    <h2 class="h1 products-section-title text-uppercase">
                                        <span class="main-title">Our Latest Blog</span>
                                    </h2>
                                    <div class="homeblog-wrapper">
                                        <div class="homeblog-inner">
                                            <!-- Define Number of product for SLIDER -->
                                            <ul id="blog-carousel" class="ps-carousel product_list">
                                                <li class="blog-post item">
                                                    <div class="blog-item">
                                                        <div class="blog-image text-xs-center">
                                                            <a href="indexa3af.html?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" title="There are many variations of passages of Lorem Ipsum available" class="link">
                                                                <img data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/psblog/b/6/1090_1189/b-blog-4.jpg" alt="There are many variations of passages of Lorem Ipsum available" class="img-fluid lazyload"/>
                                                                <span class="post-image-hover"></span>
                                                            </a>
                                                            <span class="blogicons">
                                                   <a title="Click to view Full Image" href="img/psblog/b/6/1090_1189/b-blog-4.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a>
                                                   <a title="Click to view Read More" href="indexa3af.html?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" class="icon readmore_link">&nbsp;</a>
                                                   </span>
                                                        </div>
                                                        <div class="blog-content-wrap">
                                                   <span class="blog-created">
                                                      <time class="date" datetime="2020">
                                                         <!-- day of week -->
                                                         18         <!-- day of month -->
                                                         December   <!-- month-->
                                                         2020         <!-- year -->
                                                      </time>
                                                   </span>
                                                            <h4 class="title">
                                                                <a href="indexa3af.html?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" title="There are many variations of passages of Lorem Ipsum available">There are many variations of passages of Lorem Ipsum available</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="blog-post item">
                                                    <div class="blog-item">
                                                        <div class="blog-image text-xs-center">
                                                            <a href="indexa739.html?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" title="The standard chunk of Lorem Ipsum used since the 1500s" class="link">
                                                                <img data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/psblog/b/7/1090_1189/b-blog-5.jpg" alt="The standard chunk of Lorem Ipsum used since the 1500s" class="img-fluid lazyload"/>
                                                                <span class="post-image-hover"></span>
                                                            </a>
                                                            <span class="blogicons">
                                                   <a title="Click to view Full Image" href="img/psblog/b/7/1090_1189/b-blog-5.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a>
                                                   <a title="Click to view Read More" href="indexa739.html?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" class="icon readmore_link">&nbsp;</a>
                                                   </span>
                                                        </div>
                                                        <div class="blog-content-wrap">
                                                   <span class="blog-created">
                                                      <time class="date" datetime="2020">
                                                         <!-- day of week -->
                                                         18         <!-- day of month -->
                                                         December   <!-- month-->
                                                         2020         <!-- year -->
                                                      </time>
                                                   </span>
                                                            <h4 class="title">
                                                                <a href="indexa739.html?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" title="The standard chunk of Lorem Ipsum used since the 1500s">The standard chunk of Lorem Ipsum used since the 1500s</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="blog-post item">
                                                    <div class="blog-item">
                                                        <div class="blog-image text-xs-center">
                                                            <a href="indexa118.html?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" title="Lorem Ipsum is therefore always free from repetition injected humour" class="link">
                                                                <img data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/psblog/b/8/1090_1189/b-blog-6.jpg" alt="Lorem Ipsum is therefore always free from repetition injected humour" class="img-fluid lazyload"/>
                                                                <span class="post-image-hover"></span>
                                                            </a>
                                                            <span class="blogicons">
                                                   <a title="Click to view Full Image" href="img/psblog/b/8/1090_1189/b-blog-6.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a>
                                                   <a title="Click to view Read More" href="indexa118.html?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" class="icon readmore_link">&nbsp;</a>
                                                   </span>
                                                        </div>
                                                        <div class="blog-content-wrap">
                                                   <span class="blog-created">
                                                      <time class="date" datetime="2020">
                                                         <!-- day of week -->
                                                         18         <!-- day of month -->
                                                         December   <!-- month-->
                                                         2020         <!-- year -->
                                                      </time>
                                                   </span>
                                                            <h4 class="title">
                                                                <a href="indexa118.html?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" title="Lorem Ipsum is therefore always free from repetition injected humour">Lorem Ipsum is therefore always free from repetition injected humour</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="blog-post item">
                                                    <div class="blog-item">
                                                        <div class="blog-image text-xs-center">
                                                            <a href="indexa564.html?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" title="Many desktop publishing packages and web page editors" class="link">
                                                                <img data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/psblog/b/9/1090_1189/b-blog-7.jpg" alt="Many desktop publishing packages and web page editors" class="img-fluid lazyload"/>
                                                                <span class="post-image-hover"></span>
                                                            </a>
                                                            <span class="blogicons">
                                                   <a title="Click to view Full Image" href="img/psblog/b/9/1090_1189/b-blog-7.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a>
                                                   <a title="Click to view Read More" href="indexa564.html?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" class="icon readmore_link">&nbsp;</a>
                                                   </span>
                                                        </div>
                                                        <div class="blog-content-wrap">
                                                   <span class="blog-created">
                                                      <time class="date" datetime="2020">
                                                         <!-- day of week -->
                                                         18         <!-- day of month -->
                                                         December   <!-- month-->
                                                         2020         <!-- year -->
                                                      </time>
                                                   </span>
                                                            <h4 class="title">
                                                                <a href="indexa564.html?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" title="Many desktop publishing packages and web page editors">Many desktop publishing packages and web page editors</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="blog-post item">
                                                    <div class="blog-item">
                                                        <div class="blog-image text-xs-center">
                                                            <a href="index11b5.html?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" title="Contrary to popular belief Lorem Ipsum is not simply random text" class="link">
                                                                <img data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/psblog/b/5/1090_1189/b-blog-3.jpg" alt="Contrary to popular belief Lorem Ipsum is not simply random text" class="img-fluid lazyload"/>
                                                                <span class="post-image-hover"></span>
                                                            </a>
                                                            <span class="blogicons">
                                                   <a title="Click to view Full Image" href="img/psblog/b/5/1090_1189/b-blog-3.jpg" data-lightbox="example-set" class="icon zoom">&nbsp;</a>
                                                   <a title="Click to view Read More" href="index11b5.html?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" class="icon readmore_link">&nbsp;</a>
                                                   </span>
                                                        </div>
                                                        <div class="blog-content-wrap">
                                                   <span class="blog-created">
                                                      <time class="date" datetime="2020">
                                                         <!-- day of week -->
                                                         16         <!-- day of month -->
                                                         December   <!-- month-->
                                                         2020         <!-- year -->
                                                      </time>
                                                   </span>
                                                            <h4 class="title">
                                                                <a href="index11b5.html?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" title="Contrary to popular belief Lorem Ipsum is not simply random text">Contrary to popular belief Lorem Ipsum is not simply random text</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="customNavigation">
                                                <a class="btn prev blog_prev">&nbsp;</a>
                                                <a class="btn next blog_next">&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Block Last Post -->
                                <section class="brands">
                                    <h2 class="h1 products-section-title text-uppercase">
                                        <a href="index7765.html?controller=manufacturer" title="Top Brands">      Popular Brands
                                        </a>
                                    </h2>
                                    <div class="products">
                                        <!-- Define Number of product for SLIDER -->
                                        <div class="customNavigation">
                                            <a class="btn prev brand_prev">&nbsp;</a>
                                            <a class="btn next brand_next">&nbsp;</a>
                                        </div>
                                        <ul id="brand-carousel" class="cz-carousel product_list">
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="index1cbd.html?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1" title="Gadget Zone">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/6.jpg" alt="Gadget Zone" />
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="index4e65.html?id_manufacturer=5&amp;controller=manufacturer&amp;id_lang=1" title="Initech space">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/5.jpg" alt="Initech space" />
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="index1ff1.html?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1" title="Looney Tunes">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/3.jpg" alt="Looney Tunes" />
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="indexb79b.html?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1" title="Massive Dynamic">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/8.jpg" alt="Massive Dynamic" />
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="indexd899.html?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1" title="Pro Tech Gear">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/9.jpg" alt="Pro Tech Gear" />
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="indexf682.html?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1" title="The Simpsons">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/4.jpg" alt="The Simpsons" />
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="brand-image">
                                                    <a href="index065e.html?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1" title="Weeds Capital">
                                                        <img class="lazyload" data-src="https://demo.codezeel.com/prestashop/PRS17/PRS170412/PRS01/img/m/7.jpg" alt="Weeds Capital" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </section>
                        <footer class="page-footer">
                            <!-- Footer content -->
                        </footer>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection