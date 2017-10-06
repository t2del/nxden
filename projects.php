<section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Projects</h2>
                        <?php spacer(20); // number is the height of spacer in px ?> 
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- Start Portfolio items -->
                    <ul id="portfolio-list">
                    	<?php	
                            $qry_proj = "select * from project order by project_name ASC";
							$result_project = $conn->query($qry_proj);
							while($project = $result_project->fetch_assoc())
							{
						?>
                        <li>
                            <div class="portfolio-item">
                                <img src="assets/images/portfolio/<?php echo $project['imgurl']; ?>" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4><?php echo $project['project_name']; ?></h4>
                                    <a href="#portfolio-modal-<?php echo $project['project_id']; ?>" data-toggle="modal" class="link-1" title="About - <?php echo $project['project_name']; ?>"><i class="fa fa-magic"></i></a>
                                    <a href="http://<?php echo $project['project_site']; ?>" class="link-2" target="_blank" title="View site"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>
</section>