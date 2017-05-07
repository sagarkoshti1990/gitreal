<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
	@include('layouts.partials.htmlheader')
@show
<body class="{{ \App\Models\LAConfigs::getByKey('skin') }} {{ \App\Models\LAConfigs::getByKey('layout') }} @if(\App\Models\LAConfigs::getByKey('layout') == 'sidebar-mini') sidebar-collapse @endif" bsurl="{{ url('') }}" adminRoute="{{ config('laraadmin.adminRoute') }}">
<div class="wrapper">
	
	@include('layouts.partials.mainheader')
	
	@if(\App\Models\LAConfigs::getByKey('layout') != 'layout-top-nav')
		@include('layouts.partials.sidebar')
	@endif

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		@if(\App\Models\LAConfigs::getByKey('layout') == 'layout-top-nav') <div class="container"> @endif
		@if(!isset($no_header))
			@include('layouts.partials.contentheader')
		@endif
		
		<!-- Main content -->
		<section class="content {{ $no_padding or '' }}">
			<!-- Your Page Content Here -->
			@yield('main-content')
		</section><!-- /.content -->

		@if(\App\Models\LAConfigs::getByKey('layout') == 'layout-top-nav') </div> @endif
	</div><!-- /.content-wrapper -->

	@include('layouts.partials.controlsidebar')

	@include('layouts.partials.footer')

</div><!-- ./wrapper -->

@include('layouts.partials.file_manager')

@section('scripts')
	@include('layouts.partials.scripts')
@show

</body>
</html>
