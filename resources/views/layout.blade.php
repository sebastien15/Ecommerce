<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			@include('partials._topNav')
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			@include('partials._middleNav')
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			@include('partials._bottomNav')
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	@yield('content')
	
    @include('partials._footer')
    @include('partials._scripts')
</body>
</html>