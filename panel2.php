<?php
$var = 1; // Define o menu
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Painel 2</title>
		<link rel="icon" href="favicon.ico"/>
		<meta name="Author" content="gficher"/>
		<meta name="description" content="gficher's style"/>
		<meta name="keywords" content="gficher,style"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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

		<div id="content">
			<div class="gs-ptitle">
				<div class="gs-pttext">Pré visualização</div>
				<ul class="gs-breadcrumb">
					<li>
						<a href="#">Geral</a>
					</li>
					<li>Pré visualização</li>
				</ul>
				<div style="clear: both;"></div>
			</div>

			<div class="gs-messagebox"><b>Bem-vindo ao Oficina do Aluno web!</b><br>Sistema: gficher's style v1 Alpha.<br>Desenvolvido por <a href="//gficher.tk" target="_blank">gficher</a></div>

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
					<div>Simulado</div>
					<div class="gs-info warning">Na média</div>
				</div>
			</div>
			
			<div class="gs-cbigbox half">
				<div class="gs-btitle">Seu desempenho<div class="gs-bsubtitle">Notas dos simulados comparado à média geral</div></div>
				<div class="gs-canv">
					<canvas class="gs-graph" id="graphCadastros" height="100"></canvas>
				</div>
			</div>
			
			<div class="gs-cbigbox half">
				<div class="gs-btitle">Próximos eventos</div>
				<table id="table1" class="gs-table" data-tpager="pager1" data-tsearch="tsearch1">
					<thead>
						<tr>
							<th>Data</th>
							<th>Evento</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>07/09/2015</td>
							<td>Mudança geral do gficher's style</td>
						</tr>
						<tr>
							<td>09/09/2015</td>
							<td>WWDC 2015</td>
						</tr>
						<tr>
							<td>09/09/2015</td>
							<td>Simulado 6</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/content.js"></script>
		<script type="text/javascript" src="js/chart.min.js"></script>
		<script type="text/javascript" src="js/moment.js"></script>
		<script type="text/javascript" src="js/pikaday.js"></script>
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
		</script>
	</body>
</html>