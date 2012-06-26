<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="generator" content="Habari">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<link rel="Shortcut Icon" href="<?php echo $theme->get_url('/favicon.png'); ?>">
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>">

<header class="main-header">
	<hgroup>
		<div class="picture">
			<a href="/" rel="home"></a>
		</div>
		<h1><?php echo Options::get('title'); ?></h1>
		<h2><?php echo Options::get('tagline'); ?></h2>
	</hgroup>
	<nav>
		<ul class="main-nav">
			<li class="sel" id="home_link"><a href="<?php Site::out_url('habari'); ?>" id="home-link">Home</a></li>
			<?php echo $theme->area('nav'); ?>
		</ul>
	</nav>
	<a href="http://habariproject.org" class="fork-me">Built With Habari</a>
</header>

<section class="main-section blog-section" id="blog-posts">
	<?php foreach($posts as $post) echo $theme->content($post); ?>
	<div class="pagenav">
		<?php echo $theme->prev_page_link( _t( '&laquo;&nbsp;Newer&nbsp;Posts' ) ); ?>
		<?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ); ?>
		<?php echo $theme->next_page_link( _t( 'Older&nbsp;Posts&nbsp;&raquo;' ) ); ?>
	</div>
</section>

<div class="mobile-nav">
  <span class="nav-btn" id="mobile-nav-btn">
    <span class="nav-btn-bar"></span>
    <span class="nav-btn-bar"></span>
    <span class="nav-btn-bar"></span>
  </span>
	<h3><a href="/"><?php echo Options::get('title'); ?></a></h3>
</div>

<?php echo $theme->footer(); ?>

</body>
