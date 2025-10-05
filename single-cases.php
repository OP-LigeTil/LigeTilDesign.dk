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
        <p><strong>Kunde</strong><br><?php echo get_field('client-case'); ?></p>
        <br>
        <p><strong>Industri</strong><br><?php echo get_field('industry-case'); ?></p>
    </div>
    <div>
        <p><strong>Service</strong></p>
        <?php
$types = get_the_terms(get_the_ID(), 'type');

if ($types && !is_wp_error($types)) {
    echo '<ul class="case-types">';
    foreach ($types as $type) {
        echo '<li>' . esc_html($type->name) . '</li>';
    }
    echo '</ul>';
}
?>
    </div>
    </div>
    <div class="case-post-TOC">
        <ul>
            <li><a href="#opgaven">Opgaven</a></li>
            <li><a href="#processen">Processen</a></li>
            <li><a href="#resultater">Resultater</a></li>
            <li><a href="#om">Om casen</a></li>
        </ul>
    </div>
</div>
<section class="case-post-image-full-width">

    <img><?php 
$image = get_field('hero_img-case');
if( !empty( $image ) ): ?>
    <img id="case-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

</section>
<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <div id="opgaven">
            <h4><?php echo get_field('tag_1-case'); ?></h4>
            <br>
            <h2><?php echo get_field('headline_1-case'); ?></h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
        <p><?php echo get_field('paragraph_1-case'); ?></p>
    </div>
</section>

<section class="two-column-content-template-LigeTil">
    <div class="text-two-column-template-LigeTil">
        <div id="processen">
            <h4><?php echo get_field('tag_2-case'); ?></h4>
            <br>
            <h2><?php echo get_field('headline_2-case'); ?></h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
            <p><?php echo get_field('paragraph_2-case'); ?></p>
        </div> 
    </div>
    <div>
    <?php 
$image = get_field('two_colm_img-case');
if( !empty( $image ) ): ?>
    <img id="case-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?></>
    </div>
</section>

<section>
    <div class="image-gallery-two">
        <?php 
$image = get_field('two_colm_only_img_1-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
    <?php 
$image = get_field('two_colm_only_img_2-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
</section>

<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <div id="resultater">
            <h4><?php echo get_field('tag_3-case'); ?></h4>
            <br>
            <h2><?php echo get_field('headline_3-case'); ?></h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
            <p><?php echo get_field('paragraph_3-case'); ?></p>
        </div> 
    </div>

<div class="image-gallery-three">
    <?php 
$image = get_field('gallery_image_1-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
<?php 
$image = get_field('gallery_image_2-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
<?php 
$image = get_field('gallery_image_3-case');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

</div>

</section>
<!-- Text section two column --> 
<section class = "text-img-double-column">
        <div class= "first-text-img-double-column">
            <h2 id="om"><?php echo get_field('om_headline-case'); ?></h2>
            <p><?php echo get_field('om_paragraph-case'); ?></p>
        <button class="button-secondary"><?php echo get_field('om_link-case'); ?></button>
        </div>
        <div class="second-text-img-double-column">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
        </div>
</section>

</main>
<?php get_footer(); ?>