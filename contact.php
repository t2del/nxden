<section id="contact" class="contact contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Contact  Us</h2>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                        	<div class="col-md-1 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms"></div>
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group waves-effect">
                                    <input type="text" class="form-control" placeholder="Name *" id="name" name="name" required >
                                </div>
                                <div class="form-group waves-effect">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" name="email" required >
                                </div>
                                <div class="form-group waves-effect">
                                    <input type="tel" class="form-control" placeholder="Phone *" id="phone" name="phone" required >
                                </div>
                                <div class="form-group waves-effect">
                                    <textarea class="form-control" placeholder="Message *" id="message" name="message" required ></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary waves-effect">Send Message</button>
                                    <div id="success"></div>
                                </div>
                            </div>
                            <div class="col-md-5 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                            	<div class="contact-info waves-effect">
                                    <h4>Contact info</h4>
                                    <ul>
                                        <li><i class="fa fa-envelope-o pr-10"></i> <?php information_details('email', $conn); ?></li>
                                        <li><i class="fa fa-phone pr-10"></i> <?php information_details('ci_phone_ph', $conn); ?></li>
                                        <li><i class="fa fa-phone pr-10"></i> <?php information_details('ci_phone_sg', $conn); ?></li>
                                        <li><i class="fa fa-map-marker pr-10"></i> <?php information_details('address', $conn); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
</section>