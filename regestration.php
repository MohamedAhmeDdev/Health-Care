
<?php include './db.php'?>


<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


// // error checking

//     $errors = [];
// if(!$firstName){
//     $errors[] ='FirstName Is Required';
// }


// if(!$email){
//     $errors[] = 'Email Is Required';
// }


// if(!$password){
//     $errors[] ='Password Is Required';
// }
// else if($password <=){
//     $errors[] ='Password Must Be At Least 14';
// }



// checking if the email has been used

// $select = " SELECT * FROM regestrations WHERE userEmail = '$email' ";
// //$result = mysqli_query( $select,$pdo);
// $stmt = $pdo->prepare($select);
// $stmt->execute();
// var_dump($stmt);
// die();
// if(mysqli_num_rows($stmt) > 0){

//    $error[] = 'user already exist!';



// sending data to the database
if(empty($errors)){
    $statement = $pdo->prepare("INSERT INTO regestrations(userName,userEmail,userPassword)
    VALUES(:name,:email,:password)");
    $statement->bindValue("name",$firstName);
    $statement->bindValue("email",$email);
    $statement->bindValue("password",$password);
    $statement->execute();
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>

    <section class="container">
    <form class="form" id="creatAccount" method="POST">
        <?php if (!empty($errors)):?>
        <?php foreach ($errors as $error):?>
        <p id="error"><?php echo $error; ?></p>
        <?php endforeach;?>
        <?php endif;?>
    <label for="fname">Name:</label> <br>
    <input class="input" name="name" id="name" type="text" placeholder="first Name">
    <br><br>
    <label for="email">Email:</label><br>
    <input class="input"  name="email" id="email"  type="email" placeholder="Email">
    <br><br>
    <label for="lname">Password</label><br>
    <input class="input"  name="password" id="password"  type="text" placeholder="Password">
    <br><br>
    <button type="submit" id="submit" value="SUBMIT"> Submit</button>
    <br>
    <a class="login"  name="submit" id="linkLogin" href="login.php">Login in</a>

    </form>    
    </section>

    <script src="app.js"></script>
</body>
</html>   
    </section>
    <script src="index.js"></script>
</body>
</html>