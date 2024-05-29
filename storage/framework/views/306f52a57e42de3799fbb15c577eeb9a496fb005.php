<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $__env->yieldContent("my_title"); ?> | <?php echo e(config('app.name')); ?></title>
	<link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('public/dist/img/favicon.ico')); ?>"/>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/fontawesome-free/css/all.min.css')); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/jqvmap/jqvmap.min.css')); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/dist/css/adminlte.min.css')); ?>">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/daterangepicker/daterangepicker.css')); ?>">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/summernote/summernote-bs4.css')); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/dist/css/style.css')); ?>">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/select2/css/select2.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/dist/css/toastr.min.css')); ?>">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo e(URL::asset('public/plugins/summernote/summernote-bs4.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed text-sm">
        
				
				
		
		<?php echo $__env->make('loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="wrapper">
           <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
			<footer class="main-footer">
				<strong>Copyright &copy; 2024 <a href="https://amanigo.com/">AmaniGo</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
					<b>Version</b> 0.0.1
				</div>
			</footer>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
    </div><!--wrapper-->
		<!-- jQuery -->
		<script src="<?php echo e(URL::asset('public/plugins/jquery/jquery.min.js')); ?>"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?php echo e(URL::asset('public/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
            $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Select2 -->
		<script src="<?php echo e(URL::asset('public/plugins/select2/js/select2.full.min.js')); ?>" defer></script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo e(URL::asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
		<!-- ChartJS -->
		<script src="<?php echo e(URL::asset('public/plugins/chart.js/Chart.min.js')); ?>"></script>
		<!-- Sparkline -->
		<script src="<?php echo e(URL::asset('public/plugins/sparklines/sparkline.js')); ?>"></script>
		<!-- JQVMap -->
		<script src="<?php echo e(URL::asset('public/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?php echo e(URL::asset('public/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
		<!-- daterangepicker -->
		<script src="<?php echo e(URL::asset('public/plugins/moment/moment.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('public/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?php echo e(URL::asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
		<!-- Summernote -->
		<script src="<?php echo e(URL::asset('public/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
		<!-- overlayScrollbars -->
		<script src="<?php echo e(URL::asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo e(URL::asset('public/dist/js/adminlte.js')); ?>"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo e(URL::asset('public/dist/js/pages/dashboard.js')); ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo e(URL::asset('public/dist/js/demo.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('public/js/inc.func.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('public/dist/js/toastr.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('public/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
		<?php echo $__env->make('js_functions.inc_func', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
	function lead_alert() {
        
            
            
            
            
                
                    
                

            
        
    }
    // $(document).ready(function () {
    //     setInterval(lead_alert,100000);
    // })
</script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script type="text/javascript">
	var pusher = new Pusher('5b61c38692b9d9d203fb', {
		encrypted: true,
		"cluster":'ap2'
	});
	// Subscribe to the channel we specified in our Laravel Event
	var channel = pusher.subscribe('notification-send');
	// Bind a function to a Event (the full Laravel class)
	channel.bind('App\\Events\\NotificationEvent', function(data) {
		toastr.success(data.message);
	});
	// Enable pusher logging - don't include this in production
	//Pusher.logToConsole = true;
</script>
</body>
</html>
<?php /**PATH E:\xampp_8.2\htdocs\pp\amani-go\resources\views/layouts/app.blade.php ENDPATH**/ ?>