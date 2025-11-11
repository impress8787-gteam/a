<!--menu-->
<script src="/asset/js/jquery-common.js"></script>
<!--menu-->

 <!--   foot_menu_下開く  --> 
<script>
$(function(){
	$(".accordionbox dt").on("click", function() {
		$(this).next().slideToggle();	
		// activeが存在する場合
		if ($(this).children(".accordion_icon").hasClass('active')) {			
			// activeを削除
			$(this).children(".accordion_icon").removeClass('active');				
		}
		else {
			// activeを追加
			$(this).children(".accordion_icon").addClass('active');			
		}			
	});
});    
</script>
 <!--   foot_menu_下開く   --> 

<!--   topへ   --> 	
<script>
	$(function(){
  var pagetop = $('#page_top');
  // ボタン非表示
  pagetop.hide();

  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
     $('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});
</script>
<!--   topへ   --> 