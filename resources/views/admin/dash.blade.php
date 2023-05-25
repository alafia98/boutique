<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles -->
        @livewireStyles

        <!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">

		<link rel="stylesheet" href="{{asset('admin/plugins/dropzone/min/dropzone.min.css')}}">

		<link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">


    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="">
            @livewire('navigation-menu')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

        </div>

        @stack('modals')

        @livewireScripts

        <!-- jQuery -->
		<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('admin/js/adminlte.min.js')}}"></script>

		<script src="{{asset('admin/plugins/dropzone/min/dropzone.min.js')}}"></script>


		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('admin/js/demo.js')}}"></script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').after('content')};
            });
        </script>

    </body>
</html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

   
   
   
   
   
   