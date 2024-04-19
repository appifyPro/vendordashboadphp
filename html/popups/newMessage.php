<!-- nem message box for chat start -->
<div
   style="-webkit-box-shadow: 0 0 15px rgba(0, 0, 0,.4);box-shadow: 0 0 8px rgba(0, 0, 0,.4);border-radius: 8px;width: 360px;right: 0px;padding: 10px 0;bottom: -450px;z-index: 9999;"
   class="bg-white new-message-option position-relative chat-start">
   <div class="new-message-option border-bottom">
      <div class="px-4 pb-2 drop_headline d-flex align-items-center justify-content-between">
         <h4 class="mb-0 chat-top-title">Start a new conversation</h4>
         <div class="menuhover position-relative tooltip" onclick="closeNewMessage()">
            <img src="assets/img/cancel.svg" class="cursor-pointer imgnone" alt="close" width="35">
            <img src="assets/img/cancel-hover.svg" class="imgblock" alt="close" width="35">
            <span class="right-0 m-0 tooltiptext top chat-bottom center font-12 line-height-default">Close</span>
         </div>
      </div>
   </div>
   <div id="chat-screen-start" class="chat-screen-start-cl">
      <div class="py-5 px-5 text-center">
         <img src="assets/img/chat-icon/talklys_blue-big-icon.svg" class="m-auto pb-5" width="30" alt="">
         <h5 class="text-center chat-opt-text px-5 mx-5">What kind of connection do you want to create</h5>
      </div>
      <div class="pt-5 pb-4 px-5 mt-2 mb-0 drop_headline chat-box-active d-flex justify-content-around">
         <div class="chat-options" id="private-click-btn" onClick="closeNewMessage()">
            <div class="text-center blue-round-circel direct">
               <img src="assets/img/chat-icon/private-chat-icon.svg" alt="" width="30">
            </div>
            <span class="px-4 py-1 cursor-pointer font-weight-bold-blue-text d-inline-block"
               style="width: 100px;">Private</span>
         </div>
         <div class="chat-options" onClick="closeNewMessage()">
            <div class="text-center blue-round-circel group group-click">
               <img src="assets/img/chat-icon/group-chat-icon.svg" alt="" width="30">
            </div>
            <span class="px-4 py-1 cursor-pointer font-weight-bold-blue-text d-inline-block"
               style="width: 100px">Group</span>
         </div>
         <div class="chat-options">
            <div class="text-center group blue-round-circel">
               <img src="assets/img/chat-icon/vendor-chat-icon.svg" alt="" width="28">
            </div>
            <span class="px-4 py-1 cursor-pointer font-weight-bold-blue-text d-inline-block"
               style="width: 100px">Vendor</span>
         </div>
      </div>
      <div class="text-center mt-4 d-none">
         <img src="assets/img/chat-icon/connected-world-rafiki.svg" class="m-auto" width="55%" alt="">
      </div>
   </div>
</div>
<!-- new message box for chat end -->
