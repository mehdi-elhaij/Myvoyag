<nav id="main-header" class="navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand" href="#">
		<img src="{{ asset('imgs/logo-jacobs.png') }}" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	 aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse ml-2" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link {{$_SERVER['REQUEST_URI'] == '/' ? 'active-header' : ''}}  " href="{{ url('/') }}">Acceuil
					<span class="sr-only">(current)</span>
				</a>
			</li>
			@if(Auth::user()->type == 'admin')
				<li class="nav-item ">
					<a class="nav-link {{$_SERVER['REQUEST_URI'] == '/hotels' ? 'active-header' : ''}} " href="{{ url('/hotels') }}">Hotels <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item ">
					<a class="nav-link {{$_SERVER['REQUEST_URI'] == '/sites' ? 'active-header' : ''}} " href="{{ url('/sites') }}">Sites <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item ">
					<a class="nav-link {{$_SERVER['REQUEST_URI'] == '/users' ? 'active-header' : ''}} " href="{{ url('/users') }}">Utilisateurs <span class="sr-only">(current)</span></a>
				</li>
			@endif

		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		</form>
		
		<div class="dropdown ml-2">
			<a  href="#" class="dropdown-toggle" role="button" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img class="avatar rounded-circle" src="/uploads/avatars/{{ Auth::user()->avatar }}" alt="">
			</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
				<a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
				<a href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"  class="dropdown-item">Deconnecter</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
				</form>
			</div>
		</div>

	</div>
</nav>