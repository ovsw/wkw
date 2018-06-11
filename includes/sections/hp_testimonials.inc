<section id="testimonials" class="parallax" style="background-image : url(<?= $config->urls->templates ?>images/_parallax2.jpg);">
			<div class="container">
				<h2 class="no-bg center"><span class="white">What our</span> Clients say</h2>
				<div class="swiper-container row" id="testimonials-slider">
					<div class="swiper-wrapper">

					<?php foreach($page->featured_testimoanials as $testimonial) : ?>

						<div class="col-md-4 col-sm-6 swiper-slide">
							<div class="item matchHeight">
								<div class="text">
									<?= $testimonial->testimonial_text ?>
								</div>
								<div class="author">
									<img src="<?= $config->urls->templates ?>images/_client-1.jpg" alt="Client">
									<div class="name"><?= $testimonial->title ?></div>
									<!-- <div class="subheader">Nurse</div> -->
								</div>
							</div>
						</div>	

					<?php endforeach; ?>

						</div>					</div>
					<div class="navigation"><a href="#" class="arrow-left fa fa-chevron-left"></a></div>
					<div class="navigation"><a href="#" class="arrow-right fa fa-chevron-right"></a></div>				
				</div>
			</div>
    </section>