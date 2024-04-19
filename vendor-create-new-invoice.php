<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system create-new-invoice"
   style="padding-bottom:80px">
   <?php include("side-navigation.php");?>
   <div class="right-side-section">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Create New Invoices</div>
         </div>
         <div id="wrapper" class="search-mobile">
            <!-- Header -->
            <div class="header_inner">
               <!-- search icon for mobile -->
               <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
               <div class="header_search"><i class="fa fa-search"></i>
                  <input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.."
                     autocomplete="off" aria-expanded="false">
                  <div uk-drop="mode: click" class="header_search_dropdown uk-drop">

                     <h4 class="search_title"> Recently </h4>
                     <ul>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Erica Jones </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Coffee Addicts </div>
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
                              <div class="list-name"> Property Rent And Sale </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Erica Jones </div>
                           </a>
                        </li>
                     </ul>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="margin-0-auto">
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Create New Invoices</div>
                     <img src="assets/images/icons/info-for-header.svg" alt="" class="info-icon">
                     <span class="tooltiptext white-panel">
                        <h6>Heading Title</h6>
                        <p>Creating a lightning deal on StayToEnjoy can be very
                           lucrative. In this way, the visibility of the products can be increased immensely without
                           much
                           effort, which
                           means that sales, profit and ranking can skyrocket without any effort.</p>
                     </span>
                  </div>
               </div>
               <div class="clearfix d-inline-block">
                  <div class="row">
                     <div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                        <button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel"
                           data-toggle="modal" data-target="#forcancle">Cancel</button>
                        <button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                           draft</button>
                        <button type="button" class="bttn bttn-primary ml-3 next-step">Save</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-content page_content mt-0 shop-bundel-section exmt-10">
            <div class="tab-pane active">
               <div class="ps-section--shopping w-100 d-inline-block p-4 ps-invoice-details">
                  <div class="w-100">
                     <!--<div class="ps-section__header text-left pb-4 d-flex align-items-center justify-content-between">
								<div class="font-26 font-weight-500 desktop-view">Create New Invoices
								<p class="d-block font-16 greyText-color pr-4 lh-1 mt-2">Creating a lightning deal on StayToEnjoy can be very lucrative. In this way, the visibility of the products can be increased immensely without much effort, which means that sales, profit and ranking can skyrocket without any effort.</p>
								</div>-->
                     <!--<p class="font-24 text-dark font-weight-500">Create New Invoices</p>-->
                     <!--<div class="text-right d-flex align-items-center">
									<a href="#" class="radius-5 bg-light-blue text-white px-5 ml-4 h-40 d-flex align-items-center">
										<svg class="mr-2" height="17" width="17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve" fill="#fff"><g><path d="M358.8,272.2v70.3c0,1.4-0.2,2.7-0.5,3.9v0c0,0,0,0,0,0c-1.4,6.9-7.5,12.1-14.7,12.1H56.3c-7.7,0-14.1-5.9-14.9-13.4   c-0.2-0.9-0.2-1.7-0.2-2.7v-70.3c0-8.3,6.8-15,15-15c4.1,0,7.9,1.7,10.6,4.4c2.7,2.7,4.4,6.5,4.4,10.6v56.3h257.7v-56.3   c0-8.3,6.8-15,15-15c4.1,0,7.9,1.7,10.6,4.4C357.1,264.3,358.8,268.1,358.8,272.2z"/><path d="M286.5,201.8l-73.7,73.7c-0.1,0.2-0.3,0.3-0.4,0.4c-2.7,2.7-6.2,4.4-9.7,4.9c-0.3,0-0.6,0.1-0.9,0.1   c-0.6,0.1-1.2,0.1-1.8,0.1h0l-1.7-0.1c-0.3,0-0.6-0.1-0.9-0.1c-3.6-0.5-7-2.2-9.7-4.9c-0.1-0.1-0.3-0.3-0.4-0.4l-73.7-73.7   c-3.4-3.4-5.1-7.9-5.1-12.4c0-4.5,1.7-9,5.1-12.4c6.8-6.8,17.9-6.8,24.8,0l44.3,44.3V59c0-9.6,7.9-17.5,17.5-17.5   c4.8,0,9.2,2,12.4,5.1c3.2,3.2,5.1,7.5,5.1,12.4v162.3l44.3-44.3c6.8-6.8,17.9-6.8,24.8,0C293.3,183.9,293.3,195,286.5,201.8z"/></g></svg>
										Download
									</a>
									<a href="#" class="radius-5 bg-purple text-white py-0 h-40 px-5 ml-4 d-flex align-items-center">
										<i class="fa fa-print mr-2"></i> Print
									</a>-->
                     <!--<a href="#" class="radius-5 bg-light-blue text-white px-5 ml-4 h-40 d-flex align-items-center">
										<i class="fa fa-plus mr-2"></i> Add New Customer
									</a>-->
                     <!--</div>
							</div>-->
                     <div class="ps-section--account-setting bg-white shadow radius-5">
                        <div class="row py-5 m-0 shadow">
                           <div class="col-12 search-options">
                              <div class="d-flex align-items-center w-100">
                                 <input placeholder="Search Customer"
                                    class="form-group default-placeholder bg-white border m-0 radius-5 font-blue font-16 mr-4 serch-customer">
                                 <div uk-drop="mode: click"
                                    class="searchs__results hidden bg-white uk-drop uk-drop-bottom-left">
                                    <div class="p-3">
                                       <ul>
                                          <li
                                             class="justify-content-between pb-2 align-items-center hover-grey radius-5">
                                             <a href="#" class="p-2 d-inline-block">
                                                <span
                                                   class="d-block font-14 text-dark font-weight-500 line-height-default">Brinkert,
                                                   Stefanie</span>
                                                <span class="d-block font-13 text-dark line-height-default">
                                                   Nurnberger Allee 12 48145 Munster DE | 10002</span>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between pb-2 align-items-center hover-grey radius-5">
                                             <a href="#" class="p-2 d-inline-block">
                                                <span
                                                   class="d-block font-14 text-dark font-weight-500 line-height-default">Meier,
                                                   Stefan</span>
                                                <span class="d-block font-13 text-dark line-height-default">
                                                   BaumstraBe 23 45659 Recklinghausen DE | 10001</span>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between pb-2 align-items-center hover-grey radius-5">
                                             <a href="#" class="p-2 d-inline-block">
                                                <span
                                                   class="d-block font-14 text-dark font-weight-500 line-height-default">Brinkert,
                                                   Stefanie</span>
                                                <span class="d-block font-13 text-dark line-height-default">
                                                   Nurnberger Allee 12 48145 Munster DE | 10002</span>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between pb-2 align-items-center hover-grey radius-5">
                                             <a href="#" class="p-2 d-inline-block">
                                                <span
                                                   class="d-block font-14 text-dark font-weight-500 line-height-default">Meier,
                                                   Stefan</span>
                                                <span class="d-block font-13 text-dark line-height-default">
                                                   BaumstraBe 23 45659 Recklinghausen DE | 10001</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <input placeholder="Search product"
                                    class="form-group default-placeholder bg-white border m-0 radius-5 font-blue font-16 ml-4 search-product">
                                 <div uk-drop="mode: click"
                                    class="searchs__results hidden bg-white uk-drop uk-drop-bottom-left">
                                    <div class="p-3">
                                       <ul data-simplebar style="min-height:230px;max-height:230px">
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">iPhone 11</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-betwee p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">iPhone 11 Pro</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">iPhone 11 Pro Max</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">iPhone X</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">iPhone XR</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">Sumgsung M12</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">Sumgsung Galaxy F62</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">Sumgsung F41</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">Sumgsung F12</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">Sumgsung Galaxy M42</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                          <li
                                             class="justify-content-between p-0 m-0 align-items-center searchlist cursor-pointer hover-grey radius-5">
                                             <a href="#" class="d-flex px-2 py-3 get align-items-center text-secondary">
                                                <div class="product-and-category line-height-default">
                                                   <span class="recent-search">Sumgsung Galaxy M52</span>
                                                   <span
                                                      class="font-12 font-weight-600 text-dark d-block w-100">Smartphone
                                                      & Communications</span>
                                                </div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row m-0 p-5 invoice-section">
                           <div class="col-lg-12 create-new-invoice-section">
                              <div class="invoice-detail mt-0">
                                 <div class="px-0 pt-0 pb-5">
                                    <div class="row color-default">
                                       <div class="col-lg-7 col-xl-7">
                                          <div class="upload-banner d-flex align-items-center">
                                             <!--<div class=" profile">
																<div class="position-relative rounded-circle ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="75" height="75" viewBox="0 0 100 100">
																		<circle stroke="none" fill="#f1f2f2" r="48%" cx="50%" cy="50%"></circle>
																		<g transform="translate(50 50) scale(0.69 0.69) rotate(0) translate(-50 -50)" style="fill:#050505">
																			<svg fill="#050505" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
																				<path d="M83.2,35.7l-8.5-17c-0.3-0.7-1-1.1-1.8-1.1H27.1c-0.8,0-1.5,0.4-1.8,1.1l-8.5,17c-0.4,0.4-0.7,0.9-0.7,1.5v5.9  c0,3.7,2.5,6.8,5.9,7.6v26.1c0,3.1,2.5,5.5,5.5,5.5h45c3.1,0,5.5-2.5,5.5-5.5V50.8c3.4-0.9,5.9-4,5.9-7.6v-5.9  C83.9,36.6,83.6,36,83.2,35.7z M28.3,21.6h43.4l6.8,13.6h-57L28.3,21.6z M56.5,78.4h-13v-18c0-0.2,0.1-0.3,0.1-0.3l12.8,0  c0,0,0.1,0.1,0.1,0.3V78.4z M72.5,78.4h-12v-18c0-2.4-1.8-4.3-4.1-4.3H43.6c-2.3,0-4.1,1.9-4.1,4.3v18h-12c-0.8,0-1.5-0.7-1.5-1.5  V50.8c1.9-0.5,3.4-1.6,4.5-3.1c1.4,2.1,3.8,3.4,6.5,3.4c2.7,0,5.1-1.4,6.5-3.4c1.4,2.1,3.8,3.4,6.5,3.4s5.1-1.4,6.5-3.4  c1.4,2.1,3.8,3.4,6.5,3.4s5.1-1.4,6.5-3.4c1.1,1.5,2.7,2.7,4.5,3.1v26.1C74,77.7,73.3,78.4,72.5,78.4z M76,47  c-2.2,0-3.9-1.8-3.9-3.9c0-1.1-0.9-2-2-2h-1.2c-1.1,0-2,0.9-2,2c0,2.2-1.8,3.9-3.9,3.9s-3.9-1.8-3.9-3.9c0-1.1-0.9-2-2-2h-1.2  c-1.1,0-2,0.9-2,2c0,2.2-1.8,3.9-3.9,3.9s-3.9-1.8-3.9-3.9c0-1.1-0.9-2-2-2h-1.2c-1.1,0-2,0.9-2,2c0,2.2-1.8,3.9-3.9,3.9  s-3.9-1.8-3.9-3.9c0-1.1-0.9-2-2-2h-1.2c-1.1,0-2,0.9-2,2c0,2.2-1.8,3.9-3.9,3.9s-3.9-1.8-3.9-3.9v-3.5h59.8v3.5  C79.9,45.3,78.2,47,76,47z"></path>
																			</svg>
																		</g>
																	</svg>
																</div>
															</div>-->
                                             <span class="font-weight-500 text-dark font-26">Buddy Shop</span>
                                          </div>
                                          <div class="shop_detailbox">
                                             <p class="mb-2 font-blue font-16">Buddy Shop - 1888 East Road, Green End,
                                                Mountain View, CA, 93088</p>
                                             <div class="row mt-4">
                                                <div class="col-sm-6">
                                                   <h6 class="text-muted address-heading">Billing Address</h6>
                                                   <address class="text-muted font-nunito font-15 line-height1.5">
                                                      Lynne K. Higby<br>
                                                      795 Folsom Ave, Suite 600<br>
                                                      San Francisco, CA 94107<br>
                                                      <abbr title="Phone">P:</abbr> (123) 456-7890
                                                   </address>
                                                </div> <!-- end col-->

                                                <div class="col-sm-6">
                                                   <h6 class="text-muted address-heading">Shipping Address</h6>
                                                   <address class="text-muted font-nunito font-15 line-height1.5">
                                                      Cooper Hobson<br>
                                                      795 Folsom Ave, Suite 600<br>
                                                      San Francisco, CA 94107<br>
                                                      <abbr title="Phone">P:</abbr> (123) 456-7890
                                                   </address>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-5 col-xl-5 position-relative">
                                          <div class="invoice-detilas-limit position-relative">
                                             <img src="assets/images/barcode.png"
                                                class="position-absolute top-0 right-0">
                                             <div class="d-flex mb-2 align-items-center">
                                                <h1>INVOICE</h1>
                                             </div>
                                             <div class="border-bottom pb-2">
                                                <p class="font-blue">Buddy Shop</p>
                                                <p class="pt-1 font-blue">1888 East Road, Green End</p>
                                                <p class="pt-1 font-blue">Mountain View, CA</p>
                                                <p class="pt-1 font-blue">93088</p>
                                             </div>
                                             <div class="border-bottom py-2">
                                                <p class=" font-blue"><span
                                                      class="font-weight-600">Telephone:</span>12345678</p>
                                                <p class="pt-1 font-blue"><span
                                                      class="font-weight-600">email:</span>buddyshop@staytoenjoy.com</p>
                                                <p class="pt-1 font-blue"><span
                                                      class="font-weight-600">Fax:</span>12345678</p>
                                             </div>
                                             <div class="border-bottom py-2">
                                                <p class=" font-blue"><span>Mountain View:</span>14. June 2020</p>
                                             </div>
                                             <div class="py-2">
                                                <p class="summary_box1 font-blue"><span class="font-weight-600 ">Invoice
                                                      No.:</span><span class="sum_title1">12345678</span></p>
                                                <p class="pt-1 font-blue"><span class="font-weight-600">Customer
                                                      No.:</span>12345678</p>
                                                <p class="pt-1 font-blue"><span class="font-weight-600">Invoice
                                                      Date:</span><span id="dateget1">14.June 2020</span></p>
                                                <p class="pt-1 font-blue"><span class="font-weight-600">Due
                                                      Date:</span><span id="dateget">24. June 2020</span></p>
                                                <p class="pt-1 pb-3 font-blue"><span class="font-weight-600">Your VAT
                                                      ID:</span>DE24888 888 888</p>
                                                <p class="pt-1 font-blue"><span class="font-weight-600">PAN
                                                      No:</span>AESP</p>
                                                <p class="pt-1 font-blue"><span class="font-weight-600">GST Registration
                                                      No:</span> XXXXXXXXXXXXXXXXXX</p>
                                                <div class="d-inline-block">
                                                   <p class="pt-1 font-blue font-14"><span>Order Date:</span>Jan 17,2018
                                                   </p>
                                                   <p class="pt-1 font-blue font-14">
                                                      <span>Order Status:</span>
                                                      <span class="badge bg-success-new text-white">Paid</span>
                                                   </p>
                                                   <p class="pt-1 font-blue font-14">
                                                      <span>Order ID:</span>
                                                      <span>#123456</span>
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="color-default table-responsive">
                                    <table
                                       class="table table-striped table-bordered mb-0 product-info-table color-default font-weight-600">
                                       <thead>
                                          <tr>
                                             <th class="serial-no">#</th>
                                             <th class="item">ITEM DESCRIPTION</th>
                                             <th class="bg-blue-whale">PRICE</th>
                                             <th class="bg-blue-whale">QTY</th>
                                             <th class="bg-blue-whale">NET AMOUNT</th>
                                             <th class="bg-blue-whale">TAX RATE</th>
                                             <th class="bg-blue-whale">TAX TYPE</th>
                                             <th class="bg-blue-whale">TAX AMOUNT</th>
                                             <th class="bg-blue-whale">TOTAL</th>
                                          </tr>
                                       </thead>
                                       <tbody class="radius-4">
                                          <tr>
                                             <td class="vertical-middle">1</td>
                                             <td class="vertical-middle" class="font-weight-normal">
                                                <textarea onkeyup="textAreaAdjust(this)"
                                                   class="form-control bg-white border font-13 radius-5 px-3 py-2 w-100 h-40"
                                                   style="overflow:hidden;min-height: 50px !important;">Yamaha Dolby Sourround Reciever XTR - 2211</textarea>
                                             </td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$100"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="2"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$200"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="10%"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="VAT"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100 " type="text"
                                                   value="$20"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$220"></td>
                                          </tr>
                                          <tr>
                                             <td class="vertical-middle">2</td>
                                             <td class="vertical-middle" class="font-weight-normal">
                                                <textarea onkeyup="textAreaAdjust(this)"
                                                   class="form-control bg-white border font-13 radius-5 px-3 py-2 w-100"
                                                   style="overflow:hidden;min-height: 50px !important;">Headphone Yamaha HPH-100WH</textarea>
                                             </td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$100"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="2"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$200"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="10%"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="VAT"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100 " type="text"
                                                   value="$20"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$220"></td>
                                          </tr>
                                          <tr>
                                             <td class="vertical-middle">3</td>
                                             <td class="vertical-middle" style="width:250px;"
                                                class="font-weight-normal">
                                                <textarea onkeyup="textAreaAdjust(this)"
                                                   class="form-control bg-white border radius-5 px-3 py-2 w-100 font-13"
                                                   style="overflow:hidden;min-height: 50px !important;">Studiomonitor activ, Frequenzbereich 43 Hz - 30 kHz, System für 95-Watt</textarea>
                                             </td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$100"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="2"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$200"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="10%"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="VAT"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100 " type="text"
                                                   value="$20"></td>
                                             <td class="vertical-middle"><input
                                                   class="bg-white border font-13 radius-5 px-3 w-100" type="text"
                                                   value="$220"></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="">
                                       <table class="table mb-0 font-weight-600">
                                          <tbody class="">
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td style="width:40px;"></td>
                                                <td style="width:280px;">
                                                   <p class="text-danger ">- Voucher</p>
                                                   <span class="font-12">Code:555555</span>
                                                </td>
                                                <td style="width:150px;"></td>
                                                <td style="width:150px;"></td>
                                                <td style="width:150px;" class="text-danger">-$200.00</td>
                                             </tr>
                                             <tr class="bg-blue-whale">
                                                <td style="width:40px;"></td>
                                                <td style="width:280px;">GRAND TOTAL</td>
                                                <td style="width:150px;"></td>
                                                <td style="width:150px;"></td>
                                                <td style="width:150px;">$460.00</td>
                                             </tr>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="row p-4 color-default">
                                    <div class="col-md-6 col-lg-7 align-self-end">
                                    </div>
                                    <div class="col-md-6 col-lg-5">
                                       <div class="price-box-area">
                                          <div class="price-outter bg-secondary ml-auto">
                                             <div class="border d-flex price-inner">
                                                <span
                                                   class="font-13 font-weight-500 color-black border-right px-2">Subtotal
                                                   excluding VAT</span>
                                                <span class="font-13 font-weight-500 color-black px-2">VAT</span>
                                             </div>
                                             <div class="border d-flex price-inner">
                                                <span class="font-13 color-black border-right px-2">19% from $
                                                   750,00</span>
                                                <span class="font-13 color-black px-2">$ 119,75</span>
                                             </div>
                                             <div class="border d-flex price-inner">
                                                <span class="font-13 color-black border-right px-2">19% from $
                                                   750,00</span>
                                                <span class="font-13 color-black px-2">$ 119,75</span>
                                             </div>
                                             <div class="border d-flex price-inner">
                                                <span class="font-13 color-black font-weight-500 border-right px-2">VAT
                                                   Total</span>
                                                <span class="font-13 font-weight-500 color-black px-2">$ 168,82</span>
                                             </div>
                                          </div>
                                       </div>
                                       <h4 class="font-weight-600 ml-auto mt-2" style="max-width: 248px;">Thanks for
                                          your business!</h4>
                                    </div>
                                    <div class="col-md-12">
                                    </div>
                                 </div>
                                 <div class="p-4 border-top color-default margin-30">
                                    <div class="row">
                                       <div class="col-md-3">
                                          <p class="font-weight-600 font-blue">Buddy Shop</p>
                                          <p class="pt-3 font-blue">1888 East Road </p>
                                          <p class="pt-1 font-blue">Green End,</p>
                                          <p class="pt-1 font-blue">Mountain View, CA, 93088</p>
                                       </div>
                                       <div class="col-md-3">
                                          <p class="font-weight-600 font-blue">Bank Account</p>
                                          <p class="pt-3 font-blue">Commerzbank AG</p>
                                          <p class="pt-1 font-blue">IBAN: 888 8888 8888 8 888</p>
                                          <p class="pt-1 font-blue">BIC: DRESDEFF290</p>
                                       </div>
                                       <div class="col-md-3">
                                          <p class="font-weight-600 font-blue">Opening Hours</p>
                                          <p class="pt-3 font-blue">Mo - Fr.: 8am - 8pm</p>
                                          <p class="pt-1 font-blue">Sa: 8am - 10pm</p>
                                          <p class="pt-1 font-blue">Sunday closed</p>
                                       </div>
                                       <div class="col-md-3">
                                          <p class="font-weight-600 font-blue">VAT ID:</p>
                                          <p class="pt-3 font-blue">DE888888888</p>
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
   </div>
