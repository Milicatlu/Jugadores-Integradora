<?php
include("connection.php");
$con = connection();

// Check if 'id' is set in the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id !== null) {
    $sql = "SELECT * FROM jugadores WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        $row = mysqli_fetch_array($query);
    } else {
        die("Error in the query: " . mysqli_error($con));
    }
} else {
    die("Invalid or missing 'id' parameter in the URL");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSSS/style.css" rel="stylesheet">
    <title>Editar jugador</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="users-form">
                    <h1>Editar jugador</h1>
                    <form action="edit_user.php" method="POST">

                         <!-- Utiliza el ID obtenido para el campo oculto id -->
                         <input type="hidden" name="id" value="<?= $row['id']?>">
                       
                        <div class="form-group col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= $row['name']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pos">POS</label>
                            <input type="text" name="pos" id="pos" class="form-control" value="<?= $row['pos']?>">
                        </div>
                      
                        <div class="form-group col-md-6">
                            <label for="edad">Edad</label>
                            <input type="text" name="edad" id="edad" class="form-control" value="<?= $row['edad']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="est">Est</label>
                            <input type="text" name="est" id="est" class="form-control" value="<?= $row['est']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="p">P</label>
                            <input type="text" name="p" id="p" class="form-control" value="<?= $row['p']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nac">NAC</label>
                            <input type="text" name="nac" id="nac" class="form-control" value="<?= $row['nac']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ap">Ap</label>
                            <input type="text" name="ap" id="ap" class="form-control" value="<?= $row['ap']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sub">SUB</label>
                            <input type="text" name="sub" id="sub" class="form-control" value="<?= $row['sub']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="a">A</label>
                            <input type="text" name="a" id="a" class="form-control" value="<?= $row['a']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ga">GA</label>
                            <input type="text" name="ga" id="ga" class="form-control" value="<?= $row['ga']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="a2">A2</label>
                            <input type="text" name="a2" id="a2" class="form-control" value="<?= $row['a2']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fc">FC</label>
                            <input type="text" name="fc" id="fc" class="form-control" value="<?= $row['fc']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fs">FS</label>
                            <input type="text" name="fs" id="fs" class="form-control" value="<?= $row['fs']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ta">TA</label>
                            <input type="text" name="ta" id="ta" class="form-control" value="<?= $row['ta']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tr">TR</label>
                            <input type="text" name="tr" id="tr" class="form-control" value="<?= $row['tr']?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="Actualizar">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye los scripts de Bootstrap al final del cuerpo para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
