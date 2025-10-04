<?php
/*
Template Name: Case post
Bruges til cases
*/

/*images ACF Start */ 
$image_two_column = get_field('image_two_column_text_image');

/*images ACF end */ 
?>

<?php get_header(); ?>
<main>

<ul class ="breadcrumbs">
    <li>Forside</li>
    <li>Cases</li>
    <li>Case: LikeMinded</li>
</ul>

<div class="case-post-hero">
    <p id="case-tag">Case</p>
    <div class="case-post-hero-main">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="case-info">
        <p><strong>Kunde</strong><br>LikeMinded</p>
        <br>
        <p><strong>Industri</strong><br>Ecommerce</p>
    </div>
    <div>
        <p><strong>Service</strong></p>
        <ul>
            <li>#UI design</li>
            <li>#User experience</li>
        </ul> 
    </div>
    </div>
    <div class="case-post-TOC">
        <ul>
            <li>Opgaven</li>
            <li>Processen</li>
            <li>Resultater</li>
            <li>Om LikeMinded</li>
        </ul>
    </div>
</div>
<section class="case-post-image-full-width">

    <img><?php 
$image = get_field('hero_img-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

</section>
<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <div>
            <h4><?php echo get_field('tag_1-case'); ?></h4>
            <br>
            <h2><?php echo get_field('headline_1-case'); ?></h2>
        </div>
        <p><?php echo get_field('paragraph_1-case'); ?></p>
    </div>
</section>

<section class="two-column-content-template-LigeTil">
    <div class="text-two-column-template-LigeTil">
        <div>
            <h4><?php echo get_field('tag_2-case'); ?></h4>
            <br>
            <h2><?php echo get_field('headline_2-case'); ?></h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
            <p><?php echo get_field('paragraph_2-case'); ?></p>
        </div> 
    </div>
    <?php 
$image = get_field('two_colm_img-case');
if( !empty( $image ) ): ?>
    <img id="case-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?></>
    </div>
</section>

<section>
    <div class="image-gallery-two">
        <img><?php 
$image = get_field('hero_img-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?></img>
    <img><?php 
$image = get_field('hero_img-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?></img>
</div>
</section>

<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <div>
            <h4><?php echo get_field('tag_3-case'); ?></h4>
            <br>
            <h2><?php echo get_field('headline_3-case'); ?></h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
            <p><?php echo get_field('paragraph_3-case'); ?></p>
        </div> 
    </div>

<div class="image-gallery-three">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">

</div>

</section>
<!-- Text section two column --> 
<section class = "text-img-double-column">
        <div class= "first-text-img-double-column">
            <h2><?php echo get_field('om_headline-case'); ?></h2>
            <p><?php echo get_field('om_paragraph-case'); ?></p>
        <button class="button-secondary"><?php echo get_field('om_link-case'); ?></button>
        </div>
        <div class="second-text-img-double-column">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
        </div>
</section>

</main>
<?php get_footer(); ?>