</div>
<!--Start Service Modal-->
<div class="modal fade support-pin edit-pin new-modal" id="Addservice">
   <div class="modal-dialog box-shodow">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title text-center w-100 color-black font-22">
               Add service to invoice <br />
               <span class="blue-text-light pt-3 font-14 d-block">Wednesday, 7 May 2020</span>
            </h4>
            <br />
            <button class="menuhover position-relative" data-dismiss="modal" type="button">
               <img src="assets/image/close.svg" class="imgnone cursor-pointer" alt="close" width="35">
               <img src="assets/image/close_hover.svg" class="imgblock" alt="close" width="35">
            </button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <form>
               <div>
                  <div class="form-group">
                     <label class="color-default mb-2">Service Type</label>
                     <div class="our-custom-select custom-select-sale">
                        <div class="selected-value">
                           <div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Choose
                           </div>
                           <input type="text" name="serviceType" readonly class="d-none" />
                        </div>
                        <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                           style="height:300px;z-index:999">
                           <li>Choose</li>
                           <li style="font-weight: bold;"><strong>HAIR</strong></li>
                           <li>Haircuts and Hairdressing</li>
                           <li>Japanese Straightening</li>
                           <li>Hair Transplants</li>
                           <li>Hair Loss Treatments - non surgical</li>
                           <li>Hair Extensions</li>
                           <li>Hair Consulting</li>
                           <li>Hair Conditioning</li>
                           <li>Hair Colouring and Highlights</li>
                           <li>Brocato's Smoothing</li>
                           <li>Brazilian Blow Dry Keratin</li>
                           <li>Blow Dry</li>
                           <li>Airlites</li>
                           <li>Wedding Hair</li>
                           <li>Straighteners</li>
                           <li>Permanent Waves</li>
                           <li style="font-weight: bold;"><strong>BODY</strong></li>
                           <li>Multi Polar Radio Frequency Treatment</li>
                           <li>Acoustic Wave Therapy</li>
                           <li>Acupuncture</li>
                           <li>Akasuri</li>
                           <li>Arasys Toning & Inch Loss Treatment</li>
                           <li>Backcials</li>
                           <li>Bikini Facial</li>
                           <li>Body Exfoliation Treatments</li>
                           <li>Body Treatments</li>
                           <li>Body Treatments - CACI</li>
                           <li>Body Wraps</li>
                           <li>Cellulite Treatments</li>
                           <li>Colonic Hydrotherapy</li>
                           <li>Colonic Therapy</li>
                           <li>Cryolipolysis</li>
                           <li>Cryotherapy</li>
                           <li>Cupping</li>
                           <li>Dry Floatation</li>
                           <li>Electrotherapy</li>
                           <li>Endermologie Lipo-Massage</li>
                           <li>Endermotherapy</li>
                           <li>Fish Spa Full Body Treatment</li>
                           <li>Floatation</li>
                           <li>Gua Sha</li>
                           <li>Heat Treatments</li>
                           <li>Hydrotherapy</li>
                           <li>Hyperhidrosis Treatment</li>
                           <li>i-Lipo</li>
                           <li>Infrared Therapy</li>
                           <li>Iyashi Dome</li>
                           <li>Laser Lipo</li>
                           <li>Leech Therapy</li>
                           <li>Lipo-Light</li>
                           <li>Lipodissolve</li>
                           <li>No Needle Mesotherapy</li>
                           <li>Photorejuvenation Treatments</li>
                           <li>Piercing</li>
                           <li>Pre-birth Acupuncture</li>
                           <li>Rasul and Mud Treatments</li>
                           <li>Russian Banya</li>
                           <li>Scierotherapy</li>
                           <li>SmartLipo</li>
                           <li>Spray Tanning and Sunless Tanning</li>
                           <li>Steam and Sauna Therapy</li>
                           <li>Strawberry Laser Lipo</li>
                           <li>Sun Angel</li>
                           <li>Sunbeds and Tanning Booths</li>
                           <li>Taizen Japanese Bath</li>
                           <li>Tattooing</li>
                           <li>Henna Designs</li>
                           <li>Thalassotherapy</li>
                           <li>Ultrasound Therapy</li>
                           <li>Universal Contour Wrap</li>
                           <li>Vaser Lipo-Contouring</li>
                           <li>Vattooing</li>
                           <li>VelaShape</li>
                           <li>VinoTherapy</li>
                           <li>Weight Loss Treatments</li>
                           <li style="font-weight: bold;"><strong>COUNSELLING & HOLISTIC</strong></li>
                           <li>Past Life Regression Therapy</li>
                           <li>Psychotherapy</li>
                           <li>Weight Loss Hypnotherapy</li>
                           <li>Traditional Chinese Medicine</li>
                           <li>Timeline Therapy</li>
                           <li>Thought Field Therapy</li>
                           <li>Thermography</li>
                           <li>The Lightning Process</li>
                           <li>Styling</li>
                           <li>Stress Management</li>
                           <li>Speech Therapy</li>
                           <li>Sophrology</li>
                           <li>Somatic Experiencing</li>
                           <li>Sleep Treatments</li>
                           <li>Shirodhara</li>
                           <li>Shamanic Healing</li>
                           <li>Sex Counselling</li>
                           <li>Reiki</li>
                           <li>Radionics</li>
                           <li>Psychology</li>
                           <li>Psychic Love Coaching</li>
                           <li>Acustaple</li>
                           <li>Addictions Counselling</li>
                           <li>Angel Therapy</li>
                           <li>Anger Management</li>
                           <li>Aromatherapy</li>
                           <li>Ayurvedic</li>
                           <li>Bach Flower Remedies</li>
                           <li>BioMeridian Analysis</li>
                           <li>Bioresonance Therapy</li>
                           <li>BodyTalk</li>
                           <li>Coaching</li>
                           <li>Cognitive Behaviour Therapy</li>
                           <li>Colour Therapy</li>
                           <li>Combined Decongestive Therapy</li>
                           <li>Counselling</li>
                           <li>Crystal Therapy</li>
                           <li>Doula Birth Companion</li>
                           <li>Dream Therapy</li>
                           <li>Ear Candling</li>
                           <li>Emotional Therapy</li>
                           <li>Energy Therapy</li>
                           <li>Feng Shui</li>
                           <li>Grief Recovery</li>
                           <li>Halotherapy</li>
                           <li>Healing</li>
                           <li>Herbal & Flower Essence</li>
                           <li>Herbal Medicine and Supplements</li>
                           <li>Homeopathy</li>
                           <li>HypnoBirthing</li>
                           <li>Hypnotherapy</li>
                           <li>Image Consulting</li>
                           <li>Intuitive Readings</li>
                           <li>Ionic Foot Bath</li>
                           <li>Ionocinesis</li>
                           <li>Iridology</li>
                           <li>Ki Therapy</li>
                           <li>Kinesiology</li>
                           <li>Life Coaching</li>
                           <li>Light Therapy</li>
                           <li>Magnetic Therapy</li>
                           <li>Meridian Therapies</li>
                           <li>Metamorphic Technique</li>
                           <li>Mind Boxing</li>
                           <li>Mindfulness</li>
                           <li>Moxibustion</li>
                           <li>Naturopathy</li>
                           <li>Neuro Linguistic Programming</li>
                           <li>NeuroSpa</li>
                           <li>Nutritional Advice & Treatments</li>
                           <li style="font-weight: bold;"><strong>FACE</strong></li>
                           <li>Brow Lift</li>
                           <li>Chemical Skin Peel</li>
                           <li>Dermaplaning</li>
                           <li>Eye Treatments</li>
                           <li>Eyebrow and Eyelash Tinting</li>
                           <li>Eyebrow and Eyelash Treatments</li>
                           <li>Eyelash Extensions</li>
                           <li>Eyelash Perming</li>
                           <li>Face Lift - Nonsurgical</li>
                           <li>Facial Reflexology</li>
                           <li>Facial Rejuvenation Acupuncture</li>
                           <li>Facials</li>
                           <li>Facials - CACI</li>
                           <li>Facials - Galvanic</li>
                           <li>Geisha Facial</li>
                           <li>HD Brows</li>
                           <li>Honey Facial</li>
                           <li>LashDip</li>
                           <li>Lava Shell Therma Facial</li>
                           <li>LED Light Therapy</li>
                           <li>LPG Facelift</li>
                           <li>LVL Lashes</li>
                           <li>Makeup Treatments</li>
                           <li>Micro-Needling</li>
                           <li>Microcurrent Treatments</li>
                           <li>Microdermabrasion</li>
                           <li>Oxygen Facial</li>
                           <li>Placenta Facial</li>
                           <li>Semi Permanent Mascara</li>
                           <li>Acne Treatments</li>
                           <li>Silk Peel</li>
                           <li>Skincare Consultation</li>
                           <li>Snail Facial</li>
                           <li>Spermine Facial</li>
                           <li>Stem Cell Facial</li>
                           <li>Teen Facial</li>
                           <li>Wedding Makeup</li>
                           <li>Auricular Acupuncture</li>
                           <li>Beauty Treatments</li>
                           <li>Camouflage Make-up</li>
                           <li style="font-weight: bold;"><strong>HAIR REMOVAL</strong></li>
                           <li>Depilation</li>
                           <li>Ear Hair Trimming</li>
                           <li>Epilar</li>
                           <li>French Bikini Wax</li>
                           <li>Hollywood Waxing</li>
                           <li>Intense Pulsed Light Therapy (IPL)</li>
                           <li>Laser Hair Removal</li>
                           <li>Male Waxing</li>
                           <li>Men's Shaving</li>
                           <li>Nasal Hair Trimming</li>
                           <li>Penazzling</li>
                           <li>Shaving Lesson</li>
                           <li>Soprano Laser Hair Removal</li>
                           <li>Sugaring</li>
                           <li>Threading</li>
                           <li>Vajazzling</li>
                           <li>Waxing</li>
                           <li>Brazilian Waxing</li>
                           <li>Electrolysis</li>
                           <li>Beard Trimming</li>
                           <li style="font-weight: bold;"><strong>MASSAGE</strong></li>
                           <li>Tui Na Massage</li>
                           <li>Honey Massage</li>
                           <li>Himalayan Mineral Massage</li>
                           <li>Herbal Compress Massage</li>
                           <li>Hand Massage</li>
                           <li>Garshan</li>
                           <li>Four Hands Massage</li>
                           <li>Foot Massage</li>
                           <li>Face Massage</li>
                           <li>Esalen Massage</li>
                           <li>Deep Tissue Massage</li>
                           <li>Children's Massage</li>
                           <li>Chi Nei Tsang</li>
                           <li>Chavutti Thirumal Massage</li>
                           <li>Chakra Massage</li>
                           <li>Chair Massage</li>
                           <li>Biodynamic Massage</li>
                           <li>Baobab Massage</li>
                           <li>Bamboo Massage</li>
                           <li>Ayurvedic Massages</li>
                           <li>Ashiatsu</li>
                           <li>Aromatherapy Massage</li>
                           <li>Acupressure</li>
                           <li>Abhyanga Ayurvedic Massage</li>
                           <li>Reflexology</li>
                           <li>Balinese Massage</li>
                           <li>Moroccan Bath</li>
                           <li>Wood Therapy</li>
                           <li>Watsu Massage</li>
                           <li>Vishesh Ayurvedic Massage</li>
                           <li>Underwater Massage</li>
                           <li>Turkish Bath</li>
                           <li>Trigger Point Therapy</li>
                           <li>Therapeutic Massage</li>
                           <li>Thai Massage</li>
                           <li>Thai Luk Pra Kob Massage</li>
                           <li>Thai Foot Massage</li>
                           <li>Swedish Massage</li>
                           <li>Stone Massage Therapy</li>
                           <li>Srota Ayrvendic Massage</li>
                           <li>Sports Massage</li>
                           <li>Sound Massage</li>
                           <li>Six Hand Massage</li>
                           <li>Shiatsu Massage</li>
                           <li>Seitai Massage</li>
                           <li>Scar Tissue Massage</li>
                           <li>Rollerssage</li>
                           <li>Pre and Post Natal Massage</li>
                           <li>Platza</li>
                           <li>No Hands Massage</li>
                           <li>Neuromuscular Massage Therapy</li>
                           <li>MELT Method</li>
                           <li>Lymphatic Drainage Massage</li>
                           <li>Lymphatic Drainage</li>
                           <li>Lomi Lomi Massage</li>
                           <li>Lava Shells Massage</li>
                           <li>Lava Bambu Massage</li>
                           <li>Khmer Massage</li>
                           <li>Indian Head Massage</li>
                           <li>Hydrotherm Massage</li>
                           <li style="font-weight: bold;"><strong>MEDICAL & DENTAL</strong></li>
                           <li>Drip therapy</li>
                           <li>Allergy Testing</li>
                           <li>Arm Lift</li>
                           <li>Eye Tests</li>
                           <li>Ear Pinning</li>
                           <li>Dracula Therapy</li>
                           <li>Dermatology</li>
                           <li>Dermal Fillers</li>
                           <li>Dental Treatments</li>
                           <li>Cosmetic Surgery</li>
                           <li>Cosmetic Skin Treatments</li>
                           <li>Cosmetic Injectables</li>
                           <li>Cosmetic Dental Treatments</li>
                           <li>Contact Lenses</li>
                           <li>Collagen Treatments</li>
                           <li>Chicago Facelift</li>
                           <li>Cheek Enhancement</li>
                           <li>Carboxytherapy</li>
                           <li>Buttock Implants</li>
                           <li>Bust Treatments and Enhancement</li>
                           <li>Breast Reduction</li>
                           <li>Breast Fillers</li>
                           <li>Breast Enlargement</li>
                           <li>UVB Photo-Biological Stimulation</li>
                           <li>Tummy Tuck</li>
                           <li>TUG Breast Reconstruction</li>
                           <li>Tooth Jewellery</li>
                           <li>Thread Vein Treatment</li>
                           <li>Thigh Lift</li>
                           <li>Teeth Whitening</li>
                           <li>Tattoo Removal</li>
                           <li>Skin Tightening</li>
                           <li>Skin Lightening</li>
                           <li>Scar Tissue Treatments</li>
                           <li>Scalp Reduction</li>
                           <li>Rhinoplasty</li>
                           <li>Orthodontics</li>
                           <li>Necklift</li>
                           <li>Natural Breast Enlargement</li>
                           <li>Mole/Cyst Removal</li>
                           <li>Blood Testing</li>
                           <li>Biofeedback</li>
                           <li>Areola Reconstruction</li>
                           <li>Mole Removal</li>
                           <li>Mesotherapy</li>
                           <li>Mastopexy</li>
                           <li>Liposuction</li>
                           <li>Lipo-Injection</li>
                           <li>Laser Treatments - Skin Rejuvenation</li>
                           <li>Laser Treatments - Resurfacing</li>
                           <li>Laser Treatment - Thread Veins</li>
                           <li>Laser Eye Surgery</li>
                           <li>Isologen Process</li>
                           <li>Intraocular Lenses</li>
                           <li>Implants (non Breast)</li>
                           <li>Hormone Treatment</li>
                           <li>Health Consultations</li>
                           <li>Hair Simulation</li>
                           <li>Glasses</li>
                           <li>Gastric Band</li>
                           <li>Fresh Breath Treatments</li>
                           <li>Fertility Testing</li>
                           <li>Face Lift</li>
                           <li style="font-weight: bold;"><strong>NAILS</strong></li>
                           <li>Fish Manicure</li>
                           <li>Two Week Manicure</li>
                           <li>Fish Analytics</li>
                           <li>PerfectSense Paraffin Wax</li>
                           <li>Pedicure</li>
                           <li>Paraffin Wax Treatments</li>
                           <li>Nail Extensions and Overlays</li>
                           <li>Callus Peel</li>
                           <li>Swarovski Crystal Pedicure</li>
                           <li>Snakeskin Manicure</li>
                           <li>Nail Art</li>
                           <li>Minx Nails</li>
                           <li>Manicure</li>
                           <li>Gel Nails</li>
                           <li>Foot Scrub</li>
                           <li>Fish Pedicure</li>
                           <li style="font-weight: bold;"><strong>PHYSICAL THERAPY</strong></li>
                           <li>Yumuna Body Rolling</li>
                           <li>Trager Approach</li>
                           <li>The Rossiter System</li>
                           <li>The Emmett Technique</li>
                           <li>SIRPA Recovery Programme</li>
                           <li>Rolfing</li>
                           <li>Resistance Stretching</li>
                           <li>Physiotherapy</li>
                           <li>Passive Exercise</li>
                           <li>Osteopathy</li>
                           <li>Neuro-skeletal Realignment Therapy</li>
                           <li>Naprapathy</li>
                           <li>Myofascial Release Therapy</li>
                           <li>Hippotherapy</li>
                           <li>Hallerwork</li>
                           <li>Grinberg Method</li>
                           <li>Feldenkrais Method</li>
                           <li>Dorn Method</li>
                           <li>Craniosacral Therapy</li>
                           <li>Arvigo Therapy</li>
                           <li>Amatsu</li>
                           <li>Alexander Technique</li>
                           <li>Bowen Technique</li>
                           <li>Chiropody</li>
                           <li>Chiropractic</li>
                        </ul>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-sm-6">
                        <label class="color-default mb-2">Duration</label>
                        <div class="input-group position-relative mb-3">
                           <input type="text" class="form-control">
                           <div class="btn-static h-50px">Hrs</div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label class="color-default mb-2">Price</label>
                        <div class="input-group">
                           <input type="text" class="form-control">
                           <div class="btn-static h-50px">$</div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="color-default mb-2">Pricing Name (optional)</label>
                     <input type="text" class="form-control" value="Is this diffrent from Service Type">
                  </div>
                  <div class="form-group">
                     <label class="color-default mb-2">Description</label>
                     <textarea class="form-control">Type some notes</textarea>
                  </div>
               </div>
               <div class="collapse" id="serviceformRepeat">
                  <div class="form-group">
                     <label class="color-default mb-2">Service Type</label>
                     <div class="our-custom-select custom-select-sale">
                        <div class="selected-value">
                           <div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Choose
                           </div>
                           <input type="text" name="returnitem" readonly class="d-none" />
                        </div>
                        <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                           style="height:300px; z-index:999">
                           <li>Choose</li>
                           <li style="font-weight: bold;"><strong>HAIR</strong></li>
                           <li>Haircuts and Hairdressing</li>
                           <li>Japanese Straightening</li>
                           <li>Hair Transplants</li>
                           <li>Hair Loss Treatments - non surgical</li>
                           <li>Hair Extensions</li>
                           <li>Hair Consulting</li>
                           <li>Hair Conditioning</li>
                           <li>Hair Colouring and Highlights</li>
                           <li>Brocato's Smoothing</li>
                           <li>Brazilian Blow Dry Keratin</li>
                           <li>Blow Dry</li>
                           <li>Airlites</li>
                           <li>Wedding Hair</li>
                           <li>Straighteners</li>
                           <li>Permanent Waves</li>
                           <li style="font-weight: bold;"><strong>BODY</strong></li>
                           <li>Multi Polar Radio Frequency Treatment</li>
                           <li>Acoustic Wave Therapy</li>
                           <li>Acupuncture</li>
                           <li>Akasuri</li>
                           <li>Arasys Toning & Inch Loss Treatment</li>
                           <li>Backcials</li>
                           <li>Bikini Facial</li>
                           <li>Body Exfoliation Treatments</li>
                           <li>Body Treatments</li>
                           <li>Body Treatments - CACI</li>
                           <li>Body Wraps</li>
                           <li>Cellulite Treatments</li>
                           <li>Colonic Hydrotherapy</li>
                           <li>Colonic Therapy</li>
                           <li>Cryolipolysis</li>
                           <li>Cryotherapy</li>
                           <li>Cupping</li>
                           <li>Dry Floatation</li>
                           <li>Electrotherapy</li>
                           <li>Endermologie Lipo-Massage</li>
                           <li>Endermotherapy</li>
                           <li>Fish Spa Full Body Treatment</li>
                           <li>Floatation</li>
                           <li>Gua Sha</li>
                           <li>Heat Treatments</li>
                           <li>Hydrotherapy</li>
                           <li>Hyperhidrosis Treatment</li>
                           <li>i-Lipo</li>
                           <li>Infrared Therapy</li>
                           <li>Iyashi Dome</li>
                           <li>Laser Lipo</li>
                           <li>Leech Therapy</li>
                           <li>Lipo-Light</li>
                           <li>Lipodissolve</li>
                           <li>No Needle Mesotherapy</li>
                           <li>Photorejuvenation Treatments</li>
                           <li>Piercing</li>
                           <li>Pre-birth Acupuncture</li>
                           <li>Rasul and Mud Treatments</li>
                           <li>Russian Banya</li>
                           <li>Scierotherapy</li>
                           <li>SmartLipo</li>
                           <li>Spray Tanning and Sunless Tanning</li>
                           <li>Steam and Sauna Therapy</li>
                           <li>Strawberry Laser Lipo</li>
                           <li>Sun Angel</li>
                           <li>Sunbeds and Tanning Booths</li>
                           <li>Taizen Japanese Bath</li>
                           <li>Tattooing</li>
                           <li>Henna Designs</li>
                           <li>Thalassotherapy</li>
                           <li>Ultrasound Therapy</li>
                           <li>Universal Contour Wrap</li>
                           <li>Vaser Lipo-Contouring</li>
                           <li>Vattooing</li>
                           <li>VelaShape</li>
                           <li>VinoTherapy</li>
                           <li>Weight Loss Treatments</li>
                           <li style="font-weight: bold;"><strong>COUNSELLING & HOLISTIC</strong></li>
                           <li>Past Life Regression Therapy</li>
                           <li>Psychotherapy</li>
                           <li>Weight Loss Hypnotherapy</li>
                           <li>Traditional Chinese Medicine</li>
                           <li>Timeline Therapy</li>
                           <li>Thought Field Therapy</li>
                           <li>Thermography</li>
                           <li>The Lightning Process</li>
                           <li>Styling</li>
                           <li>Stress Management</li>
                           <li>Speech Therapy</li>
                           <li>Sophrology</li>
                           <li>Somatic Experiencing</li>
                           <li>Sleep Treatments</li>
                           <li>Shirodhara</li>
                           <li>Shamanic Healing</li>
                           <li>Sex Counselling</li>
                           <li>Reiki</li>
                           <li>Radionics</li>
                           <li>Psychology</li>
                           <li>Psychic Love Coaching</li>
                           <li>Acustaple</li>
                           <li>Addictions Counselling</li>
                           <li>Angel Therapy</li>
                           <li>Anger Management</li>
                           <li>Aromatherapy</li>
                           <li>Ayurvedic</li>
                           <li>Bach Flower Remedies</li>
                           <li>BioMeridian Analysis</li>
                           <li>Bioresonance Therapy</li>
                           <li>BodyTalk</li>
                           <li>Coaching</li>
                           <li>Cognitive Behaviour Therapy</li>
                           <li>Colour Therapy</li>
                           <li>Combined Decongestive Therapy</li>
                           <li>Counselling</li>
                           <li>Crystal Therapy</li>
                           <li>Doula Birth Companion</li>
                           <li>Dream Therapy</li>
                           <li>Ear Candling</li>
                           <li>Emotional Therapy</li>
                           <li>Energy Therapy</li>
                           <li>Feng Shui</li>
                           <li>Grief Recovery</li>
                           <li>Halotherapy</li>
                           <li>Healing</li>
                           <li>Herbal & Flower Essence</li>
                           <li>Herbal Medicine and Supplements</li>
                           <li>Homeopathy</li>
                           <li>HypnoBirthing</li>
                           <li>Hypnotherapy</li>
                           <li>Image Consulting</li>
                           <li>Intuitive Readings</li>
                           <li>Ionic Foot Bath</li>
                           <li>Ionocinesis</li>
                           <li>Iridology</li>
                           <li>Ki Therapy</li>
                           <li>Kinesiology</li>
                           <li>Life Coaching</li>
                           <li>Light Therapy</li>
                           <li>Magnetic Therapy</li>
                           <li>Meridian Therapies</li>
                           <li>Metamorphic Technique</li>
                           <li>Mind Boxing</li>
                           <li>Mindfulness</li>
                           <li>Moxibustion</li>
                           <li>Naturopathy</li>
                           <li>Neuro Linguistic Programming</li>
                           <li>NeuroSpa</li>
                           <li>Nutritional Advice & Treatments</li>
                           <li style="font-weight: bold;"><strong>FACE</strong></li>
                           <li>Brow Lift</li>
                           <li>Chemical Skin Peel</li>
                           <li>Dermaplaning</li>
                           <li>Eye Treatments</li>
                           <li>Eyebrow and Eyelash Tinting</li>
                           <li>Eyebrow and Eyelash Treatments</li>
                           <li>Eyelash Extensions</li>
                           <li>Eyelash Perming</li>
                           <li>Face Lift - Nonsurgical</li>
                           <li>Facial Reflexology</li>
                           <li>Facial Rejuvenation Acupuncture</li>
                           <li>Facials</li>
                           <li>Facials - CACI</li>
                           <li>Facials - Galvanic</li>
                           <li>Geisha Facial</li>
                           <li>HD Brows</li>
                           <li>Honey Facial</li>
                           <li>LashDip</li>
                           <li>Lava Shell Therma Facial</li>
                           <li>LED Light Therapy</li>
                           <li>LPG Facelift</li>
                           <li>LVL Lashes</li>
                           <li>Makeup Treatments</li>
                           <li>Micro-Needling</li>
                           <li>Microcurrent Treatments</li>
                           <li>Microdermabrasion</li>
                           <li>Oxygen Facial</li>
                           <li>Placenta Facial</li>
                           <li>Semi Permanent Mascara</li>
                           <li>Acne Treatments</li>
                           <li>Silk Peel</li>
                           <li>Skincare Consultation</li>
                           <li>Snail Facial</li>
                           <li>Spermine Facial</li>
                           <li>Stem Cell Facial</li>
                           <li>Teen Facial</li>
                           <li>Wedding Makeup</li>
                           <li>Auricular Acupuncture</li>
                           <li>Beauty Treatments</li>
                           <li>Camouflage Make-up</li>
                           <li style="font-weight: bold;"><strong>HAIR REMOVAL</strong></li>
                           <li>Depilation</li>
                           <li>Ear Hair Trimming</li>
                           <li>Epilar</li>
                           <li>French Bikini Wax</li>
                           <li>Hollywood Waxing</li>
                           <li>Intense Pulsed Light Therapy (IPL)</li>
                           <li>Laser Hair Removal</li>
                           <li>Male Waxing</li>
                           <li>Men's Shaving</li>
                           <li>Nasal Hair Trimming</li>
                           <li>Penazzling</li>
                           <li>Shaving Lesson</li>
                           <li>Soprano Laser Hair Removal</li>
                           <li>Sugaring</li>
                           <li>Threading</li>
                           <li>Vajazzling</li>
                           <li>Waxing</li>
                           <li>Brazilian Waxing</li>
                           <li>Electrolysis</li>
                           <li>Beard Trimming</li>
                           <li style="font-weight: bold;"><strong>MASSAGE</strong></li>
                           <li>Tui Na Massage</li>
                           <li>Honey Massage</li>
                           <li>Himalayan Mineral Massage</li>
                           <li>Herbal Compress Massage</li>
                           <li>Hand Massage</li>
                           <li>Garshan</li>
                           <li>Four Hands Massage</li>
                           <li>Foot Massage</li>
                           <li>Face Massage</li>
                           <li>Esalen Massage</li>
                           <li>Deep Tissue Massage</li>
                           <li>Children's Massage</li>
                           <li>Chi Nei Tsang</li>
                           <li>Chavutti Thirumal Massage</li>
                           <li>Chakra Massage</li>
                           <li>Chair Massage</li>
                           <li>Biodynamic Massage</li>
                           <li>Baobab Massage</li>
                           <li>Bamboo Massage</li>
                           <li>Ayurvedic Massages</li>
                           <li>Ashiatsu</li>
                           <li>Aromatherapy Massage</li>
                           <li>Acupressure</li>
                           <li>Abhyanga Ayurvedic Massage</li>
                           <li>Reflexology</li>
                           <li>Balinese Massage</li>
                           <li>Moroccan Bath</li>
                           <li>Wood Therapy</li>
                           <li>Watsu Massage</li>
                           <li>Vishesh Ayurvedic Massage</li>
                           <li>Underwater Massage</li>
                           <li>Turkish Bath</li>
                           <li>Trigger Point Therapy</li>
                           <li>Therapeutic Massage</li>
                           <li>Thai Massage</li>
                           <li>Thai Luk Pra Kob Massage</li>
                           <li>Thai Foot Massage</li>
                           <li>Swedish Massage</li>
                           <li>Stone Massage Therapy</li>
                           <li>Srota Ayrvendic Massage</li>
                           <li>Sports Massage</li>
                           <li>Sound Massage</li>
                           <li>Six Hand Massage</li>
                           <li>Shiatsu Massage</li>
                           <li>Seitai Massage</li>
                           <li>Scar Tissue Massage</li>
                           <li>Rollerssage</li>
                           <li>Pre and Post Natal Massage</li>
                           <li>Platza</li>
                           <li>No Hands Massage</li>
                           <li>Neuromuscular Massage Therapy</li>
                           <li>MELT Method</li>
                           <li>Lymphatic Drainage Massage</li>
                           <li>Lymphatic Drainage</li>
                           <li>Lomi Lomi Massage</li>
                           <li>Lava Shells Massage</li>
                           <li>Lava Bambu Massage</li>
                           <li>Khmer Massage</li>
                           <li>Indian Head Massage</li>
                           <li>Hydrotherm Massage</li>
                           <li style="font-weight: bold;"><strong>MEDICAL & DENTAL</strong></li>
                           <li>Drip therapy</li>
                           <li>Allergy Testing</li>
                           <li>Arm Lift</li>
                           <li>Eye Tests</li>
                           <li>Ear Pinning</li>
                           <li>Dracula Therapy</li>
                           <li>Dermatology</li>
                           <li>Dermal Fillers</li>
                           <li>Dental Treatments</li>
                           <li>Cosmetic Surgery</li>
                           <li>Cosmetic Skin Treatments</li>
                           <li>Cosmetic Injectables</li>
                           <li>Cosmetic Dental Treatments</li>
                           <li>Contact Lenses</li>
                           <li>Collagen Treatments</li>
                           <li>Chicago Facelift</li>
                           <li>Cheek Enhancement</li>
                           <li>Carboxytherapy</li>
                           <li>Buttock Implants</li>
                           <li>Bust Treatments and Enhancement</li>
                           <li>Breast Reduction</li>
                           <li>Breast Fillers</li>
                           <li>Breast Enlargement</li>
                           <li>UVB Photo-Biological Stimulation</li>
                           <li>Tummy Tuck</li>
                           <li>TUG Breast Reconstruction</li>
                           <li>Tooth Jewellery</li>
                           <li>Thread Vein Treatment</li>
                           <li>Thigh Lift</li>
                           <li>Teeth Whitening</li>
                           <li>Tattoo Removal</li>
                           <li>Skin Tightening</li>
                           <li>Skin Lightening</li>
                           <li>Scar Tissue Treatments</li>
                           <li>Scalp Reduction</li>
                           <li>Rhinoplasty</li>
                           <li>Orthodontics</li>
                           <li>Necklift</li>
                           <li>Natural Breast Enlargement</li>
                           <li>Mole/Cyst Removal</li>
                           <li>Blood Testing</li>
                           <li>Biofeedback</li>
                           <li>Areola Reconstruction</li>
                           <li>Mole Removal</li>
                           <li>Mesotherapy</li>
                           <li>Mastopexy</li>
                           <li>Liposuction</li>
                           <li>Lipo-Injection</li>
                           <li>Laser Treatments - Skin Rejuvenation</li>
                           <li>Laser Treatments - Resurfacing</li>
                           <li>Laser Treatment - Thread Veins</li>
                           <li>Laser Eye Surgery</li>
                           <li>Isologen Process</li>
                           <li>Intraocular Lenses</li>
                           <li>Implants (non Breast)</li>
                           <li>Hormone Treatment</li>
                           <li>Health Consultations</li>
                           <li>Hair Simulation</li>
                           <li>Glasses</li>
                           <li>Gastric Band</li>
                           <li>Fresh Breath Treatments</li>
                           <li>Fertility Testing</li>
                           <li>Face Lift</li>
                           <li style="font-weight: bold;"><strong>NAILS</strong></li>
                           <li>Fish Manicure</li>
                           <li>Two Week Manicure</li>
                           <li>Fish Analytics</li>
                           <li>PerfectSense Paraffin Wax</li>
                           <li>Pedicure</li>
                           <li>Paraffin Wax Treatments</li>
                           <li>Nail Extensions and Overlays</li>
                           <li>Callus Peel</li>
                           <li>Swarovski Crystal Pedicure</li>
                           <li>Snakeskin Manicure</li>
                           <li>Nail Art</li>
                           <li>Minx Nails</li>
                           <li>Manicure</li>
                           <li>Gel Nails</li>
                           <li>Foot Scrub</li>
                           <li>Fish Pedicure</li>
                           <li style="font-weight: bold;"><strong>PHYSICAL THERAPY</strong></li>
                           <li>Yumuna Body Rolling</li>
                           <li>Trager Approach</li>
                           <li>The Rossiter System</li>
                           <li>The Emmett Technique</li>
                           <li>SIRPA Recovery Programme</li>
                           <li>Rolfing</li>
                           <li>Resistance Stretching</li>
                           <li>Physiotherapy</li>
                           <li>Passive Exercise</li>
                           <li>Osteopathy</li>
                           <li>Neuro-skeletal Realignment Therapy</li>
                           <li>Naprapathy</li>
                           <li>Myofascial Release Therapy</li>
                           <li>Hippotherapy</li>
                           <li>Hallerwork</li>
                           <li>Grinberg Method</li>
                           <li>Feldenkrais Method</li>
                           <li>Dorn Method</li>
                           <li>Craniosacral Therapy</li>
                           <li>Arvigo Therapy</li>
                           <li>Amatsu</li>
                           <li>Alexander Technique</li>
                           <li>Bowen Technique</li>
                           <li>Chiropody</li>
                           <li>Chiropractic</li>
                        </ul>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-sm-6">
                        <label class="color-default mb-2">Duration</label>
                        <div class="input-group mb-3">
                           <input type="text" class="form-control">
                           <div class="btn-static h-50px">Hrs</div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label class="color-default mb-2">Price</label>
                        <div class="input-group">
                           <input type="text" class="form-control">
                           <div class="btn-static h-50px">$</div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="color-default mb-2">Pricing Name (optional)</label>
                     <input type="text" class="form-control" value="Is this diffrent from Service Type">
                  </div>
                  <div class="form-group">
                     <label class="color-default mb-2">Description</label>
                     <textarea class="form-control">Type some notes</textarea>
                  </div>
               </div>
               <a href="#" class="btn btnlight" id="addanoSerBTN">Add another service</a>
            </form>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer d-flex blue-text-light">
            <div>
               <button type="button" class="btn btn-save cancel-btn p-3 shadow-none mr-2 trigger-close h-40 hover-grey"
                  data-dismiss="modal">Delete</button>
            </div>
            <div class="ml-auto d-flex align-items-center">
               <button type="button" class="btn btn-save cancel-btn p-3 shadow-none mr-2 trigger-close h-40 hover-grey"
                  data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-save btn-primary hover-effect save-btn p-3 trigger-close h-40 ml-4"
                  data-dismiss="modal">Save</button>
            </div>
         </div>
         <div class="modal-footer border-0">

         </div>
      </div>
   </div>
