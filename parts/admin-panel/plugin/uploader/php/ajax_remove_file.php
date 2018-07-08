<?php
if (isset($_POST['file'])) {
    $file = $_SERVER['DOCUMENT_ROOT'].'/parts/admin-panel/uploads/' . $_POST['file'];
	
    if(file_exists($file))
		unlink($file);
}