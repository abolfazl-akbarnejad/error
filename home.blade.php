@extends('main.layout.master')
@section('styles')
<title>{{$website_settnig->meta_title}}</title>

<style>
  .slider-container-mobile {
    position: relative;
    width: 100%;
    height: 300px; /* ارتفاع اسلایدر */
    overflow: hidden; /* جلوگیری از نمایش بخش‌های بیرونی */
}

.slider {
    display: flex; /* قرار دادن تصاویر در یک خط */
    transition: transform 0.5s ease-in-out; /* انیمیشن جابه‌جایی */
}

.slide {
    min-width: 100%; /* هر اسلاید عرض کامل صفحه */
    height: 100%; /* تطابق ارتفاع با والد */
    display: flex; /* برای قرار گرفتن تصاویر در مرکز */
    justify-content: center;
    align-items: center;
}

.slider img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* حفظ تناسب تصاویر */
}

button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}


</style>
@endsection
@section('content')
<div data-elementor-type="wp-page" data-elementor-id="1152" class="elementor elementor-1152">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-401a3d7c elementor-section-content-middle elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="401a3d7c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-narrow">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e815730" data-id="2e815730" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-619662da elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-swiper_sliderss" data-id="619662da" data-element_type="widget" data-widget_type="swiper_sliderss.default">
                        <div class="elementor-widget-container">

                            <div class="gallery swiper_produt">

                                <div class="swiper-container gallery-slider_product">
                                    <div class="swiper-wrapper">
                                        {{-- {{dd(banner_priority(1,'id', true))}} --}}
                                        {{-- @if (banner_priority(1, 'image_background') != null) --}}

                                        @foreach (banner_priority(1, 'id', true) as $key => $banner)
                                        <div class="swiper-slide items " style="background-image: url('{{ asset(urlencode($banner->image_background)) }}'); background-color: {{ $banner->background_color_code }}">

                                            <article class="product-item">
                                                <div class="img-product">
                                                    <span class="dots"> <i></i> </span>
                                                    <img decoding="async" src="{{ asset($banner->image_product) }}" alt="">
                                                </div>

                                                <div class="titles-item">
                                                    <h4>{{ $banner->title }}</h4>
                                                    <a class="product-item-link" href="#5">مشاهده محصول<i class="ri-arrow-left-line"></i></a>
                                                </div>
                                            </article>
                                        </div>
                                        @endforeach
                                        {{-- @endif --}}



                                    </div>
                                </div>


                                <div class="swiper-container gallery-thumbsـproduct">
                                    <div class="swiper-wrapper">




                                        @foreach (banner_priority(1, 'id', true) as $key => $banner)
                                        <div class="swiper-slide">


                                            <div class="item_slider">

                                                <img decoding="async" src="{{ asset($banner->image_product) }}">

                                                <span class="slider_star color2_back">
                                                    <i class="ri-star-s-fill"></i>
                                                    <i class="ri-star-s-fill"></i>
                                                    <i class="ri-star-s-fill"></i>
                                                    <i class="ri-star-s-fill"></i>
                                                    <i class="ri-star-s-fill"></i>
                                                </span>

                                            </div>


                                        </div>
                                        @endforeach



                                    </div>

                                </div>

                                <div class="button-prev"><i class="ri-arrow-up-s-line"></i></div>
                                <div class="button-next"><i class="ri-arrow-down-s-line"></i></div>
                                <div class="items-pagination"></div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-2eb83856 elementor-section-content-top elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2eb83856" data-element_type="section">
        <div class="elementor-container elementor-column-gap-narrow">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2a11759b" data-id="2a11759b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-19ddca2a elementor-widget elementor-widget-services_items" data-id="19ddca2a" data-element_type="widget" data-widget_type="services_items.default">
                        <div class="elementor-widget-container">

                            <div class="services_box">

                                @foreach ($services as $key => $service)
                                <article class="services_item noselect   {{ $key == 0 ? 'over elementor-repeater-item-a9a8251 ' : '' }}   ">
                                    <a href="#">

                                        {!! $service->icon !!}
                                        <h4>{{ $service->title }}</h4>
                                        <span>{{ $service->description }}</span>

                                    </a>
                                </article>
                                @endforeach



                            </div>



                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64f7d7a7" data-id="64f7d7a7" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6c201347 elementor-widget elementor-widget-services_links" data-id="6c201347" data-element_type="widget" data-widget_type="services_links.default">
                        <div class="elementor-widget-container">

                            <div class="services_links">


                                <article class="services_item noselect  elementor-repeater-item-a69c24c">
                                    <i class="ri-restart-line"></i>
                                    <h4>گردونه شانس</h4>
                                </article>


                                <article class="services_item noselect  elementor-repeater-item-11ddd16">
                                    <i class="ri-rocket-line"></i>
                                    <h4>ماموریت ها</h4>
                                </article>


                                <article class="services_item noselect  elementor-repeater-item-93af8ca">
                                    <i class="ri-gift-line"></i>
                                    <h4>جایزه</h4>
                                </article>


                            </div>



                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-21d7441b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="21d7441b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-narrow">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7913dd61" data-id="7913dd61" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">

                    <div class="elementor-element elementor-element-23da7dda elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-sldiers" data-id="23da7dda" data-element_type="widget" data-widget_type="sldiers.default">
                        <div class="elementor-widget-container">
                            <div class="slider-container-mobile">
                                <button class="prev">&#10094;</button>
                                <div class="slider">
                                    <div class="slide"><img src="https://plus.parskalas.com/wp-content/uploads/2022/07/3banner.jpg" alt="3banner"></div>
                                    <div class="slide"><img src="https://plus.parskalas.com/wp-content/uploads/2022/03/5slider.jpg" alt="5slider"></div>
                                    <div class="slide"><img src="https://plus.parskalas.com/wp-content/uploads/2022/03/2slider.jpg" alt="2slider"></div>
                                    <div class="slide"><img src="https://plus.parskalas.com/wp-content/uploads/2022/07/3bannrt.jpg" alt="3bannrt"></div>
                                </div>
                                <button class="next">&#10095;</button>
                            </div>
                        </div>
                    </div>
                    
                    

                    <div class="elementor-element elementor-element-315f60ab elementor-widget elementor-widget-carousel_offers" data-id="315f60ab" data-element_type="widget" data-widget_type="carousel_offers.default">
                        <div class="elementor-widget-container">
                            @if($discount_products->count() > 0)

                            <section class="carousel_offer">

                                <div class="back_caroslel">
                                    <div class="right_carousel">

                                        <h4><i class="flaticon-medal-3"></i>پیشنهاد شگفت انگیز</h4>

                                        <p>یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمانی کوتاه به دست مشتریان خود برساند</p>

                                    </div>


                                    <div class="left_carousel">

                                        <div class="swiper product-specials-swiper-slider modern" settings-slider="{&quot;nav&quot;:&quot;true&quot;,&quot;autoplay&quot;:&quot;false&quot;,&quot;delay&quot;:3000}">

                                            <div class="swiper-wrapper">


                                                @foreach ($discount_products as $discount_product )

                                                <div class="swiper-slide">
                                                    <div class="product-card">
                                                        <div class="product-thumbnail">
                                                            <a href="{{ route('main.product', $discount_product->slug) }}">

                                                                <div class="thumb-pro "><img src="{{ asset($discount_product->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="تصویر محصول {{$discount_product->name}}"></div>
                                                            </a>
                                                        </div>
                                                        <div class="product-card-body">
                                                            <h2 class="product-title">
                                                                <a href="{{ route('main.market.product', $discount_product->slug) }}">{{$discount_product->name}}</a>
                                                            </h2>

                                                        </div>

                                                        <!--price-->
                                                        <div class="index-prices-pro">

                                                            <div class="price_onsale_ar">

                                                                @if (discount($discount_product))
                                                                <del><span class="index-discount-pro">٪
                                                                        <p> {{ discount($discount_product)['percentageDifference'] ?? null }}
                                                                        </p>
                                                                    </span><span class="woocommerce-Price-amount amount price_sale"><bdi><bdi>{{ number_format($discount_product->price) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></bdi></span></del>
                                                                <ins><span class="woocommerce-Price-amount amount price_sale"><bdi>{{ discount($discount_product) == null ? number_format($discount_product->price) : number_format(discount($discount_product)['final_amount']) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></span></ins>
                                                                @else
                                                                <span class="woocommerce-Price-amount amount price_sale"><bdi><bdi>{{ discount($discount_product) == null ? number_format($discount_product->price) : number_format(discount($discount_product)['final_amount']) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></bdi></span>
                                                                @endif </div>
                                                        </div>

                                                        <div class="product-card-footer">
                                                            <div class="product-dates">
                                                                <div class="product-actions">
                                                                    <ul>
                                                                        <li>
                                                                            <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="افزودن به سبد خرید" aria-label="افزودن به سبد خرید" href="?add-to-cart=1887" data-quantity="1" class="button product_type_simple add_to_cart_button " rel="nofollow">
                                                                                <i class="prk-shopping-cart"></i>
                                                                            </a> </li>

                                                                        <li>
                                                                            <a role="button" class="sit-wishlist-btn before_add_wishlist" data-nonce="46c0c5cfb0" data-post-id="1887" data-action="add" data-admin-url="https://plus.parskalas.com/wp-admin/admin-ajax.php">
                                                                                <i class="prk-heart btns before"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating fa-num">
                                                                    <i class="ri-star-fill star"></i>
                                                                    <strong>0</strong>
                                                                    <span>(0) </span>
                                                                </div>
                                                            </div>

                                                            <div class="countdown-timer">


                                                                <div class="timer expired"></div>


                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                                @endforeach





                                            </div>
                                            <!-- If we need pagination -->
                                            <div class="swiper-pagination"></div>

                                            <!-- If we need navigation buttons -->
                                            <div class="swiper-button-prev specials_nav"></div>
                                            <div class="swiper-button-next specials_nav"></div>

                                        </div>

                                    </div>
                                    <!-- در صورت نبودن محصول در لیست -->
                                </div>

                            </section>
                            @endif

                            <script>
                                jQuery(document).ready(function() {
                                    const settings = JSON.parse(jQuery('.product-specials-swiper-slider').attr("settings-slider"));
                                    const productSpecialsSwiperSlider = new Swiper(
                                        ".product-specials-swiper-slider", {
                                            // Optional parameters
                                            spaceBetween: 10
                                            , autoplay: settings.autoplay == "true" ? true : false,

                                            // If we need pagination
                                            pagination: {
                                                el: ".swiper-pagination"
                                                , clickable: true
                                                , dynamicBullets: true
                                            , },

                                            // Navigation arrows

                                            navigation: {
                                                nextEl: ".swiper-button-next.specials_nav"
                                                , prevEl: ".swiper-button-prev.specials_nav"
                                            , },

                                            breakpoints: {
                                                1200: {
                                                    slidesPerView: 5
                                                , }
                                                , 992: {
                                                    slidesPerView: 3
                                                    , spaceBetween: 10
                                                , }
                                                , 576: {
                                                    slidesPerView: 3
                                                    , spaceBetween: 10
                                                , }
                                                , 480: {
                                                    slidesPerView: 2
                                                    , spaceBetween: 8
                                                , }
                                            , }
                                        , }
                                    );

                                });

                            </script>

                        </div>
                    </div>
                    @if ($product_categories->count() > 0)
                    <div class="elementor-element elementor-element-320e45 elementor-widget elementor-widget-item_categorys" data-id="320e45" data-element_type="widget" data-widget_type="item_categorys.default">
                        <div class="elementor-widget-container">

                            <section class="promotion-categories ">
                                <div class="head-product">
                                    <h3>
                                        <span class="titles-pro">
                                            <span>دسته بندی های دست چین</span>
                                        </span>
                                    </h3>
                                </div>
                                <div class="categorys_item ">


                                    @foreach ($product_categories as $product_category)
                                    <article class="promotion_term elementor-repeater-item-c09d966">

                                        <a href="{{ route('main.products', ['parametr' => 'category', 'category' => $product_category->name]) }}">

                                            <img decoding="async" class="promotion_img" src="{{ asset($product_category->image) }}" alt="promotion-categories">
                                            <h4 class="promotion_name ">{{ $product_category->name }}</h4>

                                        </a>

                                    </article>
                                    @endforeach




                                </div>

                            </section>



                        </div>
                    </div>
                    @endif

                    @if ($promotion_products->count() > 0)
                    <div class="elementor-element elementor-element-19efad11 elementor-hidden-mobile elementor-widget elementor-widget-promotions_sliders" data-id="19efad11" data-element_type="widget" data-widget_type="promotions_sliders.default">
                        <div class="elementor-widget-container">


                            <div class="promotion_produt ">


                                <!-- اسلاید ها -->
                                <div class="swiper-container swiper_promotion_produt swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl swiper-watch-progress swiper-backface-hidden" settings-slider="{&quot;autoplay&quot;:&quot;true&quot;}"> <span class="offer_titles">
                                        <img decoding="async" src="{{ asset('images/local/my-promotion-type.png') }}" alt="بخش پیشنهادات ما">
                                    </span>
                                    <div class="swiper-wrapper">


                                        @foreach ($promotion_products as $promotion_product)
                                        <div class="swiper-slide promotion_item" data-swiper-autoplay="2500">

                                            <div class="promotion_item_right">

                                                <a href="{{ route('main.market.product', $promotion_product->slug) }}">
                                                    <!-- قیمت -->
                                                    <div class="viewe_single_price item_price">


                                                        <div class="index-prices-pro">
                                                            <div class="price_onsale_ar"><span class="woocommerce-Price-amount amount price_sale"><bdi><bdi>
                                                                            {{ discount($promotion_product) == null ? number_format($promotion_product->price) : number_format(discount($promotion_product)['final_amount']) }}
                                                                            <span class="woocommerce-Price-currencySymbol">تومان</span></bdi></bdi></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- عنوان -->
                                                    <div class="item_title">
                                                        <h4> {{ $promotion_product->name }}</h4>
                                                    </div>

                                                    @if ($promotion_product->properties->count() > 0)
                                                    <div class="item_atribiotic">

                                                        <div class="meta-additional"><span class="atri-single">ویژگی
                                                                های محصول</span><span class="short-attributes">
                                                                <ul class="">
                                                                    @foreach ($promotion_product->properties as $property)
                                                                    @if($property->option)
                                                                    <li class="woocommerce-product-attributes-item">
                                                                        <span class="item__label">{{ $property->option->name }}:
                                                                        </span><span class="item__value">:
                                                                            {{ $property->value }}</span>
                                                                    </li>
                                                                    @endif
                                                                    @endforeach

                                                                </ul>
                                                            </span></div>
                                                    </div>
                                                    @endif
                                                    <!-- تایمر -->
                                                    <div class="item_timer">


                                                        <div class="timers expired block"></div>


                                                    </div>

                                                </a>
                                            </div>

                                            <div class="promotion_item_left">

                                                <a href="{{ route('main.market.product', $promotion_product->slug) }}">

                                                    <div class="item_thumbnail">

                                                        <div class="thumb-pro "><img fetchpriority="high" decoding="async" src="{{ asset($promotion_product->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="تصویر عکس محصول srcset=" {{ asset($promotion_product->anme) }}"" srcset="{{ asset($promotion_product->image) }}">
                                                        </div>
                                                    </div>

                                                </a>

                                            </div>

                                        </div>
                                        @endforeach







                                    </div>

                                </div>

                                <!--دکمه های تکرار شونده اسلایدر -->
                                <div class="swiper-container swiper_item_promotion_produt">

                                    <div class="swiper-wrapper ">

                                        {{-- <div class=""> --}}
                                        @foreach ($promotion_products as $promotion_product)
                                        <div class="swiper-slide">

                                            <span>
                                                {{ $promotion_product->name }} </span>

                                        </div>
                                        @endforeach

                                        {{-- </div> --}}

                                        <span class="go_more_link">

                                            <a href="#" target="_blank">
                                                مشاهده همه محصولات شگفت انگیز
                                            </a>

                                        </span>

                                    </div>

                                </div>

                                <!-- در صورت نبودن محصول در لیست -->
                            </div>



                            <script>
                                jQuery(function() {

                                    // تنظیمات دکمه اسلاید ویژه
                                    var sliderThumbs = new Swiper('.swiper_item_promotion_produt', {


                                        direction: 'vertical'
                                        , slidesPerView: 9
                                        , slideToClickedSlide: true
                                        , spaceBetween: 0
                                        , freeMode: true,


                                    });



                                    // تنظیمات اسلاید ویژه
                                    var settings = JSON.parse(jQuery('.swiper_promotion_produt').attr("settings-slider"));
                                    var sliderImages = new Swiper('.swiper_promotion_produt', {

                                        lazy: true
                                        , effect: 'fade'
                                        , spaceBetween: 0
                                        , autoplay: settings.autoplay == "true" ? true : false
                                        , thumbs: {
                                            swiper: sliderThumbs
                                        }
                                        , mousewheel: {
                                            invert: false
                                        , },

                                        breakpoints: {
                                            990: {
                                                mousewheel: false
                                            , }
                                            , 0: { // при 768px и выше
                                                mousewheel: false
                                            , }
                                        }
                                    });


                                });

                            </script>

                        </div>
                    </div>
                    @endif

                </div>
            </div>
    </section>


    <section class="elementor-section elementor-top-section elementor-element elementor-element-7748e273 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7748e273" data-element_type="section">
        <div class="elementor-container elementor-column-gap-narrow">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5734d548" data-id="5734d548" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">


                    <div class="elementor-element elementor-element-433a6fb9 elementor-widget elementor-widget-dynamic_banners" data-id="433a6fb9" data-element_type="widget" data-widget_type="dynamic_banners.default">
                        <div class="elementor-widget-container">


                            <div class="daynamic_banner">

                                @foreach (banner_priority(2, 'id', true) as $banner)
                                <div class="daynamic_banner_item  " style="background-color: {{ $banner->background_color_code }}">

                                    <div class="dbanner_right">
                                        {{-- <h4>ساعت هوشمند</h4> --}}
                                        <span>{{ $banner->title }}</span>
                                        <a class="product-item-link" href="#">خرید<i class="ri-arrow-left-line"></i></a>
                                    </div>

                                    <div class="dbanner_left swiper_produt">

                                        <div class="img-banner">

                                            <img decoding="async" src="{{ asset($banner->image_product) }}">
                                        </div>

                                    </div>

                                </div>
                                @endforeach


                            </div>


                        </div>
                    </div>

                    @if($Best_selling_products->count() >0)
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-4aecee61 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4aecee61" data-element_type="section" data-settings="{" background_background":"classic"}"="">
                        <div class="elementor-container elementor-column-gap-wide">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22451ff" data-id="22451ff" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-29a97ec2 elementor-widget elementor-widget-grid_item_products" data-id="29a97ec2" data-element_type="widget" data-widget_type="grid_item_products.default">
                                        <div class="elementor-widget-container">

                                            <section class="mgrid_product grid_product ">
                                                <div class="mcarousel_product_head">
                                                    <h4>
                                                        <i class="flaticon-discount-bag"></i> پرفروش ترین کالاها
                                                    </h4>
                                                    <a class="product-item-link" href="#">مشاهده محصول<i class="ri-arrow-left-line"></i></a>
                                                </div>

                                                <div class="main_grid_product">
                                                    @foreach ( $Best_selling_products as $Best_selling_product)
                                                    <article class="grid_item">

                                                        <div class="posts_grid">

                                                            <a class="post_grid" href="{{ route('main.market.product', $Best_selling_product->slug) }}">

                                                                <div class="grid_item_rtl">
                                                                    <!--thumbnail-->
                                                                    <img loading="lazy" src="{{ asset($Best_selling_product->image) }}" class="center wp-post-image" alt="">
                                                                </div>


                                                                <div class="grid_item_ltr">


                                                                    <!--title-->
                                                                    <h4>{{ $Best_selling_product->name }}</h4>

                                                                    <!--price-->
                                                                    <div class="index-prices-pro">

                                                                        <div class="price_onsale_ar">
                                                                            @if (discount($Best_selling_product))
                                                                            <del><span class="index-discount-pro">٪
                                                                                    <p> {{ discount($Best_selling_product)['percentageDifference'] ?? null }}
                                                                                    </p>
                                                                                </span><span class="woocommerce-Price-amount amount price_sale"><bdi><bdi>{{ number_format($Best_selling_product->price) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></bdi></span></del>
                                                                            <ins><span class="woocommerce-Price-amount amount price_sale"><bdi>{{ discount($Best_selling_product) == null ? number_format($Best_selling_product->price) : number_format(discount($Best_selling_product)['final_amount']) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></span></ins>
                                                                            @else
                                                                            <span class="woocommerce-Price-amount amount price_sale"><bdi><bdi>{{ discount($Best_selling_product) == null ? number_format($Best_selling_product->price) : number_format(discount($Best_selling_product)['final_amount']) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></bdi></span>
                                                                            @endif
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </a>
                                                        </div>

                                                    </article>
                                                    @endforeach
                                                </div>


                                                <!-- در صورت نبودن محصول در لیست -->

                                            </section>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @if($blogs->count() > 0)
    <section class="elementor-section elementor-top-section elementor-element elementor-element-3c19c51d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c19c51d" data-element_type="section">
        <div class="elementor-container elementor-column-gap-narrow">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33c7a36a" data-id="33c7a36a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1abfb0f7 elementor-widget elementor-widget-mcarousel_posts" data-id="1abfb0f7" data-element_type="widget" data-widget_type="mcarousel_posts.default">
                        <div class="elementor-widget-container">

                            <section class="mcarousel_product modern_blog">

                                <div class="mcarousel_product_head">

                                    <h4>
                                        آخرین های وبلاگ </h4>
                                    <a class="product-item-link" href="{{route('main.content.index')}}">مشاهده بیشتر<i class="ri-arrow-left-line"></i></a>
                                </div>


                                <div class="swiper post-carousel-swiper-slider">
                                    <div class="swiper-wrapper">


                                        @foreach ($blogs as $blog)
                                        <div class="swiper-slide">
                                            <article class="post-content">
                                                <a href="{{ route('main.content.blog', $blog->slug) }}">

                                                    <div class="post_tumbnail">

                                                        <img loading="lazy" decoding="async" src="{{ asset($blog->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="">
                                                    </div>

                                                    <div class="post_title">

                                                        {{$blog->title}}
                                                    </div>

                                                </a>
                                            </article>
                                        </div>
                                        @endforeach



                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev mpostcarusel_nav"></div>
                                    <div class="swiper-button-next mpostcarusel_nav"></div>
                                </div>


                            </section>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif
</div>
@endsection

@section('scripts')
<script src="{{ asset('main_assets/js/banner_customer.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.post-carousel-swiper-slider', {
            loop: true, // فعال‌سازی حلقه
            autoplay: {
                delay: 3000, // تغییر اسلاید به صورت خودکار هر 3 ثانیه
                disableOnInteraction: false, // ادامه اتوپلی پس از تعامل
            }
            , navigation: {
                nextEl: '.swiper-button-next', // دکمه بعد
                prevEl: '.swiper-button-prev', // دکمه قبل
            }
            , slidesPerView: 4, // تعداد اسلایدهای قابل مشاهده
            spaceBetween: 10, // فاصله بین اسلایدها
        });
    });



    const swiper = new Swiper('.post-carousel-swiper-slider', {
        loop: true
        , autoplay: {
            delay: 3000
            , disableOnInteraction: false
        , }
        , navigation: {
            nextEl: '.swiper-button-next'
            , prevEl: '.swiper-button-prev'
        , }
        , slidesPerView: 4, // تعداد اسلایدهایی که به صورت همزمان نمایش داده می‌شوند
        spaceBetween: 20, // فاصله بین اسلایدها
    });

    $(document).ready(function() {
        $(".slide-carousel").owlCarousel({
            loop: true
            , nav: true
            , dots: true
            , autoplay: true
            , autoplayTimeout: 3000
            , items: 1
        });
    });

</script>


{{-- slider --}}
<script>
 const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let currentIndex = 0;

function updateSlider() {
    const slideWidth = slides[0].clientWidth; // عرض هر اسلاید
    slider.style.transform = `translateX(${-currentIndex * slideWidth}px)`; // جابه‌جایی دقیق
}

// دکمه بعدی
nextBtn.addEventListener('click', () => {
    currentIndex++;
    if (currentIndex >= slides.length) {
        currentIndex = 0; // بازگشت به اولین اسلاید
    }
    updateSlider();
});

// دکمه قبلی
prevBtn.addEventListener('click', () => {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = slides.length - 1; // رفتن به آخرین اسلاید
    }
    updateSlider();
});

// تطبیق با تغییر اندازه صفحه
window.addEventListener('resize', updateSlider);

// مقداردهی اولیه
updateSlider();


</script>
@endsection
