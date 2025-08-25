<?php get_header(); ?>
<nav> 
    
</nav>
<?php
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h2><a href="#><?php the_title()?></a></h2>
    </div>
    <?php }
?>

