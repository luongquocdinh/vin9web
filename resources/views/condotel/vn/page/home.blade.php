@extends('condotel.vn.layouts.main')
@section('content')
<aside id="colorlib-hero" style="margin-bottom: 0em;">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url({{ asset('image') }}/condotel/banner.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1>VINPEARL CONDOTEL PHÚ QUỐC</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div class="container">
    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="animate-box">
                <div class="about-desc">
                    <h2 class="colorlib-heading">VINPEARL CONDOTEL PHÚ QUỐC – SẢN PHẨM TẦM CỠ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-desc">
                        <p>Tiếp tục là sân chơi mới cho các nhà đầu tư bất động sản, 
                            đặc biệt trên phân khúc căn hộ khách sạn Condotel mới mẻ đầy hấp dẫn, 
                            Vinpearl Condotel Phú Quốc hứa hẹn là dự án “tạo sóng” lớn trên thị trường. 
                            Dự án được kỳ vọng mở ra những cơ hội vàng cho các khách hàng cũng như các nhà đầu tư.
                        </p>
                        <p>
                            Được đầu tư và xây dựng bởi chủ đầu tư lớn nhất trên thị trường – Vingroup, 
                            Vinpearl Condotel Phú Quốc hứa hẹn sẽ là một sản phẩm tầm cỡ trong khu vực, 
                            thiên đường nghỉ dưỡng cho các du khách trong và ngoài nước. 
                            Những căn hộ Condotel Phú Quốc của tập đoàn VingGroup hứa hẹn sở hữu những thiết kế đẳng cấp kết hợp với vẻ đẹp hoang sơ nơi biển đảo Phú Quốc cùng chuỗi tiện ích hiện đại phong phú, đẳng cấp, hứa hẹn mang đến cho du khách kỳ nghỉ dưỡng tuyệt vời. 
                            Đến đây, khách hàng vừa được thả mình vào thiên nhiên ban sơ, được tận hưởng không gian trong lành, gần gũi tự nhiên nhưng vẫn được trải nghiệm không gian tiện nghi và đậm chất thượng lưu.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-desc" style="margin-left: 10%;">
                        <p>
                            <strong>»&nbsp; Tên dự án dự kiến:</strong> Vinpearl Condotel Phú Quốc
                        </p>
                        <p>
                            <strong>»&nbsp; Chủ đầu tư:</strong> Tập đoàn VinGroup
                        </p>
                        <p>
                            <strong>»&nbsp; Số tòa condotel dự kiến:</strong> 12 tòa
                        </p>
                        <p>
                            <strong>»&nbsp; Số căn condotel dự kiến:</strong> 10000 căn hộ
                        </p>
                        <p>
                            <strong>»&nbsp; Chiều cao tòa:</strong> 8 – 12 tầng (dự kiến)
                        </p>
                        <p>
                            <strong>»&nbsp; Thiết kế căn hộ tiêu chuẩn:</strong> 3 sao – 5 sao
                        </p>
                        <ul>
                            <li>Thiết kế kiến trúc Đông Dương – Nhật Bản: 3 sao</li>
                            <li>Thiết kế phong cách Pháp: 4 sao</li>
                            <li>Thiết kế phong cách hoàng gia Châu Âu – Địa Trung Hải: 5 sao</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-info">
            Danh sách các dự án của chúng tối
            <i class="icon-arrow-right3"></i>
        </a>
    </div>

    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="animate-box">
                <div class="about-desc">
                    <h2 class="colorlib-heading">PHÚ QUỐC – ĐÓN SÓNG DU LỊCH NGHỈ DƯỠNG</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <img src="{{ asset('image') }}/condotel/bai_dai.jpg" alt="Bai Dai">
                        </div>
                        <div class="desc">
                            <h3 style="text-align: center; color: #edae44">Vẻ đẹp thiên nhiên thuần khiết</h3>
                            <p style="text-align: justify">
                                Nằm trọn trong vùng vịnh Thái Lan, Phú Quốc, Phú Quốc được thiên nhiên vô cùng ưu đãi khi có điều kiện tự nhiên vô cùng thuận lợi, 
                                an toàn ngoài tâm bão, quanh năm có nắng và nhiệt độ luôn ở mức lý tưởng 28 độ. 
                                Đặc, Phú Quốc có dòng nước biển ấm trong suốt mùa khô cùng với đường bờ biển dài 150km, bao quanh đảo là những cánh rừng nguyên sinh với hệ thực vật đa dạng phong phú. 
                                Những bãi biển đẹp nhất hành tinh như Bãi Dài, Bãi Trường, Bãi Sao hay Đảo Đồi Mồi…với vẻ đẹp hoang sơ hấp dẫn các du khách trong và ngoài nước.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <img src="{{ asset('image') }}/condotel/ha_tang.jpg" alt="Bai Dai">
                        </div>
                        <div class="desc">
                            <h3 style="text-align: center; color: #edae44">Cơ sở hạ tầng đẳng cấp</h3>
                            <p style="text-align: justify">
                                Với mong muốn thu hút thêm được lượng khách du lịch lớn và biến du lịch trở thành ngành kinh tế mũi nhọn của khu vực, tại Phú Quốc, hạ tầng kỹ thuật được đầu tư đồng bộ và hiện đại gồm có: 
                                Sân Bay Quốc tế Phú Quốc với công suất lên tới 5 triệu khách/năm, hệ thống đường xuyên đảo, cảng biển quốc tế đang được xây dựng với công suất tàu dự kiến 7000 hành khách, 
                                Hệ thống cáp điện ngầm 110KV, Hệ thống nước ngọt đã hoàn thành, trạm xử lý chất thải đang được xây dựng… 
                                Hạ tầng hiện đại giúp Phú Quốc hút được một lượng khách không hề nhỏ và nâng tầm giá trị khu vực.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <img src="{{ asset('image') }}/condotel/bai_bien.jpg" alt="Bai Dai">
                        </div>
                        <div class="desc">
                            <h3 style="text-align: center; color: #edae44">Tiềm năng du lịch vượt trội</h3>
                            <p style="text-align: justify">
                                Với những lợi thế cảnh đẹp tự nhiên, Phú Quốc thu hút được lượng lớn du khách đến du lịch. 
                                Theo thống kê lượt khách du lịch tới Phú Quốc  năm 2015 vượt trội hơn hẳn so với Đà Nẵng và Nha đạt hơn 1,6 triệu lượt khách. 
                                Và dự kiến con số này còn tăng mạnh trong tương lai và dự kiến sẽ trở thành điểm du lịch thu hút đông khách nhất trong cả nước. 
                                Đặc biệt khi các đường bay được mở rộng thì lượt khách quốc tế đến du lịch sẽ tăng đột biến. 
                                Tiềm năng phát triển du lịch vượt trội mở ra những cơ hội đầu tư hấp dẫn cho các nhà đầu tư bất động sản nghỉ dưỡng như Condotel Vinpearl Phú Quốc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-info">
            Danh sách các dự án của chúng tối
            <i class="icon-arrow-right3"></i>
        </a>
    </div>

    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="animate-box">
                <div class="about-desc">
                    <h2 class="colorlib-heading">TẠI SAO NÊN ĐẦU TƯ VINPEARL CONDOTEL PHÚ QUỐC?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="colorlib-feature animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="flaticon-sketch"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>LỢI NHUẬN HẤP DẪN</h3>
                        <p style="text-align: justify">
                            Với những ưu đãi từ thiên nhiên cùng hạ tầng hiện đại, Vinpearl Condotel Phú Quốc hứa hẹn thu hút được lượng lớn khách du lịch, đảm bảo nguồn khách thuê căn hộ khách sạn ổn định. 
                            Bên cạnh đó, theo thống kê, giá thuê phòng khách sạn tại Phú Quốc luôn ở mức cao so với khu vực, đảm bảo mang đến lợi nhuận hấp dẫn cho các nhà đầu tư.
                        </p>
                    </div>
                </div>
                <div class="colorlib-feature animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="flaticon-crane"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>DÒNG TIỀN ỔN ĐỊNH HÀNG NĂM</h3>
                        <p style="text-align: justify">
                            Tiềm năng du lịch tại Phú Quốc là vô hạn. Với hàng triệu lượt khách du lịch mỗi năm và con số không ngừng tăng trong tương lai chính là nguồn khách tiềm năng cho Vinpearl Condotel Phú Quốc. 
                            Lượng khách ổn định giúp đảm bảo công suất phòng luôn được lấp kín, dòng tiền đầu tư sẽ không bị đóng băng mà còn sinh lợi nhuận vượt trội.
                        </p>
                    </div>
                </div>
                <div class="colorlib-feature animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="flaticon-engineer"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>ĐẦU TƯ AN NHÀN</h3>
                        <p style="text-align: justify">
                            Đầu tư vào Vinpearl Condotel Phú Quốc, chủ sở hữu không cần lo tìm kiếm khách thuê hay vận hành, quản lý căn hộ của mình mà vẫn đảm bảo thu lợi nhuận vượt trội. 
                            Dự án Condotel mang thương hiệu cao cấp Vinpearl hàng đầu Việt Nam, với nhiều năm kinh nghiệm trong lĩnh vực khách sạn – nghỉ dưỡng – sẽ thay chủ sở hữu quản lý và đảm bảo căn hộ kinh doanh hiệu quả nhất. 
                            Vì thế, đây là kênh đầu tư an nhàn nhất cho các nhà đầu tư.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="colorlib-feature animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>VỐN ĐẦU TƯ MỎNG</h3>
                        <p style="text-align: justify">
                            Nếu so với những căn biệt thự biển có số vốn đầu tư lên tới hàng chục tỷ đồng thì những căn hộ khách sạn Vinpearl Condotel Phú Quốc hứa hẹn mức giá “mềm” hơn rất nhiều khiến Nhà đầu tư dễ dàng sở hữu hơn. 
                            Trong khi đó nếu so về tiềm năng hay lợi ích thì hiện nay việc đầu tư Condotel cũng mang lại lợi nhuận không hề thua kém so với biệt thự nghỉ dưỡng.
                        </p>
                    </div>
                </div>
                <div class="colorlib-feature animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="flaticon-skyline"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>CƠ HỘI NGHỈ DƯỠNG ĐẲNG CẤP</h3>
                        <p style="text-align: justify">
                            Đầu tư Condotel Vinpearl Phú Quốc, các chủ sở hữu còn có cơ hội nghỉ dưỡng tuyệt vời. 
                            Theo như chính sách tại các dự án Vinpearl trước đây, chủ sở hữu Vinpearl Condotel Phú Quốc hứa hẹn có cơ hội nghỉ dưỡng và trao đổi miễn phí tại hệ thống khách sạn đẳng cấp Vinpearl. 
                            Đây là đặc quyền vô cùng hấp dẫn cho các khách hàng.
                        </p>
                    </div>
                </div>
                <div class="colorlib-feature animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="flaticon-architect-with-helmet"></i>
                    </div>
                    <div class="colorlib-text">
                        <h3>CHỦ ĐẦU TƯ UY TÍN</h3>
                        <p style="text-align: justify">
                                VinGroup hẳn không còn xa lạ đối với các khách hàng. 
                                Sở hữu trong tay hàng loạt những dự án bất động sản nghỉ dưỡng đẳng cấp, tạo tiếng vang lớn trên thị trường, Vingroup tạo được niềm tin vững chắc cho các khách hàng cũng như các nhà đầu tư. 
                                Với uy tín của chủ đầu tư, Vinpearl Condotel Phú Quốc hứa hẹn sẽ là sản phẩm tầm cỡ tiếp theo của VinGroup tại Đảo Ngọc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-info">
            Danh sách các dự án của chúng tối
            <i class="icon-arrow-right3"></i>
        </a>
    </div>

    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="animate-box">
                <div class="about-desc">
                    <h2 class="colorlib-heading">TIỆN ÍCH THỜI THƯỢNG TẠI VINPEARL CONDOTEL PHÚ QUỐC</h2>
                </div>
            </div>

            <div class="about-desc" style="text-align: center;">
                Song hành cùng với mục tiêu trở thành điểm dừng chân hấp dẫn cho các du khách trong và ngoài nước – và kế thừa tinh hoa từ những dự án nghỉ dưỡng mang thương hiệu Vinpearl cũng như tổ hợp nghỉ dưỡng 5 sao Vinpearl Phú Quốc, 
                Vinpearl Condotel Phú Quốc hứa hẹn được đầu tư xây dựng những tiện ích thời thượng và hiện đại nhất, mang đến cho các du khách những trải nghiệm thú vị và những giây phút nghỉ dưỡng tuyệt vời.
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/tro_choi.jpg)"></div>
                        <div class="desc">
                            <h3>Trò chơi nước hiện đại</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/be_boi.png)"></div>
                        <div class="desc">
                            <h3>Hệ thống bể bơi cao cấp</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/spa.jpg)"></div>
                        <div class="desc">
                            <h3>Hệ thống Spa cao cấp 5 sao</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/golf.jpg)"></div>
                        <div class="desc">
                            <h3>Sân Golf tiêu chuẩn quốc tế 27 lỗ</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/cay_xanh.jpg)"></div>
                        <div class="desc">
                            <h3>Hệ thống cây xanh bao phủ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/di_bo.jpg)"></div>
                        <div class="desc">
                            <h3>Phố đi bộ sầm uất</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/safari.jpg)"></div>
                        <div class="desc">
                            <h3>Vườn thú Vinpearl Safari</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/condotel/thuong_mai.jpg)"></div>
                        <div class="desc">
                            <h3>Trung tâm thương mại Vincom</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="get-in-touch" class="colorlib-bg-color" style="background-color: #4cc4c1 ">
    <div class="colorlib-narrow-content text-center">
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