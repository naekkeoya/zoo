<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
@if (config('backpack.base.meta_robots_content'))<meta name="robots" content="{{ config('backpack.base.meta_robots_content', 'noindex, nofollow') }}"> @endif

<meta name="csrf-token" content="{{ csrf_token() }}" /> {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
<title>{{ isset($title) ? $title.' :: '.config('backpack.base.project_name') : config('backpack.base.project_name') }}</title>

<script>
    addEventListener('load', function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>


    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}" >
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('css/css_slider.css')}}" >

<div>

  <header>
    <div class='container'>
      <!-- nav -->
      <nav class='py-md-4 py-3 d-lg-flex'>
        <div id='logo'>
          <h1 class='mt-md-0 mt-2'> <a href='{{ url(config('backpack.base.home_link')) }}'><img src="{{ asset('/z-temp.png') }}"></span> Zoodex </a></h1>
        </div>
        <label for='drop' class='toggle'><span class='fa fa-bars'></span></label>
        <input type='checkbox' id='drop' />
        <ul class='menu ml-auto mt-1'>
          <li class='active'><a href='{{ url(config('backpack.base.home_link')) }}'>Inicio</a></li>
          <li class=''><a href='{% url 'zoodex-about' %}'>Sobre nosotros</a></li>
          @includeWhen(Auth::user(), 'vendor.zoodex.base.navbarlog')
          @includeWhen(Auth::guest(), 'vendor.zoodex.base.navbar')
        </ul>
      </nav>
      <!-- //nav -->
    </div>
  </header>
  <!-- //header -->

  <!-- banner -->

  <section class='banner_inner' id='home'>
    <div class='banner_inner_overlay'>
    </div>
  </section>
  <!-- // banner -->

</div>
