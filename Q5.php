5.checking for discount eligibility
<?php
$orderamt=1200; //example order amt
if($orderamt > 1000)
{
    echo "congratulations you qualify for a discount";

}
else{
    echo "you need to spend more to qualify for the discount";
}
?>