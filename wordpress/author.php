<?php get_header();?>
		<section id="content">
			<div id="content">
				<?php
					global $wp_query;
					$curauth = $wp_query->get_queried_object();
				?>
				<article>
					<h2>User <?php echo $curauth->nickname; ?></h2>
					<p class="avatarimg">
						<?php if(function_exists('get_avatar')) echo get_avatar($curauth->user_email, '45') ;?>
					</p>
					<dl>
						<dt>Name:</dt>
						<dd><?php echo $curauth->first_name. ' ' . $curauth->last_name ;?></dd>
						<dt>Details:</dt>
						<dd><?php echo $curauth->description; ?></dd>
						<dt>Website:</dt>
						<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
					</dl>

					<h2 class="title">Geschrieben von <?php echo $curauth->nickname; ?>:</h2>
					<ul class="authorposts">
						<!-- The Loop -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<em><?php the_time('d.m.y'); ?></em>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
						</li>
						<?php endwhile; else: ?>
						<p><?php _e('Kein Beitrag dieses Autors'); ?></p>
						<?php endif; ?>
						<!-- End Loop -->			
					</ul>
					<p align="center"><?php posts_nav_link(' - ','&#171; Neuere Einträge','Ältere Einträge &#187;') ?></p>
				</article>
			</div>
<?php get_footer();?>
