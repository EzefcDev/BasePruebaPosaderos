<?php 

 include 'conexion.php';
 $id= $_POST['id'];
 $created_at= $_POST['created_at'];
 $update_at= $_POST['update_at'];
 $nombre= $_POST['nombre'];
 $apellido= $_POST['apellido'];
 $fechaNacimiento= $_POST['fechaNacimiento'];
 $dni= $_POST['dni'];
 $user_id= $_POST['user_id'];
 $observaciones= $_POST['observaciones'];
 $estado= $_POST['estado'];
 $lat= $_POST['lat'];
 $lng= $_POST['lng'];
 $asistido_id= $_POST['asistido_id'];
 $comunidad_id= $_POST['comunidad_id'];
 $institucion_id= $_POST['institucion_id'];

 $consulta="insert into alertas values('".$id."','".$created_at."','".$update_at."','".$nombre."','".$apellido."','".$fechaNacimiento."','".$dni."','".$user_id."','".$observaciones."','".$estado."','".$lat."','".$lng."','".$asistido_id."','".$comunidad_id."','".$institucion_id."')";
 mysqli_query($conexion,$consulta) or die (mysqli_error());
 mysqli_close($conexion);

?>