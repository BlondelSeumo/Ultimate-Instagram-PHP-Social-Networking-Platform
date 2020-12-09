<div class="newNotificationTest" id="chatBox" data-type="chat">
<div class="notificationBoxHeader">Search</div>
<div class="searchBoxHeader">
    <input type="text" class="search_input_box" id="search_u" data-type="search_explore" placeholder="<?php echo $page_Lang['serach_friends'][$dataUserPageLanguage];?>">   
</div>
   <div class="not_new_not" style="width:100%;">
   <ul class="listOf">
        <div class="SearchResultHere">
           <div class="searchResults" id="searchResults"></div>
        </div>
    <div class="theOldResults">
        <?php 
        $OldSearchList = $Dot->Dot_ShowSearchedUserList($uid);
        if ($OldSearchList) {
			echo '<div class="old_search">' . $page_Lang['old_searches'][$dataUserPageLanguage] . '</div>';
			foreach ($OldSearchList as $searhed) {
				$oldSearchedUID = $searhed['searched_id'];
				$oldSearchID = $searhed['search_event_id'];
				$oldSearchedUserFullName = $Dot->Dot_UserFullName($oldSearchedUID);
				$oldSearchedUserUsername = $Dot->Dot_GetUserName($oldSearchedUID);
                $soAvatar = $Dot->Dot_UserAvatar($oldSearchedUID, $base_url); 
                echo '
                <div class="resulted_user"  id="olds' . $oldSearchID . '">
                    <a href="' . $base_url . 'profile/' . $oldSearchedUserUsername . '">
                        <div class="result_user_avatar"><img src="' . $soAvatar . '" class="a0uk" /></div>
                        <div class="result_user_name">' . $oldSearchedUserFullName . '</div>
                    </a>
                <span class="deleteSearched" data-id="' . $oldSearchID . '" data-type="deletesearcho">
                  <span class="rmvi">' . $Dot->Dot_SelectedMenuIcon('remove_box_icon') . '</span>
                </span>
                </div>
                ';
			}
		}
        ?>
    </div>    
   </ul>
   </div>
</div>