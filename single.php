<?php get_header(); ?>

<main>
<section class="blog-post-hero">
    <img src="<?php the_post_thumbnail_url();?>">
</section>
<section class="blog-post-content">
    <div class="blog-post-content-top">
        <h1 class="h-black"><?php the_title();?></h1>
        <p id="blogdate"><?php echo get_the_date('d M. o');?></p>
    </div>
    <div class= "blog-post-content-bottom">
    <?php echo the_content();?>
    </div>

</section>
</main>

<?php get_footer(); ?>