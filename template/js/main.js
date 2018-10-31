/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	if($("div.left-sidebar").is(':visible')){
		var leftMenuTop=$("div.left-sidebar").offset().top;
		$(document).scroll(function() {
			if(window.pageYOffset>=leftMenuTop){
				$("div.left-sidebar").css('position', 'fixed').css('top', '50px');
			}else{
				$("div.left-sidebar").css('position', 'inherit').css('top', 'inherit');
			}
		});
	}

	$(".phonNumber").mask('+375-(99)-999-99-99');

	$('.add-to-cart').click(function(){
		var id=$(this).attr('data-id');
		addInCart(id);
		return false;
	});

	$('.bxr-quantity-button-plus').click(function(){
		var id=$(this).parent().parent().attr('data-id');
		addInCart(id);
		var cur_result=$(this).parent().find('.bxr-quantity-text').text();
		$(this).parent().find('.bxr-quantity-text').html(++cur_result);
		return false;
	});

	$('.bxr-quantity-button-minus').click(function(){
		var id=$(this).parent().parent().attr('data-id');
		
		var cur_result=$(this).parent().find('.bxr-quantity-text').text();
		if(cur_result>1){
			reduceFromCart(id);
			$(this).parent().find('.bxr-quantity-text').html(--cur_result);
		}
		
		return false;
	});
	
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});

	function addInCart(id){
		$.post("/phpShop/cart/addAjax/"+id, {}, function (data) {
			$("#cart-count").html(data);
			return;
		});
	}

	function reduceFromCart(id){
		$.post("/phpShop/cart/reduceAjax/"+id, {}, function (data) {
			$("#cart-count").html(data);
			return;
		});
	}

});
