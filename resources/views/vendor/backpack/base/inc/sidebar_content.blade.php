<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('reptile') }}'><i class='nav-icon fa fa-frog'></i> Reptiles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('post') }}'><i class='nav-icon fa fa-edit'></i> Posts</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-id-card-alt"></i> Autenticación</a>
	<ul class="nav-dropdown-items">
	<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Usuarios</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-user-tag"></i> <span>Roles</span></a></li>
    </ul>
</li>