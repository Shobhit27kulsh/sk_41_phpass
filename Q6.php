6.php
<?php
$storedusername="user123";
$storedpassword="password123";
$userinputusername="user123";
$userinputpassword="password123";
if($usrinputusername===$storedusername&&$userinputpassword===$storedpassword)
{
    echo "login successful";

}
else{
    echo "invalid";
}
?>