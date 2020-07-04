<li class=''><a href='{% url 'login' %}'>Iniciar Sesión</a></li>
<li class=''><a href='{{ backpack_url('logout') }}'>Registrar </a></li>
@if( Auth::check())
<p>Hay un usuario</p>
@else
<p>No hay usuario</p>
@endif
