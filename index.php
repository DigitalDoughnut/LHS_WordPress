<?php get_header(); ?>
<p> </p>
<div class="container py-1">

    
   <!-- 
<div class="col-lg-8 py-2  my-5" > -->

  
<?php $postNumber = 0;

while(have_posts()){
  the_post();
  $postNumber++;
  ?>
   <div class="white-container my-5">
  <h2 class="text-left px-5 py-5"><?php the_title(); ?></h2>
  <?php
  the_content(); 
if ($postNumber===1) { ?>
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
<div class="container py-1">
<div>
<?php }
  
  ?>
  </div>
  <?php
  } 
  ?>
<!--
</div>
</div> -->
</div>



<div class="container-fluid py-3" style="background-color: white;">
  <div class="container py-5">
  <div class="row align-middle">






</div>
  </div>
</div>


	




<?php get_footer(); ?>