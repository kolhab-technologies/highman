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
 * @package Highman
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!--?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				?php
			endif;

			* Start the Loop 
			while ( have_posts() ) :
				the_post();

				*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
			get_template_part( 'template-parts/content', 'none' );
		?-->

		<header>
			<section class="hero">
			<div class="container">
				<div class="row">
				<div class="col-md-12">
					<div class="hero-content">
					<h1>‘A new standard for cannabis culture in Africa.’</h1>
					<p>Discover the marijuana provisionary where exceptional is standard.</p>
					<div class="hero-icon">
						<svg width="30" height="43" viewBox="0 0 40 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.0253898 32.9999C0.0253898 33.7675 0.323655 34.536 0.910156 35.121L17.8789 52.0897C19.0519 53.2627 20.9511 53.2627 22.1211 52.0897L39.0899 35.121C40.2629 33.948 40.2629 32.0488 39.0899 30.8788L38.832 30.621C37.659 29.448 35.7599 29.448 34.5899 30.621L23 42.2108L23 2.99989C23 1.34389 21.656 -0.000107757 20 -0.000107685C18.344 -0.000107612 17 1.34389 17 2.99989L17 42.2108L5.41016 30.621C4.23716 29.448 2.33797 29.448 1.16797 30.621L0.910156 30.8788C0.323655 31.4653 0.0253897 32.2323 0.0253898 32.9999Z" fill="white"/>
						</svg>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>
			<!-- Location -->
			<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="hero-location">
					<div class="hero-location-icon">
					<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 0.625C6.50001 0.625 0.759383 4.9925 0.750008 11.25C0.738758 18.7381 12 30 12 30C12 30 23.2619 18.7537 23.25 11.25C23.24 5.00187 17.5 0.625 12 0.625ZM12 16.25C9.23876 16.25 7.00001 14.0113 7.00001 11.25C7.00001 8.48875 9.23876 6.25 12 6.25C14.7613 6.25 17 8.48875 17 11.25C17 14.0113 14.7613 16.25 12 16.25Z" fill="#5A5A5A"/>
					</svg>
					</div>
					<p>450A York Rd | Timonium, EV 05093 | 403-424-1123 | Monday - Saturday: 10 am-7 pm | Sunday: 11 am-5 pm</p>
				</div>
				</div>
			</div>
			</div>
		</header>
      <!-- Patners logo -->
		<section class="container patners">
			<div class="row">
			<div class="col-md-12">
				<div class="patners-logo">
				<img src="./assets/img/medmen.png" alt="">
				<img src="./assets/img/d.png" alt="">
				<img src="./assets/img/marley.png" alt="">
				<img src="./assets/img/kica.png" alt="">
				<img src="./assets/img/edison.png" alt="">
				</div>
			</div>
			</div>
		</section>

		<section class="you-seek">
			<div class="container">
			<div class="row">
				<div class="col-md-3"> </div>
				<div class="col-md-6">
				<div class="you-seek-title">
					<h2>We are what you seek</h2>
					<p>Professional-grade vitamins and herbal supplements. Open to the public and staffed with clinical experts offering free consultations.</p>
				</div>
				</div>
				<div class="col-md-6"></div>
			</div>

			<div class="row">
				<div class="col-md-5">
				<div class="you-seek-content">
					<h3>Best Quality</h3>
					<p>Professional-grade vitamins and herbal supplements. Open to the public and staffed with clinical experts offering free consultations.</p>
				</div>

				<div class="you-seek-content">
					<h3>Fast Ordering</h3>
					<p>Professional-grade vitamins and herbal supplements. Open to the public and staffed with clinical experts offering free consultations.</p>
				</div>

				<div class="you-seek-content">
					<h3>Fast and Safe Delivery</h3>
					<p>Professional-grade vitamins and herbal supplements. Open to the public and staffed with clinical experts offering free consultations.</p>
				</div>
				</div>

				<div class="col-md-7">
				<div class="you-seek-image">
					<center>
					<img src="./assets/img/type-of-canabis.png" alt="">
					</center>
				</div>
				</div>
			</div>
			</div>
		</section>

		<section class="best-canabis-strain">
			<h2>Explore our best cannabis strains</h2>

			<div class="container">
			<div class="row">
				<div class="col-md-4">
				<div class="best-canabis-strain-content">
					<img src="./assets/img/canabis1.png" alt="">
					<h5>Self-care strain</h5>
					<p>Level-up your self-care with these strains</p>
				</div>
				</div>  
				
				<div class="col-md-4">
				<div class="best-canabis-strain-content">
					<img src="./assets/img/canabis2.png" alt="">
					<h5>Strains for evening workouts</h5>
					<p>Elevate your nighttime fitness routine</p>
				</div>
				</div>  
				

				<div class="col-md-4">
				<div class="best-canabis-strain-content">
					<img src="./assets/img/canabis3.png" alt="">
					<h5>Strains for jogging</h5>
					<p>Strains to boost your morning jog.</p>
				</div>
				</div>  
			</div>
			</div>
		</section>

		<section class="container best-sellers">
			<div class="row">
			<div class="col-md-5">
				<div class="best-sellers-content">
				<h3>Our best sellers</h3>
				<p>Not Sure where to start your CBD journey?
					Browse our range of customer favourites</p>
				
				<div class="best-sellers-item">
					<h4>Hemp Infused Face Cleanser - 200ml</h4>
					<p>$195</p>
				</div>

				<div class="best-seller-extra">
					<button>Shop Now</button>
				</div>

				</div>
			</div>

			<div class="col-md-7">
				<div class="best-content-img">
				<img src="./assets/img/best-sells1.png" alt="">
				</div>
			</div>

			</div>
		</section>

		<section class="container get-started">
			<div class="row">
			<div class="col-md-6">
				<div class="get-started-content">
				<h3>Let’s get started</h3>
				<p>Not Sure where to start your CBD journey?
					Browse our range of customer favourites</p>

				<button>Shop Now</button>
				</div>
			</div>

			<div class="col-md-6">
				<div class="get-started-img">
				<img src="./assets/img/get-started-pack-1.png" alt="">
				</div>
			</div>
			</div>
		</section>
		
		<section class="container get-started">
			<div class="row">
			<div class="col-md-6">
				<div class="get-started-content">
				<h3>Let’s get started</h3>
				<p>Not Sure where to start your CBD journey?
					Browse our range of customer favourites</p>

				<button>Shop Now</button>
				</div>
			</div>

			<div class="col-md-6">
				<div class="get-started-img">
				<img src="./assets/img/get-started-pack-1.png" alt="">
				</div>
			</div>
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
