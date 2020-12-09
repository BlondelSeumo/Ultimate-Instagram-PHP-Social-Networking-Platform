<div class="newNotificationTest" id="chatBox" data-type="chat">
<div class="notificationBoxHeader"><?php echo $page_Lang['messages_not'][$dataUserPageLanguage];?></div>
   <div class="not_new_not">
   <ul class="listOf">
      <?php 
      $ConversationUserList = $Dot->Dot_ChatUserList($uid);
      $updateNewMessageNotificationCount = $Dot->Dot_UpdateUserMessageNotification($uid);
      if ($ConversationUserList) {
        foreach ($ConversationUserList as $cData) {
            $conversationUserID = $cData['user_id'];
            $conversationUserAvatar = $Dot->Dot_UserAvatar($conversationUserID, $base_url);
            $conversationLastMessage = $Dot->Dot_ChatLastMessage($uid, $conversationUserID);
            $conversationUserFullName = $Dot->Dot_UserFullName($conversationUserID);
            $conversationUserName = $Dot->Dot_GetUserName($conversationUserID);
            $time = $conversationLastMessage['message_created_time'];
            $conversationLastMessageTime = date("c", $time);
            $getConversationLastMessage = $conversationLastMessage['message_text'];
            $getLastMessageID = $conversationLastMessage['msg_id'];
            $getFromUID = $conversationLastMessage['from_user_id'];
            $getToUID = $conversationLastMessage['to_user_id'];
            $getFileName = isset($conversationLastMessage['file_name']) ? $conversationLastMessage['file_name'] : NULL;
            $getFile = isset($conversationLastMessage['file']) ? $conversationLastMessage['file'] : NULL;
            $getFileExtension = isset($conversationLastMessage['file_extension ']) ? $conversationLastMessage['file_extension '] : NULL;
            $getDesto = isset($conversationLastMessage['dest']) ? $conversationLastMessage['dest'] : NULL;
            $messageSelfDestructionSecret = isset($conversationLastMessage['secret_checked']) ? $conversationLastMessage['secret_checked'] : NULL;
            $messageproductQuestionID = isset($conversationLastMessage['q_question_id']) ? $conversationLastMessage['q_question_id'] : NULL;
            $messageproductID = isset($conversationLastMessage['q_product_id']) ? $conversationLastMessage['q_product_id'] : NULL;
            if ($getDesto) {
                if ($messageSelfDestructionSecret == '0') {
                    $destText = $page_Lang['self_destruction_message'][$dataUserPageLanguage];
                } else {
                    $destText = $page_Lang['message_was_self_destruction'][$dataUserPageLanguage];
                }
            } else if ($getConversationLastMessage) {
                $destText = htmlcode($getConversationLastMessage);
            } else {
                $destText = $page_Lang[$Dot->Dot_LanguagesKey($messageproductQuestionID)][$dataUserPageLanguage];
            }
            if ($getFile) {
                $fileID = $Dot->Dot_GetUploadChatFileID($getFile);
                $messagefileID = $fileID['file_id'];
                $messageUploadedFilen = $fileID['uploaded_file'];
                $messageUploadedFileExtension = $fileID['extension'];
                $extensionArray = array('ai' => "file_extensions_icon file_ai_mini", 'pdf' => "file_extensions_icon file_pdf_mini", 'eps' => "file_extensions_icon file_eps_mini", 'tif' => "file_extensions_icon file_tif_mini", 'doc' => "file_extensions_icon file_doc_mini", 'docx' => "file_extensions_icon file_doc_mini", 'zip' => "file_extensions_icon file_zip_mini", 'rar' => "file_extensions_icon file_rar_mini", 'psd' => "file_extensions_icon file_psd_mini", 'txt' => "file_extensions_icon file_txt_mini");
                $fileIcon = '<span class="' . $extensionArray[$messageUploadedFileExtension] . '"></span>';
            } else {
                $fileIcon = '';
            } 
            echo ' 
                <div class="_1ht1 _1ht2 " id="conme' . $getLastMessageID . '"> 
                    <span class="_2il3 _3itx instyle">
                    <span class="_1qt3" style="width:60px;height:60px;" id="js_3u">
                        <span>
                        <span class="_4ldz" style="height: 60px; width: 60px;">
                            <span class="_4ld-" style="height: 60px; width: 60px;">
                            <span class="_55lt" style="width: 60px; height: 60px;">
                                <img src="' . $conversationUserAvatar . '" width="60" height="60" alt="" class="img_avatar">
                            </span>
                            </span>
                        </span>
                        </span>
                    </span>
                    <span class="teytey getuse" id="conme' . $getLastMessageID . '" data-id="' . $conversationUserID . '" data-user="' . $conversationUserName . '" data-page="chat">
                        <span class="_1qt5 sr"><span class="_1ht6"><span class="txt_st11">' . $conversationUserFullName . '</span></span>
                </span>
                <span class="_1qt5 sr" style="padding: 3px 0px;"> 
                      <span class="_j0r"></span>
                      ' . $fileIcon . '
                       <span class="txt_st12 truncate" id="msg' . $conversationUserID . '">' . $destText . '</span> 
                </span>

                <span><abbr class="_1ht7 timeago" id="time' . $conversationUserID . '" title="' . $conversationLastMessageTime . '">' . $conversationLastMessageTime . '</abbr></span>
                </span> 
                </span>  
            <span>
            </span>
            <span class="reson" data-from="' . $getFromUID . '" data-con="' . $getLastMessageID . '" data-to="' . $getToUID . '" data-type="deleteconversation">
                        <span class="deletemessageicon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 192 192" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#8a99a4"><path d="M47.92188,39.92188c-3.25538,0.00085 -6.18567,1.97404 -7.41065,4.99016c-1.22498,3.01612 -0.50037,6.47372 1.83252,8.74421l42.34375,42.34375l-42.34375,42.34375c-2.0899,2.00654 -2.93176,4.98613 -2.2009,7.78965c0.73086,2.80352 2.92023,4.99289 5.72375,5.72375c2.80352,0.73086 5.78311,-0.111 7.78965,-2.20091l42.34375,-42.34375l42.34375,42.34375c2.00653,2.08993 4.98614,2.93181 7.78967,2.20095c2.80354,-0.73085 4.99292,-2.92024 5.72377,-5.72377c0.73085,-2.80354 -0.11102,-5.78314 -2.20095,-7.78967l-42.34375,-42.34375l42.34375,-42.34375c2.36608,-2.29993 3.07751,-5.81653 1.79148,-8.8553c-1.28603,-3.03877 -4.3057,-4.97634 -7.60397,-4.87907c-2.07839,0.06193 -4.05103,0.93056 -5.5,2.42188l-42.34375,42.34375l-42.34375,-42.34375c-1.50617,-1.54826 -3.57436,-2.42175 -5.73437,-2.42188z"></path></g></g></svg></span>
            </span>
            </div> 
        ';
        }
    }
      ?>
   </ul>
   </div>
</div>