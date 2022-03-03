<script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
	<script src="./vendor/owl-carousel/owl.carousel.js"></script>
	<script src="./vendor/select2/js/select2.full.min.js"></script>
	<script src="./js/plugins-init/select2-init.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				left:true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive:{
					0:{
						items:1
					},
					484:{
						items:2
					},
					882:{
						items:3
					},	
					1200:{
						items:2
					},			
					
					1540:{
						items:3
					},
					1740:{
						items:4
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>


<!-- Form Steps -->
<script src="./vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
	
		 <!-- Form validate init -->
		 <script src="./js/plugins-init/jquery.validate-init.js"></script>
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>