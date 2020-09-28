<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div class="container">
    	<header class="page-header">
    		<?php if ( have_posts() ) : ?>
    			<h2 class="page-title">
    			<?php
    			/* translators: Search query. */
    			printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' );
    			?>
    			</h2>
    		<?php else : ?>
    			<h4 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h4>
    		<?php endif; ?>
    	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		   <?php echo do_shortcode('[searchandfilter id="13"]'); ?>
	            <table>
                    <tr>
                        <th>No</th>
                        <th>Book Name</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Rating</th>
                    </tr>
                    
            		<?php
            		if ( have_posts() ) :
            			// Start the Loop.
            		$i=1;	while ( have_posts() ) :
            				the_post(); ?>
				
                       <tr>
                            <td><?php echo $i;?></td>
                            
                            <td><a href="<?php the_permalink();?>"><?php the_title();?></a></td>
                            
                            <td> $<?php echo get_post_meta($post->ID, 'Price', true); ?></td>
                           
                        	<?php $terms = get_the_terms( $post->ID, 'authors' );  foreach ($terms as $term) { ?>
                                <td><?php echo 	$term->name; ?></td>
                            <?php }  ?>
                            
                            <?php $terms = get_the_terms( $post->ID, 'publisher' );  foreach ($terms as $term) { ?>
                        	    <td><?php echo 	$term->name; ?></td>
                            <?php }  ?>
                            
                            <td><?php echo get_post_meta($post->ID, 'Rating', true); ?></td>
                       </tr>
                      
                                
                                
                    <?php
                        wp_link_pages(
                			array(
                				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                				'after'       => '</div>',
                				'link_before' => '<span class="page-number">',
                				'link_after'  => '</span>',
                			)
                		);
                	?>
	

                	<?php
                	if ( is_single() ) {
                		twentyseventeen_entry_footer();
                	}
                	?>


                	<?php	$i++;	endwhile; // End the loop. ?>
                	 </table>
                <?php
                    	the_posts_pagination( array(
                    		'prev_text' => '<span class="">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                    		'next_text' => '<span class="">' . __( 'Next page', 'twentyseventeen' ) . '</span>' ,
                    		'before_page_number' => '<span class="meta-nav ">' . __( '', 'twentyseventeen' ) . ' </span>',
                    	) );
                       wp_reset_query();
                   
                
                		else :
                			?>
                
                			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
                			<?php
                				get_search_form();
                
                		endif;
                		?>
                
 
		</main><!-- #m