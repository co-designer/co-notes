<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/admin-panel/plugin/uploader/class.fileuploader.php');
	
	// initialize FileUploader
    $FileUploader = new FileUploader('files', array(
        'uploadDir' => $_SERVER['DOCUMENT_ROOT'].'/parts/admin-panel/uploads/',
        'title' => 'name',
    ));
	
	// call to upload the files
    $data = $FileUploader->upload();

	// export to js
	echo json_encode($data);
	exit;