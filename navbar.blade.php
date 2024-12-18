<header class="header desctop header_def  have_location">

    <div class="header-borner">
        <div class="continer noselect_moblie">

            <div class="flexed">

                <div class="col-1">

                    <!--icon-menu-->
                    <div class="btn-menu1 toggle-navigation" id="icon-menu">
                        <svg id="Layer" height="28" viewBox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
                            <path id="menu-right-alt" d="m21 6.75h-13a.75.75 0 0 1 0-1.5h13a.75.75 0 0 1 0 1.5zm.75 5.25a.75.75 0 0 0 -.75-.75h-18a.75.75 0 0 0 0 1.5h18a.75.75 0 0 0 .75-.75zm0 6a.75.75 0 0 0 -.75-.75h-9a.75.75 0 0 0 0 1.5h9a.75.75 0 0 0 .75-.75z" fill="#5C677D"></path>
                        </svg>
                        <span class="menu-text">منو</span>
                    </div>

                    <!--logo-->
                    <div class="logo">
                        <a href="{{route('main.home')}}">
                            <img src="{{ asset($website_settnig->logo) }}" alt="فروشگاه اینترنتی دست چین"> </a>
                    </div>

                    <div class="call-page mobile">
                        <a href="shop"><i class="flaticon-question-6"></i></a>
                    </div>

                </div>

                <div class="col-mobile">


                    <div class="col-2 row">

                        <div class="search-box">

                            <!-- فرم جستجو پیشرفته -->
                            <form class="form_search desktop header_def search_input prk-plus search-section" action="{{ route('main.products.search', ['q' => 'none']) }}" method="GET">

                                <input class="prk_input_serach" autocomplete="off" value="{{ old('search', $data['search'] ?? null) }}" type="text" name="search" id="txt_search" placeholder="جستجو در بین 1500 محصول تخفیف دار">
                                <input type="hidden" value="product" name="post_type">

                                <button type="submit" id="submit_search" value=""> <i class="prk-search-normal-1"></i> </button>
                                <div class="clear"></div>

                                <div class="main_results_ajax_search" style="display: none;">
                                    <span class="prk_close_search_box"><i class="ri-arrow-right-line"></i></span>
                                    <span class="prk_close_search_result"><i class="ri-close-circle-fill"></i></span>
                                    <div class="products_resulter">

                                    </div>

                                    {{-- <!-- تصویر بنر جستجو-->
                                    <div class="search_image">
                                        <a href="###">
                                            <img src="" alt="جستجو">
                                        </a>
                                    </div> --}}

                                    <!-- جستجوی پر طرفدار-->
                                    <div class="promote_searchs"><span><i class="ri-fire-line"></i> جستجوی پرطرفدار</span>
                                        <ul class="search-result-tags">
                                            <li><a href="https://plus.parskalas.com/?s=گوشی و موبایل&amp;post_type=product" class="search-result-tag">گوشی و موبایل <i class="ri-arrow-left-s-line"></i></a></li>
                                            <li><a href="https://plus.parskalas.com/?s=آیفون&amp;post_type=product" class="search-result-tag">آیفون <i class="ri-arrow-left-s-line"></i></a></li>
                                            <li><a href="https://plus.parskalas.com/?s=اپل واچ&amp;post_type=product" class="search-result-tag">اپل واچ <i class="ri-arrow-left-s-line"></i></a></li>
                                        </ul>
                                    </div>


                                </div>


                            </form>





                        </div>





                    </div>


                    <div class="col-3 row">



                        <i class="line-account"></i>





                        <div class="prk-plus prk-account noselect nologin" data-custom-open="loginmodal">



                            <div class="account_mobile">
                                <span data-custom-open="loginmodal" class="account-icon"><i class="prk-user"></i></span>
                            </div>



                            <div class="account noselect ">
                                <div class="flexed">
                                    <span class="account-icon"><i class="flaticon-user-8"></i></span>
                                    <span class="account-text"></span>
                                    <a rel="nofollow" href="{{ route('auth.loginForm') }}"  class="account-text">ورود / ثبت نام</a>
                                    <i class="prk-arrow-down-1 arrow_icon"></i>
                                </div>
                            </div>



                            {{-- <div id="prk-dashboard" class="prk-dashboard">
                 
                         <ul>
                 
                                       <span>
                              <a data-custom-open="loginmodal">وارد شوید</a>
                             </span>
                             <span>
                               کاربر جدید هستید؟
                              <a href="https://plus.parskalas.com/my-account/">ثبت نام</a>
                             </span>
                 
                           
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                               <a href="https://plus.parskalas.com/my-account/">پیشخوان</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                               <a href="https://plus.parskalas.com/my-account/orders/">سفارش‌ها</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                               <a href="https://plus.parskalas.com/my-account/downloads/">دانلودها</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                               <a href="https://plus.parskalas.com/my-account/edit-address/">آدرس</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--sit-wishlist">
                               <a href="https://plus.parskalas.com/my-account/sit-wishlist/">علاقه مندی ها</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--notification">
                               <a href="https://plus.parskalas.com/my-account/notification/">اعلانات من</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--comments">
                               <a href="https://plus.parskalas.com/my-account/comments/">نظرات</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--ordertrak">
                               <a href="https://plus.parskalas.com/my-account/ordertrak/">پیگیری سفارش</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                               <a href="https://plus.parskalas.com/my-account/edit-account/">جزئیات حساب</a>
                             </li>
                 
                           
                             <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                               <a href="https://plus.parskalas.com/my-account/customer-logout/?_wpnonce=5bfe41df64">بیرون رفتن</a>
                             </li>
                 
                           
                 
                         </ul>
                 
                       </div> --}}

                        </div>

                        <!--dashboard-->




                        <i class="line-account"></i>


                        <a href="{{ route('main.cart_item.index') }}" class=" nasa-flex jc" title="Cart" rel="nofollow">
                            <span class="icon-wrap cart-btn">
                                <i class="prk-shopping-cart"></i>
                                <em class="nasa-cart-count nasa-mini-number cart-number mini_cart_counter hidden-tag nasa-product-empty">{{$count_item}}</em>
                            </span>
                        </a>



                    </div>

                </div>

            </div>




        </div>

    </div>



    <div class="menus ">
        <div class="continer">
            <nav class="top-nav link_promot_box">

                <ul class="prk_mega_menu  ">

                    <style>
                        .prk_mega_menu #menu-item-309>ul {
                            background-image: url(images/2-cat.png);
                            min-height: ;
                        }

                    </style>
                    <li id="menu-item-309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega_menu_two_level">
                        <a href="#"><span class="item-icon-title"> <img src="{{asset('images/local/shop.png')}}" alt="image-icon-menu" width="18">
                                <span class="title">دسته بندی ها</span></span></a>
                        <ul class="sub-menu prk-level-0">
                            @foreach ($menu_categories as $menu )

                            <li id="menu-item-310" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#"> {{$menu->name}}</span></span></a>
                                <ul class="sub-menu prk-level-1">
                                    @foreach ($menu->children as $child )

                                    <li id="menu-item-311" class="menu-item mکالای دیجیتالenu-item-type-taxonomy menu-item-object-product_cat"><a href="{{ route('main.products', ['parametr' => 'category', 'category' => $child->name]) }}"> {{$child->name}}</span></span></a></li>
                                    @endforeach

                                </ul>
                            </li>
                            @endforeach


                        </ul>
                    </li>

                    @if($menus->count()>0)
                    @foreach ($menus as $menu)

                    @if($menu->children->count() >0)
                    <li id="menu-item-351" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children clasic_menu"><a href="#"> منوی کلاسیک</span></span></a>
                        <ul class="sub-menu prk-level-0">
                            @foreach ($menu->children as $child_grup1)
                            @if($child_grup1->children->count() >0)
                            <li id="menu-item-353" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#"> سطح اول</span></span></a>
                                <ul class="sub-menu prk-level-1">
                                    @foreach ( $child_grup1->children as $child_grup2 )
                                    <li id="menu-item-355" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{ url($child_grup2->url) }}"><span class="title">{{$child_grup2->name}}</span></span></a></li>
                                    @endforeach


                                </ul>
                            </li>
                            @else
                            <li id="menu-item-352" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{ url($child_grup1->url) }}"><span class="title">{{$child_grup1->name}}</span></span></a></li>


                            @endif

                            @endforeach
                        </ul>
                    </li>

                    @else

                    <li id="menu-item-2175" class="menu-item menu-item-type-post_type menu-item-object-page clasic_menu"><a href="{{ url($menu->url) }}"> {{$menu->name}}</span></span></a></li>
                    @endif
                    @endforeach

                    @endif
                </ul>





            </nav>
        </div>

    </div>







    {{-- menu phone --}}
    <nav id="mobile-menu1" class="modal-menu modern">

        <div class="logo-mobile">
            <img src="{{ asset($website_settnig->logo) }}" alt="فروشگاه اینترنتی دست چین"> </div>

        <div class="off-canvas-main">

            <div class="menu-%d9%81%d9%87%d8%b1%d8%b3%d8%aa-%d8%a7%d8%b5%d9%84%db%8c-container">
                <ul id="menu-%d9%81%d9%87%d8%b1%d8%b3%d8%aa-%d8%a7%d8%b5%d9%84%db%8c" class="menu">

                    <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-309"><a href="#"><img src="{{ asset('images/local/shop.png') }}" alt="image-icon-menu" width="18"> لیست کالاها</a>
                        <ul class="sub-menu">
                            @foreach ($menu_categories as $menu )

                            <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-310"><a href="#">{{$menu->name}}</a>
                                <ul class="sub-menu">
                                    @foreach ($menu->children as $child )

                                    <li id="navi" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-311"><a href="{{ route('main.products', ['parametr' => 'category', 'category' => $child->name]) }}">{{$child->name}}</a></li>
                                    @endforeach


                                </ul>
                            </li>
                            @endforeach


                        </ul>
                        <span class="toggle-submenu"></span>
                    </li>
                    <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-351"><a href="#">منوی کلاسیک</a>
                        <ul class="sub-menu">
                            <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-352"><a href="#">سطح اول</a></li>
                            <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-353"><a href="#">سطح اول</a>
                                <ul class="sub-menu">
                                    <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-355"><a href="#">سطح دوم</a></li>
                                    <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-356"><a href="#">سطح دوم</a>
                                        <ul class="sub-menu">
                                            <li id="navi" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-354"><a href="#">سطح سوم</a></li>
                                            <span class="close-submenu"></span>
                                        </ul>
                                        <span class="toggle-submenu"></span>
                                    </li>
                                    <span class="close-submenu"></span>
                                </ul>
                                <span class="toggle-submenu"></span>
                            </li>
                            <span class="close-submenu"></span>
                        </ul>
                        <span class="toggle-submenu"></span>
                    </li>
                    <li id="navi" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2175"><a href="https://plus.parskalas.com/faq/">سوالی دارید؟</a></li>
                    <li id="navi" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-875"><a href="https://plus.parskalas.com/product-category/%d9%81%d8%b1%d9%88%d8%b4-%d9%88%db%8c%da%98%d9%87/">فروش ویژه</a></li>
                </ul>
            </div>
        </div>

    </nav>

</header>
