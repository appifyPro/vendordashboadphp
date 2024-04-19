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
            <div class="midtitle custom-mid align-self-center font-26">Add Customers</div>
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
      <div class="margin-0-auto new-client-section">
         <!--<div class="px-4 mx-4 font-26 font-weight-500 pt-5 desktop-view">Add Customers</div>
			<p class="d-block font-16 greyText-color px-4 lh-1 mt-2 ml-4">Creating a lightning deal on StayToEnjoy can be very lucrative. In this way, the visibility of the products can be increased immensely without much effort, which means that sales, profit and ranking can skyrocket without any effort.</p>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Add Customers</div>
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
               <div class="row m-0" style="padding:0px 15px; ">
                  <div class="col-lg-6">
                     <div class="page_box p20 mb-4 box-shodow new-clientbox bg-white radius-5">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="mb-2 color-default">First Name</label>
                                 <input type="text" class="form-control" placeholder="Type" />
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="mb-2 color-default">Last Name</label>
                                 <input type="text" class="form-control" placeholder="Type" />
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="mb-2 color-default">Telephone</label>
                                 <div class="input-group d-flex">
                                    <div class="input-group-prepend2">
                                       <span class="input-group-text p-0 border-0 dropdown-icon">

                                          <select id="phone" name="phone"
                                             class="text-left bg-grey pl-4 font-14 color-white-text">
                                             <option>Phone</option>
                                             <option value="93">Afghanistan +93</option>
                                             <option value="358">Aland Islands +358</option>
                                             <option value="355">Albania +355</option>
                                             <option value="213">Algeria +213</option>
                                             <option value="1684">American Samoa +1684</option>
                                             <option value="376">Andorra +376</option>
                                             <option value="244">Angola +244</option>
                                             <option value="1264">Anguilla +1264</option>
                                             <option value="672">Antarctica +672</option>
                                             <option value="1268">Antigua and Barbuda +1268</option>
                                             <option value="54">Argentina +54</option>
                                             <option value="374">Armenia +374</option>
                                             <option value="297">Aruba +297</option>
                                             <option value="61">Australia +61</option>
                                             <option value="43">Austria +43</option>
                                             <option value="994">Azerbaijan +994</option>
                                             <option value="1242">Bahamas +1242</option>
                                             <option value="973">Bahrain +973</option>
                                             <option value="880">Bangladesh +880</option>
                                             <option value="1246">Barbados +1246</option>
                                             <option value="375">Belarus +375</option>
                                             <option value="32">Belgium +32</option>
                                             <option value="501">Belize +501</option>
                                             <option value="229">Benin +229</option>
                                             <option value="1441">Bermuda +1441</option>
                                             <option value="975">Bhutan +975</option>
                                             <option value="591">Bolivia +591</option>
                                             <option value="599">Bonaire, Sint Eustatius and Saba +599</option>
                                             <option value="387">Bosnia and Herzegovina +387</option>
                                             <option value="267">Botswana +267</option>
                                             <option value="55">Bouvet Island +55</option>
                                             <option value="55">Brazil +55</option>
                                             <option value="246">British Indian Ocean Territory +246</option>
                                             <option value="673">Brunei Darussalam +673</option>
                                             <option value="359">Bulgaria +359</option>
                                             <option value="226">Burkina Faso +226</option>
                                             <option value="257">Burundi +257</option>
                                             <option value="855">Cambodia +855</option>
                                             <option value="237">Cameroon +237</option>
                                             <option value="1">Canada +1</option>
                                             <option value="238">Cape Verde +238</option>
                                             <option value="1345">Cayman Islands +1345</option>
                                             <option value="236">Central African Republic +236</option>
                                             <option value="235">Chad +235</option>
                                             <option value="56">Chile +56</option>
                                             <option value="86">China +86</option>
                                             <option value="61">Christmas Island +61</option>
                                             <option value="672">Cocos (Keeling) Islands +672</option>
                                             <option value="57">Colombia +57</option>
                                             <option value="269">Comoros +269</option>
                                             <option value="242">Congo +242</option>
                                             <option value="242">Congo, Democratic Republic of the Congo +242</option>
                                             <option value="682">Cook Islands +682</option>
                                             <option value="506">Costa Rica +506</option>
                                             <option value="225">Cote D'Ivoire +225</option>
                                             <option value="385">Croatia +385</option>
                                             <option value="53">Cuba +53</option>
                                             <option value="599">Curacao +599</option>
                                             <option value="357">Cyprus +357</option>
                                             <option value="420">Czech Republic +420</option>
                                             <option value="45">Denmark +45</option>
                                             <option value="253">Djibouti +253</option>
                                             <option value="1767">Dominica +1767</option>
                                             <option value="1809">Dominican Republic +1809</option>
                                             <option value="593">Ecuador +593</option>
                                             <option value="20">Egypt +20</option>
                                             <option value="503">El Salvador +503</option>
                                             <option value="240">Equatorial Guinea +240</option>
                                             <option value="291">Eritrea +291</option>
                                             <option value="372">Estonia +372</option>
                                             <option value="251">Ethiopia +251</option>
                                             <option value="500">Falkland Islands (Malvinas) +500</option>
                                             <option value="298">Faroe Islands +298</option>
                                             <option value="679">Fiji +679</option>
                                             <option value="358">Finland +358</option>
                                             <option value="33">France +33</option>
                                             <option value="594">French Guiana +594</option>
                                             <option value="689">French Polynesia +689</option>
                                             <option value="262">French Southern Territories +262</option>
                                             <option value="241">Gabon +241</option>
                                             <option value="220">Gambia +220</option>
                                             <option value="995">Georgia +995</option>
                                             <option value="49">Germany +49</option>
                                             <option value="233">Ghana +233</option>
                                             <option value="350">Gibraltar +350</option>
                                             <option value="30">Greece +30</option>
                                             <option value="299">Greenland +299</option>
                                             <option value="1473">Grenada +1473</option>
                                             <option value="590">Guadeloupe +590</option>
                                             <option value="1671">Guam +1671</option>
                                             <option value="502">Guatemala +502</option>
                                             <option value="44">Guernsey +44</option>
                                             <option value="224">Guinea +224</option>
                                             <option value="245">Guinea-Bissau +245</option>
                                             <option value="592">Guyana +592</option>
                                             <option value="509">Haiti +509</option>
                                             <option value="0">Heard Island and Mcdonald Islands +0</option>
                                             <option value="39">Holy See (Vatican City State) +39</option>
                                             <option value="504">Honduras +504</option>
                                             <option value="852">Hong Kong +852</option>
                                             <option value="36">Hungary +36</option>
                                             <option value="354">Iceland +354</option>
                                             <option value="91">India +91</option>
                                             <option value="62">Indonesia +62</option>
                                             <option value="98">Iran, Islamic Republic of +98</option>
                                             <option value="964">Iraq +964</option>
                                             <option value="353">Ireland +353</option>
                                             <option value="44">Isle of Man +44</option>
                                             <option value="972">Israel +972</option>
                                             <option value="39">Italy +39</option>
                                             <option value="1876">Jamaica +1876</option>
                                             <option value="81">Japan +81</option>
                                             <option value="44">Jersey +44</option>
                                             <option value="962">Jordan +962</option>
                                             <option value="7">Kazakhstan +7</option>
                                             <option value="254">Kenya +254</option>
                                             <option value="686">Kiribati +686</option>
                                             <option value="850">Korea, Democratic People's Republic of +850</option>
                                             <option value="82">Korea, Republic of +82</option>
                                             <option value="381">Kosovo +381</option>
                                             <option value="965">Kuwait +965</option>
                                             <option value="996">Kyrgyzstan +996</option>
                                             <option value="856">Lao People's Democratic Republic +856</option>
                                             <option value="371">Latvia +371</option>
                                             <option value="961">Lebanon +961</option>
                                             <option value="266">Lesotho +266</option>
                                             <option value="231">Liberia +231</option>
                                             <option value="218">Libyan Arab Jamahiriya +218</option>
                                             <option value="423">Liechtenstein +423</option>
                                             <option value="370">Lithuania +370</option>
                                             <option value="352">Luxembourg +352</option>
                                             <option value="853">Macao +853</option>
                                             <option value="389">Macedonia, the Former Yugoslav Republic of +389
                                             </option>
                                             <option value="261">Madagascar +261</option>
                                             <option value="265">Malawi +265</option>
                                             <option value="60">Malaysia +60</option>
                                             <option value="960">Maldives +960</option>
                                             <option value="223">Mali +223</option>
                                             <option value="356">Malta +356</option>
                                             <option value="692">Marshall Islands +692</option>
                                             <option value="596">Martinique +596</option>
                                             <option value="222">Mauritania +222</option>
                                             <option value="230">Mauritius +230</option>
                                             <option value="269">Mayotte +269</option>
                                             <option value="52">Mexico +52</option>
                                             <option value="691">Micronesia, Federated States of +691</option>
                                             <option value="373">Moldova, Republic of +373</option>
                                             <option value="377">Monaco +377</option>
                                             <option value="976">Mongolia +976</option>
                                             <option value="382">Montenegro +382</option>
                                             <option value="1664">Montserrat +1664</option>
                                             <option value="212">Morocco +212</option>
                                             <option value="258">Mozambique +258</option>
                                             <option value="95">Myanmar +95</option>
                                             <option value="264">Namibia +264</option>
                                             <option value="674">Nauru +674</option>
                                             <option value="977">Nepal +977</option>
                                             <option value="31">Netherlands +31</option>
                                             <option value="599">Netherlands Antilles +599</option>
                                             <option value="687">New Caledonia +687</option>
                                             <option value="64">New Zealand +64</option>
                                             <option value="505">Nicaragua +505</option>
                                             <option value="227">Niger +227</option>
                                             <option value="234">Nigeria +234</option>
                                             <option value="683">Niue +683</option>
                                             <option value="672">Norfolk Island +672</option>
                                             <option value="1670">Northern Mariana Islands +1670</option>
                                             <option value="47">Norway +47</option>
                                             <option value="968">Oman +968</option>
                                             <option value="92">Pakistan +92</option>
                                             <option value="680">Palau +680</option>
                                             <option value="970">Palestinian Territory, Occupied +970</option>
                                             <option value="507">Panama +507</option>
                                             <option value="675">Papua New Guinea +675</option>
                                             <option value="595">Paraguay +595</option>
                                             <option value="51">Peru +51</option>
                                             <option value="63">Philippines +63</option>
                                             <option value="64">Pitcairn +64</option>
                                             <option value="48">Poland +48</option>
                                             <option value="351">Portugal +351</option>
                                             <option value="1787">Puerto Rico +1787</option>
                                             <option value="974">Qatar +974</option>
                                             <option value="262">Reunion +262</option>
                                             <option value="40">Romania +40</option>
                                             <option value="70">Russian Federation +70</option>
                                             <option value="250">Rwanda +250</option>
                                             <option value="590">Saint Barthelemy +590</option>
                                             <option value="290">Saint Helena +290</option>
                                             <option value="1869">Saint Kitts and Nevis +1869</option>
                                             <option value="1758">Saint Lucia +1758</option>
                                             <option value="590">Saint Martin +590</option>
                                             <option value="508">Saint Pierre and Miquelon +508</option>
                                             <option value="1784">Saint Vincent and the Grenadines +1784</option>
                                             <option value="684">Samoa +684</option>
                                             <option value="378">San Marino +378</option>
                                             <option value="239">Sao Tome and Principe +239</option>
                                             <option value="966">Saudi Arabia +966</option>
                                             <option value="221">Senegal +221</option>
                                             <option value="381">Serbia +381</option>
                                             <option value="381">Serbia and Montenegro +381</option>
                                             <option value="248">Seychelles +248</option>
                                             <option value="232">Sierra Leone +232</option>
                                             <option value="65">Singapore +65</option>
                                             <option value="1">Sint Maarten +1</option>
                                             <option value="421">Slovakia +421</option>
                                             <option value="386">Slovenia +386</option>
                                             <option value="677">Solomon Islands +677</option>
                                             <option value="252">Somalia +252</option>
                                             <option value="27">South Africa +27</option>
                                             <option value="500">South Georgia and the South Sandwich Islands +500
                                             </option>
                                             <option value="211">South Sudan +211</option>
                                             <option value="34">Spain +34</option>
                                             <option value="94">Sri Lanka +94</option>
                                             <option value="249">Sudan +249</option>
                                             <option value="597">Suriname +597</option>
                                             <option value="47">Svalbard and Jan Mayen +47</option>
                                             <option value="268">Swaziland +268</option>
                                             <option value="46">Sweden +46</option>
                                             <option value="41">Switzerland +41</option>
                                             <option value="963">Syrian Arab Republic +963</option>
                                             <option value="886">Taiwan, Province of China +886</option>
                                             <option value="992">Tajikistan +992</option>
                                             <option value="255">Tanzania, United Republic of +255</option>
                                             <option value="66">Thailand +66</option>
                                             <option value="670">Timor-Leste +670</option>
                                             <option value="228">Togo +228</option>
                                             <option value="690">Tokelau +690</option>
                                             <option value="676">Tonga +676</option>
                                             <option value="1868">Trinidad and Tobago +1868</option>
                                             <option value="216">Tunisia +216</option>
                                             <option value="90">Turkey +90</option>
                                             <option value="7370">Turkmenistan +7370</option>
                                             <option value="1649">Turks and Caicos Islands +1649</option>
                                             <option value="688">Tuvalu +688</option>
                                             <option value="256">Uganda +256</option>
                                             <option value="380">Ukraine +380</option>
                                             <option value="971">United Arab Emirates +971</option>
                                             <option value="44">United Kingdom +44</option>
                                             <option value="1">United States +1</option>
                                             <option value="1">United States Minor Outlying Islands +1</option>
                                             <option value="598">Uruguay +598</option>
                                             <option value="998">Uzbekistan +998</option>
                                             <option value="678">Vanuatu +678</option>
                                             <option value="58">Venezuela +58</option>
                                             <option value="84">Viet Nam +84</option>
                                             <option value="1284">Virgin Islands, British +1284</option>
                                             <option value="1340">Virgin Islands, U.s. +1340</option>
                                             <option value="681">Wallis and Futuna +681</option>
                                             <option value="212">Western Sahara +212</option>
                                             <option value="967">Yemen +967</option>
                                             <option value="260">Zambia +260</option>
                                             <option value="263">Zimbabwe +263</option>
                                          </select>
                                       </span>
                                    </div>
                                    <input type="text" style="flex: 1;" placeholder="Enter number"
                                       class="form-control w-100 ">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-2 color-default">Email</label>
                           <input type="text" class="form-control" placeholder="Add" />
                        </div>
                        <div class="form-group">
                           <label class="mb-2 color-default">Send Notification by</label>
                           <div class="our-custom-select w-100 custom-select-sale">
                              <div class="selected-value">
                                 <div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">
                                    Email</div>
                                 <input type="text" name="" readonly value="All" disabled id="fursubCategory"
                                    style="display: none;" />
                              </div>
                              <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                 style="height:120PX;">
                                 <li>Don't send notifications</li>
                                 <li>Email</li>
                                 <li>SMS</li>
                                 <li>Email & SMS</li>
                              </ul>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="mb-2 color-default">Preferred Language</label>
                           <div class="our-custom-select w-100 custom-select-sale">
                              <div class="selected-value">
                                 <div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Use
                                    provider language (Germa)</div>
                                 <input type="text" name="" readonly value="All" disabled id="fursubCategory"
                                    style="display: none;" />
                              </div>
                              <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                 style="height:120PX;">
                                 <li>Use provider language (Germa)</li>
                                 <li>Bulgaria</li>
                                 <li>Czech</li>
                                 <li>Danish (dansk)</li>
                                 <li>German (Deutsch)</li>
                                 <li>Greek</li>
                                 <li>English (English)</li>
                                 <li>Spanish (espanol)</li>
                                 <li>Finish (suomi)</li>
                                 <li>French (francais)</li>
                                 <li>Croatian (hrvatski)</li>
                                 <li>Hungarian (magyar)</li>
                                 <li>Italian (italiano)</li>
                                 <li>Lithuanian (lietuviu)</li>
                                 <li>Norwegian Bokmal (norsk bokmal)</li>
                                 <li>Dutch (Nederlands)</li>
                                 <li>Polish (polski)</li>
                                 <li>Portuguese (portugues)</li>
                                 <li>Romanian (romana)</li>
                              </ul>
                           </div>
                        </div>
                        <div class="usage_limits_checkbox">
                           <div class="radio_btn_part checkbox_btn_part  pb-3">
                              <input type="checkbox" name="limit2" class="checkbox_input d-none" id="limit2">
                              <label for="limit2" class="d-flex align-items-center m-0">
                                 <span
                                    class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                    <i class="fa fa-check font-12"></i>
                                 </span>
                                 <p class="ml-3">Accepts marketing notifications</p>
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 ">
                     <div class="page_box p20 mb-4 box-shodow new-clientbox bg-white radius-5">
                        <div class="tabs_part">
                           <div class="tabmenu">
                              <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link px-0 active show" data-toggle="tab" href="#personalinfo">PERSONAL
                                       INFO</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link px-0" data-toggle="tab" href="#address">ADDRESS</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link px-0" data-toggle="tab" href="#Saddress">SHIPPING ADDRESS</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-content font-14 mt-4">
                              <div id="personalinfo" class="tab-pane active">
                                 <div class="row">
                                    <div class="col-xl-6">
                                       <div class="form-group">
                                          <label class="mb-2 color-default">Gender</label>
                                          <div class="our-custom-select w-100 custom-select-sale">
                                             <div class="selected-value">
                                                <div class="sel-value font-16 font-blue overflow-hidden"
                                                   style="white-space:nowrap">Gender</div>
                                                <input type="text" name="" readonly value="All" disabled
                                                   id="fursubCategory" style="display: none;" />
                                             </div>
                                             <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                style="height:120PX;">
                                                <li>Male</li>
                                                <li>Female</li>
                                                <li>Unknown</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-6">
                                       <div class="form-group w-100">
                                          <label class="mb-2 color-default">Referral Source</label>
                                          <div class="our-custom-select w-100 custom-select-sale">
                                             <div class="selected-value">
                                                <div class="sel-value font-16 font-blue overflow-hidden"
                                                   style="white-space:nowrap">Select Source</div>
                                                <input type="text" name="" readonly value="All" disabled
                                                   id="fursubCategory" style="display: none;" />
                                             </div>
                                             <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                style="height:120PX;">
                                                <li>Select Source</li>
                                                <li>Source1</li>
                                                <li>Source2</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <label class="mb-2 color-default">Date of Birth</label>
                                 <div class="row">
                                    <div class="col-lg-4 pr-0">
                                       <div class="form-group">
                                          <div class="our-custom-select w-100 custom-select-sale">
                                             <div class="selected-value">
                                                <div class="sel-value font-16 font-blue overflow-hidden"
                                                   style="white-space:nowrap">Select month</div>
                                                <input type="text" name="" readonly value="All" disabled
                                                   id="fursubCategory" style="display: none;" />
                                             </div>
                                             <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                style="height:120PX;">
                                                <li>Select month</li>
                                                <li value="1">January</li>
                                                <li value="2">February</li>
                                                <li value="3">March</li>
                                                <li value="4">April</li>
                                                <li value="5">May</li>
                                                <li value="6">June</li>
                                                <li value="7">July</li>
                                                <li value="8">August</li>
                                                <li value="9">September</li>
                                                <li value="10">October</li>
                                                <li value="11">November</li>
                                                <li value="12">December</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <div class="our-custom-select w-100 custom-select-sale">
                                             <div class="selected-value">
                                                <div class="sel-value font-16 font-blue overflow-hidden"
                                                   style="white-space:nowrap">Select day</div>
                                                <input type="text" name="" readonly value="All" disabled
                                                   id="fursubCategory" style="display: none;" />
                                             </div>
                                             <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                style="height:120PX;">
                                                <li>Select day</li>
                                                <li value="1">1</li>
                                                <li value="2">2</li>
                                                <li value="3">3</li>
                                                <li value="4">4</li>
                                                <li value="5">5</li>
                                                <li value="6">6</li>
                                                <li value="7">7</li>
                                                <li value="8">8</li>
                                                <li value="9">9</li>
                                                <li value="10">10</li>
                                                <li value="11">11</li>
                                                <li value="12">12</li>
                                                <li value="13">13</li>
                                                <li value="14">14</li>
                                                <li value="15">15</li>
                                                <li value="16">16</li>
                                                <li value="17">17</li>
                                                <li value="18">18</li>
                                                <li value="19">19</li>
                                                <li value="20">20</li>
                                                <li value="21">21</li>
                                                <li value="22">22</li>
                                                <li value="23">23</li>
                                                <li value="24">24</li>
                                                <li value="25">25</li>
                                                <li value="26">26</li>
                                                <li value="27">27</li>
                                                <li value="28">28</li>
                                                <li value="29">29</li>
                                                <li value="30">30</li>
                                                <li value="31">31</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 pl-0">
                                       <div class="form-group">
                                          <div class="our-custom-select w-100 custom-select-sale">
                                             <div class="selected-value">
                                                <div class="sel-value font-16 font-blue overflow-hidden"
                                                   style="white-space:nowrap">Select year</div>
                                                <input type="text" name="" readonly value="All" disabled
                                                   id="fursubCategory" style="display: none;" />
                                             </div>
                                             <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                style="height:120PX;">
                                                <li>Select year</li>
                                                <li value="2020">2020</li>
                                                <li value="2019">2019</li>
                                                <li value="2018">2018</li>
                                                <li value="2017">2017</li>
                                                <li value="2016">2016</li>
                                                <li value="2015">2015</li>
                                                <li value="2014">2014</li>
                                                <li value="2013">2013</li>
                                                <li value="2012">2012</li>
                                                <li value="2011">2011</li>
                                                <li value="2010">2010</li>
                                                <li value="2009">2009</li>
                                                <li value="2008">2008</li>
                                                <li value="2007">2007</li>
                                                <li value="2006">2006</li>
                                                <li value="2005">2005</li>
                                                <li value="2004">2004</li>
                                                <li value="2003">2003</li>
                                                <li value="2002">2002</li>
                                                <li value="2001">2001</li>
                                                <li value="2000">2000</li>
                                                <li value="1999">1999</li>
                                                <li value="1998">1998</li>
                                                <li value="1997">1997</li>
                                                <li value="1996">1996</li>
                                                <li value="1995">1995</li>
                                                <li value="1994">1994</li>
                                                <li value="1993">1993</li>
                                                <li value="1992">1992</li>
                                                <li value="1991">1991</li>
                                                <li value="1990">1990</li>
                                                <li value="1989">1989</li>
                                                <li value="1988">1988</li>
                                                <li value="1987">1987</li>
                                                <li value="1986">1986</li>
                                                <li value="1985">1985</li>
                                                <li value="1984">1984</li>
                                                <li value="1983">1983</li>
                                                <li value="1982">1982</li>
                                                <li value="1981">1981</li>
                                                <li value="1980">1980</li>
                                                <li value="1979">1979</li>
                                                <li value="1978">1978</li>
                                                <li value="1977">1977</li>
                                                <li value="1976">1976</li>
                                                <li value="1975">1975</li>
                                                <li value="1974">1974</li>
                                                <li value="1973">1973</li>
                                                <li value="1972">1972</li>
                                                <li value="1971">1971</li>
                                                <li value="1970">1970</li>
                                                <li value="1969">1969</li>
                                                <li value="1968">1968</li>
                                                <li value="1967">1967</li>
                                                <li value="1966">1966</li>
                                                <li value="1965">1965</li>
                                                <li value="1964">1964</li>
                                                <li value="1963">1963</li>
                                                <li value="1962">1962</li>
                                                <li value="1961">1961</li>
                                                <li value="1960">1960</li>
                                                <li value="1959">1959</li>
                                                <li value="1958">1958</li>
                                                <li value="1957">1957</li>
                                                <li value="1956">1956</li>
                                                <li value="1955">1955</li>
                                                <li value="1954">1954</li>
                                                <li value="1953">1953</li>
                                                <li value="1952">1952</li>
                                                <li value="1951">1951</li>
                                                <li value="1950">1950</li>
                                                <li value="1949">1949</li>
                                                <li value="1948">1948</li>
                                                <li value="1947">1947</li>
                                                <li value="1946">1946</li>
                                                <li value="1945">1945</li>
                                                <li value="1944">1944</li>
                                                <li value="1943">1943</li>
                                                <li value="1942">1942</li>
                                                <li value="1941">1941</li>
                                                <li value="1940">1940</li>
                                                <li value="1939">1939</li>
                                                <li value="1938">1938</li>
                                                <li value="1937">1937</li>
                                                <li value="1936">1936</li>
                                                <li value="1935">1935</li>
                                                <li value="1934">1934</li>
                                                <li value="1933">1933</li>
                                                <li value="1932">1932</li>
                                                <li value="1931">1931</li>
                                                <li value="1930">1930</li>
                                                <li value="1929">1929</li>
                                                <li value="1928">1928</li>
                                                <li value="1927">1927</li>
                                                <li value="1926">1926</li>
                                                <li value="1925">1925</li>
                                                <li value="1924">1924</li>
                                                <li value="1923">1923</li>
                                                <li value="1922">1922</li>
                                                <li value="1921">1921</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Client Notes</label>
                                    <textarea onkeyup="textAreaAdjust(this)" class="form-control expand"
                                       style="overflow:hidden"></textarea>
                                 </div>
                                 <div class="usage_limits_checkbox">
                                    <div class="radio_btn_part checkbox_btn_part  pb-3">
                                       <input type="checkbox" name="limit1" class="checkbox_input d-none" id="limit1">
                                       <label for="limit1" class="d-flex align-items-center m-0">
                                          <span
                                             class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                             <i class="fa fa-check font-12"></i>
                                          </span>
                                          <p class="ml-3">Display on all bookings</p>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div id="address" class="tab-pane fade">
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Address</label>
                                    <input type="text" class="form-control" placeholder="Add" />
                                 </div>
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Suburb</label>
                                    <input type="text" class="form-control" placeholder="Add" />
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-6">
                                       <div class="form-group">
                                          <label class="mb-2 color-default">City</label>
                                          <input type="text" class="form-control" placeholder="Add" />
                                       </div>
                                    </div>
                                    <div class="col-xl-6">
                                       <div class="form-group">
                                          <label class="mb-2 color-default">State</label>
                                          <input type="text" class="form-control" placeholder="Add" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Zip / Postal code</label>
                                    <input type="text" class="form-control" placeholder="Add" />
                                 </div>
                              </div>
                              <div id="Saddress" class="tab-pane fade">
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Address</label>
                                    <input type="text" class="form-control" placeholder="Add" />
                                 </div>
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Suburb</label>
                                    <input type="text" class="form-control" placeholder="Add" />
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-6">
                                       <div class="form-group">
                                          <label class="mb-2 color-default">City</label>
                                          <input type="text" class="form-control" placeholder="Add" />
                                       </div>
                                    </div>
                                    <div class="col-xl-6">
                                       <div class="form-group">
                                          <label class="mb-2 color-default">State</label>
                                          <input type="text" class="form-control" placeholder="Add" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="mb-2 color-default">Zip / Postal code</label>
                                    <input type="text" class="form-control" placeholder="Add" />
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
