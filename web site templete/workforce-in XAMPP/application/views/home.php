<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- hero start -->
<section class="hero hero__style-one bg_img" data-background="<?= base_url('assets/images/bg/hero_bg.jpg') ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="hero__content">
                    <h1 class="wow skewIn">Opportunities <br> <span>in Israel</span></h1>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".6s">Build Your Future in Israel Join Today!</p>
                    <ul class="xb-list list-unstyled mt-40 mb-60 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration=".6s">
                        <li><i class="far fa-check"></i>Global Opportunities</li>
                        <li><i class="far fa-check"></i>High Earning Potential</li>
                        <li><i class="far fa-check"></i>Seamless Immigration</li>
                        <li><i class="far fa-check"></i>Quality Assurance</li>
                        <li><i class="far fa-check"></i>International Networking</li>
                    </ul>
                    <div class="btns wow fadeInUp" data-wow-delay="600ms" data-wow-duration=".6s">
                        <?= anchor('apply', 'Apply Now', 'class="thm-btn"'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero end -->
<!-- about start -->
<section class="about pos-rel pb-90 pt-120">
    <div class="container">
        <div class="sec-title sec-title--big style-2 mb-20">
            <span class="sec-title--sub"><?= img("assets/images/icon/h_star.png"); ?>about us<?= img("assets/images/icon/h_star.png"); ?></span>
            <h3 class="sec-title--heading mb-30">Since 1998 - Unparalleled Comprehensive <br> Student Visa Guide</h3>
            <p>Welcome to [Your Company Name], where passion meets purpose in the world of international workforce solutions. With a vision to connect skilled labor from India to diverse opportunities in Israel, we pride ourselves on being a bridge to success.</p> <br>
            
            <p>At [Your Company Name], we go beyond recruitment; we curate experiences and foster growth. Our commitment to excellence, transparency, and personalized service defines us. With a dedicated team and a proven track record, we strive to make your journey seamless, ensuring a rewarding career for workers and reliable solutions for businesses.</p> <br>

            
            <p>Join us as we shape the future of global collaboration. Discover unparalleled support, tailored solutions, and a pathway to success at [Your Company Name].
        </div>
        <div class="row align-items-center mt-none-30">
            <div class="col-xl-3 col-lg-4 mt-30">
                <div class="about-btn">
                    <?= anchor('about', APP_NAME." Histoy<span>".img('assets/images/icon/arrow_right.svg')."</span>", 'class="grd-btn"'); ?>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 mt-30">
                <div class="xb-about-content">
                    <p>Unlock Your Educational Journey Abroad: The Essential Student Visa GuideYour Gateway to Global Learning</p>
                    <?= anchor('about', 'Explore More Insight About us<i class="far fa-long-arrow-right"></i>'); ?>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mt-30">
                <div class="xb-about-img">
                    <?= img("assets/images/about/about_img2.png"); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape">
        <div class="shape shape--1">
            <div class="shape-inner" data-parallax='{"x":-50,"y":-80}'>
                <?= img("assets/images/shape/a_shape1.png"); ?>
            </div>
        </div>
        <div class="shape shape--2">
            <div class="shape-inner" data-parallax='{"x":50,"y":-80}'>
                <?= img("assets/images/shape/a_shape2.png"); ?>
            </div>
        </div>
    </div>
</section>
<!-- about end -->
<!-- about start -->
<section class="about pos-rel pb-130">
    <div class="container">
        <div class="sec-title mb-55">
            <h2 class="mb-30 wow skewIn">The Step-by-Step  <br>
                <span>Application Process</span></h2>
            <p>Embark on your Israeli work adventure with ease. Our streamlined visa application process <br> ensures a hassle-free journey for skilled labor from India.  From job offer to approval, we guide you every step of the way.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="about__content">
                    <ul class="about-list ul_li list-unstyled">
                        <li>
                            <div class="xb-item--inner">
                                <div class="xb-item--number">1</div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-10">Choose your visa type</h3>
                                    <div class="xb-item--description">
                                        Determine the Visa type for your travel purpose.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="xb-item--inner">
                                <div class="xb-item--number color-2">2</div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-10">Contact our branches</h3>
                                    <div class="xb-item--description">
                                        Start your transaction by applying to our branches.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="xb-item--inner">
                                <div class="xb-item--number color-3">3</div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-10">Submit All Your Documents</h3>
                                    <div class="xb-item--description">
                                        Collect all the required documents the process.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="xb-item--inner">
                                <div class="xb-item--number color-4">4</div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title mb-10">Passport delivery</h3>
                                    <div class="xb-item--description">
                                        Receive your visa, which is finalized after application,
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="about__img">
        <?= img("assets/images/about/about_img.png") ?>
    </div>
</section>
<!-- about end -->
<!-- visa type start -->
<section class="visa type pb-135">
    <div class="container">
        <div class="service-wrap pos-rel">
            <div class="service-img-wrap">
                <div class="service-bg" data-background="assets/images/bg/service_bg.png"></div>
                <div class="service-img wow skewIn" data-wow-delay="100ms"
                        data-background="assets/images/service/img_01.jpg"></div>
            </div>
            <div class="sec-title wow skewIn pt-120">
                <h2 class="mb-60">Visa types and eligibility <br> <span>assessment</span></h2>
            </div>
            <div class="row justify-content-md-center mt-none-30">
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="xb-service">
                        <div class="xb-item--inner">
                            <div class="xb-item--icon mb-50">
                                <?= img('assets/images/icon/sv_01.svg'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title mb-20">
                                    <?= anchor('contact', 'B-1 Work Visa'); ?>
                                </h3>
                                <div class="xb-item--description">
                                    his visa is for foreign workers coming to Israel for temporary employment...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="xb-service">
                        <div class="xb-item--inner">
                            <div class="xb-item--icon color2 mb-50">
                                <?= img('assets/images/icon/sv_02.svg'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title mb-20">
                                    <?= anchor('contact', 'A-1 Skilled Expert Work Visa'); ?>
                                </h3>
                                <div class="xb-item--description">
                                    Developing your trade, setting up new sales channels Your visa is ready...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-30"></div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="xb-service">
                        <div class="xb-item--inner">
                            <div class="xb-item--icon color3 mb-50">
                                <?= img('assets/images/icon/sv_03.svg'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title mb-20">
                                    <?= anchor('contact', 'A-2 Expert Work Visa'); ?>
                                </h3>
                                <div class="xb-item--description">
                                Issued for foreign experts or specialists in various professions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="xb-service">
                        <div class="xb-item--inner">
                            <div class="xb-item--icon color4 mb-50">
                                <?= img('assets/images/icon/sv_04.svg'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--title mb-20">
                                    <?= anchor('contact', 'Workforce Visa'); ?>
                                </h3>
                                <div class="xb-item--description">
                                    Expert Guidance for a Seamless Immigration Journey Expert Guidance...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- visa type end -->
<!-- team start -->
<section class="team pb-120">
    <div class="container">
        <div class="team-wrap pos-rel">
            <div class="row mt-none-30">
                <div class="col-xl-6 mt-30">
                    <div class="sec-title mb-45">
                        <h2 class="mb-40 wow skewIn">Our trusted immigration <br> <span> support team</span>
                        </h2>
                        <p>At the heart of our commitment to providing exceptional immigration solutions
                            stands</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner" data-parallax='{"scale" : 1}'>
                            <div class="xb-item--img">
                                <?= img('assets/images/team/img_01.png'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="javascript:;">Esther Howard</a></h3>
                                <span class="xb-item--designation">Legal Advisor</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <?= img('assets/images/team/img_02.png'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="javascript:;">Annette Black</a></h3>
                                <span class="xb-item--designation">Education Counsellor</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <?= img('assets/images/team/img_03.png'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="javascript:;">Andrew Riis</a></h3>
                                <span class="xb-item--designation">Visa Specialist</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <?= img('assets/images/team/img_04.png'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="javascript:;">Kristin Watson</a></h3>
                                <span class="xb-item--designation">Visa Coordinator</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <?= img('assets/images/team/img_05.png'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="javascript:;">Jerome Bell</a></h3>
                                <span class="xb-item--designation">General Manager</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                    <div class="xb-team text-center">
                        <div class="xb-item--inner">
                            <div class="xb-item--img">
                                <?= img('assets/images/team/img_06.png'); ?>
                            </div>
                            <div class="xb-item--holder">
                                <h3 class="xb-item--name"><a href="javascript:;">Eleanor Pena</a></h3>
                                <span class="xb-item--designation">Case Manager</span>
                            </div>
                            <ul class="xb-item--social list-unstyled">
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xb-team-bg">
                <div class="xb-bg xb-bg--1"></div>
                <div class="xb-bg xb-bg--2"></div>
            </div>
        </div>
    </div>
</section>
<!-- team end -->
<!-- testimonial start -->
<section class="testimonial bg_img pt-130 pb-130" data-bg-color="#EDF3F5" data-background="assets/images/bg/tm_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="sec-title margin-none-md mb-30-xs mb-125">
                    <h2 class="mb-70 wow skewIn">Happy Clients Reflect on Their <br>
                        <span> Journey with Us</span></h2>
                    <p>Embark on a Global Exploration: <br> Experience Joy in 190+ Countries <br> and Across the
                        World</p>
                </div>
                <div class="xb-testimonial__nav ul_li">
                    <div class="tm-nav-item tm-button-prev"></div>
                    <div class="tm-nav-item tm-button-next"></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="xb-swiper-sliders">
                    <div class="xb-carousel-inner">
                        <div class="xb-testimonial-slider xb-swiper-container swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide xb-swiper-slide">
                                    <div class="xb-testimonial">
                                        <div class="xb-item--inner text-center">
                                            <div class="xb-item--img">
                                                <?= img("assets/images/icon/trustpilot.png"); ?>
                                            </div>
                                            <div class="xb-item--content">
                                                "From start to finish, evisa made my visa application a breeze.
                                                Their expertise and friendly guidance turned a complex process
                                                into a walk in the park. Grateful for their seamless service!"
                                            </div>
                                            <div class="xb-item--bottom">
                                                <div class="xb-item--ratting">
                                                    <?= img("assets/images/icon/tr_rattig.png"); ?>
                                                </div>
                                                <h3 class="xb-item--title">Goladria Gomez</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide xb-swiper-slide">
                                    <div class="xb-testimonial">
                                        <div class="xb-item--inner text-center">
                                            <div class="xb-item--img">
                                                <?= img("assets/images/icon/trustpilot.png"); ?>
                                            </div>
                                            <div class="xb-item--content">
                                                "e.visa made my immigration journey stress-free. Their expertise
                                                and personalized guidance were remarkable, guiding me from
                                                application to approval. Now happily settled in the UK."
                                            </div>
                                            <div class="xb-item--bottom">
                                                <div class="xb-item--ratting">
                                                    <?= img("assets/images/icon/tr_rattig.png"); ?>
                                                </div>
                                                <h3 class="xb-item--title">Marinda Dilendira</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide xb-swiper-slide">
                                    <div class="xb-testimonial">
                                        <div class="xb-item--inner text-center">
                                            <div class="xb-item--img">
                                                <?= img("assets/images/icon/trustpilot.png"); ?>
                                            </div>
                                            <div class="xb-item--content">
                                                "From start to finish, evisa made my visa application a breeze.
                                                Their expertise and friendly guidance turned a complex process
                                                into a walk in the park. Grateful for their seamless service!"
                                            </div>
                                            <div class="xb-item--bottom">
                                                <div class="xb-item--ratting">
                                                    <?= img("assets/images/icon/tr_rattig.png"); ?>
                                                </div>
                                                <h3 class="xb-item--title">Goladria Gomez</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->
<!-- faq start -->
<section class="faq pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="xb-faq-content">
                    <div class="sec-title mb-125">
                        <h2 class="mb-30 wow skewIn">Common questions <br> <span> answered</span></h2>
                        <p>At the heart of our commitment to providing <br> exceptional immigration solutions
                            stands our trusted</p>
                    </div>
                    <div class="faq-img">
                        <?= img("assets/images/faq/faq_img.png"); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="xb-faq">
                    <ul class="accordion_box clearfix">
                        <li class="accordion block active-block">
                            <div class="acc-btn">
                                What services do you offer?
                                <span class="arrow"></span>
                            </div>
                            <div class="acc_body current">
                                <div class="content">
                                    <p>We offer comprehensive immigration and visa consulting services, <br>
                                        including visa application assistance, document preparation,</p>
                                    <ul>
                                        <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                        <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                        <li><i class="far fa-check"></i>Transparency and Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                What is the consultation process like?
                                <span class="arrow"></span>
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <p>We offer comprehensive immigration and visa consulting services, <br>
                                        including visa application assistance, document preparation,</p>
                                    <ul>
                                        <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                        <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                        <li><i class="far fa-check"></i>Transparency and Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                How much do your services cost?
                                <span class="arrow"></span>
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <p>We offer comprehensive immigration and visa consulting services, <br>
                                        including visa application assistance, document preparation,</p>
                                    <ul>
                                        <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                        <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                        <li><i class="far fa-check"></i>Transparency and Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                How do I get started with your services?
                                <span class="arrow"></span>
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <p>We offer comprehensive immigration and visa consulting services, <br>
                                        including visa application assistance, document preparation,</p>
                                    <ul>
                                        <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                        <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                        <li><i class="far fa-check"></i>Transparency and Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                What is your success rate with visa applications?
                                <span class="arrow"></span>
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <p>We offer comprehensive immigration and visa consulting services, <br>
                                        including visa application assistance, document preparation,</p>
                                    <ul>
                                        <li><i class="far fa-check"></i>Comprehensive Visa Assistance</li>
                                        <li><i class="far fa-check"></i>Visa Category Expertise</li>
                                        <li><i class="far fa-check"></i>Transparency and Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq end -->