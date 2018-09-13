<?php
	echo "<br> Deret Rekursif<br>";
	$pembatas = 5;
  	function rekursif($i = 1){
  		global $pembatas;
  		echo "*";
    	$i++;
   			if($i <= $pembatas){
      		rekursif($i);
    	}
    		else{
    		echo"<br>";
    		$pembatas--;
    			if ($pembatas !=0){
    				rekursif();
    			}
    		}
  	}
 rekursif();
echo "<br>";
echo "<br>";
echo "*======================*<br><br>";
echo "Deret Piramida";
echo "<br>";

 $garis = 1;
 	function rekursifb($o= 1){
 		global $garis;
 		echo "$o";
 		$o++;
 			if ($o<=$garis){
 			rekursifb($o);
 	}
 	else{
 		echo"<br>";
 		$garis++;
 		if($garis <= 5){
 			rekursifb();
 		}
 	}
 	}
rekursifb();
 ?>
