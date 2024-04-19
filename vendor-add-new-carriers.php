<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>
	
<div class="main_body_content bg-secondary pb-5 return-management-system ml-0">
	<?php include("side-navigation.php");?>
	<div class ="right-side-section">	
		<div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
			<div class="text-center position-relative mx-3">
				<a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn" href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
					<img src="img/next.svg" class="imgblock" alt="Back" width="35">
				</a>
				<div class="midtitle custom-mid align-self-center font-26">Add New Carriers</div>
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
			<div class="px-4 mx-1 font-26 font-blue font-weight-500 pt-5 desktop-view">Add New Carriers</div>
			<div class="carrier-section ">
				<div class="m-3 px-3 mt-4">
					<div class="row">
						<div class="col-xl-6">							
							<div class="d-flex box-shodow radius-4 bg-white align-items-center mb-3">	
								<div class="ml-3" style="flex-shrink: 0;">
									<img src="assets/img/noun_car delivery.svg" class="w-h-50px" alt="" />
								</div>
								<p class="color-default mx-2">Setup your shipping carrier and use the provider you work already with.</p>	
								<div class="ml-auto">
									<a class="btn btn-default p-4">
									+ ADD
									</a>
								</div>
								
								
							</div>											
						</div>
						
						<div class="col-xl-6">	
							
							<div class="d-flex box-shodow radius-4 bg-white align-items-center mb-3" >	
								<div class="ml-3" style="flex-shrink: 0;">
									<img src="assets/img/noun_map.svg" class="w-h-50px" alt="" />
								</div>
								<p class="color-default mx-2">Customers can pick up their order from your store location. Provide them with instructions or how and when they can pick up their order.</p>	
								
								<div class="ml-auto">
									<a class="btn btn-default p-4">
									+ ADD
									</a>
								</div>
								
							</div>
																
						</div>
					</div>
				</div>
				<div class="mx-3  px-3 mt-4 shipinglist">				
					<div class="row">
						<div class="col-lg-6">
							<div class="py-4 d-flex">
								<span class="color-default font-14 font-weight-600">Shipping Carrier</span>
								<span class="ml-auto color-default font-14 pr-4 font-weight-600">Actions</span>
							</div>

							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/fedex.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">FedEx</p>
									</div>
									
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#fedModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/ups.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">UPS</p>
									</div>
									
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#upsModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/usps.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">USPS</p>
									</div>
									
								</div>
								<div class="ml-auto">
									<a class="btn btn-default"  data-toggle="modal" data-target="#uspsModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/amazon.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Amazon Logistics</p>
									<small>For Amazon Orders</small>
									</div>
									
								</div>
								<div class="ml-auto">
									<a class="btn btn-default" data-toggle="modal" data-target="#amazonlogModal">
									Connect
									</a>
								</div>									
							</div>

							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/shipping.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="mt-2 font-weight-600 font-18">Amazon Shipping</p>
										<small>For non-Amazon Orders</small>
									</div>
									
									
								</div>
								<div class="ml-auto">
									<a class="btn btn-default"  data-toggle="modal" data-target="#amazonModal">
									Connect
									</a>
								</div>									
							</div>

							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/apc.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">APC</p>
									</div>
									
								</div>
								<div class="ml-auto">
									<a class="btn btn-default" data-toggle="modal" data-target="#apcModal">
									Connect
									</a>
								</div>									
							</div>

							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/asen.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Asendia</p>
									</div>
									
								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default" data-toggle="modal" data-target="#asceModal">
									Connect
									</a>
								</div>									
							</div>

							
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/post.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Australia Post</p>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#auspostModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/dhl1.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">DHL</p>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#dhlModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/dhlde.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">DHL DE</p>
										<small>Use only if shipping from Germany</small>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#dhldeModal">
									Connect
									</a>
								</div>									
							</div>
						</div>
						<div class="col-lg-6">
							<div class="py-4 d-flex">
								<span class="color-default font-14 font-weight-600">Shipping Carrier</span>
								<span class="ml-auto color-default font-14 pr-4 font-weight-600">Actions</span>
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/dpd.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">DPD</p>									
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#dpdModal">
									Connect
									</a>
								</div>									
							</div>
	
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/dpdlocal.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">DPD Local</p>									
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#dpdlocalModal">
									Connect
									</a>
								</div>									
							</div>
	
								
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/dx.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">DX</p>
										<small>Connection takes up to 2 weeks</small>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#dxModal">
									Connect
									</a>
								</div>									
							</div>
	
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/hermesger.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Hermes World</p>
										<small>For orders from Germany</small>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#hermesgerModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/myhermes.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">MyHermes</p>
										<small>Offers special rates through veeqo</small>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#myhermesModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/myhermes.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">MyHermes OwnAccount</p>
										<small>Your own account</small>
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#myhermesownModal">
									Connect
									</a>
								</div>									
							</div>
	
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/parcel.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Parcelforce</p>									
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#percelModal">
									Connect
									</a>
								</div>									
							</div>
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/royalmail.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Royal Mail</p>			
										<small>Connection takes up to 5 working days</small>						
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#royalModal">
									Connect
									</a>
								</div>									
							</div>	
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/ukmail.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">UK Mail</p>									
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#ukMailModal">
									Connect
									</a>
								</div>									
							</div>	
							<div class="d-flex box-shodow radius-4 bg-white mb-3">
								<div class="py-1 px-4 d-flex align-items-center">
									<div class="imgblock d-flex align-items-center">
										<img src="assets/img/yodel.png" class="img-fluid"/>
									</div>
									<div class="mt-0 pl-3">
										<p class="font-weight-600 font-18">Yodel</p>									
									</div>								
								</div>
								<div class="ml-auto">
									<a class="btn btn-default " data-toggle="modal" data-target="#yodelModal">
									Connect
									</a>
								</div>									
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>





