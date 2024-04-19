<div id="notification_edit" class="edit-pin uk-modal" uk-modal="" >
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded p-0 relative uk-animation-slide-bottom-small d-flex align-items-center">
		<div class="modal-content" data-id="default">
			<div class="modal-header mb-4">
				<h3 class="font-20 font-semibold font-blue">Please share your thoughts with us</h3>

				<button class="uk-modal-close-default menuhover position-relative bg-transparent rounded-full p-2.5 right-2 uk-icon uk-close" type="button" uk-close="" title="" aria-expanded="false">
				<img src="img/cancel.svg" class="imgnone cursor-pointer" alt="close" width="35" data-svg="close-icon">
				<img src="img/cancel-hover.svg" class="imgblock" alt="close" width="35" data-svg="close-icon">
				</button>
			</div>
			<div class="modal-body" style="padding-top:0;">
				<div class="notification-edit-div">
					<div class="help-us cursor-pointer notification-action d-flex align-items-center mb-4 rounded py-3 px-4" data-id="notification-section-help">
						<div class="help-us-section">
							<p class="font-16 font-weight-500 font-blue">We are happy when you help us to make StayToEnjoy better</p>
							<p class="font-16 font-weight-400 font-blue">If you have suggestions for us so that we can make StayToEnjoy better, please select this field</p>
						</div>
					</div>
					<div class="something-worng cursor-pointer notification-action d-flex align-items-center rounded py-3 px-4" data-id="notification-section-worng">
						<div class="something-worng-section">
							<p class="font-16 font-weight-500 font-blue">Something went wrong</p>
							<p class="font-16 font-weight-400 font-blue">If something went wrong please select this field</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-content" id="notification-section-help" style="transform: translateX(100%) translateZ(1px);display:none;transition: 2s;">
			<div class="modal-header mb-4 justify-content-start">
			<div class="menuhover position-relative back-to-menu">
					<img src="img/next.svg" class="imgnone cursor-pointer" alt="Back" width="25">
					<img src="img/next.svg" class="imgblock" alt="Back" width="25">
				</div>
				<h3 class="font-20 font-semibold font-blue my-0 mr-0 ml-4">What is the reason for your feedback?</h3>
			</div>
			<form class="p-4" action="">
				<div class="modal-body border-0" style="padding-top:0;">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="mb-5">
							  <div class="select-list-box rounded shadow-none border-0 bg-secondary form-group--icon">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<ul class="m-0">
										<li values="1" class="option px-4 active">
											<span class="font-13 text-dark d-block">Choose an Area</span>
											<span class="font-16 text-dark d-block">Notifications1</span>
										</li>
										<li values="2" class="option px-4">
											<span class="font-13 text-dark d-block">Choose an Area</span>
											<span class="font-16 text-dark d-block">Notifications2</span>
										</li>
										<li values="3" class="option px-4">
											<span class="font-13 text-dark d-block">Choose an Area</span>
											<span class="font-16 text-dark d-block">Notifications3</span>
										</li>
									</ul>
								</div>
								<input type="hidden" name="notification-improve" value="">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="mb-4">
							  <textarea class="form-control rounded shadow-none border-0 background-grey border" placeholder="Type some details" name="details"></textarea>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-dark bg-transparent mb-4 screenshot-secetion">
								<span for="screenshot" class="cursor-pointer add_moreImages">
									<span class="d-inline-block align-middle font-16 font-weight-500">Add a Screenshot or Video (recommended)</span>
								</span>
								<div class="d-flex mt-2">
									<div id="product" class="carousel list-carousel" data-ride="carousel" data-interval="false">
										<div class="carousel-inner h-auto">
											<div class="carousel-item active default-img" href="assets/img/demo_backgorun.png">
												<img src="img/demo_backgorund-small.png" alt="" class="thumbnail-img" />
											</div>
										</div>
									</div>
								<img class="d-inline-block align-middle ml-4" src="img/add-image.svg" src="upload" width="40" height="40" data-value="0" data-id="uploder-1">
								</div>
								<div class="all-input">
								</div>
								<div  id="uploder-1" class="ml-5 pl-4 temp-image-holder">
								</div>
							</div>

						</div>
					</div>
					<div class="font-blue bg-transparent">
						Let us know if you have ideas that can help make our products better. If you need help solving a specific problem, please visit the <a href="" class="">Help Center</a>.
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-save cancel-btn p-3  trigger-close" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-save btn-primary hover-effect save-btn p-3" data-dismiss="modal">Send</button>
				</div>
			</form>
		</div>

		<div class="modal-content" id="notification-section-worng" style="transform: translateX(100%) translateZ(1px);display:none;transition: 2s;">
			<div class="modal-header mb-4 justify-content-start">
			<div class="menuhover position-relative back-to-menu">
					<img src="img/next.svg" class="imgnone cursor-pointer" alt="Back" width="25">
					<img src="img/next.svg" class="imgblock" alt="Back" width="25">
				</div>
				<h3 class="font-20 font-semibold font-blue my-0 mr-0 ml-4">What is the reason for your feedback?</h3>
			</div>
			<form class="p-4" action="">
				<div class="modal-body border-0" style="padding-top:0;">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="mb-5">
							  <div class="select-list-box rounded shadow-none border-0 bg-secondary form-group--icon">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<ul class="m-0">
										<li values="1" class="option px-4 active">
											<span class="font-13 text-dark d-block">Choose an Area</span>
											<span class="font-16 text-dark d-block">Notifications1</span>
										</li>
										<li values="2" class="option px-4">
											<span class="font-13 text-dark d-block">Choose an Area</span>
											<span class="font-16 text-dark d-block">Notifications2</span>
										</li>
										<li values="3" class="option px-4">
											<span class="font-13 text-dark d-block">Choose an Area</span>
											<span class="font-16 text-dark d-block">Notifications3</span>
										</li>
									</ul>
								</div>
								<input type="hidden" name="notification-improve" value="">
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="mb-4">
							  <textarea class="form-control rounded shadow-none border-0 background-grey border" placeholder="Type some details" name="details"></textarea>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-dark bg-transparent mb-4 screenshot-secetion">
								<span for="screenshot" class="cursor-pointer add_moreImages">
									<span class="d-inline-block align-middle font-16 font-weight-500">Add a Screenshot or Video (recommended)</span>
								</span>
								<div class="d-flex mt-2">
									<div id="product" class="carousel list-carousel" data-ride="carousel" data-interval="false">
										<div class="carousel-inner h-auto">
											<div class="carousel-item active default-img" href="assets/img/demo_backgorun.png">
												<img src="img/demo_backgorund-small.png" alt="" class="thumbnail-img" />
											</div>
										</div>
									</div>
								<img class="d-inline-block align-middle ml-4" src="img/add-image.svg" src="upload" width="40" height="40" data-value="0" data-id="uploder-1">
								</div>
								<div class="all-input">
								</div>
								<div  id="uploder-1" class="ml-5 pl-4 temp-image-holder">
								</div>
							</div>

						</div>
					</div>
					<div class="font-blue bg-transparent">
						Let us know if you have ideas that can help make our products better. If you need help solving a specific problem, please visit the <a href="" class="">Help Center</a>.
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-save cancel-btn p-3  trigger-close" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-save btn-primary hover-effect save-btn p-3" data-dismiss="modal">Send</button>
				</div>
			</form>
		</div>

	</div>
</div>

