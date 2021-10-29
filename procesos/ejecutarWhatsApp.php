<?php 
//abrir conexión
$ch = curl_init("https://api.callmebot.com/whatsapp.php?phone=+573045985632&text=%F0%9F%93%8C%20Hola,%20haz%20recibido%20una%20nueva%20solicitud%20de%20contacto,%20puedes%20revisarla%20y%20responderla%20a%20través%20del%20siguiente%20enlace.%20www.777abogados.com/ver_solicitudes.php%20%E2%9A%96&apikey=112274");
curl_exec($ch);
echo ($ch);
curl_close($ch);
