<?php include("html/header/head-white-body.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<!-- Content -->
<main class="main_body_content return-management-system ml-0 bg-white pb-0">
   <section class="container-fluid h-100">
      <div class="row h-100">
         <div class="mobile_verification_section">
            <div class="mobile_verification_content">
               <div class="d-flex flex-wrap ">
                  <!--Start: Right Side-->
                  <div class="flow-step payout-form shop-listing mt-3 pt-1 pr-2 mr-0 w-100">
                     <!--Start: Box-->
                     <!---------------------------------------START MULTIPLE STEPS FOR REGULAR SALE------------------------------>
                     <section class="signup-step-container  firsttab">
                        <div class="wizard border-0 bg-none round-10">
                           <form role="form" action="index.html" class="login-box">
                              <div class="tab-content" id="main_form" style="padding-top: 0;">
                                 <!---------START FIRST MODULE--------->
                                 <div class="tab-pane active mob-left-pan-0" id="productinfo">
                                    <div class="container-search">
                                       <div class="row pb-4 mb-1 mt-3 mob-mt-2 w-search-hide-this">
                                          <div class="col-12 d-flex align-items-center pl-4">
                                             <a class="menuhover tooltip position-relative" href="vendor-dashboard.php"
                                                data-slide="next">
                                                <img src="img/back-arrow-icon.svg" width="19" class="imgnone" />
                                                <img src="img/back-arrow-icon-blue.svg" width="19" class="imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </a>
                                             <div class="px-4 st-offer-text">Start your offer
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-12 m-auto searh-mob-wrap">
                                             <div class="n1-search-wrap">
                                                <form action="#" autocomplete="off">
                                                   <div class="d-flex flex-wrap align-items-center gap-4 mob-gap-4">
                                                      <div class="n1-search-wrap-input autocomplete">
                                                         <input id="myInput" type="text"
                                                            placeholder="What you want sell?" value="" />
                                                         <span id="n1-close-iconid" class="n1-close-icon">
                                                            <img src="assets/img/delete.svg" alt="">
                                                         </span>
                                                      </div>
                                                      <input type="submit" value="GO" class="n1-search-wrap-btn" />
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="row mt-5 pt-4 pb-4 mob-bot-3">
                                          <div class="col-12 d-flex align-items-center">
                                             <div class="st-offer-text">Your Drafts</div>
                                             <a class="menuhover tooltip position-relative ml-4"
                                                href="vendor-dashboard.php" data-slide="next">
                                                <img src="img/back-arrow-icon.svg" width="19"
                                                   class="imgnone rotate-right-arrow" />
                                                <img src="img/back-arrow-icon-blue.svg" width="19"
                                                   class="imgblock rotate-right-arrow" />
                                             </a>
                                          </div>
                                          <div class="col-12">
                                             <span class="d-flex finish-text">Finish existing draft</span>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-12 mobile-hide">
                                             <div class="draft-container">
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="javascript:void(0)"
                                                            uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="javascript:void(0)"
                                                            uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="#" uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="#" uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="#" uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12 desktop-hide owl-pad-right-0">
                                             <div class="owl-mob-product-list owl-carousel">
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="javascript:void(0)"
                                                            uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="javascript:void(0)"
                                                            uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="#" uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="#" uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                                <div class="draft-item">
                                                   <div class="draft-item-wrap">
                                                      <div class="draft-img-edit">
                                                         <a href="product-basic.php"><img
                                                               src="assets/img/edit-pencil-icon.svg" alt=""></a>
                                                         <a href="#" uk-toggle="target: #remove-popup"><img
                                                               src="assets/img/garbage-can-icon.svg" alt=""></a>
                                                      </div>
                                                   </div>
                                                   <div class="draft-item-cont">
                                                      <h4><a href="product-basic.php">Mens Shirt</a></h4>
                                                      <h5><a href="product-basic.php">Short sleeve blue</a></h5>
                                                      <span class="draft-date">June 2023</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="n-copyright-text">
                                          <p>Copyright © 2023 StayToEnjoy UG. All rights reserved. StayToEnjoy <a
                                                href="#">terms and
                                                conditions</a>, <a href="#">data protection declaration, terms of use
                                                for payment processing</a>,
                                             declaration on the use of <a href="#">cookies</a> and <a
                                                href="#">StayToEnjoy Ads</a>.</p>
                                       </div>

                                    </div>
                                 </div>
                                 <!---------END FIRST MODULE--------->
                                 <!---------START SECOND MODULE--------->
                                 <div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="addfeatures">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div class="menuhover align-self-start tooltip position-relative"
                                                id="second-slide-btn" data-slide="next">
                                                <img src="img/back-arrow-icon.svg"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="img/back-arrow-icon.svg"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 desktop-view pt-2">Upload Product
                                                File<span class="line-height1.5 font-14 d-block">
                                                   You can upload Audio File, Video File, PDF, DOC, XLS, JPG,
                                                   .PNG</span>
                                             </div>
                                          </div>
                                          <div class="position-relative bg-white round-10 py-3 shop-wrap">
                                             <div class="p-4 form-font">
                                                <div class="row">
                                                   <div class="col-md-2 align-self-top">
                                                      <label data-toggle="tooltip" data-placement="right"
                                                         title="lorem ipsum">
                                                         Upload&nbsp;&nbsp;<i
                                                            class="fa fa-info-circle text-dark font-16"></i>
                                                      </label>
                                                   </div>
                                                   <div class="col-md-10">
                                                      <div class="bg-secondary radius-5 mb-3">
                                                         <div class="clearfix round-15"
                                                            style="text-align: center; margin: 0 auto;">
                                                            <div class="row upload-section">
                                                               <div class="col-md-6 auction-div">
                                                                  <div class="uploadicons-wrap mb-4">
                                                                     <div class="auction-img">
                                                                        <div class="menuhover align-self-center">
                                                                           <img src="assets/img/upload1.svg"
                                                                              class="imgnone" width="35">
                                                                           <img src="assets/img/upload2.svg"
                                                                              class="imgblock" width="35">
                                                                        </div>
                                                                     </div>
                                                                     <!-- <img src="assets/img/upload1.svg" width="35" /> -->
                                                                  </div>
                                                                  <p
                                                                     class="pt-0 font-14 line-height-10 auction-uploadtxt text-dark">
                                                                     Drag & Drop File</p>
                                                                  <p
                                                                     class="pt-0 font-14 line-height-10 auction-uploadtxt text-dark">
                                                                     or</p>

                                                                  <div
                                                                     class="uploadicons-wrap w-auto d-flex justify-content-center mt-4">
                                                                     <input type="file"
                                                                        class="file-upload report_screenshot cursor-pointer"
                                                                        id="file-upload" />
                                                                     <p
                                                                        class="browse blue-browse-btn cursor-pointer auction-uploadtxt">
                                                                        Browse</p>
                                                                  </div>
                                                                  <div class="browser_upload uploadicons-wrap mt-0">
                                                                     <ul class="upload_options m-0 p-0 py-2">
                                                                        <li
                                                                           class="hover-grey d-flex align-items-center">
                                                                           <img src="assets/image/monitor.svg"
                                                                              class="mr-2" alt="Upload from Computer"
                                                                              width="32">
                                                                           <input type="file" class="report_screenshot"
                                                                              id="upload_from_computer1"
                                                                              name="upload_computer" />
                                                                           <label for="upload_computer">Upload from
                                                                              Computer</label>
                                                                        </li>
                                                                        <li
                                                                           class="hover-grey d-flex align-items-center">
                                                                           <img src="assets/image/album.svg"
                                                                              class="mr-2" alt="Upload from Album"
                                                                              width="32">
                                                                           <input type="file" class="report_screenshot"
                                                                              id="upload_from_ablumn1"
                                                                              name="upload_album" />
                                                                           <label for="upload_album">Upload from
                                                                              Album</label>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="tab-content pt-4">
                                                         <div class="tab-pane active" id="new">
                                                            <div class="row mb-5">
                                                               <div class="col-md-12 counter-reset-zero pdg-right">
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="border-top bg-white text-center py-4  fixed-bottom">
                                             <div
                                                class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                <div>
                                                   <button type="button"
                                                      class="second-slide-btn-click bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                </div>
                                                <div class="clearfix d-inline-block">
                                                   <div class="row">
                                                      <div
                                                         class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                         <button type="button" name="button"
                                                            class="bttn btn-default cancel  ml-3" value="Cancel"
                                                            data-toggle="modal" data-target="#forcancle">Cancel</button>
                                                         <button type="submit"
                                                            class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                            draft</button>
                                                         <button type="button"
                                                            class="bttn bttn-primary ml-3 next-step">Next</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END SECOND MODULE--------->
                                 <!---------START THIRD MODULE--------->
                                 <div class="tab-pane" role="tabpanel" id="prodprice">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div class="menuhover align-self-start tooltip position-relative"
                                                href="#bubbleslider" data-slide="next">
                                                <img src="assets/image/roundback.svg" width="35"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="assets/image/roundback.svg" width="35"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 desktop-view pt-2">Product Detail
                                                Page Digital<span class="line-height1.5 font-14 d-block">Please fill in
                                                   the informations they are required to sell your products on
                                                   StayToEnjoy</span>
                                             </div>
                                          </div>
                                          <div class="position-relative bg-white shop-wrap round-10 shop-wrap pt-0 ">
                                             <div class="head px-4 pt-3 pb-1">
                                                <span class="d-flex-center font-24 text-dark">
                                                   Product Detail Informations
                                                </span>
                                             </div>
                                             <div class="py-5 px-4 form-font">
                                                <div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
                                                   <div class="row mb-4">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class="form-group font-16 tooltip position-relative">
                                                            Article Name&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">Type
                                                               Name</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group mb-4 mt-0">
                                                            <input type="text" class="form-control default-placeholder"
                                                               value="" placeholder="Type Name" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="position-relative grey-panel-dark px-4 pt-5 pb-4 mb-5">
                                                   <div class="row mb-4">
                                                      <div
                                                         class="col-md-3 align-self-center font-16 font-blue tooltip position-relative">
                                                         <label class="tooltip position-relative">
                                                            Product Tax Rate&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-3">
                                                         <div class="input-group w-100">
                                                            <input type="text" class="form-control mt-0"
                                                               placeholder="20">
                                                            <span class="cmtxt font-weight-500 font-18"
                                                               id="dimension1">%</span>
                                                         </div>
                                                      </div>
                                                   </div>

                                                   <div class="row mb-3">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class=" tooltip position-relative">
                                                            Gender&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-9">
                                                         <div class="row">
                                                            <div class="col-md-4">
                                                               <div class="">
                                                                  <form>
                                                                     <div
                                                                        class="our-custom-select w-100 custom-select-sale">
                                                                        <div class="selected-value">
                                                                           <div
                                                                              class="sel-value font-16 font-blue overflow-hidden"
                                                                              style="white-space:nowrap">Choose</div>
                                                                           <input type="text" name="" readonly
                                                                              value="All" disabled id="mainCategory" />
                                                                        </div>
                                                                        <ul class="options scroll-dropdown px-4 scroll-design scrollbox set-drpdn-big"
                                                                           style="height:132PX;">
                                                                           <li>Men</li>
                                                                           <li>Women</li>
                                                                           <li>Unisex</li>
                                                                        </ul>
                                                                     </div>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--Add New Field-->
                                                <div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
                                                   <div class="row mb-2">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class="form-group tooltip position-relative">
                                                            Manufacturer&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-3">
                                                         <div class="form-group">
                                                            <input type="text"
                                                               class="form-control product-sku bg-secondary default-placeholder"
                                                               value="" placeholder="Adidas, Levis e.g.">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                         <div class="form-group">
                                                            <input type="text"
                                                               class="form-control product-sku bg-secondary default-placeholder"
                                                               value="" placeholder="Manufacturer Number">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!--End New Field-->
                                                   <!--Add New Field-->
                                                   <div class="row mb-2">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class="form-group tooltip position-relative">
                                                            Brandname&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <input type="text"
                                                               class="form-control product-sku bg-secondary default-placeholder"
                                                               value="" placeholder="Apple, Sony e.g.">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!--End New Field-->

                                                   <div class="row mb-4">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class="form-group tooltip position-relative">
                                                            Product SKU&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-4">
                                                         <div class="form-group">
                                                            <input type="text"
                                                               class="form-control product-sku bg-secondary default-placeholder"
                                                               value="" placeholder="STAYIN9069796573" />
                                                         </div>
                                                      </div>
                                                      <label
                                                         class="form-group col-md-1 text-right align-self-center font-16 font-blue"
                                                         data-original-title="lorem ipsum"
                                                         aria-describedby="tooltip459260">
                                                         Barcode:&nbsp;&nbsp;
                                                      </label>
                                                      <div class="col-md-4">
                                                         <div class="form-group">
                                                            <input type="text" class="form-control default-placeholder"
                                                               placeholder="Barcode, UPC, ISBN, GTIN" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
                                                   <div class="row mb-4">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class=" tooltip position-relative">
                                                            Short Description&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                         <p class="font-12 line-height-20 font-blue">Please write short
                                                            keywords here that describe your product.</p>
                                                      </div>
                                                      <div class="col-md-9">
                                                         <div class="form-group pt-4">
                                                            <div class="row m-0">
                                                               <div class="col-12">
                                                                  <div class="form-group">
                                                                     <textarea
                                                                        class="form-control default-placeholder font-16 font-weight-normal"
                                                                        placeholder="Type here...."
                                                                        spellcheck="false"></textarea>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">1</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>

                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">2</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">3</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">4</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">5</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">6</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>

                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">7</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">8</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">9</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                                  <div class="d-flex align-items-center">
                                                                     <span class="font-16 w-15">10</span>
                                                                     <input type="text" name="short-description[0]"
                                                                        class="form-control default-placeholder mb-3 font-blue ml-4"
                                                                        placeholder="Type Name" />
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
                                                   <div class="row mb-4">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class=" tooltip position-relative">
                                                            Product Description&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-9">
                                                         <div class="form-group bg-white">
                                                            <!--<textarea class="form-control default-placeholder"
																					placeholder="Type here a full description about your product"></textarea>-->
                                                            <div id="snow-editor" style="height: 300px;"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
                                                   <!--End New Attribute-->
                                                   <div class="row mb-4">
                                                      <div class="col-md-3 align-self-center font-16 font-blue">
                                                         <label class=" tooltip position-relative">
                                                            Tags&nbsp;&nbsp;<i
                                                               class="fa fa-info-circle text-dark font-16"></i>
                                                            <span class="tooltiptext custom p-2 px-3 font-11">lorem
                                                               ipsum</span>
                                                         </label>
                                                      </div>
                                                      <div class="col-md-9">
                                                         <div class="form-group mb-0 ">
                                                            <ul
                                                               class="tags bg-white rounded py-3 px-4 d-flex align-items-center">
                                                               <li
                                                                  class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">
                                                                  Ecommerce
                                                                  <span
                                                                     onclick="$(this).parent().remove();">x</span><input
                                                                     type="hidden" name="tags[]" value="Web Deisgn">
                                                               </li>
                                                               <li
                                                                  class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">
                                                                  Computer
                                                                  <span
                                                                     onclick="$(this).parent().remove();">x</span><input
                                                                     type="hidden" name="tags[]" value="Web Deisgn">
                                                               </li>
                                                               <li
                                                                  class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">
                                                                  Smartphones
                                                                  <span
                                                                     onclick="$(this).parent().remove();">x</span><input
                                                                     type="hidden" name="tags[]" value="Web Deisgn">
                                                               </li>
                                                               <li
                                                                  class="tagAdd taglist radius-5 text-dark d-inline-block my-1">
                                                                  <input type="text" id="search-field"
                                                                     placeholder="Enter your own here"
                                                                     class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                                                     style="height: 30px;">
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="border-top bg-white text-center py-4  fixed-bottom">
                                                <div
                                                   class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                   <div>
                                                      <button type="button" id="second-slide-btn"
                                                         class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                   </div>
                                                   <div class="clearfix d-inline-block">
                                                      <div class="row">
                                                         <div
                                                            class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                            <button type="button" name="button"
                                                               class="bttn btn-default cancel  ml-3" value="Cancel"
                                                               data-toggle="modal"
                                                               data-target="#forcancle">Cancel</button>
                                                            <button type="submit"
                                                               class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                               draft</button>
                                                            <button type="button"
                                                               class="bttn bttn-primary ml-3 next-step">Next</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END THIRD MODULE--------->
                                 <!---------START FOURTH MODULE--------->
                                 <div class="tab-pane" role="tabpanel" id="sizevariants">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div class="menuhover align-self-start tooltip position-relative"
                                                href="#bubbleslider" data-slide="next">
                                                <img src="assets/image/roundback.svg"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="assets/image/roundback.svg"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 pt-2">Additional Features
                                                <span class="line-height1.5 font-14 d-block">Please add specifications
                                                   to your Product. This can be - Brand, Color, Dimensoin, Weight e.g.
                                                   <a id="learn-more-specification" class="light-blue cursor-pointer"
                                                      uk-toggle="target: #learn-more-popup"> Learn more </a> </span>
                                             </div>
                                          </div>
                                          <div class="position-relative py-4 bg-white round-10 shop-wrap">
                                             <div class="specification-wrapper p-5">
                                                <div class="text-dark font-24">
                                                   Specifications
                                                </div>
                                                <div class="product-specification">
                                                   <div class="table-responsive my-5">
                                                      <table
                                                         class="table table-bordered ps-table ps-table--specification">
                                                         <tbody>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="odd">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                            <tr class="even">
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add Specification"
                                                                     style="height: 23px;color:#000"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
                                                               </td>
                                                               <td>
                                                                  <input type="text" name="specification"
                                                                     placeholder="Add" style="height: 23px;"
                                                                     class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="border-top bg-white text-center py-4  fixed-bottom">
                                                <div
                                                   class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                   <div>
                                                      <button type="button"
                                                         class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                   </div>
                                                   <div class="clearfix d-inline-block">
                                                      <div class="row">
                                                         <div
                                                            class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                            <button type="button" name="button"
                                                               class="bttn btn-default cancel  ml-3" value="Cancel"
                                                               data-toggle="modal"
                                                               data-target="#forcancle">Cancel</button>
                                                            <button type="submit"
                                                               class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                               draft</button>
                                                            <button type="button"
                                                               class="show-new-right-offer bttn bttn-primary ml-3 next-step">Next</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END FOURTH MODULE--------->
                                 <!---------START FIFTH MODULE--------->
                                 <div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="itemvariants">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="position-relative">
                                             <div class="d-flex align-items-start pt-3 mb-4">
                                                <div class="menuhover align-self-start tooltip position-relative"
                                                   href="#bubbleslider" data-slide="next">
                                                   <img src="assets/image/roundback.svg" width="35"
                                                      class="imgnone left_arrow prev-step" />
                                                   <img src="assets/image/roundback.svg" width="35"
                                                      class="left_arrow prev-step imgblock" />
                                                   <span class="tooltiptext right font-12">Back to Dashboard</span>
                                                </div>
                                                <div class="px-4 font-26 font-weight-500 desktop-view pt-2">Manage
                                                   digital product prices & variants
                                                   <span class="line-height1.5 font-14 d-block">Please fill in the
                                                      informations they are required to sell your products on
                                                      StayToEnjoy </span>
                                                </div>
                                             </div>

                                             <div
                                                class="ps-section--shopping w-100 d-inline-block p-4 ps-invoice-details">
                                                <div class="w-100">
                                                   <div class="row ">
                                                      <div class="col-12 col-md-6">
                                                         <div class="card border-0 shadow w-100 h-100">
                                                            <div class="card-body p-0">
                                                               <div class="d-flex align-items-center">
                                                                  <div class="background-grey p-3"><img
                                                                        src="img/image.svg" alt=""
                                                                        style="width: 67px;" /></div>
                                                                  <div class="col-6">
                                                                     <p class="font-16 ml-4">Digital File</p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                         <div class="card border-0 shadow w-100">
                                                            <div class="card-body p-0">
                                                               <div class="d-flex align-items-center">
                                                                  <div class="background-grey p-3 mr-4"><img
                                                                        src="img/target-audience-3.svg" alt=""
                                                                        style="width: 67px;" /></div>
                                                                  <div class="target-wrap">
                                                                     <a href="javascript:void(0);"
                                                                        class="font-16 font-weight-400 blue-text text-muted active"
                                                                        data-toggle="modal"
                                                                        data-target="#category-modal">Select Target
                                                                        Group</a>
                                                                     <ul
                                                                        class="tags bg-white rounded mb-0 px-0 d-flex align-items-center">
                                                                        <li
                                                                           class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-1 mt-2 d-inline-block mr-3 position-relative">
                                                                           Men
                                                                           <span class="close-icon"></span>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="d-block">
                                                <div class="d-flex align-items-start pt-5 mb-4 pl-3">
                                                   <div class="px-4 font-26 font-weight-500 desktop-view pt-2">Digital
                                                      File and Variants
                                                      <span class="line-height1.5 font-14 d-block">Add your pricing
                                                         options related variants</span>
                                                   </div>
                                                </div>
                                                <div
                                                   class="ps-section--shopping w-100 d-inline-block pl-4 pr-4 py-0 ps-invoice-details">
                                                   <div class="w-100">
                                                      <div class="row ">
                                                         <div class="col-12">
                                                            <div class="form-group mb-0 ">
                                                               <div class="ex-tags-input">
                                                                  <input type="text" id="variantWant"
                                                                     value="Video 90 MIns, Directors Cut"
                                                                     class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                                                     placeholder="+Add file description"
                                                                     data-role="tagsinput" />
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="p-4 mt-4">
                                                <div class="row">
                                                   <div class="col-md-6 col-lg-6 col-12">
                                                      <div class="form-group mb-0 ">
                                                         <label for="" class="font-16 font-blue">Predefine which
                                                            variants you want</label>
                                                         <div class="ex-tags-input">
                                                            <input type="text" id="variantWant" value=""
                                                               class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                                               placeholder="Add +" data-role="tagsinput" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6 col-lg-6 col-12">
                                                      <div class="form-group mb-0 ">
                                                         <label for="" class="font-16 font-blue">Predefine your
                                                            subvariants</label>
                                                         <div class="ex-tags-input">
                                                            <input type="text" id="variantWant" value="Ecommerce"
                                                               class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                                               placeholder="Add +" data-role="tagsinput" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="p-4">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div class="form-group mb-0 ">
                                                         <label for="" class="font-16 font-blue">Color</label>
                                                         <div class="ex-tags-input">
                                                            <input type="text" id="variantWant" value="Digital"
                                                               class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                                               placeholder="Please specify which variant values you want create"
                                                               data-role="tagsinput" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="p-4">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div class="form-group mb-0 ">
                                                         <label for="" class="font-16 font-blue">Size</label>
                                                         <div class="ex-tags-input">
                                                            <input type="text" id="variantWant" value="Digital"
                                                               class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                                               placeholder="Please specify which sub variant values you want create"
                                                               data-role="tagsinput" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="d-block">
                                                <div class="d-flex align-items-start pt-5 mb-4 pl-3">
                                                   <div class="px-4 font-26 font-weight-500 desktop-view pt-2">Item
                                                      Variants and prices
                                                      <span class="line-height1.5 font-14 d-block">Add your pricing
                                                         options related variants</span>
                                                   </div>
                                                </div>
                                                <div
                                                   class="ps-section--shopping w-100 d-inline-block p-4 ps-invoice-details">
                                                   <div class="w-100">
                                                      <div class="row ">
                                                         <div class="col-12 mb-5">
                                                            <div class="card border-0 shadow w-100 index-wrap"
                                                               style="overflow:unset">
                                                               <div class="index">1</div>
                                                               <div class=" tooltip position-relative">

                                                                  <button class="no-hover"><span
                                                                        class="tooltiptext custom p-2 px-3 font-14"
                                                                        style="width: 120px; top: -150%; right: -5%;">Delete
                                                                        Product</span></button>
                                                               </div>

                                                               <div class="card-body px-5 py-4">
                                                                  <div class="form-body">
                                                                     <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                           <h3 class="font-24 mt-3 mb-4">Video 90
                                                                              Minutes</h3>
                                                                        </div>
                                                                     </div>
                                                                     <form action="/action_page.php">
                                                                        <div class="pricing-option-wrapper pr-2">
                                                                           <div
                                                                              class="d-flex pcol-flex mt-2 mb-2 align-self-center">
                                                                              <div class="col-lg-2 pr-1 pl-1">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Price
                                                                                    (gross) &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <div class="input-group">
                                                                                    <input type="text"
                                                                                       class="form-control border-right-0"
                                                                                       id="inlineFormInputGroupUsername2"
                                                                                       placeholder="0,00">
                                                                                    <div class="input-group-prepend">
                                                                                       <div class="input-group-text">€
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="col pr-1 pl-1">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Product
                                                                                    SKU &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <input type="text"
                                                                                    class="form-control border-dark"
                                                                                    name="stock"
                                                                                    placeholder="STAYIN1234567888">
                                                                              </div>
                                                                              <div class="col pr-1 pl-1">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Barcode,
                                                                                    EAN, ISBN &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <input type="text"
                                                                                    class="form-control border-dark"
                                                                                    name="stock"
                                                                                    placeholder="Type Number">
                                                                              </div>
                                                                              <div class="col-lg-2 pl-0 pr-0">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Downloads&nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <input type="text"
                                                                                    class="form-control border-dark"
                                                                                    name="stock"
                                                                                    placeholder="Enter number">
                                                                              </div>
                                                                              <div class="col-lg-2 pl-0">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Tax
                                                                                    Rate &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <div class="input-group">
                                                                                    <input type="text"
                                                                                       class="form-control border-right-0"
                                                                                       id="inlineFormInputGroupUsername2"
                                                                                       placeholder="0,00">
                                                                                    <div class="input-group-prepend">
                                                                                       <div class="input-group-text">%
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </form>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>

                                                         <div class="col-12 mb-5">
                                                            <div class="card border-0 shadow w-100 index-wrap"
                                                               style="overflow:unset">
                                                               <div class="index">2</div>
                                                               <div class=" tooltip position-relative">

                                                                  <button class="no-hover"><span
                                                                        class="tooltiptext custom p-2 px-3 font-14"
                                                                        style="width: 120px; top: -150%; right: -5%;">Delete
                                                                        Product</span></button>
                                                               </div>
                                                               <div class="card-body px-5 py-4">
                                                                  <div class="form-body">
                                                                     <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                           <h3 class="font-24 mt-3 mb-4">Directors Cut
                                                                           </h3>
                                                                        </div>
                                                                     </div>
                                                                     <form action="/action_page.php">
                                                                        <div class="pricing-option-wrapper pr-2">
                                                                           <div
                                                                              class="d-flex pcol-flex mt-2 mb-2 align-self-center">
                                                                              <div class="col-lg-2 pr-1 pl-1">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Price
                                                                                    (gross) &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <div class="input-group">
                                                                                    <input type="text"
                                                                                       class="form-control border-right-0"
                                                                                       id="inlineFormInputGroupUsername2"
                                                                                       placeholder="0,00">
                                                                                    <div class="input-group-prepend">
                                                                                       <div class="input-group-text">€
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="col pr-1 pl-1">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Product
                                                                                    SKU &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <input type="text"
                                                                                    class="form-control border-dark"
                                                                                    name="stock"
                                                                                    placeholder="STAYIN1234567888">
                                                                              </div>
                                                                              <div class="col pr-1 pl-1">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Barcode,
                                                                                    EAN, ISBN &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <input type="text"
                                                                                    class="form-control border-dark"
                                                                                    name="stock"
                                                                                    placeholder="Type Number">
                                                                              </div>
                                                                              <div class="col-lg-2 pl-0 pr-0">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Downloads&nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <input type="text"
                                                                                    class="form-control border-dark"
                                                                                    name="stock"
                                                                                    placeholder="Enter number">
                                                                              </div>
                                                                              <div class="col-lg-2 pl-0">
                                                                                 <label
                                                                                    class="field-title font-14 tooltip position-relative">Tax
                                                                                    Rate &nbsp;&nbsp;<i
                                                                                       class="fa fa-info-circle text-dark font-16"></i><span
                                                                                       class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                                       ipsum</span></label>
                                                                                 <div class="input-group">
                                                                                    <input type="text"
                                                                                       class="form-control border-right-0"
                                                                                       id="inlineFormInputGroupUsername2"
                                                                                       placeholder="0,00">
                                                                                    <div class="input-group-prepend">
                                                                                       <div class="input-group-text">%
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </form>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="border-top bg-white text-center py-4  fixed-bottom">
                                                <div
                                                   class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                   <div>
                                                      <button type="button"
                                                         class="hide-new-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                   </div>
                                                   <div class="clearfix d-inline-block">
                                                      <div class="row">
                                                         <div
                                                            class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                            <button type="button" name="button"
                                                               class="bttn btn-default cancel  ml-3" value="Cancel"
                                                               data-toggle="modal"
                                                               data-target="#forcancle">Cancel</button>
                                                            <button type="submit"
                                                               class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                               draft</button>
                                                            <button type="button"
                                                               class="hide-new-right-offer bttn bttn-primary ml-3 next-step">Next</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END FIFTH MODULE--------->
                                 <!---------START SIXTH MODULE--------->
                                 <div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="photosvideo">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div
                                                class="image-back-old-right-offer menuhover align-self-start tooltip position-relative">
                                                <img src="assets/image/roundback.svg" width="35"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="assets/image/roundback.svg" width="35"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 desktop-view pt-2">Add
                                                Pictures<span class="line-height1.5 font-14 d-block">Please fill in the
                                                   informations they are required to sell your products on StayToEnjoy
                                                </span>
                                             </div>
                                          </div>
                                          <div class="bg-white round-10 shop-wrap py-3 mb-5 ml-4">
                                             <div class="position-relative px-5 py-3 pricing-option-wrapper bg-white">
                                                <div class="index">1</div>
                                                <div class="image-upload-area">
                                                   <div class="d-flex mobile-flex-column">
                                                      <div class="w-100">
                                                         <div class="border-box left-rounded-0 border-0">
                                                            <div class="row">
                                                               <div class="col-12">
                                                                  <h4 class="font-18">Men T-Shirt</h4>
                                                                  <div class="d-flex color-icon align-items-center">
                                                                     <img src="img/chromatic.svg" class="mr-3" alt="" />
                                                                     <p class="font-16">White</p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                               <div class="col-12 col-lg-2 pr-0">
                                                                  <div id="product" class="carousel list-carousel"
                                                                     data-ride="carousel" data-interval="false">
                                                                     <div class="carousel-inner">
                                                                        <div class="carousel-item active default-img"
                                                                           href="assets/img/demo_backgorun.png">
                                                                           <img src="assets/img/demo_backgorun.png">
                                                                        </div>
                                                                     </div>
                                                                     <div class="gallery-picture">Gallery Picture</div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-lg-10">
                                                                  <div
                                                                     class="img-gallery-wrapper img-gallery-new-ui pt-0 pr-0 pl-0">
                                                                     <div data-simplebar>
                                                                        <ul id="upload_your_picture"
                                                                           class="cursor-pointer">
                                                                           <li class="upload_image_div">
                                                                              <div class="img-box"><img
                                                                                    src="img/add-image.svg" /></div>
                                                                              <div class="dropbtn">
                                                                                 <label class="dropdown">
                                                                                    <div class="dd-button">
                                                                                    </div>
                                                                                    <input type="checkbox"
                                                                                       class="dd-input d-none">
                                                                                    <ul class="photo-dropdown dd-menu">
                                                                                       <li
                                                                                          class="m-0 w-100 uploadImageTrigger hover-grey">
                                                                                          <img
                                                                                             src="assets/image/monitor.svg"
                                                                                             class="mr-3 w-auto"
                                                                                             alt="Upload from Computer"
                                                                                             width="32"> Upload from
                                                                                          Computer
                                                                                       </li>
                                                                                       <li class="m-0 w-100 hover-grey">
                                                                                          <img
                                                                                             src="assets/image/album.svg"
                                                                                             class="mr-3 w-auto"
                                                                                             alt="Upload from Album"
                                                                                             width="32"> Upload from
                                                                                          Album
                                                                                       </li>
                                                                                    </ul>
                                                                                 </label>
                                                                              </div>
                                                                              <input type="file" id="uploadPictureInput"
                                                                                 name="upload_your_picture[]"
                                                                                 multiple="true" class="d-none">
                                                                           </li>
                                                                        </ul>
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

                                          <div class="bg-white round-10 shop-wrap py-3 ml-4">
                                             <div class="position-relative px-5 py-3 pricing-option-wrapper bg-white">
                                                <div class="index">2</div>
                                                <div class="image-upload-area">
                                                   <div class="d-flex mobile-flex-column">
                                                      <div class="w-100 mr-4">
                                                         <div class="border-box left-rounded-0 border-0">
                                                            <div class="row">
                                                               <div class="col-12">
                                                                  <h4 class="font-18">Men T-Shirt</h4>
                                                                  <div class="d-flex color-icon align-items-center">
                                                                     <img src="img/chromatic.svg" class="mr-3" alt="" />
                                                                     <p class="font-16">Black</p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                               <div class="col-12 col-lg-2 pr-0">
                                                                  <div id="product" class="carousel list-carousel"
                                                                     data-ride="carousel" data-interval="false">
                                                                     <div class="carousel-inner">
                                                                        <div class="carousel-item active default-img"
                                                                           href="assets/img/demo_backgorun.png">
                                                                           <img src="assets/img/demo_backgorun.png">
                                                                        </div>
                                                                     </div>
                                                                     <div class="gallery-picture">Gallery Picture</div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-12 col-lg-9">
                                                                  <div
                                                                     class="img-gallery-wrapper img-gallery-new-ui pt-0 pl-0">
                                                                     <div data-simplebar>
                                                                        <ul id="upload_your_picture"
                                                                           class="cursor-pointer">
                                                                           <li class="upload_image_div">
                                                                              <div class="img-box"><img
                                                                                    src="img/add-image.svg" /></div>
                                                                              <div class="dropbtn">
                                                                                 <label class="dropdown">
                                                                                    <div class="dd-button">
                                                                                    </div>
                                                                                    <input type="checkbox"
                                                                                       class="dd-input d-none">
                                                                                    <ul class="photo-dropdown dd-menu">
                                                                                       <li
                                                                                          class="m-0 w-100 uploadImageTrigger hover-grey">
                                                                                          <img
                                                                                             src="assets/image/monitor.svg"
                                                                                             class="mr-3 w-auto"
                                                                                             alt="Upload from Computer"
                                                                                             width="32"> Upload from
                                                                                          Computer
                                                                                       </li>
                                                                                       <li class="m-0 w-100 hover-grey">
                                                                                          <img
                                                                                             src="assets/image/album.svg"
                                                                                             class="mr-3 w-auto"
                                                                                             alt="Upload from Album"
                                                                                             width="32"> Upload from
                                                                                          Album
                                                                                       </li>
                                                                                    </ul>
                                                                                 </label>
                                                                              </div>
                                                                              <input type="file" id="uploadPictureInput"
                                                                                 name="upload_your_picture[]"
                                                                                 multiple="true" class="d-none">
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="border-top bg-white text-center py-4  fixed-bottom">
                                                <div
                                                   class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                   <div>
                                                      <button type="button"
                                                         class="image-back-old-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                   </div>
                                                   <div class="clearfix d-inline-block">
                                                      <div class="row">
                                                         <div
                                                            class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                            <button type="button" name="button"
                                                               class="bttn btn-default cancel  ml-3" value="Cancel"
                                                               data-toggle="modal"
                                                               data-target="#forcancle">Cancel</button>
                                                            <button type="submit"
                                                               class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                               draft</button>
                                                            <button type="button"
                                                               class="image-back-old-right-offer bttn bttn-primary ml-3 next-step">Next</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END SIXTH MODULE--------->
                                 <!---------START SEVENTH MODULE--------->
                                 <div class="tab-pane round-10 shadow-none shop-wrap" role="tabpanel" id="manageOrder">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div
                                                class="image-new-right-offer menuhover align-self-start tooltip position-relative">
                                                <img src="assets/image/roundback.svg"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="assets/image/roundback.svg"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 pt-2">Add Video
                                                <span class="line-height1.5 font-14 d-block">Please fill in the
                                                   informations they are required to sell your products on StayToEnjoy
                                                </span>
                                             </div>
                                          </div>
                                          <div class="position-relative bg-white round-10 shop-wrap">
                                             <div class="form-font">
                                                <div class="round-10 d-flex overflow-hidden for-mobile-wrap"
                                                   style="text-align: center; margin: 0 auto;">
                                                   <div class="video-section lightBlue-bg py-3 w-25">
                                                      <div class="row mt-4">
                                                         <div class="col-12">
                                                            <h4 class="font-18">Men T-Shirt</h4>
                                                         </div>
                                                      </div>
                                                      <div
                                                         class="img-gallery-wrapper img-gallery-new-ui pt-0 pr-0 pl-0">
                                                         <div>
                                                            <ul id="upload_your_picture"
                                                               class="cursor-pointer justify-content-center">
                                                               <li class="upload_image_div w-75 p-4">
                                                                  <div class="img-box pt-0">
                                                                     <img class="position-relative border-0"
                                                                        src="img/Video-Icon.svg"
                                                                        style="width: 120px;" />

                                                                     <p class="pt-4 uploadtxt blue-text font-16">+
                                                                        Upload Video</p>
                                                                  </div>
                                                                  <div class="dropbtn"
                                                                     style="right: auto; top: 30px; left: -20px;">
                                                                     <label class="dropdown">
                                                                        <div class="dd-button">
                                                                        </div>
                                                                        <input type="checkbox" class="dd-input d-none">
                                                                        <ul
                                                                           class="photo-dropdown dd-menu justify-content-start">
                                                                           <li
                                                                              class="m-0 w-100 uploadImageTrigger hover-grey justify-content-start align-items-center d-flex">
                                                                              <img src="assets/image/monitor.svg"
                                                                                 class="mr-3" alt="Upload from Computer"
                                                                                 width="32"> Upload from Computer
                                                                           </li>
                                                                           <li
                                                                              class="m-0 w-100 hover-grey justify-content-start align-items-center d-flex">
                                                                              <img src="assets/image/album.svg"
                                                                                 class="mr-3" alt="Upload from Album"
                                                                                 width="32"> Upload from Album
                                                                           </li>
                                                                        </ul>
                                                                     </label>
                                                                  </div>
                                                                  <input type="file" id="uploadPictureInput"
                                                                     name="upload_your_picture[]" multiple="true"
                                                                     class="d-none">
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="video-wrap my-5 w-75 text-center">
                                                      <div style="max-width: 550px; margin: 0px auto;">
                                                         <video width="100%" height="300" controls class="round-15">
                                                            <!--<source src="https://kafcreations.com/ste-shop/assets/media/" type="video/mp4">-->
                                                         </video>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="border-top bg-white text-center py-4  fixed-bottom">
                                                <div
                                                   class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                   <div>
                                                      <button type="button"
                                                         class="image-new-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                   </div>
                                                   <div class="clearfix d-inline-block">
                                                      <div class="row">
                                                         <div
                                                            class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                            <button type="button" name="button"
                                                               class="bttn btn-default cancel  ml-3" value="Cancel"
                                                               data-toggle="modal"
                                                               data-target="#forcancle">Cancel</button>
                                                            <button type="submit"
                                                               class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                               draft</button>
                                                            <button type="button"
                                                               class="bttn bttn-primary ml-3 next-step">Next</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END SEVENTH MODULE--------->
                                 <!---------START EIGHT MODULE--------->
                                 <div class="tab-pane round-10 shadow-none shop-wrap" role="tabpanel" id="uploadvideo">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div class="menuhover align-self-start tooltip position-relative"
                                                href="#bubbleslider" data-slide="next">
                                                <img src="assets/image/roundback.svg"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="assets/image/roundback.svg"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 pt-2">Arrange the varient Order
                                                how it should be displayed on Frontend
                                                <span class="line-height1.5 font-14 d-block">Please fill in the
                                                   informations they are required to sell your products on StayToEnjoy
                                                </span>
                                             </div>
                                          </div>
                                          <ul class="connected-sortable droppable-area1 m-0">
                                             <li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between"
                                                style="cursor: grab;">
                                                <div class="info d-flex align-items-center">
                                                   <div class="background-grey p-3"><img src="img/image.svg" alt=""
                                                         style="width: 67px;"></div>
                                                   <span class="font-16 ml-5">Men T-shirt white small</span>
                                                </div>
                                                <img src="assets/img/dots_grid.png" class="mr-4" width="25" />
                                             </li>
                                             <li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between"
                                                style="cursor: grab;">
                                                <div class="info d-flex align-items-center">
                                                   <div class="background-grey p-3"><img src="img/image.svg" alt=""
                                                         style="width: 67px;"></div>
                                                   <span class="font-16 ml-5">Men T-shirt white medium</span>
                                                </div>
                                                <img src="assets/img/dots_grid.png" class="mr-4" width="25" />
                                             </li>
                                             <li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between"
                                                style="cursor: grab;">
                                                <div class="info d-flex align-items-center">
                                                   <div class="background-grey p-3"><img src="img/image.svg" alt=""
                                                         style="width: 67px;"></div>
                                                   <span class="font-16 ml-5">Men T-shirt black medium</span>
                                                </div>
                                                <img src="assets/img/dots_grid.png" class="mr-4" width="25" />
                                             </li>
                                             <li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between"
                                                style="cursor: grab;">
                                                <div class="info d-flex align-items-center">
                                                   <div class="background-grey p-3"><img src="img/image.svg" alt=""
                                                         style="width: 67px;"></div>
                                                   <span class="font-16 ml-5">Men T-shirt white large</span>
                                                </div>
                                                <img src="assets/img/dots_grid.png" class="mr-4" width="25" />
                                             </li>
                                          </ul>
                                          <div class="border-top bg-white text-center py-4  fixed-bottom">
                                             <div
                                                class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                <div>
                                                   <button type="button"
                                                      class="show-new-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                </div>
                                                <div class="clearfix d-inline-block">
                                                   <div class="row">
                                                      <div
                                                         class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                         <button type="button" name="button"
                                                            class="bttn btn-default cancel  ml-3" value="Cancel"
                                                            data-toggle="modal" data-target="#forcancle">Cancel</button>
                                                         <button type="submit"
                                                            class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                            draft</button>
                                                         <button type="button"
                                                            class="bttn bttn-primary ml-3 next-step image-new-right-offer">Next</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END EIGHT MODULE--------->
                                 <!---------START NINE MODULE--------->
                                 <div class="tab-pane" role="tabpanel" id="shipping">
                                    <div class="d-flex">
                                       <div class="lefttab-part">
                                          <div class="d-flex align-items-start pt-3 mb-4">
                                             <div class="menuhover align-self-start tooltip position-relative"
                                                href="#bubbleslider" data-slide="next">
                                                <img src="assets/image/roundback.svg" width="35"
                                                   class="imgnone left_arrow prev-step" />
                                                <img src="assets/image/roundback.svg" width="35"
                                                   class="left_arrow prev-step imgblock" />
                                                <span class="tooltiptext right font-12">Back to Dashboard</span>
                                             </div>
                                             <div class="px-4 font-26 font-weight-500 desktop-view pt-2">
                                                Calculation<span class="line-height1.5 font-14 d-block">
                                                   Check your calculation</span>
                                             </div>
                                          </div>
                                          <div class="position-relative bg-white round-10 py-3 shop-wrap">
                                             <div class="p-5">
                                                <div class="row">
                                                   <div class="col-md-12 round-10">
                                                      <table class="table calcu-table font-14">
                                                         <tbody>
                                                            <tr>
                                                               <th class=" tooltip position-relative"
                                                                  style="border: 0;background-color: #F0F2F5;padding: 15px 25px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);">
                                                                  Sales Price &nbsp;&nbsp;&nbsp;<i
                                                                     class="fa fa-info-circle text-dark font-16"></i>
                                                                  <span
                                                                     class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                     ipsum</span>
                                                               </th>
                                                               <th style="border: 0;background-color: #F0F2F5;padding: 15px 40px 15px 15px !important; text-align: right; border-bottom: 1px solid rgba(5, 34, 76, 0.15);"
                                                                  align="right">
                                                                  $ 530.00
                                                               </th>
                                                            </tr>
                                                            <tr>
                                                               <td class=" tooltip position-relative"
                                                                  style="border: 0;background-color: #F0F2F5;padding: 15px 25px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);">
                                                                  Sales fee &nbsp;&nbsp;&nbsp;<i
                                                                     class="fa fa-info-circle text-dark font-16"></i>
                                                                  <span
                                                                     class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                     ipsum</span>
                                                               </td>
                                                               <td style="border: 0;background-color: #F0F2F5;padding: 15px 40px 15px 15px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);"
                                                                  align="right">
                                                                  $ 30.00
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td class=" tooltip position-relative"
                                                                  style="border: 0;background-color: #F0F2F5;padding: 15px 25px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);">
                                                                  Bank Transfer Costs &nbsp;&nbsp;&nbsp;<i
                                                                     class="fa fa-info-circle text-dark font-16"></i>
                                                                  <span
                                                                     class="tooltiptext custom p-2 px-3 font-11">lorem
                                                                     ipsum</span>
                                                               </td>
                                                               <td style="border: 0;background-color: #F0F2F5;padding: 15px 40px 15px 15px  !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);"
                                                                  align="right">
                                                                  $ 37.10
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                         <tfoot>
                                                            <tr>
                                                               <td
                                                                  style="background-color: #05224C; color: #fff; padding: 15px 20px !important;">
                                                                  The
                                                                  The total amount credtited by sale to your account
                                                               </td>
                                                               <td style="background-color: #05224C; color: #fff; padding: 15px 40px 15px 20px !important;font-size: 20px;font-weight: 600;"
                                                                  align="right">$ 492,90</td>
                                                            </tr>
                                                         </tfoot>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <h4 class="btm-heading mb-0">By click on List your Product you accept the
                                                <a href="">Terms & Conditions</a> from StayToEnjoy. <a href="">Visit the
                                                   business Center</a>
                                             </h4>
                                             <div class="border-top bg-white text-center py-4  fixed-bottom">
                                                <div
                                                   class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
                                                   <div>
                                                      <button type="button"
                                                         class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
                                                   </div>
                                                   <div class="clearfix d-inline-block">
                                                      <div class="row">
                                                         <div
                                                            class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                                                            <button type="button" name="button"
                                                               class="bttn btn-default cancel  ml-3" value="Cancel"
                                                               data-toggle="modal"
                                                               data-target="#forcancle">Cancel</button>
                                                            <button type="submit"
                                                               class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                                                               draft</button>
                                                            <button type="button"
                                                               class="bttn bttn-primary ml-3 next-step">Next</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- right side summury box -->
                                       <div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
                                          <div class="mobile-details text-left">
                                             <div class="pt-5 pl-5 pb-5 pr-2">
                                                <div>
                                                   <h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images
                                                   </h4>
                                                </div>
                                                <div class="maxh-scroll">
                                                   <div class="smart-mobile position-relative px-5">
                                                      <img src="img/glasses.png" width="100%">
                                                   </div>
                                                   <p class="text-justify mb-4">To sell a product on StayToEnjoy you
                                                      need at least one product image. The most important image is the
                                                      main image and is intended to give the buyer a first and good
                                                      overview of the item. The main image appears in StayToEnjoy search
                                                      results and when browsing.</p>

                                                   <div class="row">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and
                                                            background of main imgage</h4>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="50">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/phone-img.svg" width="100">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12 border-top pt-4">
                                                         <p class="text-justify mb-4">Main images must have a pure white
                                                            background (pure white harmonizes with the search results
                                                            and product detail pages on StayToEnjoy color values: (RGB:
                                                            255, 255, 255) or (Hex: FF FF FF). Product images must be at
                                                            least 500 pixels wide and high, with a maximum of 3000
                                                            pixels. Also, no blurry or pixelated images with jagged
                                                            edges are allowed.</p>

                                                         <p class="text-justify mb-4">The product must cover 85% of the
                                                            entire image, measured along the longest side.</p>

                                                         <p class="text-justify mb-4">In addition, the product should be
                                                            in the middle and in the focus of the photo. In this way you
                                                            ensure that the product to be sold is the sole focus and
                                                            that it is clear to the buyer which product it is.</p>

                                                         <p class="text-justify mb-4">Products in the main image must
                                                            not be cropped by the frame edge, but must be fully featured
                                                            so that the entire product is visible to the customer. The
                                                            exception to this is jewelry, especially necklaces.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not
                                                            contain StayToEnjoy trademarks</h4>
                                                         <p class="text-justify">Product images on StayToEnjoy must not
                                                            contain any logos, trademarks or variants of the StayToEnjoy
                                                            brand or marks used by StayToEnjoy. It is also not allowed
                                                            to use StayToEnjoy identifiers such as “StayToEnjoy Choice”
                                                            , “Best Seller” or “Best Selling Product” on the image</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs
                                                            are a must</h4>
                                                         <p class="text-justify">The product must have been
                                                            professionally photographed for the main image. A graphic
                                                            creation or an animation of the article is not permitted, as
                                                            this can lead to falsification and not truthful
                                                            representation.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only
                                                            depict the article once</h4>
                                                         <p class="text-justify">The main image must not show multiple
                                                            versions of the item for sale. The main image must only show
                                                            the product itself, with no other versions of the product.
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-5 pb-5">
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-group.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                         <div
                                                            class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
                                                            <img src="img/girls-img-single.png" width="100%">
                                                         </div>
                                                         <p class="line-height-normal">Product image does not take up
                                                            enough space</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not
                                                            contain any people</h4>
                                                         <p class="text-justify">In principle, people may not be shown
                                                            on product images on StayToEnjoy. There are exceptions in
                                                            the categories of clothing, clothing accessories, shoes,
                                                            handbags, suitcases, backpacks & bags and jewelry. The
                                                            requirement for these is that no models may be shown
                                                            sitting, kneeling or leaning against anything. It is only
                                                            permissible to depict the models standing while the focus is
                                                            on the item for sale. In addition, it is not permitted in
                                                            all categories to depict child models in pictures wearing
                                                            swimwear or children's underwear.</p>
                                                      </div>
                                                   </div>
                                                   <div class="row mb-4">
                                                      <div class="col-12">
                                                         <h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the
                                                            main image</h4>
                                                         <p class="text-justify">The article should be in the foreground
                                                            on the main image. For this reason, unnecessary props that
                                                            can distract from the actual product are taboo there.</p>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!---------END NINE MODULE--------->
                              </div>
                           </form>
                        </div>
                     </section>
                     <!---------------------------------------END MULTIPLE STEPS------------------------------>
                  </div>
               </div>
            </div>
         </div>
   </section>
</main>

<!-- select size modal -->
<div class="modal selectCategory-modal fade" id="target-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header mb-4">
            <h4 class="modal-title font-24" id="myCenterModalLabel">Select Target Group</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
         </div>
         <div class="modal-body pt-0 pl-4 pr-4">
            <ul class="categories extras-add pr-0">
               <li>
                  <label for="Baby" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Baby</span></a>
                     <input type="checkbox" id="Baby" checked>
                  </label>
               </li>
               <li>
                  <label for="Infant" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Infant</span></a>
                     <input type="checkbox" id="Infant">
                  </label>
               </li>
               <li>
                  <label for="Kids" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Kids</span></a>
                     <input type="checkbox" id="Kids">
                  </label>
               </li>
               <li>
                  <label for="Men" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Men</span></a>
                     <input type="checkbox" id="Men" checked>
                  </label>
               </li>
               <li>
                  <label for="Women" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Women</span></a>
                     <input type="checkbox" id="Women" checked>
                  </label>
               </li>
               <li>
                  <label for="+60" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">+60</span></a>
                     <input type="checkbox" id="+60" checked>
                  </label>
               </li>
               <li>
                  <label for="All" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">All</span></a>
                     <input type="checkbox" id="All" checked>
                  </label>
               </li>
            </ul>
         </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- select size modal -->
<div class="modal selectCategory-modal fade" id="category-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header mb-4">
            <h4 class="modal-title font-24" id="myCenterModalLabel">Select Product Sizes</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
         </div>
         <div class="modal-body pt-0 pl-4 pr-4">
            <ul class="categories extras-add pr-0">
               <li>
                  <label for="Small" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Small</span></a>
                     <input type="checkbox" id="Small" checked>
                  </label>
               </li>
               <li>
                  <label for="Medium" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Medium</span></a>
                     <input type="checkbox" id="Medium">
                  </label>
               </li>
               <li>
                  <label for="Large" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Large</span></a>
                     <input type="checkbox" id="Large">
                  </label>
               </li>
               <li>
                  <label for="Extra-Large" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Extra Large</span></a>
                     <input type="checkbox" id="Extra-Large" checked>
                  </label>
               </li>
               <li>
                  <label for="X" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">X</span></a>
                     <input type="checkbox" id="X" checked>
                  </label>
               </li>
               <li>
                  <label for="XL" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">XL</span></a>
                     <input type="checkbox" id="XL" checked>
                  </label>
               </li>
               <li>
                  <label for="XXL" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">XXL</span></a>
                     <input type="checkbox" id="XXL" checked>
                  </label>
               </li>
            </ul>
         </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- select color modal -->
<div class="modal selectCategory-modal fade" id="color-modal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header mb-4">
            <h4 class="modal-title font-24 font-weight-400" id="myCenterModalLabel"><img src="img/image.svg" alt=""
                  style="width: 37px;" class="mr-4" />Add Men T-Shirt colors</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
         </div>
         <div class="modal-body pt-0 pl-4 pr-4">
            <div class="row">
               <div class="col-12 mt-4">
                  <div class="input-group add-color">
                     <input type="text" class="form-control font-18" placeholder="Type color and click apply">
                     <button class="btn btn-primary blue-btn blr-0">Apply</button>
                  </div>
               </div>
               <div class="col-12 mt-5">
                  <span
                     class="font-16 addedTag bg-secondary radius-5 text-dark px-5 py-2 d-inline-block mr-3 position-relative">White</span>
                  <span
                     class="font-16 addedTag bg-secondary radius-5 text-dark px-5 py-2 d-inline-block mr-3 position-relative">Black</span>
               </div>
            </div>
         </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply all</button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal selectCategory-modal selectitem-modal fade" id="newcategory-modal" tabindex="-1" role="dialog"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content first-content">
         <div class="modal-header mb-4 px-4">
            <h4 class="modal-title" id="myCenterModalLabel">Main Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
         </div>
         <div class="modal-body pl-4 pt-3 pr-4">

            <header class="border-bottom pb-4 mb-3">
               <div class="form-group has-search mb-3 px-4">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search Category Name ">
               </div>
            </header>
            <ul class="categories extras-add pr-0 w-scroll">
               <li class="first-button">
                  <a class="d-flex justify-content-between align-items-center" href="#"><span
                        class="pl-2">Grosserie</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span class="pl-2">Fashion
                        Women</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span class="pl-2">Electronics &
                        Computer</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span
                        class="pl-2">Books</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span class="pl-2">Home &
                        Garden</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span class="pl-2">Baby
                        Products</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span
                        class="pl-2">Jewelry</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span class="pl-2">Pets</span><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span
                        class="pl-2">Antiques</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a class="d-flex justify-content-between align-items-center" href="#"><span class="pl-2">Art</span><i
                        class="fa fa-chevron-right" aria-hidden="true"></i></a>
               </li>
            </ul>
         </div>
      </div>
      <div class="modal-content second-content">
         <div class="modal-header mb-4 px-4">
            <h4 class="modal-title" id="myCenterModalLabel"><a href="javascript:void(0);"
                  class="back-content mr-5 ml-3"><img src="img/next.svg" alt="" style="width: 30px;" /></a> Choose Sub
               Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
         </div>

         <div class="modal-body pl-4 pt-3 pr-4">

            <header class="border-bottom pb-4 mb-3">
               <div class="form-group has-search mb-3 px-4">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" class="form-control" placeholder="Search Category Name">
               </div>
            </header>
            <ul class="categories extras-add pr-0 w-scroll">
               <li>
                  <label for="Fruits" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Fruits</span></a>
                     <input type="checkbox" id="Fruits" checked>
                  </label>
               </li>
               <li>
                  <label for="Vegetable" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Vegetable</span></a>
                     <input type="checkbox" id="Vegetable">
                  </label>
               </li>
               <li>
                  <label for="Purses" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Purses</span></a>
                     <input type="checkbox" id="Purses">
                  </label>
               </li>
               <li>
                  <label for="Fresh-Meat" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Fresh Meat</span></a>
                     <input type="checkbox" id="Fresh-Meat" checked>
                  </label>
               </li>
               <li>
                  <label for="Frozen-Meat" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Frozen Meat</span></a>
                     <input type="checkbox" id="Frozen-Meat" checked>
                  </label>
               </li>
               <li>
                  <label for="Milk-Products" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Milk&nbsp;Products</span></a>
                     <input type="checkbox" id="Milk-Products" checked>
                  </label>
               </li>
               <li>
                  <label for="Baverages" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Baverages</span></a>
                     <input type="checkbox" id="Baverages" checked>
                  </label>
               </li>
               <li>
                  <label for="Eggs" class="extras-add-label">
                     <a class="d-flex justify-content-between align-items-center" href="#"><span
                           class="extras-add-title">Eggs</span></a>
                     <input type="checkbox" id="Eggs" checked>
                  </label>
               </li>
            </ul>
            <div class="modal-footer pt-5">
               <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-primary blue-btn">Add</button>
            </div>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade feedbackmodal snooze" id="fordelete">
   <div class="modal-dialog" style="border-radius: 5px !important;">
      <div class="modal-content modal-content-delete">
         <!-- Modal Header -->
         <div class="modal-header">
            <div class="d-flex align-items-center justify-content-between">
               <h4 class="modal-title" style="justify-content:  flex-start;">
                  Are you sure you want to delete?
               </h4>
               <button type="button" class="close" data-dismiss="modal" style="margin-top: -20px !important;">
               </button>
            </div>
         </div>
         <div class="modal-body p-0 px-4 mb-3 mt-4">
            <div class="pl-3 font-18">
               <p>If you leave this page your Product will be discarded.</p>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer border-0">
            <button type="button" class="btn btn-save cancel-btn p-3 popdiscard trigger-close"
               data-dismiss="modal">Discard</button>
            <button type="button" class="btn btn-save popbutton ml-3 hover-effect blue-btn p-3"
               data-dismiss="modal">Delete</button>
         </div>
      </div>
   </div>
</div>
<!--<div class="modal fade feedbackmodal snooze" id="fordeletesmallimage">
	<div class="modal-dialog" style="border-radius: 5px !important;">
		<div class="modal-content modal-content-delete">
			// Modal Header 
			<div class="modal-header">
				<h4 class="modal-title" style="justify-content:  flex-start;">         
					Are you sure you want to delete?
				</h4>
				<button class="menuhover position-relative" type="button" class="close" data-dismiss="modal">
				<img src="assets/image/close.svg" class="imgnone cursor-pointer" alt="close" data-svg="close-icon" width="35">
				<img src="assets/image/close_hover.svg" class="imgblock" alt="close" data-svg="close-icon" width="35">
				</button>
			</div>
			<div class="modal-body p-0 px-4 mb-3 mt-4">
				<div class="pl-3 font-18">
					<p>If you leave this page your Product will be discarded.</p>
				</div>
			</div>
			// Modal footer 
			<div class="modal-footer border-0">
				<button type="button" class="btn btn-save cancel-btn p-3 popdiscard trigger-close" data-dismiss="modal">Discard</button>
				<button type="button" class="btn btn-save popbutton ml-3 btn-primary hover-effect save-btn p-3" data-dismiss="modal">Delete</button>
			</div>
		</div>
	</div>
</div>-->
<div class="modal fade" id="forcancle">
   <div class="modal-dialog modal-dialog-centered" style="border-radius: 5px !important;">
      <div class="modal-content modal-content-delete">
         <!-- Modal Header -->
         <div class="modal-header w-100">
            <div class="d-flex align-items-center justify-content-between w-100">
               <h4 class="modal-title" style="justify-content:  flex-start;">
                  Are you sure you want to delete?
               </h4>
               <button type="button" class="close" data-dismiss="modal">
               </button>
            </div>
         </div>
         <div class="modal-body p-0 px-4 mb-3 mt-4">
            <div class="pl-3 font-18">
               <p>If you leave this page your Product will be discarded.</p>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer border-0">
            <button type="button" class="btn btn-save cancel-btn p-3 popdiscard trigger-close"
               data-dismiss="modal">Discard</button>
            <button type="button" class="btn btn-save popbutton ml-3 hover-effect blue-btn p-3"
               data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<div id="learn-more-popup" class="uk-modal" uk-modal="">
   <div
      class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded p-0 relative uk-animation-slide-bottom-small">
      <div class="modal-content">
         <div class="modal-header position-relative" style="border-bottom: none;">
            <h3 class="font-24 font-semibold font-blue heading text-center" style="flex: 1;color:#000">iPhone12</h3>
            <div class="position-absolute right-0 top-0" style="padding:20px 25px;">
               <button class="menuhover position-relative uk-modal-close" type="button">
                  <img src="assets/image/close.svg" class="imgnone cursor-pointer" alt="close" width="35">
                  <img src="assets/image/close_hover.svg" class="imgblock" alt="close" width="35">
               </button>
            </div>
         </div>
         <!-- Modal body -->
         <div class="modal-body" style="padding-top:0;">
            <table class="table table-bordered">
               <tbody>
                  <tr>
                     <th scope="row">Display</th>
                     <td>6.1-inch Super Retina XDR display with True Tone</td>
                  </tr>
                  <tr class="even">
                     <th scope="row">Capacity</th>
                     <td>64GB, 128GB, 256GB</td>
                  </tr>
                  <tr>
                     <th scope="row">Splash, Water, and Dust Resistant</th>
                     <td>All-glass and surgical-grade stainless steel design, water and dust resistant (rated IP68)</td>
                  </tr>
                  <tr class="even">
                     <th>Camera & Video</th>
                     <td>Dual 12MP cameras with Portrait mode, Depth Control, Portrait Lighting, Smart HDR, and 4K Dolby
                        Vision HDR video up to 60 fps</td>
                  </tr>
                  <tr>
                     <th>Front Camera</th>
                     <td>12MP TrueDepth front camera with Portrait mode, Depth Control, Portrait Lighting, and Smart HDR
                        3</td>
                  </tr>
                  <tr class="even">
                     <th>Power and Battery</th>
                     <td>Video playback: Up to 17 hours; Video playback (streamed): Up to 11 hours; Audio playback: Up
                        to 65 hours, 20W adapter or higher (sold separatel); Fast-charge capable: Up to 50% charge in
                        around 30 minutes with 20W adapter or higher</td>
                  </tr>
                  <tr>
                     <th>In the Box</th>
                     <td>iPhone with iOS 14, USB-C to Lightning Cable, Documentation</td>
                  </tr>
                  <tr class="even">
                     <th>Height</th>
                     <td>5.78 inches (146.7 mm)</td>
                  </tr>
                  <tr>
                     <th>Width</th>
                     <td>2.82 inches (71.5 mm)</td>
                  </tr>
                  <tr class="even">
                     <th>Depth</th>
                     <td>0.29 inch (7.4 mm)</td>
                  </tr>
                  <tr>
                     <th>Weight</th>
                     <td>5.78 ounces (164 grams)</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<div id="remove-popup" class="uk-modal" uk-modal="">
   <div
      class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded p-0 relative uk-animation-slide-bottom-small">
      <div class="modal-content">
         <!-- Modal body -->
         <div class="modal-body">
            <div class="delete-draft-popup pt-4">
               <h3>Are you sure that you want delete this draft?</h3>
               <p class="pt-3 line-height-default">All data of this draft will then be completely deleted and will no
                  longer be available to you.</p>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button"
               class="btn btn-save cancel-btn p-3 popdiscard trigger-close uk-modal-close">Cancel</button>
            <button type="button" class="btn btn-save popbutton hover-effect blue-btn p-3">Delete</button>
         </div>
      </div>
   </div>
</div>

<!-- / Content -->
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
<script type="text/javascript">
/** Auotocomplete search  */
function autocomplete(inp, arr) {
   /*the autocomplete function takes two arguments,
   the text field element and an array of possible autocompleted values:*/
   var currentFocus;
   /*execute a function when someone writes in the text field:*/
   inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) {
         return false;
      }
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");

      pro = document.createElement("ARTICLE");
      pro.setAttribute("class", "keyword-suggestion__labels");
      pro.innerHTML +=
         '<h2 class="textual-display">Can you sepcify that?</h2><span class="textual-display">Additional information optimizes your offer</span>';
      inp.setAttribute("class", "autocomplete-input");
      $('.n1-search-wrap-btn').addClass('active-blue-s-btn');
      $('.n1-search-wrap').parents('.container-search').addClass('mob-full-search');
      $('.n1-search-wrap').parents('.flow-step').addClass('mt-0');

      pro2 = document.createElement("ARTICLE");
      pro2.setAttribute("class", "keyword-suggestion__article");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      pro2.appendChild(pro);
      a.appendChild(pro2);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
         /*check if the item starts with the same letters as the text field value:*/
         if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");

            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
               /*insert the value for the autocomplete text field:*/
               inp.value = this.getElementsByTagName("input")[0].value;
               /*close the list of autocompleted values,
               (or any other open lists of autocompleted values:*/
               //closeAllLists();
            });
            pro2.appendChild(b);
         }
      }
   });
   /*execute a function presses a key on the keyboard:*/
   inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
         /*If the arrow DOWN key is pressed,
         increase the currentFocus variable:*/
         currentFocus++;
         /*and and make the current item more visible:*/
         addActive(x);
      } else if (e.keyCode == 38) { //up
         /*If the arrow UP key is pressed,
         decrease the currentFocus variable:*/
         currentFocus--;
         /*and and make the current item more visible:*/
         addActive(x);
      } else if (e.keyCode == 13) {
         /*If the ENTER key is pressed, prevent the form from being submitted,*/
         e.preventDefault();
         if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
         }
      }
   });

   function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
   }

   function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
         x[i].classList.remove("autocomplete-active");
      }
   }

   function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
         if (elmnt != x[i] && elmnt != inp) {
            x[i].parentNode.removeChild(x[i]);
            $('#myInput').removeClass('autocomplete-input');
            $('.n1-search-wrap-btn').removeClass('active-blue-s-btn');
            $('.n1-search-wrap').parents('.container-search').removeClass('mob-full-search');
            $('.n1-search-wrap').parents('.flow-step').removeClass('mt-0');
         }
      }
   }
   /*execute a function when someone clicks in the document:*/
   document.addEventListener("click", function(e) {
      //closeAllLists(e.target);
   });

   function inputReset() {
      var input = document.getElementById('myInput');
      input.value = null;
      input.focus();
      return false;
   }

   document.getElementById("n1-close-iconid").addEventListener("click", function(e) {
      closeAllLists();
      inputReset();
   });
}

/*An array containing all the country names in the world:*/
var courses = ["Introduction to Athropology", "Introduction to Archaeology", "Cultural Anthropology", "Anthropology",
   "Communication", "Education", "Education: Early Childhood",
   "Education: Elementary Education with a Language and Culture Teaching Specialty",
   "Education: Second Language / Elementary Education", "Education: Secondary Education",
   "Education: Special Education", "English", "Fine Arts", "History", "Pacific-Asian Studies", "Philosophy",
   "Political Science", "Psychology", "Sociology", "Computer Science", "t shirt", "teppich", "tablet",
   "tommy hilfiger", "t shirt herren", "thermomix tm6", "taschenmesser", "tunika", "toaster", "t shirt men",
   "t shirt women"
];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), courses);
</script>
