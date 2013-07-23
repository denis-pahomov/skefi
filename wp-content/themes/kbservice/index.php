<?php get_header(); ?>

<?php if(is_home()): ?>
		<div class="grid_11 test">
			<div id="news">
				<h2>Чем мы занимаемся</h2>
				
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('page_id=76');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="whatwedo">
							<?php the_content();?>
			</div>

			<?php
			endwhile;
            else:
			endif;
			//Reset Query
			wp_reset_query();
			?>

			</div>
		</div>
		<div class="grid_5">
			<div id="small_news">
			<h2>Новости</h2>
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('cat=1&posts_per_page=3');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="small_news">
							<h3><?php the_title(); ?></h3>
							<?php the_content();?>
			</div>

			<?php
			endwhile; else:
			endif;
			//Reset Query
			wp_reset_query();
			?>
			</div>
		</div>
<?php endif; ?>
		

		
<?php get_footer(); ?>