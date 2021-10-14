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

<section class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="page-faq-content">
                      <h2>General</h2>

                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                So what are you all about?
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor similique tempore delectus pariatur laboriosam, provident tempora cupiditate modi assumenda vel aliquid dolores dolorum eaque quasi, neque molestiae a vero nesciunt?</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Where does Kasapreko have offices outside Ghana?
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The company was founded in 2008 with a strong belief in the power of cannabis and the importance of enabling safe, legal access to consumers worldwide. Since then, WM Technology has worked tirelessly, not only to be the most comprehensive platform for consumers, but to build the software solutions that power businesses compliantly in the space, to advocate for legalization, social equity, and licensing in many jurisdictions, and to facilitate further learning through partnering with dozens of subject matter experts on providing detailed, accurate information about the plant.
 
                                    WM Technology’s mission is to power a transparent and inclusive global cannabis economy. Now in its second decade, 
                                    WM Technology has been a driving force behind much of the legislative change we’ve seen in the past 10 years.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the weight of your products in cartons?
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta magni repellat eum nobis dolorem aut labore quisquam atque quos nisi. Vitae asperiores repellat ipsa dolores velit voluptas magnam nostrum eveniet.</p>
                            </div>
                          </div>
                        </div>
                      </div>
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
              <img src="assets/img/get-started-pack-1.png" alt="">
            </div>
          </div>
        </div>
      </section>

<?php
get_footer();
