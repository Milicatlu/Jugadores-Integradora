<?php
include("connection.php");
$con = connection();

// Consulta para listar jugadores de nacionalidad argentina
$queryArgentina = mysqli_query($con, "SELECT * FROM jugadores WHERE nac = 'Argentina'");

// Consulta para listar jugadores con peso entre 75 y 80 kg
$queryPeso = mysqli_query($con, "SELECT * FROM jugadores WHERE p >= 75 AND p <= 80");

// Consulta para mostrar el jugador más alto
$queryMasAlto = mysqli_query($con, "SELECT * FROM jugadores ORDER BY est DESC LIMIT 1");

// Consulta para listar todos los jugadores
$query = mysqli_query($con, "SELECT * FROM jugadores");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-fz/XL1tQz8eS72POTqDvj1c1hEVMSUQeb1q2PlF2p65dCu15sSq27a8Tno1T+4P" crossorigin="anonymous">
    <title>Users CRUD</title>
   

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="users-form">
                    <h1 class="users-title">Agregar jugador</h1>
                    <form action="insert_user.php" method="POST" onsubmit="return validarFormulario()">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" name="pos" class="form-control" placeholder="POS">
                        </div>
                        <div class="form-group">
                            <input type="text" name="est" class="form-control" placeholder="Est">
                        </div>
                        <div class="form-group">
                            <input type="text" name="p" class="form-control" placeholder="P">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nac" class="form-control" placeholder="NAC">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ap" class="form-control" placeholder="Ap">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sub" class="form-control" placeholder="SUB">
                        </div>
                        <div class="form-group">
                            <input type="text" name="a" class="form-control" placeholder="A">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ga" class="form-control" placeholder="GA">
                        </div>
                        <div class="form-group">
                            <input type="text" name="a2" class="form-control" placeholder="A2">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fc" class="form-control" placeholder="FC">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fs" class="form-control" placeholder="FS">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ta" class="form-control" placeholder="TA">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tr" class="form-control" placeholder="TR">
                        </div>
                        <!-- Agrega más campos según sea necesario -->
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <div>
                    <h2 class="users-title">Jugadores</h2>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>POS</th>
                                    <th>Edad</th>
                                    <th>Est</th>
                                    <th>P</th>
                                    <th>NAC</th>
                                    <th>Ap</th>
                                    <th>SUB</th>
                                    <th>A</th>
                                    <th>GA</th>
                                    <th>A2</th>
                                    <th>FC</th>
                                    <th>FS</th>
                                    <th>TA</th>
                                    <th>TR</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($query)): ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['pos'] ?></td>
                                        <td><?= $row['edad'] ?></td>
                                        <td><?= $row['est'] ?></td>
                                        <td><?= $row['p'] ?></td>
                                        <td><?= $row['nac'] ?></td>
                                        <td><?= $row['ap'] ?></td>
                                        <td><?= $row['sub'] ?></td>
                                        <td><?= $row['a'] ?></td>
                                        <td><?= $row['ga'] ?></td>
                                        <td><?= $row['a2'] ?></td>
                                        <td><?= $row['fc'] ?></td>
                                        <td><?= $row['fs'] ?></td>
                                        <td><?= $row['ta'] ?></td>
                                        <td><?= $row['tr'] ?></td>
                                        <td>
                                            <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-edit">editar</i></a>
                                            <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt">quitar</i></a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
    <button onclick="mostrarJugadoresArgentina()" class="btn btn-primary">Jugadores Argentinos</button>
    <button onclick="mostrarJugadoresPeso()" class="btn btn-primary">Jugadores por Peso</button>
    <button onclick="mostrarJugadorMasAlto()" class="btn btn-primary">Jugador más Alto</button>
</div>
<div id="tablaJugadores"></div>
            </div>
        </div>
    </div>

    <!-- Incluye los scripts de Bootstrap al final del cuerpo para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        function validarFormulario() {
            var inputs = document.querySelectorAll('.users-form input[type="text"]');
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].value.trim() === '') {
                    alert('Por favor, complete todos los campos.');
                    return false;
                }
            }
            return true;
        }

        function mostrarResultados(resultados) {
            var tabla = document.getElementById('tablaJugadores');
            tabla.innerHTML = '';

            // Crear la estructura de la tabla
            var tablaHTML = '<table class="table table-sm"><thead><tr><th>ID</th><th>Nombre</th><th>POS</th><th>Edad</th><th>Est</th><th>P</th><th>NAC</th><th>Ap</th><th>SUB</th><th>A</th><th>GA</th><th>A2</th><th>FC</th><th>FS</th><th>TA</th><th>TR</th><th>Acciones</th></tr></thead><tbody>';

            resultados.forEach(function (jugador) {
                tablaHTML += '<tr>';
                tablaHTML += '<td>' + jugador.id + '</td>';
                tablaHTML += '<td>' + jugador.name + '</td>';
                tablaHTML += '<td>' + jugador.pos + '</td>';
                tablaHTML += '<td>' + jugador.edad + '</td>';
                tablaHTML += '<td>' + jugador.est + '</td>';
                tablaHTML += '<td>' + jugador.p + '</td>';
                tablaHTML += '<td>' + jugador.nac + '</td>';
                tablaHTML += '<td>' + jugador.ap + '</td>';
                tablaHTML += '<td>' + jugador.sub + '</td>';
                tablaHTML += '<td>' + jugador.a + '</td>';
                tablaHTML += '<td>' + jugador.ga + '</td>';
                tablaHTML += '<td>' + jugador.a2 + '</td>';
                tablaHTML += '<td>' + jugador.fc + '</td>';
                tablaHTML += '<td>' + jugador.fs + '</td>';
                tablaHTML += '<td>' + jugador.ta + '</td>';
                tablaHTML += '<td>' + jugador.tr + '</td>';
                tablaHTML += '<td> Acciones </td>';
                tablaHTML += '</tr>';
            });

            // Cerrar la estructura de la tabla
            tablaHTML += '</tbody></table>';

            // Establecer el HTML de la tabla
            tabla.innerHTML = tablaHTML;
        }

        function mostrarJugadoresArgentina() {
            mostrarResultados(<?php echo json_encode(mysqli_fetch_all($queryArgentina, MYSQLI_ASSOC)); ?>);
        }

        function mostrarJugadoresPeso() {
            mostrarResultados(<?php echo json_encode(mysqli_fetch_all($queryPeso, MYSQLI_ASSOC)); ?>);
        }

        function mostrarJugadorMasAlto() {
            mostrarResultados([<?php $row = mysqli_fetch_assoc($queryMasAlto); echo json_encode($row); ?>]);
        }
    </script>
</body>

</html>
