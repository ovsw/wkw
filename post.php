<!DOCTYPE html>
<html lang="en">
<?php require($config->paths->templates.'includes/head.inc') ?>
<body>
  
  <?php require($config->paths->templates.'includes/main-nav.inc') ?>
  
  <?php require($config->paths->templates.'includes/sections/inner_header.inc') ?>

  <div class="container">
    <div class="inner inner-two-col row">

      <div class="col-lg-8 col-md-8">

        <div class="blog-post text-page">

          <!-- <img src="<?= $config->urls->templates ?>images/_blog-post.jpg" class="main-photo full-width" alt="Blog"> -->
          <div class="blog-info">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-xs-6">
                  <span class="date"><?= date("d M", $page->getUnformatted("date")); ?></span>
              </div>
              <div class="col-lg-6 col-sm-6 col-xs-6 right">
                  <ul>
                      <!-- <li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li> -->
                      <li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span><?= count($page->comments) ?></a></li>
                  </ul>
              </div>
            </div>
          </div>
          <?= $page->body; ?>

        </div>
        
      </div>
      <!-- END MAIN CONTENT -->

      <!-- START SIDEBAR -->
      <div class="col-lg-4 col-md-4">

        <div class="widget-area" role="complementary">

          <aside class="widget">
            <h4>Search</h4>
              <div class="content">
                  <form class="form wp-searchform" method="get">
                      <input type="text" name="search" value="" placeholder="Search for...">
                      <button type="submit" class="fa fa-search"></button>
                  </form>
              </div>
          </aside>

          <aside class="widget">
              <h4>Categories</h4>
              <ul>
                  <!-- <li class="current-cat"><a href="#">Landscape Design</a></li> -->
                  <?php foreach($pages->get('1104')->children as $category) : ?>
                  <li><a href="<?= $category->url ?>"><?= $category->title ?> </a></li>
                  <?php endforeach; ?>
              </ul>
          </aside>

          <aside class="widget">
              <h4>Tags</h4>
              <div class="blogTags">
                  <!-- <li class="current-cat"><a href="#">Landscape Design</a></li> -->
                  <?php foreach($pages->get('1021')->children as $tag) : ?>
                    <?php if($pages->find("template=post, tags=$tag")->count() > 1) :?>
                    <a href="<?= $tag->url ?>"><?= $tag->title ?> </a>
                    <?php endif; ?>
                  <?php endforeach; ?>
              </div>
          </aside>
          
          <!-- <aside class="widget widget_calendar">
              <h4>Calendar</h4>
              <div id="calendar_wrap" class="calendar_wrap">
                  <table id="wp-calendar">
                      <caption>April 2017</caption>
                      <thead>
                          <tr>
                              <th scope="col" title="Monday">M</th>
                              <th scope="col" title="Tuesday">T</th>
                              <th scope="col" title="Wednesday">W</th>
                              <th scope="col" title="Thursday">T</th>
                              <th scope="col" title="Friday">F</th>
                              <th scope="col" title="Saturday">S</th>
                              <th scope="col" title="Sunday">S</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <td colspan="3" id="prev"><a href="#">« March 2017</a></td>
                              <td class="pad">&nbsp;</td>
                              <td colspan="3" id="next" class="pad">&nbsp;</td>
                          </tr>
                      </tfoot>
                      <tbody>
                          <tr>
                              <td colspan="5" class="pad">&nbsp;</td>
                              <td>1</td>
                              <td>2</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td id="today">4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                              <td>9</td>
                          </tr>
                          <tr>
                              <td>10</td>
                              <td>11</td>
                              <td>12</td>
                              <td>13</td>
                              <td>14</td>
                              <td>15</td>
                              <td>16</td>
                          </tr>
                          <tr>
                              <td>17</td>
                              <td>18</td>
                              <td>19</td>
                              <td>20</td>
                              <td>21</td>
                              <td>22</td>
                              <td>23</td>
                          </tr>
                          <tr>
                              <td>24</td>
                              <td>25</td>
                              <td>26</td>
                              <td>27</td>
                              <td>28</td>
                              <td>29</td>
                              <td>30</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </aside> -->
          
          <!-- <aside class="widget">
              <h4>Archives</h4>
              <ul>
                  <li><a href="#">March 2017</a></li>
                  <li><a href="#">February 2017</a></li>
                  <li><a href="#">January 2017</a></li>
              </ul>
          </aside> -->
          <!-- <aside class="widget">
              <h4>Instagram</h4>
              <div class="content">
                  <div class="gallery-small row">
                      <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-3 col-ms-4 col-xs-6"><img src="assets/images/_insta-1.jpg" class="full-width" alt="Gallery"></a>
                      <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-3 col-ms-4  col-xs-6"><img src="assets/images/_insta-2.jpg" class="full-width" alt="Gallery"></a>
                      <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-3 col-ms-4  col-xs-6"><img src="assets/images/_insta-3.jpg" class="full-width" alt="Gallery"></a>
                      <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-3 col-ms-4  col-xs-6"><img src="assets/images/_insta-4.jpg" class="full-width" alt="Gallery"></a>
                      <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-3 col-ms-4  col-xs-6"><img src="assets/images/_insta-5.jpg" class="full-width" alt="Gallery"></a>
                      <a href="#" class="swipebox col-lg-4 col-md-4 col-sm-3 col-ms-4  col-xs-6"><img src="assets/images/_insta-6.jpg" class="full-width" alt="Gallery"></a>
                  </div>
              </div>
          </aside> -->
      </div>
      
        <nav class="menu-left">
          <h4>Services</h4>
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
