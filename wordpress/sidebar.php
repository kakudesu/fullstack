<ul class="story-content">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<li id="search"><h2>Search</h2>
		<ul>
		<li>
			<?php @include(TEMPLATEPATH.'/searchform.php'); ?>
		</li>
		</ul>
	</li>
	
	<li id="recentposts"><h2>Recent Articles</h2>
		<ul>
		<?php $postslist = get_posts('numberposts=5&order=DESC&orderby=date'); foreach ($postslist as $post) : setup_postdata($post);
		?> 
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</li>

		<li id="categories"><h2>Categories</h2>
		<ul>
			<?php wp_list_categories('show_count=1&title_li=&feed=RSS'); ?>
		</ul>
	</li>

	<li id="archives"><h2>Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
	<?php /*wp_list_bookmarks();*/ ?>

	<li id="tagcloud"><h2>Tag Cloud</h2>
		<ul>
			<li>
			<?php wp_tag_cloud('smallest=7&largest=9'); ?>
			</li>
		</ul>
	</li>
	<li id="bookmarks">
		<?php wp_list_bookmarks('categorize=0&title_before=<h2 class="widgettitle">&title_after=</h2>&title_li=友情链接'); ?>
	</li>
<?php endif; ?>
</ul>
