<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system loyalty-card-section"
   style="padding-bottom:80px">
   <?php include("side-navigation.php");?>
   <div class="right-side-section">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Opening Hours</div>
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
         <!--<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Opening Hours</div>
			<p class="d-block font-16 greyText-color px-4 lh-1 mt-2">Creating a lightning deal on StayToEnjoy can be very lucrative. In this way, the visibility of the products can be increased immensely without much effort, which means that sales, profit and ranking can skyrocket without any effort.</p>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Opening Hours</div>
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
               <div class="row m-0">
                  <div class="col-lg-7 automated_dis_content">
                     <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box border-0 pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <h4 class="m-0 color-default font-weight-500 py-0">Weekdays store hours</h4>
                                 <p class="mb-4 font-14">Describe your oofer with precise and meaningful words</p>
                              </div>
                              <div class="col-md-12">
                                 <div class="pricing-option-wrapper">
                                    <div class="row">
                                       <div class="w-100">
                                          <div class="col-md-5  col-sm-12 col-12 delivery-date">
                                             <p class="mb-1">Opens</p>
                                             <div class="input-group start-timeWrap">
                                                <input type="text" class="form-control start-timePicker">
                                             </div>
                                          </div>
                                          <div class="col-md-5  col-sm-12 col-12 delivery-date">
                                             <p class="mb-1">Close</p>
                                             <div class="input-group start-timeWrap">
                                                <input type="text" class="form-control start-timePicker">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box border-0 pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <h4 class="m-0 color-default font-weight-500 py-0">Weekdays store hours</h4>
                                 <p class="mb-4 font-14">Describe your oofer with precise and meaningful words</p>
                              </div>
                              <div class="col-md-12">
                                 <div class="pricing-option-wrapper">
                                    <div class="row">
                                       <div class="w-100">
                                          <div class="col-md-5  col-sm-12 col-12 delivery-date">
                                             <p class="mb-1">Opens</p>
                                             <div class="input-group start-timeWrap">
                                                <input type="text" class="form-control start-timePicker">
                                             </div>
                                          </div>
                                          <div class="col-md-5  col-sm-12 col-12 delivery-date">
                                             <p class="mb-1">Close</p>
                                             <div class="input-group start-timeWrap">
                                                <input type="text" class="form-control start-timePicker">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box border-0 pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <h4 class="m-0 color-default font-weight-500 py-0">Store break hours</h4>
                                 <p class="mb-4 font-14">Describe your oofer with precise and meaningful words</p>
                              </div>
                              <div class="col-md-12">
                                 <div class="pricing-option-wrapper">
                                    <div class="row">
                                       <div class="w-100">
                                          <div class="col-md-5  col-sm-12 col-12 delivery-date">
                                             <p class="mb-1">Opens</p>
                                             <div class="input-group start-timeWrap">
                                                <input type="text" class="form-control start-timePicker">
                                             </div>
                                          </div>
                                          <div class="col-md-5  col-sm-12 col-12 delivery-date">
                                             <p class="mb-1">Close</p>
                                             <div class="input-group start-timeWrap">
                                                <input type="text" class="form-control start-timePicker">
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
                  <div class="col-lg-5 ">
                     <div
                        class="ohPage-right-top mobile-section text-left pb-0 bg-white radius-5 w-100 position-sticky ml-0">
                        <div class="mobile-details text-left">
                           <div class="pt-5 pl-5 pb-1 pr-2">
                              <div>
                                 <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
                              </div>
                              <div class="maxh-scroll">
                                 <div class="smart-mobile position-relative px-5">
                                    <img src="img/glasses.png" width="100%">
                                 </div>
                                 <p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one
                                    product image. The most important image is the main image and is intended to give
                                    the buyer a first and good overview of the item. The main image appears in
                                    StayToEnjoy search results and when browsing.</p>

                                 <div class="row">
                                    <div class="col-12">
                                       <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage
                                       </h4>
                                    </div>
                                 </div>
                                 <div class="row mb-5 pb-5">
                                    <div class="col-12 col-lg-6">
                                       <div
                                          class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                          <img src="img/phone-img.svg" width="50">
                                       </div>
                                       <p class="line-height-normal">Product image does not take up enough space</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                       <div
                                          class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                          <img src="img/phone-img.svg" width="100">
                                       </div>
                                       <p class="line-height-normal">Product image does not take up enough space</p>
                                    </div>
                                 </div>
                                 <div class="row mb-4">
                                    <div class="col-12 border-top pt-4">
                                       <p class="text-justify mb-4">Main images must have a pure white background (pure
                                          white harmonizes with the search results and product detail pages on
                                          StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product
                                          images must be at least 500 pixels wide and high, with a maximum of 3000
                                          pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

                                       <p class="text-justify mb-4">The product must cover 85% of the entire image,
                                          measured along the longest side.</p>

                                       <p class="text-justify mb-4">In addition, the product should be in the middle and
                                          in the focus of the photo. In this way you ensure that the product to be sold
                                          is the sole focus and that it is clear to the buyer which product it is.</p>

                                       <p class="text-justify mb-4">Products in the main image must not be cropped by
                                          the frame edge, but must be fully featured so that the entire product is
                                          visible to the customer. The exception to this is jewelry, especially
                                          necklaces.</p>
                                    </div>
                                 </div>
                                 <div class="row mb-4">
                                    <div class="col-12">
                                       <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy
                                          trademarks</h4>
                                       <p class="text-justify">Product images on StayToEnjoy must not contain any logos,
                                          trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy.
                                          It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy
                                          Choice” , “Best Seller” or “Best Selling Product” on the image</p>
                                    </div>
                                 </div>
                                 <div class="row mb-4">
                                    <div class="col-12">
                                       <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
                                       <p class="text-justify">The product must have been professionally photographed
                                          for the main image. A graphic creation or an animation of the article is not
                                          permitted, as this can lead to falsification and not truthful representation.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row mb-4">
                                    <div class="col-12">
                                       <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article
                                          once</h4>
                                       <p class="text-justify">The main image must not show multiple versions of the
                                          item for sale. The main image must only show the product itself, with no other
                                          versions of the product.</p>
                                    </div>
                                 </div>
                                 <div class="row mb-5 pb-5">
                                    <div class="col-12 col-lg-6">
                                       <div
                                          class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                          <img src="img/girls-img-group.png" width="100%">
                                       </div>
                                       <p class="line-height-normal">Product image does not take up enough space</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                       <div
                                          class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                          <img src="img/girls-img-single.png" width="100%">
                                       </div>
                                       <p class="line-height-normal">Product image does not take up enough space</p>
                                    </div>
                                 </div>
                                 <div class="row mb-4">
                                    <div class="col-12">
                                       <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people
                                       </h4>
                                       <p class="text-justify">In principle, people may not be shown on product images
                                          on StayToEnjoy. There are exceptions in the categories of clothing, clothing
                                          accessories, shoes, handbags, suitcases, backpacks &amp; bags and jewelry. The
                                          requirement for these is that no models may be shown sitting, kneeling or
                                          leaning against anything. It is only permissible to depict the models standing
                                          while the focus is on the item for sale. In addition, it is not permitted in
                                          all categories to depict child models in pictures wearing swimwear or
                                          children's underwear.</p>
                                    </div>
                                 </div>
                                 <div class="row mb-4">
                                    <div class="col-12">
                                       <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
                                       <p class="text-justify">The article should be in the foreground on the main
                                          image. For this reason, unnecessary props that can distract from the actual
                                          product are taboo there.</p>
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
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
