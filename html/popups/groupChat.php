<!-- group chat box start -->
<div class="bottom-0 box-shodow radius-4 chatbox collapse align-self-end" id="groupchatbox">
   <div id="groupchatblock" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
         <div id="showgroupchat" class="chat-block">
            <div class="p-3 chat-header grouphead">
               <div class="d-flex">
                  <div class="mt-2 mr-3 position-relative">
                     <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                  </div>
                  <div class="position-relative">
                     <div class="mt-0 d-flex align-items-center profiledropdown">
                        <span class="font-13 font-weight-400 color-default">StayToEnjoy...</span>
                        <div id="grprofilemenu" onclick="openGroupChatOptions()" style="transition:.5s;"
                           class="mt-0 ml-2 cursor-pointer downarrow d-flex justify-content-center flex-column">
                           <img src="assets/img/downarrow.png" id="grdown" class="mx-auto mt-1 width-100 downarrowicon">
                           <img src="assets/img/uparrow.png" class="mt-1 width-100 uparrow">
                        </div>
                     </div>
                     <div class="align-items-center -mt-2 d-none">
                        <span class="font-11 font-weight-400">3 Group Members</span>
                        <!--<div class="ml-1 menuhover position-relative adduserclick tooltip">
                           <img src="assets/img/chat-icon/add-group-user.svg" alt="" width="19">
                           <span class="adduser-tooltip tooltiptext chat-bottom font-12 line-height-default">Add
                              user in this group</span>
                        </div>-->
                     </div>
                     <div class="typing-user">
                        <div class="load-3 loading-sec">
                           <p>Susan is typing</p>
                           <div class="line"></div>
                           <div class="line"></div>
                           <div class="line"></div>
                        </div>
                     </div>
                  </div>
                  <div class="ml-auto">
                     <div class="mt-2 d-flex header-call-icon">
                        <div class="chat-call-part videoCall-click-group mr-1 btn-grad">
                           <img src="assets/img/chat-icon/start-call-icon.svg" class="" alt="">
                           <span class="start-call-text">Start Call</span>
                        </div>
                        <!--<div class="mr-2 menuhover audioCall-click-group">
                           <div class="menuhover position-relative tooltip">
                              <img src="assets/img/chat-icon/phone-icon.svg" class="desktop-chat-icon imgnone">
                              <img src="assets/img/chat-icon/phone-chat-desktop-hover.svg"
                                 class="desktop-chat-icon imgblock">
                              <img src="assets/img/chat-icon/phone-chat-tablet.svg" class="tablet-chat-icon">
                              <span class="right-0 m-0 tooltiptext chat-bottom font-12 line-height-default">Phone
                                 call</span>
                           </div>
                        </div>
                        <div class="mr-2 menuhover videoCall-click-group">
                           <div class="position-relative tooltip menuhover">
                              <img src="assets/img/chat-icon/video-camera-icon.svg" class="desktop-chat-icon imgnone">
                              <img src="assets/img/chat-icon/video-camera-icon-hover.svg"
                                 class="desktop-chat-icon imgblock">
                              <img src="assets/img/chat-icon/video-chat-tablet.svg" class="tablet-chat-icon">
                              <span class="right-0 m-0 tooltiptext chat-bottom font-12 line-height-default">Video
                                 call</span>
                           </div>
                        </div>-->
                        <div class="menuhover d-nonetablet">
                           <div
                              class="position-relative tooltip menuhover d-flex justify-content-between align-items-center">
                              <img src="assets/img/chat-icon/fullscreen-icon.svg" class="desktop-chat-icon imgnone">
                              <img src="assets/img/chat-icon/fullscreen-icon-hover.svg"
                                 class="desktop-chat-icon imgblock">
                              <img src="assets/img/chat-icon/expand-chat-tablet.svg" class="tablet-chat-icon">
                              <span
                                 class="right-0 m-0 tooltiptext top chat-bottom font-12 line-height-default">Fullscreen</span>
                           </div>
                        </div>
                        <div class="minimize-user-group">
                           <div class="menuhover position-relative tooltip">
                              <img src="assets/img/chat-icon/minus-icon.svg" class="imgnone">
                              <img src="assets/img/chat-icon/minus-icon-blue.svg" class="imgblock">
                              <span
                                 class="right-0 m-0 tooltiptext top chat-bottom font-12 line-height-default">Minimize</span>
                           </div>
                        </div>
                        <div class="menuhover closeChat closechatgroup">
                           <div class="position-relative tooltip">
                              <img src="assets/img/chat-icon/cancel-blue.svg" class="w-h-30px w-38px">
                              <span
                                 class="right-0 m-0 tooltiptext top chat-bottom font-12 line-height-default">Close</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="h-100">
               <div id="glist" class="position-relative gListclass">
                  <div id="groupChatOptions"
                     class="px-5 pt-5 bg-white position-absolute h-100 w-100 border-top d-flex flex-column"
                     style="z-index: 99;bottom:-100%">
                     <a class="px-4 py-2 dropdown-item d-flex align-items-center changebgThemeclick"
                        href="javascript:void(0);">
                        <figure class="chat-dropdown-image-wrap"><img src="assets/img/chat-icon/chat-bg-popup-icon.svg"
                              alt="">
                        </figure>
                        <span class="ml-4 font-15"> Change Background Theme</span>
                     </a>
                     <a class="px-4 py-2 dropdown-item d-flex align-items-center" href="javascript:void(0);"
                        data-toggle="modal" data-target="#snoozeconversation">
                        <figure class="chat-dropdown-image-wrap"><img src="assets/img/chat-icon/snooze-icon.svg" alt="">
                        </figure>
                        <span class="ml-4 font-15"> Snooze Conversation</span>
                     </a>
                     <a class="px-4 py-2 mt-1 dropdown-item d-flex align-items-center" data-toggle="modal"
                        data-target="#ignoreconversation" href="javascript:void(0);">
                        <figure class="chat-dropdown-image-wrap"><img
                              src="assets/img/chat-icon/ignore-message-black.svg" alt=""></figure>
                        <span class="ml-4 font-15"> Ignore Message</span>
                     </a>
                     <!--<a class="px-4 py-2 mt-1 dropdown-item d-flex align-items-center dltmsgpopup-click"
                        href="javascript:void(0)">
                        <figure class="chat-dropdown-image-wrap"><img src="assets/img/chat-icon/delete-red-icon.svg"
                              alt=""></figure>
                        <span class="ml-4 font-15"> Delete Message</span>
                     </a>-->
                     <a class="px-4 py-2 dropdown-item d-flex align-items-center" data-toggle="modal"
                        data-target="#addusergroup" href="javascript:void(0);">
                        <figure class="chat-dropdown-image-wrap"><img src="assets/img/chat-icon/add-group-user.svg"
                              alt="">
                        </figure>
                        <span class="ml-4 font-15"> Add User in Group</span>
                     </a>
                     <a class="px-4 py-2 mt-1 dropdown-item d-flex align-items-center" data-toggle="modal"
                        data-target="#deletemesg" href="javascript:void(0)">
                        <figure class="chat-dropdown-image-wrap"><img
                              src="assets/img/chat-icon/leave-group-icon-new.svg" alt=""></figure>
                        <span class="ml-4 font-15"> Leave Group</span>
                     </a>
                     <a class="px-4 py-2 mt-1 dropdown-item d-flex align-items-center" href="javascript:void(0)"
                        data-toggle="modal" data-target="#deletemesg">
                        <figure class="chat-dropdown-image-wrap"><img
                              src="assets/img/chat-icon/exit-chat-group-icon-new.svg" alt=""></figure>
                        <span class="ml-4 font-15"> Delete Group</span>
                     </a>
                     <a class="px-4 py-2 mt-1 dropdown-item d-flex align-items-center" data-toggle="modal"
                        data-target="#blockmodal" href="javascript:void(0);">
                        <figure class="chat-dropdown-image-wrap"><img src="assets/img/chat-icon/block-red-icon.svg"
                              alt=""></figure>
                        <span class="ml-4 font-15"> Block Susan</span>
                     </a>
                     <a class="px-4 py-2 mt-1 dropdown-item d-flex align-items-center" data-toggle="modal"
                        data-target="#feedback" href="javascript:void(0);">
                        <figure class="chat-dropdown-image-wrap"><img src="assets/img/chat-icon/report-black-icon.svg"
                              alt=""></figure>
                        <span class="ml-4 font-15"> Report to our Team</span>
                     </a>
                  </div>
                  <div class="max-h-320" id="descnote2" data-simplebar>
                     <div class="pt-2 pb-0 pl-3 pr-4 chat-body w-scroll">
                        <div class="mt-4 text-center text-secondry font-12 font-weight-500 day-widget">Today</div>
                        <div
                           class="pb-8 mt-6 mb-5 chat-row recevier d-flex position-relative align-items-center justify-content-start">
                           <div class="flex-shrink-0 align-self-start">
                              <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                           </div>
                           <div
                              class="pt-3 pb-3 pl-4 pr-4 ml-3 mr-4 bg-secondary font-15 font-weight-400 messgebox radius-20 position-relative"
                              style="max-width:65%">
                              <time>1/1/22, 23:46</time>
                              <p>Hello this is Howard How can I help you?</p>
                              <div class="like group-react d-flex position-absolute reaction-count-show">
                                 <div class="position-relative line-height-0 mln-5">
                                    <img src="assets/img/chat-icon/smile-icon.svg" class="w-h-18px">
                                 </div>
                                 <div class="position-relative line-height-0" style="margin-left: -5px;">
                                    <img src="assets/img/chat-icon/like-thumb.svg" class="w-h-18px">
                                 </div>
                                 <div class="position-relative line-height-0 mln-5" style="margin-left: -5px;">
                                    <img src="assets/img/chat-icon/love-icon.svg" class="w-h-18px">
                                 </div>
                                 <div class="position-relative line-height-0 mln-5"
                                    style="margin-left: 5px;display: flex;align-items: center;">
                                    <span class="font-10 line-height-default">+11</span>
                                 </div>
                                 <div class="reaction-count-tab-style reaction-count-tab">
                                    <h4 class="reaction-count-tab-title">Reactions</h4>
                                    <ul uk-tab="{connect:'#reaction-id'}" class="reactiontab-ul">
                                       <li class="uk-active"><a href="">All <span
                                                class="reaction-counts-numbers">11</span></a></li>
                                       <li><a href=""><img src="assets/img/chat-icon/like-thumb.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">4</span></a></li>
                                       <li><a href=""><img src="assets/img/chat-icon/love-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">5</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/smile-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">2</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/haha-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">1</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/sad-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">1</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/angry-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">5</span></a>
                                       </li>
                                    </ul>
                                    <ul id="reaction-id" class="uk-switcher reactiontab-panel uk-margin">
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/like.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/love-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Sameer</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/haha-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/like.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/like.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/love-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/love-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Sameer</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/smile-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/smile-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Sameer</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/haha-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/haha-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/sad-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/angry-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="mr-4 dropdown chatdropdown">
                              <div class="menuhover">
                                 <img src="assets/img/chat-icon/like-thumb.svg" class="w-h-22px">
                              </div>
                              <div class="px-2 border-0 dropdown-menu icons-dropdown font-14 box-shodow">
                                 <ul class="m-0 d-flex justify-content-between">
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Like-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Like" class="imgnone">
                                          <img src="assets/img/gif/Like-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Like" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Like</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Love-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Heart" class="imgnone">
                                          <img src="assets/img/gif/Love-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Heart" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Love</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Haha-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Happy" class="imgnone">
                                          <img src="assets/img/gif/Haha-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Happy" class="imgblock">
                                          <span class="tooltiptext font-12 custom">HaHa</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Wow-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Surprise" class="imgnone">
                                          <img src="assets/img/gif/Wow-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Surprise" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Wow</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Sad-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Sweating" class="imgnone">
                                          <img src="assets/img/gif/Sad-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Sweating" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Sad</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Angry-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Angry" class="imgnone">
                                          <img src="assets/img/gif/Angry-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Angry" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Angry</span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="pb-3 mt-4 mb-2 chat-row sender position-relative">
                           <div
                              class="py-3 pl-3 pr-4 text-right bg-primary font-15 font-weight-400 messgebox radius-20 position-relative">
                              <time>1/1/22, 10:22</time>
                              <p>Hi how can I verify my ID?</p>
                           </div>
                           <div class="d-flex editPoints">
                              <div class="dropdown chatdropdown">
                                 <div class="menuhover">
                                    <span class="font-12">Edit</span>
                                 </div>
                                 <div class="border-0 dropdown-menu font-14 box-shodow ">
                                    <a class="flex items-center px-3 py-2 dropdown-item color-default chat-edit-down"
                                       href="#">
                                       <img src="assets/img/chat-icon/edit-icon.svg" alt="">
                                       Edit
                                    </a>
                                    <a class="flex items-center px-3 py-2 dropdown-item color-default chat-edit-down move-foward"
                                       href="#">
                                       <img src="assets/img/chat-icon/share-icon.svg" alt="">Move
                                       forward</a>
                                    <a class="flex items-center px-3 py-2 dropdown-item color-default chat-edit-down"
                                       href="#">
                                       <img src="assets/img/chat-icon/bin-icon.svg" alt="">Delete</a>
                                 </div>
                              </div>
                              <div class="viewer-img">
                                 <img src="assets/img/beimg.png" class="rounded-circle">
                              </div>
                           </div>
                        </div>
                        <div class="call-history">
                           <span class="call-history-time">1/1/22, 23:46</span>
                           <h6 class="call-history-title">Group Call <span class="call-history-duration">29Sec</span>
                           </h6>
                        </div>
                        <div
                           class="pb-4 mt-4 mb-5 chat-row recevier d-flex position-relative align-items-center justify-content-start">
                           <div class="align-self-start">
                              <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                           </div>
                           <div
                              class="p-2 pt-3 pb-3 pl-3 pr-4 ml-3 mr-4 bg-secondary font-15 font-weight-400 messgebox radius-20 position-relative"
                              style="max-width:65%">
                              <time>1/1/22, 23:46</time>
                              <p>Hello this is Howard How can I help you?</p>
                              <div class="like group-react d-flex position-absolute reaction-count-show">
                                 <div class="position-relative line-height-0 mln-5">
                                    <img src="assets/img/chat-icon/smile-icon.svg" class="w-h-18px">
                                 </div>
                                 <div class="position-relative line-height-0" style="margin-left: -5px;">
                                    <img src="assets/img/chat-icon/like-thumb.svg" class="w-h-18px">
                                 </div>
                                 <div class="position-relative line-height-0 mln-5" style="margin-left: -5px;">
                                    <img src="assets/img/chat-icon/love-icon.svg" class="w-h-18px">
                                 </div>
                                 <div class="position-relative line-height-0 mln-5"
                                    style="margin-left: 5px;display: flex;align-items: center;">
                                    <span class="font-10 line-height-default">+11</span>
                                 </div>
                                 <div class="reaction-count-tab-style reaction-count-tab">
                                    <h4 class="reaction-count-tab-title">Reactions</h4>
                                    <ul uk-tab="{connect:'#reaction-id'}" class="reactiontab-ul">
                                       <li class="uk-active"><a href="">All <span
                                                class="reaction-counts-numbers">11</span></a></li>
                                       <li><a href=""><img src="assets/img/chat-icon/like-thumb.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">4</span></a></li>
                                       <li><a href=""><img src="assets/img/chat-icon/love-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">5</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/smile-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">2</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/haha-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">1</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/sad-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">1</span></a>
                                       </li>
                                       <li><a href=""><img src="assets/img/chat-icon/angry-icon.svg"
                                                class="w-h-18px"><span class="reaction-counts-numbers">5</span></a>
                                       </li>
                                    </ul>
                                    <ul id="reaction-id" class="uk-switcher reactiontab-panel uk-margin">
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/like.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/love-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Sameer</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/haha-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/like.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/like.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/love-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/love-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Sameer</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/smile-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/smile-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Sameer</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/haha-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/haha-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/sad-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Prosenjit</span>
                                          </span>
                                       </li>
                                       <li>
                                          <span class="reaction-people-tab">
                                             <span class="flex-shrink-0 align-self-start reaction-people-tab-img">
                                                <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                                                <img src="assets/img/chat-icon/angry-icon.svg" class="reaction-stamp">
                                             </span>
                                             <span class="reaction-people-tab-name">Jens</span>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>

                           </div>

                           <div class="mr-4 dropdown chatdropdown">
                              <div class="menuhover">
                                 <img src="assets/img/chat-icon/like-thumb.svg" class="w-h-22px">
                              </div>
                              <div class="px-2 border-0 dropdown-menu icons-dropdown font-14 box-shodow">
                                 <ul class="m-0 d-flex justify-content-between">
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Like-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Like" class="imgnone">
                                          <img src="assets/img/gif/Like-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Like" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Like</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Love-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Heart" class="imgnone">
                                          <img src="assets/img/gif/Love-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Heart" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Love</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Haha-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Happy" class="imgnone">
                                          <img src="assets/img/gif/Haha-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Happy" class="imgblock">
                                          <span class="tooltiptext font-12 custom">HaHa</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Wow-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Surprise" class="imgnone">
                                          <img src="assets/img/gif/Wow-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Surprise" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Wow</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Sad-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Sweating" class="imgnone">
                                          <img src="assets/img/gif/Sad-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Sweating" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Sad</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="menuhover tooltip position-relative">
                                          <img src="assets/img/gif/Angry-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Angry" class="imgnone">
                                          <img src="assets/img/gif/Angry-64px.gif" width="30" data-toggle="tooltip"
                                             title="" data-original-title="Angry" class="imgblock">
                                          <span class="tooltiptext font-12 custom">Angry</span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="pb-3 mt-4 chat-row recevier d-flex position-relative">
                           <div class="align-self-start">
                              <img src="assets/img/beimg.png" class="w-h-30px rounded-circle">
                           </div>
                           <div class="d-flex position-relative">
                              <div class="ml-3 gallery-container d-flex add-gallery-pic"
                                 id="animated-thumbnails-gallery-group">
                                 <a data-lg-size="1600-2400" data-sub-html="<p>put picture description here</p>"
                                    class="gallery-item add-gallery-pic-img" data-src="assets/img/chat-group-image.png">
                                    <img class="img-responsive" src="assets/img/chat-group-image.png" />
                                 </a>
                                 <a data-lg-size="1600-2400" data-sub-html="<p>put picture description here</p>"
                                    class="gallery-item add-gallery-pic-img"
                                    data-src="assets/img/chat-icon/chat-attach-gallery-image-2.png">
                                    <img class="img-responsive"
                                       src="assets/img/chat-icon/chat-attach-gallery-image-2.png" />
                                 </a>
                                 <a data-lg-size="1600-2400" data-sub-html="<p>put picture description here</p>"
                                    class="gallery-item add-gallery-pic-img" data-src="assets/img/chat-group-image.png">
                                    <img class="img-responsive" src="assets/img/chat-group-image.png" />
                                 </a>
                                 <a data-lg-size="1600-2400" data-sub-html="<p>put picture description here</p>"
                                    class="gallery-item add-gallery-pic-img"
                                    data-src="assets/img/chat-icon/chat-attach-gallery-image-2.png">
                                    <img class="img-responsive"
                                       src="assets/img/chat-icon/chat-attach-gallery-image-2.png" />
                                 </a>
                                 <a data-lg-size="1600-2400" data-sub-html="<p>put picture description here</p>"
                                    class="gallery-item add-gallery-pic-img" data-src="assets/img/chat-group-image.png">
                                    <img class="img-responsive" src="assets/img/chat-group-image.png" />
                                 </a>
                              </div>
                              <span class="add-gallery-pic-count">+3</span>
                           </div>
                        </div>
                        <div class="pb-3 mt-4 mb-5 chat-row sender position-relative">
                           <div class="p-3 d-flex add-invoice-details">
                              <div class="add-invoice-details-inner">
                                 <img src="assets/img/chat-icon/pdf-file-icon.svg" alt="">
                                 <span class="invoice-file-name">Invoice.pdf</span>
                              </div>
                              <button class="add-invoice-detaild-download">Download</button>
                           </div>
                           <div class="d-flex editPoints">
                              <div class="dropdown chatdropdown">
                                 <div class="menuhover">
                                    <span class="font-12">Edit</span>
                                 </div>
                                 <div class="border-0 dropdown-menu font-14 box-shodow ">
                                    <a class="flex items-center px-3 py-2 dropdown-item color-default chat-edit-down"
                                       href="#">
                                       <img src="assets/img/chat-icon/edit-icon.svg" alt="">
                                       Edit
                                    </a>
                                    <a class="flex items-center px-3 py-2 dropdown-item color-default chat-edit-down move-foward"
                                       href="#">
                                       <img src="assets/img/chat-icon/share-icon.svg" alt="">Move
                                       forward</a>
                                    <a class="flex items-center px-3 py-2 dropdown-item color-default chat-edit-down"
                                       href="#">
                                       <img src="assets/img/chat-icon/bin-icon.svg" alt="">Delete</a>
                                 </div>
                              </div>
                              <div class="viewer-img">
                                 <img src="assets/img/beimg.png" class="rounded-circle">
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="p-3 chat-footer border-top">
                     <div class="d-flex dropdown chat-box-icon plus-icon-showbox" id="plus-icon-showbox-group">
                        <div class=" menuhover dropdown-toggle tooltip position-relative" data-toggle="dropdown">
                           <img src="assets/img/chat-icon/image-upload-icon.svg" class="w-h-25px" />
                           <span class="left-0 tooltiptext font-12 top chat-bottom line-height-default">Image</span>
                        </div>
                        <div class="border-0 dropdown-menu box-shodow font-14">
                           <a class="px-4 py-2 dropdown-item d-flex color-default" href="#" id="uploadimg">
                              <img src="assets/img/chat-icon/upload-photo.svg" class="w-h-32px"> <span
                                 class="mt-2 ml-2"> Upload from Computer</span>
                           </a>
                           <a class="px-4 py-2 dropdown-item d-flex color-default" href="#" id="uploadimg1">
                              <img src="assets/img/chat-icon/upload-photo-album.svg" class="w-h-32px"> <span
                                 class="mt-2 ml-2"> Choose from Album</span>
                           </a>
                        </div>
                        <div class="ml-2 menuhover tooltip position-relative">
                           <img src="assets/img/chat-icon/sticker-icon.svg" class="w-h-25px" />
                           <span class="tooltiptext font-12 top chat-bottom line-height-default">Sticker</span>
                        </div>
                        <div class="ml-2 menuhover tooltip position-relative">
                           <img src="assets/img/chat-icon/gif-icon.svg" class="w-h-25px" />
                           <span class="tooltiptext font-12 top chat-bottom line-height-default">GIF</span>
                        </div>
                        <div class="ml-2 menuhover tooltip position-relative">
                           <img src="assets/img/chat-icon/attachment-clip-icon.svg" class="w-h-25px" />
                           <span class="tooltiptext font-12 top chat-bottom line-height-default">Attachment</span>
                        </div>
                        <div class="ml-2 menuhover tooltip position-relative">
                           <img src="assets/img/chat-icon/microphone-black-shape.svg" class="w-h-25px" />
                           <span class="tooltiptext font-12 top chat-bottom line-height-default">Microphone</span>
                        </div>
                     </div>
                     <div class="mb-0 form-group senderblock">
                        <div class="d-flex justify-content-between align-items-end input-group">
                           <div class="pl-0 pr-0 mr-2 input-group-text menuhover chatplus-icon"
                              id="chatplus-icon-group">
                              <img src="assets/img/chat-icon/plus-icon-chat.svg" class="wh-25px plus-chat-icon">
                              <img src="assets/img/chat-icon/close-popup-icon.svg" class="wh-25px closechat-icon">
                           </div>
                           <div class="chat-type-box">
                              <textarea type="text" class="mr-4 form-control click-textarea" id="description2"
                                 onkeyup="new do_resize(this);" rows="1" placeholder="Add your Message"
                                 style="min-width:auto;height: unset;min-height: unset;overflow-y:hidden"></textarea>
                              <div class="d-flex dropdown chat-box-icon">
                                 <div class="dropdown icon icons-dropdown">
                                    <div class="ml-2 menuhover dropdown-toggle tooltip position-relative"
                                       data-toggle="dropdown">
                                       <img src="assets/img/header-icon/happy-face.svg" class="w-h-12px" />
                                       <span
                                          class="tooltiptext font-12 top chat-bottom line-height-default">Emoji</span>
                                    </div>
                                    <div class="border-0 max-h-200 emoji-box dropdown-menu box-shodow font-14">
                                       <div class="top-tab-panel w-scroll" id="emoji-box-top-group">
                                          <section id="one-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Smiley</span>
                                                   <ul>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-1.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-2.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-3.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-4.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-5.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-6.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-7.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-8.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-9.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-10.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-11.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-12.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-13.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-14.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-15.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-16.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-17.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-18.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-19.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-20.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-21.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-22.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-23.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-24.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-25.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-26.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-27.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-28.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-29.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-30.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-31.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-32.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-33.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-34.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-35.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-36.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-37.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-38.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-39.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-40.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-41.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-42.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-43.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-44.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-45.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-46.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-47.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-48.svg" width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/img/chat-icon/s-icon-49.svg" width="30">
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </section>
                                          <section id="two-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Activites</span>
                                                   <ul>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/001-soccer.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/002-bonfire.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/003-americanfootball.svg"
                                                            width="30">
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/004-kayak.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/005-road-sign.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/006-route.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/007-gps.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/008-racket.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/009-swing.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/010-tools.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/011-carabiner.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/012-sea.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/013-tent.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/014-life-jacket.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/015-parachute.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/016-Surfboard.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/017-skateboard.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/018-mug.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/019-canteen.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/020-football-field.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/021-guitar.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/022-sleeping-bag.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/023-beach-volleyball.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/024-winter-hat.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/025-flashlight.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/026-compass.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/027-instant-camera.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/028-golf.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/029-swiss-army-knife.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/030-hot-air-balloon.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/031-lantern.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/032-fishing-hook.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/033-lighter.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/034-pick-up-truck.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/035-ping-pong.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/036-basketball.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/037-jumping-rope.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/038-thermo.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/039-kite.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/040-backpack.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/041-ski-sticks.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/042-grill.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/043-bicycle.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/044-forest.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/045-caravan.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/046-baseball.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/047-bowling.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/048-hoverboard.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/049-crossbow.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/outdoor-activities/050-bikini.svg"
                                                            width="30">
                                                      </li>
                                                </li>
                                             </ul>
                                             </li>
                                             </ul>
                                          </section>
                                          <section id="three-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Food & Drink</span>
                                                   <ul>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/001-lasagna.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/002-churro.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/003-frappe.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/004-chinese-food.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/005-ice-cream-sandwich.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/006-pastry.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/007-arepa.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/008-chicken-wings.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/009-tapa.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/010-cheesecake.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/011-nachos.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/012-temaki.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/013-corn-dog.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/014-bbq.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/015-mac.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/016-latte.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/017-bubble-tea.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/018-skewer.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/019-cinnamon-roll.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/020-donut.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/021-pie.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/022-muffin.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/023-pancakes.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/024-ramen.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/025-fried-chicken.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/026-onion-rings.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/027-soda-can.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/028-fish-and-chips.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/029-sushi.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/030-shish-kebab.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/031-onigiri.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/032-sausage.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/033-takoyaki.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/034-crepe.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/035-taiyaki.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/037-waffle.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/038-ketchup.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/039-burger.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/040-hot-dog.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/041-sandwich.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/042-sandwich.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/043-french-fries.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/044-ice-cream.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/045-burrito.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/046-taco.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/047-pizza.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/048-nuggets.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/049-milkshake.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/050-soda.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/051-beer-2.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/052-juice-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/053-whisky.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/054-frappe.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/055-coffee.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/056-water.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/057-milk.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/058-cappuccino.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/059-soda.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/060-teapot.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/061-milkshake.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/062-orange-juice.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/063-frappuccino.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/064-beer.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/065-wine.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/068-juice.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/069-frappuccino-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/070-champagne.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/071-cocktail.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/072-sangria.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/073-cocktail-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/074-vodka.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/075-soda-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/076-wine-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/077-milk-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/078-water-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/079-cocktail-2.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/080-barrel.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/081-chocolate.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/082-coffee-cup.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/083-soda-2.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/084-punch.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/085-lemonade.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/086-ice-tea.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/087-tomato-juice.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/088-beers.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/089-punch-1.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/090-tea-cup.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/091-coconut.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/fast-food/092-beer-1.svg"
                                                            width="30">
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </section>
                                          <section id="four-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Sticker</span>
                                                   <ul class="d-flex">
                                                      <li>
                                                         <img src="assets/images/stickers/Birthday/001-birthday.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Birthday/002-birthday.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Birthday/005-cupcake.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Birthday/008-birthday.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Birthday/018-birthday.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Birthday/017-birthday cake.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Creativitty/002-creativity.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Creativitty/003-creativity.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Creativitty/004-creativity.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Creativitty/005-creativity.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Creativitty/006-creativity.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Creativitty/007-creativity.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Food/002-kebab.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Food/003-chicken.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Food/004-pizza.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Food/005-taco.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Food/007-spaghetti.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Food/008-cake.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Funny/005-cool.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Funny/012-yummy.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Funny/019-magical.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Funny/001-sofresh.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Funny/002-letsgo.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Funny/003-cheerup.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Home/001-home.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Home/002-armchair.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Home/003-books.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Home/005-teapot.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Home/006-relax.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Home/009-baking.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Love/004-stamp.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Love/006-cookies.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Love/009-love.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Love/012-bee.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Love/020-cupid.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Love/017-gotyou.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Nature/001-bird.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Nature/002-bee.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Nature/003-dragonfly.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Nature/004-mouse.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Nature/005-cactus.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Nature/006-bee.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/NewYear/002-newyear.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/NewYear/003-newyear.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/NewYear/004-newyear.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/NewYear/005-newyear.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/NewYear/006-newyear.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/NewYear/007-newyear.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Pets/002-Adopt.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Pets/004-fish.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Pets/005-dog.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Pets/006-bath.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Pets/013-cat.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Pets/010-dog.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Sience-Fiction/001-Sciencefiction.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sience-Fiction/011-planet.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sience-Fiction/013-cyborg.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Sience-Fiction/014-meteorite.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Sience-Fiction/002-Sciencefiction.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/stickers/Sience-Fiction/003-Sciencefiction.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sport/001-basketball.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sport/003-running.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sport/005-football.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sport/006-baseball.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sport/008-tennis.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Sport/009-running.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Spring/001-flowers.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Spring/002-flowers.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Spring/004-flowers.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Spring/006-flower.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Spring/010-envelope.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Spring/011-spring.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Stayathome/001-listening.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Stayathome/002-dumbbell.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Stayathome/005-reading.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Stayathome/010-cooking.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Stayathome/012-guitar.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Stayathome/013-laptop.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Summer/001-summer.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Summer/002-parrot.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Summer/005-turtle.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Summer/009-popsicle.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Summer/010-cocktail.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Summer/011-sun.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Weather/001-sun.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Weather/002-cold.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Weather/003-raindrops.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Weather/004-autumn.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Weather/005-cloudy.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Weather/006-raining.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Wedding/001-weddingcake.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Wedding/002-weddingring.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Wedding/004-toast.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Wedding/007-balloons.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Wedding/017-flowers.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Wedding/019-groom.svg" alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Workout/001-workout.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Workout/002-workout.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Workout/003-workout.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Workout/004-workout.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Workout/005-workout.svg"
                                                            alt="">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/stickers/Workout/006-workout.svg"
                                                            alt="">
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </section>
                                          <section id="five-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Hearts</span>
                                                   <ul class="d-flex">
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/001-talk.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/002-love-potion.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/003-passion.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/004-ribbon.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/005-cupid.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/006-heart.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/007-heart-beat.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/008-love-song.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/009-camera.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/010-loving.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/011-heart.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/012-heartbreak.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/013-strawberry.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/014-air-hot-balloon.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/015-evil.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/016-i-love-you.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/017-crown.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/018-valentines-day.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/019-cup.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/020-card.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/021-letter.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/022-ring.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/023-hearts.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/024-key.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/025-surprise.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/026-talk.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/027-toast.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/028-xoxo.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/029-balloons.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/030-wounded-heart.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/031-candle.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/032-love.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/033-heart.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/034-diamond.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/035-love-birds.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/036-target.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/037-cupcake.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/038-shopping-bag.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/039-lucky.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/040-chocolate-bar.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/041-Holding-Hands.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/042-kissing.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/043-love.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/044-necklace.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/045-letter.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/hearts/046-lock.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/047-searching.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/048-give-love.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/049-glasses.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/hearts/050-give-heart.svg"
                                                            width="30">
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </section>
                                          <section id="six-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Objects</span>
                                                   <ul>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/001-backpack.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/objects/002-bike.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/003-check.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/004-coffee-cup.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/005-cosmetics.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/006-deodorant.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/007-desk-chair.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/008-grocery-bag.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/009-hammer.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/010-headphones.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/objects/011-iron.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/objects/012-key.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/objects/013-mail.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/014-newspaper.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/015-notebook.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/016-pet-food.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/017-phone-call.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/018-portfolio.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/019-pressure-cooker.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/020-razor.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/021-sanitary-pad.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/objects/022-soap.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/objects/023-coke.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/024-spray.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/025-Tooth-Brush.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/026-tv-monitor.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/027-umbrella.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/028-underwear.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/029-washing-machine.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/objects/030-water-bottle.svg"
                                                            width="30">
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </section>
                                          <section id="seven-group">
                                             <ul class="smiley-switcher uk-margin">
                                                <li class="uk-tab-li">
                                                   <span>Pets & Nature</span>
                                                   <ul class="d-flex">
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/001-dog.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/002-puppy.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/003-cat.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/004-cat.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/005-bear.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/006-panda.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/007-chicken.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/008-hamster.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/009-bird.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/010-toucan.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/011-rabbit.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/012-ferret.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/pets/013-elephant.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/014-seal.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/015-penguin.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/016-turtle.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/017-otter.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/018-monkey.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/019-tiger.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/020-lion.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/021-cow.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/022-pig.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/023-fox.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/pets/024-red-panda.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/025-raccoon.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/026-octopus.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/pets/027-crocodile.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/028-shark.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img src="assets/images/chat-smiley-icons/pets/029-whale.svg"
                                                            width="30">
                                                      </li>
                                                      <li>
                                                         <img
                                                            src="assets/images/chat-smiley-icons/pets/030-killer-whale.svg"
                                                            width="30">
                                                      </li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </section>
                                       </div>
                                       <ul class="nav nav-pills" id="emoji-option-group">
                                          <li class="active" id="opt-one-group">
                                             <a href="#one-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Smiley</span>
                                                <img src="assets/images/chat-smiley-icons/emoji-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/emoji-blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                          <li id="opt-two-group">
                                             <a href="#two-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Activites</span>
                                                <img src="assets/images/chat-smiley-icons/activites-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/activities-blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                          <li id="opt-three-group">
                                             <a href="#three-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Food & Drink</span>
                                                <img src="assets/images/chat-smiley-icons/food-drink-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/food-drink-blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                          <li id="opt-four-group">
                                             <a href="#four-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Sticker</span>
                                                <img src="assets/images/chat-smiley-icons/sticker-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/sticker-blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                          <li id="opt-five-group">
                                             <a href="#five-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Hearts</span>
                                                <img src="assets/images/chat-smiley-icons/hearts-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/hearts-blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                          <li id="opt-six-group">
                                             <a href="#six-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Objects</span>
                                                <img src="assets/images/chat-smiley-icons/objects-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/objects_blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                          <li id="opt-seven-group">
                                             <a href="#seven-group" class="menuhover tooltip position-relative">
                                                <span class="tooltiptext left right-0">Pets & Nature</span>
                                                <img src="assets/images/chat-smiley-icons/pets-nature-grey.svg"
                                                   class="imgnone" alt="">
                                                <img src="assets/images/chat-smiley-icons/pets-nature-blue.svg"
                                                   class="imgblock" alt="">
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="pr-0 input-group-text menuhover chat-sender-btn">
                              <img src="assets/img/chat-icon/send-msg-grey.svg" class="grey-send-img w-h-22px" />
                              <img src="assets/img/header-icon/sendmsg.svg" class="blue-send-img w-h-22px" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="grprofiledropdown">
                  <div class="mb-3 bg-secondary"> <a class="p-4 dropdown-item" href="#">
                        Choose anything thats fits for you
                     </a>
                  </div>
                  <a class="px-4 py-3 dropdown-item d-flex" href="#" data-toggle="modal"
                     data-target="#snoozeconversation">
                     <img src="assets/img/header/delete-notification.svg" class="w-h-30px rounded-circle"> <span
                        class="mt-2 ml-2"> Snooze Conversation</span>
                  </a>
                  <a class="px-4 py-3 dropdown-item d-flex" href="#" data-toggle="modal"
                     data-target="#ignoreconversation">
                     <img src="assets/img/header/cancel-msg.svg" class="w-h-30px rounded-circle"> <span
                        class="mt-2 ml-2"> Ignore Message</span>
                  </a>
                  <a class="px-4 py-3 dropdown-item d-flex" href="#" data-toggle="modal" data-target="#deletemesg">
                     <img src="assets/img/header/trash.svg" class="w-h-30px rounded-circle"> <span class="mt-2 ml-2">
                        Delete Message</span>
                  </a>
                  <a class="px-4 py-3 dropdown-item d-flex" href="#" data-toggle="modal" data-target="#blockmodal">
                     <img src="assets/img/header/block.png" class="w-h-30px rounded-circle"> <span class="mt-2 ml-2">
                        Block Susan</span>
                  </a>
                  <a class="px-4 py-3 dropdown-item d-flex" href="#" data-toggle="modal"
                     data-target="#leaveGroupkmodal">
                     <img src="assets/img/header/leave-group.svg" class="w-h-30px rounded-circle"> <span
                        class="mt-2 ml-2"> Leave Group</span>
                  </a>
                  <a class="px-4 py-3 dropdown-item d-flex" href="#" data-toggle="modal"
                     data-target="#deleteGroupkmodal">
                     <img src="assets/img/header/delete-group.svg" class="w-h-30px rounded-circle"> <span
                        class="mt-2 ml-2"> Delete Group</span>
                  </a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="p-3 chat-header">
               <div class="d-flex">
                  <h4 class="mt-2">Create Group</h4>
                  <div class="ml-auto menuhover" data-toggle="tooltip" title="" data-original-title="Close">
                     <img src="assets/img/header/close.svg" class="w-h-32px rounded-circle imgnone">
                     <img src="assets/img/header/close-hover.svg" class="w-h-32px rounded-circle imgblock"
                        href="#groupchatblock" data-slide="prev">
                  </div>
               </div>
               <div class="mt-2">
                  <input type="text" class="form-control" placeholder="Search" id="mygrinput"
                     style="background: #F0F2F5; height: 40px; margin-top: 10px; border: none;">
               </div>
               <div class="mt-3 overflow-auto d-flex selectedlist scroll-x scroll-design scrollbox">
                  <div class="mb-2 mr-3 selectuser collapse" id="gf1">
                     <div class="position-relative">
                        <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle">
                        <div class="smallimg position-absolute">
                           <img src="assets/img/header/select-check.svg" class="w-h-22px rounded-circle" />
                        </div>
                     </div>
                     <p class="mt-2 text-center font-12">Jens</p>
                  </div>
                  <div class="mb-2 mr-3 selectuser collapse" id="gf2">
                     <div class="position-relative">
                        <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle">
                        <div class="smallimg position-absolute">
                           <img src="assets/img/header/select-check.svg" class="w-h-22px rounded-circle" />
                        </div>
                     </div>
                     <p class="mt-2 text-center font-12">Susan</p>
                  </div>
                  <div class="mb-2 mr-3 selectuser collapse" id="gf3">
                     <div class="position-relative">
                        <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle">
                        <div class="smallimg position-absolute">
                           <img src="assets/img/header/select-check.svg" class="w-h-22px rounded-circle" />
                        </div>
                     </div>
                     <p class="mt-2 text-center font-12">Dennis</p>
                  </div>
                  <div class="mb-2 mr-3 selectuser collapse" id="gf4">
                     <div class="position-relative">
                        <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle">
                        <div class="smallimg position-absolute">
                           <img src="assets/img/header/select-check.svg" class="w-h-22px rounded-circle" />
                        </div>
                     </div>
                     <p class="mt-2 text-center font-12">Petersen</p>
                  </div>
                  <div class="mb-2 mr-3 selectuser collapse" id="gf5">
                     <div class="position-relative">
                        <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle">
                        <div class="smallimg position-absolute">
                           <img src="assets/img/header/select-check.svg" class="w-h-22px rounded-circle" />
                        </div>
                     </div>
                     <p class="mt-2 text-center font-12">Sam</p>
                  </div>
               </div>
            </div>
            <div class="min-h-320 scroll-design scrollbox ">
               <ul class="p-3 chat-body" id="group_list">
                  <li>
                     <div class="mb-3 d-flex friend-list">
                        <div class="mr-3 align-self-start position-relative">
                           <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle"> <span
                              class="bg-success position-absolute status radius-25 profile-status nohover"></span>
                        </div>
                        <div class="p-2 px-3 bg-light w-100 font-14 radius-4">
                           <div class="float-left mr-3">
                              <p>Jens Behrman</p>
                              <p class="blue-text-light font-12">Founder and CEO StayToEnjoy</p>
                           </div>
                           <div class="float-right mt-2">
                              <div class="custom-control price-custom-control custom-radio" data-toggle="collapse"
                                 data-target="#gf1" id="activenext">
                                 <input type="checkbox" class="custom-control-input" id="glist1" name="example1">
                                 <label class="custom-control-label" for="glist1"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="mb-3 d-flex friend-list">
                        <div class="mr-3 align-self-start position-relative">
                           <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle"> <span
                              class="bg-success position-absolute status radius-25 profile-status nohover"></span>
                        </div>
                        <div class="p-2 px-3 bg-light w-100 font-14 radius-4">
                           <div class="float-left mr-3">
                              <p>Susan Miller</p>
                              <p class="blue-text-light font-12">Creative Designer</p>
                           </div>
                           <div class="float-right mt-2">
                              <div class="custom-control price-custom-control custom-radio" data-toggle="collapse"
                                 data-target="#gf2" id="activenext">
                                 <input type="checkbox" class="custom-control-input" id="glist2" name="example1">
                                 <label class="custom-control-label" for="glist2"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="mb-3 d-flex friend-list">
                        <div class="mr-3 align-self-start position-relative">
                           <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle"> <span
                              class="bg-success position-absolute status radius-25 profile-status nohover"></span>
                        </div>
                        <div class="p-2 px-3 bg-light w-100 font-14 radius-4">
                           <div class="float-left mr-3">
                              <p>Dennis Petersen</p>
                              <p class="blue-text-light font-12">Tour Guide</p>
                           </div>
                           <div class="float-right mt-2">
                              <div class="custom-control price-custom-control custom-radio" data-toggle="collapse"
                                 data-target="#gf3" id="activenext">
                                 <input type="checkbox" class="custom-control-input" id="glist3" name="example1">
                                 <label class="custom-control-label" for="glist3"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="mb-3 d-flex friend-list">
                        <div class="mr-3 align-self-start position-relative">
                           <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle"> <span
                              class="bg-success position-absolute status radius-25 profile-status nohover"></span>
                        </div>
                        <div class="p-2 px-3 bg-light w-100 font-14 radius-4">
                           <div class="float-left mr-3">
                              <p>Dennis Petersen</p>
                              <p class="blue-text-light font-12">Tour Guide</p>
                           </div>
                           <div class="float-right mt-2">
                              <div class="custom-control price-custom-control custom-radio" data-toggle="collapse"
                                 data-target="#gf4" id="activenext">
                                 <input type="checkbox" class="custom-control-input" id="glist4" name="example1">
                                 <label class="custom-control-label" for="glist4"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="mb-3 d-flex friend-list">
                        <div class="mr-3 align-self-start position-relative">
                           <img src="assets/img/header/profile-img.jpg" class="w-h-50px rounded-circle"> <span
                              class="bg-success position-absolute status radius-25 profile-status nohover"></span>
                        </div>
                        <div class="p-2 px-3 bg-light w-100 font-14 radius-4">
                           <div class="float-left mr-3">
                              <p>Sam Petersen</p>
                              <p class="blue-text-light font-12">Tour Guide</p>
                           </div>
                           <div class="float-right mt-2">
                              <div class="custom-control price-custom-control custom-radio" data-toggle="collapse"
                                 data-target="#gf5" id="activenext">
                                 <input type="checkbox" class="custom-control-input" id="glist5" name="example1">
                                 <label class="custom-control-label" for="glist5"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="p-2 chat-footer">
               <div class="btn btn-default w-100 disabled" id="grnext" href="#groupchatblock" data-slide="prev">Continue
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- group chat box end -->
