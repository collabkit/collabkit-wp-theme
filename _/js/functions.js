(function($){
	$(document).ready(function (){
		$("#demo-video-link").fancybox({
			'padding': 0,
			'autoScale': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'width': 814,
			'height': 458,
			'href': 'http://vimeo.com/moogaloop.swf?clip_id=22428176',
			'type': 'swf'
		});
		$('#searchsubmit').attr('disabled', 'disabled');
		$('#s').bind('change keypress click cut paste', function() {
			var $this = $(this);
			setTimeout(function() {
				if ($this.val() === '') {
					$('#searchsubmit').attr('disabled', 'disabled');
				} else {
					$('#searchsubmit').removeAttr('disabled');
				}
			}, 0);
		});
	});
})(window.jQuery);