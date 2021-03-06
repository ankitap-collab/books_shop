<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
    <div class="defpage">
        <div class="container">
        
        	<?php
        
        	if ( have_posts() ) {
        
        		while ( have_posts() ) {
        			the_post(); ?>
                
        		    <?php//	get_template_part( 'template-parts/content', get_post_type() );  ?>
        	     	<h2><?php the_title();?></h2>
        		    <?php $terms = get_the_terms( $post->ID, 'authors' );  
        		          foreach ($terms as $term) { 
        		          $term_id = $term->term_id; 
        			      $term_link = get_term_link($term_id);?>
                          <h5> Author : <a href="<?php echo $term_link;?>"> <?php echo 	$term->name; ?></a></h5>
                    <?php }  ?>
            
            	    <?php $terms = get_the_terms( $post->ID, 'publisher' );  
            	          foreach ($terms as $term) { 
        		          $term_id = $term->term_id; 
        				  $term_link = get_term_link($term_id);?>
                         <h5> Publisher : <a href="<?php echo $term_link;?>"> <?php echo 	$term->name; ?></a></h5>
                    <?php }  ?>
        		
        		
        		    <?php the_content();?>
        		    <h5>Ratings :  <?php	echo get_post_meta($post->ID, 'Rating', true);  ?></h5>
        		    <h5>Price :   $<?php 	echo get_post_meta($post->ID, 'Price', true); ?></h5>
        			
            <?php		
            			
            		}
            	}
            
            	?>
        </div>
    </div>
</main><!-- #site-content -->

<?php// get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
