<!-- group chat first step start -->
<div class="bottom-0 box-shodow radius-4 chatbox collapse align-self-end position-fixed right-69" id="groupChat1">
   <div class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
         <div class="">
            <div class="pt-3 panel-1">
               <div class="position-relative border-bottom-blue mb-5">
                  <div class="p-4 pt-0 d-flex align-items-center position-relative justify-content-start">
                     <div class="mr-4 cursor-pointer menuhover message-setting-option position-relative tooltip" id="back-main-chat">
                        <img src="assets/img/next.svg" class="cursor-pointer" alt="Back" width="25">
                        <span class="right-0 m-0 tooltiptext top chat-bottom center font-12 line-height-default">Back</span>
                     </div>
                     <h4 class="m-0 chat-top-title">Name Group</h4>
                  </div>
               </div>

               <div class="px-4 mb-5">
               <div class="background-blue Group-add-chat pl-4">
                  <input name="groupChatname" type="text"
                     class="border-0 rounded-0 font-16 font-weight-normal"
                     onkeyup="showForwardButton(this)" placeholder="Add Group Name">
               </div>
               </div>
               
               <div class="px-4">
                  <div class="forward border-top-blue" style="opacity:0">
                     <div class="py-0 text-center upload__group__photo vertical-middle" style="background: #e7f3ff;">
                        <button type="button">
                           <div class="px-5 py-3 menuhover call-opt font-16" onclick="groupChatStepOnebyOne()">
                              <input name="groupChatimage" type="file" class="d-none">
                              <a class="" href="javascript:void(0);">Next</a>
                           </div>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div id="Group__Chat_panel_1_1" class="top-0 bg-white rounded panel-2 position-absolute w-100 h-100"
               style="right: -100%; bottom: 0;">
               <div class="position-relative">
                  <div class="p-4 mb-3 d-flex align-items-center position-relative justify-content-start border-bottom">
                     <div class="w-100">
                        <div class="w-100 d-flex justify-content-start align-items-center position-relative">
                           <div class="mr-3 cursor-pointer menuhover" data-slide="prev"
                              onclick="groupChatStepOnebyOne()">
                              <img src="assets/img/next.svg" class="cursor-pointer" alt="Back" width="25">
                           </div>
                           <a class="p-0 mr-0 navbar-brand w-45px d-flex align-items-center" href="#">
                              <h5 class="mb-0 ml-2 chat-top-title">Add Picture</h5>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pt-2 mt-8 position-relative">
                  <div class="confimg">
                     <div class="confimg-col">
                        <div class="mb-0 img-status">
                           <div class="vclimg bg-size">
                              <img src="assets/images/avatars/big/audiocall.png" class="d-none" alt="Avatar">
                              <img src="assets/images/avatars/thumb-profile-demo.svg" alt="Avatar">
                           </div>
                        </div>
                        <div class="">
                           <div class="text-center upload__group__photo vertical-middle">
                              <div id="cameraUploda" class="menuhover image rounded-circle icon_change_group_photo">
                                 <img src="assets/images/icons/camera-icon.svg" alt="Upload File" width="16">
                              </div>
                              <div class="menuhover remove-group-photo">
                                 <img src="assets/images/icons/remove-icon-new.svg" alt="remove File" width="16">
                              </div>
                              <input name="groupChatimage" id="groupChatimage" type="file" class="d-none" data-id="uploder-3">
                           </div>
                           <div
                              class="hidden group-chat-upload-popup w-56 p-2 mx-auto mt-12 text-gray-500 bg-white border border-gray-100 rounded-md shadow-md select-photo-mobile dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                              uk-drop="mode: click;pos: top-left;animation: uk-animation-slide-top-small; offset:5">
                              <ul class="space-y-1">
                                 <li>
                                    <a href="#"
                                       class="flex items-center px-3 py-2 rounded-md small-icon hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800">
                                       <img src="assets/images/icons/select-photo.svg" alt="" width="20"> Select photo from
                                       computer
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="flex items-center px-3 py-2 rounded-md small-icon hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800">
                                       <img src="assets/images/icons/download-icon.svg" alt="" width="20"> Select photo from
                                       album
                                    </a>
                                 </li>
                                 <!--<li>
                                    <hr class="my-2 -mx-2 dark:border-gray-800">
                                 </li>
                                 <li>
                                    <a href="#"
                                       class="flex items-center px-3 py-2 rounded-md small-icon hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800">
                                       <img src="assets/images/icons/remove-icon.svg" alt="" width="20"> Remove
                                    </a>
                                 </li>-->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="px-4 mt-5">
                  <div class="text-center bottom-white-pos rounded-corner border-top-blue position-relative">
                     <div class="px-5 py-3 call-opt font-16" onclick="groupChatStepwallpaper()">Next</div>
                  </div>
               </div>
            </div>
            <div id="Group__Chat_wallpaper" class="top-0 bg-white rounded panel-2 position-absolute w-100 h-100"
               style="right: -100%; bottom: 0;">
               <div class="position-relative">
                  <div class="p-4 mb-3 d-flex align-items-center position-relative justify-content-start border-bottom">
                     <div class="w-100">
                        <div class="w-100 d-flex justify-content-start align-items-center position-relative">
                           <div class="mr-3 cursor-pointer menuhover" data-slide="prev"
                              onclick="groupChatStepwallpaper()">
                              <img src="assets/img/next.svg" class="cursor-pointer" alt="Back" width="25">
                           </div>
                           <a class="p-0 mr-0 navbar-brand w-45px d-flex align-items-center" href="#">
                              <h5 class="mb-0 ml-2 chat-top-title">Choose background</h5>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pt-5 position-relative w-scroll pr-0" style="height: 400px;">
                  <div class="confimg-wallpaper">
                     <ul class="wallpaper justify-start">
                        <li class="styled-button tooltip position-relative" id="none">
                           <img class="bg-img" src="assets/img/chat-background/background-none.png" alt="Avatar" />
                           <span class="tooltiptext top">None</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="beach">
                           <img class="bg-img" src="assets/img/chat-background/background-beach.png" alt="Avatar" />
                           <span class="tooltiptext top">Beach</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="bhuddaBig">
                           <img class="bg-img" src="assets/img/chat-background/background-bhudda-big.png"
                              alt="Avatar" />
                           <span class="tooltiptext top">Bhudda Big</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="bhuddaSmall">
                           <img class="bg-img" src="assets/img/chat-background/background-bhudda-small.png"
                              alt="Avatar" />
                           <span class="tooltiptext top">Bhudda Small</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="bubble">
                           <img class="bg-img" src="assets/img/chat-background/background-bubble.png" alt="Avatar" />
                           <span class="tooltiptext top">Bubble</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="developer">
                           <img class="bg-img" src="assets/img/chat-background/background-developer.png" alt="Avatar" />
                           <span class="tooltiptext top">Developer</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="flowers">
                           <img class="bg-img" src="assets/img/chat-background/background-flowers.png" alt="Avatar" />
                           <span class="tooltiptext top">Flowers</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="hearts">
                           <img class="bg-img" src="assets/img/chat-background/bg-hearts.png" alt="Avatar" />
                           <span class="tooltiptext top">Hearts</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="hearts-black-and-white">
                           <img class="bg-img" src="assets/img/chat-background/bg-hearts-black-and-white.png"
                              alt="Avatar" />
                           <span class="tooltiptext top">Hearts Black and White</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="math">
                           <img class="bg-img" src="assets/img/chat-background/bg-math.png" alt="Avatar" />
                           <span class="tooltiptext top">Math</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="music">
                           <img class="bg-img" src="assets/img/chat-background/bg-music.png" alt="Avatar" />
                           <span class="tooltiptext top">Music</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="peace">
                           <img class="bg-img" src="assets/img/chat-background/bg-peace.png" alt="Avatar" />
                           <span class="tooltiptext top">Peace</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="sky">
                           <img class="bg-img" src="assets/img/chat-background/bg-sky.png" alt="Avatar" />
                           <span class="tooltiptext top">Sky</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="squares">
                           <img class="bg-img" src="assets/img/chat-background/bg-squares.png" alt="Avatar" />
                           <span class="tooltiptext top">Squares</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="squares-dots">
                           <img class="bg-img" src="assets/img/chat-background/bg-squares-dots.png" alt="Avatar" />
                           <span class="tooltiptext top">Squares Dots</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="sunset">
                           <img class="bg-img" src="assets/img/chat-background/bg-sunset.png" alt="Avatar" />
                           <span class="tooltiptext top">Sunset</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="tools">
                           <img class="bg-img" src="assets/img/chat-background/bg-tools.png" alt="Avatar" />
                           <span class="tooltiptext top">Tools Small</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="tools1">
                           <img class="bg-img" src="assets/img/chat-background/bg-tools1.png" alt="Avatar" />
                           <span class="tooltiptext top">Tools Big</span>
                        </li>
                        <li class="styled-button tooltip position-relative" id="universe">
                           <img class="bg-img" src="assets/img/chat-background/bg-universe.png" alt="Avatar" />
                           <span class="tooltiptext top">Universe</span>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="text-center bottom-white-pos border-top-blue">
                  <div class="px-5 py-3 call-opt font-16" onclick="groupChatStepTwo()">Next</div>
               </div>
            </div>
            <div id="Group__Chat_panel_2" class="top-0 bg-white rounded panel-2 position-absolute w-100 h-100"
               style="right: -100%; bottom: 0;">
               <div class="position-relative">
                  <div class="p-4 mb-3 d-flex align-items-center position-relative justify-content-start border-bottom">

                     <div class="w-100">
                        <div class="w-100 d-flex justify-content-start align-items-center position-relative">
                           <div class="mr-3 cursor-pointer menuhover" data-slide="prev" onclick="groupChatStepTwo()">
                              <img src="assets/img/next.svg" class="cursor-pointer" alt="Back" width="25">
                           </div>
                           <a class="p-0 mr-0 navbar-brand w-45px d-flex align-items-center" href="#">
                              <h5 class="mb-0 ml-2 chat-top-title">Add Group Members</h5>
                           </a>
                           <!-- search icon for mobile -->
                           <!--<div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>-->
                           <!--<div class="header-searchWrap">
                              <div class="menuhover position-relative back-content"
                                 uk-toggle="target: #wrapper ; cls: show-searchbox">
                                 <img src="assets/img/cancel.svg" class="cursor-pointer imgnone" alt="close" width="35">
                                 <img src="assets/img/cancel-hover.svg" class="imgblock" alt="close" width="35">
                              </div>
                              <div class="header_search">-->
                                 <!--<i class="uil-search-alt"></i> -->
                                 <!--<input value="" type="text" class="form-control" placeholder="Search for Friends"
                                    autocomplete="off">
                              </div>
                           </div>-->
                        </div>
                     </div>
                     <!--<button name="done" class="px-5 py-1 font-black rounded shadow-none button bg-secondary" onclick="closeThisPopUp()" data-toggle="collapse" data-target="#groupchatbox">Done</button>-->
                  </div>
               </div>
               <div class="px-4 mb-5">
                  <div class="px-4 py-0 search-people-chat background-blue drop_headline d-flex justify-content-around">
                     <input name="searchGroupChatname" type="text" class="border-0 rounded-0 font-16 font-weight-normal" placeholder="Search Name">
                  </div>
               </div>
               <div class="pb-4 pl-4 pr-4 user__in__group search-people-chat-user" style="display:none;overflow-y:auto">
               </div>
               <div class="p-4 drop_headline d-flex flex-column " id="user_group_names">
                  <p class="mb-2 color-black font-16">Suggested</p>
                  <ul class="w-100 suggest-people-chat w-scroll">
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Adam"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div>
                           <span class="userName">Adam</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Brad"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Brad</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Chistin"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Chistin</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Doopler"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Doopler</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Ezabell"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Ezabell</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Frank"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Frank</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Gillbet"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Gillbet</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Jimmy Jones"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Jimmy Jones</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Mountain Riders"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Mountain Riders</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>
                     <li class="pb-2 position-relative">
                        <a href="#" data-userName="Property Rent And Sale"
                           class="p-2 rounded d-flex hover-grey w-100 align-items-center text-secondary"
                           onclick="addUserToGoup(this)">
                           <div class="online user__image">
                              <img src="assets/image/2.png" alt="" class="mr-3">
                           </div><span
                              class="userName">Property Rent And Sale</span>
                           <img class="position-absolute success-img" src="assets/image/success.svg" alt="" width="30"
                              style="right: 8px;top: 11px;">
                        </a>
                     </li>

                  </ul>
               </div>
               <div class="text-center bottom-white-pos border-top-blue">
                  <a class="px-5 py-3 call-opt font-16" id="go-group-chat" href="javascript:void(0);"
                     onclick="closeThisPopUp()">Create Group</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- group chat first step end -->
