<section class="call-to-action contact services-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact <strong>Us</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
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
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                            	<div class="contact-info waves-effect">
                                    <h4>Contact info</h4>
                                    <ul>
                                        <li><i class="fa fa-envelope-o pr-10"></i> <?php information_details('email'); ?></li>
                                        <li><i class="fa fa-phone pr-10"></i> <?php information_details('ci_phone_ph'); ?></li>
                                        <li><i class="fa fa-phone pr-10"></i> <?php information_details('ci_phone_sg'); ?></li>
                                        <li><i class="fa fa-map-marker pr-10"></i> <?php information_details('address'); ?></li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="clearfix"></div>
                            
                        </div>
                    </form>
                </div>
        </div>
</section>