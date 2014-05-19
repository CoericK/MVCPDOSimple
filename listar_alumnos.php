<?php
require_once('controladores/alumno.php');
$controladorAlumno = new ControladorAlumno();
$alumnos = $controladorAlumno->listar_alumnos();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>

<div>
  <?php if(isset($_GET['registro'])):?>
    <?php if($_GET['registro'] == "ok"):?>
      <h2>Alumno agregado correctamente!</h2>
    <?php else:?>
      <h2>ERROR: No se ha podido agregar el alumno!</h2>
    <?php endif;?>
<?php endif;?>
</div>
<h1>Listar Alumnos</h1>

<table width="590" border="1">
  <tr>
    <th width="45" align="center" scope="col">ID</th>
    <th width="90" align="center" scope="col">DNI</th>
    <th width="180" align="center" scope="col">Apellido Paterno</th>
    <th width="180" align="center" scope="col">Apellido Materno</th>
    <th width="180" align="center" scope="col">Nombres</th>

  </tr>
  <?php foreach($alumnos as $alumno):?>
    <tr>
      <td align="center"><?php echo $alumno['id']?></td>
      <td align="center"><?php echo $alumno['dni']?></td>
      <td align="center"><?php echo $alumno['apellido_pat']?></td>
      <td align="center"><?php echo $alumno['apellido_mat']?></td>
      <td align="center"><?php echo $alumno['nombres']?></td>
    </tr>
  <?php endforeach;?>
</table>

</body>
</html>
