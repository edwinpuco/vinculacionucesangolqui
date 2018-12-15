<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>Calendario</h2>
    <?php
    try{
      require_once('includes\funciones\bd_conexion.php'):
      $sql="SELECT * FROM helados ";
      $resultado =$conn->query($sql);
    }catch(/Exception $e){
      //echo $e->getMessage();
      $helados =$resultado->fetch_assoc();
    }
     ?>
     <div class="calendario">
       <?php
       echo $sql;
        ?>
        <pre>
          <?php var_dump($helados); ?>
        </pre>
     </div>
     <?php
     $conn->close();
      ?>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>
