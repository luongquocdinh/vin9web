@extends('vinpearl.vn.layouts.main')
@section('content')
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{ asset('image') }}/vinpearl/logo-vinpearl.jpg);">
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
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-size: contain;background-image: url({{ asset('image') }}/vinpearl/overview.jpg);">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">Tổng Quan</span>
                        <h2 class="colorlib-heading">Tổng Quan Dự Án SHOPHOUSE VINPEARL PHÚ QUỐC</h2>
                        <p>Tiếp nối những thành công sau hàng loạt dự án làm nên thương hiệu bất động sản nghỉ dưỡng đẳng cấp Vinpearl của tập đoàn Vingroup, tại Phú Quốc thành công phải nhắc đến 4 giai đoạn của Vinpearl Phú Quốc 1,2,3,4. Trong năm 2018, Vingroup chuẩn bị ra mắt siêu dự án Shophouse Vinpearl Phú Quốc 5 hứa hẹn sẽ là sản phẩm đầu tư sáng giá HOT nhất để các nhà đầu tư lựa chọn.</p>
                    </div>
                </div>
            </div>

            <div class="fancy-collapse-panel">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                    Thông tin dự án
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Tên dự án: Vinpearl Condotel & Shophouse Phú Quốc.</p>
                                        <p>Vị trí: Bãi Dài, Phú Quốc, Kiên Giang, Việt Nam.</p>
                                        <p>Chủ đầu tư: CTCP đầu tư LDG (LDG GROUP).</p>
                                        <p>Quản lý vận hành: Vinpearl.</p>
                                        <p>Tổng mức đầu tư: Dự kiến 8.000 tỷ đồng.</p>
                                        <p>Thời gian hoàn thành: 2022.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Quy mô: 87ha.</p>
                                        <p>Diện tích sàn xây dựng: 433.092m2</p>
                                        <p>Shophouse Villas: 182,335m2.</p>
                                        <p>Loại hình: Shophouse & condotel, mini hotel</p>
                                        <p>Tổng số căn: 10.000 condotel & 1000 Shophouse</p>
                                        <p>Hình thức sở hữu: 70 năm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="colorlib-heading">Vị Trí Dự Án SHOPHOUSE VINPEARL PHÚ QUỐC</h2>
                        <p>Phú Quốc được thiên nhiên vô cùng ưu đãi khi có khí hậu tự nhiên tuyệt vời, đường bờ biển trải dài hơn 150km, cùng vẻ đẹp thiên nhiên hoang sơ thu hút hàng chục triệu lượt khách đến tham quan nghỉ dưỡng mỗi năm. Một trong số những địa danh không thể không nhắc đến chính là “Bãi Dài – Phú Quốc”, nơi sở hữu những bãi biển đẹp, cánh rừng nguyên sinh, bao bọc bởi những tham thực vật đa dạng khơi dậy khao khát khám phá của bất kỳ du khách khi đặt chân đến thành phố này. Nắm bắt lợi thế về vị trí, Vingroup đã triển khai quần thể dự án Vinpearl Condotel & Shophouse Phú Quốc.</p>
                        <p>- Liền kề quần thể Casino Phú Quốc</p>
                        <p>- 25 phút lái xe đến sân bay Quốc tế</p>
                        <p>- 10 Phút lái xe đến Thị trấn Đông Dương</p>
                        <p>- 15 Phút để đi đến Vườn Quốc gia Phú Quốc</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-size: contain;background-image: url({{ asset('image') }}/vinpearl/location.jpg);">
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
                    <h2 class="colorlib-heading">TIỆN ÍCH KHU SHOPHOUSE VINPEARL PHÚ QUỐC</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/vinpearl/ho-boi.jpg)"></div>
                        <div class="desc">
                            <h3>Bể bơi ngoài trời</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/vinpearl/restaurant.jpg)"></div>
                        <div class="desc">
                            <h3>Nhà hàng sang trọng</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/vinpearl/kid.jpg)"></div>
                        <div class="desc">
                            <h3>Kid Club</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/vinpearl/gym.jpg)"></div>
                        <div class="desc">
                            <h3>Gym Sports</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/vinpearl/event.jpg)"></div>
                        <div class="desc">
                            <h3>Hội trường sự kiện</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/vinpearl/spa.jpg)"></div>
                        <div class="desc">
                            <h3>Massage & Spa</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="progress" class="colorlib-progress">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">LÝ DO</span>
                    <h2 class="colorlib-heading">LÝ DO NÊN CHỌN SHOPHOUSE VINPEARL PHÚ QUỐC</h2>
                </div>
            </div>
            <div class="fancy-collapse-panel">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                    Lý Do Nên Đầu Tư SHOPHOUSE  VINPEARL PHÚ QUỐC?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Vị trí vàng tại Đảo Ngọc</strong>
                                        <p>Vinpearl Shophouse Phú Quốc sở hữu vị trí hoàn hảo tại Bãi Dài Phú Quốc – thiên đường du lịch nghỉ dưỡng tại Việt Nam, nơi có lượng khách du lịch trong và ngoài nước tăng đều qua các năm. Điều kiện tự nhiên và tài nguyên thiên nhiên của đảo là những yếu tố mời gọi và níu bước chân của du khách đến với Phú Quốc. Lợi thế lớn về vị trí giúp cho du khách thuận tiện di chuyển và thăm quan các điểm du lịch khác trên đảo.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Sòng bài CASINO quốc tế</strong>
                                        <p>Vinpearl Casino Phú Quốc, hay sòng bạc Phú Quốc là sòng bạc đầu tiên của Việt Nam được xây dựng trên một hòn đảo kết nối với nhiều khu nghỉ dưỡng xa hoa. Với diện tích lên đến 37ha và khoảng 2000 máy đánh bạc; Đặc biệt là cũng là Sòng Bài đầu tiên người Việt được phép vào chơi. Vì vậy, Casino Phú Quốc không chỉ là "thỏi nam châm hút" khách trong nước mà còn thu hút một lượng du khách vô cùng lớn từ các nước trên Thế Giới.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Tiềm năng tăng giá trong tương lai</strong>
                                        <p>Shophouse là xu hướng đầu tư không còn xa lạ trên thế giới, tuy nhiên tại Việt Nam Shophouse sao còn khá mới mẻ. Hiện tại nguồn cung còn hạn chế và mức giá và Shophouse tại Việt Nam rất thấp so với giá Shophouse trên thế giới, vì thế chính là đòn bẩy tăng giá vượt trội trong tương lai. Đặc biệt với sản phẩm Shophouse tại một vị trí vàng như Vinpearl Grand World Phú Quốc, việc tăng giá các căn Shophouse này là chắn chắn.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Hệ thống tiện ích đẳng cấp</strong>
                                        <p>Vingroup nhấn mạnh vào việc phát triển các hạng mục tiện ích phục vụ cho con người, vì thế các dự án tiện ích được đồng thời triển khai rất đồng bộ. Du khách muốn tham gia các hoạt động vui chơi giải trí có thể đến với Vinpearl Land; muốn tham quan Vườn thú có thể tới Vinpearl Safari; Sân Golf 27 hố tiêu chuẩn quốc tế dành cho khách hàng thượng lưu; Vì thế sẽ mang tới cho dự án lượng khách khổng lồ.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Đơn vị thiết kế & Quản lý hàng đầu</strong>
                                        <p>Vingroup đã sáng suốt “chọn mặt gửi vàng” lựa chọn cơ hội hợp tác với các đơn vị thiết kế hàng đầu để kiến tạo nên các dự án đẳng cấp tại Bãi Dài - Phú Quốc. Đơn cử như dự án Vinpearl Grand World Phú Quốc được thiết kế bởi các đơn vị nổi tiếng hàng đầu Thế Giới. Đặc biệt được Quản lý & Vận hành bởi thương hiệu Vincom, với nhiều năm kinh nghiệm và danh tiếng trong lĩnh vực quản lý vận hành Shophouse mại uy tín hàng đầu tại Việt Nam.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Chủ đầu tư danh tiếng</strong>
                                        <p>Vinpearl Shophouse được đầu tư bởi tập đoàn Vingroup, hiện đang là thương hiệu Bất Động Sản Uy tín nhất tại Việt Nam, với nhiều sản phẩm nghỉ dưỡng trên khắp từ Nha Trang, Phú Quốc, Đà Nẵng, Hội An, Hạ Long... Tiềm lực tài chính vững bền và chiến lược kinh doanh đồng bộ góp phần nâng tầm uy tín cho Vingroup, các sản phẩm BĐS nghỉ dưỡng vì thế cũng hứa hẹn mang đến những cơ hội đầu tư an toàn, hấp dẫn & sinh lời ổn định.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <p><a href="tel:0903312788" class="btn btn-primary btn-learn">Bấm gọi! - 090.331.27.88</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection