<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('title')

  <meta name="description" content="">
  <meta name="author" content="MakassarNetwork">

	<!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap/bootstrap.css') }}" /> 
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Fonts  -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>  
    <!-- Base Styling  -->
  <link rel="stylesheet" href="{{ asset('asset/css/app.v1.css') }}" />    
</head>

<body data-ng-app>
	
    <!-- Preloader -->
    <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->
    	
    @include('module.menu')
	
    <section class="content">
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h2>MakassarNetwork</h2>
        </header>
        <!-- Header Ends -->
        
        @yield('content')
        <!-- Warper Ends Here (working area) -->
        @include('module.footer')
    </section>
    <!-- Content Block Ends Here (right box)-->
    
    <!-- JQuery v1.9.1 -->
	<script src="{{ asset('asset/js/jquery/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/js/plugins/underscore/underscore-min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('asset/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Globalize -->
    <script src="{{ asset('asset/js/globalize/globalize.min.js') }}"></script>
    <!-- NanoScroll -->
    <script src="{{ asset('asset/js/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <!-- Sparkline JS -->
    <script src="{{ asset('asset/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- For Demo Sparkline -->
    <script src="{{ asset('asset/js/plugins/sparkline/jquery.sparkline.demo.js') }}"></script>
    <!-- Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
    <!-- Custom JQuery -->
	  <script src="{{ asset('asset/js/app/custom.js') }}" type="text/javascript"></script>

    @yield('plugins')
</body>
</html>
