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
            <p class="status"> Tilgængelig</p>
        </div>
        <div class="hero-action">
            <button class="button-primary">Kontakt</button>
            <button class="button-LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin-112.png" alt="Gå til min LinkedIn profil"></button>
        </div>
    </div>
    <div class="hero-2">
            <h2>Om miggggg</h2>
            <button class="button-circle"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.png" alt="Arrow"></button>
    </div>
    <div class="hero-3">
            <div class="hero-3-content">
                <h2>Cases</h2>
                <p>Happy clients, happy life</p>
            </div>
            <button class="button-circle"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-arrow.png" alt="Arrow"></button>
    </div>
    </div>
</section>
<!-- Hero end --> 

<!-- Logo bar --> 
<section class="logobar">
    <p>Tidligere samarbejder</p>
    <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/WorldinWood_logo.png" alt="Arrow"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/WorldinWood_logo.png" alt="Arrow"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/WorldinWood_logo.png" alt="Arrow"></li>
    </ul>

</section>
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
                <h3><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h3>
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
        <h3>UX- og digital design</h3>
        <p>Design af hjemmesider, apps og digitale platforme med fokus på brugerbehov og forretningsmål – pakket ind i lækkert design.</p>
    </div>
    <div>
        <h3>UX- og digital design</h3>
        <p>Design af hjemmesider, apps og digitale platforme med fokus på brugerbehov og forretningsmål – pakket ind i lækkert design.</p>
    </div>
    <div>
        <h3>UX- og digital design</h3>
        <p>Design af hjemmesider, apps og digitale platforme med fokus på brugerbehov og forretningsmål – pakket ind i lækkert design.</p>
    </div>
    <div>
        <h3>UX- og digital design</h3>
        <p>Design af hjemmesider, apps og digitale platforme med fokus på brugerbehov og forretningsmål – pakket ind i lækkert design.</p>
    </div>
</section>
<!-- Services end --> 

<!-- Text section two column --> 
<section class = "text-img-double-column">
        <div class= "first-text-img-double-column">
            <h2>Intuitivt design føles ligetil</h2>
            <p>Med et utal af digitale platforme som brugeren springer imellem og lige så mange muligheder indenfor markedsføring, kan det være en labyrint at finde sin vej frem. Især at finde den vej, der fører til en sund, stabil virksomhed med masser af glade kunder. Dén vej hjælper jeg mine kunder med at finde. 

Med afsæt i min viden om brugeradfærd, kommunikation og digital markedsføring får jeg virksomheder på rette spor og hjælper dem med at booste brugeroplevelsen på deres digitale platforme.</p>
        </div>
            <?php
             if( $image_two_column ) : ?>
        <div class="second-text-img-double-column">
            <img src="<?php echo esc_url($image_two_column['sizes']['large']); ?>" alt="<?php echo esc_attr($image_two_column['alt']); ?>" class="img-fluid";>
        </div>
        <?php endif; ?>
</section>

<?php get_footer(); ?>