<!-- Start: shiplist Modal-->
<!--Start Fedex Modal-->
<div class="modal fade feedbackmodal snooze" id="fedModal">
    <div class="modal-dialog" style="max-width: 500px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing FexEx account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14">
			<form>
				<div class="form-row">
				  <div class="form-group col-sm-12">
					  <label class="mb-2">Mode</label>
					  <select class="form-control">
						  <option>Select</option>
						  <option selected>Development</option>
					  </select>
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Key">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Account no.">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="password" class="form-control" placeholder="Password">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Meter number">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Contact name">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Contact phone">
				  </div>
				  <div class="form-group col-sm-12">
					  <label class="mb-2">A4 Shipping Label</label>
					  <select class="form-control">
						  <option>Select</option>
						  <option selected>Yes</option>
					  </select>
				  </div>
				  <div class="form-group col-sm-12">
					  <input type="text" class="form-control" placeholder="Tax Identification Number (TIN)">
				  </div>
				  <div class="form-group col-sm-12">
					  <label class="mb-2">Tax Identification Number(TIN) Type</label>
					  <select class="form-control">
						  <option>Select</option>
						  <option selected>Business National</option>
					  </select>
				  </div>
				  <div class="form-group col-sm-12">
					  <label class="mb-2">Currency</label>
					  <select class="form-control">
						  <option>Select</option>
						  <option selected>Great British Pound</option>
					  </select>
				  </div>
				  <div class="form-group col-sm-12">
					  <label class="mb-2">Enable Electronic Trape Documents Service</label>
					  <select class="form-control">
						  <option>Select</option>
						  <option selected>Yes</option>
					  </select>
				  </div>
			  </div>
			</form>
		
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
			

        </div>
		
        
      </div>
    </div>
  </div>
<!--End Fedex Modal-->

<!--Start Fedex Modal-->
<div class="modal fade feedbackmodal snooze" id="upsModal">
    <div class="modal-dialog" style="max-width: 500px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing UPS account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14">
			<form>
				<div class="form-row">
				
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Key">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Account no.">
				  </div>
				  <div class="form-group col-sm-6">
					  <input type="password" class="form-control" placeholder="Password">
				  </div>
				 
				  <div class="form-group col-sm-6">
					  <input type="text" class="form-control" placeholder="Contact phone">
				  </div>
				 
			  </div>
			</form>
		
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
			

        </div>
		
        
      </div>
    </div>
  </div>
