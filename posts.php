<?php require($config->paths->templates.'layouts/sidebar-right.inc') ?>

<div data-pw-id="main-heading">Tips From our Blog</div>

<div data-pw-id="main-content" class="text-page">

  <div class="blog">
    <div class="row">

      <?php $posts = $pages->get('1116')->children('sort=-date,limit=8'); foreach($posts as $post) : ?>

      <div class="col-lg-6 col-md-6 col-sm-12 a-a-a">
        <div class="item matchHeight">
          <?php $image = $post->images->first(); $img = $image->size(718, 479) ?>
          <a href="<?= $post->url ?>" class="photo"><img src="<?= $img->url ?>" class="full-width" alt=""></a>
          <div class="description">
              <a href="<?= $post->url ?>" class="header"><h4><?= $post->title ?></h4></a>
              <p class="text"></p>
          </div>
          <div class="blog-info">
              <div class="row">
                  <div class="col-lg-6 col-sm-12  col-xs-6">
                      <a href="<?= $post->url ?>" class="date"><?= date("d M 'y", $post->getUnformatted("date")); ?></a>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-xs-6 right">
                      <ul>
                          <!-- <li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li> -->
                          <li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span><?= count($page->comments) ?></a></li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

      <!--       <div class="col-lg-12 col-md-12 col-sm-12 one-column a-a-a">
        <div class="item matchHeight">

          <?php $image = $post->images->first(); $img = $image->size(768, 512) ?>
          <a href="<?= $post->url ?>" class="photo"><img src="<?= $img->url ?>" class="full-width" alt="Blog"></a>

          <div class="description">
              <a href="<?= $post->url ?>" class="header"><h4><?= $post->title ?></h4></a>
              <p class="text"><?= $sanitizer->truncate($post->body) ?></p>
          </div>

          <div class="blog-info">
              <div class="row">
                  <div class="col-lg-6 col-sm-12  col-xs-6">
                      <a href="<?= $post->url ?>" class="date"><?= date("d M 'y", $post->getUnformatted("date")); ?></a>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-xs-6 right">
                      <ul>
                          <!-- <li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li> -->
                          <li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span><?= count($page->comments) ?></a></li>
                      </ul>
                  </div>
              </div>
          </div>

        </div>
      </div> -->

      <?php       
      echo $posts->renderPager(array(
      'nextItemLabel' => "Next",
      'previousItemLabel' => "Prev",
      'listMarkup' => "<ul class='pagination' style='list-style:none;'>{out}</ul>",
      'itemMarkup' => "<li class='{class}'>{out}</li>",
      'linkMarkup' => "<a href='{url}'>{out}</a>"
      ));
      ?>

    </div>
  </div>
    
</div>
<!-- END MAIN CONTENT -->

<!-- START SIDEBAR -->
<div data-pw-id="right-sidebar">
  
  <?php require($config->paths->templates.'includes/blog-sidebar.inc') ?>

</div>
<!-- END SIDEBAR -->


