<?php get_header(); ?>

<div id="sidebar">
  <?php get_sidebar(); ?>
</div>
<div id="content">
<div id="yui-main">
  <div class="yui-b">
    <?php if (have_posts()) : ?>
    
	<?php while (have_posts()) : the_post(); ?>
    
    <div class="post-date"> 
    <span class="post-month"><?php the_time('M') ?></span>
    <span class="post-day"><?php the_time('d') ?><br /><?php the_time('Y') ?></span>
    </div>
    
    <div class="post-wrap" id="post-<?php the_ID(); ?>">
      <div class="story-content">
        <h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h1>
        
        <!--<?php if (is_category() || is_archive()||is_home()||is_single() || is_page()) {the_content(__('','change'));} 
		else {the_excerpt();}?>全文输出-->
        
        <?php if(is_category() || is_archive()||is_home()||is_single() || is_page()) {the_excerpt();}
		else {the_content('Read the rest of this entry &raquo;');} ?>
        <div id="menu_page";><a href="<?php the_permalink() ?>">Read On &raquo;</a></div>
        <!--输出摘要-->
        
        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        <p class="post-meta">
          <?php the_tags('tags: ', ', ', '<br />'); ?>
          posted in
          <?php the_category(', ') ?>
          by
          <?php the_author() ?>
          |
          <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
          <?php edit_post_link('Edit',' | ', ''); ?>
        </p>
      </div>
    </div>
    <!-- end post -->
    <?php endwhile; ?>
    
    <?php waiting_pagination(9); ?>  
      
    <?php else : ?>
    <h2 class="post-title">
      <?php _e('Not Found'); ?>
    </h2>
    <p>
      <?php _e("Sorry, but you are looking for something that isn't here. Double check your URL or you should try searching for it."); ?>
    </p>
    <?php @include (TEMPLATEPATH . "/searchform.php"); ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
