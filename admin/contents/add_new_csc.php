<div class="page_title bold"><?php echo $page_Lang['add_new_country_state_city'][$dataUserPageLanguage];?></div>
<!--Total Statiscit STARTED-->
<div class="global_right_wrapper">
   <div class="global_box_container_w bgc">
        <div class="general_settings_header_title"><?php echo $page_Lang['add_new_country'][$dataUserPageLanguage];?></div>
        <div class="row-box-container" id="set_lang"> 
               <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input placeholder="<?php echo $page_Lang['new_country_name'][$dataUserPageLanguage];?>"  id="new_countryname" type="text" class="invidval csc">
                      <label for="new_countryname"><?php echo $page_Lang['new_country_name_info'][$dataUserPageLanguage];?></label> 
                    </div> 
               </span>
               <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input placeholder="<?php echo $page_Lang['new_country_short_code'][$dataUserPageLanguage];?>"  id="new_countrycode" type="text" class="invidval csc">
                      <label for="new_countrycode"><?php echo $page_Lang['new_country_short_code_info'][$dataUserPageLanguage];?></label> 
                    </div> 
               </span>
               <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input placeholder="<?php echo $page_Lang['new_country_phone_code'][$dataUserPageLanguage];?>"  id="new_countryphonecode" type="text" class="invidval csc">
                      <label for="new_countryphonecode"><?php echo $page_Lang['new_country_phone_code_info'][$dataUserPageLanguage];?></label> 
                    </div> 
               </span>
               <!----> 
               <div class="setting-box">
                   <div class="column-set_input_box">
                       <div class="btn waves-effect waves-light blue saveNewCountry" data-type="saveNewCountry"><?php echo $page_Lang['save_new_country'][$dataUserPageLanguage];?> </div>
                   </div>
               </div>
               <!----> 
        </div> 
        <!--------------->
        <div class="general_settings_header_title_second"><?php echo $page_Lang['add_new_city'][$dataUserPageLanguage];?></div>
        <div class="row-box-container" id="set_nciy"> 
               <!---->
            <div class="setting-box-global" id="dflng">
                 <span class="input-field col s12">
                    <select class="selectCityName" id="ctname" data-type="selectCityName">
                      <option value="" disabled selected><?php echo $page_Lang['select_country_for_new_city'][$dataUserPageLanguage];?></option>  
                    <?php 
                    if($DotCountries){ 
                        foreach($DotCountries as $country){ 
                              $countrySortName = $country['sortname'];
                              $countryName = $country['name'];
                              $countryID = $country['id'];
                              $countryPhoneCode = $country['phonecode']; 
                              $selectedClass = '';
                    ?>   
                    <option value="<?php echo $countryID;?>"><?php echo $countryName;?></option>       
                    <?php }
                    }
                    ?>
                    </select> 
                  </span>
            </div>
            <!----> 
               <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input placeholder="<?php echo $page_Lang['new_city_name'][$dataUserPageLanguage];?>"  id="new_cityname" type="text" class="invidval csc">
                      <label for="new_cityname"><?php echo $page_Lang['new_state_name_in'][$dataUserPageLanguage];?></label> 
                    </div> 
               </span> 
               <div class="setting-box">
                   <div class="column-set_input_box">
                       <div class="btn waves-effect waves-light blue saveNewCity" data-type="saveNewCity"><?php echo $page_Lang['save_new_city'][$dataUserPageLanguage];?> </div>
                   </div>
               </div>
               <!----> 
        </div> 
        <!--------------->
        <!--------------->
        <div class="general_settings_header_title_second"><?php echo $page_Lang['add_new_state'][$dataUserPageLanguage];?></div>
        <div class="row-box-container" id="set_nciy"> 
               <!---->
            <div class="setting-box-global" id="dflng">
                 <span class="input-field col s12">
                    <select class="selectCityName" id="ctsname" data-type="selectStateName">
                      <option value="" disabled selected><?php echo $page_Lang['select_country_for_new_state'][$dataUserPageLanguage];?></option>  
                    <?php 
                    $allCitiess = $Dot->Dot_GetCityStatesAll();
                    if($allCitiess){ 
                        foreach($allCitiess as $country){  
                              $countryName = $country['name'];
                              $countryID = $country['id'];  
                    ?>   
                    <option value="<?php echo $countryID;?>"><?php echo $countryName;?></option>       
                    <?php }
                    }
                    ?>
                    </select> 
                  </span>
            </div>
            <!----> 
               <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input placeholder="<?php echo $page_Lang['new_state_name'][$dataUserPageLanguage];?>"  id="new_stname" type="text" class="invidval csc">
                      <label for="new_stname"><?php echo $page_Lang['new_state_name_in'][$dataUserPageLanguage];?></label> 
                    </div> 
               </span> 
               <div class="setting-box">
                   <div class="column-set_input_box">
                       <div class="btn waves-effect waves-light blue saveNewState" data-type="saveNewState"><?php echo $page_Lang['save_new_state'][$dataUserPageLanguage];?> </div>
                   </div>
               </div>
               <!----> 
        </div> 
        <!--------------->
    </div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
    $("body").on("click",".saveNewCountry", function(){
        var type = 'newCountry';
        var newCountryName = $("#new_countryname").val();
        var newCountryShortName = $("#new_countrycode").val();
        var newCountryPhoneCode = $("#new_countryphonecode").val();
        if(newCountryName.length === 0 ) {
            $("#new_countryname").css("border-bottom-color", "red");
            return false;
        }else{
            $("#new_countryname").css("border-bottom-color", "#e7e7e7");
        }
        if(newCountryShortName.length === 0 ) {
            $("#new_countrycode").css("border-bottom-color", "red");
            return false;
        }else{
            $("#new_countrycode").css("border-bottom-color", "#e7e7e7");
        }
        var data = 'f='+type+'&countryName='+newCountryName+'&countryshortname='+newCountryShortName+'&countryphonecode='+newCountryPhoneCode;
        $.ajax({
		  type: "POST",
		  url: requestUrl + 'admin/requests/request',
		  data: data,
		  cache: false,
		  beforeSend: function(){
			 $("#set_lang").append('<span class="preloadCom"><span class="progress"><span class="indeterminate"></span></span></span>');
		  },
		  success: function(response) {
			  $(".csc").val('');
			  $(".preloadCom").remove();  
			  $(".confirmBoxContainer").remove();
			   M.toast({html: response}); 
		  }
		});
    });
    $("body").on("click",".saveNewCity", function(){
        var type = 'saveNewCity';
        var newCityID = $("#ctname").val();
        var newCityName = $("#new_cityname").val();


        if($('#ctname option').filter(':selected').val()){
            $("input.select-dropdown").css("border-bottom-color", "#e7e7e7");
        }else{
            $("input.select-dropdown").css("border-bottom-color", "red");
           return false;
        }

        if(newCityName.length === 0 ) {
            $("#new_cityname").css("border-bottom-color", "red");
            return false;
        }else{
            $("#new_cityname").css("border-bottom-color", "#e7e7e7");
        }

        var data = 'f='+type+'&ctid='+newCityID+'&ctnam='+newCityName; 
        $.ajax({
		  type: "POST",
		  url: requestUrl + 'admin/requests/request',
		  data: data,
		  cache: false,
		  beforeSend: function(){
			 $("#set_nciy").append('<span class="preloadCom"><span class="progress"><span class="indeterminate"></span></span></span>');
		  },
		  success: function(response) {
			  $(".csc").val('');
			  $(".preloadCom").remove();  
			  $(".confirmBoxContainer").remove();
			   M.toast({html: response}); 
		  }
		});
    });
    $("body").on("click",".saveNewState", function(){
        var type = 'saveNewState';
        var newStateID = $("#ctsname").val();
        var newStateName = $("#new_stname").val();


        if($('#ctsname option').filter(':selected').val()){
            $("input.select-dropdown").css("border-bottom-color", "#e7e7e7");
        }else{
            $("input.select-dropdown").css("border-bottom-color", "red");
           return false;
        }

        if(newStateName.length === 0 ) {
            $("#new_stname").css("border-bottom-color", "red");
            return false;
        }else{
            $("#new_stname").css("border-bottom-color", "#e7e7e7");
        }
        var data = 'f='+type+'&cityid='+newStateID+'&newstatename='+newStateName;
        $.ajax({
		  type: "POST",
		  url: requestUrl + 'admin/requests/request',
		  data: data,
		  cache: false,
		  beforeSend: function(){
			 $("#set_nciy").append('<span class="preloadCom"><span class="progress"><span class="indeterminate"></span></span></span>');
		  },
		  success: function(response) {
			  $(".csc").val('');
			  $(".preloadCom").remove();  
			  $(".confirmBoxContainer").remove();
			   M.toast({html: response}); 
		  }
		});
    });
});
 </script>