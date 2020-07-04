<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
  <link rel='icon' href="{{ asset('/z-temp.ico') }}" >
  @include('vendor.zoodex.base.head')



</head>
<body class="app flex-row align-items-center">

  @yield('header')

  <div class="container">
  @yield('content')
  </div>

  <footer class="app-footer sticky-footer">
    @include('backpack::inc.footer')
  </footer>

  @yield('before_scripts')
  @stack('before_scripts')

  @include(backpack_view('inc.scripts'))

  @yield('after_scripts')
  @stack('after_scripts')

</body>
</html>

<!-- //More scripts ... CAMBIAR A ARCHIVO  -->
<script>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
	close[i].onclick = function(){
		var div = this.parentElement;
		div.style.opacity = '0';
		setTimeout(function(){ div.style.display = 'none'; }, 600);
	}
}


</script>


<script>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
close[i].onclick = function(){
	var div = this.parentElement;
	div.style.opacity = '0';
	setTimeout(function(){ div.style.display = 'none'; }, 600);
}
}
</script>
