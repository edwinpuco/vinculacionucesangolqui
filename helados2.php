<?php include_once 'includes/templates/header.php'; ?>
    <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT * FROM helados ";
        $resultado = $conn->query($sql);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
     ?>
     <section class="helados contenedor seccion">
       <h2>Nuestros helados</h2>
       <ul class="lista-helados clearfix">
         <?php while($galeria = $resultado->fetch_assoc()){ ?>
           <!--pre>
           <?php //var_dump($galeria); ?>
           </pre-->
           <li>
             <div class="helado">
               <a class="galeria-info" href="#helado<?php echo $galeria['hels_id']; ?>">
                 <img src="img/helados/<?php echo $galeria['hels_imagen']; ?>" alt="sticker1">
                 <p><?php echo $galeria['hels_nombre']; ?></p>
               </a>
             </div>
           </li>
           <div style="display:none;">
             <div class="galeria-info" id="galeria<?php echo $galeria['hels_id']; ?>">
               <h2><?php echo $galeria['hels_nombre']; ?></h2>
               <img src="img/helados/<?php echo $galeria['hels_imagen']; ?>" alt="sticker1">
               <p><?php echo $galeria['hels_descripcion']; ?></p>
             </div>
           </div>
         <?php } ?>
       </ul>
     </section>
     <?php $conn->close(); ?>
<?php include_once 'includes/templates/footer.php'; ?>
