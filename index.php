<!DOCTYPE html>
<html lang="es">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18//seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18//coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">

      <br />
      <h1 class="text-success">Plataforma online UNO</h1>
      <!--<h1 class="text-primary">Plataforma online DOS</h1>-->
      <h2>Bienvenido a esta plataforma de aprendizaje en línea de la UPPachuca</h2>

        <p>Si requieres apoyo:</p>
        <ul>
          <li>Materias y calificaciones: zzz@upp.edu.mx</li>
          <li>Problemas para ingresar: adistancia@upp.edu.mx</li>
          <li>Soporte técnico en general: sistemas@upp.edu.mx</li>
        </ul>

      <div class="d-flex">


      </div>
      <div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <a href="https://moodle1.upp.edu.mx/mdle/">
              <img src="./mc/moodle_logo.png" alt="moodle plataform" class="img-fluid">
            </a>
          </div>
          <div class="col">
            <!--
            <a href="../mdle/">
            <p>Has click aquí para continuar a la plataforma de Moodle</p>
            <div class="btn-group btn-group-lg" role="group" aria-label="...">Has click aquí para continuar a la plataforma de Moodle</div>
            </a>
          -->
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="../mdle/">
              <button type="button" class="btn btn-secondary">Has click aquí para continuar a la plataforma de Moodle</button>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h2>Avisos</h2>
          </div>
          <div class="col">
            <h2>Calendario</h2>
          </div>
          <div class="col">
            <?php echo "Hoy es: " . date("Y/m/d") . "<br>"; ?>
            <?php echo "La hora exacta es: " . date("h:i:sa"); ?>
          </div>
        </div>
      </div>


      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18//coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18//seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18//coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18//coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
