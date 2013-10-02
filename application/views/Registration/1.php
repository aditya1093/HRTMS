<div class="slimScrollDiv">
									<div id="chat_div" class="dialogs">
										
									</div>

									<div class="slimScrollBar ui-draggable">
									</div>
									<div class="slimScrollRail">
									</div>
									
								</div>

								/* Initialize Scroll */
	    $('.slimScrollDiv').slimScroll({
	        height: '400px',
	        size: '10px',
	        alwaysVisible: true,
	        start: 'bottom'
	    });

	    var selectedTab = localStorage['selectedTab'];
				if (selectedTab) $('#myTab a[href="'+selectedTab+'"]').tab('show');

				$('a[data-toggle="tab"]').on('shown', function (e) {
				   localStorage['selectedTab']=$(e.target).attr('href');
				});	