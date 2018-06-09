<?php
/**
 * Created by PhpStorm.
 * User: luisc
 * Date: 25/7/2016
 * Time: 8:58 PM
 */

$name = $_POST['name'];
$dni = $_POST['dni'];
$address = $_POST['address'];
$district = $_POST['district'];
$email = $_POST['email'];
$cellphone = $_POST['cellphone'];
$radio = $_POST['radio'];
$message = $_POST['message'];

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: info@prettyprincess.pe' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail('info@prettyprincess.pe', 'Pretty Princess', 'Nombre: '.$name."\n\nDNI: ".$dni
    ."\n\nDireccion: ".$address."\n\nDistrito: ".$district."\n\nCorreo: ".$email."\n\nCelular: ".$cellphone."\n\nServicio: ".$radio
    ."\n\nMensaje: ".$message, $headers);
header("Location: index.html");
die();