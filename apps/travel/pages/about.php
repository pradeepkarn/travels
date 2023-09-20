
<?php 
$abt = obj($context->data->about);
?>
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $abt->banner; ?>);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(/<?php echo STATIC_URL; ?>/tour/assets/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">About Us</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>


<section class="about-us pt-6" style="background-image:url(/<?php echo STATIC_URL; ?>/tour/assets/images/background_pattern.png); background-position:bottom right;">
    <div class="container">
        <div class="about-image-box">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-6 ps-4">
                    <div class="about-content text-center text-lg-start">
                        <h4 class="theme d-inline-block mb-0">Get To Know Us</h4>
                        <h2 class="border-b mb-2 pb-1"><?php echo $abt->title; ?></h2>
                        <?php echo $abt->content; ?>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 pe-4">
                    <div class="about-image" style="animation:none; background:transparent;">
                        <img src="/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $abt->banner; ?>" alt="<?php echo $abt->title; ?>">
                    </div>
                </div>
                <div class="col-lg-12">

                    <div class="counter-main w-75 float-start z-index3 position-relative">
                        <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="counter-item border-end pe-4">
                                        <div class="counter-content">
                                            <h2 class="value mb-0 theme">20</h2>
                                            <span class="m-0">Years Experiences</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="counter-item border-end pe-4">
                                        <div class="counter-content">
                                            <h2 class="value mb-0 theme">530</h2>
                                            <span class="m-0">Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="counter-item border-end pe-4">
                                        <div class="counter-content">
                                            <h2 class="value mb-0 theme">850</h2>
                                            <span class="m-0">Happy Customers</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="counter-item">
                                        <div class="counter-content">
                                            <h2 class="value mb-0 theme">320</h2>
                                            <span class="m-0">Award Winning</span>
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
    <div class="white-overlay"></div>
</section>


<section class="about-us pb-0">
    <div class="section-shape section-shape1" style="background-image: url(/<?php echo STATIC_URL; ?>/tour/assets/images/shape8.png);"></div>
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Core Features</h4>
            <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <div class="why-us">
            <div class="why-us-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-flag theme"></i>
                                </div>
                                <h4><a href="about.php">Tell Us What You want To Do</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-location-pin theme"></i>
                                </div>
                                <h4><a href="about.php">Share Your Travel Locations</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-directions theme"></i>
                                </div>
                                <h4><a href="about.php">Share Your Travel Preference</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-compass theme"></i>
                                </div>
                                <h4><a href="about.php">Here 100% Trusted Tour Agency</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="our-team pb-0 pt-6">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Tour Guides</h4>
            <h2 class="mb-1">Meet Our <span class="theme">Excellent Guides</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="team-main">
            <div class="row shop-slider">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/team/img1.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Salmon Thuir</h4>
                            <p class="mb-0 white">Senior Agent</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/team/img2.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Horke Pels</h4>
                            <p class="mb-0 white">Head Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/team/img4.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Solden kalos</h4>
                            <p class="mb-0 white">Supervisor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/team/img3.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Nelson Bam</h4>
                            <p class="mb-0 white">Quality Assurance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/team/img4.jpg" alt="team">
                        </div>
                        <div class="team-content text-center bg-theme p-3">
                            <h4 class="mb-0 white">Cacics Coold</h4>
                            <p class="mb-0 white">Asst. Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonial pt-9" style="background-image:url(/<?php echo STATIC_URL; ?>/tour/assets/images/testimonial.png)">
    <div class="container">
        <div class="section-title mb-6 text-center w-75 mx-auto">
            <h4 class="mb-1 theme1">Our Testimonails</h4>
            <h2 class="mb-1">Good Reviews By <span class="theme">Clients</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pe-4">
                <div class="testimonial-image">
                    <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/travel2.png" alt="">
                </div>
            </div>
            <div class="col-lg-7 ps-4">
                <div class="row review-slider">
                    <div class="col-sm-4 item">
                        <div class="testimonial-item1 rounded">
                            <div class="author-info mt-2 d-flex align-items-center mb-4">
                                <a href="#"><img src="/<?php echo STATIC_URL; ?>/tour/assets/images/testimonial/img1.jpg" alt=""></a>
                                <div class="author-title ms-3">
                                    <h5 class="m-0 theme">Jared Erondu</h5>
                                    <span>Supervisor</span>
                                </div>
                            </div>
                            <div class="details">
                                <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 item">
                        <div class="testimonial-item1 rounded">
                            <div class="author-info mt-2 d-flex align-items-center mb-4">
                                <a href="#"><img src="/<?php echo STATIC_URL; ?>/tour/assets/images/testimonial/img1.jpg" alt=""></a>
                                <div class="author-title ms-3">
                                    <h5 class="m-0 theme">Jared Erondu</h5>
                                    <span>Supervisor</span>
                                </div>
                            </div>
                            <div class="details">
                                <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>