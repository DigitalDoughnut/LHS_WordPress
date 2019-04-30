
  </div> <!-- calligraphy -->

  <footer>
  <div class="container-fluid" style="background-color: rgba(17,56,2,0.45);">
      <div class="container">
        <div class="row py-3 justify-content-center">
        <nav class="navbar navbar-expand-lg">
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item"> -->
 
            <?php wp_nav_menu( array(
               'theme_location' => 'extra-menu',
               'menu_class'=> 'mainmenu pull-left navbar-nav' 
               ) ); ?>

<!-- </li>
</ul> -->
        </nav>
            <!--
            <h6><a class="mx-1 mx-sm-2 mx-md-3" href="#">Home</a><a class="mx-1 mx-sm-2 mx-md-3" href="about.html">About</a><a class="mx-1 mx-sm-2 mx-md-3" href="legacychronicles.html">The Legacy Chronicles</a><a class="mx-1 mx-sm-2 mx-md-3" href="news.html">News</a><a href="#" class="mx-1 mx-sm-2 mx-md-3" data-toggle="modal" data-target="#PrivacyModal">Privacy &amp; Cookies</a><a class="mx-1 mx-sm-2 mx-md-3" href="contact.html">Contact</a></h6>
            -->
          </div>
        </div>
      </div>

      <div class="container-fluid mt-0" style="background-color: rgb(17,56,2);">
          <div class="container">
            <div class="row py-1 pt-2  justify-content-center">
                <h6>&copy; <?php echo date("Y"); ?> Lauren H Salisbury</h6>
            </div>
            </div>
          </div>
  </footer>


  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/popper.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/featherlight.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/myjavascript.js"></script>

  <?php /* wp_footer(); */ ?>
</body>

</html>