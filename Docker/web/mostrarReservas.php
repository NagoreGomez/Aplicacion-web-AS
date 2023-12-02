<?php

include 'conexion.php';
session_start();

$emailConsulta = $_SESSION['emailConsulta'];
$resultadoMensaje = '<div class="alert alert-danger role="alert">Estas son tus reservas:</div>';


// Consulta SQL para seleccionar todos los registros de la tabla reservas
$sql = "SELECT * FROM reservas WHERE email = '$emailConsulta' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $tablaHTML .= "<div class='table-container'>";
    $tablaHTML .= "<table style='width: 100%; border-collapse: collapse;'>";
    $tablaHTML .= "<tr><th style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>Código</th><th style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>Número de personas</th><th style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>Fecha</th><th style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>Hora</th></tr>";

    while ($row = $result->fetch_assoc()) {
        $tablaHTML .= "<tr>";
        $tablaHTML .= "<td style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>" . $row["codigo"] . "</td>";
        $tablaHTML .= "<td style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>" . $row["numPersonas"] . "</td>";
        $tablaHTML .= "<td style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>" . $row["fecha"] . "</td>";
        $tablaHTML .= "<td style='padding: 10px; border: 1px solid #ddd; background-color: transparent;text-align: center;'>" . $row["hora"] . "</td>";
        $tablaHTML .= "</tr>";
    }

    $tablaHTML .= "</table>";
    $tablaHTML .= "</div>"; // Cierra el contenedor de la tabla

}
// Cerrar la conexión a la base de datos
$conn->close();

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Volver a inicio</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.png" class="brand-img" alt="">
                <span class="brand-txt">CAFUNÉ</span>
            </a>
            <ul class="navbar-nav">

            </ul>
        </div>
    </nav>

 

    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <form method="post" action="consulta.php">
                <div class="container-fluid has-bg-overlay has-height-lg middle-items" id="book-table">
                    <div class="overlay text-white" style="font-size: 20px; background-color: transparent;">
                        <?php echo $resultadoMensaje; ?>
                        <div style="margin-bottom: 10px;"></div>
                        <div class="overlay text-white" style="font-size: 20px; color: white;">
                            <?php echo $tablaHTML; ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </header>


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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

</body>

</html>