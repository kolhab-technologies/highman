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

		<section class="container">
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <div class="page-content">
                    <h2>Privacy Statement</h2>
                    
                    <p>The Province is committed to protecting your privacy.  Collection, use, disclosure and retention of information must comply with provisions of the Freedom of Information and Protection of Privacy Act and the Information Management Act. Collected personal information will only be used by those authorized to fulfill the purpose for which it was originally collected or for a use consistent with that purpose. We do not disclose information to other public bodies or individuals except as authorized by law. We keep the information only for the length of time necessary to fulfill the purpose(s) for which it was collected.</p>
                    <p>For further information about the collection and use of your personal information, please contact Information, Privacy and Access services at the Liquor Distribution Branch, 3383 Gilmore Way, Burnaby BC, V5G 4S1 or call 604-252-7461.</p>
                    
                    <h2>Cannabis Stores Website</h2>

                    <p>The Province recognizes the privacy concerns of visitors to this website and therefore advises visitors that the Internet is not a completely secure medium.</p>
                    <p>When you visit the Website, your Date of Birth (“DOB”) will be used to ensure you meet the age (19+) requirements. Your DOB is being collected pursuant to section 26(c) of the Freedom of Information Protection of Privacy Act but will not be stored in LDB systems.  In addition the BC Cannabis Stores' web server automatically collects a limited amount of information to facilitate the operation and security of the Website. Some of this information (e.g., browser type) does not identify who you are, while other information, such as your Internet domain name or Internet Provider (IP) address may identify you. The extent of personal identification depends, in large part, on the "naming standards" followed by your Internet service provider.</p>
                    <p>In regards to the Contact Us page, by submitting your email address on the feedback form, you consent to the LDB collecting your personal information and responding to you using the email address you provided.</p>

                    <h2>Product Purchase and Delivery</h2>
                    <p>When you place an order on the BC Cannabis Stores website the LDB will collect your personal information (i.e. contact details and order information) in order to process your non-medical cannabis order, to send you updates on your order via email and to evaluate our e-commerce platform. The LDB may also use your email address to contact you about recalls, customer surveys and future opportunities to receive promotional materials. This information is being collected pursuant to section 26(c) and 26(e) of the Freedom of Information and Protection of Privacy Act. If you have any questions about the collection of your personal information please contact the Privacy Officer , BC Liquor Distribution Branch, 3383 Gilmore Way, Burnaby BC, V5G 4S1 or call 604-252-7461.</p>
                    <p>At delivery, you may be asked to present valid government photo identification to confirm that you are of legal age. If picking up from a delivery depot, you will also be asked to verify that you are someone who is authorized to pick up the package. When requested, identification is viewed, but not recorded. The name and signature of the person accepting the package will be recorded as confirmation that the delivery has been received.</p>

                    <h2>Cannabis E- Newsletters</h2>
                    <p>Your Date of Birth (“DOB”) will be used to ensure you meet the age (19+) requirements to sign up for our newsletter. Your DOB is being collected pursuant to section 26(c) of the Freedom of Information and Protection of Privacy Act but will not be stored in LDB systems.</p>
                    <p>The Liquor Distribution Branch is collecting your contact information (such as your name and email address) in order for us to send you electronic communications about new product releases, valuable offers, and special promotions at BC Cannabis Stores. In addition, we may use standard Internet technology in our e-news email campaigns to verify whether you have opened our emails or clicked on the links featured in our emails. The information we obtain in this manner enables us to customize the messages we send to you and to measure the overall effectiveness of our email campaigns, programming, or other activities. Your Date of Birth (“DOB”) will be used to ensure you meet the age (19+) requirements. Your DOB is being collected but will not be stored in LDB systems. This information is being collected pursuant to section 26(e) of the Freedom of Information and Protection of Privacy Act. If you have questions please contact the LDB’s Privacy Officer at Information, Privacy and Access Services, 3383 Gilmore Way, Burnaby BC, V5G 4S1 or call 604-252-7461.</p>

                    
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
