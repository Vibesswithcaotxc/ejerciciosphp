<?php
 echo "<h1>CHECK VAR: isset ,  empty , is_null</hi>";
 $numero = 9;
 $cero = 0;
 $vacia = "";
 $varnula = NULL;

 var_dump($numero);
 //echo, print, print_r, var_dumb(valor y tipo)
 echo "<h3>Numero (entero)</h3>";
 echo "establecida ? <br>" . var_dump(isset($numero));
 echo " vacia ? <br>" . var_dump(empty($numero));
 echo " es nula ? <br> " . var_dump(is_null($numero));


 echo "<h3>Cero</h3>";
 echo "establecida ? <br>" . var_dump(isset($cero));
 echo " vacia ? <br>" . var_dump(empty($cero));
 echo " es nula ? <br> " . var_dump(is_null($cero));

 echo "<h3>Vacia</h3>";
 echo "establecida ? <br>" . var_dump(isset($vacia));
 echo " vacia ? <br>" . var_dump(empty($vacia));
 echo " es nula ? <br> " . var_dump(is_null($vacia));


 echo "<h3>VarNula</h3>";
 echo "establecida ? <br>" . var_dump(isset($varnula));
 echo " vacia ? <br>" . var_dump(empty($varnula));
 echo " es nula ? <br> " . var_dump(is_null($varnula));

 phpinfo();