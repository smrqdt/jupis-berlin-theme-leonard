<?php get_header(); ?>



	<?php if (have_posts()): ?>
	
		<div class="post">
		  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		  <?php /* If this is a category archive */ if (is_category()) { ?>				
		  <h2 class="title">Beiträge in der Kategorie '<?php echo single_cat_title(); ?>' </h2>

      <?php /* If this is a Tag archive */ } elseif (function_exists('is_tag')&& is_tag()) { ?>
      <h2 class="title">Beiträge zum Tag '<?php echo single_tag_title(); ?>'</h2>
    
 	    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		  <h2 class="title">Archiv für<?php the_time('F jS, Y'); ?></h2>
  		
	   <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		  <h2 class="title">Archiv für <?php the_time('F, Y'); ?></h2>

		  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		  <h2 class="title">Archiv für <?php the_time('Y'); ?></h2>
  		
	    <?php /* If this is a search */ } elseif (is_search()) { ?>
		  <h2 class="title">Suchergebnisse</h2>
  		
	    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		  <h2 class="title">Autoren Archiv</h2>

		  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		  <h2 class="title">Blog Archiv</h2>

  	  <?php } ?>
		  </div>
	
		<?php while (have_posts()) : the_post(); ?>
			<article>
			<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_excerpt(); ?>				
			</div>
			
				
				<p class="links">
					<span class="category"><?php the_category(','); ?></span>
				</p>
			<small>Geschrieben am <?php the_time('d.m.y') ?> von <?php the_author_posts_link() ?> </small>
		</article>	
		<?php endwhile; ?>
	
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Newer Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Older Entries &raquo;') ?></div>
		</div>
	
	<?php else: ?>
	
		<div class="post">
			<h2 class="title">Nicht gefunden</h2>
		</div>
			
	<?php endif; ?>
<!-- end content -->
<?php get_footer(); ?>
