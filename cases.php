<?php
/*
Template Name: Cases
Brugers til oevrsigt over cases
*/

?>

<?php get_header(); ?>
<body>
<main>
    <div class= "hero-template-LigeTil">
        <h1><?php the_title(); ?> </h1>
    </div>

<!-- Cases feed -->
 <section class="case-feed">
    <div class="case-feed-content-overview">
        <?php $posts = get_posts(array(
            'numberposts' => -1,
            'post_type' => 'cases',
            'orderby' => 'date',
        ))?>
        <?php if($posts) : ?>
        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <div>
            <div class="case-post">
                <a href="<?php echo get_permalink($post->ID); ?>" ><?php the_post_thumbnail(); ?></a>
                <div class="case-post-info">
                <p id="caseinfo">Case</p>
                <h3><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h3>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    </div>
</section> 

<?php get_footer(); ?>