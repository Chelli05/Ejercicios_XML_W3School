<?php
$xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>");
echo $xml;
?>

<!--CREA UN XML QUE MUESTRA EL CONTENIDO DE UNA ETIQUETA SIN MOSTRAR LOS HIJOS-->