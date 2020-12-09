<div class="currentLiveVideosWrapper">
<div class="liveRoomTitle">
<div class="roomsL"><?php echo $page_Lang['user_stories'][$dataUserPageLanguage];?></div>  

</div> 
<?php  
	 $FriendStories=$Dot->Dot_AllStoryPost($uid);
	 if($FriendStories){
		 echo '<div class="allLivVideos storyContainer" style="overflow: hidden; overflow-x: scroll;" id="story-view"><span class="thswpcntstry"><span class="swiper-wrapper">';
		 echo '
		 <form id="storiesform" method="post" enctype="multipart/form-data" action="'.$base_url.'requests/upload.php">  
		 <input type="file" name="storieimg" id="storie_img" data-id="stories">
			<label class="label_storyUpload" data-id="stories" for="storie_img"> 
		    <div class="story_view_item" style="background-image: url('.$dataUserAvatar.');">
			   <div class="newSto">
					<div class="plusSIc">
					   <div class="plstr">'.$Dot->Dot_SelectedMenuIcon('share_post_plus_icon').'</div>
				    </div>
					'.$page_Lang['create_new_ustatus'][$dataUserPageLanguage].'
			    </div> 
			</div>
			</label> 
	    </form>
		 ';
		 foreach($FriendStories as $storyData) {
		        $SotryUploaded = isset($storyData['pics']) ? $storyData['pics'] : NULL;
				$SotrySharedUserFullName = $storyData['user_fullname']; 
				$final_image=$base_url."uploads/stories/".$SotryUploaded;
				$StorySharedUserName = $storyData['user_name'];
				$StoryCreatedTime = $storyData['created']; 
				$storyID = $storyData['s_id'];
				$StorySharedUserID = $storyData['uid_fk'];
				$StorySharedUserAvatar = $Dot->Dot_UserAvatar($StorySharedUserID,$base_url);  
				$up = explode(",", $SotryUploaded);
				$getLastStoryImage = $Dot->Dot_GetLastSharedStatus($StorySharedUserID);
				if($getLastStoryImage){ 
				    if($amazons3UploadStatus == '1'){
					    $uLastStory = 'https://'.$amazons3UploadBucket.'.s3.'.$amazons3UploadRegion.'.amazonaws.com/stories/'. $getLastStoryImage; 
					}else{
						$fileImage = $base_url."uploads/stories/". $getLastStoryImage; 
						if(file_exists($fileImage) && filesize($fileImage) > 0) {  
							$uLastStory=$base_url."uploads/stories/". $getLastStoryImage;  
						} else {
							$uLastStory=$base_url."uploads/stories/". $getLastStoryImage; 
						}
					}
				}else{
				   $uLastStory = $StorySharedUserAvatar;
				}
				if(does_url_exists($uLastStory) == true){
					$storyTumbnail = $uLastStory;
				 }else{
					$storyTumbnail = $base_url.'uploads/images/safe_img.png';
				 }
				?>
                <div class="story-view-item" style="background-image: url(<?php echo $storyTumbnail;?>)" data-profile-image="<?php echo $StorySharedUserAvatar;?>" data-profile-name="<?php echo $SotrySharedUserFullName;?>">
                   <span class="name truncate"> <?php echo $SotrySharedUserFullName;?> </span>
                   <ul class="media">
                <?php  
				 foreach ($up as $item) {    
				  $extensionStory =''; 
				  $imageExtensions = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
				  $videoExtensions = array("mp4", "MP4");
				  $exts = pathinfo($item, PATHINFO_EXTENSION); 
				  if($amazons3UploadStatus == '1'){
					$final_image = 'https://'.$amazons3UploadBucket.'.s3.'.$amazons3UploadRegion.'.amazonaws.com/stories/'. $item; 
				  }else{
					 $fileImage = $base_url."uploads/stories/". $item; 
					 if(file_exists($fileImage) && filesize($fileImage) > 0) {  
						 $final_image=$base_url."uploads/stories/". $item;  
					 } else {
						$final_image=$base_url."uploads/stories/". $item; 
					 }
				  }
				  if(in_array($exts, $imageExtensions)){
					   $extensionStory = 'photo';
					   $theStory = '<li data-duration="7" data-sid="'.$storyID.'" data-id="'.$StorySharedUserID.'" data-time="'.$StoryCreatedTime.'"> <img src="'.$final_image.'"></li>'; 
				  }
				  if(in_array($exts, $videoExtensions)){
				       $extensionStory = 'video';
					   $theStory = '<li> <li class="move_'.$storyID.'"  data-duration="" data-id="'.$StorySharedUserID.'" data-time="'.$StoryCreatedTime.'"> <video id="aample'.$storyID.'" src="'.$final_image.'" type="video/webm"></video> </li> </li>';
					   echo '<script>$(document).ready(function () {var videoDuration =  document.getElementById("aample'.$storyID.'");var durationa = videoDuration.duration; $(".move_'.$storyID.'").attr("data-duration", durationa);}); </script>';
				  }  
				  echo $theStory; 
				   }?>
                 </ul>
        </div>	  
<?php } 
echo '</span></span></div>';
}else{ ?>
<div class="noVideoStreams">
<div class="fake-story-view-item-no"><form id="storiesform" method="post" enctype="multipart/form-data" action="<?php echo $base_url;?>requests/upload.php">  
		 <input type="file" name="storieimg" id="storie_img" data-id="stories">
			<label class="label_storyUpload" data-id="stories" for="storie_img"> 
		    <div class="story_view_item" style="background-image: url(<?php echo $dataUserAvatar;?>);">
			   <div class="newSto">
					<div class="plusSIc">
					   <div class="plstr"><?php echo $Dot->Dot_SelectedMenuIcon('share_post_plus_icon');?></div>
				    </div>
					<?php echo $page_Lang['create_new_ustatus'][$dataUserPageLanguage];?>
			    </div> 
			</div>
			</label> 
		</form> 
</div> 
</div>
<?php } ?>   
</div> 



