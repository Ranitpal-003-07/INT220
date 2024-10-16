<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengthy Form</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $nameErr=$emailErr=$genderErr=$addressErr=$websiteErr="";
    $name=$email=$gender=$address=$website="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr="Name is required";
        }else{
            $name=test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }else{
            $email=test_input($_POST["email"]);
        }
        if(empty($_POST["address"])){
            $addressErr="Bhai Adress Likho nhi to gadi age nhi badega";
        }else{
            $address=test_input($_POST["address"]);
        }
        if(empty($_POST["website"])){
            $websiteErr= "";
        }else{
            $website=test_input($_POST["website"]);
        }
        if(empty($_POST["gender"])){
            $genderErr="Gender is required";
        }else{
            $gender=test_input($_POST["gender"]);
        }
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>PHP Form Validation</h2>
    <p><span class="error">Required Field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        Name: <input type="text" name="name">
        <span class="error"><?php echo $nameErr?></span>
        <br><br>
        E-mail:<input type="email" name="email">
        <span class="error"><?php echo $emailErr?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr?></span>
        <br><br>
        Address: <textarea name="address" rows="5" col="40"></textarea>
        <span class="error"><?php echo $addressErr?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Othes">Others
        <span class="error"><?php echo $genderErr?></span>
        <br><br>
        <input type="Submit" name="submit" value="Submit">
    </form>
    <?php
    echo "Name: ".$name;
    echo "Email: ".$email;
    echo "Website: ".$website;
    echo "Address: ".$address;
    echo "Gender: ".$gender;
    ?>
</body>
</html>