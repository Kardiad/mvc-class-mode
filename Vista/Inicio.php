
<h1>Esto es index vamos a loguear a alguien</h1>

<form action="<?=url_route?>funkoPop" method="post" name='form'>
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="apellidos" placeholder="apellidos">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="password" name="contrasena" placeholder="contraseña">
    <input type="mail" name="mail" placeholder="mail">
    <input type="submit" value="pincha">
</form>

<a href="<?=url_route?>postInicio">Pincha para ver usuarios</a>