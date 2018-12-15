<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>Calendario de eventos</h2>
    <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT hel_id, hel_nombre, hel_fecha, hel_hora, cat_nombre, cat_icono, hels_nombre ";

        $sql .= " WHERE h.id_cat_evento = c.cat_id AND h.hel_id =hs.hels_id ";*/
        $resultado = $conn->query($sql);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }

     ?>

     <div class="calendario">
       <?php
        //echo $sql;
        $calendario = array();
        while($eventos = $resultado->fetch_assoc()){
          $fecha = $eventos['hel_fecha'];
          $evento = array(
            'nombre' => $eventos['hel_nombre'],
            'fecha' => $eventos['hel_fecha'],
            'hora' => $eventos['hel_hora'],
            'catnombre' => $eventos['cat_nombre'],
            'icono' => $eventos['cat_icono'],
            'helsnombre' => $eventos['hels_nombre']
          );
          //$calendario[] = $evento;
          $calendario[$fecha][] = $evento;
           ?>

     </div>
     <?php $conn->close(); ?>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>
