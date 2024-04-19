<div class="modal datemodalbox flitermodal bg-secondary" id="filtermodal" style="display:none">
	<div class="modal-dialog">
		 <div class="modal-content border-left border-right">    
			<!-- Modal body -->
			<div class="datemodalheader">
				<div class="d-flex justify-content-between align-items-center px-2 py-2">
					<div class="position-absolute zindex-20" data-dismiss="modal">
						<div class="menuhover position-relative back-to-menu">
						<img src="img/next.svg" class="imgnone cursor-pointer" alt="Back" width="25">
						<img src="img/next.svg" class="imgblock" alt="Back" width="25">
						</div>
					</div>
					<div class="color-default font-weight-600 font-16 position-relative w-100 text-center">Select Filter</div>	
				</div>
			</div>
			<div class="modal-body frontend-section p-0">
				<?php include 'mobile-layer-navigation.php';?>
				<div class="d-flex align-items-center justify-content-end border-top w-100 p-3 bg-white position-sticky bottom-0 zindex-20">
					<button type="button" class="button w-auto mr-2 text-dark bg-secondary shadow-none border radius-5">Clear Filter</button>
					<button type="button" class="button w-auto ml-2 disabled search-filter radius-5">Select Filter</button>
				</div>
			</div> 
		  </div>
	</div>		
</div>