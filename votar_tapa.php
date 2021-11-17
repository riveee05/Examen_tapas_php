<?php

include 'head.php';
session_start();
if(isset($_REQUEST['votar'])){

  $codigo_tapa=$_REQUEST['codigo'];
  $_SESSION['votos'][$codigo_tapa]++;
}
                                             
echo'<form action="" method="post">
            Selecciona la Tapa a la cual quieres votar
                            <select name="codigo">
                                  <option value="">Crujiente de Arroz con rollitos de atún y verduras en escabeche</option>
                                  <option value="">La Mar de Pincho</option>
                                  <option value="">Pincho el indiano de Cantabria</option>
                                  <option value="">Tierra, sabor, tradición</option>
                                  <option value="">Txerri Beltz</option>
                                  <option value="">Esencia</option>
                                  <option value="">Rebanada de Vida</option>
                                 
                                </select>
     <br> 
     <input name="votar" type="submit"  value="Votar"/>
             
    </form>';

$_SESSION['votos']= array('TV-0001' => 0,
                          'TV-0002' => 0,
                          'TV-0003' => 0,
                          'TV-0004' => 0,
                          'TV-0005' => 0,
                          'TV-0006' => 0,
                          'TV-0007' => 0,)
;


 include 'pie.php';

