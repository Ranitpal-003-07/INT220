<?php
$cookie_name="user";
$cookie_value="Ranit Pal";
setcookie($cookie_name, $cookie_value, time()+12);

if(isset($_COOKIE[$cookie_name])){
    echo "Cookie".$cookie_name."has been set <br/>";
    echo "value is".$_COOKIE[$cookie_name];
}else{
    echo"Cookie".$cookie_name."is not set";
}
?>