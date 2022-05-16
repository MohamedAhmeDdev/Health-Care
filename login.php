<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>


            <section class="comtainer">
                <form class="form" id="login">
                    <p id="error"></p>
                    <label for="email">Email:</label><br>
                    <input class="input"  type="email" placeholder="Email"><br><br>
                    <p></p>
                    <label for="lname">Password</label><br>
                    <input  class="input"  type="password" placeholder="Password"><br><br>
                    <input id="submit" type="submit" value="SUBMIT">
                    <br>
                    <a class="create" id="linkCreatAccount" href="regestration.php">Create Account</a>
                </form>
            </section>


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="index.js"></script>
    </body>
</html>