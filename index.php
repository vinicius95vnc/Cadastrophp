<?php
$login_cookie = $_COOKIE['login'];

if(isset($login_cookie)){
	echo "Bem-Vindo, $login_cookie <br>";

	echo "Essas informações <font color='red'>podem</font> ser acessadas por você";
}
else {
	echo "Bem VIndo Convidado <br>";

	echo "Essas Informações <font color='red'> Não Podem </font> ser acessadas por você";

	echo "<br><a href='login.html'>Faça Login</a>Para ler o conteúdo";
}

