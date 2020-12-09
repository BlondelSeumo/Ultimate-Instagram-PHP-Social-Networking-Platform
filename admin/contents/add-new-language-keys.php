<div class="page_title bold"><?php echo isset($page_Lang['add_new_language_and_keys'][$dataUserPageLanguage]) ? $page_Lang['add_new_language_and_keys'][$dataUserPageLanguage] : $page_Lang['add_new_language_and_keys']['english'];?></div>
<!--Total Statiscit STARTED-->
<div class="global_right_wrapper">
   <div class="global_box_container_w bgc">
        <div class="general_settings_header_title"><?php echo isset($page_Lang['add_new_language'][$dataUserPageLanguage]) ? $page_Lang['add_new_language'][$dataUserPageLanguage] : $page_Lang['add_new_language']['english'];?></div>
        <div class="row-box-container" id="set_lang">
               <span id="actionNewLang" class="elaction"></span>
               <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input placeholder="<?php echo isset($page_Lang['add_new_lang_here'][$dataUserPageLanguage]) ? $page_Lang['add_new_lang_here'][$dataUserPageLanguage] : $page_Lang['add_new_lang_here']['english'] ;?>"  id="new_lang" type="text" class="validate">
                      <label for="new_lang"><?php echo isset($page_Lang['add_new_lang_attantion'][$dataUserPageLanguage]) ? $page_Lang['add_new_lang_attantion'][$dataUserPageLanguage] : $page_Lang['add_new_lang_attantion']['english'] ;?></label> 
                    </div>
                    <span class="setSettingBoxInfoNote"><?php echo isset($page_Lang['this_may_take_a_five_minutes'][$dataUserPageLanguage]) ? $page_Lang['this_may_take_a_five_minutes'][$dataUserPageLanguage] : $page_Lang['this_may_take_a_five_minutes']['english'];?></span>
               </span>
               <!----> 
               <div class="setting-box">
                   <div class="column-set_input_box">
                       <div class="btn waves-effect waves-light blue save_newLang" data-type="saveNewLang"><?php echo isset($page_Lang['add_language'][$dataUserPageLanguage]) ? $page_Lang['add_language'][$dataUserPageLanguage] : $page_Lang['add_language']['english'];?> </div>
                   </div>
               </div>
               <!----> 
        </div>
        <div class="general_settings_header_title_second"><?php echo isset($page_Lang['add_key'][$dataUserPageLanguage]) ? $page_Lang['add_key'][$dataUserPageLanguage] : $page_Lang['add_key']['english'];?></div>
        <div class="row-box-container" id="set_key">
            <span id="actionNewKey" class="elaction"></span>
                <span class="setting-box"> 
                     <div class="input-field col s6">
                      <input  placeholder="<?php echo isset($page_Lang['add_new_key_here'][$dataUserPageLanguage]) ? $page_Lang['add_new_key_here'][$dataUserPageLanguage] : $page_Lang['add_new_key_here']['english'];?>" id="new_key" type="text" class="validate kkey">
                      <label for="new_key"><?php echo isset($page_Lang['add_new_key_attantion'][$dataUserPageLanguage]) ? $page_Lang['add_new_key_attantion'][$dataUserPageLanguage] : $page_Lang['add_new_key_attantion']['english'] ;?></label>
                    </div>
               </span>
               <!----> 
               <div class="setting-box">
                   <div class="column-set_input_box">
                       <div class="btn waves-effect waves-light blue save_newKey" data-type="saveNewKey"><?php echo isset($page_Lang['add_key'][$dataUserPageLanguage]) ? $page_Lang['add_key'][$dataUserPageLanguage] : $page_Lang['add_key']['english'] ;?></div>
                   </div>
               </div>
        </div>
        <div class="general_settings_header_title_second"><?php echo isset($page_Lang['all_languages'][$dataUserPageLanguage]) ? $page_Lang['all_languages'][$dataUserPageLanguage] : $page_Lang['all_languages']['english'] ;?></div>
        <div class="row-box-container" id="set_del_lang">
              <span id="actionDelLang" class="elaction"></span>
             <span class="setting-box fixWith nclr">
             <table class="striped highlight">
                    <thead>
                      <tr>
                          <th>Language Name</th>
                          <th>Action</th> 
                      </tr>
                    </thead> 
                    <tbody>
                    <?php
					     $langs = $Dot->Dot_Langs();
						 if($langs){
							  foreach($langs as $column){
								  $lang_name = $column['Field'];
								  $flag = array(
								   $lang_name => $base_url.'uploads/flags/'.$lang_name.'.png'
                                   );
                                   if($lang_name == 'english'){
                                      $deleteBtn = '';
                                   }else{
                                      $deleteBtn = '<div class="btn waves-effect waves-light red deletelanguage" data-type="deleteLang" data-lang="'.$lang_name.'">'.(isset($page_Lang['delete'][$dataUserPageLanguage]) ? $page_Lang['delete'][$dataUserPageLanguage] : $page_Lang['delete']['english']).'</div>'; 
                                   }
								   echo '
								      <tr id="'.$lang_name.'">
										<td>'.$lang_name.'</td>
										<td>'.$deleteBtn.'</td> 
									  </tr>';
							  }
						 } 
					 ?> 
                       
                    </tbody>
           </table>

             </span>
             
        </div>
    </div>
 </div>