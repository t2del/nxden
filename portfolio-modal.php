<?php	
    $qry_proj_modal = "select * from project order by project_name ASC";
	$result_project_modal = $conn->query($qry_proj_modal);
	while($project_modal = $result_project_modal->fetch_assoc())
	{
?>
<div class="section-modal modal fade" id="portfolio-modal-<?php echo $project_modal['project_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            
            
            <div class="container">
                <div class="row modal-container">
                	<div style="background-color:#55acee; margin-bottom: 15px; color: #ffffff;">
                        <div class="col-sm-11">
                            <h2><?php echo $project_modal['project_name']; ?></h2>
                        </div>
                        <div class="col-sm-1">
                            <div class="close-modal" data-dismiss="modal">x</div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                	<div class="col-md-6">
                    	<p><?php echo nl2br($project_modal['project_description']); ?></p><br />
                        <p>Status: <?php echo ucfirst($project_modal['project_status']); ?></p>
                            <?php if($project_modal['project_site']=="")  {} else { ?><p>Website: <a href="http://<?php echo $project_modal['project_site']; ?>" target="_blank"><?php echo $project_modal['project_site']; ?></a></p>
                            <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/portfolio/<?php echo $project_modal['imgurl']; ?>" class="img-responsive" alt="..">
                    </div>
                    
                </div><!-- /.row -->
            </div>                
        </div>
</div>
<?php } ?>