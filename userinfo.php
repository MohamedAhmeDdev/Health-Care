<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="css/userinfo.css">
</head>
<body>
    
<?php include './db.php';
    $statement= $pdo->prepare("SELECT * FROM regestrations");
    $statement->execute();
    $regestrations = $statement->fetchall(PDO::FETCH_ASSOC);
    ?>

<table class="account-table" border="1">

<thead>
    <tr>
        <th>account ID</th>
        <th>FirstName</th>
        <th>MidleName</th>
        <th>LastName</th>
    </tr>
    
</thead>

<tbody>
     <?php foreach($regestrations as $regestration):?>
    <tr>
        <td><?php echo $regestration["userID"]; ?></td>
        <td><?php echo $regestration["userName"]; ?></td>
        <td><?php echo $regestration["userEmail"]; ?></td>
        <td><?php echo $regestration["accountCreatedOn"]; ?></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>


</body>
</html>






<!-- <div class="div-container">
      <div class="users-div">
      <?php foreach($regestrations as $regestration):?>
        <h6>User ID:</h6><p><?php echo $regestration["userID"]; ?></p>
        <h6>Name:</h6></h6><p><?php echo $regestration["userName"]; ?></p>
        <h6>User email:</h6></h6><p><?php echo $regestration["userEmail"]; ?></</p>
        <h6>Account created:</h6></h6><p><?php echo $regestration["accountCreatedOn"]; ?></</p>

        <?php endforeach; ?>
     </div>
    </div> -->