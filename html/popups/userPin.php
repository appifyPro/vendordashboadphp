<div id="user_pin" class="support-pin edit-pin uk-modal" uk-modal="" >
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded p-0 relative uk-animation-slide-bottom-small d-flex align-items-center justify-content-between">
		<div class="modal-content" data-id="default">
			<div class="modal-header" style="border-bottom: none;">
				<h3 class="font-22 font-semibold font-black m-0">Your Support PIN</h3>
				<button class="uk-modal-close-default menuhover position-relative bg-transparent rounded-full p-2.5 right-2 uk-icon uk-close" type="button" uk-close="" title="" aria-expanded="false">
				<img src="img/cancel.svg" class="imgnone cursor-pointer" alt="close" width="35" data-svg="close-icon">
				<img src="img/cancel-hover.svg" class="imgblock" alt="close" width="35" data-svg="close-icon">
				</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body pb-0" style="padding-top:0;">
				<!--<h3 class="title">Your Support PIN</h3>-->
				<div class="pin-details">
					<p class="font-14 text-dark">You need this PIN when you contact Support.</p>
					<p class="font-14 text-dark">Your Current PIN:<br> 12B55! <a href="#" class="change-section" data-id="user_pin_edit">Edit</a></p>
				</div>
				<h3 class="title font-black" style="padding-left: 2px;">Login Info</h3>
				<div class="pin-details">
					<p class="font-14 text-dark">Customer Number:<br> 888 8888 88</p>
					<p class="font-14 text-dark">User Name:<br> Hello Sunshine</p>
				</div>
			</div>
		</div>
		<div class="modal-content" id="user_pin_edit" style="transform: translateX(100%) translateZ(1px);display:none;transition: 2s;">
			<div class="modal-header justify-content-start" style="border-bottom: none;">
				<div class="menuhover position-relative back-to-menu">
					<img src="img/next.svg" class="imgnone cursor-pointer" alt="Back" width="25">
					<img src="img/next.svg" class="imgblock" alt="Back" width="25">
				</div>
				<h3 class="font-22 font-semibold font-black my-0 mr-0 ml-4">Change Support PIN</h3>
				<button class="uk-modal-close-default menuhover position-relative bg-transparent rounded-full p-2.5 right-2 uk-icon uk-close ml-auto" type="button" uk-close="" title="" aria-expanded="false">
				<img src="img/cancel.svg" class="imgnone cursor-pointer" alt="close" width="35" data-svg="close-icon">
				<img src="img/cancel-hover.svg" class="imgblock" alt="close" width="35" data-svg="close-icon">
				</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body pb-4" style="padding-top:0;">
				<!--<h3 class="title">Change Support PIN</h3>-->
				<p class="font-14 mt-4" style="padding: 0;">You need this PIN when you contact Support.</p>
				<div class="pin-details bg-transparent pl-0 mb-0 mt-0">
					<div class="edit-pin-details d-flex m-0" id="pin-input-area">
						<input type="text" class="form-control p-0 text-dark text-center" id="first" maxlength="1">
						<input type="text" class="form-control p-0 text-dark text-center" id="second" maxlength="1">
						<input type="text" class="form-control p-0 text-dark text-center" id="third" maxlength="1">
						<input type="text" class="form-control p-0 text-dark text-center" id="fourth" maxlength="1">
						<input type="text" class="form-control p-0 text-dark text-center" id="fifth" maxlength="1">
						<input type="text" class="form-control p-0 text-dark text-center" id="sixth" maxlength="1">
					</div>
				</div>
				<p class="font-14 text-dark">Type exactly 6 Numbers
					<br/>Not be single, repeated digit
					<br/>Use non-sequential digits
				</p>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer py-4">
				<button type="button" class="btn btn-light btn-offWhite mr-4 uk-modal-close-default rounded" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary blue-btn rounded"  data-dismiss="modal">Save</button>
			</div>
		</div>
	</div>
</div>
