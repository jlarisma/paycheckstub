<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

if ( ! function_exists( 'wp_handle_upload' ) ) 
    require_once( ABSPATH . '/wp-admin/includes/file.php' );


if($_POST['crop'] == 'true')
{
	logoResize(); 
	return;
}

logoUpload();

function logoUpload()
{
	$image = $_FILES['image'];

	$validImg = ['image/png', 'image/jpeg', 'image/gif'];

	if(!in_array($image['type'], $validImg))
	{
		echo 'error';
		return;
	}

	$uploadDir = wp_upload_dir();
	
	$imageFile = $uploadDir['path'] .'/'. $image['name'];
	
	if(file_exists($imageFile))
		unlink($imageFile);

	$copyImage = wp_handle_upload($image, ['test_form' => FALSE, 'unique_filename_callback' => 'overwriteImage']);
	if(isset($copyImage['error']))
	{	
		echo 'error';
		return;
	} else {
		
		list($width, $height) = getimagesize($copyImage['file']);
		$ratio = ($width > 700 || $height > 600) ? 0.7 : 0;


		$resizedImg = image_resize($copyImage['file'], ($width - ($width*$ratio)), ($height - ($height*$ratio)), false, '_logo', $uploadDir['path'], 90);
		
		if(isset($resizedImg->errors))
		{
			echo 'error'; return;
		}

		if(file_exists($imageFile))
			unlink($imageFile);

		$newImage = explode('/', $resizedImg);

		preg_match('%(.*)/%', $copyImage['url'], $fileUrl);

		$return = [
			'url' => $fileUrl[0] . '/' . $newImage[count($newImage)-1],
			'filename' => $newImage[count($newImage)-1]
		];

		
		echo  stripslashes(json_encode($return, true));

	}


}

function logoResize()
{
	$uploadDir = wp_upload_dir();

	//$width = $height = 180;
	//$height = 40;

	$src = $uploadDir['path'] . '/' . $_POST['file'];
	
	list($width, $height) = getimagesize($src);

	$width = $width - ($width * 0.4);
	$height = $height - ($height * 0.4);

	preg_match('/^.*\.(jpg|jpeg|gif|png)$/i', $src, $imageType);

	switch($imageType[1])
	{
		case 'jpg':
		case 'jpeg':
			$createImg = imagecreatefromjpeg($src);
			$saveImg = 'imagejpeg';
		break;
		case 'gif': 
			$createImg = imagecreatefromgif($src);
			$saveImg = 'imagegif';
		break;
		case 'png':
			$createImg = imagecreatefrompng($src);
			$saveImg = 'imagepng';
		break;
		default:
			echo 'error';
			return;
		break;

	}
	
	$imageTc = ImageCreateTrueColor($width, $height);

	imagecopyresampled($imageTc,$createImg,0,0,$_POST['x1'],$_POST['y1'], $width,$height,$_POST['w'],$_POST['h']);

	$saveImg($imageTc, $src);
	imagedestroy($imageTc);

	echo $uploadDir['url'] . '/' . $_POST['file'];
}

?>