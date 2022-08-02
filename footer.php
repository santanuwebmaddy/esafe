    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget">
              <img src="img/logo-white.png" alt="" class="img-responsive footer-logo">
              <h4>E Safe Repairs Ltd</h4>
              <p class="text-sm">Registered in England & Wales</p>
              <p class="footer-address">
                120 Market Street, Bournemouth, Poole, BH6 HT6
              </p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="widget">
              <h4>Quick Links</h4>
              <ul class="list-unstyled footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget">
              <h4>Quick Links</h4>
              <ul class="list-unstyled footer-links">
                <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget">
              <h4>Get in touch</h4>
              <ul class="list-unstyled footer-links">
                <li><a href="#">info@esaferepairs.co.uk</a></li>
                <li>Helpline No. <a href="tel:08007747054 ">0800 774 7054 </a><small>9am to 5pm (monday - friday)</small></li>
              </ul>
              <img src="img/master-visa.png" alt="" class="img-responsive master-visa">
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">&copy; 2022 E Safe Repairs Ltd. Website by <a href="https://www.webmaddy.com" target="_blank">Webmaddy</a></p>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="mail/contact.js"></script>
    <script>
    $("#contact-form2").validate({
      rules: {
        name: {
          required: true
        },
        phone: {
          required: true,
          number: true
        }
      }
    });
    </script>
  </body>
</html>