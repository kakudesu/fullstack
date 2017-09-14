<?php get_header(); ?>

<div id="yui-main">
  <?php if (have_posts()) : ?>
  <h2 class="pagetitle">'<?php echo single_cat_title(); ?>' Category</h2>
  <div>
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="story-content blocks" id="post-<?php the_ID(); ?>">               
      <h3 class="post-title"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
        <?php the_title(); ?>
        </a> </h3>
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
    <?php _e('The Category Does Not Exist'); ?>
  </h2>
  <p>
    <?php _e("Sorry, but the category you're looking for doesn't exist. Please try selecting a category from the menu."); ?>
  </p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
