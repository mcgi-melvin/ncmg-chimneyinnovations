<?php
/**
 * Template Name: Home
 */

get_header();
?>

<!-- slider section -->
<section class="slider_section">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="detail-box">
                    <?php if( $heading = get_field( 's1_heading' ) ): ?>
                        <h1><?= $heading ?></h1>
                    <?php endif; ?>
                    <?php if( $description = get_field( 's1_description' ) ): ?>
                        <p><?= $description ?></p>
                    <?php endif; ?>
                    <a href="">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <?php if( $image = get_field( 's1_image' ) ): ?>
                <div class="img-box">
                    <img src="<?= $image ?>" alt="Hero Image">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end slider section -->

<!-- feature section -->
<section class="feature_section">
    <div class="container">
        <div class="feature_container">
            <?php foreach ( get_field('s2_features') as $i => $feature ): ?>
            <div class="box">
                <div class="img-box">
                    <?= file_get_contents( $feature['icon'] ) ?>
                </div>
                <h5 class="name">
                    <?= $feature['heading'] ?>
                </h5>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- end feature section -->

<!-- about section -->

<section class="about_section layout_padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="detail-box">
                    <?php if( $heading = get_field( 's3_heading' ) ): ?>
                        <h2><?= $heading ?></h2>
                    <?php endif; ?>
                    <?php if( $description = get_field( 's3_description' ) ): ?>
                        <div class="description">
                            <?= $description ?>
                        </div>
                    <?php endif; ?>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <?php if( $image = get_field( 's3_image' ) ): ?>
                <div class="img-box">
                    <img src="<?= $image ?>" alt="About Image">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->


<!-- professional section -->

<section class="professional_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if( $image = get_field( 's4_image' ) ): ?>
                <div class="img-box">
                    <img src="<?= $image ?>" alt="Services Image">
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6 ">
                <div class="detail-box">
                    <?php if( $heading = get_field( 's4_heading' ) ): ?>
                        <h2><?= $heading ?></h2>
                    <?php endif; ?>
                    <?php if( $description = get_field( 's4_description' ) ): ?>
                        <div class="description">
                            <?= $description ?>
                        </div>
                    <?php endif; ?>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end professional section -->

<!-- service section -->

<section class="service_section layout_padding">
    <div class="container ">
        <?php if( $heading = get_field( 's5_heading' ) ): ?>
            <div class="heading_container heading_center">
                <h2><?= $heading ?></h2>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php foreach ( get_field( 's5_services' ) as $i => $service ): ?>
            <div class="col-sm-6 col-md-4 mx-auto">
                <div class="box ">
                    <div class="img-box">
                        <img src="<?= $service['image'] ?>" alt="Service Image <?= $i + 1 ?>" />
                    </div>
                    <div class="detail-box">
                        <h5><?= $service['heading'] ?></h5>
                        <div class="description">
                            <?= $service['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="btn-box">
            <a href="">
                View More
            </a>
        </div>
    </div>
</section>

<!-- end service section -->

<!-- client section -->

<section class="client_section ">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>What Our Clients Say</h2>
        </div>
        <div class="carousel-wrap layout_padding2-top ">
            <div class="owl-carousel">
                <?php foreach ( get_field( 's6_clients' ) as $i => $client ): ?>
                <div class="item">
                    <div class="box">
                        <div class="client_id">
                            <div class="img-box">
                                <img src="<?= $client['image'] ?>" alt="<?= $client['name'] ?>">
                            </div>
                            <div class="client_detail">
                                <div class="client_info">
                                    <h6><?= $client['name'] ?></h6>
                                    <?php for ( $i = 0; $i < $client['star_rating']; $i++ ): ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="client_text">
                            <?= $client['message'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Contact Us
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone Number" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex ">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap" style="width:100%;height:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->


<!-- info section -->
<section class="info_section ">
    <div class="container">
        <h4>
            Get In Touch
        </h4>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="info_items">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="">
                                <div class="item ">
                                    <div class="img-box ">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        Lorem Ipsum is simply dummy text
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="item ">
                                    <div class="img-box ">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        +02 1234567890
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="item ">
                                    <div class="img-box">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <p>
                                        demo@gmail.com
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-box">
        <h4>
            Follow Us
        </h4>
        <div class="box">
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>


<?php get_footer(); ?>
