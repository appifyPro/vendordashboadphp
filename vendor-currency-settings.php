<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system order-details"
   style="padding-bottom: 80px;">
   <?php include("side-navigation.php");?>
   <!-- uk-toggle="target: #currency-modal" -->
   <div class="right-side-section pb-5">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Store Currency Settings</div>
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
         <!--<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Store Currency Settings
					<p class="d-block font-16 greyText-color">A currecncy conversion fee will apply to your tranaction. If your store currency is diffrent than your payout currency. Learn more about your store currency.</p>
			</div>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Store Currency Settings</div>
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
         <div class="row m-0 orderDetails-section-outter exmt-10">
            <div class="single_order_part d-flex align-items-start single-order-section w-100">
               <div class="leftSide-section w-100">
                  <div class="card">
                     <div class="card-body p-5">
                        <div class="row mt-4">
                           <div class="col-12 pt-3 pb-4">
                              <div class="row-custom">
                                 <div class="col-custom active">
                                    <span class="lang-org">Pound sterling</span>
                                    <span class="lang-vers">GBP - £</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Australian dollar</span>
                                    <span class="lang-vers">AUD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Brazilian real</span>
                                    <span class="lang-vers">BRL - R$</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Bulgarian lev</span>
                                    <span class="lang-vers">BGN - лв.</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Canadian dollar</span>
                                    <span class="lang-vers">CAD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Chilean peso</span>
                                    <span class="lang-vers">CLP - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Chinese yuan</span>
                                    <span class="lang-vers">CNY - ￥</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Colombian peso</span>
                                    <span class="lang-vers">COP - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Costa Rican colon</span>
                                    <span class="lang-vers">CRC - ₡</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Croatian kuna</span>
                                    <span class="lang-vers">HRK - kn</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Czech koruna</span>
                                    <span class="lang-vers">CZK - Kč</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Danish krone</span>
                                    <span class="lang-vers">DKK - kr</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Emirati dirham</span>
                                    <span class="lang-vers">AED - ﺩ.ﺇ</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Euro</span>
                                    <span class="lang-vers">EUR - €</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Hong Kong dollar</span>
                                    <span class="lang-vers">HKD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Hungarian forint</span>
                                    <span class="lang-vers">HUF - Ft</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Indian rupee</span>
                                    <span class="lang-vers">INR - ₹</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Israeli new shekel</span>
                                    <span class="lang-vers">ILS - ₪</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Japanese yen</span>
                                    <span class="lang-vers">JPY - ¥</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Malaysian ringgit</span>
                                    <span class="lang-vers">MYR - RM</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Mexican peso</span>
                                    <span class="lang-vers">MXN - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Moroccan dirham</span>
                                    <span class="lang-vers">MAD</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">New Taiwan dollar</span>
                                    <span class="lang-vers">TWD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">New Zealand dollar</span>
                                    <span class="lang-vers">NZD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Norwegian krone</span>
                                    <span class="lang-vers">NOK - kr</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Peruvian sol</span>
                                    <span class="lang-vers">PEN - S/</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Philippine peso</span>
                                    <span class="lang-vers">PHP - ₱</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Polish zloty</span>
                                    <span class="lang-vers">PLN - zł</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Romanian leu</span>
                                    <span class="lang-vers">RON - lei</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Russian ruble</span>
                                    <span class="lang-vers">RUB - ₽</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Saudi Arabian riyal</span>
                                    <span class="lang-vers">SAR - SR</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Singapore dollar</span>
                                    <span class="lang-vers">SGD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">South African rand</span>
                                    <span class="lang-vers">ZAR - R</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">South Korean won</span>
                                    <span class="lang-vers">KRW - ₩</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Swedish krona</span>
                                    <span class="lang-vers">SEK - kr</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Swiss franc</span>
                                    <span class="lang-vers">CHF</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Thai baht</span>
                                    <span class="lang-vers">THB - ฿</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Turkish lira</span>
                                    <span class="lang-vers">TRY - ₺</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">United States dollar</span>
                                    <span class="lang-vers">USD - $</span>
                                 </div>
                                 <div class="col-custom">
                                    <span class="lang-org">Uruguayan peso</span>
                                    <span class="lang-vers">UYU - $U</span>
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
