<?php
/**
 * Template Name: About
 *
 * The template for displaying About
 *
 * This is the template that displays the area of the page that contains both the About
 * Us page of the communtiy.
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
        <section class="about-hero">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-hero">
                  <h1>About High Man</h1>                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </header>

      <section class="container">
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <div class="page-content">
                    <h2>Highman Technology is the leading technology and software infrastructure provider to the cannabis industry.</h2>
                    
                    <p>The company was founded in 2008 with a strong belief in the power of cannabis and the importance of enabling safe, legal access to consumers worldwide. Since then, WM Technology has worked tirelessly, not only to be the most comprehensive platform for consumers, but to build the software solutions that power businesses compliantly in the space, to advocate for legalization, social equity, and licensing in many jurisdictions, and to facilitate further learning through partnering with dozens of subject matter experts on providing detailed, accurate information about the plant.</p>
                    <p>WM Technology’s mission is to power a transparent and inclusive global cannabis economy. Now in its second decade, 
                        WM Technology has been a driving force behind much of the legislative change we’ve seen in the past 10 years.</p>
                    
                    <h2>Our company</h2>

                    <p>Headquartered in Irvine, California, WM Technology employs more than 400 professionals around the world, including in Denver, Tucson, New York, Barcelona, and Toronto.</p>

                    <p>Given our strong global footprint, deep relationships with participants at all layers of the supply chain, and unparalleled understanding of the policy landscape at the federal, state, and local levels, WM Technology is uniquely positioned to continue its role as the leading technology provider serving the cannabis economy.</p>
                </div>
              </div>
              <div class="col-md-1"></div>
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
              <img src="assets/img/get-started-pack-1.png" alt="">
            </div>
          </div>
        </div>
      </section>


	</main><!-- #main -->

<?php
get_footer();
