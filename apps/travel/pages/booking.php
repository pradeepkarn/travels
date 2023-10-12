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
        <form id="confirmform" class="mb-2" method="post"  action="<?php echo BASEURI . route('requestPay'); ?>">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="customer-information mb-4">
                                <h3 class="border-b pb-2 mb-2">Traveller Information</h3>

                                <h5>Let us know who you are</h5>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>First Name</label>
                                            <input type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Email</label>
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mb-2">
                                            <label>Country code</label>
                                            <input type="number" max='9999' name="country_code">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label>Phone</label>
                                            <input type="number" name="mobile">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Address Line 1</label>
                                            <input type="text" name="address1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Address Line 2</label>
                                            <input type="text" name="address2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>Country</label>
                                            <input type="text" name="country">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>State</label>
                                            <input type="text" name="state">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>City</label>
                                            <input type="text" name="city">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label>ZIP</label>
                                            <input type="text" name="zip">
                                        </div>
                                    </div> -->
                                </div>

                            </div>

                            <div class="customer-information card-information">
                                <div class="booking-terms border-t pt-3 mt-3">
                                    <div class="align-items-center">
                                        <div class="form-group mb-2 w-75">
                                            <input type="checkbox" checked name="confirm"> By continuing, you agree to the <a href="#">Terms and Conditions.</a>
                                        </div>
                                        <div>
                                            <div id="res"></div>
                                            
                                        </div>

                                    </div>
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
                                            <a style="background-image: url(/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $pkg?->banner; ?>);"></a>
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
                                    <input type="hidden" name="pkgid" value="<?php echo $pkg?->id; ?>">
                                    <!-- Select number of adults -->
                                    <div class="col-lg-6">
                                        <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                            <label for="adults">Adults:</label>
                                            <select id="adults" name="adults" class="form-control">
                                                <?php $a = 1;
                                                while ($a <= 10) { ?>
                                                    <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
                                                <?php $a++;
                                                } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Select number of children -->
                                    <div class="col-lg-6">
                                        <div class="trend-check-item bg-grey rounded p-3 mb-2">
                                            <label for="children">Children(0 to 5)yrs:</label>
                                            <select id="children" name="children" class="form-control">
                                                <?php $chi = 0;
                                                while ($chi <= 10) { ?>
                                                    <option value="<?php echo $chi; ?>"><?php echo $chi; ?></option>
                                                <?php $chi++;
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="children">Date:</label>
                                        <input type="date" name="booking_date" class="form-control mb-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item bg-white rounded box-shadow overflow-hidden p-3 mb-4">
                            <h4>Your Price Summary</h4>
                            <table id="price-summary-table">
                                <tfoot class="bg-title">
                                    <tr>
                                        <th class="font-weight-bold white">Amount</th>
                                        <th class="font-weight-bold white" id="total-amount"></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <button id="confirmbtn" type="submit" class="nir-btn float-lg-end w-25" style="padding: 0 100px;">CONFIRM BOOKING</button>
                        </div>


                    </div>
                </div>
            </div>
            
        </form>
    </div>
</section>
<?php
// pkAjax_form("#confirmbtn", "#confirmform", "#res");
?>
<script>
    // Function to update the total amount
    function updateTotal() {
        var adults = parseInt(document.getElementById('adults').value);
        var children = parseInt(document.getElementById('children').value);
        var totalAmount = adults * <?php echo $pkg?->price; ?> + children * 0; // Assuming $50 per adult and $30 per child

        // Display the total amount
        document.getElementById('total-amount').textContent = totalAmount.toFixed(2) + "/-";
    }

    // Attach change event listeners to the select elements
    document.getElementById('adults').addEventListener('change', updateTotal);
    document.getElementById('children').addEventListener('change', updateTotal);

    // Call the function initially to display the default total
    updateTotal();
</script>