<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina web D.WEB</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/main.js"></script>
    <script src="js/menu.js"></script>
    
</head>
<body>
    <title>Pagina Web</title>
    <header class="slidermain">
        <!-- MENU-->
        <div class="navbar">
           <img id ="logo" src="img/selfpark%20logo.png" >
            <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">Servicos
              <i class="fa fa-caret-down"></i>
            </button>
                 <div class="dropdown-content" id="myDropdown">
                     <a href="fiestas.php">Fiestas</a>
                     <a href="matrimonios.php">Matrimonios</a>
                     <a href="sesiones.php">Sesiones</a>
                 </div>
            </div> 
             <a href="contacto.php"Contacto>Registrarse</a>
            <a href="acercaDeMi.php">Inicio de Sesión </a>
            <a href="PaginaInicio.php">Inicio</a>
        </div>
        <!-- MENU-->
        
        <!--------------- SLIDER  ------------->
        <div class="slideshow">
		<ul class="slider">
			<li>
				<img src="img/img1.jpg" alt="">
				<section class="caption">
					<h1> VER Estacionamientos</h1>
                    
				</section>
			</li>
            
			<li>
				<img src="img/img2.png" alt="">
				<section class="caption">
					<h1>VER Estacionamientos</h1>
					
				</section> 
			</li>
			<li>
				<img src="img/img3.jpg" alt="">
				<section class="caption">
					<h1>VER Estacionamientos</h1>
					
				</section>
			</li>
			<li>
				<img src="img/img4.jpg" alt="">
				<section class="caption">
					<h1>VER Estacionamientos</h1>
					
				</section> 
			</li>
            
		</ul>

		<ol class="paginacion">
			
		</ol>
	
		<!--<div class="izq">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="der">
			<span class="fa fa-chevron-right"></span>
		</div> -->

	</div>
        <!-- ------SLIDER-------   -->
    </header>
	<main>
        <section class="fotitos"> 
            <div class="zoom"><a href="fiestas.php"><img id="img2" src="img/elect.jpg"></a><t id="titulofoto">Fiestas</t></div>
            <div class="zoom"><a href="matrimonios.php"><img id="img2" src="img/matri.jpg"></a><t id="titulofoto">Matrimonios</t></div>
            <div class="zoom"><a href="sesiones.php"><img id="img2" src="img/jeezy.jpg"></a><t id="titulofoto">Sesiones Personales</t></div>
        </section>
    </main>
</body>
     <footer>
        <p class="nom">Jose pedro Fuenzalida</p>
         <a id="img1" href="https://www.instagram.com/"><img src="img/instagram.png" width="50px" height="50px;"></a>
         <a id="img1" href="https://www.twitter.com/"><img src="img/twitter.png" width="50px" height="50px;" ></a> 
         <a id="img1" href="https://es-la.facebook.com/"><img src="img/facebook.png" width="50px" height="50px;"></a>
        </footer>
</html>