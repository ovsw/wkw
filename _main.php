<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="<?= $page->seo->description ?>">
	<meta name="author" content="OVS Websites">
	<link rel="icon" type="image/png" href="<?= $config->urls->templates ?>images/favicon.png"> 

  <title><?= $page->seo->title ?></title>
  
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= $page->seo->title ?>" />
  <meta property="og:description" content="<?= $page->seo->description ?>" />
  <meta property="og:url" content="https://wekillweeds.com/" />
  <meta property="og:site_name" content="CUSTOM WEED &amp; PEST CONTROL" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="<?= $page->seo->description ?>" />
  <meta name="twitter:title" content="<?= $page->seo->title ?>" />

  <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/wekillweeds.com\/","name":"Custom Weed and Pest Control","potentialAction":{"@type":"SearchAction","target":"http:\/\/wekillweeds.com\/search?q={search_term_string}","query-input":"required name=search_term_string"}}</script>
  <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","url":"http:\/\/wekillweeds.com\/","sameAs":[],"@id":"#organization","name":"Custom Weed and Pest Control","logo":"<?= $config->urls->templates ?>images/wkw-logo-t.png"}</script>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="We Kill Weeds">
	<meta name="application-name" content="We Kill Weeds">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="msapplication-config" content="/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<link href="<?= $config->urls->templates ?>css/bootstrap-grid.css" rel="stylesheet">
	<link href="<?= $config->urls->templates ?>css/font-awesome.css" rel="stylesheet">
	<link href="<?= $config->urls->templates ?>css/swiper.css" rel="stylesheet">
	<link href="<?= $config->urls->templates ?>css/swipebox.css" rel="stylesheet">
	<link href="<?= $config->urls->templates ?>css/zoomslider.css" rel="stylesheet">
	<link href="<?= $config->urls->templates ?>css/style.css" rel="stylesheet">
	<link href="<?= $config->urls->templates ?>css/custom.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800%7COpen+Sans:400,600,700" rel="stylesheet"> 

	<script type="text/javascript" src="<?= $config->urls->templates ?>js/modernizr-2.6.2.min.js"></script>
</head>
<body>
  
  <?php require($config->paths->templates.'includes/main-nav.inc') ?>
  
  <pw-region id="main">...</pw-region>

  <div class="container relative">	
    <div id="subscribe">
      <div class="item">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h3 class="white no-bg">Subscribe</h3>
            <h4 class="black no-bg">For special offers</h4>
          </div>
          <div class="col-md-5 col-sm-12">
            <form>
              <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="">
                <span class="input-group-btn">
                  <input type="submit" class="btn btn-black btn-white-hover" value="Subscribe">				
                </span>
              </div>
            </form>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="social-box">
              <h6>Social Media:</h6>
              <ul class="social social-small social-white">
                <li><a href="https://www.facebook.com/Custom-Weed-Spray-Service-Inc-160161285731/" class="fa fa-facebook"></a></li>
                <li><a href="https://twitter.com/wekillweeds" class="fa fa-twitter"></a></li>
                <!-- <li><a href="#" class="fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li> -->
              </ul>							
            </div>
          </div>				
        </div>
      </div>
    </div>
  </div>

  <div id="block-footer">
    <div class="container">

      <div class="row">

        <?php 

          $footerPages1 = $homePage->footer_nav_1;
          $footerPages2 = $homePage->footer_nav_2;
          $footerPages3 = $homePage->footer_nav_3;
          $footerPages4 = $homePage->footer_nav_4;


          $footerMenuOptions = array(
						'parent_class' => 'parent',
						'current_class' => 'current_page_item',
						'has_children_class' => 'hasSub',
						'levels' => false,
						'levels_prefix' => 'level-',
						'max_levels' => 1,
						'firstlast' => false,
						'collapsed' => false,
						'show_root' => false,
						'selector' => 'parent!=1156',
						'selector_field' => 'nav_selector',
						'outer_tpl' => '<ul class="crocus footer-nav">||</ul>',
						'inner_tpl' => '<ul class="sub-menu">||</ul>',
						'list_tpl' => '<li%s>||</li>',
						'list_field_class' => '',
						'item_tpl' => '<a href="{url}">{title}</a>',
						'item_current_tpl' => '<a href="{url}">{title}</a>',
						'xtemplates' => '',
						'xitem_tpl' => '<a href="{url}">{title}</a>',
						'xitem_current_tpl' => '<span>{title}</span>',
						'date_format' => 'Y/m/d',
						'code_formatting' => false,
						'debug' => false
          );
          
         ?>
        <div class="col-md-5 col-sm-4 col-ms-4 col matchHeight">
        <br><img src="<?= $config->urls->templates ?>images/wkw-logo-transparent-on-dark.png" alt="Custom Weed and Pest Contol Arizona Logo" class="footer_logo"><br><br>
          <p>Custom Weed &amp; Pest Control has served homes and businesses throughout Arizona for over 25 years. We look forward to helping you keep your property beautiful.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-ms-4 col matchHeight">
          <?= $treeMenu->render($footerMenuOptions, null, $footerPages1); ?>
        </div>
        <div class="col-md-3 col-sm-4 col-ms-4 col matchHeight">
          <?= $treeMenu->render($footerMenuOptions, null, $footerPages2); ?>
        </div>
      </div>  
      <!-- /.row -->
            <hr style="border-color: #92c43d">
      <div class="row" style="margin-top:50px;">

        <div class="col-md-5 col-sm-4 col-ms-4 col matchHeight">
          <br>
          <span class="fa fa-location-arrow"></span>
          <p>Peoria, Phoenix, AZ</p>
        </div>
        <div class="col-md-4 col-sm-4 col-ms-4 col matchHeight">
        <br>
          <span class="fa fa-phone-square"></span>
          <p>Tel: <a href="tel:602-956-3844">(602) 956-3844</a>
          <br>
          Fax: (623) 376-7743</p>
        </div>
        <div class="col-md-3 col-sm-4 col-ms-4 col matchHeight">
        <br>
          <span class="fa fa-envelope"></span>
          <p><a href="mailto:info@wekillweeds.com">info@wekillweeds.com</a></p>
        </div>

      </div>
      <!-- /.row -->
    </div>
  </div>

  <footer>
  <div class="container">
    All Rights Reserved &copy;<?= date("Y") ?> Custom Weed &amp; Pest Control | website by <a href="https://ovswebsites.com">OVS Websites</a>
  </div>
  </footer>

  <?php
    if($page->editable()) {
      echo '<a class="editLink" href='.$page->editUrl.'>Edit this page</a>';
    }
  ?>

  <script>var base_href = '/';</script>
	<!-- <script type="text/javascript" src="<?= $config->urls->templates ?>js/jquery.min.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>	 -->
	<script type="text/javascript" src="<?= $config->urls->templates ?>js/plugins.js"></script>		
	<script src="<?= $config->urls->templates ?>js/map-style.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>	
	<script type="text/javascript" src="<?= $config->urls->templates ?>js/scripts.js"></script>
	<script type="text/javascript" src="<?= $config->urls->templates ?>js/custom.js"></script>
	<!-- <script type="text/javascript" src="<?= $config->urls->templates ?>js/jquery.pixlayout.min.js"></script>	 -->

</body>
</html>