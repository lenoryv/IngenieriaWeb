<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TALLER 3</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/style_page.css">
    <link rel="stylesheet" href="../css/style_register.css">
    <script src="https://kit.fontawesome.com/4feb140172.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
</head>

<body>
    <?php include '../components/nav.php'; ?>
    <main class="content_page">
        <div class="content">
            <h2 class="title">REGISTRAR</h2>
        </div>
        <section class="form">
            <form action="../resources/register.php" method="POST">
                <div class="groupInput">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" placeholder="Ingrese sus nombres">
                </div>
                <div class="groupInput">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" placeholder="Ingrese sus apellidos">
                </div>
                <div class="groupInput">
                    <label for="correo">Correo<span class="msgAlertDanger"></span></label>
                    <input type="text" name="correo" placeholder="Ingrese su correo" required>
                </div>
                <div class="groupInput">
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" placeholder="Ingrese su DNI">
                </div>
                <div class="groupInput">
                    <label for="pais">País</label>
                    <input type="text" name="pais" placeholder="Ingrese su el nombre se su país">
                </div>
                <div class="groupInput">
                    <label for="telef">Telef.</label>
                    <input type="text" name="telefono" placeholder="Ingrese su teléfono">
                </div>
                <div class="groupInput inputHorizontal">
                    <div>
                        <label for="sexo">Masculino</label>
                        <input type="radio" id="sexo" name="sexo" value="1">
                    </div>
                    <div>
                        <label for="sexo">Femenino</label>
                        <input type="radio" id="sexo" name="sexo" value="2">
                    </div>
                </div>
                <button type="submit" class="btnSave">REGISTRAR</button>
            </form>
        </section>
    </main>
    <?php include '../components/footer.php'; ?>
</body>

</html> 