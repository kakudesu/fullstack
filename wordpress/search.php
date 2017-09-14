<?php get_header(); ?>

<div id="yui-main">
  <?php if (have_posts()) : ?>
  <h2 class="pagetitle">Search Results for '<?php echo $_GET['s']; ?>'</h2>
  <div>
    <?php while (have_posts()) : the_post(); ?>
    <div class="story-content blocks" id="post-<?php the_ID(); ?>">
      <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
        <?php the_title(); ?>
        </a></h2>
      <?php the_excerpt(); ?>
      <p class="post-meta"> posted in
        <?php the_category(', ') ?>
        by
        <?php the_author() ?>
        <?php edit_post_link('Edit', ' | ', ''); ?>
      </p>
    </div>
    <?php endwhile; ?>
  </div>
  <?php waiting_pagination(9); ?> 
  <?php else : ?>
  <h2 class="pagetitle">
    <?php _e('No Results Found'); ?>
  </h2>
  <p>
    <?php _e('Sorry, but there were no entries that matched your search for '.$_GET['s']. 
				' You may want to try broadening or narrowing your search terms for better results.'); ?>
  </p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
