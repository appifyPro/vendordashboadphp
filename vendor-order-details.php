<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>
<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system order-details">
   <?php include("side-navigation.php");?>
   <div class="right-side-section">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Order Details</div>
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
         <!--<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Order Details</div>-->
         <!--<p class="d-block font-16 greyText-color px-4 lh-1 mt-2">Creating a lightning deal on StayToEnjoy can be very
            lucrative. In this way, the visibility of the products can be increased immensely without much effort, which
            means that sales, profit and ranking can skyrocket without any effort.</p>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Order Details</div>
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
            <div class="tab-pane active pb-3 px-4">
               <div class="card single_order_part single-order-section mb-5" style="overflow:unset;">
                  <div class="business_profile_part p-4">
                     <div class="business_profile_heading">
                        <div class="row">
                           <div class="col-md-6 ship-order">
                              <div class="d-flex align-items-center dropdown">
                                 <p class="font-22 color-default mr-2">Order ID #1001</p>
                                 <span class="badge badge-success-lighten">Paid</span>
                              </div>
                              <p class="font-13 color-default mt-2">July 24, 2020 at 8:35 from Draft Orders</p>
                           </div>
                           <div class="col-md-6 sm-padding-0">
                              <div class="order_draft_content p-0 border-0">
                                 <div class="pring_part">
                                    <div class="d-flex align-items-center">
                                       <div class="iocnlink ml-auto">
                                          <a href="#" class="bg-secondary mr-2"><img src="assets/img/print.svg"
                                                width="35"></a>

                                       </div>
                                       <div class="iocnlink">
                                          <a href="#" class="bg-secondary mr-2"><img src="assets/img/send-mail.svg"
                                                width="35"></a>
                                       </div>
                                       <div class="iocnlink">
                                          <a href="#" class="bg-secondary mr-3"><img src="assets/img/download1.svg"
                                                width="35"></a>
                                       </div>
                                       <div class="dropdown">
                                          <button type="button" class="btn btn-light font-13 dropdown-toggle"
                                             data-toggle="dropdown">
                                             More actions
                                          </button>
                                          <div class="dropdown-menu more-action-options">
                                             <a class="dropdown-item" href="javascript:void(0);">Duplicate</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Refund</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Cancel order</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Save</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Archive</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Add to Stock</a>
                                             <a class="dropdown-item" href="javascript:void(0);">Change order</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead style="background: #eef2f7;">
                              <tr>
                                 <th class="text-dark font-16 text-capitalize">Item</th>
                                 <th class="text-dark font-16 text-capitalize">Quantity</th>
                                 <th class="text-dark font-16 text-capitalize">Price</th>
                                 <th class="text-dark font-16 text-capitalize">Tax Type</th>
                                 <th class="text-dark font-16 text-capitalize">Tax %</th>
                                 <th class="text-dark font-16 text-capitalize">Tax Amt</th>
                                 <th class="text-dark font-16 text-capitalize">Total</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <figure class="mb-0 mr-3 border w-h-40px d-flex align-items-center"
                                          style="flex-shrink: 0;">
                                          <img src="assets/img/shoes.png" alt="" class="p-1">
                                       </figure>
                                       <div>
                                          <p class="line-height-default mt-0 text-muted font-nunito">The Military Duffle
                                             Bag</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="text-muted font-nunito">3</td>
                                 <td class="text-muted font-nunito">$128</td>
                                 <td class="text-muted font-nunito">VAT</td>
                                 <td class="text-muted font-nunito">10</td>
                                 <td class="text-muted font-nunito">$12.8</td>
                                 <td class="text-muted font-nunito">$396.8</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <figure class="mb-0 mr-3 border w-h-40px d-flex align-items-center"
                                          style="flex-shrink: 0;">
                                          <img src="assets/img/shoes.png" alt="" class="p-1">
                                       </figure>
                                       <div>
                                          <p class="line-height-default mt-0 text-muted font-nunito">Mountain Basket
                                             Ball</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="text-muted font-nunito">1</td>
                                 <td class="text-muted font-nunito">$199</td>
                                 <td class="text-muted font-nunito">GST</td>
                                 <td class="text-muted font-nunito">10</td>
                                 <td class="text-muted font-nunito">19.9</td>
                                 <td class="text-muted font-nunito">$218.9</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <figure class="mb-0 mr-3 border w-h-40px d-flex align-items-center"
                                          style="flex-shrink: 0;">
                                          <img src="assets/img/shoes.png" alt="" class="p-1">
                                       </figure>
                                       <div>
                                          <p class="line-height-default mt-0 text-muted font-nunito">Wavex Canvas
                                             Messenger Bag</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="text-muted font-nunito">5</td>
                                 <td class="text-muted font-nunito">$180</td>
                                 <td class="text-muted font-nunito">VAT</td>
                                 <td class="text-muted font-nunito">10</td>
                                 <td class="text-muted font-nunito">$18</td>
                                 <td class="text-muted font-nunito">$918</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <figure class="mb-0 mr-3 border w-h-40px d-flex align-items-center"
                                          style="flex-shrink: 0;">
                                          <img src="assets/img/shoes.png" alt="" class="p-1">
                                       </figure>
                                       <div>
                                          <p class="line-height-default mt-0 text-muted font-nunito">The Utility Shirt
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="text-muted font-nunito">2</td>
                                 <td class="text-muted font-nunito">$79</td>
                                 <td class="text-muted font-nunito">VAT</td>
                                 <td class="text-muted font-nunito">10</td>
                                 <td class="text-muted font-nunito">$7.9</td>
                                 <td class="text-muted font-nunito">$155.9</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="paid_btn_part d-flex justify-content-end pb-5 px-5">
                     <a href="#" class="btn dynamic-button btn-danger-new font-16 text-white radius-5">Cancel Order</a>
                  </div>
               </div>
               <div class="card" style="overflow:unset;">
                  <div class="card-body p-4">
                     <div class=" d-flex align-items-center border-bottom pb-5 justify-content-between sm-flex-column">
                        <div class="font-18 font-blue">
                           Shipping Status
                        </div>
                        <div class="dropdown">
                           <button type="button" class="btn btn-light font-13 dropdown-toggle" data-toggle="dropdown">
                              Change Shipping Status
                           </button>
                           <div class="dropdown-menu more-action-options">
                              <a class="dropdown-item" href="javascript:void(0);">Order Recieved</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order Processing</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order Packed</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order Disptched For Shipping</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order accepted by Shipping</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order In transit by shipping</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order Reached Destination</a>
                              <a class="dropdown-item" href="javascript:void(0);">Order at shipper</a>
                           </div>
                        </div>
                     </div>
                     <div class="container-fluid py-4 border-bottom">
                        <div class="truck-image d-flex align-items-center pb-3">
                           <img src="assets/img/export_truck.png" height="30">
                           <span class="font-weight-500 text-muted font-16 font-nunito">UPS Delivery</span>
                        </div>
                        <div class="horizontal-steps mt-4 mb-4 pb-5 mx-auto" id="tooltip-container" style="width:90%;">
                           <div class="horizontal-steps-content">
                              <div class="step-item">
                                 <span>Order Placed</span>
                              </div>
                              <div class="step-item current">
                                 <span>Packed</span>
                              </div>
                              <div class="step-item">
                                 <span>Shipped</span>
                              </div>
                              <div class="step-item">
                                 <span>Shipped</span>
                              </div>
                              <div class="step-item">
                                 <span>Shipped</span>
                              </div>
                              <div class="step-item">
                                 <span>Shipped</span>
                              </div>
                              <div class="step-item">
                                 <span>Delivered</span>
                              </div>
                           </div>
                           <div class="process-line" style="width: 33%;"></div>
                        </div>
                     </div>
                     <div class="button-of-submit text-right pt-5">
                        <button type="button" class="radius-5 font-14 text-white px-4 py-2"
                           style="background:#045dde">Update Shipping Status</button>
                     </div>
                  </div>
               </div>
               <div class="row m-0 orderDetails-section-outter px-0">
                  <div class="single_order_part d-flex align-items-start single-order-section w-100">
                     <div class="leftSide-section">
                        <div class="row">
                           <div class="col-12">
                              <div class="card">
                                 <div class="card-body p-5">
                                    <div class="row">
                                       <div class="col-12 col-md-3">
                                          <div class="w-100">
                                             <h4
                                                class="header-title mb-5 font-weight-bold text-muted font-nunito text-uppercase">
                                                Delivery Info</h4>
                                             <div class="text-center">
                                                <i class="fa fa-truck font-36  mb-3 text-muted"></i>
                                                <h5 class="text-muted font-16 font-nunito"><b
                                                      class="font-weight-500">UPS Delivery</b></h5>
                                                <p class="text-muted font-16 font-nunito py-1"><b
                                                      class="font-weight-500">Order ID :</b> xxxx235</p>
                                                <p class="text-muted font-16 font-nunito"><b
                                                      class="font-weight-500">Payment Mode :</b> COD</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-9">
                                          <div class="row">
                                             <div class="col-lg-10 col-12 ml-auto">
                                                <label class="font-14font-blue mb-3">Send Tracking ID</label>
                                                <div class="form-group mb-3">
                                                   <input type="text" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-lg-10 col-12 ml-auto">
                                                <label class="font-14font-blue mb-3">Add Tracking Link</label>
                                                <div class="form-group mb-3">
                                                   <input type="text" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-12 button-of-submit text-right">
                                                <button type="button" class="radius-5 font-14 text-white px-5 py-2"
                                                   style="background:#045dde">Send to Customer</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 mt-5">
                              <div class="card">
                                 <div class="card-body p-5">
                                    <h4
                                       class="header-title text-uppercase text-muted font-weight-bold font-nunito mb-5">
                                       Shipping Information</h4>
                                    <h5 class="text-muted font-weight-bold font-nunito">Stanley Jones</h5>
                                    <address class="mb-0 text-muted font-nunito position-relative font-14 address-lg"
                                       style="line-height: 1.53;">
                                       795 Folsom Ave, Suite 600<br>
                                       San Francisco, CA 94107<br>
                                       <span class="text-muted font-nunito">P:</span> (123) 456-7890 <br />
                                       <span class="text-muted font-nunito">M:</span> (+01) 12345 67890
                                       <a href="#"
                                          class="light-blue font-14 position-absolute bottom-0 right-0">Change</a>
                                    </address>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mt-5">
                              <div class="card">
                                 <div class="card-body p-5">
                                    <h4
                                       class="header-title text-uppercase text-muted font-weight-bold font-nunito mb-5">
                                       Billing Information</h4>
                                    <ul class="list-unstyled mb-0">
                                       <li class="p-0">
                                          <p class="text-muted font-nunito"><span class="font-weight-bold mr-2">Payment
                                                Type:</span> Credit Card</p>
                                          <p class="text-muted font-nunito"><span
                                                class="font-weight-bold mr-2">Provider:</span> Visa ending in 2851</p>
                                          <p class="text-muted font-nunito"><span class="font-weight-bold mr-2">Valid
                                                Date:</span> 02/2020</p>
                                          <p class="text-muted font-nunito"><span
                                                class="font-weight-bold mr-2">CVV:</span> xxx</p>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="rightSide-section">
                        <div class="page_box p-0 mb-4 box-shodow order-sta bg-white radius-5">
                           <div class="detailbanner" style="height: 118px;">
                              <img src="assets/img/singleorder-overview.png" alt="" width="100%">
                           </div>
                           <div class="text-center profile">
                              <div class="position-relative w-h-70px rounded-circle margin-0-auto">
                                 <figure class="logo m-0 left-0">
                                    <div class="position-relative d-inline-block">
                                       <img src="assets/img/profile-img.jpg" alt="" class="">
                                       <span
                                          class="bg-success position-absolute status radius-25 profile-status nohover bottom-0"
                                          style="right: 10px;"></span>
                                       <div class="upload_img">
                                          <input type="file" name="img" class="d-none" id="uplodFile">
                                          <label for="uplodFile" class="m-0 uploadBtn">
                                             <span class="fa fa-camera"></span>
                                          </label>
                                       </div>
                                    </div>
                                 </figure>
                              </div>
                              <h3 class="color-default font-20 title mb-0 mt-4 pt-2">Jens Behrmann</h3>
                              <div class="font-blue font-15 title">Bank Employee</div>
                           </div>
                           <div class="p20 pt-0 position-relative text-center" style="top:-25px">
                              <div class="d-flex justify-content-center pt-3">
                                 <div class="mr-4 d-flex align-items-center bg-secondary px-3 hover-grey radius-5">
                                    <div class="position-relative">
                                       <img src="assets/img/header-icon/chatbubble.svg"
                                          class="w-h-35px rounded-circle  imgnone">
                                       <!--<img src="assets/img/header-icon/chatbubble-hover.svg" class="w-h-35px rounded-circle imgblock">-->
                                    </div>
                                    <p class="font-14 font-blue pl-2">Call</p>
                                 </div>
                                 <div class="d-flex align-items-center bg-secondary px-3 hover-grey radius-5">
                                    <div class="position-relative">
                                       <!-- menuhover -->
                                       <img src="assets/img/header-icon/call.svg"
                                          class="w-h-35px rounded-circle imgnone">
                                       <!--<img src="assets/img/header-icon/call-hover.svg" class="w-h-35px rounded-circle imgblock">-->
                                    </div>
                                    <p class="font-14 font-blue pl-2">Send Message</p>
                                 </div>
                              </div>
                           </div>
                           <div class="p20 border-top position-relative pb-0" style="top:-25px">
                              <textarea placeholder="Add shipping note here"
                                 class="shadow-none form-group bg-white border default-placeholder font-weight-normal p-2 mb-3"></textarea>
                              <div class="text-right">
                                 <button
                                    class="bg-light-blue text-white font-13 px-5 radius-5 line-height-default py-3">Save</button>
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
