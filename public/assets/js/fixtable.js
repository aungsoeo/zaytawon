(function ($) {
  $.fn.fixtable = function () {

	  var $this = $(this),
		  $thead = $this.find('thead').data('fixed',false),
		  $clone = $thead.clone().css({'position':'fixed','top':'0'}),
		  $window = $(window),
		  $theadTop =  $thead.offset().top;

	  $window.scroll(function(){
		  if($window.scrollTop() > $theadTop && $thead.data('fixed') === false){
			  clone_original_width();
			  $thead
				  .after($clone)
				  .data('fixed',true);
		  }

		  else if($window.scrollTop() < $theadTop){
			  $clone.remove();
			  $thead.data('fixed',false);
		  }
	  }).resize(function(){
			clone_original_width();
	  });


	var clone_original_width = function(){
		$thead.find('th').each(function(i){
			$clone.find('th')
				.eq(i)
				.css({'width' : $(this).width() + 17});
		});
	};

	clone_original_width(); // call once
	return $this;

  }
})(jQuery);
