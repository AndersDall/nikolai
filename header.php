<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nikolai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<?php wp_head(); ?>
        
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nikolai' ); ?></a>

        <header id="masthead" class="site-header">
            
        
            <!--
            <div id="baggrund1">
                <a onclick="backgroundchange()">hello</a>
            </div>
            -->
            <?php echo do_shortcode('[metaslider id="45"]'); ?>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$nikolai_description = get_bloginfo( 'description', 'display' );
			if ( $nikolai_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $nikolai_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
                <img id="lefttopimage" class="redpillow" onclick="change();" src="<?php bloginfo('template_url'); ?>/images/redpillow.png" alt="picture of a red pillow">
                <img id="righttopimage"class="greypillow" onclick="change1();" src="<?php bloginfo('template_url'); ?>/images/greypillow.png" alt="picture of a grey pillow">
                <img id="leftbottumimage" class="rosapillow" onclick="change2();" src="<?php bloginfo('template_url'); ?>/images/rosapillow.png" alt="picture of a rosa pillow">
                <img id="rightbottumimage" class="donut" onclick="change3();" src="<?php bloginfo('template_url'); ?>/images/donut.png" alt="picture of a donut pillow">
                
                <!-- #site-navigation -->
                <a href="#mainmenu" rel="Scrolldown"><i class="fas fa-angle-down fa-4x"></i></a>
                
                <script>
                   
                        // Change of red pillow onclick
                        var image_tracker = 'red';
                        function change() {
                        var image = document.getElementById('lefttopimage');
                        if (image_tracker == 'red') { 
                        image.removeAttribute("src");
                        image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/greypillow.png");
                        image_tracker = 'grey';
                            }
                        else {
                            image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/redpillow.png");
                            image_tracker = 'red';
                            }                                               
                        } 
                        
                        // Change of grey pillow onclick
                        var image_tracker = 'grey';
                        function change1() {
                        var image = document.getElementById('righttopimage');
                        if (image_tracker == 'red') { 
                        image.removeAttribute("src");
                        image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/rosapillow.png");
                        image_tracker = 'rosa';
                        }
                        else {
                            image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/greypillow.png");
                            image_tracker = 'red';
                            }                                               
                        } 
                        
                        // Change of rosa pillow onclick
                        var image_tracker = 'rosa';
                        function change2() {
                        var image = document.getElementById('leftbottumimage');
                        if (image_tracker == 'rosa') { 
                        image.removeAttribute("src");
                        image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/donut.png");
                        image_tracker = 'donut';
                        }
                        else {
                            image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/rosapillow.png");
                            image_tracker = 'rosa';
                            }                                               
                        } 
                        
                        // Change of donut pillow onclick
                        var image_tracker = 'donut';
                        function change3() {
                        var image = document.getElementById('rightbottumimage');
                        if (image_tracker == 'donut') { 
                        image.removeAttribute("src");
                        image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/redpillow.png");
                        image_tracker = 'red';
                        }
                        else {
                            image.setAttribute("src", "<?php bloginfo('template_url'); ?>/images/donut.png");
                            image_tracker = 'donut';
                            }                                               
                        } 
                        
              
                     
                </script>
                 
                <!--
		<nav id="site-navigation" class="main-navigation">
                        
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nikolai' ); ?></button>
			
                        
                        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>                      
		</nav>
                -->
                
                
	</header><!-- #masthead -->

	<div id="content" class="site-content">

            