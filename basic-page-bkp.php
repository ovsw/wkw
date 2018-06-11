<!DOCTYPE html>
<html lang="en">
<?php require($config->paths->templates.'includes/head.inc') ?>
<body>
  
  <?php require($config->paths->templates.'includes/main-nav.inc') ?>
  
  <header class="page-header" style="background-image: url(assets/images/_inner-bg.jpg);">
    <div class="container">
      
      <h1><?= $page->get("long_title|title") ?></h1>
      <ol class="bread">
        <li>
            <a href="index.html"><span>Home</span></a>
        </li>
        <li class="divider"><span>|</span></li>
        <li>
            <span>Flowers Planting</span>
        </li>
      </ol>
    </div>
  </header>

  <div class="container">
    <div class="inner inner-two-col row">

      <!-- START SIDEBAR -->
      <div class="col-lg-4 col-md-4">
        <nav class="menu-left">
          <ul>
              <li><a href="#" class="service-1"><span style="background-image: url(assets/images/_service-1.png)"></span>Grass Toping</a></li>
              <li><a href="#" class="service-2 active"><span style="background-image: url(assets/images/_service-2.png)"></span>Flowers planting</a></li>
              <li><a href="#" class="service-3"><span style="background-image: url(assets/images/_service-3.png)"></span>Earth Laying</a></li>
              <li><a href="#" class="service-4"><span style="background-image: url(assets/images/_service-4.png)"></span>Trees planting</a></li>
              <li><a href="#" class="service-5"><span style="background-image: url(assets/images/_service-5.png)"></span>Plants watering</a></li>
              <li><a href="#" class="service-6"><span style="background-image: url(assets/images/_service-6.png)"></span>Shearing</a></li>
          </ul>
        </nav>
        <div class="special-sm hidden-ms hidden-xs">
          <section id="special-offer">
            <div class="item">
              <h3>Special offer</h3>
              <h2 class="no-bg">Get design free</h2>
              <p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante.</p>
              <form>
                  <input type="text" name="name" placeholder="Your Name">
                  <input type="text" name="email" placeholder="E-mail">
                  <input type="submit" value="Get Now" class="btn btn-green btn-md">
              </form>
            </div>
          </section>
        </div>
      </div>
      <!-- END SIDEBAR -->

      <div class="col-lg-8 col-md-8 text-page">


        <h2>Flowers Planting</h2>
        
        <p>Ut lobortis ornare ullamcorper. Nunc condimentum volutpat lacus vitae mollis. Integer tincidunt tincidunt ante, a sodales urna luctus sit amet. Donec elit mauris, varius in bibendum a, sodales eu diam. Ut fringilla erat sit amet neque facilisis, posuere tincidunt lacus scelerisque. Ut sagittis hendrerit nunc blandit tincidunt. Aenean ut felis sollicitudin, porta sapien id, pulvinar libero. Morbi sollicitudin porta tellus vitae interdum. Ut nec enim lacus. </p>
        <img src="<?= $config->urls->templates ?>images/_service-inner.jpg" alt="Flowers Planting" class="aligncenter full-width">

        
                <h1 class="center">Heading 1</h1>
                <p class="small">Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>
                <h2>Heading 2</h2>
                <p class="small">Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget.</p>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Heading 3</h3>
                        <p class="small">Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget.</p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="green">Heading 4</h4>
                        <p class="small">Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Heading 5</h5>
                        <p class="small">Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget.</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="green">Heading 6</h6>
                        <p class="small">Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget.</p>
                    </div>
                </div>
                <hr>
                <h2 class="no-bg center">Text elements</h2>
                <span class="date">Date: January 2, 2017</span>
                <p><strong>Bold text</strong> maecenas mauris felis, pharetra ac odio a, interdum ultricies risus. Nunc tempor nunc at odio fermentum ullamcorper. Sed tincidunt ut tortor quis placerat. Curabitur <a href="#">link style</a> tristique imperdiet mollis. Sed rutrum id tellus et ultricies. Aliquam maximus sit amet justo vitae volutpat. Ut scelerisque diam vitae ante rhoncus vulputate. Curabitur laoreet eleifend tortor. Mauris sit amet facilisis nunc. Quisque id fermentum leo, eget tincidunt augue. Donec viverra sed ante eget condimentum.</p>
                <blockquote>Nam eu mi eget velit vulputate tempor gravida quis massa. In malesuada condimentum ultrices. Sed et mauris a purus fermentum elementum. </blockquote>
                <p>Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>
                <h4>Lists</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-ms-6">
                        <ol>
                            <li>Landscape Design</li>
                            <li>Gardening</li>
                            <li>Crocus Agency</li>
                            <li>Green House</li>
                            <li>Garden Design</li>
                            <li>Home Plants</li>
                        </ol>
                    </div>
                    <div class="col-md-4 col-sm-4 col-ms-6">
                        <ul class="check">
                            <li>Landscape Design</li>
                            <li>Gardening</li>
                            <li>Crocus Agency</li>
                            <li>Green House</li>
                            <li>Garden Design</li>
                            <li>Home Plants</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-ms-12">
                        <ul class="crocus">
                            <li>Landscape Design</li>
                            <li>Gardening</li>
                            <li>Crocus Agency</li>
                            <li>Green House</li>
                            <li>Garden Design</li>
                            <li>Home Plants</li>
                        </ul>
                    </div>
                </div>
                <h4>Image with text</h4>
                <p>Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>
                <img src="<?= $config->urls->templates ?>images/_blog-small-1.png" alt="Gallery" class="full-width alignleft">
                <p>Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>
                <p>Suspendisse consectetur libero eu sapien elementum sodales. Fusce eu justo a sapien tincidunt aliquet. Suspendisse imperdiet tristique orci, a dictum nulla commodo eget. Sed pellentesque pellentesque quam, ac iaculis dui rutrum in. Duis et justo at velit efficitur tristique nec at eros.</p>
                <div class="tags-short">
                    <strong>Tags:</strong> <a href="#">#plant</a>, <a href="#">#garden</a>, <a href="#">#landscape</a>, <a href="#">#design</a>
                </div>
                <h2 class="no-bg center">Table</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Sample Text 1</td>
                            <td>Sample Text 1</td>
                            <td>Sample Text 1</td>
                            <td>Sample Text 1</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Sample Text 2</td>
                            <td>Sample Text 2</td>
                            <td>Sample Text 2</td>
                            <td>Sample Text 2</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Sample Text 3</td>
                            <td>Sample Text 3</td>
                            <td>Sample Text 3</td>
                            <td>Sample Text 3</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Sample Text 4</td>
                            <td>Sample Text 4</td>
                            <td>Sample Text 4</td>
                            <td>Sample Text 4</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="no-bg center">Inputs</h2>
                <form class="form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <textarea name="text" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="col-md-12 aligncenter">
                            <input type="submit" name="send" value="Get Taxi" class="btn btn-green btn-lg">
                        </div>
                    </div>
                </form>
                <h2 class="no-bg center">Buttons</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" value="Big Button" class="btn btn-lg btn-green">
                        <input type="submit" value="Big Button" class="btn btn-lg btn-black">
                        <input type="submit" value="Big Button" class="btn btn-lg btn-black-bordered">
                    </div>
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-md btn-green">Button</a>
                        <a href="#" class="btn btn-black">Button</a>
                        <a href="#" class="btn btn-black-bordered">Button</a>
                    </div>
                    <div class="col-sm-12">
                        <a href="#" class="btn btn-xs btn-green">Small Button</a>
                        <a href="#" class="btn btn-xs btn-black">Small Button</a>
                        <a href="#" class="btn btn-xs btn-black-bordered">Small Button</a>
                    </div>
                </div>
                <ul class="social social-big">
                    <li><strong>Social:</strong></li>
                    <li>
                        <a href="#" class="social-fb fa fa-facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="social-twitter fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="social-youtube fa fa-youtube"></a>
                    </li>
                    <li>
                        <a href="#" class="social-inst fa fa-instagram"></a>
                    </li>
                </ul>
                <ul class="social-small">
                    <li><strong>Share:</strong></li>
                    <li>
                        <a href="#" class="social-twitter fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="social-fb fa fa-facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="social-inst fa fa-instagram"></a>
                    </li>
                </ul>
            

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

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  
  <?php require($config->paths->templates.'includes/footer.inc') ?>

  <?php require($config->paths->templates.'includes/foot.inc') ?>

</body>
</html>
