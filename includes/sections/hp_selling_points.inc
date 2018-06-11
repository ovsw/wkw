<section id="services">
    <div class="container">
      <h2 class="center corners"><span class="black">Why</span> Us?</h2>
      <p>Taking a thorough approach to our service, we manage and treat your entire property to prevent weeds and pests from returning.</p>

      <div class="row items row-eq-height">
          

            <?php $featuredServices = $pages->get('1')->hp_selling_points; foreach($featuredServices as $service) : ?>

            <div class="col-md-3 col-ms-6 col-xs-12 nonScrollingCards">
              <div class="icon"><img src="<?= $service->single_image->url ?>" alt="<?= $service->title ?>"></div>
              <h4><?= $service->title ?></h4>
              <p><?= $service->short_description ?></p>
              <!-- <a href="" class="btn btn-green btn-xs">read more</a> -->
            </div>				
            
            <?php endforeach; ?>

          
        			
      </div>
    </div>
  </section>