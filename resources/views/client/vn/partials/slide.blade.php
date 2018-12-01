<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <h1 id="colorlib-logo">
        <a href="#">
            <img height="100" width="200" src="{{ asset('image') }}/logo-vincity.png"/>
        </a>
    </h1>
    
    <nav id="colorlib-main-menu" role="navigation">
        <ul id="mainNav">
            <li class="colorlib-active"><a href="{{ url('/') }}">Trang chủ</a></li>
            <li><a href="#overview">Tổng Quan</a></li>
            <li><a href="#location">Vị Trí</a></li>
            <li><a href="#services">Tiện Ích</a></li>
            <li><a href="#progress">Tiến Độ</a></li>
            <li><a href="#design">Thiết Kế</a></li>
            <li><a href="#payment">Phương thức thanh toán</a></li>
            <li><a href="#get-in-touch">Liên hệ</a></li>
        </ul>

        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ route('vincity.vn') }}">
                        <img src="{{ asset('image') }}/vietnam.png"/>
                    <a href="#">
                </div>
    
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ route('vincity.en') }}">
                        <img src="{{ asset('image') }}/uk.png"/>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="colorlib-footer">
        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
            <p class="colorlib-lead">Vui lòng gọi chúng tôi để được tư vấn</p>
            <p><a href="tel:0903312788" class="btn btn-primary btn-learn">Bấm gọi! - 090.186.39.99</a></p>
        </div>
    </div>

</aside>