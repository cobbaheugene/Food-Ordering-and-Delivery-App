<?php

echo "Hello World";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <form style="float:right;" action="/welcome.php" method="post">
        <fieldset>
        <legend>Login here with your Details</legend>
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname"  ><br>
        
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" ><br>
        
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email"> <br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            
            <br>

            <input type="submit" value="Login" action>
            
           
        </fieldset>
    </form>
    
</body>
</html>
