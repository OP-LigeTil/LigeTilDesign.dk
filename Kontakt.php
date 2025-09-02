<?php
/*
Template Name: Kontakt
Bruges til fx kontaktsiden
*/

/*images ACF Start */ 
$image_two_column = get_field('image_two_column_text_image');

/*images ACF end */ 

?>
<?php get_header(); ?>
<body>
<main class="template-LigeTil">
    <div class= "hero-template-LigeTil">
        <h1><?php the_title(); ?></h1>
        <h2>Lad os tage en snak om dit projekt</h2> 
    </div>
    <section class="content-kontakt">
            <h2>Book en samtale her</h2>
            <p>Du er altid velkommen til at sende mig en mail på <strong>oliver@ligetildesign.dk</strong> hvis du tænker, at jeg kunne være den rette mand til at hjælpe dig med dit projekt. Du er også velkommen til at booke mig til en uforpligtende samtale via Calendly lige her 👇</p>
            <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/oliver-ligetildesign/session"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
    </section>
</main>

<?php get_footer(); ?>