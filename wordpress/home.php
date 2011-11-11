<?php get_header(); ?>
		<section id="content">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<article> 
 				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<small>Geschrieben am <?php the_time('d.m.y') ?> von <?php the_author_posts_link() ?></small> 
			</article> 
			<?php endwhile; ?>
			<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php endif; ?>
<?php get_footer(); ?>
