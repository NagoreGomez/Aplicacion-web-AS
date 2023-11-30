<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>CAFUNÉ</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
              <li class="nav-item">
                    <a class="nav-link" href="#book-table">Reservar</a>
                </li>
              <li class="nav-item">
                    <a class="nav-link" href="#gallary">Menú</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Opiniones</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.png" class="brand-img" alt="">
                <span class="brand-txt">CAFUNÉ</span>
            </a>
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="consultarReservas.php" class="btn btn-primary ml-xl-4">Consultar reservas</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">CAFUNÉ</h1>
            <h2 class="h2">this is the burguer revolution</h2>
        </div>
    </header>
  
  <!-- book a table Section  -->
  <form method="post" action="confirmarReserva.php">
    <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <div class="">
            <h2 class="section-title mb-5">RESERVAR UNA MESA</h2>
            <div class="row mb-5">
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="email" name="email" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="number" name="number" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="NÚMERO DE PERSONAS" max="20" min="0">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="time" name="time" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="HORA">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="date" name="date" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="FECHA" min="0001-01-01" max="9999-12-31">
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary" id="rounded-btn">RESERVAR</button>
        </div>
    </div>
</form>




    <!--  Menu Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">MENÚ</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-1.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">

        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
        </div>
    </div>
    
    
	 <!-- Separator-->
	<div class="separator"></div>

 
 	 <!-- Carta-->
	 <div class="row">
	    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn mx-auto">
		<img src="assets/imgs/menu1.png" alt="template by DevCRID http://www.devcrud.com/" >
	    </div>
	    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn mx-auto">
		<img src="assets/imgs/menu2.png" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
		</a>
	    </div>
	</div>

    

	<!-- Separator color-->
	<div class="separator-color"></div>



    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">OPINIONES</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Aingeru Bellido</h3>
                    <h6 class="testmonial-subtitle">Chef de Restaurante Michelin</h6>
                    <div class="testmonial-body">
                        <p>Este restaurante de hamburguesas es simplemente increíble. Las hamburguesas son jugosas y sabrosas, con una excelente selección de ingredientes frescos. 
                            Las patatas fritas son crujientes por fuera y suaves por dentro. Sin duda, una experiencia gastronómica deliciosa que vale la pena repetir.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Sergio Martín</h3>
                    <h6 class="testmonial-subtitle">Profesor de la Escuela Culinaria de la UPV/EHU</h6>
                    <div class="testmonial-body">
                        <p>Este lugar es un paraíso para los amantes de las hamburguesas. La calidad de la carne es excepcional y los
                            nachos con queso fundido y toppings variados son el complemento perfecto. El ambiente acogedor y el servicio amable solo mejoran esta 
                            experiencia culinaria.La tarta de queso lo mejor!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Maitane Urruela</h3>
                    <h6 class="testmonial-subtitle">Crítica gastronómica</h6>
                    <div class="testmonial-body">
                        <p>No puedo dejar de elogiar este restaurante de hamburguesas. Las hamburguesas son simplemente deliciosas, con combinaciones únicas que elevan el concepto de
                             hamburguesa a otro nivel. La atención al cliente es excepcional, creando una experiencia gastronómica que supera las expectativas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL</h3>
                <P class="text-muted">cafune@gmail.com</P>
            </div>
            <div class="col-sm-4">
                <h3>TELEFONO</h3>
                <P class="text-muted">+34 957 67 24 91</P>
            </div>
            <div class="col-sm-4">
                <h3>DIRECCIÓN</h3>
                <P class="text-muted">Calle Ercilla 48, 48011, Bilbao, Bizkaia</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script></p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

</body>
</html>
