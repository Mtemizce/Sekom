	<!-- build:js resources/assets/js/core.min.js -->
	<script src="resources/libs/bower/jquery/dist/jquery.js"></script>
	<script src="resources/libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="resources/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="resources/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="resources/libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="resources/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="resources/libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js resources/assets/js/app.min.js -->
	<script src="resources/assets/js/library.js"></script>
	<script src="resources/assets/js/plugins.js"></script>
	<script src="resources/assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="resources/libs/bower/moment/moment.js"></script>
	<script src="resources/libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="resources/assets/js/fullcalendar.js"></script>
	<script type="text/javascript">
				$(document).ready(function(){
				  $('#usercagir').click(function(){ //hangi butona tıklanacaksa onun id
				       $('#mainajax').load('view/useradd.php'); //butona tıklandıktan sonra gerçekleşen işlem ve #div_id içine çağırılan iletisim.php dosyası
				  });
				   $('#home').click(function(){ //hangi butona tıklanacaksa onun id
				       $('#mainajax').load('view/dynamic_content.php'); //butona tıklandıktan sonra gerçekleşen işlem ve #div_id içine çağırılan iletisim.php dosyası
				  });
				});
			</script>