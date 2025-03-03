<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hotel Caribe</title>

<head>
    <title>Hotel Caribe Resort </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styles.css">
</head>

<body>
    <br>
    <div align="center">
        <img src="imagenes/hotel.png" width="150" alt="150">
    </div>

    <br><br>
    <h1 style="text-align: center;"> Reservas Hotel Caribe Resort</h1>

    <div class="container mt-4">
        <div class="row">
            <!-- Card 1: Habitación Sencilla -->
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="imagenes/sencilla.jpg" class="card-img-top" alt="Habitación Sencilla" width="100%"
                        height="200">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Sencilla</h5>
                        <p class="card-text">$80.000 pesos por noche.</p>
                    </div>
                    <div class="card-footer text-muted">
                        Disponibilidad: Alta
                    </div>
                </div>
            </div>

            <!-- Card 2: Habitación Doble -->
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="imagenes/doble.jpg" class="card-img-top" alt="Habitación Doble" width="100%" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Doble</h5>
                        <p class="card-text">$100.000 pesos por noche.</p>
                    </div>
                    <div class="card-footer text-muted">
                        Disponibilidad: Media
                    </div>
                </div>
            </div>

            <!-- Card 3: Habitación Doble Sencilla -->
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="imagenes/doble sencilla.jpg" class="card-img-top" alt="Habitación Doble Sencilla"
                        width="100%" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Doble Sencilla</h5>
                        <p class="card-text">$100.000 pesos por noche.</p>
                    </div>
                    <div class="card-footer text-muted">
                        Disponibilidad: Baja
                    </div>
                </div>
            </div>

            <!-- Card 4: Habitación Múltiple -->
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="imagenes/multiple.jpg" class="card-img-top" alt="Habitación Múltiple" width="100%"
                        height="200">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Múltiple</h5>
                        <p class="card-text">$120.000 pesos por noche.</p>
                    </div>
                    <div class="card-footer text-muted">
                        Disponibilidad: Alta
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="card border-primary mb-3 mx-auto" style="max-width: 50rem;">
        <div class="card-header text-center">Formulario</div>
        <div class="card-body">
            <h4 class="card-title text-center">Ingrese sus datos</h4>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div>
                    <label class="col-form-label mt-3" for="cedula">Ingrese su cédula</label>
                    <input type="text" class="form-control" placeholder="Ingrese su cédula" id="cedula" name="cedula">
                </div>

                <div>
                    <label class="col-form-label mt-3" for="nombre">Ingrese su nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre" id="nombre" name="nombre">
                </div>

                <div>
                    <label for="exampleSelect2" class="form-label mt-4">Selecciona tu ciudad</label>
                    <select multiple class="form-select" id="exampleSelect2" name="ciudad">
                        <option>Barranquilla</option>
                        <option>Cartagena</option>
                        <option>Santa Marta</option>
                    </select>
                </div>
                <div>
                    <label for="exampleSelect2" class="form-label mt-4">Selecciona el tipo de habitacion</label>
                    <select multiple class="form-select" id="habitacion" name="tipo">
                        <option>Sencilla</option>
                        <option>Doble</option>
                        <option>Doble sencilla</option>
                        <option>Multiple</option>
                    </select>
                </div>

                <div>
                    <label for="exampleSelect1" class="form-label mt-4">Numero de personas</label>
                    <select class="form-select" id="#personas" name="personas">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

                    </select>
                </div>


                <div>
                    <label for="fecha" class="form-label mt-3">Fecha</label>
                    <input class="form-control" type="date" name="fecha" id="fecha">
                </div>


                <div>
                    <label class="col-form-label mt-3" for="nombre">Numero de dias</label>
                    <input type="number" class="form-control"  id="dias" value="1" name="dias">
                </div>

                <br>

                <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                    <input type="checkbox" name="desayuno"> ¿ Incluir desayuno por $8000 ?
                </div>

                <br>

                <div>
                    <button type="submit" class="btn btn-outline-info w-100 mt-3">Reservar</button>
                </div>
                <br><br>
                
 
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = $_POST['nombre'];
                    $cedula = $_POST['cedula'];
                    $ciudad = $_POST['ciudad'];
                    $tipo = $_POST['tipo'];
                    $dias = $_POST['dias'];
                    $personas = $_POST['personas'];
                    $fecha = $_POST['fecha'];
                    $total = 0;

                    switch ($tipo) {
                        case "Sencilla":
                            $total = 80000 * $dias;
                            break;
                        case "Doble":
                            $total=100000*$dias;
                            break;
                        case "Doble sencilla":
                            $total = 100000 * $dias;
                            break;
                        case "Multiple":
                            $total = 120000 * $dias;
                            break;
                    }

                    if (isset($_POST['desayuno'])) {
                        $total += 8000 * $dias * $personas;
                    }

                    // Formatear el precio
                    $total_formateado = number_format($total, 0, ',', '.');

                    // Mostrar factura
                    echo "<div class='card-header text-center'>Factura de Reserva</div>";
                    echo "<div class='card-body'>";
                    echo "<h4 class='card-title'>Hotel Caribe Resort</h4>";
                    echo "<p><strong>Nombre:</strong> $nombre</p>";
                    echo "<p><strong>Cédula:</strong> $cedula</p>";
                    echo "<p><strong>Ciudad:</strong> $ciudad</p>";
                    echo "<p><strong>Tipo de Habitación:</strong> $tipo</p>";
                    echo "<p><strong>Número de Personas:</strong> $personas</p>";
                    echo "<p><strong>Fecha de Ingreso:</strong> $fecha</p>";
                    echo "<p><strong>Número de Días:</strong> $dias</p>";
                    echo "<p><strong>Incluye Desayuno:</strong> " . (isset($_POST['desayuno']) ? "Sí" : "No") . "</p>";
                    echo "<h3 class='text-success'>Total a Pagar: $ " . $total_formateado . " pesos</h3>";
                    echo "</div></div>";
                }
        ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>