<!DOCTYPE html>
<html lang="en">
<?php require($config->paths->templates.'includes/head.inc') ?>
<body>
  
  <?php require($config->paths->templates.'includes/main-nav.inc') ?>
  
  <?php require($config->paths->templates.'includes/sections/inner_header.inc') ?>

  <div class="container">
    <div class="inner inner-two-col row">

      <div class="col-lg-8 col-md-8 text-page">
        
        <?= $page->body; ?>

        <!-- <div class="row">
            <div class="col-md-6 small">
                <h3>Grass Planting</h3>
                <p class="small">Ut lobortis ornare ullamcorper. Nunc condimentum volutpat lacus vitae mollis. Integer tincidunt tincidunt ante, a sodales urna luctus sit amet. Donec elit mauris, varius in bibendum a, sodales eu diam. </p>
                <p class="small">Ut fringilla erat sit amet neque facilisis, posuere tincidunt lacus scelerisque. Ut sagittis hendrerit nunc blandit tincidunt. Aenean ut felis sollicitudin, porta sapien id, pulvinar libero.</p>
                <a href="#" class="btn btn-xs btn-green">read more</a>
            </div>
            <div class="col-md-6">
                <h3>Gallery</h3>
                <img src="assets/images/_gallery-1.jpg" class="full-width" alt="Gallery">
            </div>
        </div> -->

            <!-- <section id="projects" class="projects-inner">
              <h3 class="no-bg black">Completed Projects</h3>
              <div class="row items">
                <div class="swiper-container slider-filter-container" id="project-slider-inner">
                    <div class="swiper-wrapper">
                        <div class="col-md-6 col-ms-6 swiper-slide filter-item filter-type-1">
                            <div class="item">
                                <img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
                                <div class="info">
                                    <h3>Gardening<br> of Private Cottage</h3>
                                    <a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-1">
                            <div class="item">
                                <img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
                                <div class="info">
                                    <h3>Landscape Design<br> of Wooden House</h3>
                                    <a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-6 swiper-slide filter-item filter-type-3">
                            <div class="item">
                                <img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
                                <div class="info">
                                    <h3>Gardening<br> of Private Cottage</h3>
                                    <a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-1">
                            <div class="item">
                                <img src="assets/images/_project-4.jpg" class="full-width" alt="Project">
                                <div class="info">
                                    <h3>Landscape Design<br> of Wooden House</h3>
                                    <a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation">
                        <a href="#" class="arrow-left fa fa-chevron-left"></a>
                        <a href="#" class="arrow-right fa fa-chevron-right"></a>
                    </div>
                </div>
              </div>
            </section> -->

        </div>
        <!-- END MAIN CONTENT -->

        <!-- START SIDEBAR -->
      <div class="col-lg-4 col-md-4">
      
      <nav class="menu-left">
        <ul>
            <?php foreach($pages->get('1')->hp_services as $service) : ?>
            <li><a href="<?= $service->single_page_select->url ?>" class="service-1"><span style="background-image: url(<?= $service->single_image->url ?>)"></span><?= $service->title ?></a></li>
            <?php endforeach; ?>
        </ul>
      </nav>

      <div class="special-sm hidden-ms hidden-xs">
        <section id="special-offer">
          <div class="item">
            <h3>Request Our Services</h3>
            <h2 class="no-bg">Get in touch now</h2>
            <p>Fill in the form below and we will get back to you ASAP.<br>You can also give us a call at <strong><a href="tel:6029563844">(602) 956 3844</a></strong>.</p>
            <div class="cognito">
            <script src="https://services.cognitoforms.com/s/xPoircp7HEGoNo_tpFEirg"></script>
            <script>Cognito.load("forms", { id: "141" });</script>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- END SIDEBAR -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  
  <?php require($config->paths->templates.'includes/footer.inc') ?>

  <?php require($config->paths->templates.'includes/foot.inc') ?>

</body>
</html>
