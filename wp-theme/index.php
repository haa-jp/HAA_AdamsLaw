<?php 
	get_header();
	global $wp_query;
?>
	
	<div id="contentWrapper">
		<div id="mainContent" class="globalWidth">
			<main id="content">
				
				<?php echo apply_filters( 'the_content', get_post_field( 'post_content', get_option( 'page_for_posts' ) ) ); ?>
				
				<div id="postsWrapper" class="cptWrap simpleStyles">
			
				  <?php if( have_posts() ) : ?>
			
					<?php while( have_posts() ) : the_post(); ?>
				
						<?php get_template_part( 'template-parts/part', 'post' ); ?>
					
					<?php endwhile; ?>
			
				  <?php else : ?>
					
					<p>There are currently no articles. Please check back at a later date.</p>
					
				  <?php endif; ?>
			  
				</div> <!-- id="postsWrapper" -->
			
			  <?php if( $wp_query->max_num_pages > 1 ) : ?>
				
				<a href="javascript:void(0);" class="btnLine blue loadMore alignright" data-type="post">More News Articles</a>
				<a href="javascript:void(0);" class="btnLine lineRight blue toTop alignleft">Jump to Top</a>
				
			  <?php endif; ?>
				
			  <div class="clear"></div>
			</main> <!-- id="content" -->
			
			<?php get_sidebar(); ?>
			
		</div> <!-- id="mainContent" -->
	</div> <!-- id="contentWrapper" -->
				
<?php get_footer(); ?>