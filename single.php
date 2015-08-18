<?php get_header(); ?>

<div class="charector-wrap " id="js_wrap">
    <div class="charector"></div>
</div>
<script src="<?php bloginfo('template_url');?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/jump.js" type="text/javascript"></script>

<section id="content" class="single">

<?php the_post(); ?>
		
<article class="sp">
<div class="time_bar">
    <h1><?php the_date(); ?></h1>
</div>
<hgroup class="p_lt p_a">

	<header class="p_t">
		<span class="p_s_c"><?php the_category(' ') ?>></span>
		<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></h2>
	</header> 
	
	<div class="p_i">
		<span class="p_i_t">
			<?php the_tags('','',''); ?>
		</span>
		<span class="p_i_e">
			<span class="p_i_a"><a><?php the_author(); ?></a></span>
			<span class="p_i_r"><a href="<?php comments_link(); ?>" ><?php comments_number( __('无回复','dpt') , __('落单的回复','dpt') , __('% 回复','dpt') ); ?></a></span>
			<span class="p_i_s"><a/><?php if ( function_exists('the_views') ){ the_views(); } ?></a/></span>
			<span class="p_i_d"><?php echo edit_post_link( __('编辑','dpt') ); ?></span>
		</div>
	</span>

</hgroup>

<div class="sp_c">

	<?php the_content(); ?>

</div>
<nav class="post_nav">
    <?php
        $prev_post = get_previous_post();
        if (!empty( $prev_post )): ?>
    <div>
		<span class="p_n_l">上一篇</span><?php previous_post_link( '%link', '' . '%title' ); ?></div>
    <?php endif; ?>
    <?php
        $next_post = get_next_post();
        if(!empty( $next_post)): ?>
    <div>
		<span class="p_n_r">下一篇</span><?php next_post_link( '%link', '%title ' . '' ); ?></div>
    <?php endif; ?>
</nav>

</article>
    
<!-- 这里可以插入广告 -->
<div style=”float:right; padding-bottom:10px;padding-top:10px;width:70%”>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 小广告I -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4184837872359054"
     data-ad-slot="7288537529"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<?php comments_template( '', true ); ?>

</section>

<?php get_footer(); ?>