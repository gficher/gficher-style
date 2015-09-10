<?php
$var = 1; // Define o menu
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Página Inicial</title>
		<link rel="icon" href="favicon.ico"/>
		<meta name="Author" content="gficher"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href='css/topbar.css' rel='stylesheet' type='text/css'>
		<link href='css/form.css' rel='stylesheet' type='text/css'>
		<link href='css/message.css' rel='stylesheet' type='text/css'>
		<link href='css/sidemenu.css' rel='stylesheet' type='text/css'>
		<link href='css/content.css' rel='stylesheet' type='text/css'>
		<link href='css/pikaday.css' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div class="gs-topbar">
			<?php include_once('includes/topbar.php'); ?>
		</div>
		<div id="sidemenu" class="gs-sidemenu">
			<?php include_once('includes/menu.php'); ?>
		</div>

		<div class="gs-modal-fade"></div>
		<div class="gs-modal-content" data-mname="modal1">
			<div class="gs-modal-header">
				<button type="button" class="gs-modal-close"></button>
				<span class="gs-modal-title">Teste de Modal</span>
			</div>
			<div class="gs-modal-body">
				<p>Texto do modal aqui.</p>
			</div>
			<div class="gs-modal-footer">
				<button type="button" class="gs-btn">Fechar</button>
				<button type="button" class="gs-btn success">Salvar</button>
			</div>
		</div>

		<div id="content">
			<div id="ptitle">
				<div id="picon"></div>
				<div id="pttext">Cartilha geral</div>
			</div>

			<div class="gs-messagebox"><b>Info:</b> O arquivo foi salvo</div>
			<div class="gs-messagebox success"><b>Sucesso!</b> O arquivo foi salvo corretamente</div>
			<div class="gs-messagebox warning"><b>Alerta!</b> O arquivo foi salvo mas possui erros</div>
			<div class="gs-messagebox danger"><b>Erro!</b> O arquivo não foi salvo.</div>

			<div class="gs-cbigbox tilebox big">
				<div class="gs-tile">
					<div>Próximo simulado</div>
					<div class="gs-info">30/08/2015</div>
				</div>
				<div class="gs-tile">
					<div>Pesquisas</div>
					<div class="gs-info success">OK</div>
				</div>
				<div class="gs-tile">
					<div>Caderno</div>
					<div class="gs-info danger">Regular</div>
				</div>
				<div class="gs-tile">
					<div>Média de simulado</div>
					<div class="gs-info warning">Na média</div>
				</div>
			</div>	

			<div class="gs-cbigbox">
				<div class="gs-btitle">Blocos de alerta<div class="gs-bsubtitle">Criados por um gatilho</div></div>
				<input class="gs-btn" type="submit" name="button" id="button" value="Normal">
				<input class="gs-btn delete" type="submit" name="button" id="button" value="Danger">
				<input class="gs-btn warning" type="submit" name="button" id="button" value="Warning">
				<input class="gs-btn success" type="submit" name="button" id="button" value="Success">
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Informações<div class="gs-bsubtitle">Informações básicas para acesso</div></div>
				Texto antes da lista
				<ul class="gs-infolist">
					<li><b>Endereço de SMTP:</b> smtp.dominio-smtp.dominio.com</li>
					<li><b>Porta:</b> 587| <b>SSL/TLS:</b> 465</li>
					<li><b>Email:</b> gustavoficher@hotmail.com</li>
					<li><b>Usuário:</b> batata</li>
					<li><b>Senha:</b> feijoada</li>
				</ul>
				O texto pode ser continuado aqui
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Barra de progresso<div class="gs-bsubtitle">Com animação :)</div></div>
				<div class="progressbar small"><div class="pbprogress" data-value="25" id="pb01"></div></div>
				<div class="progressbar"><div class="pbprogress" data-value="25" id="pb02"></div></div>
				<div class="progressbar big"><div class="pbprogress" data-value="25" id="pb03"></div></div>

				<input class="gs-btn delete small autosize" type="submit" name="button" id="button" value="0%" data-action="pupdate" data-target="pb01" data-value="0">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="25%" data-action="pupdate" data-target="pb01" data-value="25">
				<input class="gs-btn warning small autosize" type="submit" name="button" id="button" value="50%" data-action="pupdate" data-target="pb01" data-value="50">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="75%" data-action="pupdate" data-target="pb01" data-value="75">
				<input class="gs-btn success small autosize" type="submit" name="button" id="button" value="100%" data-action="pupdate" data-target="pb01" data-value="100">
				<hr class="gs-hr invisible">
				<input class="gs-btn delete small autosize" type="submit" name="button" id="button" value="0%" data-action="pupdate" data-target="pb02" data-value="0">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="25%" data-action="pupdate" data-target="pb02" data-value="25">
				<input class="gs-btn warning small autosize" type="submit" name="button" id="button" value="50%" data-action="pupdate" data-target="pb02" data-value="50">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="75%" data-action="pupdate" data-target="pb02" data-value="75">
				<input class="gs-btn success small autosize" type="submit" name="button" id="button" value="100%" data-action="pupdate" data-target="pb02" data-value="100">
				<hr class="gs-hr invisible">
				<input class="gs-btn delete small autosize" type="submit" name="button" id="button" value="0%" data-action="pupdate" data-target="pb03" data-value="0">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="25%" data-action="pupdate" data-target="pb03" data-value="25">
				<input class="gs-btn warning small autosize" type="submit" name="button" id="button" value="50%" data-action="pupdate" data-target="pb03" data-value="50">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="75%" data-action="pupdate" data-target="pb03" data-value="75">
				<input class="gs-btn success small autosize" type="submit" name="button" id="button" value="100%" data-action="pupdate" data-target="pb03" data-value="100">
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Teste de tabela</div>

				<input class="gs-ftext" type="text" name="username" id="tsearch1" placeholder="Pesquisar" data-action="tsearch">
				<div id="pager1" class="gs-tpager"></div>

				<table id="table1" class="gs-table" data-tpager="pager1" data-tsearch="tsearch1">
					<thead>
						<tr>
							<th>Título</th>
							<th>Enviado por</th>
							<th>Prioridade</th>
							<th>Data</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="" title="">Matioli S2</a></td>
							<td>Gustavo Ficher</td>
							<td>Alta</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Manda nudes, gatinha</a></td>
							<td>Rafael Guerreiro</td>
							<td>Urgente</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">To marombando, já volto...</a></td>
							<td>Rafael Bonin</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Eu falo poRRRta</a></td>
							<td>Marília Lup</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Não sou Felipe</a></td>
							<td>Luana Felipe</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Shift, Shift, Shift!</a></td>
							<td>Luca Morais</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Amo SENAI</a></td>
							<td>Rafael Guerra</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small delete" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<?php
