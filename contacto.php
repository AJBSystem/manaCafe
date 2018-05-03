<?php
$des = "bonillaarnaldo@hotmail.com";
$nom = $_POST['name'];
$cor = $_POST['email'];
$asu = $_POST['subject'];
$men = $_POST['message'];
$contenido = "Nombre: ". $nom ."<br>" . "\nCorreo: ". $cor ."<br>" . "\nAsunto: ". $asu . "<br>" . "\nMensaje: ". $men; 

	mail($des, $asu, $contenido);
	header("Location:gracias.html");