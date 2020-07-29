<?php
// Ingresa tu clave secreta.....
define("RECAPTCHA_V3_SECRET_KEY", 'TU-CLAVE-SECRETA');
$token = $_POST['token'];
$action = $_POST['action'];
$user = $_POST['user'];
$pass = $_POST['pass'];

 
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
 
// verificar la respuesta
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    // Si entra aqui, es un humano, puedes procesar el formulario
  echo "ok!, eres un humano";
} else {
    // Si entra aqui, es un robot....
  echo "Lo siento, parece que eres un Robot";
}







