<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar ALumno</title>
</head>
<body>
<h1>Formulario - Registro Alumnos</h1>
<form name="form_registar_alumno" action="procesa_registro_alumno.php" method="post">
<table width="312" border="0">
  <tr>
    <th width="142" scope="col">&nbsp;</th>
    <th width="160" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>DNI:</td>
    <td><input name="dni" type="text" placeholder="Ingrese DNI" maxlength="8"></td>
  </tr>
  <tr>
    <td>Apellido Paterno:</td>
    <td><input name="apPaterno" type="text" placeholder="Ingrese Apellido Paterno" maxlength="45"></td>
  </tr>
  <tr>
    <td>Apellido Materno:</td>
    <td><input name="apMaterno" type="text" placeholder="Ingrese Apellido Materno" value="" maxlength="45"></td>
  </tr>
  <tr>
    <td>Nombres:</td>
    <td><input name="nombres" type="text" placeholder="Ingrese Nombres" value="" maxlength="45"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <input type="hidden" name="registrar_alumno" value="1">
    <td><input type="submit" name="registrar" value="Registrar Alumno"></td>
  </tr>       
</table>
</form>
</body>
</html>
