<?php namespace ProcessWire; 

require($config->paths->templates.'layouts/sidebar-right.inc') ?>

<div data-pw-id="main-heading">Tips From our Blog</div>

<div data-pw-id="main-content" class="text-page">

    <div class="blog-post text-page">

      <h1><?= $page->title ?></h1>
      
      <!-- <img src="<?= $config->urls->templates ?>images/_blog-post.jpg" class="main-photo full-width" alt="Blog"> -->
      <div class="blog-info">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-xs-6">
              <span class="date"><?= date("d M 'y", $page->getUnformatted("blog_date")); ?></span>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-6 right">
              <ul>
                  <!-- <li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li> -->
                  <li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span><?= count($page->blog_comments) ?></a></li>
              </ul>
          </div>
        </div>
      </div>

      
      <?= $page->blog_body; ?>

      <?php $tags = $page->blog_tags; if (count($page->blog_tags)) :  $i = 0; ?>
      <h3>Tags: </h3>
        <?php foreach ($tags as $tag) : $i++; ?>
        <a href="<?= $tag->url ?>" class="blogPostTag"><?= $tag->title ?></a>
          <?php if ($i < count($tags )) echo ", " ;?>
      <?php endforeach; ?>
      <?php endif; ?>

      <?= $page->blog_comments->render(); ?>
      <?= $page->blog_comments->renderForm();  ?>

    </div>
    
</div>
<!-- END MAIN CONTENT -->

<!-- START SIDEBAR -->
<div data-pw-id="right-sidebar">
  
  <?php require($config->paths->templates.'includes/blog-sidebar.inc') ?>

</div>
<!-- END SIDEBAR -->
