<div class="page_title bold"><?php echo $page_Lang['live_streamings_features'][$dataUserPageLanguage];?></div>
<div class="global_right_wrapper">
   <div class="global_box_container_w bgc">
       
        <div class="general_settings_header_title_second">Amazon S3 Storage (To Save All Uploaded Files On Amazon)</div>
        <!---->
        <!---->
        <div class="row-box-container" id="amazon">
              <!---->
                <span class="setting-box">
                   <span class="setSettingBox">
                      <div class="ckbx-style-14">
                          <input type="checkbox" id="amazonModes3" class="gstf" name="amazonModes3" <?php echo $amazons3UploadStatus == '1' ? "checked='checked'":""; echo $amazons3UploadStatus == '0' ? "value='1'":"value='0'";?>><label for="amazonModes3"></label>
                      </div>
                   </span>
                   <span class="setSettingBoxText"><?php echo $page_Lang['amazon_save_mode'][$dataUserPageLanguage];?></span>
                   <span class="setSettingBoxInfoNote"><?php echo $page_Lang['amazon_save_mode_note'][$dataUserPageLanguage];?></span>
                 </span>
                <!---->
                   <!---->
                   <span class="setting-box"> 
                       <span class="setSettinginputTitle">Amazon Bucket Name</span>  
                       <div class="column_set_input_box"><input type="text" class="column_inputField chng" id="amazonbucketname" placeholder="<?php echo $page_Lang['write_amazon_s_name'][$dataUserPageLanguage];?>" value="<?php echo $amazons3UploadBucket;?>"></div>
                   </span>
                   <!---->
                   <!---->
                   <span class="setting-box"> 
                       <span class="setSettinginputTitle">Amazon S3 Key</span>  
                       <div class="column_set_input_box"><input type="text" class="column_inputField chng" id="amazonskey" placeholder="<?php echo $page_Lang['write_amazon_s_key'][$dataUserPageLanguage];?>" value="<?php echo $amazons3UploadKey;?>"></div>
                   </span>
                   <!---->
                   <!---->
                   <span class="setting-box"> 
                       <span class="setSettinginputTitle">Amazon S3 Secret Key</span>  
                       <div class="column_set_input_box"><input type="text" class="column_inputField chng" id="amazonsskey" placeholder="<?php echo $page_Lang['write_amazon_ss_key'][$dataUserPageLanguage];?>" value="<?php echo $amazons3UploadSecretKey;?>"></div>
                   </span>
                   <!----> 
                   <!---->
                    <div class="setting-box-global" style="margin-top:10px;"> 
                         <span class="input-field col s12">
                            <select class="regions" id="regions"> 
                                  <option value="us-east-1" <?php echo $amazons3UploadRegion == 'us-east-1' ? "selected='selected'":"";?>>US East (N. Virginia)</option>
                                  <option value="us-east-2" <?php echo $amazons3UploadRegion == 'us-east-2' ? "selected='selected'":"";?>>US East (Ohio)</option>
                                  <option value="us-west-1" <?php echo $amazons3UploadRegion == 'us-west-1' ? "selected='selected'":"";?>>US West (N. California)</option>
                                  <option value="us-west-2" <?php echo $amazons3UploadRegion == 'us-west-2' ? "selected='selected'":"";?>>US West (Oregon)</option>
                                  <option value="ap-northeast-2" <?php echo $amazons3UploadRegion == 'ap-northeast-2' ? "selected='selected'":"";?>>Asia Pacific (Seoul)</option>
                                  <option value="ap-south-1" <?php echo $amazons3UploadRegion == 'ap-south-1' ? "selected='selected'":"";?>>Asia Pacific (Mumbai)</option>
                                  <option value="ap-southeast-1" <?php echo $amazons3UploadRegion == 'ap-southeast-1' ? "selected='selected'":"";?>>Asia Pacific (Singapore)</option>
                                  <option value="ap-southeast-2" <?php echo $amazons3UploadRegion == 'ap-southeast-2' ? "selected='selected'":"";?>>Asia Pacific (Sydney)</option>
                                  <option value="ap-northeast-1" <?php echo $amazons3UploadRegion == 'ap-northeast-1' ? "selected='selected'":"";?>>Asia Pacific (Tokyo)</option>
                                  <option value="ca-central-1" <?php echo $amazons3UploadRegion == 'ca-central-1' ? "selected='selected'":"";?>>Canada (Central)</option>
                                  <option value="eu-central-1" <?php echo $amazons3UploadRegion == 'eu-central-1' ? "selected='selected'":"";?>>EU (Frankfurt)</option>
                                  <option value="eu-west-1" <?php echo $amazons3UploadRegion == 'eu-west-1' ? "selected='selected'":"";?>>EU (Ireland)</option>
                                  <option value="eu-west-2" <?php echo $amazons3UploadRegion == 'eu-west-2' ? "selected='selected'":"";?>>EU (London)</option>
                                  <option value="sa-east-1" <?php echo $amazons3UploadRegion == 'sa-east-1' ? "selected='selected'":"";?>>South America (São Paulo)</option>
                            </select>
                            <label><?php echo $page_Lang['write_amazon_bucket_region'][$dataUserPageLanguage];?></label>
                          </span>
                    </div>
                    <!---->  
                     <!----> 
                       <div class="setting-box">
                           <div class="column-set_input_box">
                               <div class="saveTheSettings btn waves-effect waves-light blue amazonSets3" data-type="amazonSets3"><?php echo $page_Lang['save_news'][$dataUserPageLanguage];?></div>
                           </div>
                       </div>
                       <!----> 
        </div>
        <!---->
   </div>   
</div> 
<script type="text/javascript">
$(document).ready(function(){ 
$("body").on("click",".amazonSets3", function(){
   var type = $(this).attr("data-type");
   var bucketName = $("#amazonbucketname").val();
   var amazonKey = $("#amazonskey").val();
   var amazonSKey = $("#amazonsskey").val();
   var amazonRegion = $("#regions").val();
   var data = 'f='+type+'&bucketName='+encodeURIComponent(bucketName)+'&amazonKey='+encodeURIComponent(amazonKey)+'&amazonskey='+encodeURIComponent(amazonSKey)+'&region='+amazonRegion;
   $.ajax({
		  type: "POST",
		  url: requestUrl + 'admin/requests/request',
		  data: data,
		  cache: false,
		  beforeSend: function(){
			 $("#amazon").append('<span class="preloadCom"><span class="progress"><span class="indeterminate"></span></span></span>');
		  },
		  success: function(response) {
			  $(".preloadCom").remove(); 
			  M.toast({html: response}); 
		  }
   });
});
});
</script>