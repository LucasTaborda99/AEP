<fieldset>
	<legend><p>Dados do Equipamento</p></legend>
	<form id="cadastro" name="signup" method="post" action="cadastrandoEquipamento">
	<table class="tab">
	<tr><td><p>Nome:</td><td><input type="text"  name="nome"></p></td></tr> 
	<tr><td><p>Marca:</td><td><input type="text" name="marca"></p></td></tr> 
	<tr><td><p>Modelo:</td><td><input type="text" name="modelo"></p></td></tr>
	</table> 
	<p>Tipo:</p><br/>
	<label><p><input type="radio" name="radio" value="1">Audio</p></label>
	<label><p><input type="radio" name="radio"  value="2">Instrumento</p></label>
	<br/><br/>
		<input class="botaoForm" type="submit" name="excluir" value="Excluir">
        <input class="botaoForm" type="submit" name="pesquisar" value="Pesquisar">
        <input class="botaoForm" type="submit" name="salvar" value="Salvar">
    </form>
</fieldset>