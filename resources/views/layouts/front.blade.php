<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BANH Form</title>

	<!-- Global stylesheets -->
	<link href="{{ asset('assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/custom.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('assets/demo/demo_configurator.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('assets/js/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/js/vendor/forms/wizards/steps.min.js')}}"></script>
	<script src="{{ asset('assets/js/vendor/forms/validation/validate.min.js')}}"></script>

	<script src="{{ asset('assets/js/app.js')}}"></script>
	<script src="{{ asset('assets/demo/pages/form_wizard.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>
    @yield('content')
    @stack('scripts')
</body>
</html>
