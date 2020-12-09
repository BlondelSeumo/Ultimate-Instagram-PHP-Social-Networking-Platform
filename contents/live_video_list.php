<?php 
if($LiveVideos){
echo '<span class="swiper-container thliveVid"><span class="swiper-wrapper">';	
echo '
  <div class="swiper-slide livingVideo">
    <a href="'.$base_url.'myLive">
    <div class="livingVideoC lvCGrad">
       <div class="livingVideoOwnerAvatar" style="background-image:url('.$dataUserAvatar.');"></div>
      <span class="videoIconLiveStart">
        <span class="lvicStart lvCGrad">Live</span>
      </span>
    </div>
    <div class="lvUnameStart">'.$page_Lang['create_a_live_stream'][$dataUserPageLanguage].'</div>
    </a>
  </div>
';
	foreach($LiveVideos as $lv) {
		$liveVideoID = $lv['live_id']; 
		$liveVideoCreatorUserID = $lv['live_uid_fk']; 
		$liveVideoStatus = $lv['live_status'];
		$liveVideoUserAvatar = $Dot->Dot_UserAvatar($liveVideoCreatorUserID, $base_url);
    $liveVideoUserName = $Dot->Dot_GetUserName($liveVideoCreatorUserID); 
    $liveVideoUserFullname = $Dot->Dot_UserFullName($liveVideoCreatorUserID);
if($liveVideoStatus == 1){ 
?> 
  <div class="swiper-slide livingVideo">
    <a href="<?php echo $base_url;?>live/<?php echo $liveVideoUserName;?>">
    <div class="livingVideoC lvCGrad">
       <div class="livingVideoOwnerAvatar" style="background-image:url('<?php echo $liveVideoUserAvatar;?>');"></div>
      <span class="videoIconLive">
        <span class="lvic lvCGrad"><?php echo $Dot->Dot_SelectedMenuIcon('live_video_icon_front');?></span>
      </span>
    </div>
    <div class="lvUname"><?php echo $liveVideoUserFullname;?></div>
    </a>
  </div>  
<?php }else{?>
  <div class="swiper-slide livingVideo"> 
    <div class="livingVideoC lvCGradNone">
      <div class="livingVideoOwnerAvatar" style="background-image:url('<?php echo $liveVideoUserAvatar;?>');"></div>
      <span class="videoIconLive">
        <span class="lvic lvCGradNone"><?php echo $Dot->Dot_SelectedMenuIcon('live_video_icon_front');?></span>
      </span> 
    </div> 
    <div class="lvUname"><?php echo $liveVideoUserFullname;?></div> 
  </div> 
<?php } }
echo '</span></span><div class="swiper-button-next"></div><div class="swiper-button-prev"></div>';
//echo "<script> var swiper = new Swiper('.thliveVid', { slidesPerView: 'auto',  spaceBetween: 2,  freeMode: true, navigation: {nextEl: '.swiper-button-next',prevEl: '.swiper-button-prev',  }  }); </script>";
}else{?>
<div class="noVideoStreamsCnt"> 
<div class="swiper-slide livingVideo">
    <a href="<?php echo $base_url;?>myLive">
    <div class="livingVideoC lvCGrad">
       <div class="livingVideoOwnerAvatar" style="background-image:url(<?php echo $dataUserAvatar;?>);"></div>
      <span class="videoIconLiveStart">
        <span class="lvicStart lvCGrad">Live</span>
      </span>
    </div>
    <div class="lvUnameStart"><?php echo $page_Lang['create_a_live_stream'][$dataUserPageLanguage];?></div>
    </a>
  </div>
</div>
<?php } ?>   
<script> 


</script>