<!--End ups Modal-->
<!--Start usps Modal-->
<div class="modal fade feedbackmodal snooze" id="uspsModal">
    <div class="modal-dialog" style="max-width: 650px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Start prining USPS shipping labels in a few minutes
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default text-center font-14">
				<p>USPS labels are proided through our partner GoShipp and it only takes a few minutes to setup your account and provide your credit card detail for any labels you create.</p>
				<p class="font-18 font-weight-600 mt-3">Pricing</p>
				<p class="mt-3">We offer Commercial Plus pricing the highest possible discount normally reserved for very height volume shippers with discount up to 60% on normal USPS rates</p>
				<p class="mt-3">No Monthly fee's and no charge per lable.</p>
				<table class="table table-bordered mt-4">
					<thead class="bg-secondary">
						<tr>
						<th></th>
						<th>Post Office <span>&trade;</span></th>
						<th>Commercial Plus<span>&reg;</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Priority Mail Flat Rate<span>&reg;</span></td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>Priority Mail Express<span>&reg;</span></td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
					</tbody>


				</table>
			
				<a href="" class="btn btn-primary">Setup my USPS Account</a>
			
		

			

        </div>
        
       
        
      </div>
    </div>
  </div>
<!--End usps Modal-->

<!--Start amazonshiping Modal-->
<div class="modal fade feedbackmodal snooze" id="amazonlogModal">
    <div class="modal-dialog" style="max-width: 650px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect you existing Amzon Logistics account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 text-center carrer-modal">
			<p class="py-5 px-3">New to amazon logistics or connecting y our existing account? Read <a href="">the help guide</a> on how to get started.</p>
	
			<div style="max-width: 400px;" class="margin-0-auto ">
				<p class="font-12 mb-2">Would you like the connected cariers to pick up your parcel</p>
				<select class="form-control">
				<option>Select</option>
				<option selected>Yes</option>
				<option >No</option>
			</select>
		</div>
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
			

        </div>
		
        
      </div>
    </div>
  </div>
<!--End amazonshiping Modal-->

<!--Start amazonshiping Modal-->
<div class="modal fade feedbackmodal snooze" id="amazonModal">
    <div class="modal-dialog" style="max-width: 650px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Amazon Shipping account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 text-center">
			<p>To continue integrating your Amazon Shipping account you will need to login with Amazon and authorize Veego.</p>
			<p class="py-3">
				<a href=""><img src="assets/img/amozonbtn.png" height="35"/></a>
			</p>
			<p>If you are not already enrolled into Amazon Shipping program. please register your interest here to get in touch with Amazon Shipping sales team.</p>
			<p class="pt-3">Not Sure if you have Amazon Shipping enabled on your Amazon Seller account?<br/>
				You can check by typing to login here using your Amazon credentians.</p>
		
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
			

        </div>
		
        
      </div>
    </div>
  </div>
<!--End amazonshiping Modal-->

<!--Start APC Modal-->
<div class="modal fade feedbackmodal snooze" id="apcModal">
    <div class="modal-dialog" style="max-width: 500px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing APC account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End APC Modal-->

<!--Start Asendia Modal-->
<div class="modal fade feedbackmodal snooze" id="asceModal">
    <div class="modal-dialog" style="max-width: 500px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Asendia account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
		
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End Asendia Modal-->


<!--Start Australia Post Modal-->
<div class="modal fade feedbackmodal snooze" id="auspostModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Australia Post account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End Australia Post Modal-->


<!--Start DHL DE Post Modal-->
<div class="modal fade feedbackmodal snooze" id="dhldeModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing DHL DE account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End DHL DE Modal-->


<!--Start DPD Post Modal-->
<div class="modal fade feedbackmodal snooze" id="dpdModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing DPD account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End DPD Modal-->

