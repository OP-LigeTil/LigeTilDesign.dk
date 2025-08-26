<?php
/*
Template Name: Om Lige Til Design
Bruges til fx "om Lige Til Design"
*/

/*images ACF Start */ 
$image_two_column = get_field('image_two_column_text_image');

/*images ACF end */ 
?>

<?php get_header(); ?>
<main class= "template-LigeTil">
<div class= "hero-template-LigeTil">
    <h1><?php the_title(); ?> </h1>
    <h2><?php the_field('Hero_H2'); ?> </h2>
</div>
<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <h2><?php the_field('h2_first_section'); ?> </h2>
        <p><?php the_field('paragraph_first_section'); ?> </p>
    </div>
<div class="text-content-template-LigeTil">
    <h2><?php the_field('h2_second_section'); ?> </h2>
    <p><?php the_field('paragraph_second_section'); ?> </p>
</div>
</section>
<section class="highlighted-text">
    <h3><?php the_field('highlighted_text'); ?></h3>
</section>

<section class = "text-img-double-column">
        <div class= "first-text-img-double-column">
            <h2><?php the_field('Headline_two-column-text-image'); ?></h2>
            <p><?php the_field('paragraph_two-column-text-image'); ?></p>
        </div>
            <?php
             if( $image_two_column ) : ?>
        <div class="second-text-img-double-column">
            <img src="<?php echo esc_url($image_two_column['sizes']['large']); ?>" alt="<?php echo esc_attr($image_two_column['alt']); ?>" class="img-fluid";>
        </div>
        <?php endif; ?>
</section>
<section id="manifest">
    <p id="manifest-p-grey">Oliver Panthera // Lige Til Design </p>
    <h3 class="h-black">Manifest</h3>
    <p>Livet er ikke lige til. Det samme gælder det at arbejde i et kreativt fag som design og marketing kan beskrives som. Derfor har jeg lavet et manifest, som alt mit arbejde laves udfra. <br><br>
                1. Feedback, inputs og kritik på arbejdsopgaver er altid velkommen.<br>
                2. Faglighed skal altid respekteres og vægtes højere end synsninger.<br>
                3. De bedste projekter er et resultat af nysgerrighed, ærlighed og lydhørhed.<br>
                4. Der er ingen grund til ikke at være ambitiøs!<br>
                5. Arbejde er ikke alt. Familie, venner og fritid er bare vigtigere.<br>
             </p>
</section>

</main>
<?php get_footer(); ?>
