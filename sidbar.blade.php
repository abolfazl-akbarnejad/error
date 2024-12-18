<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="./index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="images/logo.png" srcset="images/logo2x.png 2x" alt="لوگو">
                <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x"
                    alt="لوگوی تاریک">
                <img class="logo-small logo-img logo-img-small" src="images/logo-small.png"
                    srcset="images/logo-small2x.png 2x" alt="لوگوی کوچک">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
    <!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar="">
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">پیش نمایش مورد استفاده</h6>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.home') }}" class="nk-menu-link">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-bag"></em>
                            </span>
                            <span class="nk-menu-text">خانه</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">بخش فروش</h6>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="m-3 overline-title text-primary-alt">محصولات</h6>
                    </li>


                    <li class="nk-menu-item">
                        <a href="{{ route('admin.market.product.category.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-c"></em></span>
                            <span class="nk-menu-text">دسته بندی</span>
                        </a>
                    </li>

                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.market.product.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-package"></em></em></span>
                            <span class="nk-menu-text">نمایش محصولات </span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->






                    <li class="nk-menu-heading">
                        <h6 class="m-3 overline-title text-primary-alt">تخفیف ها</h6>
                    </li>


                    <li class="nk-menu-item">
                        <a href="{{ route('admin.market.copan.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-ticket-fill"></em> </span>
                            <span class="nk-menu-text">کوپن های تخفیف</span>
                        </a>
                    </li>


                    <li class="nk-menu-heading">
                        <h6 class="m-3 overline-title text-primary-alt">کنترل فروش</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.market.delivery.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-exchange"></em></span>
                            <span class="nk-menu-text">روش های ارسال </span>
                        </a>
                    </li>


                    <li class="nk-menu-item">
                        <a href="{{ route('admin.market.payment.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-in"></em></span>
                            <span class="nk-menu-text">پرداخت ها </span>
                        </a>
                    </li>


                    {{-- <li class="nk-menu-item">
                        <a href="{{ route('admin.market.store.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-houzz"></em></span>
                            <span class="nk-menu-text">انبار داری </span>
                        </a>
                    </li> --}}


                    <li class="nk-menu-item">
                        <a href="{{ route('admin.market.order.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cart"></em></span>
                            <span class="nk-menu-text">سفارشات </span>
                        </a>
                    </li>

                   


                    {{-- layout Setting --}}
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">تنظیمات چیدمان</h6>
                    </li>



                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.menu.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-elementor"></em></span>
                            <span class="nk-menu-text">منو ها </span>
                        </a>
                    </li>




                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">رسانه</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.media.banner.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-elementor"></em></span>
                            <span class="nk-menu-text">بنر ها </span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.media.social_media.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-share"></em></span>
                            <span class="nk-menu-text">رسانه های اجتماعی </span>
                        </a>
                    </li>



                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">تنظیمات سایت</h6>
                    </li>



                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.website_setting.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">تنظیمات سایت </span>
                        </a>
                    </li>



                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.footer_setting.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-opt-alt-fill"></em></span>
                            <span class="nk-menu-text">تنظیمات پاورقی </span>
                        </a>
                    </li>



                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.about.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-info-i"></em></span>
                            <span class="nk-menu-text">درباره ما </span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.service.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-elementor"></em></span>
                            <span class="nk-menu-text">سرویس ما </span>
                        </a>
                    </li>


                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.user.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">کاربران </span>
                        </a>
                    </li>


                    <li class="nk-menu-item">
                        <a href="{{ route('admin.setting.role.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                            <span class="nk-menu-text">نقش کاربران</span>
                        </a>
                    </li>






                </ul>
                <!-- .nk-menu -->
            </div>
            <!-- .nk-sidebar-menu -->
        </div>
        <!-- .nk-sidebar-content -->
    </div>
    <!-- .nk-sidebar-element -->
</div>