<!--Start DPD Local Modal-->
<div class="modal fade feedbackmodal snooze" id="dpdlocalModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing DPD Local account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			<div class="form-group">
				<label class="mb-2">Test Mode</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>No</option>
				
				</select>
			</div>
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End DPD Local Modal-->

<!--Start hermes Germarny Modal-->
<div class="modal fade feedbackmodal snooze" id="hermesgerModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Hermes World account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Account Number</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End hermes Germarny Modal-->

<!--Start My hermes Modal-->
<div class="modal fade feedbackmodal snooze" id="myhermesModal">
    <div class="modal-dialog" style="max-width: 750px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Hermes World account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal text-center">
		<p >Select 'Activate MyHermes' to add Myhermes to your Veeqo account. MyHermes is powered by our sister company. parcelbright.</p>
		<p class="mt-2">if you have an existing Parcelbright account just make sure you've got credit and you're ready to ship.</p> 
		<p class="mt-2">if you're a new customer to Parcelbright login to Parcelbright and credit to your account</p>
		
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered mt-4">
					<thead class="bg-secondary">
						<tr>
						<th></th>
						<th>Exc. VAT</th>
						<th>Inc. VAT</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Under 1 Kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>1-2 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>2-5 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>5-10 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>10-15 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
					</tbody>


				</table>
			</div>
			<div class="col-md-6">
				<table class="table table-bordered mt-4">
					<thead class="bg-secondary">
						<tr>
						<th></th>
						<th>Exc. VAT</th>
						<th>Inc. VAT</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Under 1 Kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>1-2 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>2-5 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>5-10 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
						<tr>
							<td>10-15 kg</td>
							<td>$7.55</td>
							<td>$7.15</td>
						</tr>
					</tbody>


				</table>
			</div>
		</div>

			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Activate MyHermes</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End My hermes Modal-->

<!--Start Parcel Modal-->
<div class="modal fade feedbackmodal snooze" id="percelModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Parcelforce account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="form-group">
				<label class="mb-2">Contact No.</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End Parcel Modal-->

<!--Start Uk Mail Modal-->
<div class="modal fade feedbackmodal snooze" id="ukMailModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing UK Mail account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
		
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<label class="mb-2">Earliest Collection Time</label>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">					
						<input type="text" class="form-control" placeholder="Time"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">					
						<input type="text" class="form-control" placeholder="Minute"/>
					</div>
				</div>
			</div>
			<label class="mb-2">Latest Collection Time</label>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">					
						<input type="text" class="form-control" placeholder="Time"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">					
						<input type="text" class="form-control" placeholder="Minute"/>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="mb-2">Pre-delivery Notification</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>None</option>
				
				</select>
			</div>
			<div class="form-group">
				<label class="mb-2">Closed for Lunch?</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>Yes</option>
					<option >No</option>
				
				</select>
			</div>
			
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End UK Mail Modal-->


<!--Start DX Modal-->
<div class="modal fade feedbackmodal snooze" id="dxModal">
    <div class="modal-dialog" style="max-width: 900px;">
		<div class="modal-content">
		
		  <!-- Modal Header -->
		  <div class="modal-header border-0">
			
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
		  
		  <!-- Modal body -->
		  <div class="modal-body color-default font-14 carrer-modal">
			  <div class="row">
				  <div class="col-md-6">
				  <div class="border  p-4 mr-3">
					  <p class="p-4 mb-4 text-center">Create a DX Shipping account</p>
					  <div class="d-flex p-3 py-4 mb-3">
						  <div>
							  <img src="assets/img/error-icon.svg" class="w-h-32px mr-2 radius-25">
						  </div>
						  <div>
							  <p>If you're not already setup with a DX account and would like to find out more and get discounted rates, please register below.</p>
						  </div>
					  </div>
					  
						  
					  <p class="text-center mt-5 pt-5"><button type="button" class="btn btn-primary">Register Interest</button></p>
				  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="border p-4 ml-3">
					  <p class="p-4 text-center">Connect your existing DX account</p>
					  <div class="form-group">
						  <label class="mb-2">Own Account?</label>
						  <select class="form-control">
							  <option>Select</option>
							  <option selected>No</option>
						  
						  </select>
					  </div>
					  <div class="form-group">
						  <label class="mb-2">Label Size</label>
						  <select class="form-control">
							  <option>Select</option>
							  <option selected>A4</option>
						  
						  </select>
					  </div>
					  <div class="form-group">
						  <label class="mb-2">Email Notification?</label>
						  <select class="form-control">
							  <option>Select</option>
							  <option selected>No</option>
						  
						  </select>
					  </div>
					  <p class="text-center mt-3"><button type="button" class="btn btn-primary">Connect Your Account</button></p>
				  </div>
				  </div>
			  </div>
			  <div class="dhl-or">OR</div>
		  </div>
			  
			  
  
		  </div>
		  
		  
		</div>
    </div>