for ($i = 0; $i < 0; $i++) {
	echo '
						<tr>
							<td><a href="" title="">Eu criei tudo isso aqui</a></td>
							<td>Gustavo Ficher</td>
							<td>Alta</td>
							<td>21/04/1999 às 03:00 PM</td>
						</tr>
						<tr>
							<td><a href="" title="">Manda nudes, gatinha</a></td>
							<td>Rafael Guerreiro</td>
							<td>Urgente</td>
							<td>21/04/1999 às 03:00 PM</td>
						</tr>
						<tr>
							<td><a href="" title="">To marombando</a></td>
							<td>Rafael Bonin</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
						</tr>
						<tr>
							<td><a href="" title="">PoRRRta</a></td>
							<td>Marília Lup</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
						</tr>
						<tr>
							<td><a href="" title="">Não sou Felipe</a></td>
							<td>Luana Felipe</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
						</tr>';
}
						?>
					</tbody>
				</table>
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Teste de gráfico</div>
				<canvas class="gs-graph" id="graphCadastros" height="50"></canvas>
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Teste de formulário</div>
				<form name="form1" method="post" action="">

					<label class="gs-flabel">
						<b>Data</b>
						<input class="gs-ftext" type="text" name="fdata" id="fdata" placeholder="dd/mm/yyyy">
					</label>

					<hr class="gs-hr">

					<label class="gs-flabel">
						<b>Título</b>
						<input class="gs-ftext" type="text" name="username" id="username">
					</label>

					<label class="gs-flabel">
						<b>Título</b>
						<select class="gs-fselect" name="select1" id="select1">
							<optgroup label="Teste 1">
								<option value="1" selected="selected">Teste</option>
								<option value="2">Batata</option>
								<option value="3">Teste do nome do Edit</option>
							</optgroup>
							<optgroup label="Teste 2">
								<option value="4">Teste</option>
								<option value="5">Batata</option>
								<option value="6">Teste do nome do Edit</option>
							</optgroup>
						</select>
					</label>

					<label class="gs-flabel">
						<b></b>
						<select class="gs-fselect" name="select2" id="select2">
							<optgroup label="Teste 1">
								<option value="1" selected="selected">Teste</option>
								<option value="2">Batata</option>
								<option value="3">Teste do nome do Edit</option>
							</optgroup>
							<optgroup label="Teste 2">
								<option value="4">Teste</option>
								<option value="5">Batata</option>
								<option value="6">Teste do nome do Edit</option>
							</optgroup>
						</select>
					</label>

					<label class="gs-flabel">
						<b>Título</b>
						<input class="gs-ftext" type="text" name="username" id="username">
					</label>

					<hr class="gs-hr">

					<label class="gs-flabel success">
						<b>Título</b>
						<input class="gs-ftext" type="text" name="username" id="username">
					</label>
					<label class="gs-flabel warning">
						<b>Título</b>
						<input class="gs-ftext" type="text" name="username" id="username">
					</label>
					<label class="gs-flabel danger">
						<b>Título</b>
						<input class="gs-ftext" type="text" name="username" id="username">
					</label>

					<hr class="gs-hr">

					<label class="gs-flabel">
						<b>URL Normal</b>
						<div class="gs-prefix">
							<span class="gs-prefix-text left">URL</span><input class="gs-ftext gs-withpre left" type="text" name="username" id="username">
						</div>
					</label>
					<label class="gs-flabel">
						<b>Subdomínio</b>
						<div class="gs-prefix">
							<span class="gs-prefix-text left">http://</span><input class="gs-ftext gs-withpre both" type="text" name="username" id="username"><span class="gs-prefix-text right">.gficher.tk</span>
						</div>
					</label>
					<label class="gs-flabel">
						<b>Subdomínio</b>
						<div class="gs-prefix">
							<input class="gs-ftext gs-withpre right" type="text" name="username" id="username"><span class="gs-prefix-text right">batatas</span>
						</div>
					</label>

					<hr class="gs-hr">

					<label class="gs-flabel">
						<b>Campo</b>
						<input class="gs-ftext" type="text" name="username" id="username" disabled placeholder="Endereço">
					</label>
					<label class="gs-flabel">
						<b>Desabilitado</b>
						<input class="gs-ftext" type="text" name="username" id="username" disabled placeholder="Endereço">
					</label>

					<hr class="gs-hr">

					<label class="gs-flabel ">
						<b>Nome</b>
						<input class="gs-ftext display" type="text" name="username" id="username" value="Gustavo Ficher Catarino" readonly>
					</label>
					<label class="gs-flabel">
						<b>RG</b>
						<input class="gs-ftext display" type="text" name="username" id="username" value="0000000000-0" readonly>
					</label>
					<label class="gs-flabel">
						<b>CPF</b>
						<input class="gs-ftext display" type="text" name="username" id="username" value="000.000.000-00" readonly>
					</label>
					<label class="gs-flabel">
						<b>Nascimento</b>
						<input class="gs-ftext display" type="text" name="username" id="username" value="21/04/1999" readonly>
					</label>
					<label class="gs-flabel">
						<b>Senha</b>
						<input class="gs-ftext display" type="password" name="username" id="username" value="Até parece kkkk" readonly>
					</label>

					<hr class="gs-hr">




					<label class="gs-flabel">
						<b>Tiny</b>
						<input class="gs-ftext tiny" type="text" name="username" id="username" value="GF">
					</label>
					<label class="gs-flabel">
						<b>Small</b>
						<input class="gs-ftext small" type="text" name="username" id="username" value="Gustavo">
					</label>
					<label class="gs-flabel">
						<b>Medium</b>
						<input class="gs-ftext medium" type="text" name="username" id="username" value="Gustavo Ficher">
					</label>
					<label class="gs-flabel">
						<b>Big</b>
						<input class="gs-ftext big" type="text" name="username" id="username" value="Gustavo Ficher Catarino">
					</label>
					<label class="gs-flabel">
						<b>Giant</b>
						<input class="gs-ftext giant" type="text" name="username" id="username" value="Gustavo Ficher Catarino - e ainda sobra muito espaço :)">
					</label>



					<hr class="gs-hr">

					<label class="gs-flabel">
						<input class="gs-ftext fuser" type="text" name="username" id="username" placeholder="Usuário">
					</label>
					<label class="gs-flabel">
						<input class="gs-ftext fpass" type="password" name="password" id="password" placeholder="Senha">
					</label>


					<hr class="gs-hr">

					<label class="gs-flabel">
						<b>Alternativa</b>
						<select class="gs-fselect" name="select" id="select">
							<optgroup label="Letras">
								<option value="a" selected="selected">A</option>
								<option value="b">B</option>
								<option value="c">C</option>
								<option value="d">D</option>
								<option value="e">E</option>
							</optgroup>
							<optgroup label="Opções">
								<option value="r">Rasurada</option>
								<option value="v">Em branco</option>
							</optgroup>
						</select>
					</label>
					<label class="gs-flabel">
						<b>Alternativa 2</b>
						<select class="gs-fselect autosize" name="select" id="select">
							<optgroup label="Letras">
								<option value="a" selected="selected">A</option>
								<option value="b">B</option>
								<option value="c">C</option>
								<option value="d">D</option>
								<option value="e">E</option>
							</optgroup>
							<optgroup label="Opções">
								<option value="r">Rasurada</option>
								<option value="v">Em branco</option>
							</optgroup>
						</select>
					</label>
					<label class="gs-flabel success nobreak">
						<select class="gs-fselect autosize" name="select" id="select">
							<option value="a" selected="selected">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="d">D</option>
							<option value="e">E</option>
						</select>
					</label>
					<label class="gs-flabel warning nobreak">
						<select class="gs-fselect autosize" name="select" id="select">
							<option value="a" selected="selected">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="d">D</option>
							<option value="e">E</option>
						</select>
					</label>
					<label class="gs-flabel danger nobreak">
						<select class="gs-fselect autosize" name="select" id="select">
							<option value="a" selected="selected">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="d">D</option>
							<option value="e">E</option>
						</select>
					</label>
					<label class="gs-flabel">
						<b>Teste</b>
						<select class="gs-fselect autosize" name="select" id="select">
							<option value="a" selected="selected">Anta</option>
							<option value="b">Batata</option>
							<option value="c">Canja</option>
							<option value="d">Dado</option>
							<option value="e">Elefante</option>
						</select>
					</label>

					<hr class="gs-hr">

					<fieldset class="gs-itemgroup">
						<b>Título</b>
						<label>
							<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
							Opção 1
						</label>
						<label>
							<input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
							Opção 2
						</label>
					</fieldset>

					<fieldset class="gs-itemgroup">
						<label>
							<input type="checkbox" name="RadioGroup2" value="radio" id="RadioGroup1_0">
							Me selecione
						</label>
						<label>
							<input type="checkbox" name="RadioGroup2" value="radio" id="RadioGroup1_1">
							Azul
						</label>
						<label>
							<input type="checkbox" name="RadioGroup2" value="radio" id="RadioGroup1_2">
							Macaco
						</label>
						<label>
							<input type="checkbox" name="RadioGroup2" value="radio" id="RadioGroup1_3">
							Pudim
						</label>
					</fieldset>

					<hr class="gs-hr">

					<label class="gs-flabel">
						<b>Título</b>
						<textarea class="gs-textarea" name="textarea" id="textarea"></textarea>
					</label>
					<label class="gs-flabel danger">
						<b>Título</b>
						<textarea class="gs-textarea" name="textarea" id="textarea"></textarea>
					</label>

					<hr class="gs-hr">

					<input class="gs-btn" type="submit" name="button" id="button" value="Entrar">

					<input class="gs-btn small" type="submit" name="button" id="button" value="Entrar">
					<input class="gs-btn big" type="submit" name="button" id="button" value="Entrar">
					<input class="gs-btn giant" type="submit" name="button" id="button" value="Entrar">

					<input class="gs-btn delete" type="submit" name="button" id="button" value="Teste">
					<input class="gs-btn warning" type="submit" name="button" id="button" value="Botão">
					<input class="gs-btn success" type="submit" name="button" id="button" value="Outro teste">
				</form>
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Teste de texto</div>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in lorem bibendum, dapibus odio vel, condimentum leo. Morbi sit amet neque vitae dolor feugiat aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sed placerat leo, ac dignissim sem. Ut nec volutpat urna. Praesent non massa ligula. Aenean vel venenatis quam. Fusce pretium diam elit, eget ultricies odio maximus sed. Aliquam in iaculis ante, porttitor molestie odio. Mauris at egestas velit, non commodo justo. Nulla blandit porta metus vel feugiat. Quisque fringilla fringilla bibendum. Aenean non fermentum justo. Praesent eget sapien nulla. Nam tristique, leo nec consequat sollicitudin, nunc neque imperdiet nulla, et pulvinar diam nisl a arcu.
				<br><br>
				Donec id elementum nisl, nec porttitor dolor. Vestibulum nec viverra dolor. Maecenas nec consectetur tortor, ut pretium lacus. Nunc lobortis, magna congue ornare euismod, turpis massa dignissim erat, eu condimentum nunc lectus id ipsum. Duis quis placerat quam, ut pellentesque lorem. Duis non tincidunt nisi, elementum hendrerit justo. Pellentesque rutrum erat at erat varius, pretium porttitor lorem rhoncus. Integer ut ipsum interdum, tincidunt nulla at, varius mi. Aliquam vel viverra ipsum. In est leo, convallis vel diam sit amet, tempor tempus urna. Etiam sed vulputate libero. Vestibulum augue mi, luctus sed odio eu, viverra auctor erat. Pellentesque fringilla luctus felis, ut malesuada odio scelerisque non.
				<br><br>
				Nulla eu mollis sapien, vel auctor diam. Integer consequat hendrerit neque, non scelerisque lectus iaculis porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet justo efficitur, finibus augue ac, iaculis odio. Duis consequat mattis malesuada. Nulla convallis dui feugiat odio imperdiet, nec porttitor ex feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non libero vitae est fringilla dictum. Quisque ultrices luctus augue a placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porttitor eget nulla sit amet lacinia. Mauris lobortis malesuada accumsan. Fusce mattis tincidunt quam. Curabitur bibendum lacus hendrerit placerat ullamcorper. Nulla sollicitudin sollicitudin orci, quis pretium purus feugiat ut. Proin vehicula elit ac dictum egestas.
			</div>
		</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/content.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="js/pikaday.js"></script>
		<script type="text/javascript">
			var cadastrosData = {
				labels : ['Simulado 1','Simulado 2','Simulado 3','Simulado 4','Simulado 5','Simulado 6','Simulado 7'],
				datasets : [
					{
						label: "Média geral",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [7,5,6,5,4,8,6]
					},
					{
						label: "Sua nota",
						fillColor : "rgba(41,39,63,.2)",
						strokeColor : "#29273F",
						pointColor : "#4A4774",
						pointStrokeColor : "#29273F",
						pointHighlightFill : "#B4B1CF",
						pointHighlightStroke : "#29273F",

						data : [5,9,7,2,10,3,7]
					}
				]
			}

			window.onload = function() {
				var ctx = document.getElementById("graphCadastros").getContext("2d");
				window.graphCadastros = new Chart(ctx).Line(cadastrosData, {
					responsive: true,
					multiTooltipTemplate: "<%=datasetLabel%>: <%= value %>",
				});

				//window.location = '#top';
			}

			var picker = new Pikaday({
				field: $('#fdata')[0],
				format: 'DD/MM/YYYY',
			});

		</script>
	</body>
</html>