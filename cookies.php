<html>
    <body>
   <?php
   echo time();
   setcookie("User","Ranit",time()+300,"/");
   echo "<br/> The cookie is set";
   ?>
    </body>
</html>