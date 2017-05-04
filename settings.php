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
<head>
<div class="logbutton">
<a class="btn btn-danger logout" href="logout.php" > Logout</a> </div>

<div class="setbutton">
<a class="btn btn-info" href="todo.php" > Back to list </a> </div>
</head>
<body>
  <div class="main-login main-center">

</body>
<center><h1 class="title">User Settings</h1></center>
                        <hr />
    <h2>Update Personal Information</h2>
    <center><form action="update.php" method="post">
      E-mail: <input type="text" name="email"><br>
      First name: <input type="text" name="fname"><br>
      Last name: <input type="text" name="lname"><br>
      <input type="submit"></center>
    </form>
  </div>
</html>

<style>
body {
  margin: 0;
  min-width: 250px;
}
/* logout button */
.logbutton {
  background-color: #f44336; /* red */
  float:right; 
  margin: 0 0 5px 5px;
    border: none;
    border-radius: 3px;
    color: white;
    padding: 7px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;  
}
/* settings button */
.setbutton {
  background-color: #ffad33; /* orange */
  float:right; 
    border: none;
    border-radius: 3px;
    color: white;
    padding: 7px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;  
}
</style>
<?php include ('view/footer.php'); ?> 
