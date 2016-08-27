<?php 

//mensaje en pantalla
	echo "hola muundo";
	echo "<br>";

 /* autor:andres velez
  programa:hola mundo
  descripcion: programa que se ejecuta en el navegador 
  fecha:19-agosto-2016 
	$vai = "andresvelez";
*/
//a.
	$num=0;
	if($num<0){
		echo "es un numero negativo <br>";
	}else{
		echo"el numero NO es negativo <br>";
	}

//B..
	$var=true;
	if($var==true){
		echo "verdadero <br>";
	}else{
		echo "falso <br>";
	}

	//c...
	$num1=4;
	$primo=0;

	for ($a= 1; $a < $num1; $a++){
		if($num1 % $a==0){
			$primo++;
		}
	}if($primo ==2){
		echo "el numero".$num1."NO es primo.<br>";
	}else{
		echo "el numero" .$num1."es primo <br>";
	}

//d....
	$num2= 40;

	if ($num2 >35){
		echo "".$num2."es mayor que 35 <br>";
	}else{
		echo "".$num2."no es mayor que 35 <br>";
	}

//e.....
	$num3=99;

	if($num3>=0 && $num3<100){
		echo "".$num3." el numero es positivo y menor que 100 <br>";
	}else{
		echo "".$num3. "el numero es negativoo y menor que 100 <br>";
	}
//f......
	$num4=1;

	if ($num4>=-3 && $num4 <=27){
		echo "".$num4. "el numero pertenece al interbalo -3,27 <br>";
	}else {
		echo "".$num4. "el numero NO pertenece a el intervalo <br>";
	}


 //g.......
	$num5=2;

	if ($num5 >24 && $num5 <=50){
		echo "".$num5. "el numero pertenece al intervalo 25, 50 <br>";
	}else{
		echo "".$num5."el numero NO pertenece a el intervalo <br>";
	}
	//h........
	$num6=8;

	if ($num6 % 1<15){
		echo "el modulo ".$num6."es menor que 15 <br>";
	}else{
		echo "el modulo".$num6."es igual a 15 <br>";
	}

	//i

   $num7=34;

	if ($num7%2!=0) {
		echo "El numero es ".$num7." Impar <br>";
	} else {
			echo "El numero es ".$num7."Par<br>";
	}



 //j.....
    
	$num8=22;

	if ($num8%2==0) {
		$cuadrado = $num8*$num8;
		echo "El numero es Par y elevado al cuadrado es<br> ",$cuadrado;
	} else {
		$cubo = $num8*$num8*$num8;
		echo "El numero es Impar y elevado al cubo es<br> ",$cubo;
	}

	//k.....

    $x=11;
    $y=4;

    if($x==$y){
       echo" Son iguales<br> ";
     }
     else
        {
       if($x > $y){
            echo" el mayor es:<br> ",$x;
       }
       else{
                echo" el mayor es:<br> ",$y;
           }
        }

   //l
     
   $a1=11;
   $b2=12;
   $c3=80;

  if( $a1 > $b2 && $a1 > $c3){
       echo"El numero mayor es<br> ",$a1;
      }else{
          if($b2 >  $a1 && $b2 > $c3){
          echo"El numero mayor es<br> ",$b2;
          }else{
          echo "El numero mayor es <br>",$c3;
        }
    }
   

 ////m



    $n1=20;
	$n2=30;
	if ($n2>$n1) {
	echo "los numeros ordenados=<br>",$n1,',',$n2;
		} else {
		if ($n1>$n2) {
			echo 'los numeros ordenados=<br>',$n2,',',$n1;
		}	
	}


    
   
 //n
     
    $N1=44;
	$N2=32;
	$N3=5;
	
 if ($N1>$N2) {
	if ($N2>$N3) {
		echo 'los numeros ordenados=<br>',$N1,',',$N2,',',$N3;
	} else {
		if ($N1>$N3) {
			echo 'los numeros ordenados=<br>',$N1,',',$N3,',',$N2;
			} else {
				echo 'los numeros ordenados=<br>',$N3,',',$N1,',',$N2;
			}	
		}
	} else {
if ($N1>$N3) {
		echo 'los numeros ordenados=<br>',$N2,',',$N1,',',$N3;
		}
 		else {
				if ($N2>$N3) {
					echo 'los numeros ordenados=<br>',$N2,',',$N3,',',$N1;
				} else {
						echo 'los numeros ordenados=<br>',$N3,',',$N2,',',$N1;
					}
			}
	}	

 //o..........

    $cadena = 'abcd';

    echo strlen($cadena); 

     echo' '; 

    	if ($cadena <5 ){
         echo ' Nombre largo<br>';
    	}
    	else{
            echo ' Nombre Corto <br>';
        }

    
   

 //p,,,,


     $variable=1;  

    if(isset($variable)){
       echo'variable existe<br>';
      }else{
          echo'variable NO existe<br>';
        }    


 //q
     
   
  	 $var=90; 



     if(isset($var)){
       echo'variable tiene contenido';
      }else{
          echo'variable esta vacia';
        }


