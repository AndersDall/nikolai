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
 * @package nikolai
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                  
                
                  <nav class="menu">
                    
                      <li><a href="#what">What is Nicolai</a></li>
                      <li><a href="#opening">Opening hours</a></li>
                      <li><a href="#prices">Prices</a></li>
                      <li><a href="#parking">Parking nearby</a></li>
                      <li><a href="#nice">Nice to know</a></li>
                    
                  </nav>
                    <div class="backgroundColor">
                        <div class="maxwidth">
                        <div>
                            <h2 id="what">What is Nikolai</h2>
                            <div class="gridcontainer1">
                                <div class="images gridimage1">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kridt.jpg" alt="picture of chaclk">
                                </div>
                                <div class="whitebackground gridtext1">
                                    <p>Nikolai for børn is an attraction and an experience universe for children age 2-12. Not seen
                                        alike many places in Denmark or even Europe.
                                        It is 1300 m2 specific adapted for activity for children and creativity.
                                        No access for for adults without children or children without adults. There is not many
                                        rules in Nikolai for børn, but the responsibility lies within the adults.
                                       </p>
                                </div>
                            </div> <!-- end gridcontainer-->
                        </div>

                        <div>
                            <h2 id="opening">Opening hours</h2>
                            <div class="gridcontainer2">
                                <div class="images gridimage2">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lightflower.jpg" alt="picture of flower">
                                </div>
                                <div class="whitebackground gridtext2">

                                     <table>
                                      <tr>
                                        <td>Monday:</td>
                                        <td>Closed</td>                                   
                                      </tr>
                                      <tr>
                                        <td>Tuesday to friday:</td>
                                        <td>09.00-16.00</td>                                    
                                      </tr>
                                      <tr>
                                        <td>Weekend:</td>
                                        <td>10.00-15.00</td>
                                      </tr>
                                     </table>
                                </div>
                            </div>  <!-- end gridcontainer-->  
                        </div>

                        <div>
                            <h2 id="prices">Prices</h2>
                            <div class="gridcontainer3">
                                <div class="images gridimage3">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/priser.jpg" alt="picture of a kids hand">
                                </div>
                                <div class="whitebackground gridtext3"> 
                                    <table>
                                      <tr>
                                        <td>Price 2 years and up:</td>
                                        <td>40 dkk</td>                                   
                                      </tr>
                                      <tr>
                                        <td>Season pass (one person):</td>
                                        <td>140 dkk</td>                                    
                                      </tr>
                                      <tr>
                                        <td>Family pass (4 persons):</td>
                                        <td>400 dkk</td>
                                      </tr>
                                     </table>
                                </div>
                            </div>  <!-- end gridcontainer-->     
                        </div>

                        <div>
                            <h2 id="parking">Parking nearby</h2>
                            <div class="gridcontainer4">
                                <div class="images gridimage4">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parkering.jpg" alt="picture of parking map ">
                                </div>
                                <div class="whitebackground gridtext4">
                                    <p>Parking nearby is possible:<br>
                                        click to show map<br>
                                        <a href="https://www.google.com/maps/search/nikolai+for+b%C3%B8rn+parkering/@55.4909041,9.4683252,17z/data=!3m1!4b1" target="_blank">Låsbybanke parkeringsplads</a><br>
                                        <a href="https://www.google.com/maps/search/nikolai+for+b%C3%B8rn+parkering/@55.4909041,9.4683252,17z/data=!3m1!4b1" target="_blank">Midtgården parkeringsplads</a><br>
                                        <a href="https://www.google.com/maps/search/nikolai+for+b%C3%B8rn+parkering/@55.4909041,9.4683252,17z/data=!3m1!4b1" target="_blank">Borchs Gård parkeringsplads</a></p>
                                </div>
                            </div>  <!-- end gridcontainer--> 
                        </div>

                        <div>
                            <h2 id="nice">Nice to know</h2>
                            <div class="gridcontainer5">
                                <div class="images gridimage5">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pizza.jpg" alt="picture of ">
                                </div>    
                                <div class="whitebackground gridtext5">
                                    <p>If you’ve brought your own lunch you’re free to enjoy it in the Grotto or outside in the Nicolai Court. You can also visit Nicolai Café and try their delicious sandwiches and salads. Children eat at half price. </p>

                                </div>
                            </div>  <!-- end gridcontainer--> 
                        </div>    
                       </div> <!-- end maxwidth -->
                    </div> <!-- end backgroundcolor -->
                
        	<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
                        
                        
                        

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name)j and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
                
                


		</main><!-- #main -->
	</div><!-- #primary -->
       

<?php


get_sidebar();
get_footer();
