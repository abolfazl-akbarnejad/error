<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <!-- لازم -->
    @include('main.layout.head_tag')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    @yield('styles')
    <!-- <script src="js/wp-emoji-release.min.js" defer=""></script> -->
</head>

<body class="index-page default">



    <!--header-->

    <div id="blacki" class="blacki"></div>



    <!-- navbar -->
    @include('main.layout.navbar')





    @yield('content')


    @if($view_histories->count() > 0)

    <div class="last_posts">
        <div class="products_seen">
            کالا هایی که دیده ایید ! </div>
        <ul class="bottom_last_posts">
            @foreach ($view_histories as $history )

            <li>
                <a href="{{route('main.market.product'   , $history->slug)}}">
                    <div class="thumb-pro hover-image"><img src="{{ asset($history->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="تصویر کالای {{$history->name}} که مشاهده کردید"></div>
                    <p>{{$history->name}}</p>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
    @endif

    <div class="clear"></div>

    <!-- footer -->
    @include('main.layout.footer')
    <div class="navigation-overlay"></div>

    <div class="onliner_main_loading">

        <div class="content_loading">
            <div class="loader-wrapper">

                <img src="{{asset($website_settnig->meta_title)}}" alt="فروشگاه اینترنتی دست چین">
                <div class="loader-bullets">
                    <i class="loader-bullet"></i>
                    <i class="loader-bullet"></i>
                    <i class="loader-bullet"></i>
                    <i class="loader-bullet"></i>
                </div>

            </div>

        </div>

    </div>



    <div class="prk-sms-loginform">

        <div class="modal micromodal-slide" id="loginmodal">
            <div class="modal__overlay" data-micromodal-close="">

                <div class="modal__container" style="width: 31%;max-width: 500px;position: relative;">
                    <div class="prk-header-login">

                        <button data-micromodal-close="modalvidoe" class="close-box"></button>
                    </div>

                    <section class="prk-loginbox">
                        <div class="header-loginbox">

                            <!-- لوگو مدال -->
                            <div class="logo-loginbox">
                                <a href="{{ route('main.home') }}">
                                    <img src="{{asset($website_settnig->meta_title)}}" alt="فروشگاه اینترنتی دست چین"> </a>
                            </div>

                        </div>


                        <div id="stm-sms-form-holder">

                            <form method="post" id="stm-form-sms" class="login form-login" novalidate="novalidate">
                                <div class="title-loginbox">
                                    <span>ورود / عضویت</span>
                                </div>
                                <p class="stm-sms-holder form-row">


                                    <label class="login-sms-message">موبایل خود را وارد نمایید.</label>

                                    <label class="phone-loginbox">

                                        <input name="login[email_phone]" type="text" placeholder="" value="" class="woocommerce-Input woocommerce-Input--text input-text form-control stm-user-type js-input-field w-100" autofocus="">

                                    </label>
                                </p>

                                <div id="email_phone_error" style="display: none">شماره موبایل یا ایمیل نامعتبر است
                                </div>

                                <div>
                                    <button type="submit" class="stm-login-sms-btn">
                                        ورود / عضویت

                                    </button>
                                </div>

                            </form>

                        </div>

                        <div class="footer-loginbox">
                            <p class="copyright-login-footer">
                                با ورود و یا ثبت نام در سایت شما <a class="linkp" href="" target="_blank">شرایط و قوانین</a> استفاده از
                                سرویس های سایت و <a href="#" target="_blank">قوانین حریم خصوصی</a> آن را
                                می‌پذیرید. </p>
                        </div>
                    </section>

                </div>
            </div>
        </div>

    </div>





    <div id="cart-sidebar" class="prk-static-sidebar style-1">

        @if ($cart_items->count() == 0)
        <div class="widget_shopping_cart_content">

            <div class="cart-empty">
                <img loading="lazy" src="{{ asset('svg/local/empty-cart.svg') }} " width="84" height="133" alt="empty-cart">
                <p>هیچ محصولی در سبد خرید نیست.</p>
                <div>جهت مشاهده محصولات بیشتر به صفحات زیر مراجعه نمایید.</div>
                <ul>
                    <li>
                        <a href="{{ route('main.home') }}">صفحه اصلی</a>
                    </li>
                    <li class="separator"></li>
                    <li>

                        <a href="#">فروشگاه</a>{{-- باید درست بشه --}}
                    </li>
                </ul>
            </div>
        </div>
        @else
        <div id="cart-sidebar_item" class="prk-static-sidebar style-1 nasa-active" aria-hidden="true">

            <div class="header-carter">
                <span>شما این محصولات را انتخاب کرده اید<em class="em-plus">{{ $cart_items->count() }}</em></span>
                <a href="javascript:void(0);" class="close-box prk-sidebar-close" title="Close" rel="nofollow"></a>

            </div>


            <div class="widget_shopping_cart_content" style="opacity: 1;">
                <div class="nasa-minicart-items">
                    <div class="woocommerce-mini-cart cart_list product_list_widget ">
                        @foreach ($cart_items as $cart_item)
                        {{-- {{ dd($cart_item->product) }} --}}
                        <div class="flexed mini-cart-item woocommerce-mini-cart-item mini_cart_item">
                            <div class="prk-image-cart-item flexed">
                                <a href="{{ route('main.market.product', $$cart_item->product->slug) }}" class="remove remove_product_mini_cart remove_from_cart_button item-in-cart nasa-stclose small" aria-label="Remove {{ $cart_item->product->name }} from cart">
                                    <i class="ri-close-line"></i>
                                </a>
                                <img src="{{ asset($cart_item->product->image) }}" alt="{{ $cart_item->product->name }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
                            </div>
                            <div class="prk-info-cart-item padding-left-15 rtl-padding-left-0 rtl-padding-right-15">
                                <div class="mini-cart-info">
                                    <div class="nasa-flex jbw align-start">
                                        <a class="product-name nasa-bold" href="{{ $cart_item->product->url }}">
                                            {{ $cart_item->product->name }}
                                        </a>
                                    </div>
                                    <div class="flexed mini-cart-item-price">
                                        <div class="quantity-wrap flexed">
                                            <div class="cart_list_product_quantity">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi> {{ discount($cart_item->product) == null ? number_format($cart_item->product->price) : number_format(discount($cart_item->product)['final_amount']) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi>
                                                </span>
                                            </div>
                                            <div class="quantity">
                                                <a href="javascript:void(0);" class="increase-qty plus" rel="nofollow"><i class="bbloomer-plus"></i></a>
                                                <input type="number" class="input-text qty text" name="cart[{{ $cart_item->key }}][qty]" value="{{ $cart_item->number }}" min="0" step="1">
                                                <a href="javascript:void(0);" class="decrease-qty minus" rel="nofollow"><i class="bbloomer-minus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>

                <div class="nasa-minicart-footer">

                    <div class="minicart_total_checkout woocommerce-mini-cart__total total">
                        {{-- <strong>جمع جزء:</strong> <span
                                class="woocommerce-Price-amount amount"><bdi>268,000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">تومان</span></bdi></span> --}}
                        <div class="total-cart-wrap flexed jbw">
                            <span class="total-price-label2">
                                مجموع </span>

                            <span class="total-price-2">
                                <strong><span class="woocommerce-Price-amount amount"><bdi>{{ number_format(cost_data()['prices_product']) }}&nbsp;<span class="woocommerce-Price-currencySymbol">تومان</span></bdi></span></strong>
                            </span>
                        </div>
                    </div>
                    <div class="btn-mini-cart inline-lists text-center">

                        <p class="woocommerce-mini-cart__buttons buttons">
                            <a href="https://plus.parskalas.com/cart/" class="button wc-forward">مشاهده سبد
                                خرید</a><a href="https://plus.parskalas.com/checkout/" class="button checkout wc-forward">تسویه حساب</a>
                        </p>

                    </div>
                </div>
            </div>



        </div>
        @endif


    </div>

    <script type="text/template" id="ns-sale-notification-tml">
        <div class="wrapper-noti ">
                <div class="product-image">
                    <img alt="" src="" />
                </div>
                
                <div class="theme-bg"></div>

                <div class="wrapper-theme">
                
                    <div class="noti-title">
                    </div>

                    <a class="noti-body nasa-bold" href="" title="" target="_blank"></a>
                    
                    <div class="noti-time flexed"><span class="verify margin-left-10 rtl-margin-left-0 rtl-margin-right-10 flexed"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="14" height="14" viewBox="0 0 32 32" fill="currentColor"><path d="M16 2.672c-7.361 0-13.328 5.967-13.328 13.328s5.968 13.328 13.328 13.328c7.361 0 13.328-5.967 13.328-13.328s-5.967-13.328-13.328-13.328zM16 28.262c-6.761 0-12.262-5.501-12.262-12.262s5.5-12.262 12.262-12.262c6.761 0 12.262 5.501 12.262 12.262s-5.5 12.262-12.262 12.262z" /><path d="M22.667 11.241l-8.559 8.299-2.998-2.998c-0.312-0.312-0.818-0.312-1.131 0s-0.312 0.818 0 1.131l3.555 3.555c0.156 0.156 0.361 0.234 0.565 0.234 0.2 0 0.401-0.075 0.556-0.225l9.124-8.848c0.317-0.308 0.325-0.814 0.018-1.131-0.309-0.318-0.814-0.325-1.131-0.018z" /></svg></span></div>
                </div>
            </div>
            
            <a href="javascript:void(0);" class="close-noti" rel="nofollow"></a>
        </script>
    <!-- Event After Add To Cart --><input type="hidden" name="nasa-event-after-add-to-cart" value="sidebar">
    <!-- Confirm text - Value to 0 in Quantity - Cart Sidebar -->
    <input type="hidden" name="nasa_change_value_0" value="Are you sure you want to remove it?">
    <style>
        .mfp-bg {
            background: #000000;
        }


        .prk_table_container .prk-table-hover {
            background: #999999;
        }

        .prk_table_container .prk-table-cursor {
            background: #2C72AD;
            color: #FFFFFF;
        }

    </style><!-- start of quick-view-modal -->
    <div class="remodal view_product remodal-lg nohead" data-remodal-id="quick-view-modal" data-remodal-options="hashTracking: false">

        <div class="remodal-header">
            <button data-remodal-action="close" class="remodal-close"></button>
        </div>

        <div class="onliner_main_loading product_view">


            <div class="content_loading">
                <div class="loader-wrapper">

                    <img src="{{asset($website_settnig->meta_title)}}" alt="فروشگاه اینترنتی دست چین">
                    <div class="loader-bullets">
                        <i class="loader-bullet"></i>
                        <i class="loader-bullet"></i>
                        <i class="loader-bullet"></i>
                        <i class="loader-bullet"></i>
                    </div>

                </div>

            </div>


        </div>

        <div class="remodal-content">

            <div class="product-detail-container">



            </div>

        </div>



    </div>
    <!-- end of quick-view-modal -->
    <!-- لازم -->

    @include('main.layout.script')
    @yield('scripts')
</body>

</html>
