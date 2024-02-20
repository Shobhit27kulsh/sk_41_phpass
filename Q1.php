1.shopping create_function
<?php
function calculatetotalprice($items)
{
    $totalprice=0;
    foreach($items as $item)
    { 
        $totalprice+=$item['price'];
    }
    if($totalprice > 5000)
    {
        $discountedprice=$totalprice * 0.9;
        return $discountedprice;


    }
    else{
        return $totalprice;


    }
}
//for examaple-->
$items=array(array("item"=>"shirt","price"=>1500),("item"=>"shirt","price"=>1500),("item"=>"shirt","price"=>1500));
$totalprice=calculatetotalprice($item);
echo "total price is Rs.".$totalprice;