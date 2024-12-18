<footer class="footer-s">



    <div class="main-footer">

        <div class="continer">


            <div class="info-boxer">
                <div class="logo-box">

                    <a href="{{ route('main.home') }}"><img src="{{asset($website_settnig->logo)}}" alt="فروشگاه اینترنتی دست چین"></a>
                </div>



                <div class="jump-box">

                    <a href="#tops">

                        <span>بازگشت به بالا</span>
                        <i class="prk-arrow-down-1"></i>

                    </a>

                </div>


                <div class="tell-box">


                    <span class="boxer-tells">
                        <span class="text-number">شماره تماس:</span>
                        <span class="one-number">{{$footerSetting->phone_number}}</span>
                    </span>


                    <span class="line-tell">|</span>




                    <span class="boxer-tells">
                        <span class="text-number">آدرس ایمیل:</span>
                        <span class="tow-number">{{$footerSetting->email}}</span>
                    </span>

                    <span class="line-tell">|</span>



                    <span class="support">هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>


                </div>

                <div class="clear"> </div>



            </div>

            @foreach ($footerCulomns as $footerCulomn )
            <div class="foot-box"><span class="foot-title">{{$footerCulomn->name}}</span>
                <div class="menu-%d9%85%d9%86%d9%88-%d9%81%d9%88%d8%aa%d8%b1-1-container">
                    <ul id="menu-%d9%85%d9%86%d9%88-%d9%81%d9%88%d8%aa%d8%b1-1" class="menu">
                        @foreach ($footerCulomn->children->slice(1) as $footerchildren)

                        <li id="navi" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-764"><a href="{{url($footerchildren->url)}}">
                                {{$footerchildren->name}} </a></li>
                        @endforeach


                    </ul>
                </div>
            </div>
            @endforeach


            <div class="foot-box mailbox">
                <span class="foot-title">رسانه های خبری ما</span>
                <div class="social-foot">
                    <span class="icon-social">
                        @foreach ($SocialMedia as $media )

                        <a href="{{ url($media->url) }}" target="_blank" rel="nofollow"><i class="{{ $media->icon->orginal_code }}"></i> </a>
                        @endforeach
                    </span>
                </div>



                <span class="foot-title mail">در خبرنامه پر تخفیف ما عضو شوید</span>


                <form class="mail-foot">
                    <input type="email" name="email" value="" placeholder="آدرس ایمیل خود را وارد کنید">
                    <button type="submit">ثبت</button>
                </form>


            </div>






            <div class="foot-core">


                <div class="foot-box text">

                    <h1 class="foot-title">{{$footerSetting->title_introduction}}</h1>

                    <p>{{$footerSetting->introduction_text}}</p>
                    <a href="#" class="foot mask-handler"><span class="show-more">نمایش بیشتر</span><span class="show-less">-
                            بستن</span></a>
                </div>



                {{-- <div class="foot-box enmads">
                    <article class="codes">
                        <a href="#"><img src="https://pars.masirwp.com/wp-content/uploads/2022/10/1e5dab5a.png" alt=""></a>
                    </article>
                    <article class="codes">
                        <a href="#"><img src="https://pars.masirwp.com/wp-content/uploads/2022/10/samandehi.png" alt=""></a>
                    </article>
                    <article class="codes">
                        <a href="#"><img src="https://pars.masirwp.com/wp-content/uploads/2022/10/enamad.png" alt=""></a>
                    </article>
                </div> --}}
            </div>


            <div class="clear"></div>
            <span class="line-foot"></span>

            <div class="copy-right-foot ">
                <span> استفاده از مطالب فروشگاه اینترنتیدست چین فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه
                    حقوق این سایت متعلق بهدست چین می‌باشد. Copyright © 2006 - 2022 </span>
                <span class="latin_copyright">Copyright © 2006 - 2018 masirwp.com</span>
            </div>

        </div>

    </div>


</footer>
