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

                <li style="background-image: url({{ asset('image') }}/vinpearl/slide-1.jpg);">
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

                <li style="background-image: url({{ asset('image') }}/vinpearl/slide-2.jpg);">
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
        <div class="colorlib-narrow-content" style="text-align:justify;font-size:16px;">
            <div class="col-sm-4 radiuse">
                <p style="text-align:center;"><img src="http://vinpearlcondotelphuquoc.com/upload/images/icon/dautu.png" alt="GÀ ĐỂ TRỨNG VÀNG"><br>
                <span><strong class="mauchudo">SHOPHOUSE - GÀ ĐẺ TRỨNG VÀNG</strong></span></p>
                <p>Với số lượng lên đến 19.000 phòng khách sạn tương ứng khoảng 30-40 nghìn lượt du khách mỗi ngày, vì vậy <strong>đầu tư Shophoue Vinpearl chắc chắn sẽ sinh lời cao</strong>.</p>
            </div> 
            <div class="col-sm-4 radiuse">
                <p style="text-align:center;"><img src="http://vinpearlcondotelphuquoc.com/upload/images/icon/bank.png" alt="bank"><br>
                <span><strong class="mauchudo">CHÍNH SÁCH NGÂN HÀNG</strong></span></p>
                <p>Ngân hàng Techcombank hỗ trợ cho vay lên tới 65% giá trị căn Shophouse, với mức <strong>ưu đãi lãi suất 0%, ân hạn nợ gốc và Miễn Phí trả nợ trước hạn</strong> trong 24 tháng đầu (dự kiến).</p>
            </div> 
            <div class="col-sm-4 radiuse">
                <p style="text-align:center;"><img src="http://vinpearlcondotelphuquoc.com/upload/images/icon/casino.png" alt="casino vinpearl condotel phú quốc"><br>
                <span><strong class="mauchudo">LIỀN KỀ VINPEARL CASINO</strong></span></p>
                <p>Sòng Bài Casino Phú Quốc không chỉ là "thỏi nam châm hút" khách trong nước mà còn <strong>thu hút một lượng du khách vô cùng lớn</strong> từ các nước trên Thế Giới.</p>
            </div> 
        </div>
    </div>

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
                                        <p>Tên dự án: Vinpearl Grand World Phú Quốc.</p>
                                        <p>Vị trí: Bãi Dài, xã Gành Dầu, huyện Phú Quốc, tỉnh Kiên Giang.</p>
                                        <p>Chủ đầu tư: Tập đoàn Vingroup.</p>
                                        <p>Tổng diện tích: 85ha.</p>
                                        <p>Loại sản phẩm: Shophouse, Condotel và Mini Hotel.</p>
                                        <p>Số lượng căn: Khoảng 1000 Shophouse, 10000 Condotel và ... Mini hotel.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Shophouse: Diện tích 80 – 120m², Cao 3 – 5 tầng. Tự do khai thác kinh doanh.</p>
                                        <p>Condotel: Gồm 19 tòa, diện tích từ 27m² – 43m², tiêu chuẩn 2 – 5 sao, cao từ 8 – 12 tầng. Cam kết thuê lại với lợi nhuận cao & lâu dài.</p>
                                        <p>Mini Hotel: Cao 12 tầng, nằm ngay đầu đường vào Safari, diện tích 500 – 1.000m². Hoàn thiện tùy chọn, kinh doanh tự do.</p>
                                        <p>Pháp lý & Sở hữu: Sở hữu sổ hồng lên đến 70 năm.</p>
                                        <p>Khởi công: đang cập nhật.</p>
                                        <p>Bàn giao: đang cập nhật.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p>
                <iframe align="middle" frameborder="0" height="480px" scrolling="no" src="https://www.youtube.com/embed/VXs8l_mXhmM?rel=0" width="100%"></iframe>
            </p>
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
            
            <div class="row" style="text-align:center;">
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/vinpearl-casino.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Casino đẳng cấp Quốc Tế</strong></p>
                    <p style="text-align:justify;">Casino Phú Quốc là một trong những điểm nhấn đẳng cấp và khác biệt với những dự án biệt thự biển nghỉ dưỡng khác. Việc xây dựng Casino sẽ là nguồn hút du khách dồi dào cả trong và ngoài nước.</p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/vinpearl-land.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Khu vui chơi giải trí Vinpearl Land</strong></p>
                    <p style="text-align:justify;">Thiên đường vui chơi giải trí với đầy đủ các hoạt động vui chơi thú vị, xa xỉ (thủy cung, công viên nước, cối xay gió, đĩa quay siêu tốc,…) giúp quý khách cùng gia đình tận hưởng những thời khắc vui vẻ nhất.</p>
                    </div>
                    <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/vinpearl-safari.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Công viên Chăm sóc và Bảo tồn Động vật</strong></p>
                    <p style="text-align:justify;">Du khách có thể dã ngoại, dạo bộ hoặc nghỉ ngơi sinh thái ngay trong rừng. Không chỉ vậy, vườn thú Vinpearl Safari còn được sử dụng làm nơi để các nhà nghiên cứu sinh vật thực hiện các cuộc nghiên cứu khoa học.</p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/vinpearl-golf.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Sân golf 27 lỗ tiêu chuẩn quốc tế</strong></p>
                    <p style="text-align:justify;">Đối với giới thượng lưu, một dự án nghỉ dưỡng đẳng cấp sẽ không thể thiếu được hệ thống sân golf. Sân golf với 27 lỗ đạt tiêu chuẩn quốc tế hướng thẳng ra biển mang lại cho những người chơi cảm giác thú vị.</p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/spa.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Khu chăm sóc sắc đẹp Vincharm Spa</strong></p>
                    <p style="text-align:justify;">Đi nghỉ dưỡng tất nhiên không thể thiếu dịch vụ làm đẹp. Cả cánh mày râu và chị em phụ nữ đều có thể tham gia với nhiều dịch vụ làm đẹp, chăm sóc cơ thể như gym, spa cao cấp, và phòng tập theo yêu cầu.</p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/nha-hang.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Hệ thống nhà hàng ẩm thực cao cấp</strong></p>
                    <p style="text-align:justify;">Hệ thống nhà hàng ẩm thực cao cấp. Những nhà hàng mang phong cách ẩm thực Âu – Á cao cấp sẽ mang lại cho Quý khách cảm nhận về một nơi có phong cách ẩm thực phong phú và ấn tượng nhất.</p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/ho-boi.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Hệ thống bể bơi cao cấp ngoài trời</strong></p>
                    <p style="text-align:justify;"></p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/24.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">Khu Phố Mua Sắm Sầm Uất</strong></p>
                    <p style="text-align:justify;"></p>
                </div>
                <div class="col-sm-4">
                    <p><img src="http://vinpearlshophousephuquoc.com/upload/images/tien-ich/vinmec.jpg" alt=""></p>
                    <p><strong style="text-transform:uppercase;">BỆNH VIỆN QUỐC TẾ 5 SAO VINMEC</strong></p>
                    <p style="text-align:justify;"></p>
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
                    <p><a href="tel:0903312788" class="btn btn-primary btn-learn">Bấm gọi! - 090.186.39.99</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection