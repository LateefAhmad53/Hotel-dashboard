@extends('layout.master')
@section('title')
Lincoln Height Hotel
@endsection
@section('content')

<section class="section">
    <div class="shell-wide">
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <div class="range range-30 range-xs-center">
            <div class="cell-lg-8 cell-xl-9">
                <!-- Classic slider-->
                <section class="section">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-slide-bg="assets/images/slide-01.jpg">
                                <div class="swiper-slide-caption">
                                    <div class="shell text-sm-left">
                                        <h1 data-caption-animate="slideInDown" data-caption-delay="100">Your Ideal Retreat</h1>
                                        <div class="slider-subtitle-group">
                                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400">
                                            </div>
                                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Enjoy the world of relaxation
                                            </h4>
                                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">and tranquility!</h3>
                                        </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn
                                                more</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide-bg="assets/images/slide-02.jpg">
                                <div class="swiper-slide-caption">
                                    <div class="shell text-sm-left">
                                        <h1 data-caption-animate="slideInDown" data-caption-delay="100">Relax & Unwind</h1>
                                        <div class="slider-subtitle-group">
                                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400">
                                            </div>
                                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Experience the luxurious level
                                            </h4>
                                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">of our spa treatments</h3>
                                        </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn
                                                more</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide-bg="assets/images/slide-03.jpg">
                                <div class="swiper-slide-caption">
                                    <div class="shell text-sm-left">
                                        <h1 data-caption-animate="slideInDown" data-caption-delay="100">Revitalize & Relax</h1>
                                        <div class="slider-subtitle-group">
                                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400">
                                            </div>
                                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Indulge in our top-notch</h4>
                                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">spa resort</h3>
                                        </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="about-us.html" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn
                                                more</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>
            </div>
            <div class="cell-lg-4 cell-xl-3 reveal-lg-flex">
                <div class="hotel-booking-form">
                    <h3>Book a Room</h3>
                    <!-- RD Mailform-->
                    <form class="" method="post" action="{{ url('/save-reservation') }}">
                        @csrf
                        <div class="range range-sm-bottom spacing-20">
                            <div class="cell-lg-12 cell-md-4">
                                <p class="text-uppercase">Your Name</p>
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name" type="text" name="name" required>
                                    <label class="form-label" for="contact-first-name">Your Full Name</label>
                                </div>
                            </div>
                            <div class="cell-lg-12 cell-md-4">
                                <p class="text-uppercase">Your Email</p>
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name" type="email" name="email" required>
                                    <label class="form-label" for="contact-first-name">Your Email</label>
                                </div>
                            </div>
                            <div class="cell-lg-12 cell-md-4">
                                <p class="text-uppercase">Your Phone</p>
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name" type="text" name="phone" required>
                                    <label class="form-label" for="contact-first-name">Your Phone</label>
                                </div>
                            </div>
                            <div class="cell-lg-12 cell-md-4 cell-sm-6">
                                <p class="text-uppercase">Arrival</p>
                                <div class="form-wrap">
                                    <input class="form-input" id="date-in" type="date" name="check_in" required>
                                </div>
                            </div>
                            <div class="cell-lg-12 cell-md-4 cell-sm-6">
                                <p class="text-uppercase">Departure</p>
                                <div class="form-wrap">
                                    <input class="form-input" id="date-out" type="date" name="check_out" required>
                                </div>
                            </div>
                            <div class="cell-lg-12 cell-md-4">
                                <button class="button button-primary button-square" type="submit"><span>check availability</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us-->
<section class="section section-md bg-white text-center text-sm-left">
    <div class="shell-wide">
        <div class="range range-50 range-xs-center overflow-hidden">
            <div class="cell-sm-10 cell-md-8 cell-lg-7 wow fadeInUp" data-wow-delay=".1s">
                <div class="post-video post-video-border">
                    <div class="post-video__image"><img src="assets/images/video-bg-1020x525.jpeg" alt="" width="1020" height="525" />
                    </div>
                    <div class="post-video__body"><a class="link-control post-video__control" data-lightgallery="item" href="#"></a></video></div>
                </div>
            </div>
            <div class="cell-sm-10 cell-md-8 cell-lg-5 reveal-flex wow fadeInUp" data-wow-delay=".3s">
                <div class="bg-primary section-wrap-content-var-1">
                    <div class="section-wrap-content-var-1-inner">
                        <h3>About Us</h3>
                        <p style="font-size: 14px;">At Lincoln Heights, we're dedicated to invigorating individuals seeking
                            energy and excitement. Our mission is to provide limitless opportunities for you to unwind,
                            reenergize, and embrace the thrill of life. Whether you're looking to embark on new adventures or
                            simply relax and recharge, Lincoln Heights is your ultimate destination for revitalization.</p>
                        <div class="group">
                            <dl class="list-desc">
                                <dt>Weekdays:</dt>
                                <dd><span>8:00–20:00</span></dd>
                            </dl>
                            <dl class="list-desc">
                                <dt>Weekends:</dt>
                                <dd><span>9:00–18:00</span></dd>
                            </dl>
                        </div><a class="button button-effect-ujarak button-lg button-secondary-outline button-square" href="about-us.html"><span>book now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Indoor Pool-->
<section class="section section-md bg-secondary-4 text-center text-sm-left">
    <div class="shell">
        <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 cell-md-5">
                <h3>Discover Serenity at Lincoln Heights Hotel Indoor Pool</h3>
                <p>Experience luxury and tranquility at Lincoln Heights Hotel indoor pool. With vaulted wood beam ceilings
                    and bay windows offering scenic views, unwind in style and safety. Indulge in poolside dining and daily
                    aqua aerobics, elevating your stay to new heights of relaxation.</p>
                <p>The serene pool at Lincoln Heights Hotel boasts sleek décor that features striking floor-to-ceiling teak
                    columns set against a cool black tile floor. Poolside dining is also available, featuring a selection of
                    dishes from any cuisine you desire that are both healthy and delicious. Daily aqua aerobics classes help
                    keep guests fit while on the road.</p><a class="button button-primary button button-square button-effect-ujarak button-lg" href="#"><span>read
                        more</span></a>
            </div>
            <div class="cell-sm-6">
                <div class="box-outline box-outline__mod-1">
                    <figure><img src="assets/images/services-05-546x516.jpEg" alt="" width="546" height="516" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<section class="section section-md bg-white text-center text-sm-left">
    <div class="shell-wide">
        <div class="range range-10 range-middle">
            <div class="cell-sm-6">
                <h3>Our Gallery</h3>
            </div>
            <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="#">See All Photos</a>
            </div>
        </div>
        <hr>
        <div class="isotope-wrap">
            <!-- Isotope Content-->
            <div class="row isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
                <div class="col-xs-12 col-sm-6 col-md-3 grid-sizer"></div>
                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".1s"><a class="portfolio-item thumbnail-classic" href="assets/images/gallery-1-533x800_original.jpeg" data-size="533x800" data-lightgallery="item"><img src="assets/images/gallery-1-420x584.jpg" alt="" width="420" height="584" />
                        <figure></figure>
                        <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".2s"><a class="portfolio-item thumbnail-classic" href="assets/images/gallery-2-1199x800_original.jpeg" data-size="1199x800" data-lightgallery="item"><img src="assets/images/gallery-2-420x278.jpeg" alt="" width="420" height="278" />
                        <figure></figure>
                        <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".4s"><a class="portfolio-item thumbnail-classic" href="assets/images/gallery-3-584x800_original.jpeg" data-size="584x800" data-lightgallery="item"><img src="assets/images/gallery-3-420x584.jpeg" alt="" width="420" height="584" />
                        <figure></figure>
                        <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".5s"><a class="portfolio-item thumbnail-classic" href="assets/images/gallery-4-1200x800_original.jpg" data-size="1200x800" data-lightgallery="item"><img src="assets/images/gallery-4-420x278.jpg" alt="" width="420" height="278" />
                        <figure></figure>
                        <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".3s"><a class="portfolio-item thumbnail-classic" href="assets/images/gallery-5-1200x800_original.jpg" data-size="1200x800" data-lightgallery="item"><img src="assets/images/gallery-5-420x278.jpg" alt="" width="420" height="278" />
                        <figure></figure>
                        <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" data-filter="Category 1" data-wow-delay=".6s"><a class="portfolio-item thumbnail-classic" href="assets/images/gallery-6-1200x798_original.jpeg" data-size="1200x798" data-lightgallery="item"><img src="assets/images/gallery-6-420x278.jpeg" alt="" width="420" height="278" />
                        <figure></figure>
                        <div class="caption"><span class="icon mdi-thumb-up-outline">346</span><span class="icon mdi-eye">220</span></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog-->

@endsection