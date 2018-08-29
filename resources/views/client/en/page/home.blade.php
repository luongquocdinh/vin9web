@extends('client.en.layouts.main')
@section('content')
    <aside id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{ asset('client') }}/images/img_bg_1.jpg);">
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
                <li style="background-image: url({{ asset('client') }}/images/img_bg_2.jpg);">
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
                <li style="background-image: url({{ asset('client') }}/images/img_bg_3.jpg);">
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
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ asset('image') }}/overview/apartment.jpg);">
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta">OVERVIEW</span>
                        <h2 class="colorlib-heading">OVERVIEW OF VINCITY DISTRICT 9 PROJECT</h2>
                        <p>Following the success of the Vinhomes Central Park and Vinhomes Golden River projects in the city center, the continuation of the VinCity District 9 project, which provides affordable housing to middle income. With a large area of ​​365ha, fully equipped with convenient infrastructure and high-class design, VinCity District 9 Ho Chi Minh City is the most wanted project than ever.</p>
                        <p>Project Owner: Vingroup.</p>
                        <p>Project name: VinCity District 9.</p>
                        <p>Project scale: 365ha.</p>
                        <p>Number of apartments: over 100,000 units.</p>
                        <p>Project products: officetel apartments, popular apartments, commercial apartments, commercial centers, public area.</p>
                        <p>Location: Nguyen Xien Street, Long Thanh My Ward, District 9, Ho Chi Minh City.</p>
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
                        <span class="heading-meta">LOCATION</span>
                        <h2 class="colorlib-heading">LOCATION OF VINCITY DISTRICT 9 PROJECT</h2>
                        <p>Location of VinCity District 9 is planned to be built in the prime location right at the corner of Nguyen Xien Street in District 9 center. It is located in a convenient infrastructure for all the residents here. From the VinCity Quan 9 Sai Gon project, residents can completely move to the surrounding areas in the most flexible and convenient way through the main arterial roads such as Sai Gon – Dau Giay high-way. Mai Chi Tho, Vo Van Kiet, Trung Luong, Van Dai 2 … or via river to Dong Nai province.</p>
                        <p>-Easy transportation through Long Thanh International Airport</p>
                        <p>-Only 35 minutes to move into Central District 1</p>
                        <p>-Only 10 minutes to High-tech Zone District 9</p>
                        <p>-6.5 km from Suoi Tien Park.</p>
                        <p>And the distance from the center City will be resolved more thoroughly by future river transport system: Boat, Water Bus (It takes only 8-10 ‘from center Q9 to center Q1)</p>
                        <p>Location: Nguyen Xien Street, Long Thanh My Ward, District 9, Ho Chi Minh City.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ asset('image') }}/location/location.png);">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="colorlib-services">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">UTILITIES</span>
                    <h2 class="colorlib-heading">UTILITIES OF VINCITY DISTRICT 9 PROJECT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image1.jpg)"></div>
                                <div class="desc">
                                    <h3>Outdoor Barbecue</h3>
                                </div>
                            </a>
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image2.jpg)"></div>
                                <div class="desc">
                                    <h3>International Hospital of Gia Hoa.</h3>
                                </div>
                            </a>
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image3.jpg)"></div>
                                <div class="desc">
                                    <h3>Riverside Park on Rach Chiec River</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 move-bottom">
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image4.jpg)"></div>
                                <div class="desc">
                                    <h3>Central Park</h3>
                                </div>
                            </a>
                            <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image5.jpg)"></div>
                                <div class="desc">
                                    <h3>Modern Gym</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <p>
                            With the desire to bring its residents the most wonderful experience ever, Vincity has equipped the project of District 9 with modern facilities. 
                            Within walking distance, the commercial center Vincom, with a wide range of products from consumer goods, commercial electronics to high-end fashion, is on a very close spot to the living area. 
                        </p>

                        <p>
                            Surrounding of Vincity apartment
                            In addition, a Vinmart food store branch, convenience store Vinpro also located inside the project area to bring residents to fresh, qualified VietGap standards food. Making the choice of living in the heart of Vinhomes Imperia, customers are no longer concern about finding a certified school for their children or  the health care center. 
                        </p>
                        <p>
                            VinCity District 9 Ho Chi Minh City is planned to be built in a closed model with a complete infrastructure system to help all residents living in the project no need to go anywhere to find a place to play, entertainment, shopping … by all are included inside the project.
                        </p>
                        <p>
                            -Vincom shopping center system.
                        </p>
                        <p>
                            -Multinational clinic of international standard Vinmec.
                        </p>
                        <p>
                            -Management system, apartment services Vinhomes.
                        </p>
                        <p>
                            -Vinshool International School System.
                        </p>
                        <p>
                            -Local amenities such as parks, cinemas, swimming pools, restaurants…
                        </p>
                        <p>
                            -And many other facilities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image6.jpg)"></div>
                        <div class="desc">
                            <h3>1,800m2 Swimming Pool</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image7.jpg)"></div>
                        <div class="desc">
                            <h3>Tenis</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image8.jpg)"></div>
                        <div class="desc">
                            <h3>International standard childcare</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                        <div class="services-img" style="background-image: url({{ asset('image') }}/utilities/image9.jpg)"></div>
                        <div class="desc">
                            <h3>Shopping Mall</h3>
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
                    <span class="heading-meta">Progress</span>
                    <h2 class="colorlib-heading animate-box">Build Progress</h2>
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
                    <div class="project" style="background-image: url({{ asset('image') }}/progress/image8.jpg);">
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
                    <span class="heading-meta">Design</span>
                    <h2 class="colorlib-heading">Design</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Floor plan apartment Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Floor plan apartment Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Floor plan apartment Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image4.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Floor plan apartment Citrine Apartment</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image5.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Apartment type 2 bedroom apartment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image6.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">Apartment design 2 bedroom corner</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#design" class="blog-img"><img src="{{ asset('image') }}/design/image7.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                        <div class="desc">
                            <span><small>April 14, 2018 </small> | <small> Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                            <h3><a href="#design">3 bedroom apartment design</a></h3>
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
                    <span class="heading-meta">Payment</span>
                    <h2 class="colorlib-heading">Payment</h2>
                </div>
            </div>

            <div class="row">
                <strong>Please call us for more information on payment methods</strong>
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
                    <p class="colorlib-lead">Please call us for advice.</p>
                    <p><a href="tel:0903312788" class="btn btn-primary btn-learn">Call me! - 090.331.27.88</a></p>
                </div> 
            </div>
        </div>
    </div>
@endsection