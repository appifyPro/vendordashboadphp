<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section create-voucher return-management-system shop-opening-hours" style="padding-bottom:80px">
	<div class="bg-none second_headers body_content p-0" style="z-index: 4500;">
		<div class="d-flex justify-content-center px-5 py-4">
			<a class="menuhover align-self-center tooltip position-relative" href="dashboard.php">
				<img src="assets/image/roundback.svg" class="imgnone left_arrow prev-step" width="35">
				<img src="assets/image/roundback_hover.svg" class="left_arrow prev-step imgblock" width="35">
				<span class="tooltiptext right font-12">Back to Dashboard</span>
			</a>
			<div class="midtitle custom-mid text-center font-24" style="flex: 1;">Opening Hours</div>
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
	<div class="margin-0-auto" style="max-width: 1200px; ">
		<div class="tab-content page_content mt-0 " style="padding:15px 15px 0; ">
			<div id="createVoucher" class="tab-pane active  pb-3" >
				<div class="row">
					<div class="col-lg-12">
						<div class="page_box p50 py-4 mb-4 box-shodow bg-white radius-5">
							<!--Start: opeinging hours-->
							<div class="form-group">
								<label class="font-weight-500">Add your opening hours</label>					
								<div class=" bg-secondary p-2" style="margin: 15px -50px 30px;">
									<div class="d-flex align-items-center pl-40" >
										
										<p class="pl-3 font-14">Add your opening hours that your customers know when your shop is open</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mb-4">
										<p class="mb-1 font-weight-500">Choose Shop</p>
										<div class="our-custom-select w-100 custom-select-sale">
											<div class="selected-value">
												<div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Choose Shop</div>
												<input type="text" name="shop-name">
											</div>
											<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:200PX;">
												<li>Choose Shop</li>
												<li>Shop 1</li>
												<li>Shop 2</li>
												<li>Shop 3</li>
												<li>Shop 4</li>
											</ul>
										</div>
									</div>
									<div class="form-group mb-4">
										<p class="mb-1 font-weight-500">Timezone</p>
										<div class="our-custom-select w-100 custom-select-sale">
											<div class="selected-value">
												<div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Timezone</div>
												<input type="text" name="shop-timezone">
											</div>
											<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:250PX;">
												<li value="" selected="selected">Timezone</li>
												<li value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</li>
												<li value="-11:00">(GMT -11:00) Midway Island, Samoa</li>
												<li value="-10:00">(GMT -10:00) Hawaii</li>
												<li value="-09:50">(GMT -9:30) Taiohae</li>
												<li value="-09:00">(GMT -9:00) Alaska</li>
												<li value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</li>
												<li value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</li>
												<li value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</li>
												<li value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</li>
												<li value="-04:50">(GMT -4:30) Caracas</li>
												<li value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</li>
												<li value="-03:50">(GMT -3:30) Newfoundland</li>
												<li value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</li>
												<li value="-02:00">(GMT -2:00) Mid-Atlantic</li>
												<li value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</li>
												<li value="+00:00" >(GMT) Western Europe Time, London, Lisbon, Casablanca</li>
												<li value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</li>
												<li value="+02:00">(GMT +2:00) Kaliningrad, South Africa</li>
												<li value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</li>
												<li value="+03:50">(GMT +3:30) Tehran</li>
												<li value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</li>
												<li value="+04:50">(GMT +4:30) Kabul</li>
												<li value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</li>
												<li value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</li>
												<li value="+05:75">(GMT +5:45) Kathmandu, Pokhara</li>
												<li value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</li>
												<li value="+06:50">(GMT +6:30) Yangon, Mandalay</li>
												<li value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</li>
												<li value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</li>
												<li value="+08:75">(GMT +8:45) Eucla</li>
												<li value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</li>
												<li value="+09:50">(GMT +9:30) Adelaide, Darwin</li>
												<li value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</li>
												<li value="+10:50">(GMT +10:30) Lord Howe Island</li>
												<li value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</li>
												<li value="+11:50">(GMT +11:30) Norfolk Island</li>
												<li value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</li>
												<li value="+12:75">(GMT +12:45) Chatham Islands</li>
												<li value="+13:00">(GMT +13:00) Apia, Nukualofa</li>
												<li value="+14:00">(GMT +14:00) Line Islands, Tokelau</li>
											</ul>
										</div>
									</div>
									<div class="form-group mb-4">
										<p class="mb-1 font-weight-500">Time Format</p>
										<div class="our-custom-select w-100 custom-select-sale">
											<div class="selected-value">
												<div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">24 hrs eg. (17:00)</div>
												<input type="text" name="shop-time-format">
											</div>
											<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:120PX;">
												<li>24 hrs eg. (17:00)</li>
												<li>AM - PM</li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<p class="mb-1 font-weight-500">Week starts</p>
										<div class="our-custom-select w-100 custom-select-sale">
											<div class="selected-value">
												<div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Choose</div>
												<input type="text" name="shop-week-start">
											</div>
											<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:220PX;">
												<li>Choose</li>
												<li>Monday</li>
												<li>Tuesday</li>
												<li>Wednesday</li>
												<li>Thursday</li>
												<li>Friday</li>
												<li>Saturday</li>
												<li>Sunday</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<img src="assets/img/opening-hours.jpg" width="100%"/>
								</div>
							</div>
						</div>
						<!--End: opeinging hours-->	
						<!--Start: opening hours-->
						<div class="page_box p50 py-4 mb-4 box-shodow bg-white radius-5">
							<label class="font-weight-500">Add your opening hours</label>	
							<div class="form-group">
								<div class=" bg-secondary p-2" style="margin: 15px -50px 30px;">
									<div class="d-flex align-items-center pl-40" >
										
										<p class="pl-3 font-14">Enter your opening hours</p>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-lg-6">
									<!--div class="form-group">												
										<p class="mb-1 font-weight-500">Number of shifts</p>	
										<select class="form-control">
											<option>Choose</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											
										</select>												
										</div-->
									<div class="form-group mb-4 zindex-20 position-relative">
										<div class="our-custom-select w-100 custom-select-sale">
											<div class="selected-value">
												<div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Add opening hours</div>
												<input type="text" name="shop-opening-hour">
											</div>
											<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:200PX;">
												<li value="1">Add opening hours</li>
												<li value="2">Shop is always open</li>
												<li value="3">Same time for all days</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="content" data-response="op1" style="display:block">
									<div >
										<div class="row mb-2">
											<div class="col-lg-3">
												<div class="form-group">	
													<span class="form-control bg-secondary d-flex align-items-center" >Monday</span>		
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													</p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#sift1" id="plus3"/>
													<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#sift1" id="minus3" style="display:none"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div id="sift1" class="collapse">
											<div class="row mb-2">
												<div class="col-lg-3">
													<div class="form-group">
														<span class="form-control bg-secondary d-flex align-items-center" >Monday 2nd shift</span>		
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
													<div class="d-flex align-items-center mb-2">
														<p class="mr-2" style="width:40px">From
														</p>
														<div class="input-group desktop-view position-relative">
															<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
															<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
													<div class="d-flex align-items-center mb-2">
														<p class="mr-2" style="width:40px">To
														</p>
														<div class="input-group desktop-view position-relative">
															<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
															<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
														</div>
													</div>
												</div>
												<div class="col-md-2 col-lg-3 ">
													<div class="d-flex justify-content-between py-3">
														<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#sift2" id="plus4"/>
														<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#sift2" id="minus4" style="display:none"/>
														<label class="switch mt-3 ml-1">
														<input type="checkbox">
														<span class="slider round"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div id="sift2" class="collapse">
											<div class="row mb-2">
												<div class="col-lg-3">
													<div class="form-group">
														<span class="form-control bg-secondary d-flex align-items-center" >Monday 3nd shift</span>
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
													<div class="d-flex align-items-center mb-2">
														<p class="mr-2" style="width:40px">From
														</p>
														<div class="input-group desktop-view position-relative">
															<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
															<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
													<div class="d-flex align-items-center mb-2">
														<p class="mr-2" style="width:40px">To
														</p>
														<div class="input-group desktop-view position-relative">
															<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
															<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
														</div>
													</div>
												</div>
												<div class="col-md-2 col-lg-3 text-right py-3">
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row mb-2">
											<div class="col-lg-3">
												<div class="form-group">	
													<span class="form-control bg-secondary d-flex align-items-center">Tuesday </span>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													<p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#tusift1" id="plus9"/>
													<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#tusift1" style="display:none" id="minus9"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div id="tusift1" class="collapse">
											<div class="row mb-2">
												<div class="col-lg-3">
													<div class="form-group">
														<span class="form-control bg-secondary d-flex align-items-center">Tuesday 2nd shift </span>	
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													<p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
												<div class="col-md-2 col-lg-3 ">
													<div class="d-flex justify-content-between py-3">
														<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" id="plus10" data-toggle="collapse" data-target="#tusift2" />
														<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" style="display:none" data-toggle="collapse" data-target="#tusift2" id="minus10"/>
														<label class="switch mt-3 ml-1">
														<input type="checkbox">
														<span class="slider round"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div id="tusift2" class="collapse">
											<div class="row mb-2">
												<div class="col-lg-3">
													<div class="form-group">	
														<span class="form-control bg-secondary d-flex align-items-center">Tuesday 3nd shift </span>													
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
													<div class="d-flex align-items-center mb-2">
														<p class="mr-2" style="width:40px">From
														</p>
														<div class="input-group desktop-view position-relative position-relative">
															<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
															<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-5 col-lg-3 ">
													<div class="d-flex align-items-center mb-2">
														<p class="mr-2" style="width:40px">To
														</p>
														<div class="input-group desktop-view position-relative">
															<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
															<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
														</div>
													</div>
												</div>
												<div class="col-md-2 col-lg-3 ">
													<div class="text-right py-3">
														<label class="switch mt-3 ml-1">
														<input type="checkbox">
														<span class="slider round"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row mb-2">
											<div class="col-lg-3">
												<div class="form-group">
													<span class="form-control bg-secondary d-flex align-items-center">Wednesday </span>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													</p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row mb-2">
											<div class="col-lg-3">
												<div class="form-group">
													<span class="form-control bg-secondary d-flex align-items-center">Thursday </span>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													</p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row mb-2">
											<div class="col-lg-3">
												<div class="form-group">
													<span class="form-control bg-secondary d-flex align-items-center">Friday </span>										
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													</p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row mb-2">
											<div class="col-lg-3">
												<div class="form-group">	
													<span class="form-control bg-secondary d-flex align-items-center">Saturday </span>											
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													</p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-lg-3">
												<div class="form-group">	
													<span class="form-control bg-secondary d-flex align-items-center">Sunday </span>										
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">From
													</p>
													<div class="input-group desktop-view position-relative position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
														<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-5 col-lg-3 ">
												<div class="d-flex align-items-center mb-2">
													<p class="mr-2" style="width:40px">To
													</p>
													<div class="input-group desktop-view position-relative">
														<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
														<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
													</div>
												</div>
											</div>
											<div class="col-md-2 col-lg-3 ">
												<div class="d-flex justify-content-between py-3">
													<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer"/>
													<label class="switch mt-3 ml-1">
													<input type="checkbox">
													<span class="slider round"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="content" data-response="op2">
								</div>
								<div class="content" data-response="op3">
									<div class="row mb-2">
										<div class="col-lg-3">
											<div class="form-group">	
												<input type="text" class="form-control bg-secondary" value="All days "/>		
											</div>
										</div>
										<div class="col-sm-6 col-md-5 col-lg-3 ">
											<div class="d-flex align-items-center mb-2">
												<p class="mr-2" style="width:40px">From
												</p>
												<div class="input-group desktop-view position-relative position-relative">
													<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
													<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-5 col-lg-3 ">
											<div class="d-flex align-items-center mb-2">
												<p class="mr-2" style="width:40px">To
												</p>
												<div class="input-group desktop-view position-relative">
													<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
													<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
												</div>
											</div>
										</div>
										<div class="col-md-2 col-lg-3">
											<div class="d-flex justify-content-between py-3">
												<img src="assets/img/plus.svg" class="w-h-32px"/>
												<label class="switch mt-3 ml-1">
												<input type="checkbox">
												<span class="slider round"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End: opening hours-->
						<!--Start: lunch break-->
						<div class="page_box p50 py-4 mb-4 box-shodow bg-white radius-5">
							<label class="font-weight-500">Add your lunch break</label>	
							<div class="form-group">
								<div class=" bg-secondary p-2" style="margin: 15px -50px 30px;">
									<div class="d-flex align-items-center pl-40" >
										
										<p class="pl-3 font-14">Did you make a lunch break?</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<span class="form-control bg-secondary d-flex align-items-center">Lunch Break </span>		
									</div>
								</div>
								<div class="col-sm-6 col-md-5 col-lg-3 ">
									<div class="d-flex align-items-center mb-2">
										<p class="mr-2" style="width:40px">From
										</p>
										<div class="input-group desktop-view position-relative position-relative">
											<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
											<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-5 col-lg-3 ">
									<div class="d-flex align-items-center mb-2">
										<p class="mr-2" style="width:40px">To
										</p>
										<div class="input-group desktop-view position-relative">
											<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
											<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
										</div>
									</div>
								</div>
								<div class="col-md-2 col-lg-3 text-right">
									<div class="d-flex justify-content-between py-3">
										<div>
											<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#break1"  id="plus1"/>
											<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#break1" style="display:none;" id="minus1"/>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse" id="break1">
								<div class="row">
									<div class="col-lg-3">
										<div class="form-group">
											<span class="form-control bg-secondary d-flex">Lunch Break2</span>	
										</div>
									</div>
									<div class="col-sm-6 col-md-5 col-lg-3 ">
										<div class="d-flex align-items-center mb-2">
											<p class="mr-2" style="width:40px">From
											</p>
											<div class="input-group desktop-view position-relative position-relative">
												<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
												<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-5 col-lg-3 ">
										<div class="d-flex align-items-center mb-2">
											<p class="mr-2" style="width:40px">To
											</p>
											<div class="input-group desktop-view position-relative">
												<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
												<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 col-lg-3 text-right">
										<div class="d-flex justify-content-between py-3">
											<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#break2" id="plus2"/>
											<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#break2" id="minus2" style="display:none"/>
											<label class="switch mt-3 ml-1">
											<input type="checkbox">
											<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse" id="break2">
								<div class="row">
									<div class="col-lg-3">
										<div class="form-group">
											<span class="form-control bg-secondary d-flex align-items-center">Lunch Break3 </span>	
										</div>
									</div>
									<div class="col-sm-6 col-md-5 col-lg-3 ">
										<div class="d-flex align-items-center mb-2">
											<p class="mr-2" style="width:40px">From
											</p>
											<div class="input-group desktop-view position-relative position-relative">
												<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="Start Time" readonly>
												<div class="btn-static h-50px" style="z-index:15"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-5 col-lg-3 ">
										<div class="d-flex align-items-center mb-2">
											<p class="mr-2" style="width:40px">To
											</p>
											<div class="input-group desktop-view position-relative">
												<input type="text" class="form-control showCustomTimePicker r" name="date" placeholder="End Time" readonly>
												<div class="btn-static h-50px"><img src="assets/img/add_time.svg" class="custImgwdh"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 col-lg-3 text-right">
										<div >
											<label class="switch mt-3 ml-1">
											<input type="checkbox">
											<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End: lunch break-->
						<!--Start: holidays-->
						<div class="page_box p50 py-4 mb-4 box-shodow bg-white radius-5">
							<label class="font-weight-500">Add your holidays</label>	
							<div class="form-group">
								<div class=" bg-secondary p-2" style="margin: 15px -50px 30px;">
									<div class="d-flex align-items-center pl-40" >
										
										<p class="pl-3 font-14">Let the community know when you make holidays</p>
									</div>
								</div>
							</div>
							<p class="mb-2">Description</p>
							<div class="row "   >
								<div class="col-lg-9">
									<div class="form-group">
										<textarea onkeyup="textAreaAdjust(this)" class="form-control expand" style="overflow:hidden" placeholder="Type"></textarea>
										<!---textarea  class="form-control"  placeholder="Type" rows="3"></textarea-->
										<p class="font-12 mt-1 text-right">0 / 50 Characters</p>
									</div>
								</div>
							</div>
							<div>
								<div class="row "   >
									<div class="col-lg-5 col-md-5">
										<div class="form-group">
											<div class="d-flex">
												<p class="font-14 mb-2">Start</p>
											</div>
											<div class="checkin_part bg-light">
												<div class="t-datepicker checkin-and-checkpout date1">
													<div class="t-check-in"></div>
													<div class="t-check-out"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-5">
										<div class="form-group">
											<p class="font-14 mb-2">Set a start time</p>
											<input class="form-control font-14 showCustomTimePicker " placeholder="Start Time"/>
										</div>
									</div>
									<div class="col-md-2 col-lg-4 ">
										<div class="d-flex justify-content-between mt-5 py-2">
											<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" id="plus5" data-toggle="collapse" data-target="#holidays"/>
											<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" id="minus5" style="display:none" data-toggle="collapse" data-target="#holidays"/>
											<label class="switch mt-3 ml-1">
											<input type="checkbox">
											<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
								<div id="holidays" class="collapse">
									<div class="row "   >
										<div class="col-lg-5 col-md-5">
											<div class="form-group">
												<div class="d-flex">
													<p class="font-14 mb-2">Start</p>
												</div>
												<div class="checkin_part bg-light">
													<div class=" t-datepicker class_a checkin-and-checkpout date2">
														<div class="t-check-in"></div>
														<div class="t-check-out"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-5">
											<div class="form-group">
												<p class="font-14 mb-2">Set a start time</p>
												<input class="form-control font-14 showCustomTimePicker " placeholder="Start Time"/>
											</div>
										</div>
										<div class="col-md-2 col-lg-4 ">
											<div class="text-right mt-5 py-2">
												<label class="switch mt-3 ml-1">
												<input type="checkbox">
												<span class="slider round"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End: holidays-->
						<!--Start: renovation-->
						<div class="page_box p50 py-4 mb-4 box-shodow bg-white radius-5">
							<label class="font-weight-500">Add your holidays</label>	
							<div class="form-group">
								<div class=" bg-secondary p-2" style="margin: 15px -50px 30px;">
									<div class="d-flex align-items-center pl-40" >
										
										<p class="pl-3 font-14">Maybe you have temporarily closed due to renovation or other reasons</p>
									</div>
								</div>
							</div>
							<p class="mb-2">Description</p>
							<div class="row "   >
								<div class="col-lg-9">
									<div class="form-group">
										<textarea onkeyup="textAreaAdjust(this)" class="form-control expand" style="overflow:hidden" placeholder="Type"></textarea>
										<p class="font-12 mt-1 text-right">0 / 50 Characters</p>
									</div>
								</div>
							</div>
							<div>
								<div class="row "   >
									<div class="col-lg-5 col-md-5">
										<div class="form-group">
											<div class="d-flex">
												<p class="font-14 mb-2">Start</p>
											</div>
											<div class="checkin_part bg-light">
												<div class="t-datepicker checkin-and-checkpout date3" >
													<div class="t-check-in"></div>
													<div class="t-check-out"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-5">
										<div class="form-group">
											<p class="font-14 mb-2">Set a start time</p>
											<input class="form-control font-14 showCustomTimePicker " placeholder="Start Time"/>
										</div>
									</div>
									<div class="col-md-2 col-lg-4 ">
										<div class="d-flex justify-content-between mt-5 py-2">
											<img src="assets/img/plus.svg" class="w-h-32px cursor-pointer" data-toggle="collapse" data-target="#reason" id="plus8"/>
											<img src="assets/img/minus.svg" class="w-h-32px cursor-pointer" style="display:none" data-toggle="collapse" data-target="#reason" id="minus8"/>
											<label class="switch mt-3 ml-1">
											<input type="checkbox">
											<span class="slider round"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="collapse" id="reason">
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group">
												<div class="d-flex">
													<p class="font-14 mb-2">Start</p>
												</div>
												<div class="checkin_part bg-light">
													<div class="t-datepicker checkin-and-checkpout date4">
														<div class="t-check-in"></div>
														<div class="t-check-out"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-5">
											<div class="form-group">
												<p class="font-14 mb-2">Set a start time</p>
												<input class="form-control font-14 showCustomTimePicker " placeholder="Start Time"/>
											</div>
										</div>
										<div class="col-md-2 col-lg-4 ">
											<div class="text-right mt-5 py-2">
												<label class="switch mt-3 ml-1">
												<input type="checkbox">
												<span class="slider round"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End: renovation-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="time-picker radius-5 p-5 bg-white position-absolute" style="width: 475px;display:none;z-index: 99;box-shadow: 0 0 10px #ccc;">
	<div class="heading"> <span class="text-uppercase font-weight-500 text-dark">enter time</span> </div>
	<div class="time-input mt-2 d-flex justify-content-between align-items-center">
		<div class="hours-div">
			<input type="text" name="hours" style="border: 3px solid #05224c;width: 135px;height: 120px;font-size: 60px;" class="text-center default-placeholder text-dark" placeholder="0"> <span class="label">Hour</span> </div>
		<div class="divider"> <span class="font-weight-bold text-dark" style="font-size: 60px;">:</span> </div>
		<div class="min-div">
			<input type="text" name="minute" style="border: 3px solid transparent;background:#dcdcdc;width: 135px;height: 120px;font-size: 60px;" class="text-center default-placeholder text-dark" placeholder="00"> <span class="label">Minute</span> </div>
		<div class="am-pm">
			<div class="border radius-5">
				<div class="am p-3 font-weight-500 format-switcher cursor-pointer text-dark active">AM</div>
				<div class="pm p-3 border-top format-switcher cursor-pointer font-weight-500 text-dark">PM</div>
			</div> <span class="label">&nbsp;</span> </div>
	</div>
	<div class="settings mt-4 d-flex justify-content-between align-items-center">
		<div class="timer-icon">
			<!--<img src="assets/img/timer-img.png" width="30">--></div>
		<div class="buttons">
			<button class="btn text-uppercase font-weight-600 close-timer font-14  mr-5 hover-red  text-center bg-secondary hover-grey font-blue" type="button"> Cancel </button>
			<button class="btn text-uppercase font-weight-600 submit font-14 text-center hover-grey bg-secondary font-blue" type="button"> Ok </button>
		</div>
	</div>
</div>
<!--div class="sticky-footer">
	<a href="" class="btn font-16 text-danger">Delete</a> <a href="" class="btn font-16">Save as Draft</a>  <a href="" class="btn btn-primary font-16 ml-2 py-1 px-3">Publish</a>
	</div-->

<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
