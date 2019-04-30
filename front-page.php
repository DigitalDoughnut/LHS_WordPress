<?php get_header(); ?>

<div class="container">
    
    <div class="row align-items-end pt-5">
<div class="col-lg-8 py-2  mt-3 mb-5" >

<?php while(have_posts()){
  the_post();
  the_content();
} ?>
  
</div>

<div class="col-lg-4 mx-auto pl-5 pt-3">
<img src="<?php echo get_theme_file_uri('/img/lauren1.png')?>" alt="Lauren" style="max-height: 460px; max-width: 354px;" width="100%">
</div>

</div>
</div>
<div class="container-fluid py-3" style="background-color: rgb(17,56,2); color: #FFF">
    <div class="container py-2">
      <div class="row align-middle">
          <div class="mx-auto">
        <h4 class="freeStyleH4">Sign up to my newsletter: </h4>
        </div>
      </div>
      <div class="row align-middle">
        <div class="mx-auto">
          <a href="http://eepurl.com/djCo0z" role="button" class="btn btn-secondary">Subscribe</a>
        </div>
      </div>

</div>
</div>
<div class="container-fluid py-3" id="vidTest" style="background-color: white;">
  <div class="container py-5">
  <div class="row align-middle">

<div class="col-md-2 col-lg-3"></div>
          <div class="col-md-8 col-lg-6 embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ZgscFFXBhIU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="col-md-2 col-lg-3"></div>
          <div class="mx-auto pt-1">
        </div>


</div>


  </div>
</div>
</div>

  </div>


<?php get_footer(); ?>