<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brutalist
 */

?>

 <!-- Single post preview -->
          <div class="row post-preview even wow fadeIn" data-wow-delay="1.5s">

            <!-- Post Image -->
            <div class="col-md-5 post-image">
              <div class="image-bg">
                <img src="https://images.unsplash.com/photo-1456298964505-ef9e1a638209?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=" class="img-responsive featured">
              </div>
              <span class="meta">posted <time datetime="2016-10-27">27th Oct, 2016</time><br>
                    in <a href="#">News</a> — <a href="#">Blog</a></span>  
            </div>
            <!-- / Post Image -->

          <div class="col-md-7 post">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header>
              <div class="col-md-12">
                <h2><?php the_title(); ?></h2>
              </div>
            </header>
            
            <!-- Post Body -->
            <div class="col-md-12">   
              <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brutalist' ),
				'after'  => '</div>',
			) );
		?>
              <a href="#" class="drop-border"><span>VIEW MORE</span></a>
            </div>
            <!-- /Post Body -->
          </article>

          </div>
        </div>  
        <!-- / Single post preview -->



