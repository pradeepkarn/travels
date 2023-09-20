<?php
$hero = $context->data->hero;
?>
<section class="banner overflow-hidden">
    <div class="slider top50">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($hero as $key => $hr) {
                    $hr = obj($hr);
                ?>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url(/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $hr->banner; ?>)"></div>
                            <div class="swiper-content">
                                <?php echo $hr->content; ?>
                            </div>
                            <div class="dot-overlay"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>