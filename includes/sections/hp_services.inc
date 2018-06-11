<section id="services" style="padding-bottom:10px;">
			<div class="container">
				<h2 class="center corners"><span class="black">Our</span> Services</h2>
        <p>Our weed &amp; pest control technicians are trained in the latest and most effective methods and are committed to providing the best service in Arizona. They will assess the condition of your residence or business and execute a treatment plan that will leave your yard looking its best. </p>

				<div class="row items swiper-container" id="services-slider">
			        <div class="swiper-wrapper">

                <?php $featuredServices = $pages->get('1')->hp_services; foreach($featuredServices as $service) : ?>

                <div class="col-md-3 col-ms-6 col-xs-12 swiper-slide">
                  <div class="icon"><img src="<?= $service->single_image->url ?>" alt="<?= $service->title ?>"></div>
                  <h4><?= $service->title ?></h4>
                  <p><?= $service->short_description ?></p>
                  <a href="<?= $service->single_page_select->url ?>" class="btn btn-green btn-xs">read more</a>
                </div>

                <?php endforeach; ?>
			        
              </div>
					<div class="navigation">
						<a href="#" class="arrow-left fa fa-chevron-left"></a>
						<a href="#" class="arrow-right fa fa-chevron-right"></a>
					</div>				
				</div>
			</div>
		</section>
