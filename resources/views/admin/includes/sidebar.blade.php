<!-- sidebar menu -->

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
		<h3>General</h3>
		<ul class="nav side-menu">
			<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ route('home-admin') }}">Dashboard</a></li>
				</ul>
			</li>
      <li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ route('users.index') }}">Listar</a></li>
          <li><a href="{{ route('users.create') }}">Novo Usuário</a></li>
				</ul>
			</li>
      <li><a><i class="fa fa-desktop"></i> Portfolio <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ route('portfolio.index') }}">Listar</a></li>
          <li><a href="{{ route('portfolio.create') }}">Novo portfolio</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-terminal"></i> Habilidades <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ route('skills.index') }}">Listar</a></li>
          <li><a href="{{ route('skills.create') }}">Nova habilidade</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-code"></i> Certificados <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ route('certificates.index') }}">Listar</a></li>
          <li><a href="{{ route('certificates.create') }}">Novo certificado</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-envelope-o"></i> Mensagens <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{{ route('messages.index') }}">Listar</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- /sidebar menu -->


