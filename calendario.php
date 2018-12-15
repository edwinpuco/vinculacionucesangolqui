<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>Calendario de eventos</h2>
    <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM helado ";
        $resultado = $conn->query($sql);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }

     ?>

     <div class="calendario">
       <?php
        //echo $sql;
        $eventos = $resultado->fetch_assoc();
        ?>
        <pre>
          <?php var_dump($eventos); ?>
        </pre>
     </div>
     <?php $conn->close(); ?>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>
