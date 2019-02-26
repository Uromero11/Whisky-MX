<html>
	<head>
		<title>Menu</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
		<div id="header">
			<ul class="nav">
				<li><a href="">Inicio</a></li>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="ventas.php">Ventas</a></li>
						<li><a href="">Catalogo</a></li>
						<li><a href="contacto.php">Contactanos</a></li>
						<li><a href="">Inicio</a>
							<ul>
								<li><a href="">Acerca de Nosotros</a></li>
								<li><a href="">Objetivo</a></li>
								<li><a href="">Vision</a></li>
								<li><a href="">Mision</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Direccion</a></li>
						<li><a href="">Contacto</a></li>
						<li><a href="">Translations</a></li>
					</ul>
				</li>
				<li><a href="contacto.php">Contacto</a></li>
			</ul>
		</div>
	</body>
</html>