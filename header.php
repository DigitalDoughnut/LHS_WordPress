<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.png">

  <title><?php echo get_bloginfo( 'name' ); ?></title>



<?php wp_head();?>
</head>

<body>
  <div class="calligraphyBG">
  <nav class="navbar navbar-expand-lg navbar-dark bg-green fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#"><?php echo strtoupper(get_bloginfo( 'name' )); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
<!--     <ul class="navbar-nav ml-auto"> -->
<!--    <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
        
      <!-- <div class="nav-item"> -->
            <div class="ml-auto">
            <?php wp_nav_menu( array(
               'theme_location' => 'header-menu',
               'menu_class'=> 'mainmenu pull-left navbar-nav' 
               ) ); ?>
               </div>
      <!--  </div> -->

<!--        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="legacychronicles.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            The Legacy Chronicles
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="legacychronicles.html">Overview</a>
            <a class="dropdown-item" href="legacychronicles.html#Courage">Courage</a>
            <a class="dropdown-item" href="legacychronicles.html#Conviction">Conviction</a>
            <a class="dropdown-item" href="legacychronicles.html#Who">Who's who</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.html">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
-->
<!--</ul> -->
    </div>
  </div>
  </nav>
