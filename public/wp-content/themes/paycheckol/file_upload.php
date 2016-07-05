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
	$copyImage = wp_handle_upload($image, ['test_form' => FALSE]);

	if(isset($copyImage['error']))
	echo 'error';
	else {
		
		$uploadDir = wp_upload_dir();
		$resizedImg = image_resize($copyImage['file'], 300, 290, false, '_logo', $uploadDir['path'], 90);

		$newImage = explode('/', $resizedImg);

		preg_match('%(.*)/%', $copyImage['url'], $fileUrl);

		$return = [
			'url' => $fileUrl[0] . '/' . $newImage[count($newImage)-1],
			'filename' => $newImage[count($newImage)-1]
		];

		//print_r($return);
		echo  stripslashes(json_encode($return, true));

	}


}


function logoResize()
{
	$uploadDir = wp_upload_dir();

	$targ_w = $targ_h = 150;
	$jpeg_quality = 90;

	$src = $uploadDir['path'] . '/' . $_POST['file'];
	//print_r($_POST); exit;
	$img_r = imagecreatefromjpeg($src);
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x1'],$_POST['y1'],
	    $targ_w,$targ_h,$_POST['w'],$_POST['h']);

	imagejpeg($dst_r, $src, $jpeg_quality);
	imagedestroy($dst_r);
}

?>