<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr  = "";
$fname = $lName = $Email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["First Name"])) {
    $firstnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["FirstName"]);
  }
  if (empty($_POST["Last Name"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["LastName"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $Email = test_input($_POST["email"]);
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}
?>


<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $FirstName;
echo "<br>";
echo $LastName;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
?>
<?php
// define variables and set to empty values
$FirstName = $LastName  $email =  $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $FirstName = test_input($_POST["FirstName"]);
  $LastName = test_input($_POST["LastName"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}




<div class="container">
                    <form action="/lafabriquedupetitmange.php">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">First Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Your first name..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-25">
                                    <label for="Email">Email</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="Email" name="Email" placeholder="Your email..">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Leave a feedback</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="Leave a feedback" placeholder="Write your feedback.."
                                    style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            















<!--        section conter test
<div class="row">
    <div class="column">
      <div class="card">
        <p><i class="fa fa-user"></i></p>
        <h3>11+</h3>
        <p>Partners</p>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <p><i class="fa fa-check"></i></p>
        <h3>55+</h3>
        <p>Projects</p>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <p><i class="fa fa-smile-o"></i></p>
        <h3>100+</h3>
        <p>Happy Clients</p>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <p><i class="fa fa-coffee"></i></p>
        <h3>100+</h3>
        <p>Meetings</p>
      </div>
    </div>
  </div>

<!--section conter testend-->



    <!-- 


                <form>
                    <input name="First name" placeholder="Name" type="text" required /><br/>
                    <input name="email" placeholder="Email" type="email" required /><br/>
                    <textarea name="message" placeholder="Message" required ></textarea>
                    <input type="submit" value="SEND" class="submit" />
                </form>
            </div>















<!----->

   
        <!-- footer start -->

        
        <!-- footer end -->
            <div class="copyright">
                &copy; 2019 Greg. All rights reserved.
            </div>
    </body>
</html>