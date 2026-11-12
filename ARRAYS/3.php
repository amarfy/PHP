<?php
$tarea = ['comprar pan','Acudir cita medica','Hacer Ejercicio Programacion'];

array_unshift($tarea,"Estudiar Examen Esta Tarde");
array_push($tarea, "Revisar Correo Del instituto");
array_pop($tarea);
array_shift($tarea);
print_r($tarea);



?>