</div>
<!--End Service Modal-->
<!--Start Voucher Modal-->
<div class="modal fade support-pin edit-pin new-modal" id="Addvoucher">
   <div class="modal-dialog box-shodow">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title text-center w-100 color-black font-22">
               Add Voucher / Gift Card <br />
               <span class="blue-text-light pt-3 font-14 d-block">Wednesday, 7 May 2020</span>
            </h4>
            <br />
            <button class="menuhover position-relative" data-dismiss="modal" type="button">
               <img src="assets/image/close.svg" class="imgnone cursor-pointer" alt="close" width="35">
               <img src="assets/image/close_hover.svg" class="imgblock" alt="close" width="35">
            </button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <form>
               <div>
                  <div class="form-group">
                     <div class="our-custom-select custom-select-sale">
                        <div class="selected-value">
                           <div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Choose
                           </div>
                           <input type="text" name="returnitem" readonly class="d-none" />
                        </div>
                        <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big" style="height:150px;">
                           <li>Choose</li>
                           <li>Choose</li>
                           <li>Gift Card</li>
                           <li>Discount Code</li>
                           <li>Loyalty Card</li>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" value="Type Code / Number">
                  </div>
               </div>
            </form>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer d-flex blue-text-light">
            <div>
               <button type="button" class="btn btn-save cancel-btn p-3 shadow-none mr-2 trigger-close h-40 hover-grey"
                  data-dismiss="modal">Delete</button>
            </div>
            <div class="ml-auto d-flex align-items-center">
               <button type="button" class="btn btn-save cancel-btn p-3 shadow-none mr-2 trigger-close h-40 hover-grey"
                  data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-save btn-primary hover-effect save-btn p-3 trigger-close h-40 ml-3"
                  data-dismiss="modal">Add</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!--End Voucher Modal-->
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
