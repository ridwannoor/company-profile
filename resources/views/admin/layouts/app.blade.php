<!DOCTYPE html>
<html>

<!-- Mirrored from www.uxfordev.com/appify/demo/1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 01:30:15 GMT -->
<head>
	<title>Appify</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">    
	<link rel="shortcut icon" href="assets/images/favicon.ico">  
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="../../../../use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/elegant-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/pe-7-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/pe-7-icons-helper.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/jquery-steps.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/jquery-jvectormap.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dashboard-projects.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/switchery.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/nouislider.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-switch.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/shepherd-default.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/jstree-default.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/account.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dashboard-health.css') }}">	
	<link rel="stylesheet" href="//cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
	<link rel="stylesheet" href="//unpkg.com/gijgo%401.9.11/css/gijgo.min.css">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/discussion.css') }}">

	<link rel="stylesheet" href="{{ asset('admin/assets/css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/owl-carousel.css') }}">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24707561-55"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-24707561-55');
	</script>

</head>	

<body class="preload" data-trigger="tutorial">
	
	<div id="top-alert" class="alert alert-promo alert-dismissible fade show text-center" role="alert" style="display:none">
		<span id="top-alert-close" aria-hidden="true" class="icon icon_close close"></span>
		<strong>Welcome to Appify!</strong> Your trial will run out in 30 days  <a class="btn btn-success btn-sm margin-left-sm" href="pricing.html">Upgrade Now</a>
	</div>		
		
        {{--header--}}
        @include('admin.component.header')
        {{-- main-nav-wrapper --}}
        @include('admin.component.nav')
        {{-- content-wrappert --}}
        @yield('content-wrapper')
        
        {{-- sidebar --}}
        @include('admin.component.side')
		
	<!-- *****DEMO THEME CONFIG****** -->   
	{{-- <div id="config-panel" class="config-panel d-none d-sm-block">
		<div class="panel-inner">
			<a id="config-trigger" class="config-trigger config-panel-hide" href="#"><i class="fas fa-cog"></i></a>
			<div class="panel-section mb-4">
				<h5 class="panel-title">Choose Colour</h5>
				<ul id="color-options" class="list-unstyled list-unstyled">
					<li class="theme-1 active" ><a data-style="theme-1"></a></li>
					<li class="theme-2"><a data-style="theme-2" ></a></li>
					<li class="theme-3"><a data-style="theme-3" ></a></li>
					<li class="theme-4"><a data-style="theme-4" ></a></li>
				</ul>
			</div>
			<div class="panel-section">
				<h5 class="panel-title">Toggles</h5>
				<div class="checkbox">
					<label>
						<input id="demo-topalert-toggle" type="checkbox"> Top Alert
					</label>
				</div>
			</div>
			<a id="config-close" class="close" href="#"><span aria-hidden="true" class="icon icon_close"></span></a>
		</div>
	</div>		 --}}
	<script src="{{ asset('admin/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('admin/assets/js/popper.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>
	<script src="{{ asset('admin/assets/js/metisMenu.js') }}"></script>
	<script src="{{ asset('admin/assets/js/imagesloaded.js') }}"></script>
	<script src="{{ asset('admin/assets/js/chosen-jquery.js') }}"></script>
	<script src="{{ asset('admin/assets/js/masonry.js') }}"></script>
	<script src="{{ asset('admin/assets/js/pace.js') }}"></script>
	<script src="{{ asset('admin/assets/js/numeral.js') }}"></script>
	<script src="{{ asset('admin/assets/js/jquery-jvectormap.js') }}"></script>
	<script src="{{ asset('admin/assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('admin/assets/js/shepherd.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap-switch.js') }}"></script>
	<script src="{{ asset('admin/assets/js/chosen-jquery.js') }}"></script>
	<script src="{{ asset('admin/assets/js/moment.js') }}"></script>
	<script src="{{ asset('admin/assets/js/nouislider.js') }}"></script>
	<script src="{{ asset('admin/assets/js/jquery-knob.js') }}"></script>
	<script src="{{ asset('admin/assets/js/switchery.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap-switch.js') }}"></script>
	<script src="//unpkg.com/gijgo%401.9.11/js/gijgo.min.js" type="text/javascript"></script>
	<script src="{{ asset('admin/assets/js/shepherd.js') }}"></script>
	<!--// Flot Charts  -->
	<script src="{{ asset('admin/assets/js/jquery-charts-flot.js') }}"></script>
	<script src="{{ asset('admin/assets/js/jquery-flot-pie.js') }}"></script>
	<script src="{{ asset('admin/assets/js/jquery-flot-tooltip.js') }}"></script>	
	<script src="{{ asset('admin/assets/js/main.js') }}"></script>
	<script src="{{ asset('admin/assets/js/tour.js') }}"></script>
	<script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
	<script src="{{ asset('admin/assets/js/dashboard-projects.js') }}"></script>
	<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-chosen.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-rangeslider.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-bootstrap-slider.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-nouislider.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-knob.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-summernote.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-switchery.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-bootstrap-switch.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-bootstrap-datetimepicker.js') }}"></script>
	<script src="{{ asset('admin/assets/js/forms-bootstrap-colorpicker.js') }}"></script>
	<script src="{{ asset('admin/assets/js/dashboard-health.js') }}"></script>
	<script src="{{ asset('admin/assets/js/discussion.js') }}"></script>
	<script src="{{ asset('admin/assets/js/owl-carousel.js') }}"></script>
	
	<script src="{{ asset('admin/assets/js/forms-wizard.js') }}"></script>
	{{-- <script>
		$(document).ready( function () {
		$('#myTable').DataTable();
		} );
	</script> --}}
	
	<!-- Remove demo.js on your production site -->
	<script src="{{ asset('admin/assets/js/demo.js') }}"></script>
</body>

<!-- Mirrored from www.uxfordev.com/appify/demo/1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2019 01:30:20 GMT -->
</html>