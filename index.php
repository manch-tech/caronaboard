<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="You app for smart urban transport">
		<meta name="keywords" content="Transport, ride, urban, car, share">
		<meta name="author" content="Hege Refsnes">
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="tooltip.css">
		<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
	</head>
	<body>
		<div id="page-wrap">
			<h1>Carona Board</h1>
			<h2>Seu carro não precisa levar apenas você</h2>
			<ul>
				<li>Otimize o uso do seu carro</li>
				<li>Ajude quem precisam de carona</li>
				<li>Contribua para o transito de Porto Alegre</li>
			</ul>
			<table>
					<thead>
						<tr>
							<th>Rota</th>
							<th>Quando</th>
							<th>Horário</th>
							<th>Motorista</th>
							<th></th>
						</tr>
					<tbody>
						<tr>
							<td><strong>Bom fim</strong>
								<a id="rota">detalhes</a>
								<div class="tooltip">
							        <table>
							          <tr>
							            <td class="label">Detalhes do trajeto</td>
							          </tr>
							          <tr>
							            <td>
							            	<ol>
							            		<li>Origem: Tecnopuc</li>
							            		<li>Destino: Castro Alves</li>
							            		<p>(*) Rota Flexível</p>
							            	</ol>
							            </td>
							          </tr>
							      	</table>
								</div>
							</td>
							<td>Seg a Sex</td>
							<td>19:00 a 20:00</td>
							<td>Fulano Silva</td>
							<td><div id="button_carona"><a href="http://goo.gl/forms/Jt7rddWqFn" target="_blank">QUERO CARONA!</a></div></td>
						</tr>
						<tr>
							<td><strong>Cidade Baixa</strong>
								<a id="rota">detalhes</a>
								<div class="tooltip">
							        <table>
							          <tr>
							            <td class="label">Detalhes do trajeto</td>
							          </tr>
							          <tr>
							            <td>
							            	<ol>
							            		<li>Origem: Tecnopuc</li>
							            		<li>Destino: Lima e Silva</li>
							            		<p>(*) Rota Fixa: falar motorista</p>
							            	</ol>
							            </td>
							          </tr>
							      	</table>
								</div>
							</td>
							<td>Seg a Sex</td>
							<td>18:00 a 19:00</td>
							<td>Siclana</td>
							<td><div id="button_carona"><a href="http://goo.gl/forms/3zFqZS1SvR" target="_blank">QUERO CARONA!</a></div></td>
						</tr>
						<tr>
							<td><strong>Protásio Alves</strong>
								<a id="rota">detalhes</a>
								<div class="tooltip">
							        <table>
							          <tr>
							            <td class="label">Detalhes do trajeto</td>
							          </tr>
							          <tr>
							            <td>
							            	<ol>
							            		<li>Origem: Tecnopuc</li>
							            		<li>Destino: Protásio Alves esquina com Carlos Gomes</li>
							            		<p>(*) Rota Fixa: falar motorista</p>
							            	</ol>
							            </td>
							          </tr>
							      	</table>
								</div>
							</td>
							<td>Seg, Qua</td>
							<td>19:00</td>
							<td>Fulana Silva</td>
							<td><div id="button_carona"><a href="http://goo.gl/forms/iKCKMbnNX3" target="_blank">QUERO CARONA!</a></div></td>
						</tr>
						<tr>
							<td><strong>Aeroporto</strong>
								<a id="rota">detalhes</a>
								<div class="tooltip">
							        <table>
							          <tr>
							            <td class="label">Detalhes do trajeto</td>
							          </tr>
							          <tr>
							            <td>
							            	<ol>
							            		<li>Origem: Tecnopuc</li>
							            		<li>Destino: Estação Trensurb Bairro Anchieta</li>
							            		<p>(*) Rota Fixa: falar motorista</p>
							            	</ol>
							            </td>
							          </tr>
							      	</table>
								</div>
							</td>
							<td>Seg, Qua</td>
							<td>19:00</td>
							<td>Fulana Silva</td>
							<td><div id="button_carona"><a href="http://goo.gl/forms/TQAKwXzAg3" target="_blank">QUERO CARONA!</a></div></td>
						</tr>
					</tbody> 
				</table>
			<p></p>
			<div id="dar_carona">
			<h3>Voce quer dar carona? </h3> <a href="http://goo.gl/forms/ohEbgkMa9i" target="_blank">Se cadastre aqui</a>
			</div>
		</div>
			<script>
  			$(document).ready(function() {
      		$("#rota").tooltip({ effect: 'slide'});
    		});
    		</script>
	</body>
<html>