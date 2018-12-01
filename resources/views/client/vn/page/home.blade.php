@extends('client.vn.layouts.main')
@section('content')
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{ asset('image') }}/slider/new_4.JPG);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{ asset('image') }}/slider/new_6.JPG);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{ asset('image') }}/slider/new_9.JPG);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="overview" class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-size: contain;background-image: url({{ asset('image') }}/overview/new_2.JPG);">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">Tổng Quan</span>
                        <h2 class="colorlib-heading">Tổng Quan Dự Án VinCity Quận 9</h2>
                        <p>Tiếp nối thành công của dự án Vinhomes Central Park và Vinhomes Golden River tại trung tâm thành phố, tiếp nối dự án VinCity District 9, cung cấp nhà ở giá rẻ cho thu nhập trung bình. Với diện tích rộng 360ha, được trang bị đầy đủ tiện nghi cơ sở hạ tầng và thiết kế cao cấp, VinCity Quận 9 Thành phố Hồ Chí Minh là dự án được mong đợi nhiều nhất từ trước tới nay.</p>
                        <p>Chủ đầu tư: Vingroup.</p>
                        <p>Tên Dự Án: VinCity Quận 9.</p>
                        <p>Quy mô: 360ha.</p>
                        <p>Số lượng căn hộ: hơn 44.000 căn.</p>
                        <p>Sản phẩm dự án: căn hộ officetel, căn hộ phổ biến, căn hộ thương mại, trung tâm thương mại, khu vực công cộng.</p>
                        <p>Địa điểm: Đường Nguyễn Xiển, Phường Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="location" class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">Vị Trí</span>
                        <h2 class="colorlib-heading">Vị Trí Dự Án VinCity Quận 9</h2>
                        <p>Vị trí của VinCity Quận 9 dự kiến sẽ được xây dựng ở vị trí đắc địa ngay tại góc đường Nguyễn Xiển ở trung tâm quận 9. Nó nằm trong một cơ sở hạ tầng thuận tiện cho tất cả các cư dân ở đây. Từ dự án VinCity Quận 9 Sài Gòn, cư dân hoàn toàn có thể di chuyển đến các khu vực xung quanh một cách linh hoạt và thuận tiện nhất thông qua các tuyến đường trục chính như đường cao tốc Sài Gòn - Dầu Giây. Mai Chí Thọ, Võ Văn Kiệt, Trung Lương, Vạn Đại 2… hoặc qua sông đến Đồng Nai.</p>
                        <p>- Dễ dàng vận chuyển qua sân bay quốc tế Long Thành</p>
                        <p>- Chỉ trong vòng 35 phút di chuyển vào Trung tâm Quận 1</p>
                        <p>- Chỉ trong vòng 10 phút đến Khu công nghệ cao Quận 9</p>
                        <p>- 6,5 km từ Công viên Suối Tiên.</p>
                        <p>Và khoảng cách từ trung tâm Thành phố sẽ được giải quyết triệt để hơn bởi hệ thống giao thông đường sông trong tương lai: Thuyền, Xe buýt Nước (Chỉ mất 8-10 'từ trung tâm Q9 đến trung tâm Q1)</p>
                        <p>Địa điểm: Đường Nguyễn Xiển, Phường Long Thạnh Mỹ, Quận 9, Thành phố Hồ Chí Minh.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-size: contain;background-image: url({{ asset('image') }}/location/new_11.JPG);">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-size: contain;background-image: url({{ asset('image') }}/location/new_1.JPG);">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-size: contain;background-image: url({{ asset('image') }}/location/new_13.JPG);">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="colorlib-services">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">TIỆN ÍCH</span>
                    <h2 class="colorlib-heading">TIỆN ÍCH KHU VINCITY QUẬN 9</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image1.jpg)"></div>
                                <div class="desc">
                                    <h3>Khu Barbecue ngoài trời</h3>
                                </div>
                            </a>
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image2.jpg)"></div>
                                <div class="desc">
                                    <h3>Bệnh Viện Quốc Tế Gia Hòa.</h3>
                                </div>
                            </a>
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image3.jpg)"></div>
                                <div class="desc">
                                    <h3>Công viên bờ sông bên bờ sông Rạch Chiếc</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 move-bottom">
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image4.jpg)"></div>
                                <div class="desc">
                                    <h3>Công viên trung tâm</h3>
                                </div>
                            </a>
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image5.jpg)"></div>
                                <div class="desc">
                                    <h3>Phòng Gym Hiện Đại</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <p>
                            Với mong muốn mang đến cho cư dân những trải nghiệm tuyệt vời nhất từ trước tới nay, Vincity đã trang bị cho dự án Quận 9 với những tiện nghi hiện đại. Trong khoảng cách đi bộ, trung tâm thương mại Vincom, với một loạt các sản phẩm từ hàng tiêu dùng, điện tử thương mại đến thời trang cao cấp, nằm ở vị trí rất gần với khu vực sinh sống.
                        </p>
                        <p>
                            Ngoài ra, một cửa hàng thực phẩm Vinmart, cửa hàng tiện lợi Vinpro cũng nằm bên trong khu vực dự án để mang lại cho cư dân những thực phẩm tươi sống, đạt tiêu chuẩn VietGap. Lựa chọn cuộc sống ở trung tâm của Vinhomes Imperia, khách hàng không còn lo ngại về việc tìm kiếm một trường được chứng nhận cho con em họ hay trung tâm chăm sóc sức khỏe.
                        </p>
                        <p>
                            VinCity Quận 9 Thành phố Hồ Chí Minh được quy hoạch xây dựng theo mô hình khép kín với hệ thống cơ sở hạ tầng hoàn chỉnh giúp mọi cư dân sống trong dự án không cần phải đi đâu để chơi, giải trí, mua sắm… dự án.
                        </p>
                        <p>
                            - Hệ thống trung tâm mua sắm - Vincom.
                        </p>
                        <p>
                            - Phòng khám đa quốc gia về tiêu chuẩn quốc tế Vinmec.
                        </p>
                        <p>
                            - Hệ thống quản lý, dịch vụ căn hộ Vinhomes.
                        </p>
                        <p>
                            - Hệ thống Trường Quốc tế Vinschool.
                        </p>
                        <p>
                            - Các tiện ích địa phương như công viên, rạp chiếu phim, hồ bơi, nhà hàng…
                        </p>
                        <p>
                            - Và nhiều cơ sở khác.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image6.jpg)"></div>
                        <div class="desc">
                            <h3>Hồ bơi Ánh Viên rộng 1.800m2</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image7.jpg)"></div>
                        <div class="desc">
                            <h3>Sân Tenis</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image8.jpg)"></div>
                        <div class="desc">
                            <h3>Nhà trẻ tiêu chuẩn quốc tế.</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image9.jpg)"></div>
                        <div class="desc">
                            <h3>Trung tâm thương mại</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="progress" class="colorlib-work">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">TIẾN TRÌNH</span>
                    <h2 class="colorlib-heading animate-box">TIẾN ĐỘ XÂY DỰNG</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image1.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 01</a></h3>
                                <span>Building</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image2.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 02</a></h3>
                                <span>House, Apartment</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image3.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 03</a></h3>
                                <span>Dining Room</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image4.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 04</a></h3>
                                <span>House, Building</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image5.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 05</a></h3>
                                <span>Condo, Pad</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image6.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 06</a></h3>
                                <span>Table, Chairs</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image7.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 07</a></h3>
                                <span>Table, Chairs</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image8.jpg);">
                        <div class="desc">
                            <div class="con">
                                <h3><a href="work.html">Work 08</a></h3>
                                <span>Table, Chairs</span>
                                <p class="icon">
                                    <span><a href="#"><i class="icon-share3"></i></a></span>
                                    <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                    <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{ asset('client') }}/images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="colorlib-narrow-content">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-skyline"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Projects</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-engineer"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Employees</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Constructor</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-worker"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label">Partners</span>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="design" class="colorlib-blog">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">THIẾT KẾ</span>
                    <h2 class="colorlib-heading">THIẾT KẾ TRONG KHU VINCITY</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/new_10.JPG" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn hộ chung cư cao cấp Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/new_15.JPG" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn hộ chung cư cao cấp Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn hộ chung cư cao cấp Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn hộ chung cư cao cấp Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image4.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn hộ chung cư cao cấp Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/new_16.JPG" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn hộ chung cư cao cấp Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image5.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn Hộ Loại 2 Phòng Ngủ Thường</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image6.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn Hộ Loại 2 Phòng Ngủ Trong Góc</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image7.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Căn Hộ Loại 3 Phòng Ngủ</a></h3>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div id="payment">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Thanh Toán</span>
                    <h2 class="colorlib-heading">Phương thức thanh toán</h2>
                </div>
            </div>

            <div class="row">
                <strong>Vui lòng gọi chúng tôi để được tư vấn rõ hơn về phương thức thanh toán</strong>
            </div>
        </div>
    </div>

    <div id="get-in-touch" class="colorlib-bg-color">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <h2>VuongPhatLand</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <p class="colorlib-lead">Vui lòng gọi chúng tôi để được tư vấn</p>
                    <p><a href="tel:0903312788" class="btn btn-primary btn-learn">Bấm gọi! - 090.186.39.99</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection