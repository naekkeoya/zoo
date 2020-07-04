@yield ('update_content')
<li class=''><a href='{% url 'post-create' %}'>Analizar</a></li>
<li class=''><a href='{{ route('backpack.account.info') }}'>Perfil </a></li>
<li class=''><a href='{{ backpack_url('logout') }}'>  Cerrar Sesión</a></li>
@if( Auth::check())
<p>Hay un usuario</p>
@else
<p>No hay usuario</p>
@endif
