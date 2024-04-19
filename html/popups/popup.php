<?php include('reportNotification.php');?>
<?php include('languageSwitcher.php');?>
<?php include('currencySwitcher.php');?>
<?php include('reportNotification.php');?>
<?php include('snoozeConversation.php');?>
<?php include('changeChatbackground.php');?>
<?php include('addUsergroup.php');?>
<?php include('forward-message.php'); ?>
<?php include('feedback.php');?>
<?php //include('newMessage.php');?>
<div class="position-fixed mainchatbox">
   <div class="d-flex chat-flex">
      <div class="d-flex chat-window-flex">
         <?php include('groupChat.php');?>
         <?php include('singleChat.php');?>
      </div>
      <?php include('groupChatBox.php');?>
      <?php include('singleChatbox.php') ?>
      <?php include('newMessage.php');?>
   </div>
</div>
<?php include('ignoreMessage.php');?>
<?php include('deleteMessage.php');?>
<?php include('calender.php');?>
<?php include('blockUserMessage.php');?>
<?php include('audioVideocall.php');?>
<?php include('userPin.php');?>
