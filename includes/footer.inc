<div class="container relative">	
  <div id="subscribe">
    <div class="item">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h3 class="white no-bg">Subscribe Us</h3>
          <h4 class="black no-bg">For fresh special offers</h4>
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
            <h6>Join Our Social:</h6>
            <ul class="social social-small social-white">
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-facebook"></a></li>
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-google-plus"></a></li>
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
    <div class="col-md-3 col-sm-12 logo-div">
      <img src="<?= $config->urls->templates ?>images/logo-footer.png" alt="Logo">
    </div>
    <div class="col-md-3 col-sm-4 col-ms-4 col matchHeight">
      <span class="fa fa-location-arrow"></span>
      <p>Peoria, Phoenix, AZ</p>
    </div>
    <div class="col-md-3 col-sm-4 col-ms-4 col matchHeight">
      <span class="fa fa-phone-square"></span>
      <p>Tel: <a href="tel:602-956-3844">(602) 956-3844</a>
      <br>
      Fax: (623) 376-7743</p>
    </div>
    <div class="col-md-3 col-sm-4 col-ms-4 col matchHeight">
      <span class="fa fa-envelope"></span>
      <p><a href="mailto:info@wekillweeds.com">info@wekillweeds.com</a></p>
    </div>
  </div>
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