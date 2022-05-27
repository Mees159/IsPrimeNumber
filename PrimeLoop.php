<?php
function checkPrime($num)
{
    if($num== 1)
    return 0;
    for($i=2; $i<=$num/2; $i++)
    {
        if($num % $i ==0)
            return 0;
    }
    return 1;
}

echo '<h2>Prime Numbers between 1,000,000,000,001 and 1,000,100,000,101</h2>';

for($num=500; $num<=700; $num++){
    $flag= checkPrime($num);
    if($flag == 1){
        echo $num." ";
    }
}

echo '<h2>Not Prime Numbers betwenn 1,000,000,000,001 and 1,000,100,000,101</h2>';
for($num=500; $num<=700; $num++){
    $flag=checkPrime($num);
   if($flag !=1){
        echo $num. " ";
    }
}
?>