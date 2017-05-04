<?php 


  session_start();
  if (isset($_SESSION['email'])) {
    echo "<div class='loginbox'>Welcome, ".$_SESSION['email']. "</div>";
  }
  else {
    header('location: index.php');
  }
  ?>
<?php include ('view/header.php'); ?> 
<html>
<title> User Settings</title>
<body>
</body>
<center><h1> User Settings </h1>
    <h2>Update Personal Information</h2>
    <form action="update.php" method="post">
      E-mail: <input type="text" name="email"><br>
      First name: <input type="text" name="fname"><br>
      Last name: <input type="text" name="lname"><br>
      <input type="submit">
    </form>
  </div>
</html>

<?php include ('view/footer.php'); ?> 

