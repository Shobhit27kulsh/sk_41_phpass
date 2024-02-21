<?php
$articletitle="this is a very long article title exceeding 50 character limit";
if(strlen($articletitle)>50)
{
    $truncatedtitle=substr($articletitle,0,50);
    echo $truncatedtitle;
}
else{
    echo $articletitle;
}
?>