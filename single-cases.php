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
            <li >Opgaven</li>
            <li>Processen</li>
            <li>Resultater</li>
            <li>Om LikeMinded</li>
        </ul>
    </div>
</div>
<section class="case-post-image-full-width">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
        <ul>
</section>
<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <div>
            <h4>Opgaven</h4>
            <br>
            <h2>Startup, der ville godt fra start</h2>
        </div>
        <p>Holdet bag LikeMinded ville være sikre på, at LikeMinded som platform kom godt fra start ved launch. Derfor ønskede de et kritisk UX blik på nøglesider på platformen bl.a. Butikkernes unikke landingside, landingside med tilbud og ‘marketplace’ siden. 
        <br>
        <br>
        Min opgave var derfor at optimere brugeroplevelsen for slutkunderne. Jo bedre en oplevelse, jo større sandsynlighed for at slutbrugerne vil bruge platformen og i sidste ende foretage køb blandt butikkerne på LikeMinded.</p>
    </div>
<div class="image-gallery-two">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
</div>
</section>

<section class="two-column-content-template-LigeTil">
    <div class="text-two-column-template-LigeTil">
        <div>
            <h4>Processen</h4>
            <br>
            <h2>Brugertests og bedre design</h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
            <p>I samarbejde med LikeMinded holdet, definerede vi de vigste nøglesider for slutbrugerne. Herefter foretog jeg et ekspert review af nøglesiderne på mobilstørrelse og noterede steder, hvor brugerrejsen var uklar eller mangelfuld.</p>  
            <p>Derefter lavede jeg redesigns i Figma for hver aftalte nøgleside. Cards, knapper og andre komponenter blev bygget, navngivet og gemt i et designsystem. I den denne fase definerede jeg også nye farver for cards, baggrund og tekster, der alle overholdte WCAG 2.1 retningslinjerne for webtilgængelighed.</p> 
            <p>Herfra gik jeg ind i en iterativ arbejdsfase, hvor jeg:</p>
        <ul>
            <li>Foretog 2 brugertest med personer, der var indenfor LikeMindeds definerede målgruppe </li>
            <li>Justerede designet på baggrund af brugertestene</li>
            <li>Præsenterede designet for LikeMinded og indsigterne fra brugertestene</li>
            <li>Justerede designet på baggrund af LikeMindeds inputs</li>
            <li>Foretog 1 brugertest mere og foretog mindre ændringer i designet på baggrund af denne</li>
        </ul>
            <p>Afslutningsvis tog jeg en dialog med LikeMindeds udvikler omkring designet, og lavede en endelig overlevering til LikeMinded.</p>
        </div> 
    </div>
    <div class= "image-two-column-template-LigeTil">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
    </div>
</section>

<section class="content-template-LigeTil">
    <div class="text-content-template-LigeTil">
        <div>
            <h4>Resultatet</h4>
            <br>
            <h2>Mobilvenligt, brugervenligt, systemvenligt</h2>
        </div>
        <div class="paragraph-content-template-LigeTil">
            <p>Outputtet på opgaven blev:</p>
            <ul>
                <li>Definition af administrative brugertyper, der gik fra 2 til 3</li>
                <li>Nyt dashboard/forside med de vigtigste funktioner fremhævet og alle overordnede sider vist frem i sidebaren</li>
                <li>Ca. 20 sider designet til desktop og ca. 5 sider designet til mobile </li>
                <li>2 mobiloptimerede landingsider med hver deres designstil og opdaterede content</p>
            </ul>
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
            <h2>Om LikeMinded</h2>
            <p>LikeMinded er den “digitale arm” til mindre, lokale butikker. Mange butiksejere åbner deres butik, fordi de brænder for et kreativt håndværk, unikt mad eller lignende interesser. De færreste er interesserede i at skulle holde en hjemmeside opdateret eller lave indhold til SoMe, selvom det vil kunne give flere kunder i butikken. </p>
            <br>
            <p>Her er LikeMinded en oplagt løsning. Platformen samler alle mindre butikker ét sted, og gør det let for brugere at udforske tilbud og foretage click and collect køb. </p>
        <button class="button-secondary">Besøg LikeMinded</button>
        </div>
        <div class="second-text-img-double-column">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pexels-mikhail-nilov-8284721.jpg">
        </div>
</section>

</main>
<?php get_footer(); ?>