<section id="portfolio" class="portfolio-section post featured">
	<header class="major">
            <h2>Projects</h2>
            <div class="filters text-center">
				<ul class="nav nav-pills">
					<li class="active">
                    	<a href="#" class="button special" data-filter="*">All</a>
                    </li>
                    <?php	
                   	$qry_proj_type = "select * from project_type order by project_type_id ASC";
					$result_project_type = $conn->query($qry_proj_type);
					while($project_type = $result_project_type->fetch_assoc())
					{
						echo '<li><a href="#" class="button special" data-filter=".'.$project_type['project_type'].'">'.$project_type['project_title'].'</a></li>';
					}
					?>
				</ul>
			</div>
            <?php spacer(20); // number is the height of spacer in px ?>
            
             
    </header>
    
   	<article>
		<!-- portfolio items start -->
        <div class="isotope-container row grid-space-20">
            <?php	
            $qry_proj = "select * from project order by project_name ASC";
            $result_project = $conn->query($qry_proj);
            while($project = $result_project->fetch_assoc())
            {
                include('project_box.php');
            }
            ?>
        </div>	
		<!-- portfolio items end -->
        
        
    </article>
    
    <div class="row"></div>
</section>

           