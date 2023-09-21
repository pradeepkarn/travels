<!-- Update the HTML structure to use square frames -->

<?php
import("apps/travel/components/home/tours-and-activities-owl-car.php", $context);
?>

<section class="trending pt-6 pb-0 bg-lgrey">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-8">
                <div class="list-results d-flex align-items-center justify-content-between">
                    <div class="list-results-sort">
                        <p class="m-0">Showing 1-5 of 80 results</p>
                    </div>
                    <div class="click-menu d-flex align-items-center justify-content-between">
                        <div class="change-list me-2"><a href="tour-list.html"><i class="fa fa-bars rounded"></i></a></div>
                        <div class="change-grid f-active me-2"><a href="tour-grid.html"><i class="fa fa-th rounded"></i></a></div>
                        <div class="sortby d-flex align-items-center justify-content-between ml-2">
                            <select class="niceSelect">
                                <option value="1">Sort By</option>
                                <option value="2">Average rating</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/aqua.png" alt="image" class>
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Dubai Aquarium And Underwater Zoo</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(12)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED170.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/water.png" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">

                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Dubai Parks Resorts</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED180.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/park.png" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">

                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Atlantis Aquaventure Waterpark</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(18)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED260.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/aya.png" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">

                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">AYA Universe Dubai</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED180.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/madam.png" alt="image" class>
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">

                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Madame Tussauds</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(12)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED170.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/ski.png" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">

                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Enjoy ICE SKI Dubai</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED180.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/boat.png" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Dhow Cruise Dinner - Marina</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(18)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED260.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/destination/115.png" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Dubai</h5>
                                <h3 class="mb-1" style="font-size: large;"><a href="tour-single.php">Burj Khalifa</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> AED180.00</span> | Per person</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="#" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div> -->
                <div id="set-template">
                    <!-- Package templates will be shown here on ajax call -->
                    <?php echo render_template("packages/top-picks.php", $context); ?>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-3">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item mb-4">
                            <h3 class>Duration Type</h3>
                            <div class="range-slider mt-0">
                                <p class="text-start mb-2">Price Range</p>
                                <div data-min="0" data-max="2000" data-unit="AED" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                    <span class="min-value">0 AED</span>
                                    <span class="max-value">20000 AED</span>
                                    <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                </div>
                                <div class="clearfix"></div>
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


<section class="discount-action pt-0" style="background-image:url(/<?php echo STATIC_URL;  ?>/tour/assets/images/section-bg1.png); background-position:center;">
    <div class="container">
        <div class="call-banner rounded pt-10 pb-14">
            <div class="call-banner-inner w-75 mx-auto text-center px-5">
                <div class="trend-content-main">
                    <div class="trend-content mb-5 pb-2 px-5">
                        <h5 class="mb-1 theme">Love Where Your're Going</h5>
                        <h2><a href="detail-fullwidth.php">Explore Your Life, <span class="theme1"> Travel Where You Want!</span></a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="video-button text-center position-relative">
                        <div class="call-button text-center">
                            <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                <i class="fa fa-play bg-blue"></i>
                            </button>
                        </div>
                        <div class="video-figure"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-overlay"></div>
    <div class="white-overlay"></div>
    <div class="section-shape  top-inherit bottom-0" style="background-image: url(/<?php echo STATIC_URL;  ?>/tour/assets/images/shape6.png);"></div>
</section>