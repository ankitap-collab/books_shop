<?php /*
*
*Template Name: Books listing page
*
*/ 
get_header();
while ( have_posts() ) : the_post(); ?>
    <div class="booklist">
        <div class="container">
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
                    	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    	query_posts("post_type=book&posts_per_page=10&order=DESC&paged=".$paged);
                    	$i=1; while (have_posts()) : the_post();
                    
                    ?>
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
                            
                            <td class="ratec"><?php $rate = get_post_meta($post->ID, 'Rating', true); echo $rate;  ?></td>
                       </tr>
                    
             <?php
                        $i++;	endwhile; ?>
            </table>
            <?php
                    	the_posts_pagination( array(
                    		'prev_text' => '<span class="">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                    		'next_text' => '<span class="">' . __( 'Next page', 'twentyseventeen' ) . '</span>' ,
                    		'before_page_number' => '<span class="meta-nav ">' . __( '', 'twentyseventeen' ) . ' </span>',
                    	) );
                       wp_reset_query();
                    ?>
        </div>
    </div>

<?php  endwhile;
get_footer(); ?>