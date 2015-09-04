<!DOCTYPE html>
<html lang="zh-cn">

<head>

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/shake.css">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="author" content="Cononico" />
<meta name="application-name" content="<?php bloginfo('name'); ?>"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="apple-mobile-app-capable" content="yes">
<meta name="apple-mobile-app-status-bar-style" content="black">
    
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url')?>" />
<link rel="alternate" type="application/rdf+xml" title="RSS 1.0" href="<?php bloginfo('rss_url')?>" />
<link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url')?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />


<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head();

$dpt_style = get_option("dpt_style");
if ( !empty($dpt_style) ) {
	echo "<style>" . $dpt_style . "</style>";
}

?>

<?php if ( is_user_logged_in() ) { echo '<style type="text/css" media="screen"> .head_nav { top: 32px; } </style>'; } ?>

</head>

<body>

<header id="hcontent">

<!-- 导航菜单 -->
<nav id="head_nav" class="head_nav">
    <!-- 局左logo -->
    <div class="nav_logo_left">
	<h1 class="nav_title_left">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>
	</h1>
	</div>
    
    <div class="nav_main">
		<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
	</div>
    
    <div class="nav_search">
		<form id="nav_search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input class="nav_search_input" type="text" name="s" id="s" placeholder="Search" size="10" />
		</form>
	</div>
</nav>
<div id="banner" style="background-image: url('<?php dpt_banner(); ?>');">
    <canvas class="demo-canvas" id="demo-canvas"></canvas>
</div>

<hgroup class="head_hgroup clearfix">
    <h1 class="head_title">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
    </h1>
    <h2 class="title_description"><?php bloginfo('description'); ?></h2>
</hgroup>
</header>

<div id="page" class="page">