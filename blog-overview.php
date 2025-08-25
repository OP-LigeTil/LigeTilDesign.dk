<?php
/*
Template Name: Blog overview
Bruges til oversigt over blogposts
*/

/*images ACF Start */ 
$image_two_column = get_field('image_two_column_text_image');

/*images ACF end */ 
?>

<?php get_header(); ?>
<main>
    <div class= "hero-template-LigeTil" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/OmLigeTil-background-img.png'); background-size: cover; background-repeat: no-repeat";>
        <h1><?php the_title(); ?> </h1>
    </div>

<!-- Blogindlæg feed --> 
 <section class="blog-feed">
    <div class="blog-feed-content-blog-overview">
        <?php $posts = get_posts("numberposts=-1"); ?>
        <?php if($posts) : ?>
        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <div class= "blog-post">
            <div class="post">
                <a href="<?php echo get_permalink($post->ID); ?>" ><?php the_post_thumbnail(); ?></a>
                <h3><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h3>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
<!-- Blogindlæg feed end -->
</main>

<?php get_footer(); ?>