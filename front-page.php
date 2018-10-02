<?php get_header(); ?>

<?php if (have_posts()) { 
    while (have_posts()) { the_post();
        $post_title = get_field('page_title');
        if (!$post_title) $post_title = get_the_title();
        $post_content = get_the_content();
	}}                 
?>			

<div class="content__title"><h1><?php echo $post_title ?></h1></div>

<?php if ($post_content): ?>
    <div class="content__body">
        <div class="content__txt" itemprop="articleBody"><?php echo do_shortcode($post_content); ?></div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>