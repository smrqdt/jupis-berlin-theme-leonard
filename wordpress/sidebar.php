		<aside> 
			<h2>Kategorien</h2>
			<ul> 
				<?php wp_list_categories('title_li=&depth=1');?>
			</ul> 
			<h2>Links</h2>
			<ul>
				<?php wp_list_bookmarks('category=2'); ?>
			</ul>	
		</aside>
