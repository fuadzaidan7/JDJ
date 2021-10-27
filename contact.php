<?

?>
  <section id="orgchart" >
      <div class="container">

        <div class="section-title">         
          <p>Contact Us</p>
          <hr class="title-underline">
        </div>

        <div class="row content">
          <div class="col-lg-6 ">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          <div class="col-lg-6">           
            <div class="section-title text-center">     

              <p class="chart-company">JDJ TECHNOLOGY (M) SDN. BHD.<br><small class="chart-small">(1359495-U)</small></p>
              <p class="chart-company pt-3">JDJ METAL TRADING<br><small class="chart-small">(002687917-T)</small></p>

            </div>
          </div>

          <div class="col-lg-12 ">
          <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=3.0170248683316343,%20101.75686694851136&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>

        </div>
      </div>
  </section>
<?php 
