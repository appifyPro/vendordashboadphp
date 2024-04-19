<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system loyalty-card-section" style="padding-bottom: 80px;">
	<?php include("side-navigation.php");?>
	<div id="wrapper" class="search-mobile">
						<!-- Header -->
						<div class="header_inner">
										<!-- search icon for mobile -->
										<div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
										<div class="header_search"><i class="fa fa-search"></i> 
														<input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.." autocomplete="off" aria-expanded="false">
														<div uk-drop="mode: click" class="header_search_dropdown uk-drop">
																					
																		<h4 class="search_title"> Recently </h4>
																		<ul>
																						<li> 
																										<a href="#">  
																														<img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
																														<div class="list-name">  Erica Jones </div>
																										</a> 
																						</li> 
																						<li> 
																										<a href="#">  
																														<img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
																														<div class="list-name">  Coffee  Addicts </div>
																										</a> 
																						</li>
																						<li> 
																										<a href="#">  
																														<img src="assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
																														<div class="list-name"> Mountain Riders </div>
																										</a> 
																						</li>
																						<li> 
																										<a href="#">  
																														<img src="assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
																														<div class="list-name"> Property Rent And Sale  </div>
																										</a> 
																						</li>
																						<li> 
																										<a href="#">  
																														<img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
																														<div class="list-name">  Erica Jones </div>
																										</a> 
																						</li>
																		</ul>

														</div>
										</div>
						</div>
		</div>
</div>

<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
