<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>Calendario de eventos</h2>
    <?php
      try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT hel_id, hel_nombre, hel_fecha, hel_hora, cat_nombre, cat_icono, hels_nombre ";
        $sql .= " FROM helado ";
        $sql .= " INNER JOIN categoria ";
        $sql .= " ON helado.id_cat_evento = categoria.cat_id ";
        $sql .= " INNER JOIN helados ";
        $sql .= " ON helado.id_inv = helados.hels_id ";
        $sql .= " ORDER BY hel_id ";
        /*$sql = " SELECT h.hel_id, h.hel_nombre, h.hel_fecha, h.hel_hora,c.cat_nombre, hs.hels_nombre ";
        $sql .= " FROM helado as h, categoria as c, helados as hs ";
        $sql -= " WHERE helado.id_cat_evento = categoria.cat_id ";
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
        <!--pre>
          <?php// var_dump($eventos); ?>
          <?php// var_dump($evento); ?>
          <?php //var_dump($calendario); ?>
        </pre-->
      <?php } //while de fetch_assoc() ?>

      <?php
      foreach ($calendario as $dia => $lista_eventos) { ?>
        <h3>
          <i class="fa fa-calendar"></i>
          <?php //echo $dia; ?>
          <?php
          setlocale(LC_TIME, 'es_ES.UTF-8');
          setlocale(LC_TIME, 'spanish');
          //echo date("F j, Y", strtotime($dia));
          echo strftime("%A, %d de %B del %Y", strtotime($dia));
           ?>
        </h3>
        <?php foreach ($lista_eventos as $evento) { ?>
          <div class="dia">
            <p class="titulo"><?php echo $evento['nombre']; ?></p>
            <p class="hora">
              <i class="fa fa-calendar"></i>
              <?php echo $evento['fecha'] . " ". $evento['hora']; ?>
            </p>
            <p>
              <i class="<?php echo $evento['icono']; ?>"></i>
              <?php echo $evento['catnombre']; ?>
            </p>
            <p>
              <i class="fa fa-calendar"></i>
              <?php echo $evento['helsnombre']; ?></p>
            </p>
            <!--pre>
              <?php //var_dump($evento); ?>
            </pre-->
          </div>
        <?php }//finforeach eventos ?>
      <?php }//fin foeach de dias ?>
      <!--pre>
        <?php //var_dump($calendario); ?>
      </pre-->

     </div>
     <?php $conn->close(); ?>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>
