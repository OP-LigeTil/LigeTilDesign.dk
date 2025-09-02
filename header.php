<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>Lige Til Design 2525</title>
</head>
<body>
<header>
    <nav>
        <a href="/"><img src="http://ligetildesign.dk/wp-content/uploads/2025/08/Ligetil_ny.png"></a>
        
        <!-- Overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'Hovedmenu',
            )
        );
        ?>
  </div>
  <!-- Overflow end -->
</div>
<button class="button-menu" onClick="openNav()">

<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1000 1000">
  <rect x="193.4" y="179.9" width="654.2" height="108.3"/>
  <rect x="78.1" y="409.1" width="654.2" height="108.3"/>
  <rect x="193.4" y="638.2" width="654.2" height="108.3"/>
</svg>

</button>

    </nav>

</header>

