<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


img{
    max-width: fit-content;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}




.container {
  border-radius: 5px;
  background-color: lightseagreen;
  padding: 10px;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

button{
 padding : 10px;
  border: none;
background-color: orange;
border-radius: 10px;
}
button:hover{
background-color: orangered;
}
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<?php 
include 'navbar.php';
?>

<div class="container">
  <div style="text-align:center">
    <h2 style="font-size: 30px; font-family: lucida handwriting; color: orange;">Contact Us</h2>
    
  </div>
  <div class="row">
    <div class="column">
      <img src="https://image.freepik.com/free-vector/bank-building-with-cityscape_1284-52265.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="name">Name</label>
        <input type="text" id="fname" name="name" placeholder="Enter Full Name">
       
        <label for="email">Email</label>
        <input type="text" id="lname" name="email" placeholder="Enter email">
        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="write your queries over here.." style="height:170px"></textarea>
       <button onclick="myfunction()">Submit</button>
      </form>
    </div>
  </div>
</div>

<script>
 function myfunction(){
var url = "contact_us"
window.location(url);
}
</script>



<?php 
include ('footer.html');
?>

</body>
</html>