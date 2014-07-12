<!DOCTYPE html PUBLIC "by MichaelTing  E-mail  dsw248@gmail.com" "https://www.google.com/search?hl=zh-CN&q=dsw248">
<html xmlns="https://www.google.com/search?hl=zh-CN&q=dsw248">
	
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

		
	<script language="javascript"><!--禁制iframe嵌套-->
		if (top.location != location) top.location.href = location.href;
	</script>
	<script language="javascript">
		if(top != self){location.href = "https://www.google.com/search?hl=zh-CN&q=dsw248"; }
	</script><!--如果被嵌套则返回到google SSL dsw248-->
</head>


<body>
<div id="hd">
  
  <div id="sitemeta">
    <ul>
      <?php wp_register(); ?>
      <li>
        <?php wp_loginout(); ?>
      </li>
      <?php wp_meta(); ?>
      <li class="rss"> <a href="<?php bloginfo('rss2_url'); ?>"> RSS Feed </a> </li>
    </ul>
  </div>
  
  <div id="titlewrapper">    
<!--原博客标题的地方-->    
	<div id="blogtitle">
      <h1> <a href="<?php echo get_option('home'); ?>/">
        <?php bloginfo( 'name'); ?>
        </a> 
      </h1>
    </div>
    
    <div id="menu">     
    <ul>       
        <li>
          <div id="blogdescription">
            <?php bloginfo( 'description'); ?>
          </div>
        </li>
	</ul>
	
    <ul id="menu_page">
        <li> <a href="<?php echo get_option('home'); ?>/"> Home </a> </li>
        <?php wp_list_pages( 'title_li'); ?>
	</ul> 

    </div>
  </div>
  <div class="clear"> &nbsp; </div>
</div>
<div align="center">
<div id="wrapper">
<div id="<?php yui_doc() ?>" class="<?php yui_secondary_column() ?>">
