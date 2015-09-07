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

		<div id="content">
			<div id="gs-menuoverlay"></div>
			<div id="ptitle">
				<div id="picon"></div>
				<div id="pttext">Página inicial</div>
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

			<div class="gs-cbigbox">
				<div class="gs-btitle">Seu desempenho<div class="gs-bsubtitle">Notas dos simulados comparado à média geral</div></div>
				<div class="canv">
					<canvas class="graph" id="graphCadastros" height="10"></canvas>
				</div>
			</div>
			
			<div class="gs-cbigbox">
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
							<td>Lançamento do iOS 9 para iPhone 4S e superior</td>
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
				window.location = '#top';
			}
		</script>
	</body>
</html>