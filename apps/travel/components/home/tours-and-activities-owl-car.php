<style>
    .cat-item {
        background-color: none;
        margin-right: 10px;
        padding: 10px;
    }

    .cat-item img {
        max-width: 100%;
        /* max-height: 100%; */
        height: 100px;
        margin-bottom: 10px;
        object-fit: cover;
        /* Add margin to separate image and title */
        border-radius: 0 50px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Add transitions for tilt and box-shadow */
    }

    .cat-item img:hover {
        transform: perspective(1000px) rotateX(10deg);
        /* Apply the tilt effect on hover */
        box-shadow: rgba(72, 135, 202, 0.8) 0 0 10px;
        /* Add a glowing blue border on hover */
    }
</style>
<section style="max-height: 60vh; top:0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Top Dubai Tours & Activities</h1>
                <div class="owl-carousel owl-theme">
                    <?php $catlist = $context->data->cat_list;
                    foreach ($catlist as $key => $cat) :
                        $cat = obj($cat);
                    ?>
                        <div class="item cat-item" data-cat-id="<?php echo $cat->id; ?>">
                            <img src="/<?php echo MEDIA_URL; ?>/images/pages/<?php echo $cat->banner; ?>" alt="<?php echo $cat->title; ?>">
                            <p class="text-center"><?php echo $cat->title; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        // Attach a click event handler to the cat-items
        $('.cat-item').on('click', function () {
            var catId = $(this).data('cat-id');
            // Make an AJAX request to the server
            $.ajax({
                url: '/<?php echo home.route('fetchPkgAjax'); ?>', // Replace with your server URL
                type: 'POST', // You can change this to 'GET' if needed
                data: { cat_id: catId }, // Send the cat_id to the server
                success: function (response) {
                    $("#set-template").html(response);
                },
                error: function (error) {
                    console.error('AJAX error:', error);
                }
            });
        });
    });
</script>


<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 6,
                nav: false
            },
            1000: {
                items: 9,
                nav: true,
                loop: false
            }
        },
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
    
</script>