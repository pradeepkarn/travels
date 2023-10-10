<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travelin - Travel Tour Booking HTML Templates</title>

    <link rel="shortcut icon" type="image/x-icon" href="/<?php echo STATIC_URL; ?>/tour/assets/images/favicon.png">

    <link href="/<?php echo STATIC_URL; ?>/tour/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="/<?php echo STATIC_URL; ?>/tour/assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="/<?php echo STATIC_URL; ?>/tour/assets/css/plugin.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-o3udH7w5NqV5J7ICrNuq0v8K5VLTjI8hz1sce/c8ZxXqEOMUkKf0fEZsL8xSm94X" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/tour/assets/line-icons.css" type="text/css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/owl/dist/assets/owl.theme.default.min.css">
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/owl/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        function swalert(obj) {
            Swal.fire(
                obj.title,
                obj.msg,
                obj.icon
            ).then(() => {
                if (obj.gotoLink) {
                    window.location.href = obj.gotoLink;
                }
            })
        }
    </script>
</head>

<body>
<div id="global-progress-bar" style="height: 5px;" class="progress fixed-top" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
    </div>
    <div id="preloader">
        <div id="status"></div>
    </div>


    <header class="main_header_area">
        <div class="header-content py-1 bg-theme">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" class="white"><i class="icon-calendar white"></i> Thursday, Mar 26, 2021</a></li>
                        <li><a href="#" class="white"><i class="icon-location-pin white"></i> Hollywood, America</a></li>
                        <li><a href="#" class="white"><i class="icon-clock white"></i> Mon-Fri: 10 AM - 5 PM</a></li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>
                        <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="/<?php echo home; ?>">
                                <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/logo1.png" alt="image" width="150px">
                            </a>
                        </div>

                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                    <a href="/<?php echo home; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home </a>
                                </li>
                                <li><a href="/<?php echo home . route('aboutUs'); ?>">About Us</a></li>
                                <li><a href="/<?php echo home . route('visa'); ?>">Visa</a></li>

                                <li class="submenu dropdown">
                                    <a href="/<?php echo home . route('tours'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tours <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="/<?php echo home . route('services'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="/<?php echo home . route('contact'); ?>">Contact</a></li>


                                <!-- <li class="search-main"><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="register-login d-flex align-items-center">
                            <?php if (USER) : ?>
                                <a href="/<?php echo home . route('logout'); ?>" class="me-3">
                                    <i class="icon-user"></i> Logout
                                </a>
                            <?php else : ?>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                                    <i class="icon-user"></i> Login/Register
                                </a>
                            <?php endif; ?>
                            <a href="#" class="nir-btn white">Book Now</a>
                        </div>
                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <?php import("apps/travel/pages/{$context->page}", $context); ?>

    <footer class="pt-20 pb-4" style="background-image: url(assets/images/background_pattern.png);">
        <div class="section-shape top-0" style="background-image: url(assets/images/shape8.png);"></div>


        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                        <div class="footer-about">
                            <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/logo-white.png" alt="">
                            <p class="mt-3 mb-3 white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque iaculis molestie sagittis maecenas aenean eget molestie sagittis.
                            </p>
                            <ul>
                                <li class="white"><strong>PO Box:</strong> +47-252-254-2542</li>
                                <li class="white"><strong>Location:</strong> Collins Street, sydney, Austrelia</li>
                                <li class="white"><strong>Email:</strong> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94fdfaf2fbd4c0e6f5e2f1f8fdfabaf7fbf9">info@gmail.com</a></li>
                                <li class="white"><strong>Website:</strong> Linovatesolutions.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Quick link</h3>
                            <ul>
                                <li><a href="<?php echo BASEURI.route('aboutUs'); ?>">About Us</a></li>
                                <li><a href="<?php echo BASEURI.route('tours'); ?>">Tours</a></li>
                                <li><a href="<?php echo BASEURI; ?>/privacy-policy">Privacy Policy</a></li>
                                <li><a href="<?php echo BASEURI; ?>/terms-of-use">Terms of use</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Newsletter</h3>
                            <div class="newsletter-form ">
                                <p class="mb-3">Jin our community of over 200,000 global readers who receives emails filled with news, promotions, and other good stuff.</p>
                                <form action="#" method="get" accept-charset="utf-8" class="border-0 d-flex align-items-center">
                                    <input type="text" placeholder="Email Address">
                                    <button class="nir-btn ms-2">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="post-tabs">

                            <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                                </li>
                            </ul>

                            <div class="tab-content blog-full" id="postsTabContent">

                                <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="blog-image rounded">
                                                <a href="#" style="background-image: url(assets/images/trending/trending5.jpg);"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-center border-b pb-2">Login</h4>
                                            <!-- <div class="log-reg-button d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-fb">
                                                    <i class="fab fa-facebook"></i> Login with Facebook
                                                </button>
                                                <button type="submit" class="btn btn-google">
                                                    <i class="fab fa-google"></i> Login with Google
                                                </button>
                                            </div> -->
                                            <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                            <did id="res"></did>
                                            <form id="contactform" action="/<?php echo home . route('userLoginAjax'); ?>" method="post">
                                                <div class="form-group mb-2">
                                                    <input type="text" name="username" class="form-control" id="fname" placeholder="User Name or Email Address">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="password" name="password" class="form-control" id="lpass" placeholder="Password">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                                    <label class="custom-control-label mb-0" for="exampleCheck1">Remember me</label>
                                                    <a class="float-end" href="#">Lost your password?</a>
                                                </div>
                                                <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                    <button type="button" class="nir-btn w-100" id="login-btn">Login</button>
                                                </div>
                                                
                                            </form>
                                            <?php

                                            pkAjax_form("#login-btn", "#contactform", "#res");

                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="blog-image rounded">
                                                <a href="#" style="background-image: url(assets/images/trending/trending5.jpg);"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="text-center border-b pb-2">Register</h4>
                                            <!-- <div class="log-reg-button d-flex align-items-center justify-content-between">
                                                <button type="submit" class="btn btn-fb">
                                                    <i class="fab fa-facebook"></i> Login with Facebook
                                                </button>
                                                <button type="submit" class="btn btn-google">
                                                    <i class="fab fa-google"></i> Login with Google
                                                </button>
                                            </div> -->
                                            <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                            <form id="reg-form" action="/<?php echo home . route('registerAjax'); ?>" method="post">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"><?php echo lang('global')->email ?? 'Email'; ?></label>
                                                    <input type="email" class="form-control email" id="email" name="email" required>
                                                    <div class="d-grid">
                                                        <button type="button" id="send-otp-btn" class="btn btn-sm btn-primary my-2">Send OTP</button>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"><?php echo lang('global')->otp ?? 'OTP'; ?></label>
                                                    <input type="email" class="form-control" id="email" name="otp" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label"><?php echo lang('global')->password ?? 'Password'; ?></label>
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label"><?php echo lang('global')->confirm_password ?? 'Confirm Password'; ?></label>
                                                    <input type="password" class="form-control" id="password" name="confirm_password" required>
                                                </div>

                                                <div class="my-4">
                                                    <input type="checkbox" name="terms_and_conditions_and_privacy_policy" id="tnc">
                                                    <a class="text-primary" target="_blank" href="/<?php echo home . route('pageBySlug', ['slug' => 'privacy-policy']); ?>"><?php echo lang('global')->privacy_policy ?? 'Privacy policy'; ?></a> <?php echo lang('global')->and ?? 'and'; ?>
                                                    <a class="text-primary" target="_blank" href="/<?php echo home . route('pageBySlug', ['slug' => 'terms-of-use']); ?>"><?php echo lang('global')->terms_of_use ?? 'Termas of user'; ?>.</a>
                                                    <i class="fas fa-arrow-left"></i>
                                                    <?php echo lang('global')->i_agree ?? 'I agree'; ?>
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <button disabled id="reg-btn" type="button" class="btn btn-primary"><?php echo lang('nav')->register ?? 'Register'; ?></button>
                                                    
                                                </div>
                                            </form>
                                            <?php

                                            send_to_server_wotf("#send-otp-btn", ".email", "handleOtpSend", route('sendOtpAjax'));

                                            pkAjax_form("#reg-btn", "#reg-form", "#res");
                                            ?>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const checkbox = document.getElementById('tnc');
                                                    const registerBtn = document.getElementById('reg-btn');

                                                    checkbox.addEventListener('change', function() {
                                                        if (checkbox.checked) {
                                                            registerBtn.disabled = false;
                                                        } else {
                                                            registerBtn.disabled = true;
                                                        }
                                                    });
                                                });
                                            </script>
                                            <script>
                                                function handleOtpSend(res) {
                                                    if (res.success === true) {
                                                        swalert({
                                                            title: 'Success',
                                                            msg: res.msg,
                                                            icon: 'success'
                                                        });
                                                    } else if (res.success === false) {
                                                        swalert({
                                                            title: 'Failed',
                                                            msg: res.msg,
                                                            icon: 'error'
                                                        });
                                                    } else {
                                                        swalert({
                                                            title: 'Failed',
                                                            msg: 'Something went wrong',
                                                            icon: 'error'
                                                        });
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-payment">
            <div class="container">
                <div class="row footer-pay align-items-center justify-content-between text-lg-start text-center">
                    <div class="col-lg-8 footer-payment-nav mb-4">
                        <ul class="">
                            <li class="me-2">We Support:</li>
                            <li class="me-2"><i class="fab fa-cc-mastercard fs-4"></i></li>
                            <li class="me-2"><i class="fab fa-cc-paypal fs-4"></i></li>
                            <li class="me-2"><i class="fab fa-cc-stripe fs-4"></i></li>
                            <li class="me-2"><i class="fab fa-cc-visa fs-4"></i></li>
                            <li class="me-2"><i class="fab fa-cc-discover fs-4"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                        <div class="copyright-text">
                            <p class="m-0 white">2022 Linovate solutions. All rights reserved.</p>
                        </div>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js"></div>
    </footer>


    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>





    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/bootstrap.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/particles.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/particlerun.js"></script>
    <!-- <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/plugin.js"></script> -->
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/main.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/custom-swiper.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/custom-nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-FATj2IQnWfOi3nTl07PFPa7MHKC4lkZ9QqLwFoc5F5N3hKf2tFjCqLY02E1QDA5qP" crossorigin="anonymous"></script>
    <?php
    ajaxActive("#global-progress-bar");
    ?>
   <script>
    $.ajaxSetup({
        xhr: function() {
          var xhr = new XMLHttpRequest();
          xhr.upload.addEventListener('progress', function(evt) {
            if (evt.lengthComputable) {
              var percentComplete = Math.round((evt.loaded / evt.total) * 100);
              // Update the width of the progress bar inside #global-progress-bar
              $('#global-progress-bar .progress-bar').css('width', percentComplete + '%');
              // Update the text inside the progress bar (if needed)
              // $('#global-progress-bar .progress-bar').html(percentComplete + '%');
            }
          }, false);
          return xhr;
        }
      });
    </script>
</body>

</html>