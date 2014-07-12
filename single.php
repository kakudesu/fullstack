<?php get_header(); ?>

			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
				
			<div id="bd" class="single">
				<div id="yui-main">
					<div class="yui-b">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					</div>
				
						<div class="post-date">
							<span class="post-month">
								<?php the_time('M') ?>
							</span>
							<span class="post-day">
								<?php the_time('d') ?>
								<br />
								<?php the_time('Y') ?>
							</span>
						</div>
				
					<div class="post-wrap" id="post">
						<div class="story-content">
							
                            <div class="post-title" style="	text-align: center;">
								<?php the_title(); ?>
							</div></br>
						
							<?php the_content(); ?>
						
							<p class="post-meta">
								<?php the_tags('tags: ', ', ', '<br />'); ?>
								posted in
								<?php the_category(', ') ?>
								by
								<?php the_author() ?>
								<?php edit_post_link('Edit', ' | ', ''); ?>
							</p>
						
						</div>
                        
						<div class="metawrap">
							<p class="interact">
								<?php if('open' == $post->comment_status || 'open' == $post->ping_status) { _e(' Follow comments via the '); comments_rss_link('RSS Feed'); } if('open'==$post->comment_status) { ?>
								| <a href="#respond">
								<?php _e('Leave a comment'); ?>
								</a>
								<?php } if('open' == $post->ping_status) { ?>
								| <a href="<?php trackback_url(true); ?>">Trackback URL</a>
								<?php } ?>
							</p>
						</div>
                        
					</div>
                    
					<?php comments_template(); endwhile; else: ?>
                    
					<h2 class="post-title">
						<?php _e('Not Found'); ?>
					</h2>
					<p class="center">
						<?php _e("Sorry, but the post you are looking for couldn't be found. Please check your URL again."); ?>
					</p>
                    
					<?php @include (TEMPLATEPATH . "/searchform.php"); ?>
					<?php endif; ?>
				</div>
			</div>
			
<?php get_footer(); ?>