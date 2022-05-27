<?php
function IsThisPrime($number){
    $yesPrime = 0;
    $sqtNum= (int)(sqrt($number)+1);
    for ($x=2; $x<=$sqtNum; $x++){
        if($number % $x == 0){
            $yesPrime=1;
        }//end if
    }//end for loop
    if($yesPrime == 0)
        echo("Number". $number . "IS prime");
        else{
            echo("Number". $number . "IS NOT prime");
        }// end if-else block
}//end IsThisPrime()
IsThisPrime(10000);