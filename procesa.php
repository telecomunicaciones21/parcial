<?php

$nombre=$_GET['nombre'];
$documento=$_GET['documento'];
$puntaje=$_GET['puntaje'];
$carrera=$_GET['carrera'];
$ingreso=$_GET['ingreso'];
$smin=737717;
$var='';
$ban=0;

if ($carrera==1 && $puntaje>=50 )
		$var='fue admitido a la carrera de Ingeniería de Minas ';
else if ($carrera==2 && $puntaje>=52 )
		$var='fue admitido a la carrera de Ingeniería Mecánica ';
else if ($carrera==3 && $puntaje>=54 )
		$var='fue admitido a la carrera de Ingeniería Producción Industrial ';
else if ($carrera==4 && $puntaje>=56 ) 
	    $var='fue admitido a la carrera de Ingeniería Civil ';
else if ($carrera==5 && $puntaje>=58 ) 
	    $var='fue admitido a la carrera de Ingeniería Electromecánica ';        
else if ($carrera==6 && $puntaje>=60 ) 
	    $var='fue admitido a la carrera de Ingeniería Electrónica ';
else if ($carrera==7 && $puntaje>=62 ) 
	    $var='fue admitido a la carrera de Ingeniería de Sistemas ';
else

switch ($carrera) {
        case 1:
        $var='no fue admitido a la carrera de Ingeniería Minas ';
        $ban=1;
        break;
 
        case 2:
        $var='no fue admitido a la carrera de Ingeniería Mecánica ';
        $ban=1;
        break;
        
        case 3:
        $var='no fue admitido a la carrera de Ingeniería Producción Industrial ';
        $ban=1;
        break;

        case 4:
        $var='no fue admitido a la carrera de Ingeniería Civil ';
        $ban=1;
        break;
       
        case 5:
        $var='no fue admitido a la carrera de Ingeniería Electromecánica ';
        $ban=1;
        break;

        case 6:
        $var='no fue admitido a la carrera de Ingeniería Electrónica ';
        $ban=1;
        break;

        case 7:
        $var='no fue admitido a la carrera de Ingeniería de Sistemas ';
        $ban=1;
        break;


        default:
        
        break;
 }

if ($ingreso>0 && $ingreso<=4000000 && $ban==0)
		$smin=$smin*0.5;
else if ($ingreso>4000000 && $ingreso<=8000000 && $ban==0)
		$smin=$smin*1;
else if ($ingreso>8000000 && $ingreso<=10000000 && $ban==0)
		$smin=$smin*1.5;
else if ($ingreso>10000000 && $ingreso<=15000000 && $ban==0) 
	    $smin=$smin*2;
else if ($ingreso>15000000 && $ingreso<=20000000 && $ban==0) 
	    $smin=$smin*2.5;      
else if ($ingreso>20000000 && $ban==0) 
	    $smin=$smin*3;
else
        $smin=0;



echo  "Señor(a), $nombre ".", con documento de indentidad numero: $documento"."    : $var".", El valor a pagar es: $smin";


?>