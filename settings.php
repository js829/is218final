<?php
require_once 'database.php';
//place this code in the pages, which you need to authenticate
 session_start();
  if (isset($_SESSION['email'])) {
    echo "<div class='loginbox'>Welcome, ".$_SESSION['email']. "</div>";
  }
  else {
    header('location: index.php');
}

?>

<?php include ('view/header.php'); ?> 
<?php 

 $userfname = $_POST['fname'];
 $userlname = $_POST['lname'];
 $sessions = $_SESSION['email'];

  $sql = "UPDATE accounts SET fname = '$userfname', lname = '$userlname' WHERE username = '$sessions'";
  $result= runQuery($sql);

  if($result){
  header("location:../dashboard.php");
  }

  else {
  echo error_reporting(E_ALL);
  } 
  ?>


<fieldset>
    <legend>Settings</legend>
  
  <label>First Name *</label>
    <input name="fname" type="text" placeholder="Type something…" value="<?php echo $userfname; ?>" >
  <br/>
  <label>Last Name *</label>
    <input name="lname" type="text" placeholder="Type something…" value="<?php echo $userlname; ?>" >
  <br/>

</select>
   
  <br/>
    <button type="submit" class="btn">Update</button>
  </fieldset>
</form>
<?php include ('view/footer.php'); ?> 
