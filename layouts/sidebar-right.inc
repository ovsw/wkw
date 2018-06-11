<div data-pw-id="main">

  <header class="page-header" style="background-image: url(<?= $config->urls->templates ?>images/_inner-bg.jpg); background-size: cover;">
    <div class="container">
      
      <h1 data-pw-id="main-heading"><?= $page->get("long_title|title") ?></h1>
      
      <ol class="bread">

      <?php  $parents = $page->parents;

        foreach($parents as $parent) {
            $url = $parent->url;
            echo "<li><a href='$url'><span>{$parent->title}</span></a></li>\n &gt;";
        }

        // show current / "we are here" page as well, but not as link: (last element)
        echo "<li><span>{$page->title}</span></li>\n";

       
      ?>

      </ol>
      
    </div>
  </header>


  <div class="container">

    <div class="inner inner-two-col row">

      <!-- START MAIN CONTENT -->
      <div class="col-lg-8 col-md-8" data-pw-id="main-content">
        <p>this is the main content</p>
      </div>
      <!-- END MAIN CONTENT -->

      <!-- START SIDEBAR -->
      <div class="col-lg-4 col-md-4" data-pw-id="right-sidebar">
        <p>this is the sidebar</p>      
      </div>
      <!-- END SIDEBAR -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</div>
<!-- /id main -->