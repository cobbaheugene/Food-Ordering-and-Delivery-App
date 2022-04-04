<?php

echo "Hello World";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Form</title>
</head>
<body>

    <form style="float:right;" action="/welcome.php" method="post">
        <fieldset>
        <legend>Personal Information</legend>
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname"  ><br>
        
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" ><br>
        
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email"> <br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            
            <label for="car">Choose your car:</label><br>
            <select name="car" id="car">
                <option placeholder="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select><br>

            <input type="submit" value="submit" actio>
            
           
        </fieldset>
    </form>
    
</body>
</html>
