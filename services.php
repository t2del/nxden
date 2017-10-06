<section id="service" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Services</h2>
                        <?php spacer(20); // number is the height of spacer in px ?> 
                    </div>
                </div>
            </div>
            <div class="row">
            	<?php	
                   	$qry_srv = "SELECT * FROM services order by service_id DESC";
					$result_srv = $conn->query($qry_srv);
					while($srv = $result_srv->fetch_assoc())
					{
				?>	
            	<div class="col-md-4 col-sm-6">
                    <div class="service waves-effect">
                        <i class="fa <?php echo $srv['service_thumbs']; ?>"></i>
                        <div class="border"></div>
                        <div class="service-content">
                            <h4><?php echo $srv['service_title']; ?></h4>
                            <p><?php echo $srv['service_description']; ?></p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <?php } ?>           
            </div>
        </div>
    </section>