<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system create-new-invoice" style="padding-bottom:80px">
	<?php include("side-navigation.php");?>
	<div class ="right-side-section">	
	<div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
			<div class="text-center position-relative mx-3">
				<a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn" href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
					<img src="img/next.svg" class="imgblock" alt="Back" width="35">
				</a>
				<div class="midtitle custom-mid align-self-center font-26">Delivery Note Overview</div>
			</div>
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
		<div class="margin-0-auto">
			<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Delivery Note Overview
				<p class="d-block font-16 greyText-color">Find all Products you list </p>
			</div>
			<div class="dataTable-wrapper px-4 pb-5 pt-3 mb-5">
				<div class="calender-apart d-flex align-items-center">
					<h5 class="font-16 font-weight-500 mr-4 mb-0">Choose Date:</h5>
				<div class="calender-button">
				<input type="text" id="date-range-picker" class="calender-button-click">
				</div>
				</div>
					<table id="vendor-deleiveryNote-overview" class="display table table-responsive" style="width:100%">
											<thead>
												<tr>
													<th class="text-capitalize font-nunito font-15">Invoice ID</th>
													<th class="text-capitalize font-nunito font-15">Order ID</th>
													<th class="text-capitalize font-nunito font-15">Date</th>
													<th class="text-capitalize font-nunito font-15">Customer</th>
													<th class="text-capitalize font-nunito font-15">Product</th>
													<th class="text-capitalize font-nunito font-15">Status</th>
													<th class="text-capitalize font-nunito font-15">Total Amount</th>
													<th class="text-capitalize font-nunito font-15">Amount Due</th>
													<th class="text-capitalize font-nunito font-15 text-center" style="width: 125px;">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#" class="text-body fw-bold font-14 font-nunito font-weight-bold">#BM9708</a> </td>
													<td><a href="#" class="text-body fw-bold font-14 font-nunito font-weight-bold">#OR9708</a> </td>
													<td class="font-14 font-nunito text-muted">
														August 05 2018 <br><small class="text-muted">10:29 PM</small>
													</td>
													<td class="font-nunito text-muted">
														Robert Brown
													</td>
													<td class="font-14 font-nunito text-muted">
														Pioneer Mens Jeans No.1...
													</td>
													<td class="font-14 font-nunito text-muted">
														<h5><span class="badge badge-success-lighten"><i class="fa fa-coin"></i> Paid</span></h5>
													</td>
													<td class="font-nunito text-muted">
														$176.41
													</td>
													<td class="font-nunito text-muted">
														$176.41
													</td>
													<td class="text-center elipsis-click">
																	<button class="elipsis-click-icon dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	</button>
																	<div class="dropdown-menu pr-3" aria-labelledby="dropdownMenu2">
																					<button class="dropdown-item" type="button">View</button>
																					<button class="dropdown-item" type="button">Edit</button>
																					<button class="dropdown-item red-text" type="button">Delete</button>
																	</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-body fw-bold font-14 font-nunito font-weight-bold">#BM9708</a> </td>
													<td><a href="#" class="text-body fw-bold font-14 font-nunito font-weight-bold">#OR9708</a> </td>
													<td class="font-14 font-nunito text-muted">
														August 05 2018 <br><small class="text-muted">10:29 PM</small>
													</td>
													<td class="font-nunito text-muted">
														Robert Brown
													</td>
													<td class="font-14 font-nunito text-muted">
														Pioneer Mens Jeans No.1...
													</td>
													<td class="font-14 font-nunito text-muted">
														<h5><span class="badge badge-success-lighten"><i class="fa fa-coin"></i> Paid</span></h5>
													</td>
													<td class="font-nunito text-muted">
														$176.41
													</td>
													<td class="font-nunito text-muted">
														$176.41
													</td>
													<td class="text-center elipsis-click">
																	<button class="elipsis-click-icon dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	</button>
																	<div class="dropdown-menu pr-3" aria-labelledby="dropdownMenu2">
																					<button class="dropdown-item" type="button">View</button>
																					<button class="dropdown-item" type="button">Edit</button>
																					<button class="dropdown-item red-text" type="button">Delete</button>
																	</div>
													</td>
												</tr>
												<tr>
													<td><a href="#" class="text-body fw-bold font-14 font-nunito font-weight-bold">#BM9708</a> </td>
													<td><a href="#" class="text-body fw-bold font-14 font-nunito font-weight-bold">#OR9708</a> </td>
													<td class="font-14 font-nunito text-muted">
														August 05 2018 <br><small class="text-muted">10:29 PM</small>
													</td>
													<td class="font-nunito text-muted">
														Robert Brown
													</td>
													<td class="font-14 font-nunito text-muted">
														Pioneer Mens Jeans No.1...
													</td>
													<td class="font-14 font-nunito text-muted">
														<h5><span class="badge badge-success-lighten"><i class="fa fa-coin"></i> Paid</span></h5>
													</td>
													<td class="font-nunito text-muted">
														$176.41
													</td>
													<td class="font-nunito text-muted">
														$176.41
													</td>
													<td class="text-center elipsis-click">
																	<button class="elipsis-click-icon dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	</button>
																	<div class="dropdown-menu pr-3" aria-labelledby="dropdownMenu2">
																					<button class="dropdown-item" type="button">View</button>
																					<button class="dropdown-item" type="button">Edit</button>
																					<button class="dropdown-item red-text" type="button">Delete</button>
																	</div>
													</td>
												</tr>
												
											</tbody>
					</table>
			</div>
		</div>
	</div>
</div>

<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>