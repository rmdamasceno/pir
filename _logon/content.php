<?php
	$acesslevel="annonymous";
	$readmenu="no";
	$title="Logon";
	$mainconent='<form action="\_secur\auth.php" method="post">
<div id="label">LOGIN</div>
<div class="container"><label>Usu&aacute;rio:</label> <input name="user" required="" type="text" placeholder="  =&gt; CPF &lt;=" />
<p><label>Senha:</label> <input name="pass" required="" type="password" placeholder="  =&gt; SENHA &lt;=" /> <!--<p>
				    <span class="alterchar"><input type="checkbox" checked="checked"> Lembrar-se de mim</span>--></p>
</div>
<div class="container"><button type="submit">Entrar</button> <span id="restpwd" class="alterchar"> <a href="#">Esqueci minha senha</a></span></div>
</form>';
?>