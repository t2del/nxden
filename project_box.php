<div class="col-sm-6 col-md-3 col-xs-12 isotope-item <?php project_assignment($project['project_id'], $conn); ?>">
		
        <div class="image-box"> <?php // begin Preview box ?>
			<div class="overlay-container">
				<img src="assets/images/project/<?php echo $project['imgurl']; ?>" alt="">
					<a class="overlay" data-toggle="modal" data-target="#project-<?php echo $project['project_id']; ?>">
						<i class="fa fa-search-plus"></i>
						<span><?php echo $project['project_name']; ?></span> <?php // project type ?>
					</a>
			</div>
			<!--<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-<?php echo $project['project_id']; ?>"><?php echo $project['project_name']; ?></a>-->
		</div> <?php // end Preview box ?>

	
	<div class="modal fade" id="project-<?php echo $project['project_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php echo $project['project_id']; ?>-label" aria-hidden="true"> <?php // begin description box ?>
        <div class="modal-dialog modal-lg">
            <div class="modal-content"> 
				<div class="modal-header">
					<a type="button" class="close icon alt fa-close" data-dismiss="modal"></a>
					<h4 class="modal-title" id="project-<?php echo $project['project_id']; ?>-label"><?php echo $project['project_name']; ?></h4>
				</div>
                <div class="modal-body"><?php // begin modal body ?>
					<div class="row">
                		<div class="col-md-6">
							<p><?php echo nl2br($project['project_description']); ?></p>
                            <p>Status: <?php echo ucfirst($project['project_status']); ?></p>
                            <?php if($project['project_site']=="")  {} else { ?><p>Website: <a href="http://<?php echo $project['project_site']; ?>" target="_blank"><?php echo $project['project_site']; ?></a></p>
                            <?php } ?>
						</div>
						<div class="col-md-6">
                        	<img src="assets/images/project/<?php echo $project['imgurl']; ?>" alt="">
                        </div>
                    </div>
				</div><?php // end modal body ?>
                <div class="modal-footer"><button type="button" class="button" data-dismiss="modal">Close</button></div>
			</div>
		</div>
	</div> <?php // end description box ?>

</div>