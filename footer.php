			<!-- Footer -->
					<footer id="footer">
						<section>
							<form name="sentMessage" id="contactForm">
								<div class="field">
									<input type="text" name="name" id="name" placeholder="Name" required />
								</div>
								<div class="field">
									<input type="text" name="email" id="email" placeholder="Email" required />
								</div>
								<div class="field">
									<textarea name="message" id="message" rows="3" placeholder="Message..." required></textarea>
								</div>
                                <div class="field">
									<input type="submit" value="Send Message" class="button fit" />
                                    <div id="success"></div>
								</div>
							</form>
						</section>
						<section class="split contact">
							<section>
								<h3>Address</h3>
								<p><?php echo information_details('address', $conn); ?></p>
							</section>
							<section>
								<h3>Phone</h3>
								<p>	PH <?php echo information_details('ci_phone_ph', $conn); ?><br>
                                	SG <?php echo information_details('ci_phone_sg', $conn); ?>
                                </p>
							</section>
							<section>
								<h3>Email</h3>
								<p><?php echo information_details('email', $conn); ?></p>
							</section>
							<section>
								<h3>Social</h3>
								<?php echo socials($conn); ?>
							</section>
						</section>
					</footer>

				

			</div>
			<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; <?php echo date("Y");?> NxDen.com</li><li>All rights reserved</li></ul>
					</div>
		<!-- Scripts -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>
<script type="text/javascript" src="assets/js/template.js"></script>  
<?php if($basefile=='index') { ?>
<script src="assets/js/jqBootstrapValidation.js"></script>
<?php } ?>
<script src="assets/js/contact_me.js"></script>       
	</body>
</html>