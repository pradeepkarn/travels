<?php
import("apps/travel/components/home/home-slider.php", $context);
// import("apps/travel/components/home/search-form.php", $context);
import("apps/travel/components/home/about-us.php", $context);
import("apps/travel/components/home/tours-and-activities-owl-car.php", $context);

// import("apps/travel/components/home/top-pick.php",$context);
?>
<div id="set-template">
    <?php echo render_template("packages/top-picks.php", $context); ?>
</div>
<?php
import("apps/travel/components/home/testimonials.php", $context);
