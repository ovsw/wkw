<!DOCTYPE html>
<html lang="en">
<?php require($config->paths->templates.'includes/head.inc') ?>
<body>
  
  <?php require($config->paths->templates.'includes/main-nav.inc') ?>
  
  <?php require($config->paths->templates.'includes/sections/hp_slideshow.inc') ?>
  
  <?php require($config->paths->templates.'includes/sections/discount.inc') ?>

  <?php require($config->paths->templates.'includes/sections/hp_services.inc') ?>

  <?php require($config->paths->templates.'includes/sections/hp_selling_points.inc') ?>

  <?php require($config->paths->templates.'includes/sections/hp_points.inc') ?>

    <!-- <section id="packages" class="parallax" style="background-image: url(<?= $config->urls->templates ?>images/_service-bg.png);">
      <div class="container">
        <h2 class="center no-bg"><span class="white">Service</span> packages</h2>
        <p>Morbi sit amet turpis posuere, bibendum velit bibendum, dapibus quam. Curabitur non diam at velit pellentesque sollicitudin in sed velit. Vestibulum scelerisque velit massa, eget dictum sem euismod ac. </p>
        <div class="row items">
          <div class="col-md-3 col-sm-12 item item-left matchHeight">
            <div class="header">Start <span class="black">package</span></div>
            <div class="price">$249</div>
            <p>Morbi sit amet turpis<br> Curabitur non diam<br> Vestibulum scelerisque</p>
            <a href="#" class="btn btn-black btn-md">Join Now</a>
          </div>
          <div class="col-md-4 col-sm-12 item large">
            <div class="">
              <span class="label-green">Best <span class="black">Choice</span></span>
              <span class="premium-stars"></span>
              <div class="header">Premium <span class="black">package</span></div>
              <div class="price">$699</div>
              <p>Morbi sit amet turpis<br> Bibendum velit bibendum<br> Dapibus quam<br> Curabitur non diam<br> Vestibulum scelerisque</p>
              <a href="#" class="btn btn-green btn-md">Join Now</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-12 item item-right matchHeight">
            <div class="header">Best <span class="black">package</span></div>
            <div class="price">$375</div>
            <p>Morbi sit amet turpis<br> Bibendum velit bibendum<br> Dapibus quam</p>
            <a href="#" class="btn btn-black btn-md">Join Now</a>
          </div>
        </div>
      </div>
    </section> -->
    

    <!-- <section id="catalog">
      <div class="container">
        <h2 class="center"><span class="black">Plants</span> Catalog</h2>
        <div class="row items">
          <a href="#" class="col-md-3 col-sm-6 col-ms-6">
            <img src="<?= $config->urls->templates ?>images/_catalog-1.png" alt="Catalog">
            <h4>Winter tree</h4>
            <p>Nunc egestas pellentesque aliquam. Aliquam vehicula odio at tristique semper. </p>
            <h4 class="green margin-0 price">$14</h4>
          </a>
          <a href="#" class="col-md-3 col-sm-6 col-ms-6">
            <img src="<?= $config->urls->templates ?>images/_catalog-2.png" alt="Catalog">
            <h4>Ficus for house</h4>
            <p>Nunc egestas pellentesque aliquam. Aliquam vehicula odio at tristique semper. </p>
            <h4 class="green margin-0 price">$57</h4>
          </a>
          <a href="#" class="col-md-3 col-sm-6 col-ms-6">
            <img src="<?= $config->urls->templates ?>images/_catalog-3.png" alt="Catalog">
            <h4>African cactus</h4>
            <p>Nunc egestas pellentesque aliquam. Aliquam vehicula odio at tristique semper. </p>
            <h4 class="green margin-0 price">$83</h4>
          </a>
          <a href="#" class="col-md-3 col-sm-6 col-ms-6">
            <img src="<?= $config->urls->templates ?>images/_catalog-4.png" alt="Catalog">
            <h4>Southern palm tree</h4>
            <p>Nunc egestas pellentesque aliquam. Aliquam vehicula odio at tristique semper. </p>
            <h4 class="green margin-0 price">$10</h4>
          </a>				
        </div>
        <a href="#" class="align-center btn btn-green btn-xs btn-md-mob">see more</a>
      </div>
    </section> -->
    
  <?php require($config->paths->templates.'includes/sections/hp_sales_text.inc') ?>
  
  <?php //require($config->paths->templates.'includes/sections/portfolio.inc') ?>
    
  <?php //require($config->paths->templates.'includes/sections/staff.inc') ?>
  
  <?php require($config->paths->templates.'includes/sections/cta_form.inc') ?>
  
  <?php require($config->paths->templates.'includes/sections/hp_testimonials.inc') ?>

  <?php require($config->paths->templates.'includes/sections/hp_blog_posts.inc') ?>
  
  <?php require($config->paths->templates.'includes/footer.inc') ?>

  <?php require($config->paths->templates.'includes/foot.inc') ?>

</body>
</html>