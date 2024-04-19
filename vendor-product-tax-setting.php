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
				<div class="midtitle custom-mid align-self-center font-26">Product Tax Setting</div>
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
			<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Product Tax Setting</div>
			<div class="tab-content page_content mt-0 shop-bundel-section ">
				<div class="tab-pane active">
					<div class="ps-section--shopping w-100 d-inline-block p-4 ps-invoice-details">
						<div class="w-100">
							<div class="card border-0 shadow w-100" style="overflow:unset">
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="title font-24 color-black font-weight-500 mb-4">Base taxes</div>
											<p class="line-height1.5 mb-5 font-15">All applicable taxes for United States. These taxes will be used unless overrides are specified below.</p>
											<a class="font-15 bg-secondary px-5 py-3 text-dark radius-5 hover-grey reset-rate" href="#">Reset to default tax rates</a>
										</div>
										<div class="col-md-8 col-12">
											<div class="tax-rule border radius-5">
												<div class="country-tax p-4">
													<div class="font-16 pb-4 color-black">Search for Prodcut Categorie you want add Tax</div>
													<div class="title mb-2 font-14 color-black">What kind of Tax you want add?</div>
													<div class="taxType light d-flex align-items-center mb-3 pb-3">
														<div class="our-custom-select sales-type-dropdown w-100 mr-3 custom-select-sale">
															<div class="selected-value">
																<div class="sel-value font-14 font-blue overflow-hidden" style="white-space:nowrap">Select</div>
																<input type="text" name="tax_type" class="d-none"/>
															</div>
															<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:150PX;">
																<li value="">Select</li>
																<li value="Bahrain">Sales Tax</li>
																<li value="Bhutan">VAT</li>
																<li value="United States">GST</li>
															</ul>
														</div>
														<div class="our-custom-select product-dropdown w-100 ml-3 custom-select-sale">
															<div class="selected-value">
																<div class="sel-value font-14 font-blue overflow-hidden" style="white-space:nowrap">Select</div>
																<input type="text" name="product" class="d-none"/>
															</div>
															<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:150PX;">
																<li value="">Select</li>
																<li value="Bahrain">Physical Product</li>
																<li value="Bhutan">Digital Service</li>
															</ul>
														</div>
													</div>
													<div class="product-category mb-3 pb-2">
														<div class="row m-0">
															<div class="col-md-9 p-0">
																<input placeholder="Search Product Category" class="form-group default-placeholder bg-secondary m-0 radius-5 font-blue font-16 search-product">
																<div uk-drop="mode: click" class="searchs__results hidden shadow bg-white uk-drop uk-drop-bottom-left mt-0">
																	<div class="p-3">
																		<ul data-simplebar style="min-height:230px;max-height:230px">
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">iPhone 11</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-betwee p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">iPhone 11 Pro</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">iPhone 11 Pro Max</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">iPhone X</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">iPhone XR</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">Sumgsung M12</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">Sumgsung Galaxy F62</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">Sumgsung F41</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">Sumgsung F12</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">Sumgsung Galaxy M42</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																			<li class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
																				<a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
																					<div class="product-and-category line-height-default">
																						<span class="recent-search">Sumgsung Galaxy M52</span>
																						<span class="font-12 font-weight-600 text-dark d-block w-100">Smartphone & Communications</span>
																					</div>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
															
															</div>
														</div>
													</div>
													<div class="text-uppercase mb-2 font-14 color-black font-weight-500">country tax</div>
													<div class="row">
														<div class="col-md-4 col-12">
															<div class="our-custom-select country-dropdown w-100 custom-select-sale">
																<div class="selected-value">
																	<div class="sel-value font-14 font-blue overflow-hidden" style="white-space:nowrap">Select Country</div>
																	<input type="text" name="country" class="d-none"/>
																</div>
																<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:200PX;">
																	<li value="">Select Country</li>
																	<li value="Bahrain">Bahrain</li>
																	<li value="Bhutan">Bhutan</li>
																	<li value="United States">United States</li>
																	<li value="Vietnam">Vietnam</li>
																</ul>
															</div>
														</div>
														<div class="col-md-4 col-12">
															<div class="our-custom-select state-dropdown w-100 custom-select-sale">
																<div class="selected-value">
																	<div class="sel-value font-14 font-blue overflow-hidden" style="white-space:nowrap">Select State</div>
																	<input type="text" name="state" class="d-none"/>
																</div>
																<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:200PX;">
																	<li value="">Select State</li>
																	<li value="Alabama">Alabama</li>
																	<li value="Alaska">Alaska</li>
																	<li value="Arizona">Arizona</li>
																	<li value="American Somoa">American Somoa</li>
																</ul>
															</div>
														</div>
														<div class="col-md-4 col-12">
															<div class="our-custom-select city-dropdown w-100 custom-select-sale">
																<div class="selected-value">
																	<div class="sel-value font-14 font-blue overflow-hidden" style="white-space:nowrap">Select City</div>
																	<input type="text" name="city" class="d-none"/>
																</div>
																<ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:200PX;">
																	<li value="">Select Country</li>
																	<li value="Bahrain">Bahrain</li>
																	<li value="Bhutan">Bhutan</li>
																	<li value="United States">United States</li>
																	<li value="Vietnam">Vietnam</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="text-right mt-4">
														<div class="d-inline-block">
															<button type="button" class="bg-light-blue text-white py-2 radius-5 px-5 text-center font-14 addToTaxTable">Add to tax table</button>
														</div>
													</div>
												</div>
												<div class="regions-tax border-top p-4" style="display:none;">
													<div class="title text-uppercase mb-4 font-14 color-black font-weight-500">Regions</div>
													<div class="region">
													</div>
													<div class="addtoTable text-right">
														<button type="button" class="bg-light-blue text-white py-2 radius-5 px-5 text-center font-14 saveToTaxTable">Save</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card border-0 shadow w-100 mt-5">
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="title font-24 color-black font-weight-500 mb-4">Tax rates</div>
											<p class="line-height1.5 mb-4 font-15">A list of all the tax rates for the countries you ship to. To add a country to this list, <a class="light-blue font-15" href="#">go to Shipping settings</a> and click on Add a country.</p>
											<a class="light-blue font-15" href="#">Need help setting up taxes?</a>
										</div>
										<div class="col-md-8 col-12">
											<div class="">
												<table id="country-tax-list" class="table table-responsive table-centered mb-0">
													<thead style="background: #eef2f7;">
														<tr>
															<!--<th>
																<input type="checkbox" class="form-check-input h-auto m-0" id="customCheck1">
															</th>-->
															<th class="text-capitalize font-nunito color-black font-15 destination">Destination</th>
															<th class="text-capitalize font-nunito color-black font-15 countryTaxRate">Country Tax Rate</th>
															<th class="text-capitalize font-nunito color-black font-15 overrides">#Overrides</th>
															<th class="text-capitalize font-nunito color-black font-15 subRegions">Sub-regions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th class="font-nunito font-14 light-blue">
																<img src="img/flag/germany.png" width="30" class="vertical-middle mr-2">
																Bahrain
															</th>
															<th class="font-nunito font-14 text-muted">0%</th>
															<th class="font-nunito font-14"></th>
															<th class="font-nunito font-14"></th>
														</tr>
														<tr class="odd">
															<th class="font-nunito font-14 light-blue">
																<img src="img/flag/germany.png" width="30" class="vertical-middle mr-2">
																Bhutan
															</th>
															<th class="font-nunito font-14 text-muted">0%</th>
															<th class="font-nunito font-14"></th>
															<th class="font-nunito font-14"></th>
														</tr>
														<tr>
															<th class="font-nunito font-14 light-blue">
																<img src="img/flag/germany.png" width="30" class="vertical-middle mr-2">
																Rest of World
															</th>
															<th class="font-nunito font-14 text-muted">0%</th>
															<th class="font-nunito font-14"></th>
															<th class="font-nunito font-14"></th>
														</tr>
														<tr class="odd">
															<th class="font-nunito font-14 light-blue">
																<img src="img/flag/germany.png" width="30" class="vertical-middle mr-2">
																United States
															</th>
															<th class="font-nunito font-14 text-muted">Depends on county</th>
															<th class="font-nunito font-14"></th>
															<th class="font-nunito font-14 text-muted">62 states</th>
														</tr><tr>
															<th class="font-nunito font-14 light-blue">
																<img src="img/flag/germany.png" width="30" class="vertical-middle mr-2">
																Vietnam
															</th>
															<th class="font-nunito font-14 text-muted">0%</th>
															<th class="font-nunito font-14"></th>
															<th class="font-nunito font-14"></th>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>