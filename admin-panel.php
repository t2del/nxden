<?php
if(include('confg.php')) {

	section_admin('admin/header-admin', $conn);
	section_admin('admin/admin-body', $conn);
}
?>