<!--End DX Modal-->


<!--Start Yodel Modal-->
<div class="modal fade feedbackmodal snooze" id="yodelModal">
    <div class="modal-dialog" style="max-width: 550px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Connect your existing Yodel account
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">			

			<div class="form-group">
				<label class="mb-2">Account No.</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">User Name</label>
				<input type="text" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="form-group">
				<label class="mb-2">Label Size</label>
				<select class="form-control">
					<option>Select</option>
					<option selected>A4</option>
				
				</select>
			</div>
			
			<p class="text-center mt-3"><button type="button" class="btn btn-primary" >Connect Your Account</button></p>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End Yodel Modal-->

<!--Start royal mail Modal-->
<div class="modal fade feedbackmodal snooze" id="royalModal">
    <div class="modal-dialog" style="max-width: 700px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">			
			Royal Mail Accounts
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">			

			<table class="table table-bordered mt-4">
				<thead class="bg-secondary">
					<tr>
					<th>Warehouse name</th>
					<th>Account</th>
					<th>Services</th>
					<th>Action</th>
					
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>My warehouse</td>
						<td></td>
						<td>none</td>
						<td><a href="">Active</a></td>
					</tr>
				
				</tbody>


			</table>
			
			
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End royal mail Modal-->


<!--Start DHL Post Modal-->
<div class="modal fade feedbackmodal snooze" id="dhlModal">
    <div class="modal-dialog" style="max-width: 900px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
			<img src="assets/img/error-icon.svg" class="w-h-32px mr-2 radius-25">
			New to DHL or connecting your existing account? <br/>Read <a href="#">the help guide</a> on how to get started.
		  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body color-default font-14 carrer-modal">
			<div class="row">
				<div class="col-md-6">
				<div class="border  p-4 mr-3">
					<p class="p-4 mb-4 text-center">Create a DHL Shipping account</p>
					<div class="d-flex p-3 py-4 mb-3">
						<div>
							<img src="assets/img/error-icon.svg" class="w-h-32px mr-2 radius-25">
						</div>
						<div>
							<p>If you're not already setup with a DHL account and would like to find out more and get discounted rates, please register below.</p>
						</div>
					</div>
					
						
					<p class="text-center mt-5 pt-5"><button type="button" class="btn btn-primary">Register Interest</button></p>
				</div>
				</div>
				<div class="col-md-6">
				<div class="border p-4 ml-3">
					<p class="p-4 text-center">Connect your existing DHL account</p>
					<div class="form-group">
						<label class="mb-2">Own Account?</label>
						<select class="form-control">
							<option>Select</option>
							<option selected>No</option>
						
						</select>
					</div>
					<div class="form-group">
						<label class="mb-2">Label Size</label>
						<select class="form-control">
							<option>Select</option>
							<option selected>A4</option>
						
						</select>
					</div>
					<div class="form-group">
						<label class="mb-2">Email Notification?</label>
						<select class="form-control">
							<option>Select</option>
							<option selected>No</option>
						
						</select>
					</div>
					<p class="text-center mt-3"><button type="button" class="btn btn-primary">Connect Your Account</button></p>
				</div>
				</div>
			</div>
			<div class="dhl-or">OR</div>
		</div>
			
			

        </div>
		
        
      </div>
    </div>

<!--End DHL Modal-->
	
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>