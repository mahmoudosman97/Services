<!doctype html>
<html lang="en">

@include('backend.inc.head')

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<!--wrapper-->

	@include('backend.inc.sidebar')

		<!--end sidebar wrapper -->
		<!--start header -->
	@include('backend.inc.header')	
		<!--end header -->
		<!--start page wrapper -->
		
		<div class="app-content content">
			<div class="content-overlay"></div>
			<div class="content-wrapper">
				<div class="content-header row">
				</div>
				<div class="content-body">
					@yield('content')
				</div>
			</div>
		</div>

		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('backend.inc.footer')
	</div>
	<!--end wrapper-->


	<!-- search modal -->
   
		




	<!--start switcher-->
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	
    @include('backend.inc.script')

</body>

</html>