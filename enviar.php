<?php
$detino= "dianaloarca.v4@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre" . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono "\nMensaje: " . $mensaje;
mail(dianaloarca.v4@gmail.com, "contacto", $contenido);
