<?php
if (isset($var))
	if ($var == 1) {
?>
<ul>
	<li class="separator">
		<a class="icon user-secret">Administrador</a>
	</li>
	<li>
		<a href="panel.php" class="icon home">Página inicial</a>
	</li>
	<li>
		<a href="panel2.php" class="icon home">Página 2</a>
	</li>
	<li>
		<a href="#" class="icon user">Minha conta</a>
	</li>
	<li>
		<a href="#" class="icon test">Simulados</a>
	</li>
	<li>
		<a href="#" class="icon calendar">Calendário</a>
	</li>
	<li>
		<a href="#" class="icon book">Caderno</a>
	</li>
	<li>
		<a href="#" class="icon newspaper">Pesquisas</a>
	</li>
	<li class="separator">
		<a class="icon user">Usuário</a>
	</li>
	<li>
		<a href="#" class="icon book">Meu Caderno</a>
	</li>
	<li>
		<a href="#" class="icon newspaper">Minhas Notas</a>
	</li>
</ul>
<?php
} else if ($var == 2) {
	//
}
?>