<?php
setcookie("test_cookie","test",time()+10);
if(count($_COOKIE)>0){
    echo "cookies are enabled";
}else{
    echo "langde are disabled";
}
?>