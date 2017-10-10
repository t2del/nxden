<?php
function section($file, $conn) {
	include($file.'.php');
}
function spacer($var) { // $var is the value for the height
	include('spacer.php');
}

function quotes($conn) {
	$qry="select * from random_quote ORDER BY RAND() LIMIT 1";
	$result_info = $conn->query($qry);
	$row_info = $result_info->fetch_assoc();
	echo '<p class="lead text-center">"'.$row_info['quote'].'"<br>-'.$row_info['author']."</p>";
}

function information_details($info_section, $conn) {
	$qry="select * from information where info_section='".$info_section."'";
	$result_info = $conn->query($qry);
	$row_info = $result_info->fetch_assoc();
	return $row_info['info_details'];
}

function project_assignment($project_id, $conn) {
	$project_type="";
	$qry_proj_assignment="select * from project_type_assignment, project_type where project_type_assignment.project_type_id=project_type.project_type_id and project_type_assignment.project_id='".$project_id."'";
	$result_proj_assignment = $conn->query($qry_proj_assignment);
	while($project_assignment = $result_proj_assignment->fetch_assoc()) 
	{
		$project_type = $project_type.' '.$project_assignment['project_type'];
	}
	echo $project_type;
}

function socials($conn) {
	echo '<ul class="icons alt">';
	echo '	<li><a href="'.information_details("twitter",$conn).'" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>';
	echo '	<li><a href="'.information_details("facebook",$conn).'" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>';
	echo '	<li><a href="'.information_details("linkedin",$conn).'" target="_blank" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>';
	echo '	<li><a href="'.information_details("github",$conn).'" target="_blank" class="icon alt fa-github"><span class="label">GitHub</span></a></li>';
	echo '</ul>';
}

?>