<!-- Snooze conversation popup start -->
<div class="modal custom-modal fade feedbackmodal snooze" id="forward-message">
   <div class="modal-overlay modal-toggle"></div>
   <div class="modal-dialog modal-wrapper modal-transition">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header px-4 justify-content-start align-items-center">
            <div class="px-3 d-flex w-100 align-items-center">
               <h4
                  class="d-flex modal-title font-24 font-weight-500 font-black text-left justify-content-start align-items-center mb-0">
                  Forward Message
               </h4>
               <button type="button" class="close uk-close"></button>
            </div>
         </div>
         <!-- Modal body -->
         <div class="modal-body light" style="padding:0;">

            <div class="border-bottom py-4 px-9 font-14">
               <div class="pb-0 pl-4 pr-4 forward-message-area d-none">
                  <div class="d-flex border-bottom">
                     <img src="assets/img/chat-icon/share-icon.svg" alt="">
                     <h5 class="pb-5 pt-6 pl-5">Call you in 20 mins</h5>
                  </div>
                  <div class="chat-type-box">
                     <textarea type="text" class="mr-4 form-control click-textarea" id="description"
                        onkeyup="new do_resize(this);" rows="1" placeholder="Add a message here (optional)"
                        style="min-width:auto;height: unset;min-height: unset;overflow-y:hidden"></textarea>
                  </div>
               </div>
               <div class="pb-0 pl-0 pr-0 forward-image-message">
                  <div class="d-flex border">
                     <img src="assets/img/chat-icon/send-file-new.svg" alt="">
                     <h5 class="color-default font-16 font-weight-500">File</h5>
                  </div>
                  <div class="chat-type-box">
                     <textarea type="text" class="mr-4 form-control click-textarea" id="description"
                        onkeyup="new do_resize(this);" rows="1" placeholder="Add a message here (optional)"
                        style="min-width:auto;height: unset;min-height: unset;overflow-y:hidden"></textarea>
                     <div class="forward-file-details">
                        <span class="font-weight-500 color-default font-13 d-block">send (1).svg</span>
                        <span class="font-weight-500 color-black font-12 d-block">620B</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="border-bottom p-4 font-14">
               <div class="top-search physical_part px-5 mmpageSearch">
                  <div class="physical_tabs_content">
                     <div class="tabs_content active">
                        <div class="physical_input_box_part">
                           <div class="physical_input_box header_search ml-0">
                              <input id="searchs-block-mm" type="text" name=""
                                 class="form-control physical_input physical_inputblock search-product ml-0"
                                 placeholder="Search People" aria-expanded="false">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pl-10 pr-2 py-5">
               <h4
                  class="d-flex modal-title font-18 font-weight-500 font-black text-left justify-content-start align-items-center mb-5">
                  Suggested
               </h4>
               <ul class="w-100 w-scroll group-chat-user-add">
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
                  <li class="pb-2 position-relative">
                     <div class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary">
                        <div class="position-relative mr-3 "><span class="active-profile"
                              style="position: absolute;bottom: 2px;right: -2px;"><span
                                 class="bg-success position-absolute status radius-25 profile-status nohover"></span></span><img
                              src="assets/image/2.png" alt="" class="border rounded-circle" width="40"></div><span
                           class="userName">LIsa Marie</span>
                        <span
                           class="flex items-center justify-center w-24 ml-auto px-5 text-sm font-medium text-white blue-btn forward-sent-btn rounded-md h-9 hover:text-white">
                           <img src="assets/img/chat-icon/check-mark-icon.svg" class="send-check-mark" alt="">
                           <span class="send-text">Send</span>
                           <span class="sent-text">Sent</span>
                        </span>
                     </div>
                  </li>
               </ul>
            </div>

         </div>
         <!-- Modal footer -->
         <div class="modal-footer py-4">
            <button type="button" class="btn btn-primary forward-done-btn uk-close w-100">Done</button>
         </div>
      </div>
   </div>
</div>
<!-- Snooze conversation popup end -->
