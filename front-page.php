<?php
/* images ACF Start */ 
$image_two_column = get_field('image_two_column_text_image');

/* images ACF end */ 

?>


<?php get_header(); ?>
<body>
<section class="hero">
    <div class="hero-1">
        <div class="hero-1-content">
            <p><?php echo get_field('top_paragraph_front_page'); ?></p>
            <h1><?php echo get_field('headline_front_page'); ?></h1>
            <p class="status"></p>
        </div>
        <div class="hero-action">
            <a href="/kontakt"><button class="button-primary">Kontakt</button></a>
            <a href="https://www.linkedin.com/in/oliver-panthera/" target="_blank"><button class="button-LinkedIn"><img src="https://ligetildesign.dk/wp-content/uploads/2025/08/linkedin-112.png" alt="Gå til min LinkedIn profil"></a></button>
        </div>
    </div>
    <div class="hero-2" onclick="window.location.href='/om-lige-til-design'" target="_self">
            <h2>Om mig</h2>
            <a href ="/om-lige-til-design", target="_self"><button class="button-circle"><img src="https://ligetildesign.dk/wp-content/uploads/2025/08/Icon-arrow.png" alt="Arrow"></button></a>
    </div>
    <div class="hero-3" onclick="window.location.href='/cases'" target="_self">
            <div class="hero-3-content">
                <h2>Cases</h2>
            </div> 
            <button class="button-circle"><img src="https://ligetildesign.dk/wp-content/uploads/2025/08/Icon-arrow.png" alt="Arrow"></button>
    </div>
    </div>
</section>
<!-- Hero end --> 

<!-- Logo bar --> 
<!-- Hiden logobar <section class="logobar">
    <p>Tidligere samarbejder</p>
    <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/WorldinWood_logo.png" alt="Arrow"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/WorldinWood_logo.png" alt="Arrow"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/WorldinWood_logo.png" alt="Arrow"></li>
    </ul>

</section>
--> 
<!-- Logo bar end -->

<!-- Text section --> 
 <section class="text-single-column">
    <div class="text-single-column-content">
        <h2><?php echo get_field('headline_single_column'); ?></h2>
        <p><?php echo get_field('paragraph_single_column'); ?></p>
    </div>
</section>
<!-- Text section end -->

<!-- Blogindlæg feed --> 
 <section class="blog-feed">
    <h2 class="h2-black">Nyeste blogindlæg</h2>
    <div class="blog-feed-content">
        <?php $posts = get_posts("numberposts=4"); ?>
        <?php if($posts) : ?>
        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <div class= "blog-post">
            <div class="post">
                <a href="<?php echo get_permalink($post->ID); ?>" ><?php the_post_thumbnail(); ?></a>
                <h3><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo mb_strimwidth ($post->post_title, 0, 40, '...'); ?></a></h3>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
<!-- Blogindlæg feed end -->

<!-- Services --> 
 <section class="services">
    <div id="grid_main">
        <div id="grid_main_text">
            <h2 class="h2-XL h2-black">Services</h2>
        <p>Én person, mange skills</p>
        </div>
        <div id="grid_main_image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/LigeTil_illustration.png" alt="illustration">
        </div>
    </div>
    <div>
        <h3>User Experience (UX)</h3>
        <p>Kortlægning af brugerrejser og analyse af, hvordan du kan optimere din platform til fordel for både brugere og din bagvedliggende forretning.</p>
    </div>
    <div>
        <h3>Digital design (UI)</h3>
        <p>Design af hjemmesider, digitale platforme og apps. Altid brugervenligt, altid responsivt og altid gjort nemt for udviklerne at arbejde med.</p>
    </div>
    <div>
        <h3>Brandidentiteter og grafisk design</h3>
        <p>Jeg laver glædeligt alt fra komplette brandidentiteter og logoer til opsætning af bøger, flyers, visitkort og annoncer til digital markedsføring.</p>
    </div>
    <div>
        <h3>Marketing</h3>
        <p>For både B2C og B2B kan jeg levere marketingstrategier og eksekvere på dem, fx med Meta annoncering, organiske opslag, contentproduktion mv.</p>
    </div>
</section>
<!-- Services end --> 

<!-- Text section two column --> 
<section class = "text-img-double-column">
        <div class= "first-text-img-double-column">
            <h2>Intuitivt design føles ligetil</h2>
            <p>Vi mennesker springer mellem et utal af digitale platforme hver dag. Det sætter krav til dig som virksomhedsejer, der gerne vil fange og fastholde din målgruppes opmærksomhed og få dem til at lægge deres hårdt optjente kroner ved dig.</p>
            <br>
            <p> Jeg hjælper virksomheder med at gøre jeres målgruppes brugerrejse mere Lige Til. Det giver gladere kunder, mere omsætning og en mere stabil grund for din virksomhed at stå på.</p>
            <br>
            <p>Men at få noget til at føles Lige Til er ikke bare Lige Til. Det kræver viden omkring brugeradfærd, digitale platforme og kommunikation. Den viden har jeg tilegnet mig igennem flere år i marketing branchen og 3 år som freelance UX’er.</p>

        </div>
            <?php
             if( $image_two_column ) : ?>
        <div class="second-text-img-double-column">
            <img src="<?php echo esc_url($image_two_column['sizes']['large']); ?>" alt="<?php echo esc_attr($image_two_column['alt']); ?>" class="img-fluid";>
        </div>
        <?php endif; ?>
</section>

<?php get_footer(); ?>

