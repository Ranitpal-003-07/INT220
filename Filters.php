<?php
$str="<h3>Hello World</h3>";
$newstr=filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;
echo"<br>";

$int=100;
if(filter_var($int, FILTER_VALIDATE_INT)===false)
{
    echo "Integer Is Valid";
}else{
    echo "Integer Is Not Valid";
}

echo "<br>";

$int= 0;
if(filter_var($int,FILTER_VALIDATE_INT)===0 || !filter_var($int,FILTER_VALIDATE_INT)===false){
    echo "Integer Is Valid";
}else{
    echo "Integer Is Not Valid";
}

echo "<br>";

$url="https://google.com";


?>