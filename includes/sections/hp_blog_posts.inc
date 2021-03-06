<section id="blog-main">
  <div class="container">
    <h2><span class="black">Latest</span> Blog Posts</h2>

    <div class="blog">
      <div class="row">

        <?php $recentPosts = $pages->find("template=blog-post,sort=-blog_date,limit=3"); foreach($recentPosts as $post) : ?>

        <div class="col-lg-4 col-md-4 col-sm-6 a-a-a">
          <div class="item matchHeight">
            <?php $image_description = ""; if (count($post->blog_images) > 0) {
              $image = $post->blog_images->first();
              $img_url = $image->size(715, 477)->url;
              $image_description = $image->description;
            }else{
              $img_url = 'https://placehold.it/718x479?text=missing+image';
            }?>
            <a href="<?= $post->url ?>" class="photo"><img src="<?= $img_url ?>" class="full-width" alt="<?= $image_description ?>"></a>						
            <div class="description">
              <a href="<?= $post->url ?>" class="header"><h4><?= $post->title ?></h4></a>
              <p class="text"><?= $sanitizer->truncate($post->post_body) ?></p>
            </div>
            <div class="blog-info">
              <div class="row">
                <div class="col-lg-6 col-sm-12  col-xs-6">
                  <a href="<?= $post->url ?>" class="date"><?= date("d M", $post->getUnformatted("blog_date")); ?></a>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-6 right">
                  <ul>
                    <!-- <li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li> -->
                    <li class="icon-comments"><a href="<?= $post->url ?>"><span class="fa fa-commenting-o"></span><?= count($post->blog_comments) ?></a></li>
                  </ul>
                </div>
              </div>
            </div>									
          </div>
        </div>

        <?php endforeach; ?>
        
      </div>
      <!-- /.row -->
    </div>
    <!-- /.blog -->

    <div class="btn-more"><a href="<?= $pages->get('1084')->url ?>" class="btn btn-green btn-xs">see more</a></div>

  </div>
  <!-- /.container -->
</section>