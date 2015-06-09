<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
	$("#wrapper").toggleClass("toggled");
	});



	$(document).ready(function () { $('#page-content-wrapper').hide().fadeIn("slow")});
	
	$(document).ready(function () {
		$('h1').hide().slideDown("slow").delay(60000)
	});
</script>


<script>
$(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.panel-collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            $(this).text('Collapse all');
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('Expand all');
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});
</script>


<script src="javascripts/back-to-top-main.js"></script>
<script src="javascripts/modernizr.js"></script>