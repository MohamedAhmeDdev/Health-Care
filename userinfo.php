<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css./userinfo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="sidebar" id="side">
    <div id="menu-icon">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <h3 id="logo" class="logo">Health Care</h3>
    <ul id="nav-list">
       <li>
        <a href="dashboard.php">
            <i class="bi bi-speedometer2"></i>
            <span class="links_name">DASHBOARD</span>
        </a>
       </li>
       <li>
        <a href="userinfo.php">
            <i class="bi bi-person-circle"></i>
            <span class="links_name">USERS</span>
        </a>
       </li>
       <li>
        <a href="">
            <i class="bi bi-person-dash"></i>
            <span class="links_name">ABOUT</span>
        </a>
       </li>
       <li>
        <a href="">
            <i class="bi bi-question-circle"></i>
            <span class="links_name">HELP</span>
        </a>
       </li>
       <li>
        <a href="settings.php">
            <i class="bi bi-gear"></i>
            <span class="links_name">SETINGS</span>
        </a>
       </li>
    </ul>
</div>
      <section class="home-section">
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
      </section>

    <script src="index.js"></script>
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