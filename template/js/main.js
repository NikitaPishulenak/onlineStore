/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	// $("div#history").hide();
	// if($("div.left-sidebar").is(':visible')){
	// 	var leftMenuTop=$("div.left-sidebar").offset().top;
	// 	$(document).scroll(function() {
	// 		if(window.pageYOffset>=leftMenuTop){
	// 			$("div.left-sidebar").css('position', 'fixed').css('top', '50px');
	// 		}else{
	// 			$("div.left-sidebar").css('position', 'inherit').css('top', 'inherit');
	// 		}
	// 	});
	// }

	// $(".phonNumber").mask('+375-(99)-999-99-99');

	$('.add-to-cart').click(function(){
		var id=$(this).attr('data-id');
		addInCart(id);
		return false;
	});
	
	$('.remove-btn').click(function(){
		var id=$(this).attr('data-idProduct');
		$.post("/phpShop/cart/delete/"+id, {}, function () {
			location.reload();
		});
		return false;
	});

	$('span.delProduct').click(function(){
		var id=$(this).attr('data-idOrder');
		var isDel=confirm("Вы действительно хотите отменить заказ #"+id);
        if(isDel){
			$.post("/phpShop/cabinet/order/delete/"+id, {}, function () {
				location.reload();
			});
		}
		return false;
	});

	$('.bxr-quantity-button-plus').click(function(){
		var id=$(this).parent().parent().attr('data-id');
		addInCart(id);
		var cur_result=$(this).parent().find('.bxr-quantity-text').text();
		$(this).parent().find('.bxr-quantity-text').html(++cur_result);
		countProductInCart();
		return false;
	});

	$('.bxr-quantity-button-minus').click(function(){
		var id=$(this).parent().parent().attr('data-id');
		
		var cur_result=$(this).parent().find('.bxr-quantity-text').text();
		if(cur_result>1){
			reduceFromCart(id);
			$(this).parent().find('.bxr-quantity-text').html(--cur_result);
			countProductInCart();
		}
		
		return false;
	});

	$('button.completed_order').click(function(){
		$(this).hide(400);
		$("#orderForm").show(600);
	});

	$('div#search').click(function(){
		var searchText=$("input#textSearch").val();
		if(searchText!=""){
			$.post("/phpShop/search/"+searchText, {}, function (data) {
				$("section").html(data);
				return;
			});
		}
	});

	$('div').delegate(".flack", "mouseover", function (e) {
        $(this).find(".advtImg").css({ 'top': '-25px', 'opacity': '1', 'transition': '.3s ease-in-out' });
    });

    $('div').delegate(".flack", "mouseout", function () {
		$(this).find(".advtImg").css({ 'top': '0', 'opacity': '0.5', 'transition': '.3s ease-in-out' });
    });
	

	// $('a.loginInp').hover(function(){
	// 	$("div#history").show();
	// 	$(".popup-content #content").html('<a href="/phpShop/register"><i class="fa fa-archive"></i> Регистрация</a>');
	// 	var widHistory=$("div#history").width();
	// 	$("#history").css("top", Number($(this).offset().top + 25));
	// 	$("#history").css("left", Number($(this).offset().left - widHistory/2+20));
	// 	$(document).mouseout(function (e) {
	// 		// if (!$("#history").is(e.target) && $("#history").has(e.target).length === 0) { // и не по его дочерним элементам
    //             $("div#history").hide();
    //         // }
	// 	});

	// 	// $("input#login").click(function(){
	// 	// 	var email=$("#history input.email").val();
	// 	// 	var pwd=$("#history input.password").val();
	// 	// 	if( (email !="") && (pwd !="") ){
	// 	// 		console.log("send");
	// 	// 		$.post("/phpShop/login/"+email+"/"+pwd, {}, function () {
	// 	// 			// location.reload();
	// 	// 		});
	// 	// 	}
	// 	// 	else{
	// 	// 		console.log("kjqqq");
	// 	// 	}
	// 	// });
	// });

	document.addEventListener('keydown', function (e) {
		if (e.keyCode == 13) {
			if($("input#textSearch").is( ":focus" )){
				$('div#search').click();
				return false;
			}
		}
	}, false);
	
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

	function countProductInCart(){
		var total=0;
		var count=0;
		$('.bxr-quantity-text').each(function(){
			count+=Number($(this).text());
			total+=Number($(this).text())*Number($(this).parent().parent().find('.price').text().replace(/руб./g,'').trim());
		});
		$('div.total_count').html(count+" шт.");
		$('div.total_cost').html(total+" руб.");
	}

});
