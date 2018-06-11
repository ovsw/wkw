<?php require($config->paths->templates.'layouts/sidebar-right.inc') ?>

<div class="text-page" data-pw-id="main-content">

  <?= $page->body; ?>

</div>


<div data-pw-id="right-sidebar">

  <nav class="menu-left">
    <ul>
        <?php foreach($pages->get('1')->hp_services as $service) : ?>
        <li><a href="<?= $service->single_page_select->url ?>" class="service-1"><span style="background-image: url(<?= $service->single_image->url ?>)"></span><?= $service->title ?></a></li>
        <?php endforeach; ?>
    </ul>
  </nav>

  <div class="special-sm hidden-ms hidden-xs">
    <section id="special-offer">
      <div class="item">
        <h3>Request Our Services</h3>
        <h2 class="no-bg">Get in touch now</h2>
        <p>Fill in the form below and we will get back to you ASAP.<br>You can also give us a call at <strong><a href="tel:6029563844">(602) 956 3844</a></strong>.</p>
        <div class="cognito">
          <script src="https://services.cognitoforms.com/s/xPoircp7HEGoNo_tpFEirg"></script>
          <script>Cognito.load("forms", { id: "141" });</script>
        </div>
      </div>
      </section>
  </div>

</div>

