
<fieldset>
    <legend><p>Dados do Usuário</p></legend>
    <form id="cadastro" name="signup" method="post" action="cadastroUsuario/cadastrandoUsuario.php">
        <table class="tab">
        <tr><td><label>Nome:</td><td><input type="text"  name="nome"></label></td></tr> 
        <tr><td><label>Telefone:</td><td><input type="number" name="tel"></label></td></tr> 
		<tr><td><label>E-mail:</td><td><input type="text" name="email"></label></td></td></tr>
        <tr><td><label>Senha:</td><td><input type="text" name="senha"></label></td></tr> 
		<tr><td><label>Usuário :</td><td><input type="text" name="user"></label></td></tr> 
        </table>
        <br/><br/>
       	<input class="botaoForm" type="submit" name="excluir" value="Excluir">
        <input class="botaoForm" type="submit" name="pesquisar" value="Pesquisar">
        <input class="botaoForm" type="submit" name="salvar" value="Salvar">

</fieldset>
</form>


