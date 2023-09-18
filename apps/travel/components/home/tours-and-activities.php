<style>
    .square-frame {
        width: calc(33.33% - 10px);
        /* 3 frames per row with 10px spacing */
        background-color: none;
        margin-right: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        position: relative;
    }

    .square-frame img {
        max-width: 100%;
        max-height: 100%;
        margin-bottom: 10px;
        /* Add margin to separate image and title */
        border-radius: 0 50px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Add transitions for tilt and box-shadow */
    }

    .square-frame img:hover {
        transform: perspective(1000px) rotateX(10deg);
        /* Apply the tilt effect on hover */
        box-shadow: rgba(72, 135, 202, 0.8) 0 0 10px;
        /* Add a glowing blue border on hover */
    }
</style>




<!-- Update the HTML structure to use square frames -->
<div class="container">
    <h1 class="text-center">Top Dubai Tours & Activities</h1>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-between">
                    <!-- Add your square frames here -->
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c.png" alt="Image 1">
                        <h5>Airport Transfers</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c1.png" alt="Image 1">
                        <h5>Hot Air Balloon</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c2.png" alt="Image 1">
                        <h5>Camel & Horse Riding</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c3.png" alt="Image 1">
                        <h5>Water Parks</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c4.png" alt="Image 1">
                        <h5>Culture And Attractions</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c5.png" alt="Image 1">
                        <h5>Culture And Attractions</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c6.png" alt="Image 1">
                        <h5>Transfers</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c7.png" alt="Image 1">
                        <h5>Nature & Wildlife</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>Adventures</h5>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-between">
                    <!-- Add your square frames here -->
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>Yacht Charter</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c9.png" alt="Image 1">
                        <h5>Premium Tours</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c10.png" alt="Image 1">
                        <h5>Cruise & Boat</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c11.png" alt="Image 1">
                        <h5>Transfers</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>Premium Tours</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>Beach & Pool Clubs</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>SIM Card & Wifi Router</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>Culture & Attractions</h5>
                    </div>
                    <div class="square-frame">
                        <img src="/<?php echo STATIC_URL; ?>/tour/assets/images/circle/c8.png" alt="Image 1">
                        <h5>Limosine Tours</h5>
                    </div>
                </div>
            </div>
            <!-- Repeat the structure for additional carousel items -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>