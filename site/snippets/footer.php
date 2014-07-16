	<!-- jQuery files -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php echo js('assets/js/bootstrap.js') ?>
	<?php echo js('assets/js/magnific-popup.js') ?>
	<?php echo js('assets/js/custom.js') ?>
	<?php echo js('assets/js/gmap.js') ?>
	<?php echo js('assets/js/smart-submit.js');?>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<script>
	
	$(function() {
		$(".staff-summary").slideUp(50);
	});
	
	var staffnames = $(".staff-section .staff-summary").parents().name();
	var arr = $.makeArray(staffnames);
	$("section#staff :first-child").addClass("test");
	
	$("* .picinfo").click(function() {
		$(this).removeClass("picinfo");
		$(this).addClass("picinfoopen");
		$(".staff-summary").slideDown(100).delay(8000).slideUp(100);
		$(this).removeClass("picinfoopen");
		$(this).addClass("picinfo");
		alert( "Handler for .click() called." );	
	});

	$(".picinfoopen").click(function() {
		$(".staff-summary").slideUp(100);
		$(this).removeClass("picinfoopen");
		$(this).addClass("picinfo");
		alert( "Handler for .click() called." );	
	});
	
	</script>

</body>
</html>