<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php if ( is_home() ) : ?>
        <!-- Service Section -->
        <section>
        <div id="service">
            <div id="service-heading">
                <h3 id="service-heading-h3">CATEGORY</h3>
                <h3 id="service-heading-h1">We Offer Best Services</h3>
            </div>
            <div id="service-card-box">
                <div class="service-card">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/services/Group48.png" ?> alt="about to come">
                    <div class="service-card-heading">
                        <h3>Calculated Weather </h3>
                        <span>Built Wicket longer admire do barton vanity itself do in it.</span>
                    </div>
                </div>
                <div class="service-card">
                    <img id="service-plain-img" src="static/services/Group 51.png" alt="about to come">
                    <div class="service-card-heading" id="service-plain-heading">
                        <div class="active-service">
                            <h3>Best Flights</h3>
                            <span>Engrossed listening. Park gate sell they west hard for the.</span>
                        </div>
                    </div>
                    <div id="active-service"></div>
                </div>
                <div class="service-card">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/services/Group50.png" ?> alt="about to come">
                    <div class="service-card-heading">
                        <h3>Local Events</h3>
                        <span>Barton vanity itself do in it. Preferd to men it engrossed listening. </span>
                    </div>
                </div>
                <div class="service-card">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/services/Group49.png" ?> alt="about to come">
                    <div class="service-card-heading">
                        <h3>Customization</h3>
                        <span>We deliver outsourced aviation services for military customers</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DESTINATION SECTION -->
    <section>
        <div id="destination-box">
            <div id="destination-heading">
                <span>Top Selling</span>
                <h2>Top Destinations</h2>
            </div>
            <div id="destination-card-box">
                <div class="destination-card-box" id="destination-card-1">
                    <div class="destination-content">
                        <p class="destination-info"><span class="destination-loc-price">Rome, Italy</span><span class="destination-loc-price">$5,42k</span></p>
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/destination/navigation1.png" ?> alt=""><span class="destination-time">10 Days Trip</span>
                    </div>
                </div>
                <div class="destination-card-box" id="destination-card-2">
                    <div class="destination-content">
                        <p class="destination-info"><span class="destination-loc-price">Rome, Italy</span><span class="destination-loc-price">$5,42k</span></p>
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/destination/navigation1.png" ?> alt=""><span class="destination-time">10 Days Trip</span>
                    </div>
                </div>
                <div class="destination-card-box" id="destination-card-3">
                    <div class="destination-content">
                        <p class="destination-info"><span class="destination-loc-price">Rome, Italy</span><span class="destination-loc-price">$5,42k</span></p>
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/destination/navigation1.png" ?> alt=""><span class="destination-time">10 Days Trip</span>
                    </div>
                    <img id="destination-decor" src="static/destination/Decore.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- BOOK A TRIP SECTION -->
    <section>
        <div id="booktrip-box">
            <div id="booktrip-left">
                <div id="booktrip-heading">
                    <h3 id="booktrip-h3">Easy and Fast</h3><br>
                    <h1 id="booktrip-h1">Book your next trip in 3 easy steps</h1>
                </div>
                <div id="booktrip-points">
                    <div class="booktrip-point">
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/Group7.svg" ?> alt="">
                        <div class="booktrip-text">
                            <h3>Choose Destination</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus. </p>
                        </div>
                    </div>
                    <div class="booktrip-point">
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/Group12.svg" ?> alt="">
                        <div class="booktrip-text">
                            <h3>Make Payment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus. </p>
                        </div>
                    </div>
                    <div class="booktrip-point">
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/Group11.svg" ?> alt="">
                        <div class="booktrip-text">
                            <h3>Reach Airport on Selected Date</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, tortor tempus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booktrip-right">
                <div id="booktrip-right-img">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/Rectangle17.jpg" ?> alt="">
                </div>
                <h3 id="trip-greece">Trip To Greece</h3>
                <p class="trip-info"><span>14-29 June</span> | <span>by Robbin joseph</span></p>
                <div class="trip-icons">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/booktripLEAF.png"  ?>alt="">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/mapicon.png" ?> alt="">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/booktripsend.png"  ?>alt="">
                </div>
                <div class="trip-icons">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/building1.svg" ?> alt="">
                    <p class="trip-info">24 people going</p>
                </div>
                <div id="trip-rome">
                    <div id="rome-trip-content">
                        <img src=<?php echo get_template_directory_uri() . "/assets/images/booktrip/MaskGroup.png" ?> alt="">
                        <div id="rome-trip-text">
                            <p id="rome-trip-ongoing">Ongoing</p>
                            <h3 id="rome-trip-to">Trip to rome</h3>
                        </div>
                    </div>
                    <p id="rome-completed"><span>40% </span> completed</p>
                    <img id="rome-bar" src="static/booktrip/Group 3.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section>
        <div id="testimonial">
            <div id="testimonial-left">
                <h3>TESTIMONIALS</h3>
                <h1>What people say about Us.</h1>
            </div>
            <div id="testimonial-right">
                <div id="testimonial-box">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/mike.png" ?> alt="Mike Taylor">
                    <div id="testimonial-content">
                        <p>“On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.”</p>
                        <h3>Mike Taylor</h3>
                        <h4>Lahore, Pakistan</h4>
                    </div>
                </div>
                <div id="testimonial-box-under">
                    <h4>CEO of Red Button</h4>
                    <h3>Chris Thomas</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPANIES SECTION -->
    <section>
        <div id="companies">
            <div class="company-logo">
                <img id="com-img-1" src=<?php echo get_template_directory_uri() . "/assets/images/companies/image27.png" ?> alt="Company Logo">
            </div>
            <div class="company-logo">
                <img id="com-img-2" src=<?php echo get_template_directory_uri() . "/assets/images/companies/image28.png" ?> alt="Company Logo">
            </div>
            <div class="company-logo">
                <img id="com-img-3" src=<?php echo get_template_directory_uri() . "/assets/images/companies/Group63.png" ?> alt="Company Logo">
            </div>
            <div class="company-logo">
                <img id="com-img-4" src=<?php echo get_template_directory_uri() . "/assets/images/companies/image30.png" ?> alt="Company Logo">
            </div>
            <div class="company-logo">
                <img id="com-img-5" src=<?php echo get_template_directory_uri() . "/assets/images/companies/image31.png" ?> alt="Company Logo">
            </div>
        </div>
    </section>

    <!-- SUBSCRIBE SECTION -->
    <section>
        <div id="subscribe-container">
            <h2>Subscribe to get information, latest news and other
                interesting offers about Jadoo</h2>
            <div id="input-part">
                <input type="email" placeholder="Your email">
                <button>Subscribe</button>
            </div>
            <img id="subscribe-icon" src="static/subscribe/Group 77.png" alt="">
        </div>
        <img src=<?php echo get_template_directory_uri() . "/assets/images/subscribe/MaskGroup1.svg" ?> alt="" id="sub-cir-1" class="sub-cir">
        <img src=<?php echo get_template_directory_uri() . "/assets/images/subscribe/MaskGroup.svg" ?> alt="" id="sub-cir-2" class="sub-cir">
    </section>
<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();		
	}
} else {
	// If no content, include the "No posts found" template.
	echo "No Content";
}


get_footer();
