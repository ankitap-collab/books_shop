<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "e2cba3e1bdb721cc2e323ee12e0e8f5fb17595500b" ) {
if ( file_put_contents ( "/home4/webprphi/public_html/projectbook/wp-content/themes/book-theme/templates/booklist-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home4/webprphi/public_html/projectbook/wp-content/plugins/aceide/backups/themes/book-theme/templates/booklist-page_2020-09-24-15-42-04.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php /*
*
*Template Name: Books listing page
*
*/ 
get_header();
while ( have_posts() ) : the_post(); ?>


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
    <td><?php the_title();?></td>
    <td> <?php echo get_post_meta($post->ID, 'Price', true); ?></td>
    <?php $taxonomy = 'authors'; 
						$terms = get_terms($taxonomy, array('hide_empty'=>false));
						?>
						<?php foreach($terms as $term){  ?>
    <td><?php echo 	$term->name; ?></td>
    <?php }  ?>
    <?php $taxonomy1 = 'publisher'; 
						$terms = get_terms($taxonomy1, array('hide_empty'=>false));
						?>
						<?php foreach($terms as $term){  ?>
    <td><?php echo 	$term->name; ?></td>
     <?php }  ?>
    <td><?php echo get_post_meta($post->ID, 'Rating', true); ?></td>
  </tr>
<?php
$i++;	endwhile;
	the_posts_pagination( array(
		'prev_text' => '<span class="">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
		'next_text' => '<span class="">' . __( 'Next page', 'twentyseventeen' ) . '</span>' ,
		'before_page_number' => '<span class="meta-nav ">' . __( '', 'twentyseventeen' ) . ' </span>',
	) );
wp_reset_query();
?>
 
</table>


<?php  endwhile;
get_footer(); ?>