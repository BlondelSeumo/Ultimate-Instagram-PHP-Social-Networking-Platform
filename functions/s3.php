<?php 
include_once 'inc.php';

include_once 's3/vendor/autoload.php'; 

use Aws\S3\S3Client;
	
	// Instantiate an Amazon S3 client.
	$s3 = new S3Client([
		'version' => 'latest',
		'region' => $amazons3UploadRegion,
		'credentials' => [
			'key' => $amazons3UploadKey,
			'secret' => $amazons3UploadSecretKey,
		],
    ]);  