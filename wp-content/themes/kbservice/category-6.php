<?php get_header();?>

	<div class="grid_16">
	
	<div id="cat_page_sidebar">
		<h2>Статьи</h2>
		<ul id="list_article">
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('cat=6&orderby=date');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php
			endwhile; else:
			endif;
			//Reset Query
			wp_reset_query();
			?>
		</ul>
	</div>
	
	<div  id="page_content">
		<div id="read_article">
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('cat=6&posts_per_page=1&orderby=date');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
							<h3><?php the_title(); ?></h3>
							<?php the_content();?>
			

			<?php
			endwhile; else:
			endif;
			//Reset Query
			wp_reset_query();
			?>
		</div>
	
	</div> <!--eof content -->

	<div class="horizont"></div>
	</div> <!--eof grif_16 -->

<?php get_footer(); ?>
