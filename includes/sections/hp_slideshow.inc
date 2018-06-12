  
  
  <section id="slider-full" class="slider-full" data-zs-bullets="true" data-zs-speed="22000" data-zs-interval="10000" data-zs-switchSpeed="400" data-zs-src='[<?php $i = 0; 
    foreach($pages->get('1')->home_slider as $slideImage) {
      echo '"'.$slideImage->getCrop("large")->url.'"'; $i++; 
      if ($i < count($pages->get('1')->home_slider)) {
        echo ',';
        } 
      } ?>]' data-zs-overlay="false">
    <div class="container">
        <h1><span class="green">We Kill</span> <span>Weeds &amp; Pests</span> <span>Anywhere</span></h1>
        <a href="#" class="btn btn-green btn-white-hover">About us</a>
        <!-- About -->
    </div>
  </section>