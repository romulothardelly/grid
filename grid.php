
<?php

if ( isset($_REQUEST['P'])){

    $poles=json_decode($_REQUEST['P']);
    


    //$poles=json_encode($_REQUEST['P']);   // var_dump($poles); // this is just to see the result (you can remove it
    //$poles=($_REQUEST['P']);    
  //  echo var_dump($poles); // this is just to see the result (you can remove it
 function calcule_angle($p1,$p2){
    $dy=$p2[1]-$p1[1];
    $dx=$p2[0]-$p1[0];
    $dysignal=($dy>0)?1:-1;
    $a=($dx==0)?pi()/2*$dysignal:atan($dy/$dx);
    return $a;

 } 
 $a1=calcule_angle($poles[0],$poles[1]);
    $a2=calcule_angle($poles[1],$poles[2]);
$a=[$a1,$a2,$a1*180/pi(),$a2*180/pi()];
echo json_encode($a);
   //echo $poles
}

?>