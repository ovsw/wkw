<?php namespace ProcessWire; 

require($config->paths->templates.'layouts/sidebar-right.inc'); ?>

<div data-pw-id="main-heading"><?= $page->title ?></div>

<div data-pw-id="main-content" class="text-page">
  <div class="blog">
    <div class="row">

    <?php $posts = $pages->find("template=blog-post,blog_section.value=".$blogSection.",sort=-blog_date,limit=8"); foreach($posts as $post) : ?>

      <div class="col-lg-6 col-md-6 col-sm-12 a-a-a">
        <div class="item matchHeight">
          <?php $image_description = ""; if (count($post->blog_images) > 0) {
            $image = $post->blog_images->first();
            $img_url = $image->size(718, 479)->url;
            $image_description = $image->description;
          }else{
            $img_url = 'https://placehold.it/718x479?text=missing+image';
          }
          $blogParents = $page->parents();
          ?>
          <a href="<?= "/".$blogParents[1]->name."/".$page->name."/".$post->name ?>" class="photo"><img src="<?= $img_url ?>" class="full-width" alt="<?= $image_description ?>"></a>
          <div class="description">
              <a href="<?= "/".$blogParents[1]->name."/".$page->name."/".$post->name ?>" class="header"><h4><?= $post->title ?></h4></a>
              <p class="text"></p>
          </div>
          <div class="blog-info">
              <div class="row">
                  <div class="col-lg-6 col-sm-12  col-xs-6">
                      <a href="<?= "/".$blogParents[1]->name."/".$page->name."/".$post->name ?>" class="date"><?= date("d M 'y", $post->getUnformatted("blog_date")); ?></a>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-xs-6 right">
                      <ul>
                          <!-- <li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li> -->
                          <li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span><?= count($page->blog_comments) ?></a></li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>



    </div>
    <!-- /row -->
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
  <!-- /blog -->
</div>
<!-- END MAIN CONTENT -->

<!-- START SIDEBAR -->
<div data-pw-id="right-sidebar">
  
  <?php require($config->paths->templates.'includes/blog-sidebar.inc') ?>

</div>
<!-- END SIDEBAR -->