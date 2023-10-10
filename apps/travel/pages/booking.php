<?php
$pkg = (object)$context->data?->pkg;
// myprint($pkg);
?>
<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(/<?php echo STATIC_URL; ?>/tour/assets/images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(/<?php echo STATIC_URL; ?>/tour/assets/images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Booking</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>


<section class="trending pt-6 pb-0 bg-lgrey">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="payment-book">
                    <div class="booking-box">
                        <div class="customer-information mb-4">
                            <h3 class="border-b pb-2 mb-2">Traveller Information</h3>
                            <form class="mb-2">
                                <h5>Let us know who you are</h5>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mb-2">
                                            <label>Title</label>
                                            <div class="input-box">
                                                <select class="niceSelect">
                                                    <option value="0">Select</option>
                                                    <option value="1">Mr.</option>
                                                    <option value="2">Mrs.</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-2">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group mb-2">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Email</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Phone</label>
                                            <input type="text" placeholder="Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="input-box">
                                                <select class="niceSelect">
                                                    <option value="0">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group mb-2">
                                            <label>DOB</label>
                                            <div class="input-box">
                                                <input id="date-range" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group mb-2">
                                            <label>Select Country</label>
                                            <div class="input-box">
                                                <select class="niceSelect">
                                                    <option value="0">Albania</option>
                                                    <option value="1">Malaysia</option>
                                                    <option value="2">Singapore</option>
                                                    <option value="3">Japan</option>
                                                    <option value="4">Thailand</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group mb-2">
                                            <label>Select City</label>
                                            <div class="input-box">
                                                <select class="niceSelect">
                                                    <option value="0">Istanbul</option>
                                                    <option value="1">London</option>
                                                    <option value="2">Texas</option>
                                                    <option value="3">Tokyo</option>
                                                    <option value="4">Bangkok</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Address Line 1</label>
                                            <input type="text" placeholder="Address line 1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Address Line 2</label>
                                            <input type="text" placeholder="Address line 2">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="customer-information mb-4 d-flex align-items-center bg-grey rounded p-4">
                            <i class="fa fa-grin-wink rounded fs-1 bg-theme white p-3 px-4"></i>
                            <div class="customer-info ps-4">
                                <h6 class="mb-1">Good To Know:</h6>
                                <small>Free Cancellation until 14:00 pn 11 Feb 2022</small>
                            </div>
                        </div>
                        <div class="customer-information card-information">
                            <h3 class="border-b pb-2 mb-2">How do you want to pay?</h3>
                            <div class="trending-topic-main">

                                <ul class="nav nav-tabs nav-pills nav-fill w-50" id="postsTab1" role="tablist">
                                    <li class="nav-item me-2 ms-0" role="presentation">
                                        <button aria-controls="card" aria-selected="false" class="nav-link active" data-bs-target="#card" data-bs-toggle="tab" id="card-tab" role="tab" type="button">Credit/Debit card</button>
                                    </li>
                                    <li class="nav-item m-0" role="presentation">
                                        <button aria-controls="paypal" aria-selected="true" class="nav-link" data-bs-target="#paypal" data-bs-toggle="tab" id="paypal-tab" role="tab" type="button">Digital Payment</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="postsTabContent1">

                                    <div aria-labelledby="card-tab" class="tab-pane fade active show" id="card" role="tabpanel">
                                        <form>
                                            <h5 class="mb-2 border-b pb-2"><i class="fa fa-credit-card"></i> Credit Card</h5>
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="card-detail">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-2">
                                                                    <label>Card Holder Number</label>
                                                                    <input type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-2">
                                                                    <label>Card Number</label>
                                                                    <input type="text" placeholder="**** **** **** ****">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-2">
                                                                    <label>Expiry Date</label>
                                                                    <input type="text" placeholder=" Expiry Date">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>CVC/CVV</label>
                                                                    <input type="text" placeholder="CVC/CVV">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="images/cc.png" alt class="rounded">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div aria-labelledby="paypal-tab" class="tab-pane fade" id="paypal" role="tabpanel">
                                        <div class="paypal-card">
                                            <h5 class="mb-2 border-b pb-2"><i class="fab fa-paypal"></i> Paypal</h5>
                                            <ul class>
                                                <li class="d-block">To make the payment process secure and complete you will be redirected to Paypal Website.</li>
                                                <li class="d-block">
                                                    <a href class="theme">Checkout via Paypal <i class="fa fa-long-arrow-alt-right"></i></a>
                                                </li>
                                                <li class="d-block">The total Amount you will be charged is: <span class="fw-bold theme">$ 245.50</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-terms border-t pt-3 mt-3">
                                <form class="d-lg-flex align-items-center">
                                    <div class="form-group mb-2 w-75">
                                        <input type="checkbox"> By continuing, you agree to the <a href="#">Terms and Conditions.</a>
                                    </div>
                                    <a href="confirm-booking.php" class="nir-btn float-lg-end w-25">CONFIRM BOOKING</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 ps-ld-4">
                <div class="sidebar-sticky">
                    <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                        <h4>Your Booking Details</h4>
                        <div class="trend-full border-b pb-2 mb-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="trend-item2 rounded">
                                        <a href="destination-single1.html" style="background-image: url(/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $pkg?->banner; ?>);"></a>
                                        <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 ps-0">
                                    <div class="trend-content position-relative">
                                        <div class="rating mb-1">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <small>200 Reviews</small>
                                        </div>
                                        <h5 class="mb-1"><?php echo $pkg?->title; ?></h5>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> <?php echo $pkg?->city; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-check border-b pb-2">
                            <div class="row">
                                <!-- ... (existing code) ... -->

                                <!-- Select number of adults -->
                                <div class="col-lg-6">
                                    <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                        <label for="adults">Adults:</label>
                                        <select id="adults" name="adults" class="form-control">
                                            <?php $a=1; while ($a <= 10) { ?>
                                                <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
                                           <?php $a++; } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select number of children -->
                                <div class="col-lg-6">
                                    <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                        <label for="children">Children:</label>
                                        <select id="children" name="children" class="form-control">
                                        <?php $chi=0; while ($chi <= 10) { ?>
                                                <option value="<?php echo $chi; ?>"><?php echo $chi; ?></option>
                                           <?php $chi++; } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-check border-b pb-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                        <p class="mb-0">Check In</p>
                                        <h6 class="mb-0" id="checkin-date">Thu 21 Feb 2022</h6>
                                        <small>15:00 - 22:00</small>
                                        <input type="datetime-local" id="checkin-input" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                        <p class="mb-0">Check Out</p>
                                        <h6 class="mb-0" id="checkout-date">Tue 24 Feb 2022</h6>
                                        <small>1:00 - 10:00</small>
                                        <input type="datetime-local" id="checkout-input" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-check border-b pb-2 mb-2">
                            <p class="mb-0">Total Length of Stay:</p>
                            <h6 class="mb-0" id="length-of-stay">0 Days | 0 Nights </h6>
                            <small><a href="#" class="theme text-decoration-underline">travelling on different dates?</a></small>
                        </div>
                        <div class="trend-check">
                            <p class="mb-0">You Selected:</p>
                            <h6 class="mb-0">Superior Double Rooms <span class="float-end fw-normal">1 room, 3 adults</span> </h6>
                            <small><a href="#" class="theme text-decoration-underline">Change your selection</a></small>
                        </div>
                    </div>
                    <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                        <h4>Your Price Summary</h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td> Superior Twin</td>
                                    <td class="theme2">$500.00</td>
                                </tr>
                                <tr>
                                    <td>Number of Travellers</td>
                                    <td class="theme2">3</td>
                                </tr>
                                <tr>
                                    <td>Tax & fee</td>
                                    <td class="theme2">$50.00</td>
                                </tr>
                                <tr>
                                    <td>Booking Fee</td>
                                    <td class="theme2">Free</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="theme2">$550.00</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-title">
                                <tr>
                                    <th class="font-weight-bold white">Amount</th>
                                    <th class="font-weight-bold white">$550.00</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                        <h4>Your Payment Schedule</h4>
                        <p class="mb-0">Before you stay you'll pay <span class="float-end">$40.00</span></p>
                    </div>
                    <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3">
                        <h4>Do you have a promo code?</h4>
                        <input type="text" name>
                        <a href="#" class="nir-btn-black mt-2">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script>
    // Get the input elements and the elements where the dates will be displayed
    var checkinInput = document.getElementById('checkin-input');
    var checkoutInput = document.getElementById('checkout-input');
    var checkinDateElement = document.getElementById('checkin-date');
    var checkoutDateElement = document.getElementById('checkout-date');
    var lengthOfStayElement = document.getElementById('length-of-stay');

    // Function to calculate the length of stay and update the DOM
    function updateLengthOfStay() {
        var checkinDate = moment(checkinInput.value);
        var checkoutDate = moment(checkoutInput.value);

        // Calculate the difference in days
        var lengthOfStay = checkoutDate.diff(checkinDate, 'days') + 1; // Adding 1 to include the checkout day

        // Update the displayed dates
        checkinDateElement.textContent = checkinDate.format('ddd D MMM YYYY');
        checkoutDateElement.textContent = checkoutDate.format('ddd D MMM YYYY');

        // Update the length of stay
        lengthOfStayElement.textContent = lengthOfStay + ' Days | ' + (lengthOfStay - 1) + ' Nights';
    }

    // Add event listeners to the input elements
    checkinInput.addEventListener('input', updateLengthOfStay);
    checkoutInput.addEventListener('input', updateLengthOfStay);
</script>