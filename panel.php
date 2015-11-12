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
		<meta name="description" content="gficher's style"/>
		<meta name="keywords" content="gficher,style"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<meta name="msapplication-TileColor" content="#123456"/>
		<meta name="msapplication-square150x150logo" content="square.png"/>

		<link href='css/topbar.css' rel='stylesheet' type='text/css'>
		<link href='css/form.css' rel='stylesheet' type='text/css'>
		<link href='css/message.css' rel='stylesheet' type='text/css'>
		<link href='css/sidemenu.css' rel='stylesheet' type='text/css'>
		<link href='css/content.css' rel='stylesheet' type='text/css'>
		<link href='css/pikaday.css' rel='stylesheet' type='text/css'>
		<link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div class="gs-topbar">
			<?php include_once('includes/topbar.php'); ?>
		</div>
		<div id="sidemenu" class="gs-sidemenu">
			<?php include_once('includes/menu.php'); ?>
		</div>

		<div class="gs-modal-fade">

			<div class="gs-modal-content" data-mname="modal1">
				<div class="header">
					<button type="button" class="close" data-mfunc="close"></button>
					<span class="title">Teste de Modal</span>
				</div>
				<div class="body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum, metus vel fringilla blandit, magna dolor luctus elit, eget tincidunt purus ex ut est.</p>
					<p>Suspendisse felis lorem, elementum at pharetra vel, pharetra nec nulla. Nullam metus mi, ullamcorper tincidunt eleifend id, ullamcorper sit amet turpis. Sed placerat eget nisl eget vulputate.</p>
				</div>
				<div class="footer">
					<div class="left">
						<button type="button" class="gs-btn" data-mfunc="close">Quê?</button>
					</div>
					<div class="right">
						<button type="button" class="gs-btn success" data-mfunc="close">Ah, entendi.</button>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

			<div class="gs-modal-content noclose large" data-mname="modalLorem">
				<div class="header">
					<button type="button" class="close" data-mfunc="close"></button>
					<span class="title">Termos e condições de uso</span>
				</div>
				<div class="body">
					<p>3. RESTRIÇÃO DE ACESSO.</p>

					<p>3.1. Você não pode tentar obter o acesso não autorizado aos sistemas de computador ou registro da base de dados.</p>

					<p>3.2. Não é permitido fazer upload de arquivos que contenham software ou outros materiais que infrinjam quaisquer diretos de propriedade intelectual, incluindo direitos de marca registrada e direitos autorais (ou direitos de privacidade ou publicidade) a menos que você detenha controle dos referidos direitos ou tenha recebido todos os consentimentos necessários.</p>

					<p>3.3. Não é permitido fazer upload ou transmitir arquivos que contenham ou disseminem vírus, worms, time bombs, arquivos corrompidos, ou qualquer outro software corrompido que possa danificar o website ou o computador de alguma outra pessoa.</p>

					<p>3.4. Não é permitido violar ou encorajar outros para violar quaisquer leis ou regulamentos ou direitos legais de outro indivíduo.</p>

					<p>3.5. Criar uma falsa identidade (incluindo declarar uma idade falsa), ou fingir ser qualquer pessoa ou entidade, para enganar outros ou para qualquer outro propósito é proibido.</p>

					<p>3.6. O ServerFDA não tem obrigação de monitorar as informações postadas por usuários. Contudo, nos reservamos o direito de revisar materiais postados e remover qualquer material sem prévia notificação. O ServerFDA se reserva o direito de temporariamente ou permanentemente cancelar o seu acesso a qualquer momento, em caso de violação do presente Termos e Condições.</p>

					<p>5. PRIVACIDADE.</p>

					<p>5.1. Qualquer informação pessoal que você forneça sobre você mesmo ao ServerFDA, somente será usada em conformidade com nossa Política de Privacidade. Através da apresentação de informações pessoais ao ServerFDA, você concorda com a divulgação das referidas informações pessoais para os propósitos para os quais você submeteu a informação, em conformidade com nossa política de privacidade. Caso você não concorde com nossa política de privacidade, por favor, não submeta nenhuma informação pessoal ou contate nossa equipe. Por favor, esteja ciente de que a política de privacidade não se aplica a websites ou outro conteúdo ou material operado ou fornecido por terceiros.</p>
				</div>
				<div class="footer">
					<div class="left">
						<button type="button" class="gs-btn danger" data-mfunc="close">Não Aceito</button>
					</div>
					<div class="right">
						<button type="button" class="gs-btn success" data-mfunc="close">Aceito</button>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

			<div class="gs-modal-content danger" data-mname="modal2">
				<div class="header">
					<button type="button" class="close" data-mfunc="close"></button>
					<span class="title">Modal - Danger</span>
				</div>
				<div class="body">
					<p>DANGER! This is dangerous, obey gficher NOW!</p>
				</div>
				<div class="footer">
					<div class="left">
						<button type="button" class="gs-btn" data-mfunc="close">Get out of here</button>
					</div>
					<div class="right">
						<button type="button" class="gs-btn success" data-mfunc="close">Boom!</button>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

			<div class="gs-modal-content warning small" data-mname="modal3">
				<div class="header">
					<button type="button" class="close" data-mfunc="close"></button>
					<span class="title">Modal - Warning</span>
				</div>
				<div class="body">
					<p>Warning! Something can be wrong, gficher.</p>
				</div>
				<div class="footer">
					<div class="right">
						<button type="button" class="gs-btn success" data-mfunc="close">Obey gficher!</button>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

			<div class="gs-modal-content success" data-mname="modal4">
				<div class="header">
					<button type="button" class="close" data-mfunc="close"></button>
					<span class="title">Modal - Success</span>
				</div>
				<div class="body">
					<p>Success! You obeyed gficher, now you'r free to take a walk.</p>
					<p>( Come back later >:D )</p>
				</div>
				<div class="footer">
					<div class="right">
						<button type="button" class="gs-btn" data-mfunc="close">Uhull!</button>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

		</div> <!-- OVERLAY END -->

		<div id="gs-notification-box">
			<ul>
				<li>
					Notificação 1
					<div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
				</li>
				<li>
					Notificação 2
					<div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
				</li>
				<li>
					Notificação 3
					<div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
				</li>
				<li>
					Notificação 4
					<div class="info">O zézinho não fez isso, mas deveria ter feito aquilo no lugar</div>
				</li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
				<li>Overflow<div class="info">Notificação para gerar overflow</div></li>
			</ul>
		</div>


		<!-- THE CONTENT STARTS HERE -->


		<div id="content">
			<div class="gs-ptitle">
				<span class="gs-titleIcon fa fa-archive"></span>
				<span class="gs-pttext">Cartilha geral</span>
				<ul class="gs-breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Administrador</a></li>
					<li>Cartilha geral</li>
				</ul>
				<div style="clear: both;"></div>
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

			<div class="gs-cbigbox tab">
				<ul class="gs-tab-nav">
					<li data-ref="tabs-1">Nunc tincidunt</li>
					<li data-ref="tabs-2">Proin dolor</li>
					<li data-ref="tabs-3">Aenean lacinia</li>
				</ul>

				<div class="gs-tab-content">
					<div id="tabs-1">
						<h1>Bloco 1</h1>
						<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
					</div>
					<div id="tabs-2">
						<h1>Bloco 2</h1>
						<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
					</div>
					<div id="tabs-3">
						<h1>Bloco 3</h1>
						<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
					</div>
				</div>
			</div>
			
			<div class="gs-cbigbox tab">
				<ul class="gs-tab-nav">
					<li data-ref="tabs-4">Nunc tincidunt</li>
					<li data-ref="tabs-5">Proin dolor</li>
					<li data-ref="tabs-6">Aenean lacinia</li>
				</ul>

				<div class="gs-tab-content">
					<div id="tabs-4">
						<h1>Bloco 1</h1>
						<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
					</div>
					<div id="tabs-5">
						<h1>Bloco 2</h1>
						<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
					</div>
					<div id="tabs-6">
						<h1>Bloco 3</h1>
						<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
					</div>
				</div>
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Blocos de alerta<div class="gs-bsubtitle">Criados por um gatilho</div></div>
				<input class="gs-btn" type="submit" name="button" id="button" value="Normal" data-openmodal="modal1">
				<input class="gs-btn danger" type="submit" name="button" id="button" value="Danger" data-openmodal="modal2">
				<input class="gs-btn warning" type="submit" name="button" id="button" value="Warning" data-openmodal="modal3">
				<input class="gs-btn success" type="submit" name="button" id="button" value="Success" data-openmodal="modal4">
				<input class="gs-btn" type="submit" name="button" id="button" value="Termos e condições" data-openmodal="modalLorem">
			</div>

			<div class="gs-cbigbox half">
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

			<div class="gs-cbigbox half">
				<div class="gs-btitle">Barra de progresso<div class="gs-bsubtitle">Com animação :)</div></div>

				<div class="progressbar small">
					<div class="pbprogress" data-value="25" id="pb01"></div>
				</div>

				<div class="progressbar">
					<div class="pbprogress warning" data-value="25" id="pb02"></div>
				</div>

				<div class="progressbar big">
					<div class="pbprogress danger" data-value="25" id="pb03"></div>
				</div>

				<div class="progressbar">
					<div class="pbprogress" data-value="20" id="pb04"></div>
					<div class="pbprogress warning" data-value="20" id="pb05"></div>
					<div class="pbprogress danger" data-value="35" id="pb06"></div>
				</div>

				<input class="gs-btn danger small autosize" type="submit" name="button" id="button" value="0%" data-action="pupdate" data-target="pb02" data-value="0">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="25%" data-action="pupdate" data-target="pb02" data-value="25">
				<input class="gs-btn warning small autosize" type="submit" name="button" id="button" value="50%" data-action="pupdate" data-target="pb02" data-value="50">
				<input class="gs-btn small autosize" type="submit" name="button" id="button" value="75%" data-action="pupdate" data-target="pb02" data-value="75">
				<input class="gs-btn success small autosize" type="submit" name="button" id="button" value="100%" data-action="pupdate" data-target="pb02" data-value="100">
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
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Manda nudes, gatinha</a></td>
							<td>Rafael Guerreiro</td>
							<td>Urgente</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">To marombando, já volto...</a></td>
							<td>Rafael Bonin</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Eu falo poRRRta</a></td>
							<td>Marília Lup</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Não sou Felipe</a></td>
							<td>Luana Felipe</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Shift, Shift, Shift!</a></td>
							<td>Luca Morais</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
							</td>
						</tr>
						<tr>
							<td><a href="" title="">Amo SENAI</a></td>
							<td>Rafael Guerra</td>
							<td>Normal</td>
							<td>21/04/1999 às 03:00 PM</td>
							<td>
								<input class="gs-btn small success" type="submit" name="button" id="button" value="Ver">
								<input class="gs-btn small danger" type="submit" name="button" id="button" value="Deletar">
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
						<input class="gs-ftext" type="text" name="inputdata" id="inputdata" placeholder="dd/mm/yyyy">
					</label>
					<label class="gs-flabel">
						<b>Telefone</b>
						<input class="gs-ftext" type="text" name="maskedinput" id="phoneNumber" placeholder="(xx) x xxxx-xxxx">
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
						<div class="gs-prefix-group">
							<span class="gs-addon left">URL</span>
							<input class="gs-ftext gs-withpre left" type="text" name="username" id="username">
						</div>
					</label>
					<label class="gs-flabel">
						<b>Subdomínio</b>
						<div class="gs-prefix-group">
							<span class="gs-addon left">http://</span>
							<input class="gs-ftext gs-withpre both" type="text" name="username" id="username">
							<span class="gs-addon right">.gficher.tk</span>
						</div>
					</label>
					<label class="gs-flabel">
						<b>Subdomínio</b>
						<div class="gs-prefix-group">
							<input class="gs-ftext gs-withpre right" type="text" name="username" id="username">
							<span class="gs-addon right">batatas</span>
						</div>
					</label>

					<a name="top"></a>
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
						<input class="gs-ftext display" type="text" name="username" id="username" value="Gustavo Ficher" readonly>
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
						<input class="gs-ftext big" type="text" name="username" id="username" value="Gustavo Ficher">
					</label>
					<label class="gs-flabel">
						<b>Giant</b>
						<input class="gs-ftext giant" type="text" name="username" id="username" value="Gustavo Ficher - e ainda sobra muito espaço :)">
					</label>

					<hr class="gs-hr">

					<label class="gs-flabel">
						<b>Usuário</b>
						<div class="gs-prefix-group">
							<span class="gs-addon icon fa fa-user"></span>
							<input class="gs-ftext" type="text" name="username" id="username" placeholder="Usuário">
						</div>
					</label>

					<label class="gs-flabel">
						<b>Senha</b>
						<div class="gs-prefix-group">
							<span class="gs-addon icon fa fa-lock"></span>
							<input class="gs-ftext" type="password" name="username" id="username" placeholder="Senha">
						</div>
					</label>

					<input class="gs-btn" type="submit" name="button" id="button" value="Entrar">

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
					<label class="gs-flabel">
						<select class="gs-fselect autosize" name="select" id="select">
							<optgroup label="Alternativa">
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

					<input class="gs-btn danger" type="submit" name="button" id="button" value="Teste">
					<input class="gs-btn warning" type="submit" name="button" id="button" value="Botão">
					<input class="gs-btn success" type="submit" name="button" id="button" value="Outro teste">
				</form>
			</div>

			<div class="gs-cbigbox">
				<div class="gs-btitle">Teste de texto</div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in lorem bibendum, dapibus odio vel, condimentum leo. Morbi sit amet neque vitae dolor feugiat aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sed placerat leo, ac dignissim sem. Ut nec volutpat urna. Praesent non massa ligula. Aenean vel venenatis quam. Fusce pretium diam elit, eget ultricies odio maximus sed. Aliquam in iaculis ante, porttitor molestie odio. Mauris at egestas velit, non commodo justo. Nulla blandit porta metus vel feugiat. Quisque fringilla fringilla bibendum. Aenean non fermentum justo. Praesent eget sapien nulla. Nam tristique, leo nec consequat sollicitudin, nunc neque imperdiet nulla, et pulvinar diam nisl a arcu.
				</p>
				<p>
					Donec id elementum nisl, nec porttitor dolor. Vestibulum nec viverra dolor. Maecenas nec consectetur tortor, ut pretium lacus. Nunc lobortis, magna congue ornare euismod, turpis massa dignissim erat, eu condimentum nunc lectus id ipsum. Duis quis placerat quam, ut pellentesque lorem. Duis non tincidunt nisi, elementum hendrerit justo. Pellentesque rutrum erat at erat varius, pretium porttitor lorem rhoncus. Integer ut ipsum interdum, tincidunt nulla at, varius mi. Aliquam vel viverra ipsum. In est leo, convallis vel diam sit amet, tempor tempus urna. Etiam sed vulputate libero. Vestibulum augue mi, luctus sed odio eu, viverra auctor erat. Pellentesque fringilla luctus felis, ut malesuada odio scelerisque non.
				</p>
				<p>
					Nulla eu mollis sapien, vel auctor diam. Integer consequat hendrerit neque, non scelerisque lectus iaculis porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet justo efficitur, finibus augue ac, iaculis odio. Duis consequat mattis malesuada. Nulla convallis dui feugiat odio imperdiet, nec porttitor ex feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non libero vitae est fringilla dictum. Quisque ultrices luctus augue a placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porttitor eget nulla sit amet lacinia. Mauris lobortis malesuada accumsan. Fusce mattis tincidunt quam. Curabitur bibendum lacus hendrerit placerat ullamcorper. Nulla sollicitudin sollicitudin orci, quis pretium purus feugiat ut. Proin vehicula elit ac dictum egestas.
				</p>
			</div>
		</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/content.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="js/pikaday.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/pace.min.js"></script>
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
				field: $('#inputdata')[0],
				format: 'DD/MM/YYYY',
			});

			function mudaPbar() {
				$("#pb01").css('width', Math.floor(Math.random() * 101) + '%');
				$("#pb02").css('width', Math.floor(Math.random() * 101) + '%');
				$("#pb03").css('width', Math.floor(Math.random() * 101) + '%');
				setTimeout(mudaPbar, 1000);
			}

			$("#phoneNumber").mask("(99) 9999-9999?9");

			//mudaPbar();
		</script>
	</body>
</html>