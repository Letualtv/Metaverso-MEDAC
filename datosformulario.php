<?php

if (isset($_POST)) {
  $nombre = $_POST["nombre"];
  $telefono = $_POST["phone"];
  $email = $_POST["email"];
  $cp = $_POST["cp"];
  $pregunta = $_POST["pregunta"];
  
  $destinatario = "correo@demedac.es";                  /* Insertar correo válido */
  $asunto = "Nuevo mensaje desde Salón de Actos";
  
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Telefono: $telefono\n\n";
  $contenido .= "Email: $email\n\n";
  $contenido .= "CP: $cp\n\n";
  $contenido .= "Pregunta: \n$pregunta\n\n";
  
  $headers = "From: $nombre <$email>";
  
  mail($destinatario, $asunto, $contenido, $headers);
  
  echo "¡Gracias por ponerte en contacto con nosotros! Te responderemos pronto.";
} else {
  echo "Ha ocurrido un error al procesar el formulario.";
}

header('Location: index.php');

?>