public function uploadAction( )
	{
		$targetFolder = '/var/cielo_arquivos_terminal'; // Relative to the root
		//$targetFolder = 'uploads';

		$verifyToken = md5('unique_salt' . $_POST['timestamp']);

		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			//$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetPath = $targetFolder;
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
			
			// Validate the file type
			$fileTypes = array('jpg','jpeg','gif','png','csv'); // File extensions
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			
			if (in_array($fileParts['extension'],$fileTypes)) {
				move_uploaded_file($tempFile,$targetFile);
				echo '1';
			} else {
				echo 'Invalid file type.';
			}
		}
	}
