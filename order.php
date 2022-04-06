<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mc Jean's Food</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">

</head>


<body>
    <section class="order" id="order">

        <h3 class="sub-heading"> order now <?php echo $_GET['id'] ?> </h3>
        <h1 class="heading"> Fill the form to confirm your order </h1>
    
        <form action="">
    
            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" placeholder="enter food name">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="test" placeholder="extra with food">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how much</span>
                    <input type="number" placeholder="how many orders">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
    
            <input type="submit" value="order now" class="btn">
    
        </form>
    
    </section>

    
    <section class="footer">
        <div class="container text-center">
            <h3>All rights reserved. Designed By <link rel="stylesheet" href="https://www.github.com/cobbaheugene">Eugene Cobbah</h3>
        </div>
    </section>
    
</body>
</html>