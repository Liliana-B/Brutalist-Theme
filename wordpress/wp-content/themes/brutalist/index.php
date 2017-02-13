<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brutalist
 */

get_header(); ?>  

	<!-- Introduction -->  
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <h1>First Heading</h1>
            </div>
            <div class="col-md-9 col-md-offset-3 wow fadeIn" data-wow-delay="0.8s"> 
              <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            </div>
        </div>
      </div>
    </div> 
    <!-- / Introduction --> 

    

	<section class="posts wow fadeIn" data-wow-delay="1.2s">
        <div class="container">
<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <!-- Single post preview -->
          <div id="post-container" <?php post_class( 'row post-preview wow fadeIn' ); ?>  data-wow-delay="0.5s">

            <!-- Post Image -->
            <div class="col-md-5 post-image">
              <div class="image-bg">
              <?php if ( has_post_thumbnail() ) : ?>
                <img src=" <?php the_post_thumbnail_url( 'full' ); ?> " class="img-responsive featured">
                <?php endif; ?>
              </div>
              <span class="meta">posted <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>



<br>
                    in <?php the_category(' - '); ?></span>  
            </div>
            <!-- / Post Image -->

          <div class="col-md-7 post">
          <article>

            <header>
              <div class="col-md-12">
                <h2><?php the_title(""); ?></h2>
              </div>
            </header>
            
            <!-- Post Body -->
            <div class="col-md-12">   
              <p>
<?php the_excerpt(); ?>

</p>
              <a href="<?php echo get_permalink($post->ID);?>" class="drop-border"><span>Read Story</span></a>
            </div>
            <!-- /Post Body -->
          </article>

          </div>
        </div>  
        <!-- / Single post preview -->

			
			<?php endwhile; else : ?>
			<p><?php _e('Sorry, no posts available.'); ?></p>

		<?php endif ; ?>


	
	</div>
         </section>


		


			

	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
