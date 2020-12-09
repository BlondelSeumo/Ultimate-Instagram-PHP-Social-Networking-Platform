<?php 
 include_once '../functions/control.php';
 include_once '../functions/inc.php';  
 include_once '../functions/s3.php'; 
 if(isset($_POST['t'])){
     $type = mysqli_real_escape_string($db, $_POST['t']);
	 // Crop and Upload Avatar
     if($type == 'avatar'){
          $dataImage = mysqli_real_escape_string($db, $_POST['image']);
          $image_array_1 = explode(";", $dataImage); 
          $image_array_2 = explode(",", $image_array_1[1]); 
          $data = base64_decode($image_array_2[1]);
          $imageName = 'avatar_'.time() .$uid. '.png';  
          $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
          if(strlen($imageName)) {
               $ext = getExtension($imageName);
               if(in_array($ext,$valid_formats)) {
                    if($size<(50024*50024)) { // Check the image size   
                         // Change the image ame   							
                         if(file_put_contents($avatarPath.$imageName, $data)) { 
                              // Upload an image from the uploads file
                              $newdata=$Dot->Dot_AvatarUpload($uid,$imageName);
                              $getAvatarID = $Dot->Dot_GetAvatarID($uid, $imageName); 

                              if($amazons3UploadStatus == '1'){
                                   $theName = '../uploads/avatar/'.$imageName;
                                   $key = basename($theName);
                                   try {
                                        $result = $s3->putObject([
                                             'Bucket' => $amazons3UploadBucket,
                                             'Key' => 'avatar/' . $key,
                                             'Body' => fopen($theName, 'r+'),
                                             'ACL' => 'public-read',
                                             'CacheControl' => 'max-age=3153600'
                                        ]); 
                                        $AvatarSourceUrl = $result->get('ObjectURL');
                                        unlink($avatarPath . $imageName);
                                   } catch (Aws\S3\Exception\S3Exception $e) {
                                        echo "There was an error uploading the file.\n";
                                        echo $e->getMessage();
                                   }
                              }else{
                                   $AvatarSourceUrl = $base_url . 'uploads/avatar/' . $imageName;
                              } 
                              if($newdata) { 
                                   echo $AvatarSourceUrl;
                              }
                         } else {
                              echo "Fail upload folder with read access.";
                         }
                    } else {
                         echo "Image file size max 1 MB";		
                    }
               } else {
                    echo "invalidimage";
               }
          } else {
			echo "Please select image..!";
			exit;
	      }
     }
	 // Upload Croped Cover
     if($type == 'cover'){
          $dataImage = mysqli_real_escape_string($db, $_POST['image']);
          $image_array_1 = explode(";", $dataImage); 
          $image_array_2 = explode(",", $image_array_1[1]); 
          $data = base64_decode($image_array_2[1]);
          $imageName = 'cover_'.time() .$uid. '.png';  
          $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
          if(strlen($imageName)) {
               $ext = getExtension($imageName);
               if(in_array($ext,$valid_formats)) {
                    if($size<(50024*50024)) { // Check the image size   
                         // Change the image ame   							
                         if(file_put_contents($coverPath.$imageName, $data)) { 
                              // Upload an image from the uploads file
                              $newdata=$Dot->Dot_CoverUpload($uid,$imageName);
                              $getAvatarID = $Dot->Dot_GetCoverID($uid, $imageName); 
                              if($amazons3UploadStatus == '1'){
                                   $theName = '../uploads/cover/'.$imageName;
                                   $key = basename($theName);
                                   try {
                                        $result = $s3->putObject([
                                             'Bucket' => $amazons3UploadBucket,
                                             'Key' => 'cover/' . $key,
                                             'Body' => fopen($theName, 'r+'),
                                             'ACL' => 'public-read',
                                             'CacheControl' => 'max-age=3153600'
                                        ]); 
                                        $CoverSourceUrl = $result->get('ObjectURL');
                                        unlink($coverPath . $imageName);
                                   } catch (Aws\S3\Exception\S3Exception $e) {
                                        echo "There was an error uploading the file.\n";
                                        echo $e->getMessage();
                                   }
                              }else{
                                   $CoverSourceUrl = $base_url . 'uploads/cover/' . $imageName;
                              } 
                              if($newdata) { 
                                   echo '<div class="CoverImage img-thumbnail" style="background-image: url('.$CoverSourceUrl.'); "></div>';
                              }
                         } else {
                              echo "Fail upload folder with read access.";
                         }
                    } else {
                         echo "Image file size max 1 MB";		
                    }
               } else {
                    echo "invalidimage";
               }
          } else {
			echo "Please select image..!";
			exit;
	      }
     }	   
	 // Crop and Upload Event Cover
     if($type == 'e_cover'){
		  $eventID = mysqli_real_escape_string($db, $_POST['e']);
          $dataImage = mysqli_real_escape_string($db, $_POST['image']);
          $image_array_1 = explode(";", $dataImage); 
          $image_array_2 = explode(",", $image_array_1[1]); 
          $data = base64_decode($image_array_2[1]);
          $imageName = 'event_cover_'.time() .$eventID. '.png';  
          $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
          if(strlen($imageName)) {
               $ext = getExtension($imageName);
               if(in_array($ext,$valid_formats)) {
                    if($size<(50024*50024)) { // Check the image size   
                         // Change the image ame   							
                         if(file_put_contents($eventCoverPath.$imageName, $data)) { 
                              // Upload an image from the uploads file
                              $newdata=$Dot->Dot_EventCoverUpdate($eventID,$uid,$imageName); 
                              if($newdata) { 
                                   echo $base_url.'uploads/event__type_covers/'.$imageName;
                              }
                         } else {
                              echo "Fail upload folder with read access.";
                         }
                    } else {
                         echo "Image file size max 1 MB";		
                    }
               } else {
                    echo "invalidimage";
               }
          } else {
			echo "Please select image..!";
			exit;
	      }
     }
 }
?>