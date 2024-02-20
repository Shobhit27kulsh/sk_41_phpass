3.fitness app
<?php
function determinefitneeslevel($steps)
{
    if ($steps<5000)
    {return "begginer";}
    elseif($steps>=5000&&$steps<=10000)
    {return "intermediate";}
    else{return "advanced";}

}
//ex-
$steps=7500;
$fitnesslevel=determinefitnesslevel($steps);
echo "fitness level is ".$fitnesslevel;
?>