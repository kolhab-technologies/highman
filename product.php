<?php
/**
 * Template Name: Product
 *
 * The template for displaying Product
 *
 * This is the template that displays the area of the page that contains both the Products
 * 
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

      
      <section class="product-categories">
        <div class="container">
          <div class="row">
            <div class="product-categories-title">
              <h1>categories</h1>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
              <div class="product-categories-box">
                <p>Shop</p>
                <h6>Flowers</h6>
                <img src="assets/img/flowers.png" alt="">
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
              <div class="product-categories-box">
                <p>Shop</p>
                <h6>Concentrates</h6>
                <img src="assets/img/concentrates.png" alt="">
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
              <div class="product-categories-box">
                <p>Shop</p>
                <h6>Vapes</h6>
                <img src="assets/img/vapes.png" alt="">
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
              <div class="product-categories-box">
                <p>Shop</p>
                <h6>Pre-Rolls</h6>
                <img src="assets/img/pre-rolls.png" alt="">
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
              <div class="product-categories-box">
                <p>Shop</p>
                <h6>Edibles</h6>
                <img src="assets/img/edibles.png" alt="">
              </div>
            </div>

            <div class="col-6 col-sm-4 col-md-2">
              <div class="product-categories-box">
                <p>Shop</p>
                <h6>Flowers</h6>
                <img src="assets/img/flowers.png" alt="">
              </div>
            </div>


          </div>
        </div>
      </section>

      <section class="product-layer grey-layer">
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/marley-product.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Medical Cannabis</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/bliss.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Ananda touch Bliss</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button class="product-btn-sold">Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/hemp-cream.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Hemp seed cream</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/natural-marley.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Natural Marley Sativa</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="product-layer">
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/marley-product.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Medical Cannabis</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/bliss.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Ananda touch Bliss</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button class="product-btn-sold">Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/hemp-cream.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Hemp seed cream</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/natural-marley.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Natural Marley Sativa</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="product-layer grey-layer">
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/marley-product.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Medical Cannabis</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/bliss.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Ananda touch Bliss</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button class="product-btn-sold">Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="./assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="./assets/img/hemp-cream.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Hemp seed cream</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <div class="product-card">
                <div class="product-card-head">
                  <img src="assets/img/marley-natural.png" alt="">
                  <h4>Sale</h4>
                </div>
                <div class="product-card-img">
                  <img src="assets/img/natural-marley.png" alt="">
                </div>
                <hr>
                <div class="product-card-details">
                  <strong>Natural Marley Sativa</strong>
                  <h6>$32</h6>
                </div>
                <div class="product-card-sub-details">
                  <span>T.H.C:10%    C.B.D:0%</span>
                  <span><strike>$50</strike></span>
                </div>
                <div class="product-card-btn">
                  <button>Add to Cart</button>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>


	</main><!-- #main -->

<?php
get_footer();
