<?php
$str="<h3>Hello World</h3>";
$newstr=filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;
echo"<br>";

$int=100;
if(!filter_var($int, FILTER_VALIDATE_INT)===false)
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
$url=filter_var($url,FILTER_SANITIZE_URL);
if(!filter_var($url,FILTER_VALIDATE_URL)===false){
    echo "URL Is Valid";
}else {
    echo "URL Is Not Valid";
}
echo "<br>";

$email="abc.232342@yohoo.com";
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    echo "$email is a valid email address";
}else{
    echo "$email is not a valid email address";
}
echo "<br>";


$ip="127.0.0.1";
if(!filter_var($ip,FILTER_VALIDATE_IP)===false){
    echo "$ip is a valid email address";
}else{
    echo "$ip is not a valid email addresss";
}

?>