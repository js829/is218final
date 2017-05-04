<!DOCTYPE html>
<html>
<head>

<?php 
include ('view/header.php'); 
?> 
  <title>To Do List</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <?php
  session_start();
  if (isset($_SESSION['email'])) {
    echo "<div class='loginbox'>Welcome, ".$_SESSION['email']. "</div>";
  }
  else {
    header('location: index.php');
  }
  ?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>

<div class="logbutton">
<a class="btn btn-danger logout" href="logout.php" > Logout</a> </div>

<div class="setbutton">
<a class="btn btn-info" href="settings.php" > Settings </a>  


</div>




<style>
body {

  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: d9d9d9;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  border: none;
  width: 75%;
  padding: 19px;
  float: left;
  font-size: 20px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.addBtn:hover {
  background-color: #bbb;
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
</head>
<body>

<link rel="stylesheet" type= "text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Add an item...">
  <span onclick="newElement()" class="addBtn">Add to List</span>
 

</div>

<ul id="myUL">
  <li>Do homework</li>
  <li class="checked">Pay credit card</li>
  <li>Register for classes</li>
</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// deleting item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// checking items
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// add item to list
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You cannot leave this blank!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>
</body>
</html>
<?php include ('view/footer.php'); ?> 