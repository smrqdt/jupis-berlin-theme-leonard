		</section>		
		<footer>
			<section id="skyline"> 
				<img src="<?php bloginfo('template_directory'); ?>/images/skyline.png">
				<div id="sk_black"></div> 
			</section> 
			<section id="footer_content"> 
				<div> 
				<?php wp_list_bookmarks('category=3'); ?>	
				</div> 
				<div> <?php wp_list_bookmarks('category=4'); ?>
				</div> 
			</section> 
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>		

