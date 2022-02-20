<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="JS/effectlogin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Login</title>
</head>

<body>
    <div class="materialContainer">


        <div class="box">

            <div class="title">LOGIN</div>

            <div class="input">
                <label for="name">Username</label>
                <input type="text" name="name" id="name">
                <span class="spin"></span>
            </div>

            <div class="input">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass">
                <span class="spin"></span>
            </div>
            <div style="margin: 20px; text-align: center;">
                <h5 class="titlelogin" style="text-align: center; margin-top: 10px;">Login with:</h5>
                <a class="icon"  href="#"><i class="fab fa-facebook"></i></a>
                <a class="icon" href="#"><i class="fab fa-google"></i></a>
                <a class="icon" href="#"><i class="fab fa-github"></i></a>
            </div>


            <div class="button login">
                <button><span>GO</span> <i class="fa fa-check"></i></button>
            </div>
            <a href="" class="pass-forgot">Forgot your password?</a>

        </div>

        <div class="overbox">
            <div class="material-button alt-2"><span class="shape"></span></div>

            <div class="title">REGISTER</div>

            <div class="input">
                <label for="regname">Username</label>
                <input type="text" name="regname" id="regname">
                <span class="spin"></span>
            </div>

            <div class="input">
                <label for="regpass">Password</label>
                <input type="password" name="regpass" id="regpass">
                <span class="spin"></span>
            </div>

            <div class="input">
                <label for="reregpass">Repeat Password</label>
                <input type="password" name="reregpass" id="reregpass">
                <span class="spin"></span>
            </div>

            <div class="button">
                <button><span>NEXT</span></button>
            </div>



        </div>

    </div>
</body>

</html>